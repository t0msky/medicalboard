<?php

namespace App\Http\Controllers\Scheme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Excel;
use File;
use Storage;
use App\Exports\Statement12cExport;
use App\Exports\QuestionBankExport;

class StatementController extends Controller
{
    public function index(){
    	$caserefno = "A31NTK102019000012";
    	$statement = $this->sendRequest('Statement', 'GET', 'scheme/statment12c/'.$caserefno);
    	$static_options = $this->sendRequest('Statement', 'GET', 'static_options', [], ['ref_code' => ['id_type','state','inv_type','doubtfultype']]);
        $questionbank = $this->sendRequest('Statement', 'GET', 'admin/qbcategory', [], ["limit"=>100, "noticetype"=>"1"]);

        return view('scheme.general.statement', compact('statement', 'static_options', 'questionbank', 'caserefno'));
    }

    public function create(Request $request){
		try{
			$req = [
				'Caserefno' => $request->caserefno,
				'Statement' => [
					'Date' => $request->invdate,
					'Time' => $request->invtime
				],
				'Interviewer' => [
					'Name' => $request->iooperid,
					'Other' => $request->ioothers,
					'IdentificationNo' => $request->interviewer_idno
				],
				'Interviewee' => [
					'Type' => $request->invtype,
					'Name' => $request->intvname,
					'IdentificationType' => $request->intvidtype,
					'IdentificationNo' => $request->intvidno,
					'Address' => [
						'AddressLine1' => $request->intvadd1,
						'AddressLine2' => $request->intvadd2,
						'AddressLine3' => $request->intvadd3,
						'State' => $request->intvstatecode,
						'City' => $request->intvcity,
						'Postcode' => $request->intvpostcode
					],
					'TelephoneNo' => $request->invtelno,
					'Age' => $request->intvage,
					'Language' => $request->language,
					'LanguageOther' => $request->langothers,
					'Translator' => $request->translator,
					'Statement' => $request->statement,
					'QuestionBank' => $request->qbanktype
				]
			];

			if($request->id !== null){
				$req['id'] = $request->id;
			}

    		$statement = $this->sendRequest('Statement', 'POST', 'scheme/statment12c/create', $req);

			toast('Successfully inserting statement','success');
			return redirect()->route('statement_list');

		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Unsuccessfully inserting statement','error');
			return redirect()->route('statement_list');
		}
    }

    public function view(Request $request){
    	$statement = $this->sendRequest('Statement', 'GET', 'scheme/statment12c/'.$request->caserefno.'/'.$request->id);

        return ($statement !== null) ? response()->json($statement->data) : null;
    }

    public function download(Request $request){
        if($request->document_type == "12c"){
            return Excel::download(new Statement12cExport, '12cForm.xlsx');
        } else if($request->document_type == "doubtful"){
            return Excel::download(new Statement12cExport, 'DoubtfulForm.xlsx');
        } else if($request->document_type == "qbank"){
            $questionbank = $this->sendRequest('Statement', 'GET', 'admin/questionbank/', [], ["limit"=>100, "questioncategory"=>"1"]);

            $qbank = new QuestionBankExport;
            $qbank->list = ($questionbank->data !== null) ? $questionbank->data : null;

            return Excel::download($qbank, 'QuestionBank'.$request->qbank_category.'.pdf');
        } else {
            toast('Select Document Type','failed');
            return redirect()->route('statement_list');
        }
    }

    public function upload(Request $request){
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:xls,xlsx,csv'
        ]);

        $statement = array();
        if($request->hasfile('filenames')){
			$exist = array();

        	foreach($request->file('filenames') as $file){
                $name=$file->getClientOriginalName();

                Storage::disk('public')->put($name, file_get_contents($file));

                if(Storage::disk('public')->exists($name)) $exist[] = true;
        	}

            if(sizeof($exist) > 0){
                toast('Data Your files has been successfully added','success');
            } else {
                toast('Data Your files has been not added','failed');
            }
        }

		return redirect()->route('statement_list');
    }
}
