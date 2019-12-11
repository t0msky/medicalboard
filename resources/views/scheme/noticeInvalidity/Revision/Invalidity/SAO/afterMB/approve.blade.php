<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    <h5 class="card-title">@lang('Revision Summary')</h5>
                    <br>
                    <br>
                    <div class="col-8">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:20%'>@lang('Revision Type')</th>
                                        <th style='width:20%'>@lang('Reason for Revision')</th>
                                        <th style='width:20%'>@lang('Revision Accrual Date')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('Recommendation History')</h5>
                    <br>
                    <br>
                    <div class="col-8">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:20%'>@lang('Recommendation')</th>
                                        <th style='width:20%'>@lang('Recommended By')</th>
                                        <th style='width:20%'>@lang('Role')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('Request Assessment Opinion')</h5>
                    <br>
                   
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Remarks')</label>
                                <textarea rows="6" cols="100" class="form-control"></textarea>                            
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title-sub">@lang('Update Remarks') </h6>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Remarks')</label>
                                    <textarea rows="6" cols="100" class="form-control"></textarea>                            
                                </div>
                            </div>
                        </div>

                        <h6 class="card-title-sub">@lang('Decision') </h6>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Decision')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('Accept')</option>
                                        <option value="">@lang('Decline')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SAVE')</button>
                    </div>

                    <h5 class="card-title">@lang('Approval')</h5>
                    <br>
                    <br>
                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('Action')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Approve')</option>
                                    <option value="">@lang('Request Assessment Opinion')</option>
                                    <option value="">@lang('Investigation')</option>
                                    <option value="">@lang('Transfer Case')</option>
                                    </select>                                    
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SUBMIT')</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
