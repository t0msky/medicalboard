<div class="col-lg-12">
      <div class="card">
      <div class="card-body">
          <form method="POST" action="HUS">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="caserefno" value="{{-- {{$caserefno}} --}}">
              <div class="form-body ">
                  @if(Session::get('messagemc')) 
                  <div class="card-footer">
  
                      <div class="alert alert-warning">
                          {{Session::get('messagemc')}}
                      </div>
  
                  </div>
                  @elseif (!empty($messagemc))
                  <div class="card-footer">
  
                      <div class="alert alert-warning">
                          {{$messagemc}}
                      </div>
  
                  </div>
                  @endif 
                  <div>
                  @if (Session::get('accddate'))
                  <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" style="display:none" disabled>
                  @else
                  <input type="date" class="form-control" id="accddate" name="accddate" value="" style="display:none" disabled>
                  @endif
                  </div>
  
                  <div class="col-md-12" id="container">
                      <div class="table-responsive" id="table-medical">
                          <div class="form-actions">
                              <button type="button" id="btn_add_hus0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/mc.addhus')</button>
                          </div>
                          
                          
                          <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                              <thead>
                                  <tr>
                                      <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                      <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                      <th style='width:8%'>@lang('scheme/mc.attr.start_date')</th>
                                      <th style='width:8%'>@lang('scheme/mc.attr.end_date')</th>
                                      <th style='width:10%'>@lang('scheme/mc.attr.days_work')</th>
                                      <th style='width:8%'>@lang('scheme/mc.attr.action')</th>
                                      {{-- <th style='width:20%'>@lang('scheme/mc.attr.mc_recommendation')</th> --}}
                                      <th style='width:15%'>@lang('scheme/mc.attr.hus_recommendation')</th>
                                  </tr>
                              </thead>
  
  
                              @if(!empty($husinfo->parent))
  
              
  
                                  @foreach($husinfo->parent as $key => $parent)
  
                                  <tr data-expanded="true" class="workrow" id="tr0_{{$key}}">
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control" name="hussts[]">
                                              <option value="">Please select</option>
                                              <option value="mc" <?php if($parent->husstatus == 'mc') echo 'selected'; ?>> MC </option>
                                              <option value="ld" <?php if($parent->husstatus == 'ld') echo 'selected'; ?>> Light Duty </option>
                                              </select>
                                          </div>
                                      </td> 
                                      <td>
                                          <div class="col-md-12">
                                              <input id="clinicname_0_{{$key}}" name="clinicinfo[]" type="text" value="@if (!empty($parent)){{ $parent->clinicinfo }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="mcstartdate_0_{{$key}}" name="startdate[]" type="date" value="@if (!empty($parent) && $parent->startdate!=''){{ (DateTime::createFromFormat('Ymd', $parent->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input type="date" id="mcenddate_0_{{$key}}" name="enddate[]" value="@if (!empty($parent) && $parent->enddate!=''){{ (DateTime::createFromFormat('Ymd', $parent->enddate ))->format('Y-m-d') }}@endif" class="form-control counttotalmc" >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" id="totalmc_0_{{$key}}" name="totalmc[]" value="@if (!empty($parent)){{ $parent->totalmc }}@endif" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_hus" id="del_attended_work0_{{$key}}"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add_hus_works0_{{$key}}" value='0_{{$key}}' type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                              <i class="ti-plus text" aria-hidden="true"></i>
                                              <i class="ti-plus text-active" aria-hidden="true"></i>
                                          </button>
                                      </td>
                                     
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control" name="scorecommend[]">
                                                  <option value="">Please select</option>
                                                  <option value="approved" <?php if($parent->scorecommend == 'approved') echo 'selected'; ?>>Approved</option>
                                                  <option value="rejected" <?php if($parent->scorecommend == 'rejected') echo 'selected'; ?>>Rejected</option>
                                                  <option value="pending" <?php if($parent->scorecommend == 'pending') echo 'selected'; ?>>Pending</option>
                                                  <option value="paidduring" <?php if($parent->scorecommend == 'paidduring') echo 'selected'; ?>>Attended Work and Salary Paid during MC</option>
                                                  <option value="overlapped" <?php if($parent->scorecommend == 'overlapped') echo 'selected'; ?>>Overlapped</option>
                                                  <option value="overlappedapproved" <?php if($parent->scorecommend == 'overlappedapproved') echo 'selected'; ?>>Overlapped-Approved</option>
                                                  <option value="overlappedrejected" <?php if($parent->scorecommend == 'overlappedrejected') echo 'selected'; ?>>Overlapped-Rejected</option>
                                              </select>
                                          </div>
                                      </td>
                                  </tr>
                                  @if(!empty($husinfo->child[$key]))
                                  {
                                          @foreach($husinfo->child[$key] as $num => $child)
                                          {
                                                              <!-- @php print_r($child); @endphp  -->
                                                          <tr id="tr'+i+'_'+j+'_'+w+'">
                                                                  <td>
                                                                      <div class="col-md-12"> 
                                                                          <input  name="huswork[{{$key}}][]" type="text" value="" class="form-control counttotalwork" readonly>
                                                                      </div>
                                                                  </td>
                                                                  <td>
                                                                      <div class="col-md-12">
                                                                          <input id="clinicname" name="clinicinfo[{{$key}}][]" type="text"  value="" class="form-control counttotalmc" disabled>
                                                                      </div>
                                                                  </td>
                                                                  <td>
                                                                      <div class="col-md-12">
                                                                          <input   type="date" id="workstartdate_0_{{$key}}_{{$num}}" name="mcitemstartdate[{{$key}}][]" value="@if (!empty($parent) && $child->mcitemstartdate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemstartdate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork" >
                                                                      </div>
                                                                  </td>
                                                                  <td>
                                                                      <div class="col-md-12">
                                                                          <input type="date"  id="workenddate_0_{{$key}}_{{$num}}" name="mcitemenddate[{{$key}}][]" value="@if (!empty($parent) && $child->mcitemenddate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemenddate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork" >
                                                                      </div>
                                                                  </td>
                                                                  <td>
                                                                      <input type="text" id="totalwork_0_{{$key}}_{{$num}}" name="totalmcitem[{{$key}}][]" value="@if (!empty($child)){{ $child ->totalmcitem }}@endif" class="form-control" readonly>
                                                                          <td>
                                                                              <button type="button"  class="btn btn-sm btn-danger btn_del_hus" id="del_attended_work0_{{$key}}_{{$num}}">
                                                                                  <i class="fas fa-trash-alt fa-sm"></i>
                                                                              </button>
                                                                          </td>
                                                                          <td>
                                                                              <div class="col-md-12">
                                                                                  <select class="form-control" name="approvalsts[{{$key}}][]">
                                                                                      <option value="">Please select</option><option value="approved" selected>Approved</option>
                                                                                      <option value="rejected" >Rejected</option><option value="pending" >Pending</option>
                                                                                      <option value="paidduring" >Attended Work and Salary Paid during MC</option>
                                                                                      <option value="overlapped" >Overlapped</option>
                                                                                      <option value="overlappedapproved" >Overlapped-Approved</option>
                                                                                      <option value="overlappedreject" >Overlapped-Rejected</option>
                                                                                  </select>
                                                                              </div>
                                                                          </td>
                                                                  </td> 
                                                              
                                                          </tr>
                                      
                                           @endforeach
                                      @endif
                                      <script> 
                                        $(document).ready(function() {
                                      var key = {!! $key !!};
                                      console.log(key);
                                      if(key !=0){
                                          add_hus_works(0,key); 
                                      }
                                      
                                      });
                                      </script>
                                  @endforeach
                                      
                              @else
                              <tbody>
                                  <tr data-expanded="true" class="workrow" id="tr0_0">
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control" name="hussts[]">
                                              <option value="">Please select</option>
                                              <option value="mc" selected> MC </option>
                                              <option value="ld" > Light Duty </option>
                                              </select>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="clinicname" name="clinicinfo[]" type="text" value="@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="mcstartdate_0_0" name="startdate[]" type="date" value="@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input type="date" id="mcenddate_0_0" name="enddate[]" value="" class="form-control counttotalmc" >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" id="totalmc_0_0" name="totalmc[]" value="" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_hus" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add_hus_works0_0" value='0_0' type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                              <i class="ti-plus text" aria-hidden="true"></i>
                                              <i class="ti-plus text-active" aria-hidden="true"></i>
                                          </button>
                                      </td>
                                     
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control" name="scorecommend[]">
                                                  <option value="">Please select</option>
                                                  <option value="approved" selected>Approved</option>
                                                  <option value="rejected" >Rejected</option>
                                                  <option value="pending" >Pending</option>
                                                  <option value="paidduring" >Attended Work and Salary Paid during MC</option>
                                                  <option value="overlapped" >Overlapped</option>
                                                  <option value="overlappedapproved" >Overlapped-Approved</option>
                                                  <option value="overlappedrejected" >Overlapped-Rejected</option>
                                              </select>
                                          </div>
                                      </td>
                                  </tr>
                                 
                              </tbody>
                              @endif  
                          </table>   
                          
                          <label class="control-label" id='lblmcerror0' style='color:red'></label>
                      </div>
                  </div>
                  <div id="new-mc"></div>
                  <div class="row">
                      <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">@lang('scheme/mc.attr.total_eligible')</label>
                              <input type="text" name="total_eligible" id="total_eligible" class="form-control" required>
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label class="control-label">@lang('scheme/mc.attr.total_hus')</label>
                              <input type="text" name="total_hus" id="total_hus" class="form-control" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                              <label>@lang('scheme/accidentDetails.attr.are_wagesPaid')</label><span class="required">*</span>
                              <select class="form-control clearFields" name="are_wagesPaid">
                                  <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                  <option>Please select</option>
                                  @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                  <option value='Y' selected>@lang('scheme/accidentDetails.yes')</option>
                                  <option value='N'>@lang('scheme/accidentDetails.no')</option>
                                  @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                                  <option value='Y' >@lang('scheme/accidentDetails.yes')</option>
                                  <option value='N' selected>@lang('scheme/accidentDetails.no')</option>
                                  @else
                                  <option value='Y'>@lang('scheme/accidentDetails.yes')</option>
                                  <option value='N'>@lang('scheme/accidentDetails.no')</option>
                                  @endif
                              </select>
                          </div>
                      </div>
                  </div>
              <div class="col-md-12">
                 <input type="checkbox" class="check" id="minimal-checkbox-disabled-checked" checked disabled>
                 <label for="minimal-checkbox-disabled-checked">@lang('scheme/mc.attr.mc_exceed')</label>
              </div>
              </div>
              <div class="form-actions text-right">
                      <button type="submit" name="action" value="Submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('scheme/ob.save')</button>
                      {{-- <button type="button" id="btn_add_clinic" class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/mc.addClinic')</button> --}}
                      <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                      <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                      <button type="submit" name="action" value="Back" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
              </div>
          </div>
      </div>
  </div>
  
  {{-- Confirm modal --}}
  <div class="modal fade" id="deletemodalmc_sco" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          Are you sure you want to delete?
          <input type="hidden" class="form-control" name="id" id="id">
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
      </div>
      </div>
  </div>
  </div>
  
  
  
  
  <script>
      $(document).ready(function() {
  
       
          addmc(0);
          add_hus_works(0,0);
          modal_delete();
          totalmc();
          //alert("Masuk");
          //var i=0;
  
          // Get the total work day
          $('.counttotalwork').on('change',function(){
              var current_id = event.target.id;
              // alert(current_id);
              var half_id = current_id.split("te");
              var split_id = half_id[1].split("-");
              var mcid = split_id[0];
              var workid = split_id[1];
              //alert('MC id: ' + mcid + '| Work id: ' + workid);
              counttotalwork(mcid,workid);
          });
  
      });
  
      function addmc(i){
          //add new mc
          $('button[id=btn_add_hus'+i+']').on('click',function(){
              var i = $(this).val();
              //alert(i);
              var j = $(":button[id^=add_hus_works"+i+"_]").length;
              // alert(j);
              for (k = 0; k <= j; k++) { 
                  if($("#add_hus_works"+i+"_"+k).length == 0) { //if doesn't exist
  
                      $('#table-medical-details'+i+' > tbody:last-child').append('<tr data-expanded="true" class="workrow" id="tr'+i+'_'+k+'"><td><div class="col-md-12"><select class="form-control" name="hussts['+k+']"><option value="">Please select</option><option value="mc" selected> MC </option><option value="ld" > Light Duty </option></select></div></td>'+
                          "<td>"+
                                          "<div class='col-md-12'>"+
                                              "<input id='clinicname' name='clinicinfo["+k+"]' type='text' value='' class='form-control counttotalmc' required>"+
                                          "</div>"+
                                      "</td>"+
                      '<td><div class="col-md-12"><input type="date" value="" id="mcstartdate_'+i+'_'+k+'" name="startdate['+k+']" class="form-control counttotalmc" ></div></td><td><div class="col-md-12"><input type="date" value="" id="mcenddate_'+i+'_'+k+'" name="enddate['+k+']" class="form-control counttotalmc" ></div></td><td><input type="text" id="totalmc_'+i+'_'+k+'" name="totalmc['+k+']" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_hus" id="del_attended_work'+i+'_'+k+'"><i class="fas fa-trash-alt fa-sm"></i></button><button id="add_hus_works'+i+'_'+k+'" value="'+i+'_'+k+'" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">'+
                                              '<i class="ti-plus text" aria-hidden="true"></i>'+
                                              '<i class="ti-plus text-active" aria-hidden="true"></i>'+
                                          '</button></td><td><div class="col-md-12"><select class="form-control" name="scorecommend['+k+']"><option value="">Please select</option><option value="approved" selected>Approved</option><option value="rejected" >Rejected</option><option value="pending" >Pending</option><option value="paidduring" >Attended Work and Salary Paid during MC</option><option value="overlapped" >Overlapped</option><option value="overlappedapproved" >Overlapped-Approved</option><option value="overlappedrejected" >Overlapped-Rejected</option></select></div></td></tr>');
  
                      add_hus_works(i,k);
                      modal_delete();
                      totalmc();
                      
                      break;
                  }
              }
              
          });
  
  
      }
  
      function add_hus_works(i,j){
  
              //add attended work
              $('button[id=add_hus_works'+i+'_'+j+']').click(function(){ 
                  alert("hiiii");
                  var val = $(this).val();
                  var values = val.split('_');
                  var i = values[0];
                  var j = values[1];
                  // alert('i: '+i+' j: '+j);
                  alert(values);
                  
                  $('[id^=hus_recommendation]').attr('disabled', true);
  
                  var k = $("tr[id^=tr"+i+"_"+j+"_]").length;
                  // alert(k);
                  for (w = 0; w <= k; w++) { 
                      if($("#tr"+i+"_"+j+"_"+w).length == 0) { 
                          // alert("hihihihi");
  
                          $('#tr'+i+'_'+j).after('<tr id="tr'+i+'_'+j+'_'+w+'"><td><div class="col-md-12"> <input  name="huswork" type="text" value="" class="form-control counttotalwork" readonly></div></td><td><div class="col-md-12"><input id="clinicname" name="clinicinfo['+j+'][]" type="text" value="" class="form-control counttotalmc" disabled></div></td><td><div class="col-md-12"><input   type="date" value="" id="workstartdate_'+i+'_'+j+'_'+w+'" name="mcitemstartdate['+j+'][]" class="form-control counttotalwork" ></div></td><td><div class="col-md-12"><input type="date" value="" id="workenddate_'+i+'_'+j+'_'+w+'" name="mcitemenddate['+j+'][]" class="form-control counttotalwork" ></div></td><td><input type="text" id="totalwork_'+i+'_'+j+'_'+w+'" name="totalmcitem['+j+'][]" value="" class="form-control" readonly><td><button type="button"  class="btn btn-sm btn-danger btn_del_hus" id="del_attended_work'+i+'_'+j+'_'+w+'"><i class="fas fa-trash-alt fa-sm"></i></button></td><td><div class="col-md-12"><select class="form-control" name="approvalsts['+j+'][]"><option value="">Please select</option><option value="approved" selected>Approved</option><option value="rejected" >Rejected</option><option value="pending" >Pending</option><option value="paidduring" >Attended Work and Salary Paid during MC</option><option value="overlapped" >Overlapped</option><option value="overlappedapproved" >Overlapped-Approved</option><option value="overlappedreject" >Overlapped-Rejected</option></select></div></td> </tr>');
              
                          modal_delete();
                          totalwork();
  
                          break;
                      }
                  }
  
                  });
  
      }
  
      function modal_delete(){
  
          // Delete work
          $('.btn_del_hus').on('click',function(){
  
              // del_attended_work0_0_1
              var delete_id = $(this).attr('id');
              var values = delete_id.split('_');
              var id1 = values[2];
              var id2 = values[3];
              var id3 = values[4];
  
              var no_of_child = $('[id^="del_attended_'+id1+'_'+id2+'_"]').length;
              if(no_of_child == 1){
  
                  id1 = id1.substr(-1);
                  $('#hus_recommendation'+id1+'_'+id2).prop('disabled', false);
              }
              console.log('id1:'+id1);
              console.log('id2:'+id2);
              console.log('id3:'+id3);
              console.log('no_of_child:'+no_of_child);
              console.log(delete_id);
              $("#deletemodalmc_sco").modal('show');
              $("#deletemodalmc_sco .modal-footer button").on('click', function(e) {
                  var btn_id = event.target.id;
                  if(btn_id == 'btn_delete'){
                      e.preventDefault();
                      var check = 'del_attended_'+id1+'_'+id2;
                      console.log('check:'+check);
                      console.log('delete_id:'+delete_id);
                      if (delete_id == check){
                          console.log("hahhahahahahaha: .tr"+id1+"_"+id2);
                          //alert("aa");
                          // $("#"+delete_id).closest("tr").remove();
                          // $("tr").remove(".tr"+id1+"_"+id2);
  
                          $(".tr"+id1+"_"+id2).each(function(){
                              $(this).remove();
                          })
                      }else{
                          $("#"+delete_id).closest("tr").remove();
                      }
  
                  }
              });
          });
  
      }
      
      function totalmc(){
          // Get the total mc day
          $('.counttotalmc').on('change',function(){
              var current_id = event.target.id;
              var values = current_id.split('_');
              var i = values[1];
              var j = values[2];
              // alert(current_id);
              // var id = current_id.substring(current_id.length - 1, current_id.length);
              // alert(id);
              // console.log("current_id: "+current_id);
              counttotal(i,j);
          });
      }
  
      function counttotal(i,j){
          // console.log("i: "+i+ " j: " +j);
          var startdate = document.getElementById('mcstartdate_'+i+'_'+j).value;
          var enddate = document.getElementById('mcenddate_'+i+'_'+j).value;
          var total = document.getElementById('totalmc_'+i+'_'+j);
          var lblmcerror = document.getElementById('lblmcerror'+i);
          var btnsubmit = document.getElementById('btnsubmit');
          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth()+1; //January is 0!
          var yyyy = today.getFullYear();
          
          if(dd<10) {
          dd = '0'+dd;
          } 
  
          if(mm<10) {
          mm  = '0'+mm;
          } 
  
          var currdate = yyyy + '-' + mm + '-' + dd;
          var days = getdays(currdate,startdate);
          var accddate = document.getElementById('accddate').value;
          var days2 = getdays(accddate,startdate);
  
          // Check the mc start date must before the current date
          if(days > 1){
          lblmcerror.innerHTML = 'Start date must not after current date';
          total.value = '';
          btnsubmit.disabled = true;
          return;
          }else{
          lblmcerror.innerHTML = '';
          btnsubmit.disabled = false;
          }
  
          // Check the mc start date must after accident date
          if(days2 <= 0){
          lblmcerror.innerHTML = 'Start date must not before accident date';
          total.value = '';
          btnsubmit.disabled = true;
          return;
          }else{
          lblmcerror.innerHTML = '';
          btnsubmit.disabled = false;
          }
  
          // Count the total mc work
          if(startdate != "" && enddate != ""){
          var totalmc = getdays(startdate,enddate);
          if(totalmc <= 0){
              lblmcerror.innerHTML = 'End date must not before start date';
              total.value = '';
              btnsubmit.disabled = true;
              return;
          }else{
              lblmcerror.innerHTML = '';
              btnsubmit.disabled = false;
          }
          total.value = totalmc;
          
          return;
          }else{
          total.value = '';
          return;
          }
  
      }
  
      function totalwork(){
  
          // Get the total work day
          $('.counttotalwork').on('change',function(){
              var current_id = event.target.id;
              // console.log("current_id: "+current_id);
  
              var values = current_id.split('_');
              var i = values[1];
              var j = values[2];
              var w = values[3];
  
              counttotalwork(i,j,w);
          });
  
      }
  
      function counttotalwork(i,j,w){
  
      // console.log("i: "+i+ " j: " +j+ " w: " +w);
      // id adalah nilai urutan mc
      // x adalah nilai urutan work
      var startdate = document.getElementById('workstartdate_'+i+'_'+j+'_'+w).value;
      // alert('startdate :' + startdate);
      var enddate = document.getElementById('workenddate_'+i+'_'+j+'_'+w).value;
      // alert('enddate :' + enddate);
      var total = document.getElementById('totalwork_'+i+'_'+j+'_'+w);
      var lblmcerror = document.getElementById('lblmcerror'+i);
      var btnsubmit = document.getElementById('btnsubmit');
  
      if(startdate != "" && enddate != ""){
        var totalwork = getdays(startdate,enddate);
        if (totalwork <= 0){
          total.value = "";
          lblmcerror.innerHTML  = 'End date must not before start date';
          btnsubmit.disabled = true;
        }
        else{
          lblmcerror.innerHTML  = '';
          btnsubmit.disabled = false;
        }
        total.value = totalwork;
      }else{
        total.value = "";
      }
    }
  
  
      function getdays(startdate,enddate){
          var dropdt = new Date(startdate);
          var pickdt = new Date(enddate);
          return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
      }
  </script>