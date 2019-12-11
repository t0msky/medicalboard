<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Session;

class ChairmanController extends Controller
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
				'ref_code[]' => 'bank_code',
				'nric_no' => $nric_no,
				'email' => $email,
			]
		];

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());

		$response = $client->get($url.'/admin/hospitals', $options)->getBody();
		$content_hospital = json_decode($response->getContents());

		$checking = $client->get( $url.'/check_nric',$options)->getBody();
		$content_checking = json_decode($checking->getContents());

		// dd($content_hospital->data);

		return view('user_admin.User.CreateChairman', ['result_checking' => $content_checking->data, 'result' => $content->bank_code, 'option_hospital' => $content_hospital->data]);
    }

    public function post_chairman(Request $req)
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
				'nric_no' => $req->nric_no,
				'chairman_name' => $req->chairman_name,
				'acctno' => $req->acctno,
				'bank' => $req->bank,
				'email' => $req->email,
				'mobileno' => $req->mobileno,
				'telno' => $req->telno,
				'hospital_id' => $req->hospital_id,
			],
		];

		try{
			$response = $client->post($url.'/admin/chairman', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->back();

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created','error');
			return redirect()->back();
		}
	}

	public function get_chairman()
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
				'ref_code[]' => 'bank_code',
			]
		];

		$list = $client->get( $url.'/admin/chairmans',$options)->getBody();
		$content = json_decode($list->getContents());

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Bank = json_decode($response->getContents());

		$response = $client->get($url.'/admin/hospitals', $options)->getBody();
		$Hospital = json_decode($response->getContents());

		return view('user_admin.User.ChairmanManagement', ['result' => $content->data, 'Bank' => $Bank->bank_code, 'Hospital' => $Hospital->data]);
	}

	public function edit_chairman($id)
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
				'ref_code[]' => 'bank_code',
			]
		];


		$response = $client->get( $url.'/admin/chairman/'.$id, $options)->getBody();
		$content = json_decode($response->getContents());

		// dd($id);

		$response = $client->get($url.'/static_options', $options)->getBody();
		$Bank = json_decode($response->getContents());

		$response = $client->get($url.'/admin/hospitals', $options)->getBody();
		$Hospital = json_decode($response->getContents());

		return view('user_admin.User.UpdateChairman', ['result' => $content, 'Bank' => $Bank->bank_code, 'Hospital' => $Hospital->data]);
	}

	public function update_chairman(Request $req)
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
				// 'nric_no' => $req->nric_no,
				'chairman_name' => $req->chairman_name,
				'acctno' => $req->acctno,
				'bank' => $req->bank,
				'email' => $req->email,
				'mobileno' => $req->mobileno,
				'telno' => $req->telno,
				'hospital_id' => $req->hospital_id,
			],
		];

		try{
			$response = $client->post($url.'/admin/chairman/'.$req->id, $options)->getBody();
			// dd($response);
			toast('Successfully Updated','success');
			return redirect()->route('chairman_manage');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('chairman_manage');
		}
	}

	public function delete_chairman(Request $id)
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
			$response = $client->post( $url.'/admin/chairman/destroy/'.$id->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('chairman_manage');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted','error');
			return redirect()->route('chairman_manage');
		}
	}
}
