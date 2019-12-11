<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use DB;

class HospitalController extends Controller
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
				'ref_code' => ['state', 'ref_Hospital_type'],
				'fields[]' => 'branchs'
			]
		];

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$response = $client->get($url.'/dynamic_options', $options)->getBody();
		$content_dynamic = json_decode($response->getContents());

		return view('user_admin.Hospital.CreateHospital', ['option_state' => $content->state, 'option_hospital_type' => $content->ref_Hospital_type, 'option_branchs'=>$content_dynamic->branchs]);
	}

	public function post_hospital(Request $req)
	{
		$branchs = $req->branchs;
		foreach ($branchs as $branch){

			$hospital_branch[] = $branch;

		}

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
				'statecode' => $req->statecode,
				'name' => $req->name,
				'add1' => $req->add1,
				'add2' => $req->add2,
				'add3' => $req->add3,
				'city' => $req->city,
				'idtype' => $req->idtype,
				'postcode' => $req->postcode,
				'jdind' => $req->jdind,
				'jdkind' => $req->jdkind,
				'jdrind' => $req->jdrind,
				'branchs' => $hospital_branch,
			],
		];

		// dd($options);

		try{
			$response = $client->post($url.'/admin/hospital', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			 return redirect()->back();
		}
	}

	public function get_hospital()
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
				'ref_code' => ['state', 'ref_Hospital_type'],
				'fields[]' => 'branchs'
			]
		];

		$response = $client->get( $url.'/admin/hospitals',$options)->getBody();
		$content_list = json_decode($response->getContents());

		$response_option = $client->get($url.'/static_options', $options)->getBody();
		$content_option = json_decode($response_option->getContents());

		$response_option = $client->get($url.'/dynamic_options', $options)->getBody();
		$dynamic_option = json_decode($response_option->getContents());

		return view('user_admin.Hospital.HospitalManagement', ['result'=>$content_list->data, 'option_state'=>$content_option->state, 'option_hospitalType'=>$content_option->ref_Hospital_type, 'result_branch'=>$dynamic_option->branchs]);
	}

	public function edit_hospital($id)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
			'query' => [
				'ref_code' => ['state', 'ref_Hospital_type'],
				'fields[]' => 'branchs'
			]
		];

		$response_static = $client->get($url.'/static_options', $options)->getBody();
		$content_static = json_decode($response_static->getContents());

		$list = $client->get( $url.'/admin/hospital/'.$id, $options)->getBody();
		$content_list = json_decode($list->getContents());
		// dd($content_list);

		$response = $client->get($url.'/dynamic_options', $options)->getBody();
		$content_dynamic = json_decode($response->getContents());

		return view('user_admin.Hospital.UpdateHospital', ['result'=>$content_list, 'option_state'=>$content_static->state, 'option_hospital_type'=>$content_static->ref_Hospital_type, 'option_branchs'=>$content_dynamic->branchs]);
	}

	public function update_hospital(Request $req)
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
				'statecode' => $req->statecode,
				'name' => $req->name,
				'add1' => $req->add1,
				'add2' => $req->add2,
				'add3' => $req->add3,
				'city' => $req->city,
				'idtype' => $req->idtype,
				'postcode' => $req->postcode,
				'jdind' => $req->jdind,
				'jdkind' => $req->jdkind,
				'jdrind' => $req->jdrind,
				'branchs' => $req->branchs,
			],
		];
		// dd($options);

		try{
			$response = $client->post($url.'/admin/hospital/'.$req->id, $options)->getBody();;
			toast('Successfully updated hospital','success');
			return redirect()->route('hospital_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated hospital','error');
			return redirect()->route('hospital_management');
		}
	}

	public function delete_hospital(Request $id)
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
			$response = $client->post( $url.'/admin/hospital/destroy/'.$id->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('hospital_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted','error');
			return redirect()->route('hospital_management');
		}
	}
}
