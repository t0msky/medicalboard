<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="/obform" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                                <h5 class="card-title">Recommendation</h5>
                            
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
                                            <label class="control-label">Recommendation</label><span class="required">*</span>
                                           <select class="form-control">
                                            <option>Recommend</option>
                                            <option>Not Recommend</option>
                                           </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    <label class="control-label">Recommended By </label><span class="required">*</span>
                                                <input class="form-control" type="text" name="recommend_by" id="recommend_by" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Recommended Date</label><span class="required">*</span>
                                                    <input class="form-control" type="daet" name="recommend_date" id="recommend_date" value="">
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
    