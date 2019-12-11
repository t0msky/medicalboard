<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('scoRecommend.title')</h5>
                            <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scoRecommend.attr.case_status')</label>
                                             <select class="form-control">
                                                 <option>@lang('scoRecommend.attr.approved')</option> 
                                                  <option>@lang('scoRecommend.attr.investigation')</option> 
                                                  <option>@lang('scoRecommend.attr.new')</option> 
                                                  <option>@lang('scoRecommend.attr.close_payment')</option> 
                                                  <option>@lang('scoRecommend.attr.close_wo_payment')</option> 
                                                  <option>@lang('scoRecommend.attr.not_approved')</option> 
                                                  <option>@lang('scoRecommend.attr.inquiry')</option> 
                                                  <option>@lang('scoRecommend.attr.not_finished')</option> 
                                                  <option>@lang('scoRecommend.attr.request')</option> 
                                                  <option>@lang('scoRecommend.attr.in_process')</option> 
                                                  <option>@lang('scoRecommend.attr.appeal_jdr')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scoRecommend.attr.question_1')</label><span class="required">*</span>
                                                <select class="form-control" required>
                                                    <option>@lang('scoRecommend.attr.yes')</option> 
                                                    <option>@lang('scoRecommend.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scoRecommend.attr.question_2')</label><span class="required">*</span>
                                                <select class="form-control" required>
                                                    <option>@lang('scoRecommend.attr.yes')</option> 
                                                    <option>@lang('scoRecommend.attr.no')</option> 
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label class="control-label">@lang('scoRecommend.attr.question_3')</label><span class="required">*</span>
                                        <select class="form-control" required>
                                                <option>@lang('scoRecommend.attr.yes')</option> 
                                                <option>@lang('scoRecommend.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>   
                                </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scoRecommend.attr.question_4')</label><span class="required">*</span>
                                        <select class="form-control" required>
                                            <option>@lang('scoRecommend.attr.yes')</option> 
                                            <option>@lang('scoRecommend.attr.no')</option> 
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scoRecommend.attr.question_5')</label><span class="required">*</span>
                                            <select class="form-control" required>
                                                <option>@lang('scoRecommend.attr.yes')</option> 
                                                <option>@lang('scoRecommend.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"> @lang('scoRecommend.attr.wrong_benefit')</label>
                                            <select class="form-control">
                                                <option>@lang('scoRecommend.attr.yes')</option> 
                                                <option>@lang('scoRecommend.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scoRecommend.attr.system_recommend')</label>
                                             <input type="text" name="system_recommend" id="system_recommend" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scoRecommend.attr.scheme_recommend_date')</label>
                                            <input type="date" name="scheme_recommend_date" id="scheme_recommend_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scoRecommend.attr.scheme_by')</label>
                                            <input type="text" name="scheme_by" id="scheme_by" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>