<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use DB;

class AppointmentMedicalController extends Controller
{
    
	public function index()
    {
        try
        {
            $role = session('user_roles');

            $data_reftable = ['state', 'mb_category', 'doc_special', 'sidang'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $hospital = $this->sendRequest('Hospital List', 'GET', 'medical/gethospital_list', [], ['hospital_id' => '5', 'role' => $role ]);
            $hospital = $this->Checking($hospital);
            // dd($hospital);
            $disciplineDate = DB::select('select takwim_discipline.td_id, date_takwim, date(date_takwim) as datetakwim from takwim, takwim_discipline where takwim.takwim_id =  takwim_discipline.td_takwimid and takwim_discipline.td_discipline = ?',['5']);

            $datablade = ['ref_table', 'disciplineDate', 'hospital'];

            return view('medical.MedicalBoard.appointment.index',compact($datablade));
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return back();
        }
        
    }

    public function getAppointment($id, $mbcategory = null)
    {
        try
        {
            $data_reftable = ['doc_special'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            // $options = [
            //     'hospital_id' => $id,
            //     'mbCategory' => $mbcategory,
            // ];

            // // return $options;
            // $content = $this->sendRequest('Appointment', 'GET', 'medical/getsetapptlisting', $options, []);
            // $content = $this->Checking($content);

            $discipline = array("6","7","8");

            $data[] = array(
                "schemerefno" => "A31NTK20191121",
                "Name" => "AMIR NUBHAN BIN OSMAN",
                "Discipline" => $discipline,
            );

            $content = array(
                "success" => "true",
                "data" => $data,
                "message" => "0"
            );

            $appointment = [];
            $discipline = [];
            $count = '';
            if(!empty($content)){
                foreach($content['data'] as $c){

                    foreach($ref_table->doc_special as $ds){
                        foreach($c['Discipline'] as $d){
                            if($ds->ref_code == $d)
                                $discipline[] = " ".$ds->desc_en;
                        }
                    }

                    $appointment[] = array(
                        "schemerefno" => $c['schemerefno'],
                        "name" => $c['Name'],
                        "discipline" => $discipline
                    ); 
                }
            }
            return $appointment;
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return back();
        }
    }

    public function getAppointmentListing($id, $date = null, $idno = null, $name = null)
    {
        try
        {
            $data_reftable = ['doc_special', 'sidang', 'appt_sts'];

            $ref_table = $this->sendRequest('Reftable','GET', 'static_options', [], ['ref_code' => $data_reftable ]);
            if(empty($ref_table)||$ref_table==null)
            {
                toast(' Reftable Not Found', 'error');
                return redirect()->route('logout');
            }

            $year = substr($date,0,4);

            $option[] = array(
                'idno' => $idno,
                'name' => $name,
                'schemerefno' => 'NULL'
            );

            $options = [
                'year' => $year,
                'hospital_id' => $id,
                'date' => $date,
                'option' => $option,
            ];

            // return $options;
            $content = $this->sendRequest('Appointment Listing', 'GET', 'medical/getappoinmentlisting', $options, []);
            $content = $this->Checking($content);
            // $content = json_decode(json_encode($content), true);
            // dd($content);

            $appointment = [];
            $count = '';
            if(!empty($content->appoinmentlisting)){
                foreach($content->appoinmentlisting as $c){
                    $uniquerefno = $c->uniquerefno;
                    $date_takwim = $c->appt_date;
                    $session = $c->irel_appt->session;

                    if(!empty($content->obdetails))
                    {
                        if($content->obdetails->uniquerefno == $uniquerefno)
                            $obname = $content->obdetails->name;
                    }

                    foreach($ref_table->doc_special as $ds){
                        foreach($c->rel_mbsessionspeciality as $rm){
                            if($ds->ref_code == $rm->speciality)
                                $discipline = $ds->desc_en;

                            foreach($content->obdetails->reschedule_date as $rd){
                                if($rd->speciality == $rm->speciality)
                                    $reschedule_date1 = $rd->listdate;
                            }

                            $schemerefno = $rm->relationship_medicalboard->mb_schemerefno;
                        }
                    }

                    foreach($ref_table->sidang as $s){
                        if($s->ref_code == $c->irel_appt->session)
                            $session1 = $s->desc_en;
                    }

                    foreach($ref_table->appt_sts as $sts){
                        if($sts->ref_code == $c->appt_status)
                                $status = $sts->desc_en;
                    }

                    $date_takwim1 = preg_replace("/[^0-9]/", "", $date_takwim);
                    $date_takwim2 = substr($date_takwim1,6,2)."-".substr($date_takwim1,4,2)."-".substr($date_takwim1,0,4);

                    $appointment[] = array(
                        "id" => $c->id,
                        "absent" => $c->appt_ippresent,
                        "uniquerefno" => $uniquerefno,
                        // "takwim_id" => 1,
                        "prev_takwimid" => $c->takwim_id,
                        "id2" => $c->irel_appt->id,
                        "medicalboard_id" =>$c->medicalboard_id,
                        "mb_sessionspeciality_id" => $c->mb_sessionspeciality_id,
                        // "date_current" => 1,
                        "prevdate" => $c->appt_prvdate,
                        "schemerefno" => $schemerefno,
                        "name" => $obname,
                        "discipline" => $discipline,
                        "session" => $session1,
                        "date" => $date_takwim2,
                        "status" => $status,
                        "reschedule_date" => $reschedule_date1

                    ); 
                }
            }
            return $appointment;
        }
        catch(\Exception $exception)
        {
            toast('Error','error');
            return back();
        }
    }

    public function rescheduleAppointment(Request $request)
    {
        try
        {
            $date_takwim1 = $request->apptdiscipline_date;
            $date_takwim = substr($date_takwim1,0,4)."-".substr($date_takwim1,4,2)."-".substr($date_takwim1,6,2);

            $appointment[] = array(
                "takwim_id" => $request->apptresc_takwimid,
                "prev_takwimid" => $request->apptresc_prev_takwimid,
                "id"=> $request->apptresc_id2,
                "medicalboard_id" => $request->apptresc_mbid,
                "mb_sessionspeciality_id" => $request->apptresc_mssid,
                "date" => $date_takwim,
                "prevdate" => $request->apptresc_prev_date
            );

            $options =  [
                'id' => $request->apptresc_id,
                'hospital_id' => $request->appt_hospital,
                'absent' => $request->apptresc_absent,
                'uniquerefno' => $request->apptresc_uniquerefno,
                'appointment' =>$appointment,
            ];

            // return $options;
            $content = $this->sendRequest('Reschedule Appointement', 'POST', 'medical/reschedule_perob', $options, []);
            // dd($content);
            if(!empty($content)||$content!=null)
            {
                if($content->message == 'Record sucessfully updated')
                {
                    toast('Record sucessfully updated', 'success');
                    return redirect()->back();
                }
                else
                {
                    toast('Record unsucessfully updated', 'success');
                    return redirect()->back();
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
            return back();
        }

    }

}
