<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity starting date</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Morbid Date</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD Session Date</label>
                                    <input type="date" name="jd_date" id="jd_date" class="form-control" disabled>
                                </div>
                            </div>

                        </div>


                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">About Ilness</label>
                                    <input type="text" id="illness" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity Decision</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">ELS</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                            </div>


                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">JD Type</label>
                                    <select class="form-control" disabled>
                                        <option value="jd">JD</option>
                                        <option value="jdr">JDR</option>
                                        <option value="jdk">JDK</option>
                                    </select>
                                </div>
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
