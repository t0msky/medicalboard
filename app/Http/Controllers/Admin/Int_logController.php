<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class Int_logController extends Controller
{
	public function get_log(Request $req)
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

		$list_response = $client->get( $url.'/admin/integrations',$options)->getBody();
		$content = json_decode($list_response->getContents());

		$name = $client->get( $url.'/user_details',$options)->getBody();
		$content_name = json_decode($name->getContents());

		return view('user_admin.Int_log.int_log', ['result' => $content->data, 'result2' => $content_name->data->user_details]);
	} 
}
