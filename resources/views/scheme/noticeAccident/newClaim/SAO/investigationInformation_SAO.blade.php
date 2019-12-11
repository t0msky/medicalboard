<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                            <form action="#">
                                    <h3 class="card-title">@lang('investigationInformation.title')</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('investigationInformation.attr.date')</label>
                                               <input type="date" name="date" id="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('investigationInformation.attr.date_of_IP')</label>
                                               <input type="date" name="date_of_IP" id="date_of_IP" class="form-control">
                                            </div>
                                        </div>    
                                    </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.question_1_SAO')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.question_2_SAO')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('investigationInformation.attr.question_3_SAO')</label><br>
                                           <select class="form-control">
                                                <option>@lang('investigationInformation.attr.yes')</option> 
                                                <option>@lang('investigationInformation.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>   
                                </div>    
                                <div class="row p-t-20">
                                    
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('investigationInformation.attr.question_4_SAO')</label>
                                                <select class="form-control">
                                                    <option>@lang('investigationInformation.attr.yes')</option> 
                                                    <option>@lang('investigationInformation.attr.no')</option> 
                                                </select>
                                            </div>
                                        </div>
                                        
            
                                <div class="col-md-4">
                                            <div class="form-group">
                                                 <label class="control-label">@lang('investigationInformation.attr.question_5_SAO')</label>
                                                 <select class="form-control">
                                                        <option>@lang('investigationInformation.attr.yes')</option> 
                                                        <option>@lang('investigationInformation.attr.no')</option> 
                                                    </select>
                                            </div>
                                        </div>
                                </div>
            
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.system_recommendation')</label>
                                                 <input type="text" name="wrong_benefit" id="wrong_benefit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.io_recommendation')</label>
                                                <input type="text" name="io_recommendation" id="io_recommendation" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('investigationInformation.attr.io_recommendation_date')</label>
                                                <input type="text" name="io_recommendation_date" id="io_recommendation_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-danger">@lang('investigationInformation.cancel')</button>
                                <button type="button" class="btn btn-warning">@lang('investigationInformation.clear')</button>
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('investigationInformation.save')</button>
                            </div>              
                        </form>
                    </div>
                    </div>
                </div>
            </div>
</div>