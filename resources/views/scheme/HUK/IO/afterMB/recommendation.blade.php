<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                        <h5 class="card-title"> @lang('Recommendation')</h5>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Action</label>
                                            <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                                <option value=""  >Please Select</option> 
                                                <option value="recommend">Recommend</option> 
                                                <option value="investigation">Investigation</option> 
                                                <option value="request_assessment">Request Assessment Opinion</option> 
                                                <option value="wrong_benefit_type">Wrong Notice Type</option>
                                                <option value="transfer_case">Case Transfer</option> 
                                                <option value="reject">Reject</option> 
                                            </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-0"> <br>
                                    <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                                </div> --}}
                            </div>
    
                            {{-- Recommend Section --}}
                            
                            <div  id="viewTable" style="display:none">
                                {{-- POTENTIALS SECTION--}}
                                <h5 class="card-title-sub"> Potentials </h5>
                                <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Benefit Ref. No.</label>
                                                    <select class="form-control">
                                                        <option></option> 
                                                        <option></option> 
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Potential Section 96</label>
                                                    <select class="form-control">
                                                        <option></option> 
                                                        <option></option> 
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                                
                            {{-- WRONG NOTICE TYPE SECTION--}}
                            <div id="wrong_notice_type" style="display:none">
                                <h5 class="card-title-sub"> Wrong Notice Type </h5>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Recommended Notice Type</label>
                                                <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                                    <option value=""></option>
                                                    <option value=""></option> 
                                                </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Justification</label>
                                                <textarea type="text" name="justification" id="justification" class="form-control"></textarea>
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
                                            <label class="control-label">@lang('State')</label>
                                            <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                            <select name='state' id='state' class='form-control'>
                                                {{-- @foreach($state as $s)
                                                @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                                <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                                @else
                                                <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                @endif
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Preferred Socso</label>
                                            <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                            {{-- REQUEST ASSESSMENT SECTION --}}
                            <div class='row' id="request_assessment" style="display:none">
                                {{-- <div class="row p-t-20"> --}}
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                                <label class="control-label">Remarks</label>
                                                <textarea type="text" name="request_assessment" id="request_assessment" class="form-control"></textarea>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            </div>
                            {{--END SECTION-}}

                            {{-- REJECT SECTION --}}
                            <div class='row' id="reject" style="display:none">
                                {{-- <div class="row p-t-20"> --}}
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group">
                                                <label class="control-label">Reason Reject</label>
                                                <textarea type="text" name="reason_reject" id="reason_reject" class="form-control"></textarea>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            </div>
                            {{--END SECTION-}}
                            
                            {{-- END POPUP --}}
    
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
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
                $("#request_assessment").hide();
                $("#reject").hide();
                $("#others1").hide();
             } 
             
             else if (this.value == 'investigation') 
             {
                $("#viewTable").hide();
                $("#investigation").show();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
                $("#request_assessment").hide();
                $("#reject").hide();
                $("#others1").hide();
             } 
             
             else if (this.value == 'wrong_benefit_type') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").show();
                $("#case_transfer").hide();
                $("#request_assessment").hide();
                $("#reject").hide();
                $("#others1").hide();
             } 
    
             else if (this.value == 'transfer_case') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").show();
                $("#reject").hide();
                $("#others1").hide();
             }
    
             else if (this.value == 'request_assessment') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
                $("#request_assessment").show();
                $("#reject").hide();
                $("#others1").hide();
             }
             
             else if (this.value == 'reject') 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#case_transfer").hide();
                $("#request_assessment").hide();
                $("#reject").show();
                $("#others1").hide();
             }

             else 
             {
                $("#viewTable").hide();
                $("#investigation").hide();
                $("#wrong_notice_type").hide();
                $("#request_assessment").hide();
                $("#case_transfer").hide();
                $("#others1").hide();''
             }
          });
          
          $('#recommend_save').click(function(){
            $('#exampleModal1').hide();
            $('#add_recommend').hide();
            });
        });
    
        function close_others(){
    
            // Get the checkbox
            var checkBox = document.getElementById("checkbox3");
            // Get the output text
            var others = document.getElementById("others1");
    
            // If the checkbox is checked, display the output text
            if (checkBox.checked == true){
            others.style.display = "block";
            } else {
            others.style.display = "none";
            }
        }
    
    
        
    </script> 
    