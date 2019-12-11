<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="form-row col-md-12 col-lg-6">
                            <label  class="col-form-label">
                                @if($casetype == '1')
                                    @lang('form/medical.decision.date_of_accident')
                                @elseif($casetype == '2')
                                    @lang('form/medical.decision.od_notice_date')
                                @elseif($casetype == '3')
                                    @lang('form/medical.preview.ilat_notice_date')
                                @endif
                            </label>
                            <div class="form-group col-md-5 col-lg-5">
                                <input class="form-control " type="date" id="">
                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                                @if($casetype == '1' || $casetype == '2')
                                    <label  class="col-form-label">@lang('form/medical.decision.current_injury_huk_od')</label>
                                    <div class="form-group col-md-12 col-lg-5">
                                        <select class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                @elseif($casetype == '3')
                                    @lang('form/medical.preview.age_notice_received')
                                    <div class="form-group col-md-5 col-lg-5">
                                        <input class="form-control " type="text" id="">
                                    </div>
                                @endif
                        </div>
                        <div class="table-responsive">     
                            <table id="add-work_history " class="display table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>@lang('form/medical.general.schemerefno')</th>
                                        <th>@lang('form/medical.decision.mb_date')</th>
                                        <th>@lang('form/medical.decision.diagnosis_history')</th> 
                                        <th>@lang('form/medical.decision.impairment_rating')</th>
                                        <th style="display:none;" align="top"></th>
                                        <th style="display:none;"></th>
                                        <th style="display:none;"></th>
                                        <th style="display:none;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2015664474</td>
                                        <td>2019-10-10</td>
                                        <td>Fracture>knee>(Diagnosis)</td>
                                        <td>10%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>   
                                             
                        <div class="form-group col-md-12 col-lg-12">
                            <div class="form-actions">
                                <button class="btn btn waves-effect waves-light btn-success" type="button" onclick="addfullDiagnosis({{$i}});"><i class="fa fa-plus"></i><label>Add Diagnosis</label>
                                </button>
                            </div>
                        </div>
                        <br><br><br>
                        <div id="addfullDiag{{$i}}"></div>
                        <div class="form-actions">
                            <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview_huk') }}">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  

@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{-- //added by ayu 9-10-2019 --}}
<script>

    var BASEURL = "{!! url('/') !!};";
    $('#navbar_panelDr1').addClass('active');
    $('#panelDr1').addClass('active');
    
    //count id for panel
    function addfullDiagnosis(count) {
        alert('Are you sure want to add new diagnosis?');
        var fulldiagnosis = $('div[id^=div_'+count+'_]').length;
        fulldiagnosis++;
        var objTo = document.getElementById('addfullDiag'+count)
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + fulldiagnosis);
        var rdiv = 'removeclass' + fulldiagnosis;
        console.log("Count: " + fulldiagnosis);
        divtest.innerHTML = '<div class="form-body" id="div_'+count+'_'+fulldiagnosis+'"><h6 class="card-title"> Diagnosis '+ fulldiagnosis +'</h6><hr>'+

            '<div class="col-md-12 col-lg-12">'+
                '<div class="form-group">' +
                    '<label>@lang('form/medical.decision.diagnosis')'+ fulldiagnosis + '</label>'+
                '</div>'+
            '</div>'+
            
            '<div class="form-row col-md-12 col-lg-12">'+
                '<label for="searchicd'+ count +'_'+ fulldiagnosis +'" class="col-form-label">@lang('form/medical.decision.icd10')</label>'+
                '<div class="form-group col-md-5 col-lg-5">'+
                    '<input class="form-control ui-autocomplete-list" type="text" id="searchicd'+ count +'_'+ fulldiagnosis +'">' +
                '</div>'+
            '</div>'+

            '<div class="col-md-12 col-lg-12">'+
                '<div class="form-group">'+
                    '<div class="input-group">'+
                        '<textarea name="diagDetail'+ count +'_'+ fulldiagnosis +'" id="diagDetail'+ count +'_' + fulldiagnosis +'" class=" form-control ui-widget" required rows="6" ></textarea>'+
                    '</div>'+
                '</div>'+
            '</div>'+

                
                '<div class="col-md-10">'+
                    '<div class="form-group">'+
                    @if($casetype == '1')
                        '<label class="control-label">@lang('form/medical.decision.current_injury')</label>'+
                    @elseif($casetype == '2')
                        '<label class="control-label">@lang('form/medical.decision.diagnosis_od')</label>'+
                    @elseif($casetype == '3')
                        '<label class="control-label">@lang('form/medical.decision.diagnosis_ilat')</label>'+
                    @endif
                        '<div class="row p-l-20">'+
                             '<div class="custom-control custom-radio" >'+
                             '<input type="radio" id="yes'+count+'_'+ fulldiagnosis +'" name="related_accident'+ fulldiagnosis +'" class="custom-control-input"  onclick="yes_related_accident('+count+','+fulldiagnosis+')" value="yes" required>'+
                                '<label class="custom-control-label" for="yes'+count+'_'+ fulldiagnosis +'">@lang('form/medical.decision.yes')</label>'+
                            '</div>'+
                            '<div class="custom-control custom-radio">'+
                            '<input type="radio" id="no'+count+'_'+ fulldiagnosis +'" name="related_accident'+ fulldiagnosis +'" class="custom-control-input" onclick="no_related_accident('+count+','+fulldiagnosis+')"  value="no" required>'+
                                '<label class="custom-control-label" for="no'+count+'_'+ fulldiagnosis +'" >No</label>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+

            '<div class="col-md-5">'+
                '<div class="form-group">'+
                '<div id="hideRelatedAccident'+count+'_'+fulldiagnosis+'" class="form-group" style="display:none">'+
                    '<label class="control-label">@lang('form/medical.decision.diagnosis_radio')</label>'+
                        '<div class="row p-l-20">'+
                             '<div class="custom-control custom-radio" >'+
                             '<input type="radio" id="acute'+count+'_'+ fulldiagnosis +'" name="current_healthy'+ fulldiagnosis +'" class="custom-control-input"  onclick="permanent_disability('+count+','+fulldiagnosis+')" value="acute" required>'+
                                '<label class="custom-control-label" for="acute'+count+'_'+ fulldiagnosis +'">@lang('form/medical.decision.yes')</label>'+
                            '</div>'+
                            '<div class="custom-control custom-radio">'+
                            '<input type="radio" id="add-work_history1'+count+'_'+ fulldiagnosis +'" name="current_healthy'+ fulldiagnosis +'" class="custom-control-input" onclick="Nopermanent_disability('+count+','+fulldiagnosis+')"  value="add-work_history1" required>'+
                                '<label class="custom-control-label" for="add-work_history1'+count+'_'+ fulldiagnosis +'" >No</label>'+
                            '</div>'+
                             '<div class="custom-control custom-radio">'+
                            '<input type="radio" id="add-work_history2'+count+'_'+ fulldiagnosis +'" name="current_healthy'+ fulldiagnosis +'" class="custom-control-input" onclick="pendingpermanent_disability('+count+','+fulldiagnosis+')"  value="add-work_history2" required>'+
                                '<label class="custom-control-label" for="add-work_history2'+count+'_'+ fulldiagnosis +'"  data-count="'+count+'" data-fulldiagnosis="'+ fulldiagnosis +'" data-toggle="modal" data-target="#Pending">Pending</label>'+
                            '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div col-md-4>'+
                '<div class="table-responsive" id="table_modal'+count+'_'+fulldiagnosis+'" >'+
                    '<table id="add_table_history'+count+'_'+ fulldiagnosis +'" class="display table table-hover table-striped" style="width:70%;">'+
                        '<tbody >'+
                        '<tr id= "addWorkHistory_1"></tr>'+
                        '</tbody>'+
                    '</table>'+
                '</div>'+
                '</div>'+
                '<div id="hidePermanentDisability'+count+'_'+fulldiagnosis+'" class="form-group" style="display:none">'+
                '<h6 class="card-title-sub">@lang('form/medical.decision.description_disease')</h6>'+
                '<hr>'+
                '<div class="form-group col-md-12 col-lg-12">'+
                    '<label>@lang('form/medical.decision.general_observation')</label>'+
                    '<div class="input-group">'+
                        '<textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>'+            '</div>'+
                '</div>'+
                '<div id="accordion1" role="tablist" aria-multiselectable="true">'+
                    '<div class="card m-b-0">'+
                        '<div class="card-header" role="tab" id="headingOne1">'+
                            '<h6 class="mb-0">'+
                                '<a class="link" data-toggle="collapse" data-parent="#accordion1" href="#question" aria-expanded="true" aria-controls="benefit_case">'+
                                    '<h6 class="card-title-sub">'+
                                    '<i class="fa fa-plus"></i>'+
                                     '@lang('form/medical.question.ip_condition')</h6>'+
                                '</a>'+
                            '</h6>'+

                        '</div>'+
                        '<div id="question" class="collapse" role="tabpanel" aria-labelledby="headingOne1">'+
                        '<hr>'+
                            '<div class="card-body">'+
                                '<div class="form-body">'+
                                    '<div class="card-header">'+
                                        '<div class="form-row p-t-20">'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.physical')</label>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="form-row p-t-20">'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.inspection')</label>'+
                                                '<input type="text" id="inspection" class="form-control" required>'+
                                            '</div>'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.palpation')</label>'+
                                                '<input type="text" id="palpation" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                         '<div class="form-row p-t-20">'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.percussion')</label>'+
                                                '<input type="text" id="percussion" class="form-control" required>'+
                                            '</div>'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.auscultation')</label>'+
                                                '<input type="text" id="auscultation" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="form-row p-t-20">'+
                                            '<div class="form-group col-md-12 col-lg-6">'+
                                                '<label class="control-label">@lang('form/medical.question.mental_status')</label>'+
                                                '<input type="text" id="mental_status" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="card-header">'+
                '<h6 class="card-title-sub">@lang('form/medical.decision.impairment_rating')</h6>'+
                '<hr>'+
                '<div class="row p-t-20">'+
                    '<div class="col-md-2">'+
                        '<div class="form-group">'+
                            '<label class="control-label">@lang('form/medical.preview.system_type')</label>'+
                            '<select class="form-control">'+
                                '<option value="">Please Select</option>'+
                            '</select>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-1">'+
                        '<div class="form-group"><br><br>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-3">'+
                        '<div class="form-group">'+
                            '<label class="control-label"><i><center>(dalam perkataan)</center></i></label>'+
                            '<input type="text" class="form-control" id="" value="">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-1">'+
                        '<div class="form-group"><br><br>'+
                            '<label class="control-label">@lang('form/medical.decision.percentage')'+
                            '</label>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="row p-t-20">'+
                    '<div class="col-md-12">'+
                        '<div class="form-group">'+
                            '<label>@lang('form/medical.decision.justification')</label>'+
                            '<textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="row p-t-20">'+
                    '<div class="col-md-6">'+
                        '<div class="form-group">'+
                            @if($casetype == '1')
                            '<label class="control-label">'+
                                '@lang('form/medical.decision.ob_fully_incapable')</label>'+
                            @elseif($casetype == '2' ||$casetype == '3')
                            '<label class="control-label">'+
                                '@lang('form/medical.decision.ob_fully_incapable_ilat')</label>'+
                            @endif
                            '<select class="form-control">'+
                                '<option value="">Please Select</option>'+
                                '<option value="">@lang('form/medical.decision.yes')</option>'+
                                '<option value="">@lang('form/medical.decision.no')</option>'+
                            '</select>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                @if($casetype == '3')
                '<div class="row p-t-20">'+
                    '<div class="col-md-6">'+
                        '<div class="form-group">'+
                            '<label>@lang('form/medical.decision.morbid_date')</label>'+
                            '<input type="date" name="" id="" class="form-control">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                @endif
                '<div class="form-group">'+
                    '<label class="control-label">@lang('form/medical.decision.rehab_recommendation')</label>'+
                        '<div class="row p-l-20">'+
                            '<div class="custom-control custom-radio" >'+
                                '<input type="radio" id="yes_rehab'+count+'_'+ fulldiagnosis +'" name="related_accident'+ fulldiagnosis +'" class="custom-control-input"  onclick="rehab_recommendation('+count+','+fulldiagnosis+')" value="yes" required>'+
                                '<label class="custom-control-label" for="yes_rehab'+count+'_'+ fulldiagnosis +'">@lang('form/medical.decision.yes')</label>'+
                            '</div>'+
                            '<div class="custom-control custom-radio">'+
                                '<input type="radio" id="no_rehab'+count+'_'+ fulldiagnosis +'" name="related_accident'+ fulldiagnosis +'" class="custom-control-input" onclick="no_rehab_recommendation('+count+','+fulldiagnosis+')"  value="no" required>'+
                                '<label class="custom-control-label" for="no_rehab'+count+'_'+ fulldiagnosis +'" >No</label>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-10">'+
                    '<div class="form-group">'+
                        '<div id="hiderehabRecommend'+count+'_'+fulldiagnosis+'" class="form-group" style="display:none">'+
                            '<label class="control-label">@lang('form/medical.decision.type_recommendation')'+
                                '<span class="text-danger">*</span>'+
                            '</label>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.rtw')</label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="rtwrecommend'+count+'_'+fulldiagnosis+'" onclick="show('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="rtwrecommend'+count+'_'+fulldiagnosis+'"></label>'+
                                    '</div>'+
                                '</div>'+
                            
                            '<div id="hideDate'+count+'_'+fulldiagnosis+'" class="form-group" style="display:none">'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.current_limitation')'+
                                        '</label><br>'+
                                        '<label class="control-label">@lang('form/medical.decision.details')'+
                                        '</label>'+
                                        '<input type="text" id="initialAssessTime'+count+'_'+fulldiagnosis+'" class="form-control" required>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.rehabilitation')</label>'+
                                        '<div class="row p-l-20">'+
                                            '<div class="custom-control custom-radio" >'+
                                                '<input type="radio" id="intensiveRehab'+count+'_'+ fulldiagnosis +'" name="Rehab'+ fulldiagnosis +'" class="custom-control-input"  onclick="intensiveRehab('+count+','+fulldiagnosis+')" value="intensiveRehab" required>'+
                                                '<label class="custom-control-label" for="intensiveRehab'+count+'_'+ fulldiagnosis +'">@lang('form/medical.decision.intensive_rehab')</label>'+
                                            '</div>'+
                                            '<div class="custom-control custom-radio">'+
                                                '<input type="radio" id="longtermRehab'+count+'_'+ fulldiagnosis +'" name="Rehab'+ fulldiagnosis +'" class="custom-control-input" value="longtermRehab" onclick="longtermRehab('+count+','+fulldiagnosis+')" required>'+
                                                '<label class="custom-control-label" for="longtermRehab'+count+'_'+ fulldiagnosis +'" >@lang('form/medical.decision.longterm_rehab')</label>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hideIntensiveRehab'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                                '<label class="control-label">@lang('form/medical.decision.suggested_timeframe')</label>'+
                                                '<input type="text" id="timeframe'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-10">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.intensive_physiotherapy')'+
                                        '</label>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.range_motion_exercise')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="range_motion_exercise'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="range_motion_exercise'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.gait_balancing_training')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="gait_balancing_training'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="gait_balancing_training'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.strengthening_stretching_exercise')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="strengthening_stretching_exercise'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="strengthening_stretching_exercise'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.occupational_therapy')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="occupational_therapy'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="occupational_therapy'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.spinal_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="spinal_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="spinal_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.amputee_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="amputee_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="amputee_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.hand_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="hand_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="hand_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.neuro_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="neuro_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="neuro_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.speech_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="speech_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="speech_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.cardiac_rehabilitation')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="cardiac_rehabilitation'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="cardiac_rehabilitation'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-10">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.current_limitation_ob')'+
                                        '</label>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.prolonged_standing_sitting')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="prolonged_standing_sitting'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="prolonged_standing_sitting'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.manual_handling')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="manual_handling'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="manual_handling'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.prolonged_walking')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="prolonged_walking'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="prolonged_walking'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.climbing_stairs')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="climbing_stairs'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="climbing_stairs'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.lifting_from_waist_to_above_the_shoulder')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="lifting_from_waist_to_above_the_shoulder'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="lifting_from_waist_to_above_the_shoulder'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.lifting_from_floor_to_waist_level')</label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="lifting_from_floor_to_waist_level'+count+'_'+fulldiagnosis+'" >'+
                                                    '<label class="custom-control-label" for="lifting_from_floor_to_waist_level'+count+'_'+fulldiagnosis+'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                   '</div>'+
                                '</div>'+
                                '<div class="col-md-10">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.type_of_job')'+
                                        '</label>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.sedentary') </label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="sedentary'+count+'_'+ fulldiagnosis +'" onclick="showsedentary('+count+','+fulldiagnosis+')">'+
                                                    '<label class="custom-control-label" for="sedentary'+count+'_'+ fulldiagnosis +'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-6">'+
                                                '<div class="form-group">'+
                                                    '<div id="hideSedentary'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/medical.decision.sedentary')</label>'+
                                                            '<input type="text" id="sedentary'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.vocational') </label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="vocationalrehab'+count+'_'+ fulldiagnosis +'" onclick="showvocationalrehab('+count+','+fulldiagnosis+')">'+
                                                    '<label class="custom-control-label" for="vocationalrehab'+count+'_'+ fulldiagnosis +'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-6">'+
                                                '<div class="form-group">'+
                                                    '<div id="hideVocationalRehab'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/medical.decision.vocational')</label>'+
                                                            '<input type="text" id="vocationalrehab'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                         '<div class="row p-t-20">'+
                                            '<div class="col-md-4">'+
                                                '<label class="control-label">@lang('form/medical.decision.specific_existing_skill') </label>'+
                                            '</div>'+
                                            '<div class="col-sm-1">'+
                                                '<div class="custom-control custom-checkbox">'+
                                                    '<input type="checkbox" class="custom-control-input" id="skill'+count+'_'+ fulldiagnosis +'" onclick="showskill('+count+','+fulldiagnosis+')">'+
                                                    '<label class="custom-control-label" for="skill'+count+'_'+ fulldiagnosis +'"></label>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-6">'+
                                                '<div class="form-group">'+
                                                    '<div id="hideSkill'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/medical.decision.specific_existing_skill')</label>'+
                                                            '<input type="text" id="skill'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '</div>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.physical_therapy') </label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="physical_therapy'+count+'_'+ fulldiagnosis +'" onclick="show2('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="physical_therapy'+count+'_'+ fulldiagnosis +'"></label>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hidePhysical'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                                '<label class="control-label">@lang('form/medical.decision.physical_therapy')<span class="text-danger">*</span></label>'+
                                                '<input type="text" id="phy_therapy'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.vocational_therapy') </label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="vocational_therapy'+count+'_'+ fulldiagnosis +'" onclick="show3('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="vocational_therapy'+count+'_'+ fulldiagnosis +'"></label>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hideVocational'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                            '<label class="control-label">@lang('form/medical.decision.vocational_therapy')<span class="text-danger">*</span></label>'+
                                                '<input type="text" id="voca_therapy'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.prosthetic') </label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="prosthetic'+count+'_'+ fulldiagnosis +'" onclick="show4('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="prosthetic'+count+'_'+ fulldiagnosis +'"></label>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hideProsthetic'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                                '<label class="control-label">@lang('form/medical.decision.prosthetic')<span class="text-danger">*</span></label>'+
                                                '<input type="text" id="prosthetic'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.medical_aids')</label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="medical_aids'+count+'_'+ fulldiagnosis +'" onclick="show5('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="medical_aids'+count+'_'+ fulldiagnosis +'"></label>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hideMedical'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                                '<label class="control-label">@lang('form/medical.decision.medical_aids')<span class="text-danger">*</span></label>'+
                                                    '<input type="text" id="medical'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row p-t-20">'+
                                '<div class="col-md-2">'+
                                    '<label class="control-label">@lang('form/medical.decision.others')</label>'+
                                '</div>'+
                                '<div class="col-sm-1">'+
                                    '<div class="custom-control custom-checkbox">'+
                                        '<input type="checkbox" class="custom-control-input" id="others'+count+'_'+ fulldiagnosis +'" onclick="show6('+count+','+fulldiagnosis+')">'+
                                        '<label class="custom-control-label" for="others'+count+'_'+ fulldiagnosis +'"></label>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-6">'+
                                    '<div class="form-group">'+
                                        '<div id="hideOthers'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                            '<div class="form-group">'+
                                                '<label class="control-label">@lang('form/medical.decision.others')<span class="text-danger">*</span></label>'+
                                                    '<input type="text" id="others'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                            '<div class="form-group">'+
                                '<div id="hideOthers'+count+'_'+ fulldiagnosis +'" class="form-group" style="display:none">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('form/medical.decision.others')<span class="text-danger">*</span></label>'+
                                                '<input type="text" id="others'+count+'_'+ fulldiagnosis +'" class="form-control" required>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+ //hiderelatedaccident
    '</div>'+
            '<div class="form-actions">'+
                '<button type="button" class="btn btn waves-effect waves-light btn-success" id="btnsetappt">Save</button>'+
            '</div><br><br>'+
            '<div class="input-group-append">'+
                '<button class="btn btn-danger" type="button" onclick="remove_addfullDiagnosis('+fulldiagnosis+');"><i class="fa fa-minus"></i></button>'+
            '</div>';
        
        show_mmi();
        permanent_disability(count,fulldiagnosis);
        Nopermanent_disability(count,fulldiagnosis);
            
        objTo.appendChild(divtest);

        $.ajax({
            url: '/xml/icd10.xml',
            dataType: "xml",
            success: function(xmlResponse){

                $.extend($.ui.autocomplete.prototype, {

                    _renderMenu: function(ul,item){
                      var that = this, idSect = '', namediag = '';

                      $.each(item,function(index,item){
                          var li;
                          
                          if(item.idSect != idSect){
                            ul.append( "<li class='ui-autocomplete " + item.idSect + "'><a>" + item.valuesect + "</a></li>" );
                            idSect = item.idSect;
                          }

                         
                          if (item.idSect) {
                            if(item.namediag != namediag){
                                 ul.append( "<li style='padding-left:20px;'class='ui-autocomplete " + item.namediag + "'><a>" +item.namediag +' '+ item.valuediag + "</a></li>" );
                                 namediag = item.namediag;
                            }

                            li = that._renderItemData( ul, item );

                            if(item.namediag){
                                li.attr( "aria-label", item.value);
                                li.attr( "style", "padding-left:35px;");
                            }

                          }
                      });
                    },

                     _renderItem: function( ul, item, k) {
                          return $( "<li>" )
                          .addClass(item.idSect)
                          .attr( "data-value", item.valueresult)
                          .append( $( "<a>" ).text(item.value))
                          .appendTo(ul);
                        }
                });        

                var sect = ($("section>diag>diag",xmlResponse).map(function(){
                return {

                    idSect: $(this).parent().parent().attr('id'),
                    valuesect: $(this).parent().parent().find('section>desc').text(),
                    namediag: $(this).parent().find("section>diag>name").text(),
                    valuediag: $(this).parent().find('section>diag>desc').text(),
                    namediag2: $(this).find('section>diag>diag>name').text(),
                    value:($(this).find('section>diag>diag>name').text() + ' ' + $(this).find('section>diag>diag>desc').text())
                    // valueresult:($(this).parent().parent().find('section>desc').text()+ '\n' + 
                    //     $(this).parent().find("section>diag>name").text()+ ' ' + $(this).parent().find('section>diag>desc').text() + '\n' +
                    //     $(this).find('section>diag>diag>name').text() + ' ' + $(this).find('section>diag>diag>desc').text())
                    
                    }
                }).get());

                var idName = '#diagDetail' + count + '_' + fulldiagnosis;
                $('#searchicd'+ count + '_' + fulldiagnosis).autocomplete({
                    source: sect,
                    minLength: 0,
                    select: function( event, ui ) {
                      autocomplete_result(ui.item.value, idName);  
                    }
                });
            }
        });
        
    }

    function autocomplete_result(diagnosis, idName){
        var tempText = $(idName).val();
        $(idName).val(tempText+' '+diagnosis);
    }   

    function remove_addfullDiagnosis(rid) {
        $('.removeclass' + rid).remove();
        fulldiagnosis--;
    }

// add
$(document).ready(function()
{

    // delete a post
    $(document).on('click', '.delete-modal', function() 
    {
        var count = $(e.relatedTarget).data('count');
        var fulldiagnosis = $(e.relatedTarget).data('fulldiagnosis');
        var id = $(e.relatedTarget).data('id');
        $('#tr'+count+'_'+fulldiagnosis+'_'+id).detach();
        // numWH--;
    });

    //show modal pop up
    $('#Pending').on('show.bs.modal', function (e) 
    {

        alert('kuarlah');
        // var id = $(e.relatedTarget).data('id');
        var count = $(e.relatedTarget).data('count');
        var fulldiagnosis = $(e.relatedTarget).data('fulldiagnosis');

        console.log('1count: '+count);
        console.log('fulldiagnosis: '+fulldiagnosis);

        var id = 'addNewWorkHistory'+count+'_'+fulldiagnosis;

        var modal = $(this);
        modal.find('.addNewWorkHistory').val(id);
        $('.addNewWorkHistory').attr('id',id);

        $('.addNewWorkHistory').on('click', function()
        {
            if($('.addNewWorkHistory').val() === id)
            {
               var numWH = $('tr[id^=tr_'+count+'_'+fulldiagnosis+'_').length;
                numWH++;
                var tr = '<tr id="tr'+count+'_'+fulldiagnosis+'_'+numWH+'">' ;
                var value = '';

                    $('#Pending').find('.form-control').each(function()
                    {


                        console.log($(this).attr('id'), $(this).val());

                        if (value == '')
                        {

                            if($(this).val() !== '')
                            {
                                if( $(this).attr('id') == 'mmi'){
                                    value += 'Has Not Achieved MMI: '+$(this).val();  

                                }else if ( $(this).attr('id') == 'other_'){
                                    value += 'Others: '+$(this).val();  
                                }
                              
                            }   
                        }
                        else
                        {
                            if($(this).val() !== '')
                            {
                                if( $(this).attr('id') == 'mmi')
                                {
                                    value += '<br> Has Not Achieved MMI: '+$(this).val();  
                                }
                                else if ( $(this).attr('id') == 'other_')
                                {
                                    value += '<br> Others: '+$(this).val();  
                                }  
                            }  
                        } 
                    });

                    tr += '<td>'+value+'</td>';
                    tr += '<td>';
                    tr += '<div class= "btn-group">';       
                    tr += ' <button class="delete-modal btn btn-danger" data-count="'+count+'" data-fulldiagnosis="'+ fulldiagnosis +'" data-id="'+numWH+'"><span class="glyphicon glyphicon-trash"></span> Delete </button>'; 
                    tr += '</div>';
                    tr += '</td>';
                    tr += '</tr>';
                    $('#add_table_history'+count+'_'+fulldiagnosis+' tbody tr:last').after(tr);
            
                    //clearform
                    $('#reset').find('form').submit();
                    $('.clearFields').val('');

                    //clearform modal for not achieve mmi -date add 17-10-2019
                    document.getElementById("has_not_achievedMMI").checked = false;
                    document.getElementById("hideMmi").style.display = "none";

                    //clearform modal for add document add 17-10-2019
                    document.getElementById("add_document").checked = false;
                    document.getElementById("hideDoc").style.display = "none";

                     //clearform modal for others  add 17-10-2019
                    document.getElementById("others1").checked = false;
                    document.getElementById("hideOther1").style.display = "none";

                }
            });
        });
    });



    

function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

    function rehab_recommendation(count,fulldiagnosis)
    {
        $('#hiderehabRecommend'+count+'_'+fulldiagnosis+'').show();

      
    }
    function no_rehab_recommendation(count,fulldiagnosis)
    {
        $('#hiderehabRecommend'+count+'_'+fulldiagnosis+'').hide();
      
    }


  function show(count,fulldiagnosis){

        var check = document.getElementById('rtwrecommend'+count+'_'+fulldiagnosis+'');
     
        if(check.checked == true )
        {
            $('#hideDate'+count+'_'+fulldiagnosis+'').show();

        }
        else
        {
            $('#hideDate'+count+'_'+fulldiagnosis+'').hide();

        }
    }

    function show2(count,fulldiagnosis)
    {
        var check1 = document.getElementById('physical_therapy'+count+'_'+fulldiagnosis+'');

        if(check1.checked == true ){
            $('#hidePhysical'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hidePhysical'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
    function show3(count,fulldiagnosis)
    {
        var check2 = document.getElementById('vocational_therapy'+count+'_'+fulldiagnosis+'');

        if(check2.checked == true ){
            $('#hideVocational'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideVocational'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
    function show4(count,fulldiagnosis)
    {
        var check3 = document.getElementById('prosthetic'+count+'_'+fulldiagnosis+'');

        if(check3.checked == true ){
            $('#hideProsthetic'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideProsthetic'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
    function show5(count,fulldiagnosis)
    {
        var check4 = document.getElementById('medical_aids'+count+'_'+fulldiagnosis+'');

        if(check4.checked == true ){
            $('#hideMedical'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideMedical'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
    function show6(count,fulldiagnosis)
    {
        var check5 = document.getElementById('others'+count+'_'+fulldiagnosis+'');

        if(check5.checked == true ){
            $('#hideOthers'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideOthers'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
    function showsedentary(count,fulldiagnosis)
    {
        var checksedentary = document.getElementById('sedentary'+count+'_'+fulldiagnosis+'');

        if(checksedentary.checked == true ){
            $('#hideSedentary'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideSedentary'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
  
    function showvocationalrehab(count,fulldiagnosis)
    {
        var checkvocationalrehab = document.getElementById('vocationalrehab'+count+'_'+fulldiagnosis+'');

        if(checkvocationalrehab.checked == true ){
            $('#hideVocationalRehab'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideVocationalRehab'+count+'_'+fulldiagnosis+'').hide();   
        }
    }
      function showskill(count,fulldiagnosis)
    {
        var checkskill = document.getElementById('skill'+count+'_'+fulldiagnosis+'');

        if(checkskill.checked == true ){
            $('#hideSkill'+count+'_'+fulldiagnosis+'').show();
        }
        else
        {
            $('#hideSkill'+count+'_'+fulldiagnosis+'').hide();   
        }
    }

    //modal checkbox
       function show_mmi()
    {
        
        var check = document.getElementById("has_not_achievedMMI");

        if(check.checked == true )
        {
            $("#hideMmi").show();
        }
        else
        {
            $("#hideMmi").hide();   
        }
    }
           function add_doc()
    {
        
        var check = document.getElementById("add_document");

        if(check.checked == true )
        {
            $("#hideDoc").show();
        }
        else
        {
            $("#hideDoc").hide();   
        }
    }

           function show_other()
    {
        
        var check = document.getElementById("others1");

        if(check.checked == true )
        {
            $("#hideOther1").show();
        }
        else
        {
            $("#hideOther1").hide();   
        }
    }
//16/10/2019
    function permanent_disability(count,fulldiagnosis)
    {
        $('#hidePermanentDisability'+count+'_'+fulldiagnosis+'').show();
        // $('#add-work_history-body'+count+'_'+fulldiagnosis+'').hide();
        $('#table_modal'+count+'_'+fulldiagnosis+'').hide();

    }
     function pendingpermanent_disability(count,fulldiagnosis)
    {
        $('#hidePermanentDisability'+count+'_'+fulldiagnosis+'').hide();
        // $('#add-work_history-body'+count+'_'+fulldiagnosis+'').show();
        $('#table_modal'+count+'_'+fulldiagnosis+'').show();
    }
    function Nopermanent_disability(count,fulldiagnosis)
    {
        $('#hidePermanentDisability'+count+'_'+fulldiagnosis+'').hide();
        // $('#add-work_history-body'+count+'_'+fulldiagnosis+'').hide();
        $('#table_modal'+count+'_'+fulldiagnosis+'').hide();

    }


    // 8-11-2019 ayu 
    // function showAmend(){

    //     var check = document.getElementById("amenddecision");
     
    //     if(check.checked == true ){
    //         $("#hideAmend").show();
    //     }
    //     else
    //     {
    //         $("#hideAmend").hide();

    //     }
    // }

    function intensiveRehab(count,fulldiagnosis)
    {
        $('#hideIntensiveRehab'+count+'_'+fulldiagnosis+'').show();
 
    }
    function longtermRehab(count,fulldiagnosis)
    {
        $('#hideIntensiveRehab'+count+'_'+fulldiagnosis+'').hide();
 
    }

     function yes_related_accident(count,fulldiagnosis)
    {
        $('#hideRelatedAccident'+count+'_'+fulldiagnosis+'').show();

      
    }
     function no_related_accident(count,fulldiagnosis)
    {
        $('#hideRelatedAccident'+count+'_'+fulldiagnosis+'').hide();
        $('#hidePermanentDisability'+count+'_'+fulldiagnosis+'').hide();
        // $('#add-work_history-body'+count+'_'+fulldiagnosis+'').hide();
        $('#table_modal'+count+'_'+fulldiagnosis+'').hide();

    }

    // function amendment_decision(aval) {
    //     if (aval == "agree") {
    //         $('#hideDecision').show();
    //     }
    //     else {
    //         $('#hideDecision').hide();
    //     }
    // }


    
</script> 

@endsection