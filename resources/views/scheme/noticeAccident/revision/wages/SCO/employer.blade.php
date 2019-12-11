<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/employer_od" method="POST" id="reset">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            {{-- <h5 class="card-title">@lang('employer.title')</h5>
                            <hr>
     --}}                        @if(Session::get('messageemp')) 
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messageemp')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messageemp))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messageemp}}
                                </div>
    
                            </div>
                            @endif
                            <div class="row">
                                {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Employer Code</label>
                                        <input type="text" class="form-control" name="empcode" value={{$checkaccddate->empcode}} required>
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.employerCode')</label>
                                        <span class="required">*</span>
                                        <input type="text" id="empcode" name="empcode" value="" class="form-control" required readonly>
                                    </div>
                                </div>
                                {{-- <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                                </div> --}}
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.employerName')</label>
                                        <span class="required">*</span>
                                        <input type="text" id="empname" name="empname" value="" class="form-control clearFields" required readonly>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.business_entity')</label>
                                        <input type="text" id="bussentity" name="bussentity" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.subbusiness_entity')</label>
                                        <input type="text" id="subbussentity" name="subbussentity" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.subbusiness_list')</label>
                                        <input type="text" id="subbussentitylist" name="subbussentitylist" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.service_type')</label>
                                        <input type="text" id="servicetype" name="servicetype" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.industry_code')</label>
                                        <input type="text" id="indscode" name="indscode" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.subindustry_list')</label>
                                        <input type="text" id="subindscodelist" name="subindscodelist" value="" class="form-control clearFields" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.postal_address')</label>
                                        <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address2')</label> --}}
                                        <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address3')</label>  --}}
                                        <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.state')</label>
                                        <select class="form-control" tabindex="1" name='state' id='state'>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/employer.attr.city')</label>
                                        <input type="text" id="city" name="city" value="" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/employer.attr.postcode')</label>
                                        <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>P.O BOX</label>
                                        <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Locked Bag</label>
                                        <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>W.D.T</label>
                                        <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/employer.attr.telNo')</label>
                                        <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/employer.attr.faxNo')</label>
                                        <input type="text" id="faxno" name="faxno" value="" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/employer.attr.email')</label>
                                        <input type="email" id="email" name="email" value="" class="form-control clearFields">
                                    </div>
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
                            <br/>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
    <script>
        function submitform(){
            $('#reset').find('form').submit();
            $('.clearFields').val('');
        }
    </script>
    