<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <h5 class="card-title">@lang('Medical Board Decision')</h5>
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('scheme/medicalDetails.attr.invalidity_date')</label>
                                <select class="form-control" disabled>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/medicalDetails.attr.morbidity_date')</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('scheme/medicalDetails.attr.jd_date')</label>
                                <input type="date" name="jd_date" id="jd_date" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('scheme/medicalDetails.attr.illness')</label>
                                <input type="text" id="illness" class="form-control" disabled>
                             </div>

                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('scheme/medicalDetails.attr.invalidity_decision')</label>
                                <select class="form-control" disabled>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('scheme/medicalDetails.attr.els')</label>
                                <select class="form-control" disabled>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('scheme/medicalDetails.attr.jd_type')</label>
                                    <select class="form-control" disabled>
                                        <option value="jd">JD</option>
                                        <option value="jdr">JDR</option>
                                        <option value="jdk">JDK</option>
                                    </select>
                            </div>

                           
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                          
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>