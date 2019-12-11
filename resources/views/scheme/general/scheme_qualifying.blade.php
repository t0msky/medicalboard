<style>

.btn-enter {
    color: #000;
    background-color: #97d64c;
    border-color: #284682;
}

</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-body">
                    @if(Session::get('messagesq')) 
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messagesq')}}
                        </div>

                    </div>
                    @elseif (!empty($messagesq))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messagesq}}
                        </div>

                    </div>
                    @endif
                    {{-- <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.scheme_type')</label>
                                <select class="form-control" name="schemetype" id="schemetype"> 
                                    <option value="">Please Select</option>
                                    <option value="sbk">SBK</option>
                                    <option value="spi">SPI</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.entry_date')</label>
                            <input type="date" id="entrydate" name="entrydate" value="" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.age_entry_date')</label>
                            <input type="text" id="ageentrydate" name="ageentrydate" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.statutory_body')</label>
                            <select class="form-control" name="statutorybody" id="statutorybody"> 
                                <option value="">Please Select</option>
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 col-lg-3" id="statutorybodytype">
                            <label class="control-label">Statutory Body Type</label>
                            <select class="form-control statutorytype" name="statutorybodytype" id="statutorybodytype"> 
                                <option value="">Please Select</option>
                                <option value="1">Badan Berkanun</option>
                                <option value="2">Badan Berkanun Swasta</option>
                                <option value="3">Badan Berkanun Universiti dan Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.start_date')</label>
                            <input type="date" name="startdate" id="startdate" value="" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.end_date')</label>
                            <input type="date" name="enddate" id="enddate" value="" class="form-control">
                        </div>
                    </div>
                    <div class='row'>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_entry_death')</label>
                            <input type="text" class="form-control" name="totalmonthsentrydeath" id="totalmonthsentrydeath" value="">
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_contributed')</label>
                            <input type="text" class="form-control" name="totalmonthscontribution" id="totalmonthscontribution" value="">
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.qualifying_condition')</label>
                            {{-- <input type="text" id="qualifyingcondition" name="qualifyingcondition" value="" class="form-control"> --}}
                            <select class="form-control" name="qualifyingcondition" id="qualifyingcondition"> 
                                <option value="">@lang('option.please_select')</option>
                                <option value="">@lang('option.24_40')</option>
                                <option value="">@lang('option.36_60')</option>
                                <option value="">@lang('option.1_3')</option>
                                <option value="">@lang('option.2_3')</option>
                                <option value="">@lang('option.not_eligible')</option>
                            </select>   
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.pension')</label>
                            <select class="form-control" name="iltpension" id="iltpension"> 
                                <option value="">Please Select</option>
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>                                      
                        </div>
                        <div class="form-group col-md-12 col-lg-3" id="benefitrefno">
                            <label class="control-label">Benefit Reference No</label>
                            <input type="text" id="benefitrefno" name="benefitrefno" value="" class="form-control benefitrefno">
                        </div>
                        <div class="do_left" id="benefitrefno2">
                            <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-enter text-left"><i class="mdi mdi-arrow-right-bold"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.while_receiving_fhus')</label>
                            <input type="text" id="qualifyingcondition" name="qualifyingcondition" value="" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.fhus_benefit_ref_no')</label>
                            <input type="text" id="fhusbenefitrefno" name="fhusbenefitrefno" value="" class="form-control fhusbenefitrefno">
                        </div>
                        <div class="do_left">
                            <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-enter text-left"><i class="mdi mdi-arrow-right-bold"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.fhuk_periodical_receiver')</label>
                            <input type="text" id="fhukperiodical" name="fhukperiodical" value="" class="form-control">  
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.fhuk_benefit_ref_no')</label>
                            <input type="text" id="fhukbenefitrefno" name="fhukbenefitrefno" value="" class="form-control fhukbenefitrefno">
                        </div>
                        <div class="do_left">
                            <div class="form-actions">
                            <button type="button" class="btn btn waves-effect waves-light btn-enter text-left"><i class="mdi mdi-arrow-right-bold"></i></button>
                            </div>
                        </div>                    
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(function () {

    $("#benefitrefno").hide();
    $("#benefitrefno2").hide();
    $("#statutorybodytype").hide();

    $('select[name=statutorybody]').change(function () {
        if (this.value == 'Y') {
            $("#statutorybodytype").show();

        } else {
            $("#statutorybodytype").hide();
            $(".statutorytype").val('');
        }
    });

    $('select[name=iltpension]').change(function () {
        if (this.value == 'Y') {
            $("#benefitrefno").show();
            $("#benefitrefno2").show();
            $("#totalmonthsentrydeath").val('');
            $("#totalmonthscontribution").val('');
            $("#qualifyingcondition").val('');

        } else {
            $("#benefitrefno").hide();
            $(".benefitrefno").val('');
            $("#benefitrefno2").hide();

        }
    });
});

</script>

    