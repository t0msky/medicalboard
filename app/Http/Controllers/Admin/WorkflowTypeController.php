<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkflowTypeController extends Controller
{
    public function index(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/workflowtype')->data;
    	return view('user_admin.WorkflowType.index', compact('list'));
    }

    public function create(Request $request){
    	$list = (isset($request->id)) ? $this->sendRequest('', 'GET', 'common/workflowtype/'.$request->id)->data : array();
    	return view('user_admin.WorkflowType.create', compact('list'));
    }

    public function save(Request $request){
        $json = [
        	'module' => 'scheme',
            'name' => $request->name,
            'description' => $request->description,
            'list' => $request->list,
            'status' => $request->status
        ];
        if(isset($request->id) && !empty($request->id)){
        	$json['id'] = $request->id;
        }

		$list = $this->sendRequest('', 'POST', 'common/workflowtype/create', $json);

        if(isset($list->data) && $list->data->Status == 0){
            toast('Your data has been successfully saved', 'success');
        } else {
            toast($list->data->Message, 'failed');
        }
		return redirect()->route('workflowtype_list');
    }

    public function delete(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/workflowtype/delete/'.$request->id);
        if($list == 1){
            toast('Your data has been successfully deleted', 'success');
        } else {
            toast('Your data has been failed to be deleted', 'failed');
        }
		return redirect()->route('workflowtype_list');
    }
}
