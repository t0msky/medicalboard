<!-- form -->
<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('post.accidentinfo')}}" method="post" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        
                        @if(Session::get('messageacc')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageacc')}}
                            </div>
                        </div>
                        @elseif (!empty($messageacc))
                        <div class="card-footer">
                            <div class="alert alert-warning">
                                {{$messageacc}}
                            </div>
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.accident_date')</label><span class="required">*</span>
                                    @if (!empty($accinfo))
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}}" required readonly>
                                    @else
                                    @if (Session::get('accddate'))
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" required readonly>
                                    @else
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="" required>
                                    @endif
                                    @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.accident_time')</label><span class="required">*</span>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        @if (!empty($accinfo))
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" required readonly>
                                        @else
                                        @if (Session::get('accdtime'))
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}" required readonly>
                                        @else
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="" required>
                                        @endif
                                        @endif
                                    </div>
                            </div>
                            {{-- <div class="col-md-0">
                                <div class="form-group"><br>
                                    <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">@lang('form/scheme.general.collapse.accident.viewOriginal')</button>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel3">@lang('scheme/index.attr.accident_details')</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.accidentDetailOriginal') 
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>Date Of Death</label>
                                    <input type="date" class="form-control" name="doddate"  value="">
                                </div>
                            </div>
                        <!--/span-->
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.place_accident')</label><span class="required">*</span>
                                    <select class="form-control" name="accdplace" id="accdplace" onchange="placeacc()" required>
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->place}} @endif</option-->
                                        <option selected hidden readonly value="please select">Please Select</option>
                                        @foreach($ref_table->accd_place as $AccPlace)
                                        @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code)
                                        <option value="{{$AccPlace->ref_code}}" selected>{{$AccPlace->desc_en}}</option>
                                        @else
                                        <option value="{{$AccPlace->ref_code}}">{{$AccPlace->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.when_accident')</label><span class="required">*</span>
                                <select class="form-control" name="accdwhen" id="accdwhen" style="width: 100%; height:36px;" required>
                                    <option selected hidden readonly value="please select">Please Select</option>
                                    @foreach($ref_table->acc_when as $AccWhen)
                                        @if (!empty($accinfo) && $accinfo->accdwhen == $AccWhen->ref_code)
                                        <option value="{{$AccWhen->ref_code}}" selected>{{$AccWhen->desc_en}}</option>
                                        @else
                                        <option value="{{$AccWhen->ref_code}}">{{$AccWhen->desc_en}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4" id="others_acc_when" style="display:none">
                                <label class="control-label">Others</label>
                                <input type="text" class="form-control clearFields" name="whendesc" value="@if(!empty($accinfo)){{$accinfo->whendesc}} @endif">
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.add_acc_place')</label><span class="required">*</span>
                                    <input type="text" class="form-control" id="addressaccident1" name="addressaccident1" value="" required>
                                </div>
                                <div class="form-group col-md-12 col-lg-12">
                                    <input type="text" class="form-control" id="addressaccident2" name="addressaccident2" value="" >
                                </div>
                                <div class="form-group col-md-12 col-lg-12">
                                        <input type="text" class="form-control" id="addressaccident3" name="addressaccident3" value="" >
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/address-info.state')</label>
                                        <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                        <select name='state' id='state' class='form-control'>
                                            @foreach($ref_table->state as $s)
                                            @if(!empty($obprofile) && $obprofile->state_code == $s->ref_code)
                                            <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                            @else
                                            <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/address-info.city')</label>
                                        <input type="text" class="form-control" name="city"  value="">  
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/address-info.postcode')</label><span class="required">*</span>
                                        <input type="text" id="postcode" name="postcode" value="" class="form-control" required>
                                </div>
                            </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.date_death')</label>
                                        <input type="date" name="dodeath" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div> --}}
                                <!--/span-->
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.how_accident')</label><span class="required">*</span>
                                        <textarea type="text" id="how" name="how" class="form-control clearFields" value="" required>@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/scheme.general.collapse.accident.mode_transport')</label><span class="required">*</span>
                                        <select id="transport" name="transport" class="form-control">
                                            <option selected hidden readonly value="please select">Please Select</option>
                                            @foreach($ref_table->transport as $trans)
                                                @if (!empty($accinfo) && $accinfo->transport == $trans->ref_code)
                                                <option value="{{$trans->ref_code}}" selected>{{$trans->desc_en}}</option>
                                                @else
                                                <option value="{{$trans->ref_code}}">{{$trans->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/scheme.general.collapse.accident.modeTransport_others')</label>
                                        <input name="trothers" id="trothers" type="text" class="form-control" value="@if(!empty($accinfo)){{$accinfo->transportothers}} @endif">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-8">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.causeOfAccd')</label><span class="required">*</span>
                                        <input name="causeOfAccd" id="causeOfAccd" type="text" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.causative_agent')</label><span class="required">*</span>
                                        <select name="causative" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                            <option selected hidden readonly value="please select">Please Select</option>
                                            @foreach($ref_table->causative as $causa)
                                                @if (!empty($accinfo) && $accinfo->causative == $causa->ref_code)
                                                <option value="{{$causa->ref_code}}" selected>{{$causa->desc_en}}</option>
                                                @else
                                                <option value="{{$causa->ref_code}}">{{$causa->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.typeInjury')</label><span class="required">*</span>
                                        <select name="injurytype" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                            <option selected hidden readonly value="please select">Please Select</option>
                                            @foreach($ref_table->injury_type as $injury)
                                                @if (!empty($accinfo) && $accinfo->injurytype == $injury->ref_code)
                                                <option value="{{$injury->ref_code}}" selected>{{$injury->desc_en}}</option>
                                                @else
                                                <option value="{{$injury->ref_code}}">{{$injury->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group col-md-12  col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.locationOfInjury')</label><span class="required">*</span>
                                        <select name="injury_loc" class="form-control">
                                            <option selected hidden readonly value="please select">Please Select</option>
                                            @foreach($ref_table->injury_loc as $injuryLoc1)
                                                @if (!empty($accinfo) && $accinfo->injuryloc == $injuryLoc1->ref_code)
                                                <option value="{{$injuryLoc1->ref_code}}" selected>{{$injuryLoc1->desc_en}}</option>
                                                @else
                                                <option value="{{$injuryLoc1->ref_code}}">{{$injuryLoc1->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.accident.accident_code')</label><span class="required">*</span>
                                        <select name="acc_code" class="form-control">
                                            <option selected hidden readonly value="please select">Please Select</option>
                                            @foreach($ref_table->acc_code as $c)
                                                @if (!empty($accinfo) && $accinfo->accdcode == $c->ref_code)
                                                <option value="{{$c->ref_code}}" selected>{{$c->desc_en}}</option>
                                                @else
                                                <option value="{{$c->ref_code}}">{{$c->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            {{-- <div class="form-row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.employment_code')</label><span class="required">*</span>
                                        <select name="profcode" class="form-control">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->employmentcode}} @endif</option-->
                                        <option>@lang('accidentDetails.choose2')</option>
                                        {{-- @foreach($profcode as $c)
                                                @if (!empty($accinfo) && $accinfo->employmentcode == $c->refcode)
                                                <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                @else
                                                <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label><span class="required">*</span>
                                        <select name="industcode" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->industrialcode}} @endif</option-->
                                            <option>@lang('accidentDetails.choose2')</option>
                                            {{-- @foreach($industcode as $c)
                                                @if (!empty($accinfo) && $accinfo->industrialcode == $c->refcode)
                                                <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                @else
                                                <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                @endif
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="form-row">
                                <!--/span-->
                                <div class="form-group col-md-12 col-lg-12">
                                     <label class="control-label">@lang('form/scheme.general.collapse.accident.reason_travelling')</label><span class="required">*</span>
                                        <textarea type="text" id="reason" name="reason" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</textarea>
                                </div>
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.injury_desc')</label><span class="required">*</span>
                                        <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                                </div>
                        </div>
                        <!--/form-row-->
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/scheme.general.collapse.accident.accident_workingDay')</label>
                                <select class="form-control clearFields" name="accwork">
                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                    <option selected hidden readonly value="please select">Please Select</option>
                                    @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                    <option value='Y' selected>@lang('option.yes')</option>
                                    <option value='N'>@lang('option.no')</option>
                                    @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                                    <option value='Y' >@lang('option.yes')</option>
                                    <option value='N' selected>@lang('option.no')</option>
                                    @else
                                    <option value='Y'>@lang('option.yes')</option>
                                    <option value='N'>@lang('option.no')</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        {{-- <div class='form-row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('accidentDetails.attr.are_wagesPaid')</label>
                                    <select class="form-control" name="wagespaid"> --}}
                                            {{-- <!--option value="">@if(!empty($accinfo)){{$accinfo->wagespaid}} @endif</option--> --}}
                                            
                                            {{-- <option selected hidden readonly value="please select">Please Select</option>
                                            @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                            <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @elseif (!empty($accinfo) && $accinfo->wagespaid == 'N')
                                            <option value='Y' >@lang('accidentDetails.yes')</option>
                                            <option value='N' selected>@lang('accidentDetails.no')</option>
                                            @else
                                            <option value='Y'>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @endif
                                        </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-row">    
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.start_workingTime')</label>
                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                    <input type="time" class="form-control clearFields start_time" name="startworktime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{$accinfo->startworktime}} @endif">
                                    @else
                                    <input id="start_time" type="time" class="form-control clearFields " name="startworktime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{$accinfo->startworktime}} @endif">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.rest_period')</label>
                                @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                <input  type="time"  class="form-control clearFields" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{$accinfo->restperiod}} @endif">
                                @else
                                <input id="recess_time" type="time" class="form-control clearFields" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{$accinfo->restperiod}} @endif">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.end_workingTime')</label>
                                @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                <input type="time" class="form-control clearFields" name="endworktime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{$accinfo->endworktime}} @endif">
                                @else
                                <input id="end_time" type="time" class="form-control clearFields" name="endworktime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{$accinfo->endworktime}} @endif">
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-lg-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.witness_name')</label>
                                    <input type="text" id="witnessname" name="witnessname" class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.accident.witness_no')</label>
                                    <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label
                                    class="control-label">@lang('form/scheme.general.collapse.accident.nameAddress_clinic')</label><span class="required">*</span>
                                    <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control clearFields" required>@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- form-Row -->
<script>
        $(document).ready(function() { 
            var time = $('select[name=accwork]').val();
            if (time == 'N') 
                {
                    $("#start_time").prop("disabled", true);
                    $("#recess_time").prop("disabled", true);
                    $("#end_time").prop("disabled", true);
                } 
                else 
                {
                    $("#start_time").prop("disabled", false);
                    $("#recess_time").prop("disabled", false);
                    $("#end_time").prop("disabled", false);
                }
            
            $('select[name=accwork]').change(function () 
            {
                if (this.value == 'N') 
                {
                    $("#start_time").prop("disabled", true);
                    $("#recess_time").prop("disabled", true);
                    $("#end_time").prop("disabled", true);
                } 
                else 
                {
                    $("#start_time").prop("disabled", false);
                    $("#recess_time").prop("disabled", false);
                    $("#end_time").prop("disabled", false);
                }
            });
    
            $('select[name=accdwhen]').change(function () 
            {
                if (this.value == '7') 
                {
                    $("#others_acc_when").show();
                } 
                else 
                {
                    $("#others_acc_when").hide();
                }
            });
    
            $('select[name=accdwhen]').change(function () 
            {
                if (this.value == '3') 
                {
                    $("#recess_time").prop("disabled", false);
                } 
                else 
                {
                    $("#recess_time").prop("disabled", true);
                }
            });
    
            $('select[name=accdplace]').change(function ()
            {
                if(this.value =='I'){
                    $('#accdwhen').children('option[value="2"]').hide();
                    $('#accdwhen').children('option[value="3"]').hide();
                    $('#accdwhen').children('option[value="4"]').hide();
                    $('#accdwhen').children('option[value="5"]').hide();
                } 
                else {
                    $('#accdwhen').children('option[value="1"]').show();
                    $('#accdwhen').children('option[value="2"]').show();
                    $('#accdwhen').children('option[value="3"]').show();
                    $('#accdwhen').children('option[value="4"]').show();
                    $('#accdwhen').children('option[value="5"]').show();
                    $('#accdwhen').children('option[value="6"]').show();
                }
            });
    
        });
</script>

<script>
    function submitform()
    {
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>
    