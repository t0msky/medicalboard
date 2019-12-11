
<div class="row">
    <div class="col-lg-12">
        <form action="#">
            <div class="row-pt-20 default" id="rec" style="display:none">
            <h6 class="card-title-sub">@lang('Recommendation')</h6>
            <div class="form-body">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Meeting Reference No.')</label>
                        <input type="text" value="" class="form-control" readonly>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('MO Ref No.')</label>
                        <input type="text" value="" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Appeal ?')</label>
                        <select class="form-control" data-placeholder="" tabindex="2">
                            <option selected readonly disabled hidden>Please Choose </option>
                            <option value="">@lang('Yes')</option>
                            <option value="">@lang('No')</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Justification')</label>
                        <input type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Committee Panel name 1')</label>
                        <input type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Committee Panel name 2')</label>
                        <input type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Committee Panel name 3')</label>
                        <input type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Chairman name/Replacement Chairman')</label>
                        <input type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Date')</label>
                        <input type="date" value="" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('CEO Decision')</label>
                        <select class="form-control" data-placeholder="" tabindex="2">
                            <option selected readonly disabled hidden>Please Choose </option>
                            <option value="">@lang('Agree')</option>
                            <option value="">@lang('Disagree')</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success a1">@lang('UPLOAD')</button>
                </div>
            </div> 
        </form>
    </div>
</div>