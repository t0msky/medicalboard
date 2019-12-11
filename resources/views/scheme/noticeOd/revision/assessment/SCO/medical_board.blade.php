<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/obform" method="POST">
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
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">JD Type</label><span
                                            class="required">*</span>
                                        <input type="text" id="jd_type" name="jd_type" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Appoinment Location</label><span
                                            class="required">*</span>
                                            <input type="date" name="appoint_loc" id="appoint_loc" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">JD/JDR Session Date</label><span
                                            class="required">*</span>
                                        <input type="date" name="jd_session" id="jd_session" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Assessment Type </label><span
                                                class="required">*</span>
                                            <input type="date" name="assess_type" id="assess_type" value="" class="form-control">
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">JD/JDR Result </label><span
                                                class="required">*</span>
                                            <input type="text" name="jd_result" id="jd_result" value="" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Assessment % </label><span
                                                class="required">*</span>
                                            <input type="text" name="percent_assess" id="percent_assess" value="" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ELS</label><span
                                                class="required">*</span>
                                            <input type="text" name="els" id="els" value="" class="form-control">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Remarks</label><span
                                                class="required">*</span>
                                                <textarea name="remarks" id="remarks" class="form-control" required rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                            </div>
                           
                            
                        </div>
                       
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">Save</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">Reset</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    