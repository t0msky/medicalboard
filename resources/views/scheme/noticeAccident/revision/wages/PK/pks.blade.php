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
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.accDate')</label><span class="required">*</span>
                                <input type="text" id="accDate_pks " name="accDate" value="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('insuredPerson.attr.employerInformation')</h5>
                        <hr>

                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerType')</label>
                                <select class="form-control" data-placeholder="employeeType_pks" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Statutory Body">@lang('wages.attr.statutoryBody')</option>
                                        <option value="Private">@lang('wages.attr.private')</option>
                                        <option value="Goverment">@lang('wages.attr.goverment')</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerCode')</label>
                                <input type="text"  id="employeeCode_pks" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerName')</label>
                                <input type="text"  id="employerName_pks" class="form-control" name="employerName" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address')</label>
                                <input type="text"  name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postcode')</label>
                                <input type="text"  id="postcode_pks" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.city')</label>
                                <input type="text"  id="city_pks" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <input type="text"   id="state_pks" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employmentStartDate')</label><span class="required">*</span>
                                <input type="date"  id="employmentStartDate_pks" name="employmentStartDate" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employmentEndDate')</label><span class="required">*</span>
                                <input type="date"  id="employmentEndDate_pks" class="form-control" name="employmentEndDate" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.mobileNo')</label>
                                <input type="text"   id="mobileNo_pks" name="mobileNo" value="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('insuredPerson.attr.similarWorkerInformation')</h5>
                   <hr>

                   <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.similarWorkerName')</label>
                                <input type="text"  id="similarWorkerName_pks" name="similarWorkerName" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_type')</label>
                                <input type="text"  id="idType_pks" class="form-control" name="idType" value="">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_num')</label>
                                <input type="text"  id="idNum_pks" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerType')</label>
                                <select class="form-control" data-placeholder="employeeType_pks" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Statutory Body">@lang('wages.attr.statutoryBody')</option>
                                        <option value="Private">@lang('wages.attr.private')</option>
                                        <option value="Goverment">@lang('wages.attr.goverment')</option>
                                </select>                             
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerCode')</label>
                                <input type="text"  id="employerCode_pks" name="employerCode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employerName')</label>
                                <input type="text"  id="employerName_pks" name="employerName" value="" class="form-control">                             
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employmentStartDate')</label>
                                <input type="date"  id="employmentStartDate_pks" name="employmentStartDate" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.employmentEndDate')</label>
                                <input type="date"  id="employmentEndDate_pks" name="employmentEndDate" value="" class="form-control">                             
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('insuredPerson.attr.wagesInformation')</h5>
                   <hr>

                   <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('form/scheme.general.wages.no')</th>
                                                    <th>@lang('form/scheme.general.wages.year')</th>
                                                    <th>@lang('form/scheme.general.wages.month')</th>
                                                    <th data-breakpoints="xs sm">@lang('form/scheme.general.wages.wages')</th>
                                                    <th data-breakpoints="xs">@lang('form/scheme.general.wages.contributionPaid')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr
                                                    data-expanded="true">
                                                    <td>1</td>
                                                    <td><input type="text" id="year" name="year"
                                                            value="" class="form-control" readonly></td>
                                                    <td><input type="text" value='' class='form-control'
                                                            readonly>
                                                        <input type="hidden" value='' class='form-control'
                                                            id="month" name="month" readonly>
                                                    </td>
                                                    <td><input type="text" id="wages" name="wages"
                                                            value="" class="form-control maskdecimal"></td>
                                                    <td><input type="text" id="contrpaid"
                                                            name="contrpaid" value=""
                                                            class="form-control maskdecimal"></td>
                                                    </tr>
                                                    
                                                  
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
