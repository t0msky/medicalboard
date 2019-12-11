<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="./permanentPresentative">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.permanent_representatives')</label>
                                    <input type="text" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->perrep}} @endif">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.permanent_representative_name')</label>
                                    <input type="text" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->perrepname}} @endif"  >
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
                                    <input type="text" id="idNum" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->ic_no}} @endif" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.dateOfBirth')</label>
                                    <input type="text" id="dateofbirth" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->dob}} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.pass_exp_date')</label>
                                    <input type="text" id="passportExpiry" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->passexpiry}} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.relationship')</label>
                                    <input type="text" id="relationship" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->insuredper}} @endif">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanent.attr.status')</label>
                                    <input type="text" id="status" class="form-control" value="@if(!empty($permanentrep)){{$permanentrep->repstatus}} @endif">
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </form>
            </div>
        </div>
    </div>
</div>