<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">@lang('scheme/investigation.inquiry_assistance')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.sender_notes')</label>
                                    <input type="text" id="case_status" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.office')</label>
                                    <input type="text" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/investigation.attr.notes')</label>
                                    <input type="text" name="end_date" id="end_date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('scheme/investigation.interviewer')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.investigation_date')</label>
                                    <input type="date" id="case_status" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.investigation_time')</label>
                                    <input type="time" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/investigation.attr.interview_type')</label>
                                        <select class="form-control" name='paymode' id='paymode'>
                                            <option value="employer">@lang('scheme/investigation.attr.employer')</option>
                                            <option value="insured_person">@lang('scheme/investigation.attr.insured_person')</option>
                                            <option value="dependents">@lang('scheme/investigation.attr.dependents')</option>
                                            
                                        </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.name_dependant')</label>
                                    <input type="date" id="case_status" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.interview_name')</label>
                                    <input type="time" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/investigation.attr.address')</label>
                                        <input type="text" name="start_date" id="start_date" class="form-control">
                                        <input type="text" name="start_date" id="start_date" class="form-control">
                                        <input type="text" name="start_date" id="start_date" class="form-control">
                                
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.name_investigating_officer')</label>
                                    <input type="date" id="case_status" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.email_investigating_officer')</label>
                                    <input type="time" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.investigation_site')</label>
                                    <input type="time" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>
                        </div> --}}

                       {{--  <div class="row">
                            <div class="col-sm-12">
                                <div class="card"> --}}
                                    <form class="form">
                                     <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwenty20">
                                            <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty20" aria-expanded="false" aria-controls="collapseTwenty20">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.appointment')</h4>
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapseTwenty20" class="collapse" role="tabpanel" aria-labelledby="headingTwenty20">
                                            <div class="card-body">@include('scheme.noticeInvalidity.newClaim.IO.appointmentInvestigation')</div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTen10">
                                            <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigationDoc')</h4>
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                            <div class="card-body">@include('scheme.noticeInvalidity.newClaim.IO.investigationDoc')</div>
                                        </div>
                                    </div>

                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven19">
                                            <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven19" aria-expanded="false" aria-controls="collapseEleven19">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.inconsistency') </h4> </a>
                                                </h6>
                                            </div>
                                            <div id="collapseEleven19" class="collapse" role="tabpanel" aria-labelledby="headingEleven19">
                                                    <div class="card-body">@include('scheme.noticeInvalidity.newClaim.IO.inconsistencyIO')</div>
                                            </div>
                                        </div>
                             {{--        </form>
                                </div>
                            </div>
                        </div>   --}}              


{{-- 
                        <h5 class="card-title">@lang('scheme/investigation.case_facts')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.case_fact')</label>
                                    <textarea name="investigateDetailss" id="investigateDetailss"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.recommend')</label>
                                    <textarea name="recommendation" id="recommendation" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/investigation.attr.investigator_name')</label>
                                    <input type="text" id="investigator_name" name="investigator_name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.date')</label>
                                    <input type="date" id="date" name="date" class="form-control"
                                        value="{{date('Y-m-d')}}">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">@lang('scheme/investigation.satificaation_report')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label  style="white-space:nowrap" class="control-label">@lang('scheme/investigation.attr.accident_time')</label>
                                    <select class="form-control" name='paymode' id='paymode'>
                                        <option value="Yes">@lang('scheme/investigation.attr.yes')</option>
                                        <option value="No">@lang('scheme/investigation.attr.no')</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">@lang('scheme/investigation.consistent_details')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.item')</label>
                                    <input type="text" name="item" id="item" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.data')</label>
                                    <input type="text" name="data" id="data" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.review')</label>
                                    <input type="text" name="review" id="review" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.review_by')</label>
                                    <input type="text" id="review_by" name="review_by" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-12">
                                <h5 class="card-title">@lang('scheme/investigation.justification_finding')</h5>
                                <hr>

                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('scheme/investigation.attr.investigation_date')</label>
                                            <input id="date" name="date" type="date" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigation.attr.date')</label>
                                            <input id="date" name="date" type="date" value="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('scheme/investigation.attr.finding_data')</label>
                                            <input type="text" id="finding_data" name="finding_data" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('scheme/investigation.attr.justify_finding')</label>
                                                <textarea name="justification_finding" id="justification_finding" rows="3"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('scheme/investigation.attr.justify_by')</label>
                                            <input type="text" id="justify_by" name="justify_by" value=""
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <label class="control-label" id='lblmcerror' style='color:red'></label>
                            </div>
                        </div> --}}
                </div><br>
                <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                  
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

