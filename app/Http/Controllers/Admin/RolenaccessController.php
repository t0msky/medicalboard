<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use RealRashid\SweetAlert\Facades\Alert;
use Redirect;
use DB;

class RolenaccessController extends Controller
{
	public function post_role(Request $req)
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
				'description' => $req->description,
				'user_group' => $req->user_group, 
			],
		];

		try{
			$response = $client->post($url.'/admin/role', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			return redirect()->back();
		}
	}

	public function get_role()
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
		];

		$response = $client->get( $url.'/admin/roles',$options)->getBody();
		$content = json_decode($response->getContents());
	
		return view('user_admin.Role&Access.Role&AccessManagement', ['result' => $content->data]);
	}

	public function edit_role($id)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
		];

		$response = $client->get( $url.'/admin/role/'.$id, $options)->getBody();
		$content = json_decode($response->getContents());

		return view('user_admin.Role&Access.UpdateRole&Access', ['result' => $content]);
	}

	public function update_role(Request $req)
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
				'description' => $req->description,
				'user_group' => $req->user_group, 
			],
		];

		try{
			$response = $client->post($url.'/admin/role/'.$req->id, $options)->getBody();
			toast('Successfully Updated','success');
			return redirect()->route('role_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('role_management');
		}
	}

	public function delete_role(Request $id)
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
		];

		try{
			$response = $client->post( $url.'/admin/role/destroy/'.$id->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('role_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted','error');
			return redirect()->route('role_management');
		}
	}
}
