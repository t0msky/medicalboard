<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
                    <h5 class="card-title"> @lang('Recommendation')</h5>
                    <br>
                    <h5 class="card-title-sub"> @lang('Recommendation History')</h5>
                    <div class="col-md-12 col-lg-9">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:20%'>@lang('Recommendation')</th>
                                        <th style='width:15%'>@lang('Recommended By')</th>
                                        <th style='width:10%'>@lang('Recommended Date')</th>
                                        <th style='width:3%'>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                        &nbsp;<td style="align:center;width:1%;" title="VIEW" ><a id='view'><i class="fas fa-file-alt"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <h5 class="card-title-sub"> @lang('Recommendation')</h5>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Recommended By')</label>
                                    <input type="text"  id="recBy" name="recBy" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Recommended Date')</label>
                                    <input type="text" id="recDate" name="recDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Recommendation')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="dd_recommendation" id="selectTransferCase">
                                        <option selected readonly disabled hidden>Please Choose</option>
                                        <option value="recommend">Recommend</option> 
                                        <option value="investigation">Investigation</option> 
                                        <option value="revision_change_acc_date">Revision - Change of Accident Date</option>
                                        <option value="request_assessment">Request Assessment Opinion</option>
                                        <option value="wrong_notice_type">Wrong Notice Type</option>
                                        <option value="case_transfer">Case Transfer</option> 
                                        <option value="reject">Reject</option> 
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <!-------------- RECOMMEND --------------->
                        <div class="row" style="display:none;" id="section_recommend">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">

                                        {{-- <h5 class="card-title"> @lang('Recommend')</h5> --}}
                                        <br>
                                        <h5 class="card-title-sub"> @lang('Potentials')</h5>

                                        <div class="row p-t-10">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Benefit Ref. No.')</label>
                                                    <input type="text"  id="benefit_ref_no" name="benefit_ref_no" value="" class="form-control">
                                                </div>
                                            </div>
                                            {{-- <button type="submit" class="btn btn-success waves-effect waves-light">Save</button> --}}
                                        </div>
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                <label class="control-label">@lang('Potential Section 96')</label>
                                                    <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                                        <option selected readonly disabled hidden>Please Choose</option>
                                                        <option value="">@lang('')</option>
                                                        <option value="">@lang('')</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-------------- Revision - Change of Accident Date --------------->
                        <div class="row" style="display:none;" id="section_revision_change_date">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">
                        
                                            <h5 class="card-title-sub"> @lang('Revision - Change of Accident Date')</h5>
                        
                                            <div class="row p-t-10">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Accident Date')</label>
                                                        <input type="text" readonly id="accDate" name="accDate" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Accident Date from other source')</label>
                                                        <input type="text" readonly id="accDateOtherSource" name="accDateOtherSource" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-------------- Transfer Case --------------->
                        <div class="row" style="display:none;" id="section_case_transfer">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">
                        
                                            <h5 class="card-title-sub"> @lang('Transfer Case')</h5>
                        
                                            <div class="row p-t-10">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('SOCSO Office')</label>
                                                        <input type="text" readonly id="socsoOff" name="socsoOff" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Transfer Case')</label>
                                                        <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                                            <option selected readonly disabled hidden>Please Choose</option>
                                                            <option value="">@lang('')</option>
                                                            <option value="">@lang('')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-10">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Remarks')</label>
                                                        <input type="text" id="Remarks" name="Remarks" value="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Reset</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!-------------- Request Assessment Opinion --------------->
                        <div class="row" style="display:none;" id="section_request_assessment">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">
                            
                                            <h5 class="card-title-sub"> @lang('Request Assessment Opinion')</h5>
                                            <div class="row p-t-10">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Remarks')</label><br>
                                                        <textarea rows="6" cols="50"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <h5 class="card-title-sub"> @lang('Update Remarks')</h5>
                                            <div class="row p-t-10">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Remarks')</label><br>
                                                        <textarea rows="6" cols="50"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <h5 class="card-title-sub"> @lang('Decision')</h5>
                        
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Decision')</label>
                                                        <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                                            <option selected readonly disabled hidden>Please Choose</option>
                                                            <option value="accept">@lang('Accept')</option>
                                                            <option value="decline">@lang('Decline')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-------------- Reject Reason--------------->
                        <div class="row" style="display:none;" id="section_reject">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">
                        
                                            <h5 class="card-title-sub"> @lang('Reject Reason')</h5>
                        
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Potential Section 96')</label>
                                                        <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                                            <option selected readonly disabled hidden>Please Choose</option>
                                                            <option value="">@lang('')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-------------- APPROVAL--------------->
    
                        <div class="row" style="display:none;" id="section_approval">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/obform" method="POST">

                                            <h5 class="card-title-sub"> @lang('Approval')</h5>

                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('Potential Section 96')</label>
                                                        <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                                            <option selected readonly disabled hidden>Please Choose</option>
                                                            <option value="">@lang('Approve')</option>
                                                            <option value="">@lang('Investigation')</option>
                                                            <option value="">@lang('Request Assessment Opinion')</option>
                                                            <option value="">@lang('Wrong Notice Type')</option>
                                                            <option value="">@lang('Transfer Case')</option>
                                                            <option value="">@lang('Reject')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() { 
        $('select[name=dd_recommendation]').change(function () 
        {
            if (this.value == 'recommend') 
            {
            $("#section_recommend").show();
            $("#section_revision_change_date").hide();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").hide();
            } 

            else if (this.value == 'revision_change_acc_date') 
            {
            $("#section_recommend").hide();
            $("#section_revision_change_date").show();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").hide();
            }

            else if (this.value == 'request_assessment') 
            {
            $("#section_recommend").hide();
            $("#section_revision_change_date").hide();
            $("#section_request_assessment").show();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").hide();
            }

            else if (this.value == 'case_transfer') 
            {
            $("#section_recommend").hide();
            $("#section_revision_change_date").hide();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").show();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").hide();
            }

            else if (this.value == 'wrong_notice_type') 
            {
            $("#section_recommend").hide();
            $("#section_revision_change_date").hide();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").show();
            $("#section_reject").hide();
            }

            else if (this.value == 'reject') 
            {
            $("#section_recommend").hide();
            $("#section_revision_change").hide();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").show();
            }

            else 
            {
            $("#section_recommend").hide();
            $("#section_revision_change").hide();
            $("#section_request_assessment").hide();
            $("#section_case_transfer").hide();
            $("#section_wrong_notice_type").hide();
            $("#section_reject").hide();
            }
        });
        
        $('#recommend_save').click(function(){
        $('#exampleModal1').hide();
        $('#add_recommend').hide();
        });
    });
</script>
