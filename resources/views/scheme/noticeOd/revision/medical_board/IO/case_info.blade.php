<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Notice ID</label><span class="required">*</span>
                                   <input type="text"  id="noticeID_medical" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appType')--}}Application Type</label><span class="required">*</span>
                                    <select class="form-control" data-placeholder="revReason_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="jd">JD</option>
                                        <option value="jdr">JDR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            {{--<div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')Reason of Application</label><span class="required">*</span>
                                <input type="text" id="reasonOfApplication_medical" name="reasonOfApplication" value="" class="form-control">
                                </div>
                            </div>--}}
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Application Date Received</label><span class="required">*</span>
                                <input type="date" id="applicationdatereceived_medical" name="applicationdatereceived" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.revReason')--}}Reason of Application</label><span class="required">*</span>
                                    <select class="form-control" data-placeholder="revReason_medical" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Application">Appeal of Assessment</option>
                                        <option value="Review">Appeal of Assessment Type</option>
                                        <option value="Application">Appeal of Invalidity</option>
                                        <option value="Application">Appeal of OD</option>
                                        <option value="Review">ELS - Application JDR</option>
                                        <option value="Application">HUK Application</option>
                                        <option value="Review">Morbid Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Revision Payment Start Date</label><span class="required">*</span>
                                <input type="date" id="revisionpaymentstartdate_medical" name="revisionpaymentstartdate" value="" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appealReceivedDateOfJDR')--}}Appeal Received Date to JDR</label><span class="required">*</span>
                                    <input type="date" id="appealReceivedDateOfJDR_medical" name="appealReceivedDateOfJDR" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appealReason')--}}Appeal Reason After 90 Days</label><span class="required">*</span>
                                    <input type="text" id="appealReason_medical" name="appealReason" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appealBySocso')--}}Appeal by SOCSO</label><span class="required">*</span>
                                    <select class="form-control" data-placeholder="appealBySocso_medical" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No" selected>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.source')--}}Source</label><span class="required">*</span>
                                    <select class="form-control" data-placeholder="source_medical" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Yes">OTC</option>
                                        <option value="No">New Info</option>
                                        <option value="No">Complaint</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>   
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
