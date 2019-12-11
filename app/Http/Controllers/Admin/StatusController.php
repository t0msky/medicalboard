<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function index(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/status')->data;
    	return view('user_admin.status.index', compact('list'));
    }

    public function create(Request $request){
    	$list = (isset($request->id)) ? $this->sendRequest('', 'GET', 'common/status/'.$request->id)->data : array();
    	return view('user_admin.status.create', compact('list'));
    }

    public function save(Request $request){
        $json = [
            'name' => $request->name,
            'description' => $request->description
        ];
        if(isset($request->id) && !empty($request->id)){
        	$json['id'] = $request->id;
        }

		$list = $this->sendRequest('', 'POST', 'common/status/create', $json);

        if(isset($list->data) && $list->data->Status == 0){
            toast('Your data has been successfully saved', 'success');
        } else {
            toast($list->data->Message, 'failed');
        }
		return redirect()->route('status_list');
    }

    public function delete(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/status/delete/'.$request->id);
        if($list == 1){
            toast('Your data has been successfully deleted', 'success');
        } else {
            toast('Your data has been failed to be deleted', 'failed');
        }
		return redirect()->route('status_list');
    }
}
