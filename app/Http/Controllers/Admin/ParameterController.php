<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;

class ParameterController extends Controller
{
	public function get_param()
	{
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			]
		];

		$client = new Client();
		$response = $client->get( $url.'/admin/parameters',$options)->getBody();
		$content = json_decode($response->getContents());

		return view('user_admin.Parameter.ParameterManagement', ['result' => $content->data]);
	}

	public function post_param(Request $req)
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
				'code_category' => $req->code_category,
				'ref_code' => $req->ref_code,
				'desc_en' => $req->desc_en,
				'desc_bm' => $req->desc_bm,
			],
		];

		try{
			$response = $client->post($url.'/admin/parameter', $options)->getBody();
			$content = json_decode($response->getContents());
			toast(trans('message.success'),'success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			return redirect()->back();
		}
	}

	public function edit_param($id)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			
		];
		
		$response_list = $client->get( $url.'/admin/parameter/'.$id, $options)->getBody();
		$list = json_decode($response_list->getContents());
		
		return view('user_admin.Parameter.UpdateParameter', ['result' => $list]);
	}

	public function update_param(Request $req)
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
				'code_category' =>$req->code_category,
				'ref_code' =>$req->ref_code,
				'desc_en' => $req->desc_en,
				'desc_bm' => $req->desc_bm,
			],
		];

		try{
			$response = $client->post($url.'/admin/parameter/'.$req->id, $options)->getBody();
			toast('Successfully Updated','success');
			return redirect()->route('parameter_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('parameter_management');
		}
	}

	public function delete_param(Request $id)
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
			$response = $client->post( $url.'/admin/parameter/destroy/'.$id->id,$options)->getBody();;
			toast('Successfully Deleted','success');
			return redirect()->route('parameter_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted','error');
			return redirect()->route('parameter_management');
		}
	}
}