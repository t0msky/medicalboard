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

class HolidayController extends Controller
{
	public function index_holiday()
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

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());
		$this->get_weekend($get_weekend);
		$this->get_public_holiday($get_holiday);

		return view('user_admin.Calendar.index_calendar', ['result'=>$content->state,'results'=>$get_weekend->data, 'result_public'=>$get_holiday->data]);
	}

	public function get_weekend(&$get_weekend)
	{
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],
		];

		$client = new Client();
		$response = $client->get( $url.'/admin/weekends',$options)->getBody();
		$get_weekend = json_decode($response->getContents());
	}

	public function post_weekend(Request $req)
	{
		$count = $req->no;

		foreach ($count as $i){

			$state = 'states'.$i;
			$weekend = 'weekend'.$i;
			$states = $req->$state;
			$weekends = $req->$weekend;

			$cuti[] = ['states'=>$states, 'weekend'=>$weekends];
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

				'weekends' => $cuti

			],
		];

		try{
			$response = $client->post($url.'/admin/weekend', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created ','error');
			return redirect()->route('calendar');
		}
	}

	public function edit_weekend(Request $req)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],

		];

		$response_list = $client->get( $url.'/admin/weekend/'.$id->id, $options)->getBody();
		$list = json_decode($response_list->getContents());
	}

	public function update_weekend(Request $req)
	{

		$states = $req->states;
		$weekends = $req->weekend;

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

				'states'=>$states, 
				'weekend'=>$weekends
			],
		];

		try{
			$response = $client->post($url.'/admin/weekend/'.$req->id, $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Updated','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('calendar');
		}
	}

	public function search_holiday(Request $req)
	{
		$get_holiday= $req->year;

		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],

			'query' => [

				'keyword' => $get_holiday,
			]
		];

		$client = new Client();
		$response = $client->get( $url.'/admin/holidays',$options)->getBody();
		$get_holiday = json_decode($response->getContents());

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

		$response = $client->get($url.'/static_options', $options)->getBody();
		$content = json_decode($response->getContents());
		$this->get_weekend($get_weekend);

		return view('user_admin.Calendar.index_calendar', ['result'=>$content->state,'results'=>$get_weekend->data, 'result_public'=>$get_holiday->data]);
	}

	public function get_public_holiday(&$get_holiday)
	{
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],

			'query' => [

				'keyword' => $get_holiday,
			]
		];

		$client = new Client();
		$response = $client->get( $url.'/admin/holidays',$options)->getBody();
		$get_holiday = json_decode($response->getContents());
	}

	public function post_holiday(Request $req)
	{
		
		$count = $req->no_holiday;

		foreach ($count as $i){

			$name = $req->name;
			$description = $req->description;
			$start_date = $req->start_date;
			$end_date = $req->end_date;
			$state = 'states'.$i;
			$states = $req->$state;
			$status = $req->status;

			$holidays[] = ['name'=>$name, 'description'=>$description, 'start_date'=>$start_date, 'end_date'=>$end_date, 'states'=>$states, 'status'=>$status];
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

				'holidays' => $holidays
			],
		];

		try{
			$response = $client->post($url.'/admin/holiday', $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Created','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Created ','error');
			return redirect()->route('calendar');
		}
	}

	public function edit_public(Request $req)
	{
		$client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Authorization' => $token
			],
		];

		$response_list = $client->get( $url.'/admin/holiday/'.$id->id, $options)->getBody();
		$list = json_decode($response_list->getContents());

	}

	public function update_holiday(Request $req)
	{
		$name = $req->name;
		$description = $req->description;
		$start_date = $req->start_date;
		$end_date = $req->end_date;
		$states = $req->states;
		$status = $req->status;

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

				'name'=>$name, 
				'description'=>$description, 
				'start_date'=>$start_date, 
				'end_date'=>$end_date, 
				'states'=>$states,
				'status'=>$status
			],

		];

		try{
			$response = $client->post($url.'/admin/holiday/'.$req->id, $options)->getBody();
			$content = json_decode($response->getContents());
			toast('Successfully Updated','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Updated','error');
			return redirect()->route('calendar');
		}
	}

	public function delete_holiday(Request $idDelete)
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
			$response = $client->post( $url.'/admin/holiday/destroy/'.$idDelete->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted ','error');
			return redirect()->route('calendar');
		}
	}

	public function delete_weekend(Request $idWeekend)
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
			$response = $client->post( $url.'/admin/weekend/destroy/'.$idWeekend->id,$options)->getBody();
			toast('Successfully Deleted','success');
			return redirect()->route('calendar');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully Deleted ','error');
			return redirect()->route('calendar');
		}
	}

	public function get_calendar()
	{
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization' => $token
			],
			'query' => [
				'ref_code[]' => 'state',
			]
		];

		$client = new Client();
		$response = $client->get( $url.'/admin/holidays',$options)->getBody();
		$holiday = json_decode($response->getContents());

		$response_state = $client->get( $url.'/static_options',$options)->getBody();
		
	 	$state = json_decode($response_state->getContents());

		$data_for_calendar = [];
		
		foreach ($holiday->data as $a){
				foreach($state->state as $idx=>$st)
				{
					if($st->ref_code == isset($a->states[$idx]))
					{
						$region[]=$st->desc_en;
					}
			    }
				$data_for_calendar[] = array(
					"id"=> $a->id,
					"name"=> $a->name,
					"region"=> $region,
					"start_date"=> $a->start_date,
					"end_date"=> $a->end_date
				);
				$region=[];		
			
		}
		
       $data_for_calendar=json_encode($data_for_calendar);
		
		return $data_for_calendar;
	}
}
