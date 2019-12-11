<?php

namespace App\Http\Controllers\Medical\MedicalServices\Opinion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class InvoiceController extends Controller
{
   public function index(){

        $ids=session('ids');

        $caserefno = $ids['caserefno'];
        
        $data_reftable=['case_type','id_type','race','month','bank_loc','rsn_no_acc','bai_sts','bank_code','acc_type',
                         'emp_type','doc_type','doc_cat','state','national','pay_mode','occupation','notisend_to','gender','opinion_type',
                        'gender','doc_sts','docsrc','doc_type_oc','f34submitby'];

        $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
         if(empty($ref_table)||$ref_table==null)
        {
            toast(' Reftable Not Found', 'error');
            return redirect()->route('logout');
        }

        $invoice = $this->sendRequest('invoice','GET', '/medicalservices/invoices',['ms_inv_caserefno' => $caserefno]);
        dd($invoice);

        $datablade=['ref_table','doclist_select','doclist','obprofile', 'bankinfo','docinfo','invoice'];

        return view('medical.MedicalServices.Investigation.clarification.aocpp.index',compact($datablade));
   }


   public function postInvoice(Request $request)
   {
        

    // dd($request->ms_inv_invdate);
        foreach($request->ms_inv_invdate as $idx=>$lists)
        {
            $originalDate=$lists;
            $newDate = date("Ymd", strtotime($originalDate));
            $array_date[]=[$newDate];
        }


    // dd($request->ms_inv_invstatus);
       foreach($request->ms_inv_invstatus as $idx=>$lists) //idx tu simpan number
       {
            $originalDate=$request->ms_inv_invdate[$idx];    
            $newDate = date("Ymd", strtotime($originalDate));
            
             $array_invoice[]=[
               'ms_inv_caserefno'=>"201909230111",
               'ms_inv_morefno'=>"EI006/2019",
               'ms_inv_idno'=>"950221115432",
               'ms_inv_invstatus'=>"1",//$request->ms_inv_invstatus[$idx],
               'ms_inv_remarks'=>"testing",//$request->ms_inv_remarks[$idx],
               'ms_inv_invrefno'=>$request->ms_inv_invrefno[$idx], 
               'ms_inv_invdate'=>$newDate,
               'ms_inv_amount'=>$request->ms_inv_amount[$idx],
               'ms_inv_filename'=>"docname_doctype2.pdf"
           ];
       }
       
    //    dd($array_invoice);

       $url = config('services.endpoint.url');
       $token= session('API_token');
       // $endpoint ='http://127.0.0.1:8000/api/letter';
       $options = [
           'headers' => [
               'Content-Type' => 'application/json',
               'Accept' => 'application/json',
               'Authorization' => $token
           ],
           'json' => [
               'list'=>$array_invoice

           

           ],
       ];
        // dd($options);
       $client = new Client();
       try {
           $response = $client->post($url.'/medicalservices/invoicecreate',$options)->getBody()->getContents();
           $jsondecode = json_decode($response);

           // dd($jsondecode);
           toast('Successfully created','success');
           return redirect()->back();
       }

       catch (GuzzleHttp\Exception\BadResponseException $e)
       {
           toast('Unsuccessfully created','error');
           return redirect()->back();
       }

       // return $jsondecode;

   }
}
