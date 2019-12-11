
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Revision')</label>
                                        <select class="form-control" data-placeholder="" tabindex="2">
                                            <option selected readonly disabled hidden>Please Choose </option>
                                            <option value="">@lang('')</option>
                                            <option value="">@lang('')</option>
                                            <option value="">@lang('')</option>
                                        </select>                                        
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title">@lang('Search')</h5>

                            <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Search By ')</label>
                                            <select class="form-control" data-placeholder="" tabindex="2">
                                                <option selected readonly disabled hidden>Please Choose </option>
                                                <option value="">@lang('Identification No.')</option>
                                                <option value="">@lang('')</option>
                                                <option value="">@lang('')</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Identification Type / Identification No')</label>
                                        <input type="text" id="idTypeidNo" name="idTypeidNo" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SEARCH')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            </div>

                            <h6 class="card-title-sub">@lang('Search') </h6>
                            <br>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Revision')</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="revision" name="revision" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Insured Person Name ')</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="ob" name="ob" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Identification Type')</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="idType" name="idType" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Identification No.')</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="idNum" name="idNum" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        