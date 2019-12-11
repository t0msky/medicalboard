<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">Section J Received</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('scheme/confirmation.attr.select_reason')
                                                        </option> --}}
                                        <option value="Completed">Complete</option>
                                        <option value="Not Completed">@lang('scheme/confirmation.attr.not_complete')
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">Complete Section J</label>
                                    <input type="text" name="sub_status_description" id="sub_status_description"
                                        class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Notice Date</label>
                                    <input type="date" name="notice_date" id="notice_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/confirmation.attr.acceptance_stamp')</label>
                                    <input type="date" name="accept_stamp" id="accept_stamp" class="form-control">

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
