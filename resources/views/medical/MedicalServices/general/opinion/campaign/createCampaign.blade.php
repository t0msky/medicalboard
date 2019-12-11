<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Campaign Ref. No.')</label>
                            <input type="text" value="" name="campaign_ref" id="campaign_ref" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Start Date')</label>
                            <input type="text" value="" name="start_date" id="start_date" class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('End Date')</label>
                            <input type="text" value="" name="end_date" id="end_date" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Campaign Name ')</label>
                            <input type="text" value="" name="campaign_name" id="campaign_name" class="form-control" >
                        </div>
                    </div>  
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Report')</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">@lang('Choose file')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Report Finding')</label><br>
                            <input type="text" value="" name="reportFinding" id="reportFinding" class="form-control" >
                        </div>
                    </div>   
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Campaign Objective')</label><br>
                            <input type="text" value="" name="campaign_obj" id="campaignObj1" class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" value="" name="campaign_obj" id="campaignObj2" class="form-control" >
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Assign to ')</label><br>
                            <input type="text" value="" name="Assign" id="Assign " class="form-control" >
                        </div>
                    </div>            
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Add Campaign')</button>
                    </div> 
                    <br>      
                    <br>      
                           
                <!--------------------------- TABLE CREATE CAMPAIGN -------------------------------->

                    <div class="col-12">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:15%'>@lang('Campaign Ref. No.')</th>
                                        <th style='width:15%'>@lang('Start Date')</th>
                                        <th style='width:15%'>@lang('End Date')</th>
                                        <th style='width:40%'>@lang('Campaign Name')</th>
                                        <th style='width:20%'>@lang('Status')</th>
                                        <th style='width:5%'>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
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



