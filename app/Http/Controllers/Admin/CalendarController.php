<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client;
use DB;

class CalendarController extends Controller
{
	// public function display_holiday()
	// {
	// 	$client = new Client();
	// 	$url = config('services.endpoint.url');
	// 	$token = session('API_token');
	// 	$options = [
	// 		'headers' => [
	// 			'Authorization' => $token
	// 		],
	// 		'query' => [

	// 		]
	// 	];

	// 	$response = $client->get($url.'admin/holidays', $options)->getBody();
	// 	$content_holiday = json_decode($response->getContents());
	// 	$this->display_weekend($content_weekend);

	// 	dd($content_holiday);

	// 	return view('user_admin.Calendar.index_calendar')
	// }

	// public function display_weekend(&$content_weekend)
	// {
	// 	$client = new Client();
	// 	$url = config('services.endpoint.url');
	// 	$token = session('API_token');
	// 	$options = [
	// 		'headers' => [
	// 			'Authorization' => $token
	// 		],
	// 		'query' => [

	// 		]
	// 	];

	// 	$response = $client->get($url.'/', $options)->getBody();
	// 	$content_weekend = json_decode($response->getContents());

	// 	// return view('user_admin.Calendar.index_calendar')
	// }
}
