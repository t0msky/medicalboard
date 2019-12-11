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
                                    <label class="control-label">@lang('ID type')</label><span
                                        class="required">*</span>
                                        <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="New IC">@lang('New IC')</option>
                                        <option value="Old IC">@lang('Old IC')</option>
                                        <option value="Army ID">@lang('Army ID')</option>
                                        <option value="Police ID">@lang('Police ID')</option>
                                        <option value="Social Security ID">@lang('Social Security ID')</option>
                                        <option value="CID">@lang('CID')</option>
                                </select> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('ID Number')</label><span
                                        class="required">*</span>
                                    <input type="text" id="idNum_PaymentOption" name="id_num" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Notice')</label><span
                                            class="required">*</span>
                                        <input type="text" id="noticeID_PaymentOption" name="notice" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Type Of Revision')</label><span
                                            class="required">*</span>
                                        <input type="text" id="noticeID_PaymentOption" name="notice" value=""
                                            class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Revision Reason')</label><span
                                            class="required">*</span>
                                        <input type="text" id="revReason_PaymentOption" name="revReason" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('Date of revision notice received')</label><span
                                            class="required">*</span>
                                        <input type="date" id="dateRevNotice_PaymentOption" name="dateRevNotice"
                                            value="" class="form-control">
                                    </div>
                                </div>
                        </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Source')</label><span
                                            class="required">*</span>
                                        <input type="text" id="source_PaymentOption" name="source" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                                </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
