

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('form/medical.tab_title.feedback')</h5>
                <hr>
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.fromfeedback')</label>
                                     <input type="text" class="form-control" name="fromfeedback" id="fromfeedback" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.date')</label>
                                    <input type="text" name="feedbackdate" id="feedbackdate" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.query')</label>
                                    <textarea name="query_fd" id="query_fd" class="form-control" readonly></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.feedback')</label>
                                    <textarea name="fd_remark" id="fd_remark" class="form-control" readonly></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <a class="btn waves-effect waves-light btn-success text-white" href="#">@lang('button.submit')</a>
                            <!-- <button></button> -->
                        </div>

                        <!-- <div class="row p-t-20"> -->
                            
                        <!-- </div> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



























