<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use DB;
use App\UserGroup;


class UserGroupController extends Controller
{

	public function postusergroupregisteration(Request $req)
	{

		$refcode = $req->refcode;
		$descen = $req->descen;

		$datatosend = ['refcode' =>$refcode, 'descen' =>$descen];

		$jsondata = json_encode($datatosend);

		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/usergroupregisteration';
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

		if($errorcode == 0)
		{
			return redirect()->back()->with('messagedoc','Save successful');
		}
		else
		{
			return redirect()->back()->with('messagedoc','Save unsuccessful');
		}
	}

	public function getdisplayusergroup(Request $req)
	{
		$refcode = $req->query('refcode');
		$descen = $req->query('descen');

		$url = 'http://'.env('WS_IP', 'localhost:8000').'/api/wsmotion/getdisplayusergroup?refcode='.$refcode.'&descen='.$descen;

		$ch = curl_init();

		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_PROXY, '');

		curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);


		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

		curl_close($ch);

		$result = json_decode ($result);

		return view('UserGroup.Management',['reftable'=>$result]);
	}

	public function editData($id)
	{
		$refcode = $id;

		$result = DB::select('select refcode, descen from reftable where refcode=? and tablerefcode=?' , [$id, 'appind']);

		if ($result != '')
		{
			return view('UserGroup.UpdateUserGroup', ['result'=>$result]);
		}
	}

	public function updateusergroup(Request $req)
	{
		$refcode = $req->refcode;
		$descen = $req->descen;

		$datatosend = ['refcode' =>$refcode, 'descen' =>$descen];

		$jsondata = json_encode($datatosend);

		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/updateusergroup';
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

		if($errorcode == 0)
		{
			return redirect()->back()->with('messagedoc','Save successful');
		}
		else
		{
			return redirect()->back()->with('messagedoc','Save unsuccessful');
		}
	}

	public function delusergroup($id)
	{
		$datatosend = ['id'=>$id];

		$jsondata = json_encode($datatosend);

		$url = 'http://'.env('WS_IP','localhost:8000').'/api/wsmotion/delusergroup';
		
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

