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
                                                <option value="">Please Select</option> 
                                                <option value="recommend">Recommend</option> 
                                                <option value="investigation">Investigation</option> 
                                                <option value="transfer_case">Case Transfer</option> 
                                            </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-0"> <br>
                                    <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                                </div> --}}
                            </div>
                            <div  id="viewTable" style="display:none">
                                <div class='row'>
                                    <div class="col-md-12 col-lg-8">
                                        <div class="card">
                                            <table class="table table-sm table-bordered" cellspacing="0" width="100%">
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
                                                <tbody class='align-middle'>
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
                                                                <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendationview_popup" data-whatever="@fat">View</button>
                                                            </div>
                                                        </td> 
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="col-md-0">
                                                <button type="button" name="action" id="add_recommend" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Add Recommend</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- POTENTIALS SECTION--}}
                                <div>
                                    <h5 class="card-title-sub"> Potentials </h5>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Potential HUK</label>
                                                    <select class="form-control">
                                                        <option></option> 
                                                        <option></option> 
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Potential Invalidity</label>
                                                    <select class="form-control">
                                                        <option></option> 
                                                        <option></option> 
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            {{--CASE TRANSFER SECTION--}}
                            <div id="case_transfer" style="display:none">
                                <h5 class="card-title-sub">Case Transfer </h5>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                            <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                            <select name='state' id='state' class='form-control'>
                                                @foreach($state as $s)
                                                @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                                <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                                @else
                                                <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>@lang('scheme/socso.attr.preferred_socso')</label>
                                            <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                                        </div>
                                    </div>
                                </div> 
                            </div>
    
                            {{--END SECTION-}}
                            
                                {{-- POPUP From Dropdown  --}}
                                {{-- RECOMMENDATION --}}
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header  card-title">
                                                <h4 class="modal-title" id="exampleModalLabel1">Employment Injury Decision</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('scheme.noticeDeath.newClaim.SCO.sbk.recommendation_popup') 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                <button type="button" id="recommend_save" class="btn btn-primary recommend_save" data-dismiss="modal">@lang('scheme/accidentDetails.save')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
        
                                {{-- End POPUP From Dropdown  --}}
    
                            {{--View POPUP --}}
                            <div class="modal fade" id="recommendationview_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel0">Employment Injury Decision</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeDeath.newClaim.SCO.sbk.recommendationview_popup') 
                                        </div>
    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            {{-- <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- END POPUP --}}
    
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
     $(document).ready(function() { 
          $('select[name=dd_recommendation]').change(function () 
          {
             if (this.value == 'recommend') 
             {
                $("#viewTable").show();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
             } 
             
             else if (this.value == 'investigation') 
             {
                $("#viewTable").hide();
                $("#investigation").show();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
             } 
             
             else if (this.value == 'wrong_benefit_type') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").show();
                $("#case_transfer").hide();
             } 
    
             else if (this.value == 'transfer_case') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").show();
             }
    
             else 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
             }
          });
          
          $('#recommend_save').click(function(){
            $('#exampleModal1').hide();
            $('#add_recommend').hide();
        });
    
        });
    </script> 
    