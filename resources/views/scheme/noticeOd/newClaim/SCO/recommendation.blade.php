<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/scoRecommend.attr.action')</label>
                                    <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                        <option value="recommend">@lang('scheme/scoRecommend.attr.recommend')</option> 
                                        <option value="query">@lang('scheme/scoRecommend.attr.query')</option> 
                                        <option value="medical_opinion">@lang('scheme/scoRecommend.attr.medical_Opinion')</option> 
                                        <option value="investigation">@lang('scheme/scoRecommend.attr.investigation')</option> 
                                        <option value="legal_opinion">@lang('scheme/scoRecommend.attr.legalopinion')</option> 
                                        <option value="PPNOpinion">@lang('scheme/scoRecommend.attr.PPNopinion')</option> 
                                        <option value="AROopinion">@lang('scheme/scoRecommend.attr.AROopinion')</option> 
                                        <option value="wrong_benefit_type">Wrong Type of Notice</option>
                                        <option value="transfer_case">Case Transfer</option> 
                                        <option value="send_notification">Send Notification</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-0"> <br>
                                <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                            </div>
                            {{-- POPUP From Dropdown  --}}
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel1">Employment Injury Decision</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeOd.newClaim.SCO.recommendation_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel2">Case Transfer</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeOd.newClaim.SCO.caseTransfer_popup') 
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel3">Query</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeOd.newClaim.SCO.query_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel4">Notification</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeOd.newClaim.SCO.notification_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel4">Wrong Type of Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeOd.newClaim.SCO.wrong_benefit') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            {{-- End POPUP From Dropdown  --}}
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <div class="form-actions text-right">
                                </div>
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:2%'>No</th>
                                            <th style='width:8%'>Recommendation Date</th>  
                                            <th style='width:20%'>Recommend By</th>
                                            <th style='width:15%'>Role</th>
                                            <th style='width:8%'>Employment Injury</th>
                                            <th style='width:5%'>@lang('scheme/mc.attr.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td>1</td>
                                            <td><input type="date" name="recommendation_date" value="" class="form-control" ></td>
                                            <td><input type="text" name="recommend_by" value="" class="form-control" ></td>
                                            <td><input type="text" name="role" value="" class="form-control" ></td>
                                            <td>
                                                <select class="form-control" required>
                                                    <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                                </select>
                                            </td>
                                            <td>
                                                <div class="col-md-0">
                                                    <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal0" data-whatever="@fat">View</button>
                                                </div>
                                                <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header  card-title">
                                                                <h4 class="modal-title" id="exampleModalLabel0">Employment Injury Decision</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @include('scheme.noticeOd.newClaim.SCO.recommendation_popup')  
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                                                <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>     
                                <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Potential HUK</label>
                                    <select class="form-control">
                                        <option></option> 
                                        <option></option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Potential Invalidity</label>
                                    <select class="form-control">
                                        <option></option> 
                                        <option></option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity Benefit Ref. No. </label>
                                    <input type="text" name="invalidity" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Potential SEK 96</label>
                                    <select class="form-control">
                                        <option></option> 
                                        <option></option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
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

<script>
   $("#ddNext").click(function () {
    var dd_recommendation = $('#dd_recommendation').val();

    if (dd_recommendation == 'recommend') {
      
        var testing ="#exampleModal1";

    } else if(dd_recommendation == 'transfer_case') {
     
        var testing ="#exampleModal12";
    }
    else if(dd_recommendation == 'query') {
     
        var testing ="#exampleModal13";
    }
    else if(dd_recommendation == 'send_notification') {
         
        var testing ="#exampleModal14";
    }
    else if(dd_recommendation == 'wrong_benefit_type') {
         
        var testing ="#exampleModal15";
    }
 $("#ddNext").attr('data-target', testing);
});
   
</script>