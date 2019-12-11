<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use DB;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;

class NurseController extends Controller
{
	public function post_nurse(Request $req)
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
				'nurse_name' = $req->nurse_name;
				'nurse_id' = $req->nurse_id;
				'nurse_acctno' = $req->nurse_acctno;
				'nurse_bank' = $req->nurse_bank;
				'hospital_name' = $req->hospital_name;
			],
		];

		try{
			$response = $client->post($url.''.$req->id, $options)->getBody();
			toast('Successfully created nurse','success');
			return redirect()->route('nurse_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully created nurse','error');
			return redirect()->route('nurse_management');
		}
	}

	public function get_nurse()
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

		$response = $client->get( $url.'',$options)->getBody();
		$content = json_decode($response->getContents());
		return view('user_admin.Hospital.ManageNurse', ['result' => $content->data]);
	}

	public function edit_nurse($id)
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

		$response = $client->get( $url.''.$id, $options)->getBody();
		$content = json_decode($response->getContents());
		return view('user_admin.Hospital.UpdateNurse', ['result' => $content, '$option_branch' =>$content]);
	}

	public function update_nurse(Request $req)
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
				'nurse_name' = $req->nurse_name;
				'nurse_id' = $req->nurse_id;
				'nurse_acctno' = $req->nurse_acctno;
				'nurse_bank' = $req->nurse_bank;
				'hospital_name' = $req->hospital_name;
			],
		];

		try{
			$response = $client->put($url.''.$req->id, $options)->getBody();
			toast('Successfully updated nurse','success');
			return redirect()->route('nurse_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated nurse','error');
			return redirect()->route('nurse_management');
		}
	}

	public function delete_nurse($id)
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
			$response = $client->delete( $url.''.$id.'/destroy');
			toast('Successfully deleted service nurse','success');
			return redirect()->route('nurse_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully deleted nurse','error');
			return redirect()->route('nurse_management');
		}
	}
}
