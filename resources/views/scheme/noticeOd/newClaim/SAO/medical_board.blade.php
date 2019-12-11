<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.potential_not_emp_injury')</label>
                                    <input type="text" name="potential_not_emp_injury" id="potential_not_emp_injury" class="form-control">   
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.hus_end_date')</label>
                                        <input type="date" name="hus_end_date" id="hus_end_date" class="form-control">   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/medicalBoard.attr.accrual_date')</label>
                                    <input type="date" name="accrual_date" id="accrual_date" class="form-control">   
                                </div>
                            </div>
                        </div> 
            
                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.provisional_assesment_accrual_date')</label>
                                    <input type="date" name="provisional_assesment_accrual_date" id="provisional_assesment_accrual_date" class="form-control">   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.final_assesment_accrual_date')</label>
                                    <input type="date" name="final_assesment_accrual_date" id="final_assesment_accrual_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.provisional_end_Date')</label>
                                    <input type="date" name="provisional_end_Date" id="provisional_end_Date" class="form-control">   
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalBoard.attr.huk_payment_option')</label>
                                    <input type="text" name="huk_payment_option" id="huk_payment_option" class="form-control">   
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                  {{--   <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button> --}}
                                </div>
                            </div>
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>