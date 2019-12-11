<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/creditPeriod.attr.hus_notice_id')</label>
                                    <input type="text" id="case_status" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/creditPeriod.attr.start_date')</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/creditPeriod.attr.end_date')</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/creditPeriod.attr.total_months')</label>
                                    <input type="text" id="total_months" class="form-control">
                                </div>
                            </div>
                            {{--  <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                    class="control-label">@lang('scheme/creditPeriod.attr.overall_months')</label>
                                    <input type="text" id="overall_months" class="form-control">

                                </div>
                            </div> --}}
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
