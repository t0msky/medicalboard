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
                                    <label>Notice Id</label><span class="required">*</span>
                                    <input type="text" id="year_section96" name="year_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hus Start Date</label><span class="required">*</span>
                                    <input type="date" id="month_section96" name="month_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hus End Date</label><span class="required">*</span>
                                    <input type="date" id="wages_section96" name="wages_section96" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Months</label><span class="required">*</span>
                                    <input type="text" id="monthcontribution_section96" name="monthcontribution_section96" value=""
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
