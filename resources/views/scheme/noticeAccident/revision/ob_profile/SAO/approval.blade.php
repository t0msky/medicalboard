<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                        <form action="#">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Approval</label>
                                             <input type="text" name="system_recommendation_SCO" id="system_recommendation_SCO" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Approved By</label>
                                            <input type="text" name="system_recommendation_by" id="system_recommendation_by" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Approved Date</label>
                                            <input type="date" name="system_recommendation_date" id="system_recommendation_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Created Date</label>
                                            <input type="date" name="system_recommendation_date" id="system_recommendation_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Created By</label>
                                        <input type="text" name="system_recommendation_date" id="system_recommendation_date" class="form-control">
                                    </div>
                                </div>
                            </div>    
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                    </div>
                                </div>
                            </div>            
                    </form>
                </div>
                </div>
            </div>
        </div>
</div>