<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class Medical_serviceController extends Controller
{
	public function post_service_provider(Request $req)
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
				'service_provider' => $req->service_provider,
				'address' =>$req->address,
				'postcode' =>$req->postcode,
				'city' =>$req->city,
				'state_code' =>$req->state_code,
			],
		];

		try{
			$response = $client->post($url.'', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully created service provider','success');
			return redirect()->route('service_provider_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully created service provider','error');
			return redirect()->route('service_provider_management');
		}
	}

	public function post_sp_representative(Request $req)
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
				'id_no' => $req->id_no,
				'representative' =>$req->representative,
				'specialty' =>$req->specialty,
			],
		];

		try{
			$response = $client->post($url.'', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully created service provider representative','success');
			return redirect()->route('service_representative');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully created service provider representative','error');
			return redirect()->route('service_representative');
		}
	}

	public function get_service_provider()
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
			return view('user_admin.Hospital.ManageSP', ['result' => $content->data]);
	}

	public function get_sp_representative()
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
			return view('user_admin.Hospital.ManageRepresentative', ['result' => $content->data]);
	}

	public function edit_service_provider($id)
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
		return view('user_admin.Hospital.UpdateSP', ['result' => $content, '$option_branch' =>$content]);
	}

	public function edit_sp_representative($id)
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
		return view('user_admin.Hospital.UpdateRep', ['result' => $content, '$option_branch' =>$content]);
	}

	public function update_service_provider(Request $req)
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
				'service_provider' => $req->service_provider,
				'address' =>$req->address,
				'postcode' =>$req->postcode,
				'city' =>$req->city,
				'state_code' =>$req->state_code,
			],
		];

		try{
			$response = $client->put($url.''.$req->id, $options)->getBody();;
			toast('Successfully updated service provider','success');
			return redirect()->route('service_provider_management');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated service provider','error');
			return redirect()->route('service_provider_management');
		}
	}

	public function update_sp_representative(Request $req)
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
				'service_provider' => $req->service_provider,
				'address' =>$req->address,
				'postcode' =>$req->postcode,
				'city' =>$req->city,
				'state_code' =>$req->state_code,
			],
		];

		try{
			$response = $client->put($url.''.$req->id, $options)->getBody();;
			toast('Successfully updated service provider representative','success');
			return redirect()->route('service_representative');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully updated service provider representative','error');
			return redirect()->route('service_representative');
		}
	}

	public function delete_service_provider($id)
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
			toast('Successfully deleted service provider','success');
			return redirect()->route('service_provider');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully deleted service provider','error');
			return redirect()->route('service_provider');
		}
	}

	public function delete_sp_representative($id)
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
			toast('Successfully deleted service provider representative','success');
			return redirect()->route('service_representative');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully deleted service provider representative','error');
			return redirect()->route('service_representative');
		}
	}
}
