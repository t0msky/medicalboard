<?php

namespace App\Http\Controllers\Medical\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use DB;

class SessionMedicalController extends Controller
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

            $countPanel = 3;
            $hospital = $this->sendRequest('Hospital List', 'GET', 'medical/gethospital_list', [], ['role' => $role ]);
            $doctor = $this->sendRequest('Doctor List', 'GET', 'admin/doctors');

            $hospital = $this->Checking($hospital);
            $doctor = $this->Checking($doctor);
            // dd($role);

            $datablade = ['ref_table', 'hospital', 'doctor', 'countPanel'];

            return view('medical.medicalboard.session.index',compact($datablade));

        }
        catch (\Exception $e)
        {
            toast('Error', 'error');
            return redirect()->back();
        }

    }

    public function getChairmanAttendance($id, $date = null, $session = null)
    {
        try
        {

            $options = [
                'hospital_id' => $id,
                'date' => $date,
                'session' => $session,
            ];

            $content = $this->sendRequest('Appointment Listing', 'GET', 'medical/getattendancechairman', $options, []);
            $content = $this->Checking($content);

            $chairman = [];
            if(!empty($content)){
                foreach($content as $c){

                    $rp_chairman = [];
                    if(!empty($c->replacechairman)){
                        foreach($c->replacechairman as $rc){
                            $rp_chairman[] = array(
                                "user_id" => $rc->user_id,
                                "replacementby" => $rc->chairman_name,
                            );
                        }
                    }

                    $chairman[] = array(
                        "name" => $c->chairman_name,
                        "replacementby" => $rp_chairman,
                    );
                }
            }

            return $chairman;

        }
        catch (\Exception $e)
        {
            toast('Error', 'error');
            return redirect()->back();
        }
    }

    public function getPanelAttendance($id, $date = null, $session = null)
    {
        try
        {

            $options = [
                'hospital_id' => $id,
                'dateattend' => $date,
                'session' => $session,
            ];

            $content = $this->sendRequest('Appointment Listing', 'GET', 'medical/getpanelattendance', $options, []);
            $content = $this->Checking($content);

            $panel = [];
            if(!empty($content)){
                foreach($content as $c){

                    $rp_panel = [];
                    if(!empty($c->listreplacedr)){
                        foreach($c->listreplacedr as $rp){
                            $rp_panel[] = array(
                                "doctor_id" => $rp->doctor_id,
                                "replacementby" => $rp->doctor_name,
                            );
                        }
                    }

                    $panel[] = array(
                        "name" => $c->doctor_name,
                        "replacementby" => $rp_panel,
                    );
                }
            }

            return $panel;

        }
        catch (\Exception $e)
        {
            toast('Error', 'error');
            return redirect()->back();
        }
    }

    public function getHaAttendance($id)
    {
        try
        {
            
            $options = [
                'hospital_id' => $id,
            ];

            $content = $this->sendRequest('Appointment Listing', 'GET', 'medical/getattendanceha', $options, []);
            $content = $this->Checking($content);

            $hospital_assistant = [];
            if(!empty($content)){
                foreach($content as $c){
                    $hospital_assistant[] = array(
                        "name" => $c->ha_name,
                        "nric_no" => $c->nric_no,
                        "acctno" => $c->acctno
                    );
                }
            }

            return $hospital_assistant;

        }
        catch (\Exception $e)
        {
            toast('Error', 'error');
            return redirect()->back();
        }
    }

}
