
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="card m-b-0">

                            <h5 class="card-title">@lang('Select Revision Type')</h5>

                            <div class="row p-t-20">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('Revision')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                    </select>                                        
                                </div>
                            </div>
                            <h5 class="card-title">@lang('Search')</h5>
                                <div class="row p-t-20">
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label class="control-label">@lang('Identification Type')</label>
                                            <select class="form-control" data-placeholder="" tabindex="2">
                                                <option selected readonly disabled hidden>Please Choose </option>
                                                <option value="">@lang('Identification No.')</option>
                                                <option value="">@lang('')</option>
                                                <option value="">@lang('')</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                <div class="row p-t-20">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('Identification No')</label>
                                        <input type="text" id="idTypeidNo" name="idTypeidNo" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SEARCH')</button>
                                </div>
                                <div class="card-body">
                                <h6 class="card-title-sub">@lang('Search Result') </h6>
                                <br>

                                <div class="row p-t-20">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('Revision')</label>
                                        <input type="text" id="Revision" name="Revision" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="row p-t-20">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('Insured Person Name')</label>
                                        <input type="text" id="idTypeidNo" name="idTypeidNo" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('Identification Type')</label>
                                        <input type="text" id="idTypeidNo" name="idTypeidNo" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('IIdentification No')</label>
                                        <input type="text" id="idTypeidNo" name="idTypeidNo" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('NEXT')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    