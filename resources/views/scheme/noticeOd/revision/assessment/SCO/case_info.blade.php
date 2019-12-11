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
                                            <label class="control-label">Notice ID</label><span class="required">*</span>
                                            <input type="text" id="notice_id" name="notice_id" value="" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Revision Type</label><span class="required">*</span>
                                                <input class="form-control" type="text" name="rev_type" id="rev_type" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Revision Reason</label><span class="required">*</span>
                                                    <input class="form-control" type="text" name="revision_reason" id="revision_reason" value="">
                                                </div>
                                            </div>
                                   
                                   
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Source</label><span class="required">*</span>
                                                    <input class="form-control" type="text" name="source" id="source" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Revision Notice Recieved Date</label><span class="required">*</span>
                                                        <input class="form-control" type="text" name="rev_notice" id="rev_notice" value="">
                                                    </div>
                                                </div>
                                        
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Start Date of Revision Payment</label><span class="required">*</span>
                                                <input type="date" id="rev_start_date" name="rev_start_date" value="" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">JD Type</label><span class="required">*</span>
                                                <input type="text" id="jd_type" name="jd_type" value="" class="form-control" >
                                            </div>
                                        </div>
                                </div>                                
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">Save</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">Reset</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">Cancel</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    