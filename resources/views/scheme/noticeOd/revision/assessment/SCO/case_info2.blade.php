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
                                                    <label class="control-label">Name</label><span class="required">*</span>
                                                <input class="form-control" type="text" name="name" id="name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Identification Type</label><span class="required">*</span>
                                                    <input class="form-control" type="id_type" name="id_type" id="acc_revtype" value="">
                                                </div>
                                            </div>
                                   
                                   
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Identification Number</label><span class="required">*</span>
                                                    <input class="form-control" type="text" name="id_no" id="id_no" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Accident Date</label><span class="required">*</span>
                                                        <input class="form-control" type="text" name="accident_date" id="accident_date" value="">
                                                    </div>
                                                </div>
                                        
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Notice Date</label><span class="required">*</span>
                                                <input type="date" id="notice_date" name="notice_date" value="" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status </label><span class="required">*</span>
                                                    <input type="text" id="status" name="status" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Birth </label><span class="required">*</span>
                                                        <input type="date" id="dob" name="dob" value="" class="form-control" >
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Gender </label><span class="required">*</span>
                                                        <input type="text" id="gender" name="gender" value="" class="form-control" >
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
    