<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                        <option value="please select" selected hidden readonly>@lang('scheme/noticetype.attr.please_select')</option>
                                        <option value="">New IC</option>
                                        <option value="">Old IC</option>
                                        <option value="">Army ID</option>
                                        <option value="">Police ID</option>
                                        <option value="">Social Security Number (SSN) ID</option>
                                        <option value="">CID</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">Similar ID</label>
                                    <input type="text" id="similar_empcode" class="form-control">
                                </div>
                            </div>
                            <div class="button-group">
                                <div class="form-group"><br>
                                    <button class="btn btn-facebook waves-effect waves-light" id="btn_search" type="button"> <i class="fas fa-search"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="similar_work" id="similar_work">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="control-label">Similar Worker Name</label>
                                    <input type="text" name="similarName" id="similarName" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Employer Type</label>
                                        <select class="form-control" name="similar_emptype">
                                            {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                            <option value="please select" selected hidden readonly>@lang('scheme/noticetype.attr.please_select')</option>
                                            <option value="">Organization</option>
                                            <option value="">Private Sector</option>
                                            <option value="">Government Sector</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Employer Code</label>
                                            <input type="text" id="similar_empcode" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Employer Name</label>
                                            <input type="text" id="similar_empname" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Employment Start Date</label>
                                        <input type="date" name="similar_startdate" id="similar_startdate" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Employment End Date</label>
                                            <input type="date" name="similar_enddate" id="similar_enddate" class="form-control">
                                    </div>
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
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>
