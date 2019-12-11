<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkflowController extends Controller
{
    public function index(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/workflow')->data;
    	return view('user_admin.workflow.index', compact('list'));
    }

    public function create(Request $request){
    	$list = (isset($request->id)) ? $this->sendRequest('', 'GET', 'common/workflow/'.$request->id)->data : array();
        $ref_table = $this->sendRequest('', 'GET', 'static_options', [], ['ref_code' => ['case_type']]);
        $ref_tabled = $this->sendRequest('', 'GET', 'dynamic_options', [], ['fields' => ['workflowtype','roles','statussub']]);
        $module = ['scheme'=>'Scheme'];

    	return view('user_admin.workflow.create', compact('list', 'ref_table', 'ref_tabled', 'module'));
    }

    public function save(Request $request){
        $json = [
            'workflow_type' => $request->workflow_type,
            'module' => $request->module,
            'module_next' => $request->module_next,
            'type' => $request->type,
            'roles' => $request->roles,
            'roles_next' => $request->roles_next,
            'code' => $request->code,
            'name' => $request->name,
            'substatus_first' => $request->substatus_first,
            'substatus_last' => $request->substatus_last,
            'sequence' => $request->sequence
        ];
        if(isset($request->id) && !empty($request->id)){
        	$json['id'] = $request->id;
        }

		$list = $this->sendRequest('', 'POST', 'common/workflow/create', $json);

        if(isset($list->data) && $list->data->Status == 0){
            toast('Your data has been successfully saved', 'success');
        } else {
            toast($list->data->Message, 'failed');
        }
		return redirect()->route('workflow_list');
    }

    public function delete(Request $request){
    	$list = $this->sendRequest('', 'GET', 'common/workflow/delete/'.$request->id);
        if($list == 1){
            toast('Your data has been successfully deleted', 'success');
        } else {
            toast('Your data has been failed to be deleted', 'failed');
        }
		return redirect()->route('workflow_list');
    }
}
