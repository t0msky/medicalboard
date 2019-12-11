<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
            <form action="#">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Requestor Ref. No')</label>
                        <input type="text" name="reqRefNo" id="reqRefNo" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Request Received Date')</label>
                        <input type="date" name="requestRecDate" id="requestRecDate" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Requestor Name')</label>
                        <input type="text" name="reqName" id="reqName" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Requestor Designation')</label>
                        <input type="text" name="reqDesignation" id="reqDesignation" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Email')</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Source')</label>
                        <select class="form-control" data-placeholder="" tabindex="2">
                            <option selected readonly disabled hidden>Please Choose </option>
                            <option value="">@lang('')</option>
                            <option value="">@lang('')</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Remarks')</label>
                        <input type="text" name="email" id="email" class="form-control" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-2">
                        <label class="control-label">@lang('Choose file')</label>
                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal"data-target="#model_supporting_document">@lang('Upload')</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@include('general.supportingDocument.modal')

