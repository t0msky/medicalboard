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

class BranchController extends Controller
{
	public function index(Request $req)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
				'ref_code[]' => 'state',
			]
		];

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		return view('user_admin.Branch.CreateBranch', ['result' => $content->state]);
	}

	public function post_branch(Request $req)
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
				'name' =>$req->name,
				'code' =>$req->code,
				'long_name' =>$req->long_name,
				'state_code' => $req->state_code,
				'assist_brcode' => $req->assist_brcode,
				'address_1' => $req->address_1,
				'address_2' => $req->address_2,
				'address_3' => $req->address_3,
				'postcode' => $req->postcode,
				'city_id' => $req->city_id,
				'phone_no' => $req->phone_no,
				'fax_no' => $req->fax_no,
				'type' => $req->type,
				'status' => $req->status,
				'pic' => $req->pic,
				'email' => $req->email,
			],
		];

		try{
			$response = $client->post($url.'/admin/branch', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			return redirect()->back();
		}
	}

	public function get_branch()
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
				'ref_code[]' => 'state',
			]
		];

		$list = $client->get( $url.'/admin/branchs',$options)->getBody();
		$list_content = json_decode($list->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		return view('user_admin.Branch.BranchManagement', ['result' => $list_content->data, 'option_state' => $content->state]);
	}

	public function edit_branch($id)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
				'ref_code[]' => 'state',
			]
		];

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$response_list = $client->get( $url.'/admin/branch/'.$id, $options)->getBody();
		$list = json_decode($response_list->getContents());
		
		return view('user_admin.Branch.UpdateBranch', ['result' => $list, 'option_state' => $content->state]);
	}

	public function update_branch(Request $req)
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
				'name' =>$req->name,
				'code' =>$req->code,
				'long_name' =>$req->long_name,
				'state_code' => $req->state_code,
				'assist_brcode' => $req->assist_brcode,
				'address_1' => $req->address_1,
				'address_2' => $req->address_2,
				'address_3' => $req->address_3,
				'postcode' => $req->postcode,
				'city_id' => $req->city_id,
				'phone_no' => $req->phone_no,
				'fax_no' => $req->fax_no,
				'type' => $req->type,
				'status' => $req->status,
				'pic' => $req->pic,
				'email' => $req->email,
			],
		];

		try{
			$response = $client->post($url.'/admin/branch/'.$req->id, $options)->getBody();
			toast('Successfully Updated','success');
			return redirect()->route('branch_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('branch_management');
		}
	}

	public function delete_branch(Request $id)
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
			$response = $client->post( $url.'/admin/branch/destroy/'.$id->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('branch_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted','error');
			return redirect()->route('branch_management');
		}
	}
}
