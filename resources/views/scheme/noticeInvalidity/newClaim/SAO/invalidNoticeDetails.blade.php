<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.start_date')</label>
                                    <input type="date" name="startDate" id="startDate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.end_date')</label>
                                    <input type="date" name="endDate" id="endDate" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.restart_date')</label>
                                    <input type="date" name="restartDate" id="restartDate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.reend_date')</label>
                                    <input type="date" id="reendDate" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.scheme_entry_date')</label>
                                    <input type="date" id="schemeDate" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.ob_work')</label>
                                    <select class="form-control" name="person_working">
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.scheme_entry_age')</label>
                                    <input type="text" name="schemeAge" id="schemeAge" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.begin_illness')</label>
                                    <input type="text" id="beginIllness" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.notice_entry_age')</label>
                                    <input type="text" name="noticeAge" id="noticeAge" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.morbid_date')</label>
                                    <input type="date" id="morbidDate" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.eligibility_age')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.meet_age')</option>
                                        <option>@lang('scheme/invaNotice.attr.notmeet_age')</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.statuotary_body')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.yes')</option>
                                        <option>@lang('scheme/invaNotice.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.spi_eligible')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.qualified')</option>
                                        <option>@lang('scheme/invaNotice.attr.not_qualified')</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row p-t-20">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.total_months_notice')</label>
                                    <input type="text" id="totalNoticeDate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.total_months_morbid')</label>
                                    <input type="text" id="totalMorbidDate" class="form-control">
                                </div>
                            </div>


                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.total_months_contribute')</label>
                                    <input type="text" id="totalMonthContribute" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.qualifying_ondition')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.full')</option>
                                        <option>@lang('scheme/invaNotice.attr.reduced')</option>
                                        <option>@lang('scheme/invaNotice.attr.full2440')</option>
                                        <option>@lang('scheme/invaNotice.attr.full3660')</option>
                                        <option>@lang('scheme/invaNotice.attr.invalidity_assist')</option>
                                        <option>@lang('scheme/invaNotice.attr.not_qualified')</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Scheme eligible</label>
                                    <input type="text" id="totalMorbidDate" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/invaNotice.attr.invalid_date_req')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.yes')</option>
                                        <option>@lang('scheme/invaNotice.attr.no')</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/invaNotice.attr.morbid_date_req')</label>
                                    <select class="form-control">
                                        <option>@lang('scheme/invaNotice.attr.yes')</option>
                                        <option>@lang('scheme/invaNotice.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('scheme/invaNotice.attr.invalid_date_req')</label>
                                        <select class="form-control">
                                            <option>@lang('scheme/invaNotice.attr.yes')</option>
                                            <option>@lang('scheme/invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/invaNotice.attr.morbid_date_req')</label>
                                        <select class="form-control">
                                            <option>@lang('scheme/invaNotice.attr.yes')</option>
                                            <option>@lang('scheme/invaNotice.attr.no')</option>
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
