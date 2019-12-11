<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                         <h5 class="card-title">HUK</h5>
                        <hr>
                       <div class='row'>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JD Type</label><span
                                        class="required">*</span>
                                    <select class="form-control" data-placeholder="Please Select"
                                        tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="jd">JD</option>
                                        <option value="jdr">JDR</option>
                                        <option value="jdk">JDK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JD/JDR Session Date</label><span
                                        class="required">*</span>
                                    <input type="date" id="sessiondate_section96" class="form-control"
                                        name="sessiondate_section96" value="">
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Assessment Type</label><span class="required">*</span>
                                    <input type="text" id="assessmenttype_section96" name="assessmenttype_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JD/JDR Result</label><span class="required">*</span>
                                    <input type="text" id="jdresult_section96" name="jdresult_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Assessment Percentage</label><span class="required">*</span>
                                    <input type="text" id="assessmentpercentage_section96" name="assessmentpercentage_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ELS</label><span class="required">*</span>
                                    <input type="text" id="els_section96" name="els_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Remarks</label><span class="required">*</span>
                                    <input type="text" id="remarks_section96" name="remarks_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">HUS</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JD Session Date</label><span
                                        class="required">*</span>
                                    <input type="date" id="jdsessiondate_section96" class="form-control"
                                        name="jdsessiondate_section96" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JD Type</label><span
                                        class="required">*</span>
                                    <input type="text" id="jdtype_section96" class="form-control"
                                        name="jdtype_section96" value="JDR">
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JDR Result</label><span
                                    class="required">*</span>
                                    <select class="form-control" data-placeholder="Please Select"
                                    tabindex="2">
                                    <option selected readonly disabled hidden>Please Select</option>
                                    <option value="treated">Can be Treated</option>
                                    <option value="nottreated">Cannot be Treated</option>
                                </select>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Invalidity Date Start</label><span class="required">*</span>
                                    <input type="date" id="nvaliditydate_section96" name="nvaliditydate_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Morbid Date</label><span class="required">*</span>
                                    <input type="date" id="morbiddate_section96" name="morbiddate_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Invalidity Decision</label><span class="required">*</span>
                                    <input type="text" id="invaliditydecision_section96" name="invaliditydecision_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>els</label><span class="required">*</span>
                                    <input type="text" id="els_section96" name="els_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">SAVE</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">RESET</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">CANCEL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
