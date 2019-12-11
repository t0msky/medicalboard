<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class AuditController extends Controller
{	
	public function get_audit()
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
		return view('user_admin.AuditTrail.AudittrailManagement', ['result' => $content->data]);
	}
}
