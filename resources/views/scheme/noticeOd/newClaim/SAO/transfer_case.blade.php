<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="#">
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/caseTransfer.attr.transfer')</label>
                                <input type="text" name="transfer" id="transfer" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/caseTransfer.attr.remark')</label>
                                <textarea type="text" name="remark" id="remark" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">    
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/caseTransfer.attr.origin')</label>
                                <input type="text" name="origin" id="origin" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/caseTransfer.attr.current')</label>
                                <input type="text" name="current" id="current" class="form-control">
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