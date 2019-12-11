<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValidateUser;
use App\Http\Requests\Admin\ValidateUserRole;
use App\Models\Admin\UserRole;
use App\Models\Admin\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Session;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function __construct(User $user, UserRole $userRole)
    {
        $this->user = $user;
        $this->userRole = $userRole;
    }
    public function register(ValidateUser $req_user, ValidateUserRole $req_user_role){

        $validateUser = $req_user->validated();
        $validateUserRole = $req_user_role->validated();

        DB::transaction(function() use ($validateUser, $validateUserRole)
        {
            $createUser = $this->user->createUser($validateUser);

            $validateUserRole['user_id'] = $createUser->id;
            $validateUserRole['operid'] = $createUser->operid;

            if(isset($validateUserRole['role'])){
                $assignUserRole = $this->userRole->createUserRole($validateUserRole);
            }

            return redirect()->route('regis');
        });
    }

    public function login(Request $request){

        $client = new Client();

        $url = config('services.endpoint.url');
        $postData = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'username' => $request['loginid'],
                'password' => $request['password'],
            ]
        ];

        try{

            $response = $client->post($url.'/login', $postData)->getBody()->getContents();
            $abstractResponse = json_decode($response);

            $getRoles = $abstractResponse->data->roles;
            $getToken = $abstractResponse->data->token;
            $operId = $abstractResponse->data->user_details[0]->operation_id;
            $brCode = $abstractResponse->data->user_details[0]->branch->code;
            $workflow = (isset($abstractResponse->data->workflow)) ? $abstractResponse->data->workflow : array();

            session(['API_token' => 'Bearer '.$getToken, 'user_roles' => $getRoles, 'operid' => $operId, 'brcode' => $brCode, 'workflow' => $workflow]);

            $adminRoles = ['SADM','ADM'];
            $compareArr = array_intersect($adminRoles, $getRoles);

            $result = collect($compareArr)->isEmpty() ? false : true;

            if(!$result){
                toast('You are successfully login!','success')->position('centre');
                return redirect()->route('workbasket');

            }

            else {
                toast('You are successfully login!','success')->position('centre');
                return redirect()->route('audit');
            }

        } catch (\GuzzleHttp\Exception\BadResponseException $e){
            if ($e->getCode() == 400){
                toast('Invalid Request. Please enter a username or a password.','error')->position('centre');
                return redirect()->route('page_login');

            } else if ($e->getCode() == 401){
                toast('Your credentials are incorrect. Please try again.','error')->position('centre');
                return redirect()->route('page_login');
            }

            else{
                toast('Something went wrong with your credentials!','error')->position('centre');
                return redirect()->route('page_login');
            }

        }

    }

    public function logout(){

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $postData = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],

        ];

        try{

            $client->post($url.'/logout', $postData)->getBody()->getContents();
            session()->flush();
            toast('Successfully logout!','success');
            return redirect()->route('page_login');

        } catch (\GuzzleHttp\Exception\BadResponseException $e){
            if ($e->getCode() == 400){
                toast('Invalid Request. Please enter a username or a password.','error');
                return redirect()->back();

            } else if ($e->getCode() == 401){
                toast('Your credentials are incorrect. Please try again.','error');
                return redirect()->back();
            }

            else{
                toast('Something went wrong with your credential','error');
                return redirect()->back();

            }

        }



    }

}

