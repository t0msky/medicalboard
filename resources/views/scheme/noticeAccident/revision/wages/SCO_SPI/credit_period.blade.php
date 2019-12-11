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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Notice ID</label>
                                        <input type="text" class="form-control" name="noticeid" value="">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">HUS Start Date </label>
                                        <input type="text" id="husStart" name="husStart" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">HUS End Date</label>
                                        <input type="text" id="husEnd" name="husEnd" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Months</label>
                                        <input type="text" id="totalMonth" name="totalMonth" value="" class="form-control clearFields" >
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
    </div>
    
    
    <script>
        function submitform(){
            $('#reset').find('form').submit();
            $('.clearFields').val('');
        }
    </script>
    