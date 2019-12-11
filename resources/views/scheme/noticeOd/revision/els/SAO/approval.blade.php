<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">Approval</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Approval</label>
                                    <select class="form-control clearfields" name='approval' id='approval' required>
                                        <option value="">Approve</option>
                                        <option value="">Disapprove</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Scheme Approved By</label>
                                    <input type="text" readonly id="schemeby" name="schemeby" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Scheme Approved Date</label>
                                    <input type="date" readonly id="schemedate" name="schemedate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Route</label>
                                    <input type="text" readonly id="updated_by" name="name" value="" class="form-control" placeholder="JDR">
                                </div>
                            </div>
                        </div>
                        
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">SUBMIT</button>
                                    <!-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">RESET</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">cancel</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">BACK</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>