 {{-- //preview --}}

@extends('general.layouts.app')

@section('content')
 <div class="form-row">
    <div class="col-12">
        <br/>
        <br/>
        <div class="card">
            <div class="card-body">
             <form action="" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-body">
                    <h5 class="card-title"><center>@lang('form/medical.title_preview')<br>@lang('form/medical.title_preview1')</center></h5>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <hr>
                    <hr class="m-t-0 m-b-40">
                    <div class="card_header">
                        <h6 class="card-title-sub">@lang('form/medical.preview.title_ip')</h6><hr>
                        <table id="div_preview" border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">@lang('form/medical.general.name')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('form/medical.preview.idno')</td>
                                <td>:</td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                            <tr>
                                <td class="control-label">@lang('form/medical.preview.gender')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('form/medical.preview.dob')</td>
                                <td>:</td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                        </table>
                    </div>
                    <div class="card_header">
                        <h6 class="card-title-sub">@lang('form/medical.preview.title_mb')</h6><hr>
                        <table id="div_preview" border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">@lang('form/medical.preview.date_of_sitting')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('form/medical.preview.place_of_sitting')</td>
                                <td>:</td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                            <tr>
                                <td class="control-label">@lang('form/medical.preview.mb_chairman')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('form/medical.tab_title.panel') 1</td>
                                <td>:</td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                            <tr>
                                <td class="control-label"></td>
                                <td></td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('form/medical.tab_title.panel') 2</td>
                                <td>:</td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                            <tr>
                                <td class="control-label">@lang('form/medical.preview.ilat_notice_date')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label"></td>
                                <td></td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                            <tr>
                                <td class="control-label">@lang('form/medical.preview.age_notice_received')</td>
                                <td>:</td>                            
                                <td class="control-label text-left">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label"></td>
                                <td></td>
                                <td class="control-label" >
                                    <label class="control-label text-right ">

                                    </label>
                                </td> 
                            </tr>
                        </table>
                    </div>

                  {{--   //Diagnosis 1 collapsed --}}
                  <div id="accordion2" role="tablist" class="accordion" >
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDiagnosis1" aria-expanded="false" aria-controls="collapseDiagnosis1">
                                        <h6 class="card-title"><i class="fa fa-plus"></i> Diagnosis 1</h6>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseDiagnosis1" class="collapse" role="tabpanel" aria-labelledby="headingDiagnosis">
                                 <hr>
                        <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.current_injury')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.diagnosis_radio')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.has_not_achievedMMI')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">

                                    </td>
                                  {{--   <td></td>
                                    <td></td>
                                    <td></td> --}}
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Date</td>
                                    <td>:</td>

                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.add_document')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >

                                    </td>
                                    {{-- <td></td>
                                    <td></td>
                                    <td></td> --}}
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td> 
                                    <td>

                                    </td>      
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.others')</td>
                                    <td>:</td>                            
                                    <td>

                                    </td>      
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td>

                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.description_disease')</td>
                                    <td>:</td>                            
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                </tr>
                            </table>
                            <h6 class="card-title-sub">@lang('form/medical.decision.impairment_rating')</h6>
                            <hr>
                            <table id="div_preview" border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label">@lang('form/medical.preview.system_type')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.justification')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                  
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.ob_fully_incapable')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        Yes/No
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.rehab_recommendation')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        Yes/No
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.type_recommendation')</td>
                                        <td>:-</td>                            
                                        <td class="control-label text-left">
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.rtw')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                      
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.physical_therapy')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.vocational_therapy')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.prosthetic')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.medical_aids')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.others')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    
                                </table>
                                
                            </div>
                        </div>
                    </div>

                    <div id="accordion2" role="tablist" class="accordion" >
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDiagnosis2" aria-expanded="false" aria-controls="collapseDiagnosis2">
                                        <h6 class="card-title"><i class="fa fa-plus"></i> Diagnosis 2</h6>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseDiagnosis2" class="collapse" role="tabpanel" aria-labelledby="headingDiagnosis2">
                                <hr>
                            <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.current_injury')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.diagnosis_radio')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.has_not_achievedMMI')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">

                                    </td>
                                  {{--   <td></td>
                                    <td></td>
                                    <td></td> --}}
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Date</td>
                                    <td>:</td>

                                </tr>

                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.add_document')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left" >

                                    </td>
                                    {{-- <td></td>
                                    <td></td>
                                    <td></td> --}}
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td> 
                                    <td>

                                    </td>      
                                </tr>

                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.others')</td>
                                    <td>:</td>                            
                                    <td>

                                    </td>      
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td>

                                    </td> 
                                </tr>

                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.description_disease')</td>
                                    <td>:</td>                            
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                </tr>
                            </table>

                            
                        <h6 class="card-title-sub">@lang('form/medical.decision.impairment_rating')</h6><hr>

                        <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">@lang('form/medical.preview.system_type')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.justification')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                              
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.ob_fully_incapable')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>

                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.rehab_recommendation')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    Yes/No
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.type_recommendation')</td>
                                    <td>:-</td>                            
                                    <td class="control-label text-left">
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.rtw')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                  
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.physical_therapy')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.vocational_therapy')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.prosthetic')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.medical_aids')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.others')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.general_observation')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.whole_impairmenent')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.general.name')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('form/medical.decision.designation')</td>
                                    <td>:</td>                            
                                    <td class="control-label text-left">
                                    
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"></td>
                                    <td></td>
                                    <td class="control-label" >
                                        <label class="control-label text-right ">

                                        </label>
                                    </td> 
                                </tr>
                            </table>
                    </div>
                </div>
            </div>     

                                <table id="div_preview" border="0" cellpadding="10px">
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.general_observation')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.whole_impairmenent')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.general.name')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td class="control-label">@lang('form/medical.decision.designation')</td>
                                        <td>:</td>                            
                                        <td class="control-label text-left">
                                        
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"></td>
                                        <td></td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">

                                            </label>
                                        </td> 
                                    </tr>
                                </table>               
                        {{-- <div class="form-actions">
                            <button class="btn btn waves-effect waves-light btn-success" type="button" onclick="confirmation()"><label>@lang('form/medical.preview.confirm')</label>
                            </button>
                        </div>
                        <div class='row'>
                           <div class="col-md-12 col-lg-12">
                               <div class="form-actions">
                                   <button type="submit" name="action" value="Submit" class="btn btn waves-effect waves-light btn-success" >SUBMIT</button>
                                   <button type="submit" name="action" value="Back"  class="btn btn waves-effect waves-light btn-info" onclick="submitform()">BACK</button>
                               </div>
                           </div>
                       </div> --}}
                       <div class="form-actions">
                        <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('success') }}">Submit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
<script>
    function confirmation()
    {
        alert('Are You sure want to submit this form?');
    }

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>


