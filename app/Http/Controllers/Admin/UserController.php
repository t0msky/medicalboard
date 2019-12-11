<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
	// public function checking(Request $req)
	// {
	// 	$nric_no= $req->nric_no;
	// 	$email= $req->email;

	// 	$client = new Client();
	// 	$url = config('services.endpoint.url');
	// 	$token = session('API_token');

	// 	$options = [
	// 		'headers' => [
	// 			'Content-Type' => 'application/json',
	// 			'Accept' => 'application/json',
	// 			'Authorization' => $token

	// 		],
	// 		'query' => [
	// 			'nric_no' => $nric_no,
	// 			'email' => $email,
	// 		]
	// 	];

	// 	$checking = $client->get( $url.'/check_nric',$options)->getBody();
	// 	$content_checking = json_decode($checking->getContents());

	// 	dd($content_checking);

	// 	return view('user_admin.User.CreateUser', ['result' => $content_checking->data]);

	// }

	public function index(Request $req)
	{
		$nric_no= $req->nric_no;
		$email= $req->email;

		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
				'fields' => ['branchs','roles'],
				'nric_no' => $nric_no,
				'email' => $email,
			]
		];

		$response = $client->get($url.'/dynamic_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$checking = $client->get( $url.'/check_nric',$options)->getBody();
		$content_checking = json_decode($checking->getContents());

		return view('user_admin.User.CreateUser', ['result' => $content_checking->data, 'option_branch' => $content->branchs, 'option_role' => $content->roles]);
	}
	

	public function post_user(Request $req)
	{
		$roles = $req->roles;
		foreach ($roles as $role){

			$user_role[] = $role;

		}

		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json'
			],
			'json' => [
				'name' => $req->name, 
				'username' =>$req->username,
				'email' =>$req->email,
				'password' => $req->password,
				'staff_number' => $req->staff_number, 
				'branch_id' => $req->branch_id,
				'management_id' => $req->management_id,
				'roles' => $user_role, 
			],
		];

		try{
			$response = $client->post( $url.'/register', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Register','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Register','error');
			return redirect()->back();
		}
	}
	
	public function get_user()
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');

		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token

			],
			'query' => [
				'fields' => ['branchs','roles'],

			]
		];

		$list = $client->get( $url.'/admin/staffs',$options)->getBody();
		$content = json_decode($list->getContents());

		$dynamic = $client->get($url.'/dynamic_options', $options)->getBody();
		$content_dynamic = json_decode($dynamic->getContents());

		return view('user_admin.User.UserManagement', ['result' => $content->data, 'result_branchs' => $content_dynamic->branchs, 'result_roles' => $content_dynamic->roles]);
	}

	public function edit_user($id)
	{
		
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
				'fields' => ['branchs','roles'],
			]
		];
		$response = $client->get($url.'/dynamic_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$response_list = $client->get( $url.'/admin/staff/'.$id, $options)->getBody();
		$list = json_decode($response_list->getContents());

		return view('user_admin.User.UpdateUser', ['result' => $list->data, 'option_branch' => $content->branchs, 'option_role' => $content->roles]);
	}

	public function update_user(Request $req)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],
			'json' => [
				'name' => $req->name, 
				'operation_id' =>$req->operation_id,
				'email' =>$req->email,
				'password' => $req->password,
				'staff_number' => $req->staff_number, 
				'branch_id' => $req->branch_id,
				'management_id' => $req->management_id,
				'roles' => $req->roles, 
			],
		];

		try{
			$response = $client->post($url.'/admin/staff/'.$req->id, $options)->getBody();
			toast('Successfully updated','success');
			return redirect()->route('user_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated','error');
			return redirect()->route('user_management');
		}
	}

	public function delete_user(Request $id)
	{
		// dd($id->id);
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],
		];

		try{
			$response = $client->post( $url.'/admin/staff/destroy/'.$id->id,$options)->getBody();

			toast('Successfully deleted','success');

			return redirect()->route('user_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully deleted','error');
			return redirect()->route('user_management');
		}
	}
}