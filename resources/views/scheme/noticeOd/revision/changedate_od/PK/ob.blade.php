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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" readonly id="name" name="name" value="" class="form-control" >
                                </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Identification Type</label>
                                        <select class="form-control" readonly>
                                            <option selected readonly disabled hidden>Please Select</option>
                                            <option value="">New IC</option>
                                            <option value="">Old IC</option>
                                            <option value="">Army ID</option>
                                            <option value="">Police ID</option>
                                            <option value="">Social Security Number ID (SSN)</option>
                                            <option value="">CID</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Identification No.</label>
                                        <input type="text" readonly id="idno" name="idno" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Notice ID</label>
                                        <input type="text" readonly id="noticeid" name="noticeid" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Notice Date OD</label>
                                        <input type="date" readonly id="notice_date" name="notice_date" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date of OD (Origin)</label>
                                        <input type="date" readonly id="dateOD" name="dateOD" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date of OD</label>
                                        <input type="date" id="dateOD" name="dateOD" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Notice Type</label>
                                        <input type="text" readonly id="noticetype" name="noticetype" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <input type="text" readonly id="status" name="status" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    