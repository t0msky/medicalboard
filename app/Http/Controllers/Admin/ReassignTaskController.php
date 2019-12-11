<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class ReassignTaskController extends Controller
{
    public function post_reassign(Request $req)
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
				'' = $req->;
				'' = $req->;
			],
		];

		try{
			$response = $client->post($url.''.$req->id, $options)->getBody();
			toast('Successfully reassign task','success');
			return redirect()->route('reassign');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully reassign task','error');
			return redirect()->route('reassign');
		}
	}

   public function get_reassign()
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
		return view('user_admin.reassign_task.reassign_task', ['result' => $content->data]);
	}
}
