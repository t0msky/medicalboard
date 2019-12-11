<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">@lang('scheme/similarWorker.title')</h5>
                            <hr> --}}
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/similarWorker.attr.similar_idtype')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                            <option value="">@lang('scheme/similarWorker.attr.new_ic')</option>
                                            <option value="">@lang('scheme/similarWorker.attr.old_ic')</option>
                                            <option value="">@lang('scheme/similarWorker.attr.army_id')</option>
                                            <option value="">@lang('scheme/similarWorker.attr.police_id')</option>
                                            <option value="">@lang('scheme/similarWorker.attr.ssn_id')</option>
                                            <option value="">@lang('scheme/similarWorker.attr.cid')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('scheme/similarWorker.attr.similar_id')</label>
                                        <input type="text" id="similar_empcode" class="form-control">
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="form-group"><br>
                                        <button class="btn btn-facebook waves-effect waves-light" id="btn_search" type="button"> <i class="fas fa-search"></i> </button>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Old Identification No.</label>
                                            <input type="text" id="similar_empname" class="form-control">
                                    </div>
                                </div> --}}
                            </div>
                           
                            <div class="similar_work" id="similar_work">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label class="control-label">@lang('scheme/similarWorker.attr.similar_name')</label>
                                        <input type="text" name="similarName" id="similarName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('similarWorker.attr.similar_emptype')</label>
                                                <input type="text" name="similar_emptype" id="similar_emptype" class="form-control">
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/similarWorker.attr.similar_empcode')</label>
                                                <input type="text" id="similar_empcode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/similarWorker.attr.similar_empname')</label>
                                                <input type="text" id="similar_empname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.business_entity')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="business" name="business" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.subbusiness_entity')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="subbusiness" name="subbusiness" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.subbusiness_list')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="businesslist" name="businesslist" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.service_type')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="servicetype" name="servicetype" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.industry_code')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="industrycode" name="industrycode" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employerDetails.attr.subindustry_list')</label>
                                    {{-- @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control">
                                    @else --}}
                                    <input type="text" id="industrylist" name="industrylist" value="" class="form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/similarWorker.attr.similar_startdate')</label>
                                            <input type="date" name="similar_startdate" id="similar_startdate" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/similarWorker.attr.similar_enddate')</label>
                                                <input type="date" name="similar_enddate" id="similar_enddate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                               

                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/insuredPerson.save')</button>
                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button> --}}
                            </div>            
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>


