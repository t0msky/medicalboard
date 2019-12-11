<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                            <form action="#">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.date')</label>
                                            <input type="date" name="date" id="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.date_of_IP')</label>
                                            <input type="date" name="date_of_IP" id="date_of_IP" class="form-control">
                                        </div>
                                    </div>    
                                </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.question_1')</label>
                                                <select class="form-control">
                                                    <option>@lang('scheme/investigationInformation.attr.yes')</option> 
                                                    <option>@lang('scheme/investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.question_2')</label>
                                                <select class="form-control">
                                                    <option>@lang('scheme/investigationInformation.attr.yes')</option> 
                                                    <option>@lang('scheme/investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/investigationInformation.attr.question_3')</label><br>
                                           <br><select class="form-control">
                                                <option>@lang('scheme/investigationInformation.attr.yes')</option> 
                                                <option>@lang('scheme/investigationInformation.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>   
                                </div>    
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.question_4')</label>
                                            <select class="form-control">
                                                <option>@lang('scheme/investigationInformation.attr.yes')</option> 
                                                <option>@lang('scheme/investigationInformation.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="control-label">@lang('scheme/investigationInformation.attr.question_5')</label>
                                                <select class="form-control">
                                                    <option>@lang('scheme/investigationInformation.attr.yes')</option> 
                                                    <option>@lang('scheme/investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.wrong_benefit')</label>
                                                 <input type="text" name="wrong_benefit" id="wrong_benefit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/investigationInformation.attr.system_recommendation')</label>
                                                <input type="text" name="system_recommendation" id="system_recommendation" class="form-control">
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
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>