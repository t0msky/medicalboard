<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/jdkDecision.attr.emp_injury')</label>
                               <input type="text" name="similarName" id="similarName" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.session_date')</label>
                                <input type="date" name="session_date" id="session_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/jdkDecision.attr.od_decision')</label>
                               <input type="text" name="od_decision" id="od_decision" class="form-control">
                           </div>
                       </div>
                   </div>
                        
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/jdkDecision.attr.jdk_dec')</label>
                               <input type="text" id="jdk_dec" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.jdk_type')</label>
                                <input type="text" id="jdk_type" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.assess_type')</label>
                                <input type="text" name="assess_type" id="assess_type" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.assessment')</label>
                                <input type="text" name="assessment" id="assessment" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                 <label class="control-label">@lang('scheme/jdkDecision.attr.prov_enddate')</label>
                                 <input type="date" name="prov_enddate" id="prov_enddate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.els_option')</label>
                                <input type="text" name="els_option" id="els_option" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/jdkDecision.attr.remark')</label>
                               <input type="text" name="remark" id="remark" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                 <label class="control-label">@lang('scheme/jdkDecision.attr.hus_enddate')</label>
                                 <input type="date" name="hus_enddate" id="hus_enddate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.accrual_date')</label>
                                <input type="date" name="accrual_date" id="accrual_date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.prov_accrualdate')</label>
                                <input type="date" name="prov_accrualdate" id="prov_accrualdate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.final_accrualdate')</label>
                                <input type="date" name="final_accrualdate" id="final_accrualdate" class="form-control">
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