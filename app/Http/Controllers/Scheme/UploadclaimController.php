<?php

namespace App\Http\Controllers\scheme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Response;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use setasign\Fpdi\Fpdi;
use File;
use Validator;
class UploadclaimController extends Controller
{

    public function ScanningDone(Request $req)
    {
        $scancaserefno = $req->query('caserefno');
        $caserefno = session('caserefno');
        
        return $scancaserefno.'++'.$caserefno;
        if ($scancaserefno == $caserefno)
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Scan successful');
        }
        
    }
    public function download(Request $req)
    {
        
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        $uniquerefno=$ids['uniquerefno'];

        $docname = $req->query('docname');  
        $show=$req->query('show');
     
        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $options = [
        'headers' => [
            'Authorization' => $token
            
        ],   
        'query' => [
            'docname'=> $docname,
            
           ],
        ];
        
        $response = $client->get($url.'/common/getDownloadNotes', $options)->getBody();
        $docinfo = json_decode($response->getContents());
   
        
        $docinfo=$docinfo->data;
    
        if(!empty($docinfo)){  
            foreach($docinfo as $idx=>$index){
                $dn_page_note[$idx]=$index->dn_page_note;
                $dn_details_note[$idx]=$index->dn_details_note;
                $dn_specific_note[$idx]=$index->specific_note;
                $notes=$index->notes;
                $docid=$index->notes_id;
                
              }
              session(['dn_page_note' =>$dn_page_note,'dn_details_note'=>$dn_details_note,'dn_specific_note'=>$dn_specific_note]);
        }
        else{
            $dn_page_note=null;
            $dn_details_note=null;
            $dn_specific_note=null;
            $notes=null;
            $docid=null;
            session(['dn_page_note' =>$dn_page_note,'dn_details_note'=>$dn_details_note,'dn_specific_note'=>$dn_specific_note]);
        }
     
        $docpath = 'documents/'.$uniquerefno.'/'.$caserefno.'/'.$docname;
        $path = storage_path($docpath);
        $type = File::mimeType($path);
     
        session(['docname'=>$docname]);
    
        if($type=="image/jpeg"||$type=="image/png" || $type=="image/jpg")
       {
           
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$docpath.'"'
        ]);
        
       }
        else if($type == "application/pdf")
        {
             return view('scheme.general.supportingDocument.view',['notes'=>$notes,'docid'=>$docid,'docname'=>$docname,'docinfo'=>$docinfo,'show'=>$show]); 
             
            
        }
       
        
    }
    public function upload(Request $request)
    {
        
        
         $ids=session('ids');
         $operid="Najmi";
         $brcode="APK";
         $caserefno=$ids['caserefno'];
         $uniquerefno=$ids['uniquerefno'];
         $dataSet = array();
         $cnt = 0;

     $validator = Validator::make(Input::all(), 
     array( 
        'pdf.*' => 'max:2000|mimes:pdf,jpeg,jpg,png'
      ));

     if ($validator->fails()) {
          toast('Failed To Upload Because Wrong Format Type','error');
          return redirect()->back();
     }

        

        if ($request->pdf == null)
        {
            toast('No document to be uploaded','error');
            return redirect()->back();
        }
         $doccount="1";
        $doctype_select = $request->doccat;
        $values_array= array_count_values($doctype_select);
        foreach ($request->pdf as $index => $pdf)
        {      
            $date = date('Ymd');
            $document_type=$request->pdf[$index]->getMimeType();
            $docall = $request->doccat[$index];
            $receive_date =$request->receive_date[$index];
            $doccat=substr($docall,4);
            $doctype=substr($docall,0,3);
           
            $source_doc =$request->source_doc[$index];
            $document_type_ori_copy=$request->document_type[$index];
            $status=$request->status[$index];
      
            if($values_array[$docall]==$doccount){
                $doccount="1";
            }
            else{
                $doccount++;
            }
            
            if($document_type == "application/pdf")
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.pdf';
               
            }
            else if($document_type == "image/jpeg")
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.jpeg';
            }
            else if($document_type == "image/jpg")
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.jpg';
            }
            else if($document_type == "image/png")
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.png';
            }
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$uniquerefno,
                    'date' =>$date,
                    'time' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>$doccount,
                    'recvdate'=>$receive_date,
                    'docsts'=>$status,
                    'source'=>$source_doc,
                    'documentype'=>$document_type_ori_copy

                ];
            //  Storage::disk('sftp')->put($docname, file_get_contents($pdf)); 
            //  Storage::makeDirectory($directory);
            // $docpath = 'app/documents/'.$docname;
            // $path = storage_path($docpath);
            // $type = File::mimeType($path);

            if(!File::isDirectory(storage_path('documents/'.$uniquerefno.'/'.$caserefno))){
                File::makeDirectory(storage_path('documents/'.$uniquerefno.'/'.$caserefno), 0777, true, true);
                  
            }
                 Storage::disk('local_document')->putFileAs($uniquerefno.'/'.$caserefno, $pdf,$docname); 
           
            
          
            // $path = Storage::putFile('avatars', $request->file('avatar'));
             // $pdf->Storage::putFile(storage_path('documents/'.$uniquerefno.'/'.$caserefno), $docname);
        }
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
       
        
    
         $client = new Client();
		$url = config('services.endpoint.url');
		$token = session('API_token');
		$options = [
			'headers' => [
                'Authorization' => $token,
                'Content-Type' => 'application/json',
				'Accept' => 'application/json',
            ],   
            'json' => $docrepo
			
        ];
    
        try{
			$response = $client->post($url.'/common/upload', $options)->getBody();
            $content = json_decode($response->getContents());
            $errorcode = $content->{'errorcode'};
            
        if ($errorcode == 0)
             {
                toast('Upload successful','success');
                return redirect()->back();
              }
            else
            {
                toast('Upload unsuccessful','error');
                return redirect()->back();
            }
		} catch (GuzzleHttp\Exception\BadResponseException $e){
			toast('Upload unsuccessful','error');
            return redirect()->back();
        }  
    
       
    }
    public function viewnotes()
    {
        $uniquerefno = session('uniquerefno');
        $ids=session('ids');
        $caserefno=$ids['caserefno'];

        $docname = session('docname');  
        $dn_page_note=session('dn_page_note');
        
        //dd($docname, $dn_page_note);
     
        $dn_details_note=session('dn_details_note');
        $dn_specific_note=session('dn_specific_note');
 
        $pdf = new Fpdi();
        $docpath = 'documents/'.$uniquerefno.'/'.$caserefno.'/'.$docname;
        $path = storage_path($docpath);
        $pageCount = $pdf->setSourceFile($path);
       
        $countfor="0";
        $xaxis="5115";
        $yaxis="3960";
    
             for ($i = 1; $i <= $pageCount; $i++) 
             {
                 
                 
                   if(isset($dn_page_note[$countfor])==true &&  $dn_page_note[$countfor]==$i  )
                      {
                        
                         $tplIdx = $pdf->importPage($i, '/MediaBox');
                         $pdf->SetTitle($docname);
                         $pdf->AddPage();
                         //cell margin
                         //$pdf->setCellPaddings(1, 1, 1, 1);
 
                         // set cell margins
                         //$pdf->setCellMargins(1, 1, 1, 1);
                         $pdf->useTemplate($tplIdx);
                         $pdf->SetFont('Helvetica');
                         $pdf->SetTextColor(0, 0, 0);
                         $pdf->setFillColor(255,255,0); //rgb color
                             if(count(array_keys($dn_page_note, $dn_page_note[$countfor]))>1)
                             {
                                     for ($u = 1; $u <= $pageCount; $u++) 
                                     {
                                            if($dn_specific_note[$u]==$u)
                                            {
                                                 if(strpos(nl2br($dn_details_note[$u]),"<br />")!=false)
                                                 {
                                                     $pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$u]) +  strlen($dn_details_note[$u])), 10, $dn_details_note[$u], 5115, 3960 ,'L', TRUE);
                                                      $pdf->SetXY($xaxis, $yaxis);
                                                 }
                                                 else
                                                 {
                                                    $pdf->cell(($pdf->GetStringWidth($dn_details_note[$u]) + strlen($dn_details_note[$u])), 10, $dn_details_note[$u], 5115, 3960 ,'L', TRUE);
                                                    $pdf->SetXY($xaxis, $yaxis);
                                                  }    
                                             }
                                        $yaxis++;   
                                      }
                                $countfor++;
                             }
                           else
                              {
                                if(strpos(nl2br($dn_details_note[$countfor]),"<br />")!=false)
                                {
 
                                     
 
                                     $xaxis=$xaxis / 55;  //"5115";
                                     $yaxis=$yaxis / 100;   //""3960";
                                    //dd("1");
                                    //dd($pdf->GetStringWidth($dn_details_note[$countfor]));
                                    //dd(strlen($dn_details_note[$countfor]));
 
                                    $arr = explode("\n", $dn_details_note[$countfor]);
                                    //dd(count($arr));
 
 
                                    $itemplen = 0;
                                    for ($itemparr = 0; $itemparr < count($arr); $itemparr++)
                                    {
                                         $currentlen = strlen($arr[$itemparr]);
                                         
                                         if ($currentlen > $itemplen)
                                         {
                                             $itemplen = $currentlen;  
                                         }
                                    }
 
                                    //dd($itemplen);
                                    $iwordlong = $itemplen * 3;
                                    
 
                                    //dd($countfor);
                                    //dd($dn_details_note[$countfor]);
 
 
 
                                    $pdf->SetXY($xaxis, $yaxis); 
                                    
                                    $pdf->Multicell($iwordlong, 4, $dn_details_note[$countfor],  $xaxis, $yaxis  ,'L', TRUE);
 
                                    //$pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$countfor]) +  strlen($dn_details_note[$countfor])), 3, $dn_details_note[$countfor],  $xaxis, $yaxis  ,'L', TRUE);
                                     //$pdf->Multicell(100, 6, $dn_details_note[$countfor],  300, 300  ,'L', TRUE);
                                     //$pdf->MultiCell(55, 5, $dn_details_note[$countfor], 1, 'J', 1, 2, '' ,'', true);
                                     //$pdf->MultiCell(55, 5, $dn_details_note[$countfor], 1, 'J', 1, 2, 125, 210, TRUE);
                                     
                                     
                                     //$pdf->MultiCell(55, 5, $dn_details_note[$countfor], 1, '', 0, 1, '', '', true);
                                     // $pdf->Cell(($pdf->GetStringWidth($text1) + 2), 7, $text1, 2, 20 ,'L', TRUE);
                                     //$pdf->SetXY($xaxis, $yaxis);
                                     
                                     /*
                                     $pdf->SetX(50); 
                                     $pdf->MultiCell(100,10,'SetFillColor is not set, value =false',1,'J',false);
                                     $pdf->SetXY(1, 50000);
                                     */
                                 }
                                else
                                {
                                 dd("2");
                                     $pdf->cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor],  5115, 3960  ,'L', TRUE);
                                     $pdf->SetXY(30, 30);
                                 }
 
                             }
                                //   if(count(array_keys($dn_page_note, $dn_page_note[$countfor]))>1){
                                //     $pdf->Cell(($pdf->GetStringWidth(nl2br($dn_details_note[$countfor])) + 2), 7, nl2br($dn_details_note[$countfor]), 2, 20 ,'L', TRUE);
                                //     $pdf->Cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + 20), 7, $dn_details_note[2], 90, 20 ,'L', TRUE);
                                 //   }
                                //   else{
                                //     $pdf->Cell(($pdf->GetStringWidth(nl2br($dn_details_note[$countfor])) + 2), 10, nl2br($dn_details_note[$countfor]), 90, 20 ,'L', TRUE);
                                //   }
                       $countfor++;
                      
                      }
                     
                      elseif(isset($dn_details_note[$countfor])==true &&  $dn_details_note[$countfor]!=null  )
                      {
                          $tplIdx = $pdf->importPage($i, '/MediaBox');
                          $pdf->SetTitle($docname);
                          $pdf->AddPage();
                          $pdf->useTemplate($tplIdx);
                          $pdf->SetFont('Helvetica');
                          $pdf->SetTextColor(0, 0, 0);
                          $pdf->setFillColor(255,255,0); //rgb color
                          $pdf->SetXY(30, 30);
                            if(strpos(nl2br($dn_details_note[$countfor]),"<br />")!=false)
                              {
                               $pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$countfor]) +  strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor], 5115, 3960 ,'L', TRUE);
                              }
                            else
                              {
                               $pdf->cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor],  5115, 3960  ,'L', TRUE);
                              }
                      }
                      else
                      {
                         $pdf->SetTitle($docname);
                         $tplIdx = $pdf->importPage($i, '/MediaBox');
                         $pdf->AddPage();
                         $pdf->header = false;
                         $pdf->useTemplate($tplIdx);
                      }
                     
                      
          }
          $pdf->Output();
    }
    public function viewNonotes()
    {
        $uniquerefno = session('uniquerefno');
        $ids=session('ids');
        $caserefno=$ids['caserefno'];
        
         $docname = session('docname');
         $pdf = new Fpdi();
         $docpath = 'documents/'.$uniquerefno.'/'.$caserefno.'/'.$docname;
         $path = storage_path($docpath);
         $pageCount = $pdf->setSourceFile($path);
         for ($i = 1; $i <= $pageCount; $i++) {
            $tplIdx = $pdf->importPage($i, '/MediaBox');
            $pdf->AddPage();
            $pdf->SetTitle($docname);
            $pdf->header = false;
            $pdf->useTemplate($tplIdx);
        }
        
        $pdf->Output();
        

    }
    
}
