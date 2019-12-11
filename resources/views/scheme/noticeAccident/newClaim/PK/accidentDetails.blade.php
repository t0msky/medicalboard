<!-- Row -->
<div class="row">
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
                                <label class="control-label"> @lang('form/scheme.general.collapse.accident.accident_date')</label><span class="required">*</span>
                                @if (!empty($accinfo))
                                <input type="date" class="form-control" id="accddate" name="accddate" value="{{$accinfo->accddate}}{{-- {{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}} --}}" required readonly>
                                @else
                                @if (Session::get('accddate'))
                                <input type="date" class="form-control" id="accddate" name="accddate" value="{{$accinfo->accddate}}{{-- {{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}} --}}" required readonly>
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
                                    <input type="time" class="form-control" id="accdtime" name="accdtime" value="{{$accinfo->accdtime}}{{-- {{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}} --}}" required readonly>
                                    @else
                                    @if (Session::get('accdtime'))
                                    <input type="time" class="form-control" id="accdtime" name="accdtime" value="{{$accinfo->accdtime}}"{{-- {{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}"--}} required readonly>
                                    @else
                                    <input type="time" class="form-control" id="accdtime" name="accdtime" value="" required>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.place_accident')</label><span class="required">*</span>
                                <select class="form-control" name="accdplace" id="accdplace" onchange="placeacc()" required>
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
                        {{-- <div class="col-md-4">
                            <div class="form-group col-md-12 col-lg">
                                <label class="control-label">@lang('accidentDetails.attr.date_death')</label>
                                <input type="date" name="dodeath" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div> --}}
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.how_accident')</label><span class="required">*</span>
                                <textarea type="text" id="how" name="how" class="form-control clearFields" required>@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                            </div>
                        </div>
                        {{-- <div class="form-row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group col-md-12 col-lg">
                                        <label>@lang('accidentDetails.attr.mode_transport')</label>
                                        <select id="transport" name="transport" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->transport}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($transport as $T)
                                                @if (!empty($accinfo) && $accinfo->transport == $T->refcode)
                                                <option value="{{$T->refcode}}" selected>{{$T->descen}}</option>
                                                @else
                                                <option value="{{$T->refcode}}">{{$T->descen}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group col-md-12 col-lg">
                                        <label>Others</label>
                                        <input name="trothers" id="trothers" type="text" class="form-control"
                                         value="@if(!empty($accinfo)){{$accinfo->transportothers}} @endif">
                                    </div>
                                </div>
                            </div> --}}
                        {{--<div class="form-row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group col-md-12 col-lg">
                                        <label class="control-label">@lang('accidentDetails.attr.causative_agent1')</label>
                                        <select name="causative" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->causative}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($causative as $c)
                                            @if (!empty($accinfo) && $accinfo->causative == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="form-group col-md-12 col-lg">
                                        <label class="control-label">@lang('accidentDetails.attr.accident_code')</label>
                                        <select name="accdcode" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                           <option>Please select</option>
                                            @foreach($accdcode as $c)
                                                @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                @else
                                                 <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                 @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            
                            {{-- <div class="col-md-12 col-lg-6">
                                <div class="form-group col-md-12 col-lg">
                                    <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label>
                                    <select name="industcode" class="form-control">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->industrialcode}} @endif</option-->
                                        <option>Please select</option>
                                        @foreach($industcode as $c)
                                            @if (!empty($accinfo) && $accinfo->industrialcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group col-md-12 col-lg">
                                    <label class="control-label">@lang('accidentDetails.attr.employment_code')</label>
                                    <select name="profcode" class="form-control">
                                       <!--option value="">@if(!empty($accinfo)){{$accinfo->employmentcode}} @endif</option-->
                                       <option>Please select</option>
                                       @foreach($profcode as $c)
                                            @if (!empty($accinfo) && $accinfo->employmentcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.reason_travelling')</label>
                                @if(!empty($accinfo)&&$accinfo->reasontravel)
                                <textarea type="text" id="reasontravel" name="reasontravel" class="form-control clearFields" placeholder="">{{$accinfo->reasontravel}}</textarea>
                                @elseif (!empty($accinfo)&&$accinfo->reasontravel)
                                <textarea type="text" id="reasontravel" name="reasontravel" class="form-control clearFields" placeholder="" disabled></textarea>
                                @else
                                <textarea type="text" id="reasontravel" name="reasontravel" class="form-control clearFields" placeholder="" ></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">Injury Description</label>
                                <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                            </div>
                        </div>
                    </div>
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
                                <div class="form-group col-md-12 col-lg">
                                    <label>@lang('accidentDetails.attr.are_wagesPaid')</label>
                                    <select class="form-control" name="wagespaid"> --}}
                                            {{-- <!--option value="">@if(!empty($accinfo)){{$accinfo->wagespaid}} @endif</option--> --}}
                                            
                                            {{-- <option>Please select</option>
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
                            <div class="form-group col-md-12 col-lg-8">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.witness_name')</label>
                                <input type="text" id="witnessname" name="witnessname" class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.accident.witness_no')</label>
                                <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                    <label
                                    class="control-label">@lang('form/scheme.general.collapse.accident.nameAddress_clinic')</label><span class="required">*</span>
                                    <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control clearFields" required>@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                            </div>
                        </div>
                    <div class='form-row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" name="action" value="Submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.loc'button'">@lang('button.cancel')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

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
