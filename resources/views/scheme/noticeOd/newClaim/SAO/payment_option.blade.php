<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
             <form action="#">
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/paymentOption.attr.huk_payment_option')</label>
                            <input type="text" name="huk_paymentopt" id="huk_paymentopt" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/paymentOption.attr.date_payment_option')</label>
                            <input type="date" name="date_paymentopt" id="date_paymentopt" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/paymentOption.attr.updatedby')</label>
                            <input type="text" name="updatedby" id="updatedby" class="form-control">
                        </div>
                    </div>
                        
                    {{-- <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">@lang('paymentOption.attr.support_doc')</label>
                           <input type="text" name="support_doc" id="support_doc" class="form-control">
                       </div>
                   </div> --}}
               </div>
                    
                    
               <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/paymentOption.attr.updated_date')</label>
                            <input type="date" name="updateddate" id="updateddate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">@lang('scheme/paymentOption.attr.approvedby')</label>
                           <input type="text" name="approvedby" id="approvedby" class="form-control">
                       </div>
                   </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/paymentOption.attr.approved_date')</label>
                            <input type="date" name="approveddate" id="approveddate" class="form-control">
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