<?php

namespace App\Http\Controllers\Letter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use Storage;
use File;
use PDF;
use Response;
use Validator;
use setasign\Fpdi\Fpdi;

class LetterController extends Controller
{
    //
    public function getid()
    {
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $url = config('services.endpoint.url');
        // $url = "webserv.test/api";
        $token = session('API_token');
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],
            'json' => [
                'caserefno' => $caserefno,
            ]
        ];
        
        $client = new Client();
		$response = $client->get( $url.'/scheme/findletter',$options)->getBody();
        $content = json_decode($response->getContents());
        // dd($content->data->notiid->nt_id);
        return $content->data->notiid->nt_id;
    }
    public function postPdf($caserefno,$doctype,$path,$docname)
    {
        $url = config('services.endpoint.url');
        $token = session('API_token');

        $client = new Client();
        
        $options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],
            'json' => [
                'gdr_caserefno' => $caserefno,
                'gdr_doctype' => $doctype,
                'gdr_docpath' => $path,
                'gdr_docname' => $docname
            ]
        ];
        // dd($options);
		$response = $client->post( $url.'/scheme/genletter',$options)->getBody();
		$content = json_decode($response->getContents());
    }

    public function generateletter()
    {   
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $uniquerefno = $ids['uniquerefno'];
        // dd($uniquerefno);
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $todate = date('d.m.Y');
        $client = new Client();

        $nt_id = $this->getid();

		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],
            'json' => [
                'caserefno' => $caserefno,
                'nt_id' => $nt_id
            ]
        ];
        
        
		$response = $client->get( $url.'/scheme/letter',$options)->getBody();
		$content = json_decode($response->getContents());

        $pdf= PDF::loadView('general.letter_template.notification.surat_kuiri_bencana_kerja', 
        ['branch' => $content->data->branch_info,'caseinfo' => $content->data->caseinfo,'caseemp' => $content->data->caseemp,'caseobprofile' => $content->data->caseobprofile,
        'lmotto' => $content->data->l_motto,'notidoc' => $content->data->notidoc,'noti' => $content->data->noti,'name' => $content->data->user_name,'date'=>$todate]);
        
        $today = date('Ymd');
        $doctype = "G12";
        
        //save to storage
        if(!File::isDirectory(storage_path('letter/'.$uniquerefno.'/'.$caserefno))){
            File::makeDirectory(storage_path('letter/'.$uniquerefno.'/'.$caserefno), 0777, true, true);
        }

        $count_path = storage_path('letter/'.$uniquerefno.'/'.$caserefno);

        $files = File::files($count_path);
        $filecount = 0;
        
        if ($files !== false) {
            $filecount = count($files);
        }
        $filecount++;

        $docname = $caserefno.'_'.$doctype.'_'.$todate.'_'.$filecount.'.pdf';
        $path = storage_path('letter/'.$uniquerefno.'/'.$caserefno).'/'.$docname;
        $pdf->save($path);

        //save pdf to gendocrepo
        $this->postPdf($caserefno,$doctype,$path,$docname);
        // dd($data);
    }
    public function viewletter($nt_id){


            $ids=session('ids');
            $caserefno=$ids['caserefno'];
            $uniquerefno = session('uniquerefno');

            $url = config('services.endpoint.url');
            // $endpoint ='http://127.0.0.1:8000/api/letter';
            $token = session('API_token');

            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => $token
                ],
                'json' => [
                    'gdr_caserefno' => $caserefno,
                    'gdr_docid' => $nt_id
                ]
            ];
            // dd($options);
            $client = new Client();
            try{
                $response = $client->get( $url.'/scheme/findOneLetter',$options)->getBody();
                $content = json_decode($response->getContents());
                // dd($content->data->letter);
                if(!empty($content->data->letter)){
                    $docname = $content->data->letter[0]->gdr_docname;
                    $path = $content->data->letter[0]->gdr_docpath;
                }
                else{
                    toast('Unsuccessfully');
                    return redirect()->back();
                }
                return response()->file($path);
            }
            catch (GuzzleHttp\Exception\BadResponseException $e){
                toast('Unsuccessfully');
                return redirect()->back();
            }
            
    }

}
