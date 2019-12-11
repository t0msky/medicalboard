<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use DB;
use App\Parameter1;


class ParameterValuesController extends Controller
{
	public function index()
	{

		$optionparameterid=DB::select('select tablerefcode, descen from reftabledesc  where tablerefcode=tablerefcode');

		// $reftable->reftable = $result;

		return view('Parameter.CreateParameterValues',['optionparameterid'=>$optionparameterid]);
		// return view('Branch.CreateBranch');
		// return view('Branch.CreateBranch', compact('optionstate'));
	}


	public function postparametervregisteration(Request $req)
	{
		$tablerefcode = $req->tablerefcode;
		$refcode = $req->refcode;
		$descen = $req->descen;

		$datatosend = ['tablerefcode' =>$tablerefcode, 'refcode' =>$refcode, 'descen' =>$descen];

           //dd($datatosend);

		$jsondata = json_encode($datatosend);
           // dd($jsondata);
		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/parametervregisteration';
		$ch = curl_init();

//dd($url);

		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_PROXY, '');

		curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

		curl_close($ch);

		$jsondecode = json_decode($result);
            // dd($result);
		// return $jsondata.'+'.$result;

            // dd($jsondecode);

		$errorcode = $jsondecode->{'errorcode'};
		// return $errorcode;

		if($errorcode == 0)
		{
			return redirect()->back()->with('messagedoc','Save successful');
		}
		else
		{
			return redirect()->back()->with('messagedoc','Save unsuccessful');
		}
	}

	public function getdisplayparametervalue(Request $req)
	{
		$tablerefcode = $req->query('tablerefcode');
		$refcode = $req->query('refcode');
		$descen = $req->query('descen');
		
		$url = 'http://'.env('WS_IP', 'localhost:8000').'/api/wsmotion/getdisplayparametervalue?tablerefcode='.$tablerefcode.'&refcode='.$refcode.'&descen='.$descen;

		$ch = curl_init();

		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_PROXY, '');

		curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);


		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //close connection
		curl_close($ch);

		$result = json_decode ($result);


		return view('Parameter.ParameterValueManagement',['parameter1'=>$result]);

	}

	public function editData($id)
	{
		$refcode = $id;

		$optionparameterid=DB::select('select tablerefcode, descen from reftabledesc where tablerefcode=tablerefcode');

		$result = DB::select('select tablerefcode, refcode, descen from reftable where refcode=?' , [$id]);
		
		if ($result != '')
		{
			return view('Parameter.UpdateParameterValue', ['result'=>$result, 'optionparameterid'=>$optionparameterid]);
		}

	}

	public function updateparametervalue(Request $req)
	{
		$tablerefcode = $req->tablerefcode;
		$refcode = $req->refcode;
		$descen = $req->descen;

		$datatosend = ['tablerefcode' =>$tablerefcode, 'refcode' =>$refcode, 'descen' =>$descen];

           //dd($datatosend);

		$jsondata = json_encode($datatosend);
           // dd($jsondata);
		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/updateparametervalue';
		$ch = curl_init();

//dd($url);

		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_PROXY, '');

		curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

		curl_close($ch);

		$jsondecode = json_decode($result);
            // dd($result);
		// return $jsondata.'+'.$result;

            // dd($jsondecode);

		$errorcode = $jsondecode->{'errorcode'};
		// return $errorcode;

		if($errorcode == 0)
		{
			return redirect()->back()->with('messagedoc','Save successful');
		}
		else
		{
			return redirect()->back()->with('messagedoc','Save unsuccessful');
		}
	}

	public function delparameterv($id)
	{
		$datatosend = ['id'=>$id];

		$jsondata = json_encode($datatosend);

		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/delparameterv';
		$ch = curl_init();

		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_PROXY, '');
		curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
		curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
		curl_close($ch);

		$jsondecode = json_decode($result);

		$errorcode = $jsondecode->{'errorcode'};

		if($errorcode <= 0)
		{
			return redirect()->back()->with('messagedoc','Delete successful');
		}
		else
		{
			return redirect()->back()->with('messagedoc','Delete unsuccessful');
		}
	}
}
