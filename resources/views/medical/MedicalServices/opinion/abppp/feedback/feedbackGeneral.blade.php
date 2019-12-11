<div class="form-row">
    <div class="form-group col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-8">
                            <label class="control-label">@lang('From')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Date ')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Query ')</label>
                            <textarea type="text" rows="3" cols="230" class="form-control" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Feedback ')</label>
                            <textarea type="text" rows="3" cols="230" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-2">
                            <label class="control-label">@lang('Choose file')</label>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal"data-target="#model_supporting_document">@lang('Upload')</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn waves-effect waves-light btn-success" >@lang('SUBMIT')</button>  
                </form>
            </div>
        </div>
    </div>
</div>
<div style="hidden:none">
    @include('general.supportingDocument.modal')
</div>