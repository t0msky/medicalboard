<style>

   .col-10-applicant {
   flex: 0 0 83.33333%;
   max-width: 100%;
   }

   .btn-select-claimant {
      text-align: center;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: .875rem;
      line-height: 1.5;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      float: right !important;
      color: #fff !important;
      font-weight: 100 !important;
      background-color: #375aa0 !important;
   }

   .row-claimant {
      display: flex;
      flex-wrap: wrap;
      margin-right: -10px;
      margin-left: -10px;
      float: right !important;

   }

   .modal-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 5px solid #98cb5b;
      border-top-left-radius: .3rem;
      border-top-right-radius: .3rem;
      background: #284682;
      color: #fff;
   }

   .modal-header .close {
      padding: 1rem;
      margin: -1rem -1rem -1rem auto;
      color: #fff;
   }

   a#updatedraft{
      background-color:#17a2b8 !important;
      color:white !important;
      padding-left: 12px !important;
      padding-right: 12px !important;
      padding-top: 5px !important;
      padding-bottom: 8px;
      margin-top:5px !important;
      margin-bottom:5px !important;
      margin-right:5px !important;
   }

   a#viewdraft{
      background-color:#07e9b0 !important;
      color:white !important;
      padding-left: 12px !important;
      padding-right: 12px !important;
      padding-top: 5px !important;
      padding-bottom: 8px !important;
      border-radius: 10%;
      margin-top:5px !important;
      margin-bottom:5px !important;
      margin-right:5px !important;

   }

   a#deletedraft{
      background-color:#e56c69 !important;
      color:white !important;
      padding-left: 12px !important;
      padding-right: 12px !important;
      padding-top: 5px !important;
      padding-bottom: 8px !important;
      border-radius: 10%;
      margin-top:5px !important;
      margin-bottom:5px !important;
      margin-right:5px !important;
   }

</style>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <form action="#">
               <div class="form-body">
                  @if (!empty($applicantinfo))

                  <h6 class="card-title-sub">FPM Recommendation History</h6>
                  <hr>

                  <div class="col-md-12" id="container">
                     <div class="table-responsive" id="table-medical">
                        <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                           <thead>
                              <tr>
                              <th style='width:1%'>No</th> 
                              <th style='width:15%'>Recommend Date</th> 
                              <th style='width:15%'>Recommend By</th> 
                              <th style='width:15%'>Role</th> 
                              <th style='width:15%'>Claimant Name</th> 
                              <th style='width:15%'>Claimant ID No</th> 
                              <th style='width:15%'>Claimant Relationship</th> 
                              </tr>
                           </thead>
                           <tbody>
                              {{-- <tr data-expanded="true" class="workrow" id="tr0_0"> --}}

                                 <tr>

                              <td>                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <div class='row'>
                     <div class="col-md-12">
                        <div class="form-actions">
                        </div>
                     </div>
                  </div>

                  <!-- ======================= FPM CLAIMANT LISTING =========================== -->

                  <h6 class="card-title-sub">FPM Claimant Listing</h6>
                  <hr>

                  @foreach($applicantinfo as $key => $app)
                  <div class="table-responsive" id="table-medical">
                     <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                           <tr>
                              <th style='width:1%'>No</th> 
                              <th style='width:15%'>Name</th> 
                              <th style='width:15%'>ID No</th> 
                              <th style='width:15%'>Date of Birth</th> 
                              <th style='width:15%'>Relationship</th> 
                              <th style='width:12%'>Action</th> 
                              <th style='width:15%'>Eligible as Claimant</th> 
                           </tr>
                        </thead>
                        <tbody>
                           {{-- <tr data-expanded="true" class="workrow" id="tr0_0"> --}}
                           <tr>
                              <td></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td>
                                 <a id='viewdraft' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-edit"></i></a>
                                 <a id='view' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-file-alt"></i></a>
                                 <a id='deletedraft' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-trash-alt "></i></a>
                              </td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  @endforeach

                  @else
                  @include('scheme.noticeDeath.newClaim.SCO.sbk.fpm_recommendation_add')
                  @endif
                  <br>

                  <button type="button" class="btn-select-claimant" data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat">SELECT CLAIMANT</button><br><br>
                  <hr>
                  <div class="modal fade bs-example-modal-lg" id="modalClaimant" tabindex="-1" role="dialog" aria-labelledby="modalClaimantLabel1">
                     <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title" id="modalClaimantLabel1">Select Claimant Info</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           </div>
                           <div class="modal-body">
                              <form>
                                 <div class="col-12">
                                    <div class="card">
                                       <div class="table-responsive m-t-40">
                                          <table id="tableClaimant" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                             <thead>
                                                <tr>
                                                   <th>Select</th>
                                                   <th>No</th>
                                                   <th>Name</th>
                                                   <th>Identification No</th>
                                                   <th>Date Of Birth</th>
                                                   <th>Relationship</th>
                                                </tr>
                                             </thead>
                                             <tbody class='align-middle'>
                                                <tr>
                                                   <td><input type="checkbox" id="customCheck2"><label for="customRadio1"></label></td>
                                                   <td></td>
                                                   <td>No records</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>                    
                                    </div>
                                 </div>
                                 <div id="add_applicant_rec">
                                 </div>
                                 <button type="button" class="btn btn-info" id="app_rec">Add Applicant</button>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn waves-effect waves-light btn-success">SAVE</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="container_try_rec">
                  <div id="add_app_accordian_rec">
                  </div>
               </div>
               <div class="form-actions">
                  <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                  <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                  <button type="button" id="btn_add_applicant_rec" class="btn btn-sm waves-effect waves-light btn-info">ADD APPLICANT</button>                        
               </div>
            </form>
         </div>
      </div>
   </div>
</div>




{{-- Confirm modal --}}
<div class="modal fade" id="deletemodalad" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete?
                  <input type="hidden" class="form-control" name="id" id="id">
              </div>
              <div class="modal-footer">
                  <button type="button" id="btn_close2" class="btn btn-secondary btn-sm"
                      data-dismiss="modal">Close</button>
                  <button type="button" id="btn_delete2" class="btn btn-danger btn-sm"
                      data-dismiss="modal">Delete</button>
              </div>
          </div>
      </div>
  </div>
  
  @php($no_app = 0)
  @php($applicantinfo == null ? $no_app = 0 : $no_app = count($applicantinfo))
  
  <script>
      
  $(document).ready(function() {
  
      $("#btn_add_applicant_rec").hide();
  
      var no_app = {!! $no_app !!};
      //alert(no_app);
  
      if(no_app > 0){
          var i = no_app-1;
  
          check_fromdb();
  
      }else{
          var i = 0;
      }
  
      var html;
      // alert('Jquery detected');
  
      // Append applicant
  
  
      $('#btn_add_applicant_rec').click(function(){  
          //alert(i);
  
      var abc = $('div[id^="applicant_collapse"]').length;
      console.log('no of applicant:' + abc);
      var relation = $('#relation0').val(); //
  
      //01 - wife
      //02 - husband
      //03 - father
      //04 - mother
      //05 - child
      //06 - sibling
      //07 - Grandparent
      //08 - others
  
      if(relation == '03') {
          var next_applicant = "04";
  
          if(abc >1){
              return false;
          }else if(abc == 1){
              $("#btn_add_applicant_rec").hide();
          }
  
      }else if(relation == '04') {
          var next_applicant = "03";
  
          if(abc >1){
              return false;
          }else if(abc == 1){
              $("#btn_add_applicant_rec").hide();
          }
      }else if(relation == '01') {
          var next_applicant = "01";
          if(abc >3){
              return false;
          }else if (abc == 3){
              $("#btn_add_applicant_rec").hide();
          }
      }
          i++;
  
          $('#applicantinfo0').show();
  
          var no = i + 1;
  
          html = '<div class="ad_list" id="ad_list">'+
                      '<div class="col-md-12">'+
                          '<div id="applicant_accordion'+i+'" role="tablist" aria-multiselectable="true">'+
                              '<div class="m-b-0-1">'+
                                  '<div class="m-b-0-1">'+
                                      '<div role="tab" id="applicantinfo">'+
                                          '<h6 class="card-title-sub"><i class="fa fa-plus"></i>&nbsp;'+
                                              '<a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion'+i+'" href="#applicant_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('scheme/applicantDetails.title') </a>'+
                                              '<button type="button" id="btn_del_ad'+i+'" class="close btn_del_ad" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                          '</h6>'+
                                      '</div>'+
                                      '<div id="applicant_collapse'+i+'" class="collapse" role="tabpanel">'+
                                          '<div class="card-body">'+
                                              '<div class="row">'+    
                                                  '<div class="col-md-6">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.name')</label>'+
                                                          '<input type="text" id="name" name="name[]" value="" class="form-control" required>'+
                                                          '<input type="hidden" class="kira" id="kira" name="kira" value="'+i+'" >'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-6">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.relationship')</label>';
                                                          if(next_applicant == '01' || next_applicant == '04' || next_applicant == '03'){
                                                          html +=   '<input type="hidden" name="relation[]" value="'+next_applicant+'" >';
                                                          html +=     '<select class="form-control" name="relation[]" id="relation'+i+'" disabled>'; 
                                                          html +=        '@foreach($applrelation as $aplrl)';
                                                              if (next_applicant == {{$aplrl->refcode}}){
                                                          html +=        '<option value="{{$aplrl->refcode}}" selected>{{$aplrl->descen}}</option>';
                                                              }else{
                                                          html +=        '<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>';
                                                              }
                                                          html +=        '@endforeach </select>';
                                                          }else{
                                                          html +=      '<select class="form-control" name="relation[]" id="relation'+i+'">'; 
                                                          html +=        '@foreach($applrelation as $aplrl)<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>';
                                                          html +=        '@endforeach </select>';
                                                          }
                                              html +='</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row">'+
                                                  '<div class="col-md-6">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.id_type')</label>'+
                                                          '<select id="idtype" class="form-control" value="" name="idtype[]"> @foreach($idtype as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select>'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-6">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.id_no')</label>'+
                                                          '<input type="text" id="idno" name="idno[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row">'+
                                                  '<div class="col-md-12">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.postal_address')</label>'+
                                                          '<input type="text" id="add1" name="add1[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-12">'+
                                                      '<div class="form-group">'+
                                                          '<input type="text" id="add2" name="add2[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-12">'+
                                                      '<div class="form-group">'+
                                                          '<input type="text" id="add3" name="add3[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row">'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.state')</label>'+
                                                          '<select name="statecode[]" id="statecode" class="form-control"> @foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}</option> @endforeach </select>'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.city')</label>'+
                                                          '<input type="text" id="city" name="city[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.postcode')</label>'+
                                                          '<input type="text" id="postcode" name="postcode[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row">'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.pobox')</label>'+
                                                          '<input type="text" id="pobox" name="pobox[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.lockedbag')</label>'+
                                                          '<input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.wdt')</label>'+
                                                          '<input type="text" id="wdt" name="wdt[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row">'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.telNo')</label>'+
                                                          '<input type="text" id="telno" name="telno[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.mobileNo')</label>'+
                                                          '<input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.email')</label>'+
                                                          '<input type="text" id="email" name="email[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                              '<div class="row" style="display:none;">'+
                                                  '<div class="col-md-4">'+
                                                      '<div class="form-group">'+
                                                          '<label class="control-label">@lang('scheme/applicantDetails.attr.amount')</label>'+
                                                          '<input type="text" id="amount" name="amount[]" value="" class="form-control">'+
                                                      '</div>'+
                                                  '</div>'+
                                              '</div>'+
                                          '</div>'+
                                      '</div>'+
                                  '</div>'+
                              '</div>'+
                          '</div>';
      
   
          $('#add_app_accordian').append(html);
      });
  
      $('select[id^=relation]').on('change', function () {
  
          // alert('hello');
          var nilai = $(this).val();
          var id = $(this).attr("id");
          var values = id.split('n');
          var this_id = values[1];
  
          console.log('id'+id);
          console.log('this_id'+ this_id);
  
      //01 - wife
      //02 - husband
      //03 - father
      //04 - mother
      //05 - child
      //06 - sibling
      //07 - Grandparent
      //08 - others
  
         // alert(nilai);
  
          if (nilai == '08'){
              alert(nilai);
              $('#app').hide();
              $('#div_amount'+this_id).show();
  
              // if (this_id == '0'){
  
              //     $('.ad_list').remove();
  
              //     }
  
          }else if(nilai == '03'){
              $('#btn_add_applicant_rec').show();
              $('#div_amount'+this_id).hide();
  
              if (this_id == '0'){
  
                  $('.ad_list').remove();
  
              }
  
          }else if(nilai == '04'){
              $('#btn_add_applicant_rec').show();
              $('#div_amount'+this_id).hide();
  
              if (this_id == '0'){
  
                  $('.ad_list').remove();
  
              }
  
          }else if(nilai == '01'){
              $('#btn_add_applicant_rec').show();
              $('#div_amount'+this_id).hide();
  
          }else if(nilai == '02' || nilai == '05' || nilai == '06' || nilai == '07'){ 
              $('#div_amount'+this_id).hide();//irina add 22072019	
              $('#btn_add_applicant_rec').hide();
  
              if (this_id == '0'){
  
                  var count = document.getElementsByClassName('kira');
                  var len = count.length;
                  // alert(len);
  
                  for (var i = 0; i < count.length; i ++) {
                  var val = count[i].getAttribute('value');
                  //for (var j=0; j<len; j++) {
  
                      //alert(j);
  
                      // var val = count[j].value;
                      // alert(val);
                          if (val !== '0'){
  
                              
  
                              var relation = $('#relation'+val).val();
                              // if(relation !== '02' && relation !== '05' && relation !== '06' && relation !== '07'){
  
                                   $('#applicant_accordion'+val).remove();
  
                                  // $('#applicant_accordion'+val).find('input:text').val('');
                                  // $('#applicant_accordion'+val).find('select').val('');
                                  // $('#applicant_accordion'+val).find('select').prop('disabled', false);
  
                              // }
                              
                          }
  
                  }
  
                  $('.ad_list').remove();
  
              }
  
          }else{
              $('#btn_add_applicant_rec').hide();
              $('#div_amount'+id).hide();
          }
  
  
        
  
      });
  
    $('#container_try').on('click','.btn_del_ad',function(){
      var delete_id = $(this).attr('id');
      // alert(delete_id);
      $('#deletemodalad').modal('show');
      $("#deletemodalad .modal-footer button").on('click', function(e) {
        var btn_id = e.target.id;
        if(btn_id == 'btn_delete2'){
          //   alert("masuk");
          $("#"+delete_id).closest("#ad_list").empty();
  
          var abc = $('div[id^="applicant_collapse"]').length;
          console.log('no of applicant:' + abc);
          var relation = $('#relation0').val(); //
  
          if(relation == '03') {
  
              if(abc == 1){
                  $("#btn_add_applicant_rec").show();
              }
  
          }else if(relation == '04') {
  
              if(abc == 1){
                  $("#btn_add_applicant_rec").show();
              }
          }else if(relation == '01') {
              if(abc <4){
                  $("#btn_add_applicant_rec").show();
              }
          }
  
        }
  
      });
    });
  
  //   $("#btn_delete2").click(function(e){
  //             e.preventDefault();
  //             var action = $(this).val();
  //             action_type(action);
  //         });
  
  }); 
  
  function Cuba(){
      var abc = $('input[name*="idno"]').length;
      // alert(abc);
      var relation = $('#relation').val();
      // alert(relation);
  
      if(relation == '03') {
          if(abc >4){
              // alert("hahahaha");
              return false;
          }
      }
  }
  
  function labelOnClick () {
      function makeDivId(id) {
          return id + "_div";
      };
  
      var div = this.getElementById(makeDivId(this.id));
  
      if (div) {
          div.parentNode.removeChild(div);
      } else {
          div = document.createElement("div");
          div.innerHTML = outMsg;
          div.id = makeDivId(this.id);
  
          this.appendChild(div);
      }
  }
  
  function delete_div(i){
  
      //alert(i);
      $("#applicant_accordion"+i).empty();
  
      var abc = $('div[id^="applicant_collapse"]').length;
      var relation = $('#relation').val();
      if(relation == '03' || relation == '04') {
  
          if(abc <2){
              $("#btn_add_applicant_rec").show();
          }
      }else if(relation == '01') {
          if(abc <4){
              $("#btn_add_applicant_rec").show();
          }
      }
  
  }
  
  function check_fromdb(){
           
      var count = document.getElementsByClassName('kira');
      var len = count.length;
          for (var j=0; j<len; j++) {
  
              var id = count[j].value;
              
              var relation = $('#relation'+id).val();
  
              if (relation !== '08'){
                  $('#div_amount'+id).hide();
  
              }
  
                    
          }
  
          var relation0 = $('#relation0').val();
          if (relation0 == '04'){
  
              if ( len >= '2'){
                  $("#btn_add_applicant_rec").hide();
              }else{
                  $("#btn_add_applicant_rec").show();
              }
  
              
          }else if(relation0 == '01'){
  
              if(len >= '4'){
  
                  $("#btn_add_applicant_rec").hide();
              }else{
  
                  $("#btn_add_applicant_rec").show();
  
              }
  
              var count = document.getElementsByClassName('kira');
                  var len = count.length;
                  for (var j=0; j<len; j++) {
  
                      var val = count[j].value;
                          if (val !== '0'){
  
                              var relation = $('#relation'+val).val();
                              if(relation == '01'){
  
                                  $('#relation'+val).prop('disabled', true);
  
                              }
                              
                          }
  
                  }
  
          }
      
  }
  
  </script>