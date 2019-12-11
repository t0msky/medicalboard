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
                                        <label class="control-label">Invalidity Starting Date Requirements</label>
                                       <select name="" id=""  class="form-control">
                                           <option value="">Please Select</option>
                                           <option value="">Yes</option>
                                           <option value="">No</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Morbid Date Requirements</label>
                                       <select name="" id=""  class="form-control">
                                           <option value="">Please Select</option>
                                           <option value="">Yes</option>
                                           <option value="">No</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Beginning of The Illness</label>
                                        <input type="text" id="beginningIll" name="beginningIll" value="" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Age at the beginning of the illness </label>
                                        <input type="text" id="ageBegin" name="ageBegin" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Age on morbid dates</label>
                                        <input type="text" id="ageMorbid" name="ageMorbid" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">JD Session Date</label>
                                        <input type="date" id="contributionPaid" name="contributionPaid" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">JD Type</label>
                                       <select name="" id=""  class="form-control">
                                           <option value="">Please Select</option>
                                           <option value="">JD</option>
                                           <option value="">JDR</option>
                                           <option value="">JDK</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Invalidity Decision</label>
                                       <select name="" id=""  class="form-control">
                                           <option value="">Please Select</option>
                                           <option value="">Yes</option>
                                           <option value="">No</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Morbid Date</label>
                                        <input type="date" id="recomemdedDate" name="recomemdedDate" value="" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">ELS</label>
                                       <select name="" id=""  class="form-control">
                                           <option value="">Please Select</option>
                                           <option value="">Yes</option>
                                           <option value="">No</option>
                                       </select>
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
    