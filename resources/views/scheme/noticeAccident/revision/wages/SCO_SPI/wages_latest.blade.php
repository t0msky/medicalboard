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
                                    <label class="control-label">Wages Type</label>
                                    <span class="required">*</span>
                                   <select name="" id=""  class="form-control">
                                       <option value="">Please Select</option>
                                       <option value="">Previous Employer</option>
                                       <option value="">Multiple Employer</option>
                                   </select>
                                </div>
                            </div>
                            {{-- <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Month of Contribution</label>
                                    <input type="text" id="monthContribution" name="monthContribution" value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Year</label>
                                    <input type="text" id="year" name="year" value="" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Month </label>
                                    <input type="text" id="month" name="month" value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Wages (RM)</label>
                                    <input type="text" id="wages" name="wages" value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Contribution Paid (RM)</label>
                                    <input type="text" id="contributionPaid" name="contributionPaid" value="" class="form-control clearFields" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Contribution (RM)</label>
                                    <input type="text" id="contribution" name="contribution" value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Recommended</label>
                                    <input type="text" id="recomended" name="recomended" value="" class="form-control clearFields" >
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Recommended Date</label>
                                    <input type="date" id="recomemdedDate" name="recomemdedDate" value="" class="form-control clearFields" >
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
