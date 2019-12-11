<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusSubController extends Controller
{
    public function index(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/statussub')->data;
    	return view('user_admin.statussub.index', compact('list'));
    }

    public function create(Request $request){
    	$list = (isset($request->id)) ? $this->sendRequest('', 'GET', 'common/statussub/'.$request->id)->data : array();
    	$status = $this->sendRequest('', 'GET', 'common/status/', [], ["select"=>true]);

    	return view('user_admin.statussub.create', compact('list', 'status'));
    }

    public function save(Request $request){
        $json = [
            'status' => $request->status,
            'name' => $request->name,
            'description' => $request->description
        ];
        if(isset($request->id) && !empty($request->id)){
        	$json['id'] = $request->id;
        }

		$list = $this->sendRequest('', 'POST', 'common/statussub/create', $json);

        if(isset($list->data) && $list->data->Status == 0){
            toast('Your data has been successfully saved', 'success');
        } else {
            toast($list->data->Message, 'failed');
        }
		return redirect()->route('statussub_list');
    }

    public function delete(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/statussub/delete/'.$request->id);
        if($list == 1){
            toast('Your data has been successfully deleted', 'success');
        } else {
            toast('Your data has been failed to be deleted', 'failed');
        }
		return redirect()->route('statussub_list');
    }
}
