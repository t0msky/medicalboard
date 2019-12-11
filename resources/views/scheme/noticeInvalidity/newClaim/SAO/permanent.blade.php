<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/permanent.attr.permanent_representatives')</label>
                                    <select class="form-control " tabindex="1">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/permanent.attr.permanent_representative_name')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.id_type')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                        <option value="">@lang('scheme/permanent.attr.new_ic')</option>
                                        <option value="">@lang('scheme/permanent.attr.old_ic')</option>
                                        <option value="">@lang('scheme/permanent.attr.army_id')</option>
                                        <option value="">@lang('scheme/permanent.attr.police_id')</option>
                                        <option value="">@lang('scheme/permanent.attr.ssn_id')</option>
                                        <option value="">@lang('scheme/permanent.attr.cid')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.id_no')</label>
                                    <input type="text" id="idNum" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.dateOfBirth')</label>
                                    <input type="date" id="dateofbirth" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.pass_exp_date')</label>
                                    <input type="date" id="passportExpiry" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.relationship')</label>
                                    <input type="text" id="relationship" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.status')</label>
                                    <input type="text" id="status" class="form-control">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                              
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
