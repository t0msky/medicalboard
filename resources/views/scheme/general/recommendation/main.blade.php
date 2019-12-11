<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
               <div class="p-20">
                   <form action="#">
                       <div class="row p-t-20">
                           <div class="form-group col-md-12 col-lg-4">
                               <label class="control-label">Action</label>
                               <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                   <option value=""  >Please Select</option> 
                                   <option value="recommend">Recommend</option> 
                                   <option value="case_transfer">Transfer Case</option> 
                                   <option value="wrong_notice_type">Wrong Notice Type</option> 
                               </select>
                           </div>
                           {{-- <div class="col-md-0"> <br>
                               <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                           </div> --}}
                       </div>

                       {{-- Recommend Section --}}
                       
                       <div  id="viewTable" style="display:none">
                           <h5 class="card-title-sub"> Recommendation </h5>
                           <hr>
                           <div class='row'>
                               <div class="col-md-12 col-lg-12">
                                   <div class="card">
                                       <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                           <thead>
                                               <tr>
                                                   <th style='width:2%'>No</th>
                                                   <th style='width:8%'>Recommendation Date</th>  
                                                   <th style='width:20%'>Recommend By</th>
                                                   <th style='width:15%'>Role</th>
                                                   <th style='width:8%'>Employment Injury</th>
                                                   <th style='width:12%'>@lang('Action')</th>
                                               </tr>
                                           </thead>
                                           <tbody class='align-middle'>
                                               <tr> 
                                                   <td>1</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                       <div class="col-md-0">
                                                               <a id='view'><i class="fas fa-file-alt"></i></a>&nbsp;
                                                               <a id='updatedraft'><i class="fas fa-edit"></i></a>
                                                       </div>
                                                   </td> 
                                               </tr>
                                           </tbody>
                                       </table>
                                       <div class="col-md-0">
                                           <button type="button" name="action" id="add_recommend" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Add Recommendation</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           {{-- <div class="row p-t-20"> --}}
                           <div class="form-group col-md-12 col-lg-2">
                               <label class="control-label">Recommendation</label>
                               <input type="text" name="employment_injury" id="employment_injury1" class="form-control" disabled>
                           </div>
                           {{-- </div>     --}}
                           <div class="form-group col-md-12 col-lg-6">
                               <label class="control-label">Reason reject</label>
                               <textarea type="text" name="reason_reject" id="reason_reject" row="2"  class="form-control" disabled></textarea>
                           </div>
                           

                           {{-- POTENTIALS SECTION--}}
                           <h5 class="card-title-sub"> Potentials </h5>
                           <hr>
                           <div class="row p-t-20">
                               <div class="form-group col-md-12 col-lg-4">
                                   <label class="control-label">Potential HUK</label>
                                   <select class="form-control">
                                       <option value="">@lang('option.please_select')</option> 
                                       <option value="Y">@lang('option.yes')</option> 
                                       <option value="N">@lang('option.no')</option> 
                                   </select>
                               </div>
                               <div class="form-group col-md-12 col-lg-4">
                                   <label class="control-label">Potential Invalidity</label>
                                   <select class="form-control">
                                       <option value="">@lang('option.please_select')</option> 
                                       <option value="Y">@lang('option.yes')</option> 
                                       <option value="N">@lang('option.no')</option> 
                                   </select>
                               </div>
                           </div>
                       </div>
                           
                       {{--CASE TRANSFER SECTION--}}
                       <div id="case_transfer" style="display:none">
                           <h5 class="card-title-sub">Case Transfer </h5>
                           <hr>
                           <div class="row p-t-20">
                               <div class="form-group col-md-12 col-lg-6">
                                   <label class="control-label">@lang('State')</label>
                                   <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                   <select name='state' id='state' class='form-control'>
                                       @foreach($ref_table->state as $s)
                                       @if(!empty($obprofile) && $obprofile->state_code == $s->ref_code)
                                       <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                       @else
                                       <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                       @endif
                                       @endforeach
                                   </select>
                               </div>
                               <div class="form-group col-md-12 col-lg-6">
                                   <label>SOCSO Office</label>
                                   <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                               </div>
                           </div> 
                       </div>

                       {{--WRONG NOTICE TYPE SECTION--}}
                       <div id="wrong_notice_type" style="display:none">
                           <h5 class="card-title-sub">Wrong Notice Type </h5>
                           <hr>
                           <div class="row p-t-20">
                               <div class="form-group col-md-12 col-lg-4">
                                   <label class="control-label">@lang('Recommended Notice Type')</label>
                                   <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                        <option value="">Invalidity</option>
                                        <option value="">Accident</option> 
                                    </select>
                               </div>
                               <div class="form-group col-md-12 col-lg-12">
                                   <label>Justification</label>
                                   <textarea type="text" name="justification" id="justification" class="form-control"></textarea>
                               </div>
                           </div> 
                       </div>
                       
                       {{-- CLOSE SECTION --}}
                       <div class='row' id="reason_close" style="display:none">
                           {{-- <div class="row p-t-20"> --}}
                               <div class="form-group col-md-12 col-lg-1">
                                   <label class="control-label">Reason Close</label>
                               </div>
                               <div class="form-group col-md-12 col-lg-6">
                                       <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                           <input type="checkbox" class="custom-control-input" id="checkbox00" value="check">
                                           <label class="custom-control-label" for="checkbox00">Tiada Sec J Borang 34</label>
                                       </div>
                                       <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                           <input type="checkbox" class="custom-control-input" id="checkbox1" value="check">
                                           <label class="custom-control-label" for="checkbox1">Tiada Laporan Perubatan</label>
                                       </div>
                                       <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                           <input type="checkbox" class="custom-control-input" id="checkbox2" value="check">
                                           <label class="custom-control-label" for="checkbox2">Maklumat/Dokumen Tidak Lengkap</label>
                                       </div>
                                       <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                           <input type="checkbox" class="custom-control-input" onclick="close_others()" id="checkbox3" value="check">
                                           <label class="custom-control-label"for="checkbox3">Others</label>
                                       </div>
                               </div>
                           {{-- </div> --}}
                       </div>
                       <div id="others1" class="form-group col-md-12 col-lg-12" style="display:none">
                           <label class="control-label">Description</label>
                           <textarea type="text" name="description" id="description" class="form-control"></textarea>
                       </div> 
                       {{--END SECTION-}}
                       
                       {{-- POPUP From Dropdown RECOMMENDATION  --}}
                       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                           <div class="modal-dialog modal-xl" role="document">
                               <div class="modal-content">
                                   <div class="modal-header  card-title">
                                       <h4 class="modal-title" id="exampleModalLabel1">Employment Injury Decision</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                       @include('scheme.general.recommendation.popup') 
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">@lang('CLOSE')</button>
                                       <button type="button" id="recommend_save" class="btn btn-primary recommend_save" data-dismiss="modal">@lang('SAVE')</button>
                                   </div>
                               </div>
                           </div>
                       </div> 

                       {{--VIEW POPUP --}}
                       <div class="modal fade" id="recommendationview_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0">
                           <div class="modal-dialog modal-xl" role="document">
                               <div class="modal-content">
                                   <div class="modal-header  card-title">
                                       <h4 class="modal-title" id="exampleModalLabel0">Employment Injury Decision</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                       @include('scheme.general.recommendation.view_popup') 
                                   </div>

                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                       {{-- <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button> --}}
                                   </div>
                               </div>
                           </div>
                       </div>

                       {{--UPDATE POPUP --}}
                       <div class="modal fade" id="recommendation_update" tabindex="-1" role="dialog" aria-labelledby="recommendation_update1">
                           <div class="modal-dialog modal-xl" role="document">
                               <div class="modal-content">
                                   <div class="modal-header  card-title">
                                       <h4 class="modal-title" id="recommendation_update1">Employment Injury Decision</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   </div>
                                   <div class="modal-body">
                                       @include('scheme.general.recommendation.update_popup') 
                                   </div>

                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                       <button type="button" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       {{-- END POPUP --}}

                       <div class='row'>
                           <div class="col-md-12">
                               <div class="form-actions">
                                   <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                   <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
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
           $("#reason_close").hide();
           $("#others1").hide();
        } 
        
        else if (this.value == 'investigation') 
        {
           $("#viewTable").hide();
           $("#investigation").show();
           $("#wrong_notice_type").hide();
           $("#case_transfer").hide();
           $("#reason_close").hide();
           $("#others1").hide();
        } 
        
        else if (this.value == 'wrong_notice_type') 
        {
           $("#viewTable").hide();
           $("#investigation").hide();
           $("#wrong_notice_type").show();
           $("#case_transfer").hide();
           $("#reason_close").hide();
           $("#others1").hide();
        } 

        else if (this.value == 'case_transfer') 
        {
           $("#viewTable").hide();
           $("#investigation").hide();
           $("#wrong_notice_type").hide();
           $("#case_transfer").show();
           $("#reason_close").hide();
           $("#others1").hide();
        }

        else if (this.value == 'close') 
        {
           $("#viewTable").hide();
           $("#investigation").hide();
           $("#wrong_notice_type").hide();
           $("#case_transfer").hide();
           $("#reason_close").show();
           $("#others1").hide();
        }

        else 
        {
           $("#viewTable").hide();
           $("#investigation").hide();
           $("#wrong_notice_type").hide();
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
