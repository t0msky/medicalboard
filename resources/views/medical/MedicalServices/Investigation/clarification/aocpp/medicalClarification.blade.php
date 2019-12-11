<div class="card">
    <div class="card-body">
        <div class="form-body">
            <div class="form-row">
                <div class="form col-md-12 col-lg-12">
                    <label class="control-label">@lang('Remark')</label>
                    <a class='view'><i class="fas fa-file-alt"></i></a>
                </div>
            </div>
            <div class="form-row">
                <div class="form col-md-12 col-lg-6">
                    <label class="control-label">@lang('Action')</label>
                    <select class="form-control" name="moreinfo" id="moreinfo">
                        <option value="PS" hidden selected readonly>Please Select
                        </option>
                        <option value="Y">@lang('Approve')</option>
                        <option value="N">@lang('Reject')</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form col-md-12 col-lg-12">
                    <label class="control-label">@lang('Remark')</label>
                    <textarea type="text" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <button type="submit" class=" pull-center btn btn waves-effect waves-light btn-success a1">@lang('Submit')</button>
        </div>
    </div>
</div>