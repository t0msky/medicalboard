<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Campaign Ref. No.')</label><br>
                            <input type="text" value="" name="campaignRefNo" id="campaignRefNo " class="form-control" readonly>
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Start Date')</label><br>
                            <input type="date" value="" name="startDate" id="startDate " class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('End Date')</label><br>
                            <input type="date" value="" name="EndDate" id="EndDate " class="form-control" readonly>
                        </div>
                    </div>        
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Campaign Name')</label><br>
                            <input type="text" value="" name="campaignName" id="campaignName " class="form-control" >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Campaign Objective')</label><br>
                            <input type="text" value="" name="campaigObj" id="campaigObj1 " class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" value="" name="campaigObj" id="campaigObj2" class="form-control" readonly>
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Report')</label><br>
                            <input type="text" value="" name="Report" id="Report " class="form-control" >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Report Finding')</label><br>
                            <input type="text" value="" name="reportFinding" id="reportFinding " class="form-control" >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Campaign Status')</label><br>
                            <select class="form-control" data-placeholder="" tabindex="2">
                                <option selected readonly disabled hidden>Please Choose </option>
                                <option value="">@lang('Successful')</option>
                                <option value="">@lang('Non Successful')</option>
                                <option value="">@lang('Reassign')</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Assign To')</label><br>
                            <select class="form-control" data-placeholder="" tabindex="2">
                                <option selected readonly disabled hidden>Please Choose </option>
                                <option value="">@lang('')</option>
                                <option value="">@lang('')</option>
                                <option value="">@lang('')</option>
                            </select>
                        </div>
                    </div>      
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Title')</label><br>
                            <input type="text" value="" name="Title" id="Title " class="form-control" readonly >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('time')</label><br>
                            <input type="time" value="" name="time" id="time " class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Date')</label><br>
                            <input type="date" value="" name="date" id="date " class="form-control" >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Employer Name')</label><br>
                            <input type="text" value="" name="empName" id="empName " class="form-control" >
                        </div>
                    </div>   
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Address')</label><br>
                            <input type="text" value="" name="add1" id="add1 " class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" value="" name="add2" id="add2 " class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" value="" name="add3" id="add3 " class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('State')</label>
                            <input type="text" value="" name="State" id="State " class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('City')</label>
                            <input type="text" value="" name="City" id="City " class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Postcode')</label>
                            <input type="text" value="" name="Postcode" id="Postcode " class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Industry Description')</label>
                            <input type="text" value="" name="IndustryDescription" id="IndustryDescription " class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-5">
                            <label class="control-label">@lang('Attendance')</label>
                            <input type="text" value="" name="Attendance" id="Attendance " class="form-control" readonly >
                        </div>
                        <div class="form-group col-md-12 col-lg-7">
                            <label class="control-label">@lang('PPN/PPP')</label>
                            <input type="text" value="" name="PPNnPPP" id="PPNnPPP " class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Agency Name')</label>
                            <input type="text" value="" name="AgencyName" id="AgencyName " class="form-control" >
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Work Unit')</label>
                            <input type="text" value="" name="WorkUnit" id="WorkUnit " class="form-control" >
                        </div>
                    </div>        
                                     
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Hidden Activities:')</label>
                            <input type="text" value="" name="hiddenActivities" id="hiddenActivities" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Agent / Hazard:')</label>
                            <input type="text" value="" name="agentHarzard" id="agentHarzard" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Control Measures')</label>
                            <input type="text" value="" name="agentHarzard" id="agentHarzard" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Investigation')</label>
                            <input type="text" value="" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-8">
                            <label class="control-label">@lang("Employer's Justification")</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang("Date")</label>
                            <input type="date" readonly value="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang("Employee's Justification")</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Assessment Improvement')</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Assessment')</label>
                            <input type="text" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Prepared By')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Name')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Position')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SUBMIT')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
