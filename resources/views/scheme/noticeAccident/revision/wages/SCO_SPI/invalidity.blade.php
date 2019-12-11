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
                                        <label class="control-label">Employment Start Date</label>
                                        <input type="text" id="employmentStart" name="employmentStart" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Employment End Date </label>
                                        <input type="text" id="employmentEnd" name="employmentEnd" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Does the insured person is still working? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                        {{-- <input type="text" id="month" name="month" value="" class="form-control clearFields" > --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Age at the time of scheme entry date</label>
                                        <input type="text" id="ageScheme" name="ageScheme" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Age at the time of notice entry date</label>
                                        <input type="text" id="ageNotice" name="ageNotice" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Statuotary Body</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">SPI Eligible</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Please Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Qualifying Condition</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Please Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Months between Scheme Entry and a month before Notice Date</label>
                                        <input type="text" id="month" name="month" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Months between Scheme Entry and a month before Morbid Date</label>
                                        <input type="text" id="ageScheme" name="ageScheme" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Total Month Contributed</label>
                                        <input type="text" id="ageNotice" name="ageNotice" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Invalidity Pension %</label>
                                        <input type="text" id="month" name="month" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">About Illness</label>
                                        <input type="text" id="ageScheme" name="ageScheme" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date of resignation (if applicable)</label>
                                        <input type="text" id="month" name="month" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">The year began to suffer from illness</label>
                                        <input type="text" id="ageNotice" name="ageNotice" value="" class="form-control clearFields" >
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
    