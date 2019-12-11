<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <br>
                                <label class="control-label">@lang('scheme/saoApproval.attr.case_status')</label>
                                <select class="form-control">
                                   <option>@lang('scheme/scoRecommend.attr.approved')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.investigation')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.new')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.close_payment')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.close_wo_payment')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.not_approved')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.inquiry')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.not_finished')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.request')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.in_process')</option> 
                                   <option>@lang('scheme/scoRecommend.attr.appeal_jdr')</option> 
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/saoApproval.attr.question_1')</label>
                                <input type="text" name="question1" id="question1" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <br>
                                <label class="control-label">@lang('scheme/saoApproval.attr.question_2')</label>
                                <input type="text" name="question2" id="question2" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <br>
                                <label class="control-label">@lang('scheme/saoApproval.attr.question_3')</label>
                                <input type="text" name="question3" id="question3" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/saoApproval.attr.question_4')</label>
                                <input type="text" name="question4" id="question4" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <br>
                                <label class="control-label">@lang('scheme/saoApproval.attr.question_5')</label>
                                <input type="text" name="question5" id="question5" class="form-control">
                            </div>
                        </div>
                    </div>
                            
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/saoApproval.attr.wrong_benefit')</label>
                                <input type="text" name="wrongbenefit" id="wrongbenefit" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/saoApproval.attr.status_scheme')</label>
                                <input type="text" name="statusscheme" id="statusscheme" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/saoApproval.attr.sao_approval')</label>
                                    <input type="text" name="saoapproval" id="saoapproval" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.reject_reason')</label>
                                    <input type="text" name="rejectreason" id="rejectreason" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.close_reason')</label>
                                    <input type="text" name="closereason" id="closereason" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.approval_jdk')</label>
                                    <input type="text" name="approvaljdk" id="approvaljdk" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.mar_opinion')</label>
                                    <input type="text" name="opinion" id="opinion" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.scheme_date')</label>
                                    <input type="text" name="schemedate" id="schemedate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/saoApproval.attr.scheme_by')</label>
                                    <input type="text" name="schemeby" id="schemeby" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-actions">
                          {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                          <button type="submit" class="btn waves-effect waves-light btn-success">
                          @lang('scheme/insuredPerson.save')</button>
                          {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                      </div>                 
                  </form>
              </div>
          </div>
      </div>
  </div>