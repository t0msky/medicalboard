<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/benefit.attr.benefit_approvedate')</label>
                                <input type="date" name="benefit_approvedate" id="benefit_approvedate" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/benefit.attr.benefit_approvedby')</label>
                                <input type="text" name="benefit_approvedby" id="benefit_approvedby" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/benefit.attr.remarks')</label>
                                <textarea type="text" name="remarks" id="remarks" class="form-control"></textarea>
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