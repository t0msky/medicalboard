<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
                <form action="#">
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-8 col-lg-6">
                                <label class="control-label">@lang('Name')</label>
                                <input type="text" value="" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Address')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('State')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('City')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Postcode')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Telephone No.')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Email')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Email')</label>
                                <textarea type="text" rows="5" cols="230" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-2">
                                <label class="control-label">@lang('Choose file')</label>
                                <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal"data-target="#model_supporting_document">@lang('Upload')</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn waves-effect waves-light btn-success" >@lang('SUBMIT')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="hidden:none">
    @include('general.supportingDocument.modal')
</div>
