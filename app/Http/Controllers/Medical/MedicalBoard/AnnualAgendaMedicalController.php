<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Auth;
use DB;
use Input;
use Response;

class AnnualAgendaMedicalController extends Controller
{
    
    public function index()
    {
        try
        {
            $role = session('user_roles');

            $data_reftable = ['state', 'mb_category', 'sidang', 'doc_special', 'benfityp'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $hospital = $this->sendRequest('Hospital List', 'GET', 'medical/gethospital_list', [], ['hospital_id' => '5', 'role' => $role ]);
            $doctor = $this->sendRequest('Doctor List', 'GET', 'admin/doctors');

            $hospital = $this->Checking($hospital);
            $doctor = $this->Checking($doctor);

            $medical_board_category = [];
            foreach($role as $r){

                $medical_board_category[]= $this->getMbCategory($r);

            }

            $datablade = ['ref_table', 'role', 'hospital', 'medical_board_category', 'doctor'];

            return view('medical.MedicalBoard.annualagenda.index',compact($datablade));
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    
    }

    public function getMbCategory($role1)
    {
        try
        {
            $medical_board_category = [];

            $data_reftable = ['mb_category'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            foreach ($ref_table->mb_category as $mb) {
                if($role1 == "ROLOMB")
                {
                    if($mb->{'ref_code'} == '1')
                        $medical_board_category = $mb->{'desc_en'};
                }
                else if($role1 == "ROLOSMB")
                {
                    if($mb->{'ref_code'} == '2')
                       $medical_board_category = $mb->{'desc_en'};
                }
                else if($role1 == "ROLOMAB")
                {
                    if($mb->{'ref_code'} == '3')
                        $medical_board_category = $mb->{'desc_en'};
                }
                else if($role1 == "ROLOSMAB")
                {
                    if($mb->{'ref_code'} == '4')
                        $medical_board_category = $mb->{'desc_en'};
                }
                else if($role1 == "ROMAB")
                {
                    if($mb->{'ref_code'} == '3' || $mb->{'ref_code'} == '4')
                        $medical_board_category = array($mb->{'desc_en'}, $mb->{'desc_en'});
                }
            }

            return $medical_board_category;
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function getHospitalAddress($id)
    {
        try{
            $role = session('user_roles');

            $hospital_address = $this->sendRequest('Hospital Address', 'GET', 'medical/gethospitaladdress', [], ['hospital_id' => $id, 'role' => $role]);

            if(empty($hospital_address)||$hospital_address==null)
            {
                toast(' Hospital Address Not Found', 'error');
            }

            return array_values($hospital_address);
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try
        {
            $date_takwim1 = $request->get('date_takwim');
            $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
            $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
            $year = substr($date_takwim,0,4);
            $chairman = $request->chairman;
            $secretariat = $request->secretariat;

            if($chairman == '')
                $chairman = null;

            if($secretariat == '')
                $secretariat = null;

            $options =  [
                'year' => $year,
                'venue' => $request->venue,
                'session' => $request->session,
                'date_takwim' => $date_takwim,
                'hospital_id' => $request->hospital_id,
                'tmbcat_catid' => $request->mb_category,
                'chairman_id' => $chairman,
                'secretariat_id' => $secretariat,
                'statecode' => $request->statecode,
                'table' =>$request->table,
            ];

            // return $options;
            $content = $this->sendRequest('Set Annual Agenda', 'POST', 'medical/addnewtakwim', $options, []);

            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 'Record has successfully created')
                {
                    // toast('Record has successfully updated', 'success');
                    return response()->json(['data'=>'0','message'=>$content->data[0]]);
                }
                else
                {
                    // toast('Update Failed', 'error');
                    return response()->json(['data'=>'1','message'=>$content->data[0]]);
                }
            }
            else
            {
                return redirect()->back();
            }
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function getAnnualAgendaCalendar($id, $mb_category = null)
    {
        try
        {
            $content = $this->sendRequest('Annual Agenda ', 'GET', 'medical/viewannualagenda_withoutyear', [], ['hospital_id' => $id, 'mb_category' => $mb_category]);

            $result = [];
            foreach($content->data[0][0] as $e){

                if($e->remarks_id != 0){
                    $remarks1 = $this->sendRequest('Remarks', 'GET', 'common/remarks/'.$e->remarks_id);
                    $remarks2=$this->Checking($remarks1);
                    $remarks = $remarks2->remark;
                    // dd($remarks);
                }else{
                    $remarks = '';
                }

                if($mb_category == '1' || $mb_category == '2' || $mb_category == '3' || $mb_category == '4')
                {
                    if($e->rel_takwimmbcategory != null)
                    {
                        // foreach($e->rel_takwimmbcategory as $mbc)
                        // {
                        //   $mbcategory = $mbc->tmbcat_catid;
                        // }

                        $mbcategory = $e->rel_takwimmbcategory->tmbcat_catid;

                        $table = array(
                            'table' => $e->rel_takwimdiscipline
                        );

                        $result[] = array(
                            'id' => $e->id,
                            'name' => $mbcategory,
                            'location' => $e->venue,
                            'startDate' => $e->date_takwim,
                            'endDate' => $e->date_takwim,
                            'session' => $e->session,
                            'hospital_id' => $e->hospitals_id,
                            'chairman_id' => $e->chairman_id,
                            'secretariat_id' => $e->secretariat_id,
                            'remarks_id' => $e->remarks_id,
                            'remarks' => $remarks,
                            'table' => $table,
                        );
                    }
                }else
                {
                    if($e->rel_takwimmbcategory != null)
                    {
                        // foreach($e->rel_takwimmbcategory as $mbc)
                        // {
                        //   $mbcategory = $mbc->tmbcat_catid;
                        // }

                        $mbcategory = $e->rel_takwimmbcategory->tmbcat_catid;

                    }else{
                        $mbcategory = 'MB Category not exist';
                    }

                    $table = array(
                        'table' => $e->rel_takwimdiscipline
                    );

                    $result[] = array(
                        'id' => $e->id,
                        'name' => $mbcategory,
                        'location' => $e->venue,
                        'startDate' => $e->date_takwim,
                        'endDate' => $e->date_takwim,
                        'session' => $e->session,
                        'hospital_id' => $e->hospitals_id,
                        'chairman_id' => $e->chairman_id,
                        'secretariat_id' => $e->secretariat_id,
                        'remarks_id' => $e->remarks_id,
                        'remarks' => $remarks,
                        'table' => $table,
                    );
                }
            }

            foreach($content->data[0][1] as $ph){
                $result[] = array(
                    'publicholiday' => $ph,
                );
            }

            return $result;
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function getAnnualAgenda($id, $year = null, $mb_category = null)
    {
        try
        {
            $role = session('user_roles');

            $data_reftable = ['state', 'mb_category', 'sidang', 'doc_special', 'benfityp'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $content = $this->sendRequest('Annual Agenda Listing ', 'GET', 'medical/viewannualagenda', [], ['hospital_id' => $id, 'year' => $year, 'mb_category' => $mb_category]);
            $hospital = $this->sendRequest('Hospital List', 'GET', 'medical/gethospital_list', [], ['hospital_id' => '5', 'role' => $role ]);
            $doctor = $this->sendRequest('Doctor List', 'GET', 'admin/doctors');

            $content = $this->Checking($content);
            $hospital = $this->Checking($hospital);
            $doctor = $this->Checking($doctor);

            $result = [];

            if(is_array($content))
            {
                foreach($content as $c){
                    foreach($c as $e){

                        if($e->rel_takwimmbcategory != null)
                        {
                            foreach($e->rel_takwimdiscipline as $data)
                            {

                                $date_takwim1 = $e->date_takwim;
                                $date_takwim = substr($date_takwim1,6,8).'/'.substr($date_takwim1,4,2).'/'.substr($date_takwim1,0,4);

                                $mbcategory = '';
                                foreach($ref_table->mb_category as $mb){
                                    if($e->rel_takwimmbcategory != '')
                                    {
                                        if($e->rel_takwimmbcategory->tmbcat_catid == $mb->ref_code)
                                            $mbcategory = $mb->desc_en;
                                    }
                                    else
                                        $mbcategory = '';
                                }

                                foreach($ref_table->sidang as $s){
                                    if($e->session == $s->ref_code)
                                        $session = $s->desc_en;
                                }

                                foreach($ref_table->doc_special as $ds){
                                    if($data->td_discipline == $ds->ref_code)
                                        $discipline = $ds->desc_en;
                                }

                                $hospitals = '';
                                foreach($hospital as $hs){
                                    foreach($hs as $h){
                                        if($e->hospitals_id == $h->id)
                                            $hospitals = $h->name;
                                    }
                                }

                                $doctors = '';
                                foreach($doctor as $dc){
                                    if($data->rel_takwimdoctor != '')
                                    {
                                        foreach($data->rel_takwimdoctor as $tdc)
                                        {
                                            if($tdc->doctor_id == $dc->user_id)
                                                $doctors = $dc->doctor_name;
                                        }
                                    }
                                    else
                                        $doctors = '';
                                }

                                $result[] = array(
                                    'mb_category' => $mbcategory,
                                    'venue' => $e->venue,
                                    'date_takwim' => $date_takwim,
                                    'session' => $session,
                                    'hospital_id' => $hospitals,
                                    'discipline' => $discipline,
                                    'quota' => $data->td_quota,
                                    'panel' => $doctors
                                );
                            }   
                        }
                    }
                }
            }
            else
            {
              $result = [];
            }

            return $result;
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
        
    }

    public function updateAnnualAgenda(Request $request)
    {
        try
        {
            $date_takwim1 = $request->date_takwim;
            $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
            $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
            $year = substr($date_takwim,0,4);
            $date = date('Ymd');
            $table = $request->get('table');

            $options =  [
                'takwim_id' => $request->takwim_id,
                'year' => $year,
                'venue' => $request->venue,
                'session' => $request->session,
                'date_takwim' => $date_takwim,
                'hospital_id' => $request->hospital_id,
                'takwim_mbcategory_id' => $request->mb_category,
                'chairman_id' => $request->chairman,
                'secretariat_id' => $request->secretariat,
                'statecode' => $request->statecode,
                'remarks'=> $request->remarks,
                'remarks_id' => $request->remarks_id,
                'table' =>$request->table,
            ];

            // if($table == '')
            //     $table = null;

            // if($chairman == '')
            //     $chairman = null;

            // if($sectariat == '')
            //     $sectariat = null;

            // return $options;
            $content = $this->sendRequest('Update/Reschedule Takwim', 'POST', 'medical/rescheduletakwim', $options, []);

            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 'Record has successfully updated')
                {
                    // toast('Record has successfully updated', 'success');
                    return response()->json(['data'=>'0','message'=>$content->data[0]]);
                }
                else
                {
                    // toast('Update Failed', 'error');
                    return response()->json(['data'=>'1','message'=>$content->data[0]]);
                }
            }
            else
            {
                return redirect()->back();
            }
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function duplicateAnnualAgenda(Request $request)
    {
        try
        {
            $newstartdate1 = $request->newstartdate;
            $newenddate1 = $request->newenddate;
            $newstartdate2 = preg_replace("/[^0-9]/", "", $newstartdate1);
            $newenddate2 = preg_replace("/[^0-9]/", "", $newenddate1);
            $newstartdate = substr($newstartdate2,4,4).substr($newstartdate2,2,2).substr($newstartdate2,0,2);
            $newenddate = substr($newenddate2,4,4).substr($newenddate2,2,2).substr($newenddate2,0,2);
            $year = substr($newstartdate,0,4);

            $options = [
                'year' =>$year,
                'venue' =>$request->venue,
                'session' => $request->session,
                'newstartdate' => $newstartdate,
                'newenddate' => $newenddate, 
                'hospital_id' => $request->hospital_id, 
                'tmbcat_catid' => $request->mb_category,
                'chairman_id' => $request->chairman,
                'secretariat_id' => $request->sectariat,
                'statecode' => $request->statecode, 
                'table' => $request->table
            ];

            return $options;
            $content = $this->sendRequest('Update/Reschedule Takwim', 'POST', 'medical/duplicateTakwim', $options, []);

            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 'Record has successfully created')
                {
                    // toast('Record has successfully updated', 'success');
                    return response()->json(['data'=>'0','message'=>$content->data[0]]);
                }
                else
                {
                    // toast('Update Failed', 'error');
                    return response()->json(['data'=>'1','message'=>$content->data[0]]);
                }
            }
            else
            {
                return redirect()->back();
            }
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
    }

    public function deleteAnnualAgenda(Request $request)
    {
        try
        {
            $content = $this->sendRequest('Delete Takwim', 'POST', 'medical/deletetakwim', ['takwim_id' => $request->takwim_id], []);

            if(!empty($content)||$content!=null)
            {
                if($content->data[0] == 'Record has successfully deleted')
                {
                    // toast('Record has successfully updated', 'success');
                    return response()->json(['data'=>'0','message'=>$content->data[0]]);
                }
                else
                {
                    // toast('Update Failed', 'error');
                    return response()->json(['data'=>'1','message'=>$content->data[0]]);
                }
            }
            else
            {
                return redirect()->back();
            } 
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return redirect()->back();
        }
                            
    }

    public function getPanel($id)
    {   
        try
        {
            $doctors = [];

            $doctor = $this->sendRequest('Doctors', 'GET', 'admin/doctors');
            $doctor= $this->Checking($doctor);

            if(!empty($doctor)){
                foreach($doctor as $d)
                {
                    if($d->speciality_id == $id)
                        $doctors[] = $d;
                }
            }else{
                $doctors = [];
            }
            
            return response()->json($doctors);

        }catch(\Exception $e)
        {
            toast('Doctor Not Found','error');
            return redirect()->back();
        }
    }

    public function getChairman($id)
    {  
        try
        {
            $chairmans = [];

            $chairmans = $this->sendRequest('Chairman List', 'GET', 'medical/listofchairman', [], ['hospital_id' => $id]);

            if(!empty($chairmans)){
                $chairmans = array_values($chairmans);
            }
            
            return response()->json($chairmans);

        }catch(\Exception $e)
        {
            toast('Chairman List Not Found','error');
            return redirect()->back();
        }
    }

    public function getSecretariat($id)
    {  
        try
        {
            $secretariat = [];

            $secretariat = $this->sendRequest('Secretariat List', 'GET', 'medical/listofsecretariat', [], ['hospital_id' => $id]);

            if(!empty($secretariat)){
                $secretariat = array_values($secretariat);
            }
            
            return response()->json($secretariat);

        }catch(\Exception $e)
        {
            toast('Secretariat List Not Found','error');
            return redirect()->back();
        }
    }

}
