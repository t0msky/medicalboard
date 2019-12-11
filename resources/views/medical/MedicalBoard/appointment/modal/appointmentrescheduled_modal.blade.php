<div class="modal fade" id="apptrescheduled_modal" tabindex="-1" role="dialog" aria-labelledby="apptrescheduled_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title">Appointment Listing</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="" action="" method="">
            <div class="modal-body">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.date')</label>
                        <select name="apptdiscipline_date" id="apptdiscipline_date" class="form-control">
                            <option value="">-- @lang('option.please_select') --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.session')</label>
                        <select name="apptdiscipline_session" id="apptdiscipline_session" class="form-control">
                            <option value="">-- @lang('option.please_select') --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Id</label>
                        <input type="hidden" class="form-control" name="apptresc_id" id="apptresc_id">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Absent</label>
                        <input type="hidden" class="form-control" name="apptresc_absent" id="apptresc_absent">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Uniquerefno</label>
                        <input type="hidden" class="form-control" name="apptresc_uniquerefno" id="apptresc_uniquerefno">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Takwim Id</label>
                        <input type="hidden" class="form-control" name="apptresc_takwimid" id="apptresc_takwimid">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Prev Takwim Id</label>
                        <input type="hidden" class="form-control" name="apptresc_prev_takwimid" id="apptresc_prev_takwimid">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Id 2</label>
                        <input type="hidden" class="form-control" name="apptresc_id2" id="apptresc_id2">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Medical Board Id</label>
                        <input type="hidden" class="form-control" name="apptresc_mbid" id="apptresc_mbid">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Medical Session Speciality</label>
                        <input type="hidden" class="form-control" name="apptresc_mssid" id="apptresc_mssid">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">Prev Date</label>
                        <input type="hidden" class="form-control" name="apptresc_prev_date" id="apptresc_prev_date">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-left text-left">
                    <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('button.cancel')</button>
                </div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success saverescheduled" id="saverescheduled"><i class="fa fa-check"></i> @lang('button.save')</button>
            </div>
        </form>
        </div>
    </div>
</div>

