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
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Invalidity Starting Date</label>
                                   <select class="form-control" readonly name="invalidity_start_date_medical">
                                        {{-- <option selected readonly disabled hidden>Please Select </option> --}}
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Morbidity Date</label>
                                   <select class="form-control" readonly name="morbidity_date_medical">
                                        {{-- <option selected readonly disabled hidden>Please Select </option> --}}
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}JD Session Date</label>
                                <input type="date" id="jdsessiondate_medical" readonly name="jdsessiondate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}About Illness</label>
                                <input type="text" id="aboutillness_medical" readonly name="aboutillness" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Invalidity Decision</label>
                                   <select class="form-control" readonly name="invaliditydecision_medical">
                                        {{-- <option selected readonly disabled hidden>Please Select </option> --}}
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}ELS</label>
                                   <select class="form-control" readonly name="els_medical">
                                        {{-- <option selected readonly disabled hidden>Please Select </option> --}}
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}JD Type</label>
                                   <select class="form-control" readonly data-placeholder="jdtype_medical" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="1">JD</option>
                                        <option value="2" selected>JDR</option>
                                        <option value="3">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}JD Decision Received Date</label>
                                <input type="date" id="jddecisiondate_medical" readonly name="jddecisiondate" class="form-control">
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
