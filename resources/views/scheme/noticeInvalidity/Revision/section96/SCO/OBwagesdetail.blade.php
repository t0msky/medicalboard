<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                
                       <div class='row'>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employer Code</label><span
                                        class="required">*</span>
                                    <input type="text" id="empcode_section96" class="form-control"
                                        name="empcode_section96" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employer Name</label><span
                                        class="required">*</span>
                                    <input type="text" id="empname_section96" class="form-control"
                                        name="empname_section96" value="">
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment Start</label><span
                                        class="required">*</span>
                                    <input type="date" id="startdate_section96" class="form-control"
                                        name="startdate_section96" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment End</label><span
                                        class="required">*</span>
                                    <input type="date" id="resign_section96" class="form-control"
                                        name="resign_section96" value="">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label><span class="required">*</span>
                                    <input type="text" id="year_section96" name="year_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Month</label><span class="required">*</span>
                                    <input type="text" id="month_section96" name="month_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Wages</label><span class="required">*</span>
                                    <input type="text" id="wages_section96" name="wages_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contribution Payable(RM)</label><span class="required">*</span>
                                    <input type="text" id="monthcontribution_section96" name="monthcontribution_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contribution Surplus/deficit/arrears</label><span class="required">*</span>
                                    <input type="text" id="wages_section96" name="wages_section96" value=""
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
