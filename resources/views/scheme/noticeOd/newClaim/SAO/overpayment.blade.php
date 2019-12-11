<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                 <label class="control-label">@lang('scheme/confirmation.attr.overpay_reason')</label>
                                 <input type="text" name="overpay_reason" id="overpay_reason" class="form-control">
                             </div>
                         </div>

                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.debtors_id')</label>
                                <input type="text" name="debtors_id" id="debtors_id" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/confirmation.attr.overpay_period')</label>
                               <input type="text" name="overpay_period" id="overpay_period" class="form-control">
                           </div>
                       </div>
                   </div>

                   <div class="form-actions">
                    {{-- <button data-toggle="tab" href="#odinfo" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextOdInfo">@lang('insuredPerson.next')</button> --}}
                    <button type="submit" class="btn waves-effect waves-light btn-success">
                    @lang('scheme/insuredPerson.save')</button>
                    {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-previousEmpDetails">@lang('insuredPerson.previous')</button> --}}
                    {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                </div> 
            </div>
        </form>
    </div>
</div>      
</div>
</div>

