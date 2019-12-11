<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use DB;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
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
				'ref_code' => ['doc_special', 'doctor_type', 'bank_code'],
				'nric_no' => $nric_no,
				'email' => $email,
			],
		];

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$checking = $client->get( $url.'/check_nric',$options)->getBody();
		$content_checking = json_decode($checking->getContents());

		return view('user_admin.Hospital.CreateDoctor', ['result' => $content_checking->data, 'option_speciality'=>$content->doc_special, 'option_doctorType'=>$content->doctor_type, 'option_bankCode'=>$content->bank_code]);
	}

	public function post_doctor(Request $req)
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
				'doctor_name' => $req->doctor_name,
				'nric_no' => $req->nric_no,
				'type' => $req->type,
				'group_id' => $req->group_id,
				'speciality_id' => $req->speciality_id,
				'accountno' => $req->accountno,
				'bank' => $req->bank,
				'email' => $req->email,
				'mobileno' => $req->mobileno,
				'telno' => $req->telno,
				'availability' => $req->availability,
			],
		];

		try{
			$response = $client->post($url.'/admin/doctor', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			return redirect()->back();
		}
	}

	public function get_doctor()
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
				'ref_code' => ['doctor_type', 'doc_special', 'bank_code']
			]
		];

		$response = $client->get($url.'/admin/doctors',$options)->getBody();
		$list = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Type = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Special = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Bank = json_decode($response->getContents());

		return view('user_admin.Hospital.ManageDoctor', ['result' => $list->data, 'Type'=>$Type->doctor_type, 'Special'=>$Special->doc_special, 'Bank'=> $Bank->bank_code]);
	}

	public function edit_doctor($id)
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
				'ref_code' => ['doctor_type', 'doc_special', 'bank_code']
			]
		];

		$response = $client->get($url.'/admin/doctor/'.$id, $options)->getBody();
		$list = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Type = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Special = json_decode($response->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Bank = json_decode($response->getContents());

		return view('user_admin.Hospital.UpdateDoctor', ['result' => $list, 'Type'=>$Type->doctor_type, 'Special'=>$Special->doc_special, 'Bank'=> $Bank->bank_code]);
	}

	public function update_doctor(Request $req)
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
				'doctor_name' => $req->doctor_name,
				// 'nric_no' => $req->nric_no,
				'type' => $req->type,
				'group_id' => $req->group_id,
				'speciality_id' => $req->speciality_id,
				'accountno' => $req->accountno,
				'bank' => $req->bank,
				'email' => $req->email,
				'mobileno' => $req->mobileno,
				'telno' => $req->telno,
				'availability' => $req->availability,
			],
		];

		try{
			$response = $client->post($url.'/admin/doctor/'.$req->id, $options)->getBody();
			toast('Successfully updated','success');
			return redirect()->route('doctor_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated','error');
			return redirect()->route('doctor_management');
		}
	}

	public function delete_doctor(Request $id)
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
			$response = $client->post($url.'/admin/doctor/destroy/'.$id->id,$options)->getBody();
			toast('Successfully deleted','success');
			return redirect()->route('doctor_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully deleted','error');
			return redirect()->route('doctor_management');
		}
	}
}