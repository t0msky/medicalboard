<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.case_status')</label>
                                    <input type="text" id="case_status" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.scheme_ref_no')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.notice_date')</label>
                                    <input type="date" name="scheme_ref_no" id="notice_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.notice_type')</label>
                                    <input type="text" id="notice_type" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.type_of_scheme')</label>
                                    <select class="form-control">
                                        <option>SBK</option>
                                        <option>SPI</option>
                                        <option>Both</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.working')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/caseDetails.attr.yes')</option>
                                        <option>@lang('scheme/caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.declare_117')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/caseDetails.attr.yes')</option>
                                        <option>@lang('scheme/caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.acc_potential')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/caseDetails.attr.yes')</option>
                                        <option>@lang('scheme/caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Type of Update</label>
                                    <select class="form-control">
                                        <option>Additional MC</option>
                                        <option>Change of Status</option>
                                        <option>Additional MC and Change of Status</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
</div>
