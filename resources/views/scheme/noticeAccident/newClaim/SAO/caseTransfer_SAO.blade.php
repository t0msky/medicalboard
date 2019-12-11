<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            <div class="row p-t-20">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/caseTransfer.attr.transfer')</label>
                                        <input type="text" name="transfer" id="transfer" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scheme/caseTransfer.attr.remark')</label>
                                        <input type="text" name="remark" id="remark" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/caseTransfer.attr.origin')</label>
                                        <input type="text" name="origin" id="origin" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/caseTransfer.attr.current')</label>
                                            <input type="text" id="current" name="current" class="form-control">
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