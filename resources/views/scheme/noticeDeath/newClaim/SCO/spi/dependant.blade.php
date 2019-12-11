
<div class="row" id="containerx">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="post" action="/otinfo">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-body">
               @if(Session::get('messageotinfo'))
               <div class="card-footer">
                     <div class="alert alert-warning">
                        {{Session::get('messageotinfo')}}
                     </div>
               </div>
               @elseif (!empty($messageotinfo))
               <div class="card-footer">
                     <div class="alert alert-warning">
                        {{$messageotinfo}}
                     </div>
               </div>
               @endif
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.dependant_available')</label>
                        <select class="form-control" name="dep_ava">
                           <option>Please select</option>
                           <option value='Y'>@lang('option.yes')</option>
                           <option value='N'>@lang('option.no')</option>
                        </select>
                     </div>
                  </div>
               </div>               
            </div>
            <div class="row" id="yes_dep">
               <div class="col-md-12" id="container">
                  <div class="table-responsive">
                     <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                           <tr>
                              <th style='width:4%'>No</th> 
                              <th style='width:14%'>Name</th> 
                              <th style='width:13%'>Identification No</th> 
                              <th style='width:10%'>Date of Birth</th> 
                              <th style='width:10%'>Relationship</th>
                              <th style='width:10%'>Eligible As Dependant</th>
                              <th style='width:9%'>Dependant Status</th>
                              <th style='width:2%'>Entitlement Start Date</th>
                              <th style='width:10%'>Entitlement End Date</th>
                              <th style='width:2%'>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr data-expanded="true" class="workrow" id="tr0_0">
                              <!-- Number -->
                              <td>
                                 1.
                              </td>
                              <!-- Name -->
                              <td>
                                 <input id="name" name="name" type="text" value="" class="form-control" >
                              </td>
                              <!-- IC No -->
                              <td>
                                 <input type="text" id="" name="" value="" class="form-control " >
                              </td>
                              <!-- Date of Birth -->
                              <td>
                                 <input type="date" id="" name="" value="" class="form-control" >
                              </td>
                              <!-- Relationship -->
                              <td>
                                 <input type="text" id="" name="" value="" class="form-control " >
                              </td>
                              <!-- Eligible As Dependant -->
                              <td>
                                 <input type="text" id="" name="" value="" class="form-control" >
                              </td>
                              <!-- Dependant Status -->
                              <td>
                                 <input type="text" id="" name="" value="" class="form-control" >
                              </td>
                              <!-- Entitlement Start Date -->
                              <td>
                                 <input type="date" id="" name="" value="" class="form-control" >
                              </td>
                              <!-- Entitlement End Date -->
                              <td>
                                 <input type="date" id="" name="" value="" class="form-control" >                                                
                              </td>
                              <!-- Action -->                              
                              <td>
                                 <a id='selectdraft' href='#'><i class="fas fa-edit"></i></a>&nbsp;<a id="deletedraft" href='#'><i class="fas fa-trash-alt fa-sm"></i></a>
                              </td>
                           </tr>
                        </tbody>
                     </table>     
                     <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
                  </div>
               </div>
            </div>
            <div id="add_ot_accordian">
               </div>
            <div class="form-actions">
               <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
               <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
               <button type="button" id="btn_add_ot" class="btn btn-sm waves-effect waves-light btn-info">ADD DEPENDANT</button>
            </div>
         </div>
      </div>
   </div>
</div>

<script>

$(document).ready(function() {
//    alert('hello');

   var html;

   $("#yes_dep").hide();

   $('select[name=dep_ava]').change(function () {
      if (this.value == 'Y') {
         $("#yes_dep").show();

      } else if (this.value == 'N') {
         $("#yes_dep").hide();
      } else {
         $("#yes_dep").hide();
      }
   });

   // ADD DEPENDANT

   $('#btn_add_ot').click(function(){
            i++;
    
            var ot_collapse = $('div[id^="ot_collapse"]').length;
            console.log('no of ot:' + ot_collapse);
            var relation = $('#relationship0').val();
    
            var no_of_ot = ot_collapse + 1;
    
            // var checked = $('table[id^="tableOT"]').find('input[type=checkbox]:checked').length;
            var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;
            console.log('no_of_widow :' + no_of_widow);
    
            //1 - child
            //2 - widow
            //3 - widower
            //4 - mother
            //5 - father
            //6 - Grandmother
            //7 - Grandfather
            //8 - siblings
    
            if(relation == '2') { //widow - next child and up to 4 widow
                var next_dependent = "1";
                var next_dependent = "3";
    
                console.log('next_dependent :' + next_dependent);
    
                //     $("#btn_add_ot").hide();
    
            }else if(relation == '3') { //widower - next child only
                var next_dependent = "1";
                console.log('next_dependent :' + next_dependent);
    
            }else if(relation == '4') { //mother - next father only
                var next_dependent = "5";
                $('#btn_add_ot').hide();
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '5') { //father - next mother only
                var next_dependent = "4";
                $('#btn_add_ot').hide();
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '8') { //siblings - next siblings only
                var next_dependent = "8";
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '1') { //child - next child only ??
                var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;
                var no_of_widower = $('[id^="relationship"] option[value=3]:selected').length;
                console.log('next_dependent :' + next_dependent);
            }else{
                console.log('relation :' + relation);
            }
    
            html = '<div class="row" id="ot_list">'+
                        '<div class="col-md-12">'+
                            '<div id="ot_accordion'+i+'" role="tablist" aria-multiselectable="true">'+    
                                '<div class="m-b-0-1">'+
                                    '<div role="tab" id="otinfo">'+
                                        '<h6 class="card-title-sub"><i class="fa fa-plus"></i>&nbsp;<a class="collapsed link" data-toggle="collapse" data-parent="#ot_accordion'+i+'" href="#ot_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('form/scheme.notice_death.PK.dependant.title')</a>'+
                                        '<button type="button" id="btn_del_ot'+i+'" class="close btn_del_ot" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '</h6>'+
                                    '</div>'+
                                    '<div id="ot_collapse'+i+'" class="collapse" role="tabpanel">'+
                                        '<div class="card-body">'+
                                            '<div class="row">'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_name')s</label>'+
                                                        '<input type="text" id="name'+i+'" name="name[]" value="" class="form-control" required>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_type')</label>'+
                                                        '<select id="idtype'+i+'" class="form-control idtype" value="" name="idtype[]">'+
                                                        '<option>Please select</option>'+
                                                         '@foreach($idtype as $id)'+
                                                         '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                         '@endforeach'+
                                                         '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_no')</label>'+
                                                        '<input type="text" id="idno'+i+'" name="idno[]" value="" class="form-control" required>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3 relay_box" id="relay'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.relationship')</label>'+
                                                        '<select class="form-control relationship" name="relationship[]" id="relationship'+i+'">';
                                                        if(relation == '2'){ //widow
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (no_of_widow == 4){ //widow dah cukup 4 tak boleh tambah dah
                                                                if ({{$rel->refcode}} == '1'){
                                                                    html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                                }
                                                            }else{
                                                                if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3'){
                                                                    html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                }
                                                            }
                                                            html += '@endforeach';
    
                                                        }else if(relation == '1'){ //child
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (no_of_widow == 4){ //widow dah cukup 4 tak boleh tambah dah
                                                                if (no_of_widower == 1){ //widower dah cukup 1 tak boleh tambah dah
                                                                    if ({{$rel->refcode}} == '1'){
                                                                        html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                                    }
                                                                }else{
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3'){
                                                                        html += '<option value="{{$rel->refcode}}" >{{$rel->descen}}</option>';
                                                                    }
                                                                }
                                                            }else{
                                                                if (no_of_widower == 1){ //widower dah cukup 1 tak boleh tambah dah 
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '2'){
                                                                        html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                    }
                                                                }else{
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3' || {{$rel->refcode}} == '2'){
                                                                        html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                    }
                                                                }
                                                            }
                                                            html += '@endforeach';
                                                        }else{
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (next_dependent == {{$rel->refcode}}){
                                                                html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                            }
                                                            html += '@endforeach';
                                                        }
                                        html +=         '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 otstatus_box" id="otstatus'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.status')</label>'+
                                                        '<select class="form-control ots" name="otsts[]" id="ots'+i+'">'+
                                                            '<option value="">Please select</option>'+
                                                            '@foreach($otsts as $ot)'+
                                                            '<option value="{{$ot->refcode}}">{{$ot->descen}}</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3 date_birth_box" id="date_birth'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.dateOfBirth')</label>'+
                                                        '<input type="date" id="dob'+i+'" name="dob[]" value="" class="form-control date_birth">'+
                                                    '</div>'+
                                                '</div>';
            //html += '<div class="col-md-4" id="eligibility_start"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_start')</label><input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4" id="eligibility_end"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_end')</label><input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control"></div></div></div>';
                            html +=            '<div class="col-md-3 demised_date_box" id="demised_date'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_death')</label>'+
                                                        '<input type="date" id="dodeath'+i+'" name="dodeath[]" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 passport_expired_box" id="passport_expired'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passport_expired')</label>'+
                                                        '<input type="date" id="passportexp" name="passportexp[]" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 disability_beforeafter_box" id="disability_beforeafter'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability_beforeAfter_death')</label>'+
                                                        '<select class="form-control" name="disablewhen[]" id="disablewhen'+i+'">'+
                                                            '<option value="">Please select</option>'+
                                                            '@foreach($disable as $dis)<option value="{{$dis->refcode}}">{{$dis->descen}}</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                // '<div class="col-md-3 in_edah_box" id="in_edah'+i+'">'+
                                                //     '<div class="form-group">'+
                                                //         '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.edah')</label>'+
                                                //         '<select class="form-control" name="edah[]" id="edah'+i+'">'+
                                                //             '<option value="">Please select</option>'+
                                                //             '<option value="Y">@lang('option.yes')</option>'+
                                                //             '<option value="N">@lang('option.no')</option>'+
                                                //         '</select>'+
                                                //     '</div>'+
                                                // '</div>'+
                                                '<div class="col-md-3 married_date_box" id="married_date'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.married_date')</label>'+
                                                        '<input type="date" id="marrieddate'+i+'" name="marrieddate[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 married_ob_box" id="married_ob'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_marriedOb')</label>'+
                                                        '<input type="date" id="marriedobdate'+i+'" name="marriedobdate[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+    
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Entitlement Start Date</label>'+
                                                        '<input type="date" id="" name="" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Entitlement End Date</label>'+
                                                        '<input type="date" id="" name="" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+ 
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Dependant Entitlement Recommendation</label>'+
                                                        '<input type="text" id="" name="" value="" class="form-control">'+
                                                        // '<select class="form-control" name="disablewhen[]" id="disablewhen'+i+'">'+
                                                        //         '<option value="">Please select</option>'+
                                                        //         '<option value="">Qualified</option>'+
                                                        //         '<option value="">Not Qualified</option>'+
                                                        // '</select>'+                                                    
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Eligible as Dependant</label>'+
                                                        '<select class="form-control" name="disablewhen[]" id="disablewhen'+i+'">'+
                                                                '<option value="">Please select</option>'+
                                                                '<option value="">Suspended</option>'+
                                                                '<option value="">Payable</option>'+
                                                                '<option value="">Qualified for another case</option>'+
                                                                '<option value="">Rejected</option>'+
                                                        '</select>'+                                                    
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+ 
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Dependant and Insured Person Dependence</label>'+
                                                        '<input type="text" id="" name="" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                // '<div class="col-md-3">'+
                                                //     '<div class="form-group">'+
                                                //         '<label class="control-label">Entitlement End Date</label>'+
                                                //         '<input type="date" id="" name="" value="" class="form-control">'+
                                                //     '</div>'+
                                                // '</div>'+
                                            '</div>'+ 
                                            '<div class="row">'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Address</label>'+
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
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.state')</label>'+
                                                        '<select name="statecode[]" id="statecode" class="form-control">'+
                                                            '<option>Please select</option>'+
                                                            '@foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}'+
                                                            '</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.city')</label>'+
                                                        '<input type="text" id="city" name="city[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.postcode')</label>'+
                                                        '<input type="text" id="postcode" name="postcode[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.po_box')</label>'+
                                                        '<input type="text" id="pobox" name="pobox[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.locked_bag')</label>'+
                                                        '<input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.wdt')</label>'+
                                                        '<input type="text" id="wdt" name="wdt[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.telephoneNo')</label>'+
                                                        '<input type="text" id="telno" name="telno[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.mobileNo')</label>'+
                                                        '<input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.email')</label>'+
                                                        '<input type="text" id="email" name="email[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_guardian')</label>'+
                                                        '<select class="form-control guardianQ" id="guardianQ'+i+'" name="guardian[]">'+
                                                            '<option>Please select</option><option value="Y">@lang('option.yes')</option>'+
                                                            '<option value="N">@lang('option.no')</option>'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="form-actions col-md-8 pull-right">'+
                                                    '<button type="button" id="btn_add_guardian'+i+'" class="btn btn-sm waves-effect waves-light btn-info" style="display:none" href="#!" data-toggle="modal" data-id="'+i+'" data-target="#modal_guardian">ADD GUARDIAN INFO</button>'+
                                                '</div>'+
                                            
                                            '</div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.otobdependence')</label><input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.qualification')</label><input type="text" id="qualification" name="qualification[]" value="" class="form-control"></div></div></div>';
            //html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility')</label><input type="text" id="eligibility" name="eligibility[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.pendingpay')</label><input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control"> </div></div>';
            //html += '<div class="col-md-4"><div class="form-group "><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.maritalstatus')</label><select class="form-control" name="maritalsts[]"><option>Please select</option> @foreach($maritalsts as $id) <option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach</select></div></div>';
    
                            html +=        '<div id="yes_dependantstudy'+i+'" class="dependant_study_box">'+
                                                '<h5 class="card-title">@lang('form/scheme.notice_death.PK.dependant_study.title')</h5>'+
                                                '<hr>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_start_date')</label>'+
                                                            '<input type="date" id="studystartdate'+i+'" name="studystartdate[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_end_date')</label>'+
                                                            '<input type="date" id="studyenddate'+i+'" name="studyenddate[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.status')</label>'+
                                                            '<select class="form-control" name="studysts[]">'+
                                                                '<option value="">Please select</option>'+
                                                                '@foreach($studysts as $id)'+
                                                                '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.edu_level')</label>'+
                                                            '<select class="form-control edu" name="edulvl[]" id="edulvl_'+i+'">'+
                                                                '<option value="">Please select</option>'+
                                                                '@foreach($edulvl as $id)'+
                                                                '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6 edu_other_box" id="eduother'+i+'">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.pls_specify')</label>'+
                                                            '<input type="text" name="eduothers[]" id="eduothers'+i+'" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.course_name')</label>'+
                                                            '<input type="text" id="coursename'+i+'" name="coursename[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.inst_univer_name')</label>'+
                                                            '<input type="text" id="uniname'+i+'" name="uniname[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>';
                        html +=        '<div class="form-body" id="bank_info'+i+'" style="display:none;">'+
                                            '<h6 class="card-title-sub">@lang('form/scheme.general.collapse.bank.title')</h6>'+
                                            '<hr>'+
                                            '<div class="row p-t-20">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>'+
                                                        '<select class="form-control" name="paymode" id="paymode_'+i+'" required>'+
                                                            '@foreach($optionpay as $opay)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)'+
                                                            '<option value="{{$opay->refcode}}" selected >{{$opay->descen}}</option>'+
                                                            '@elseif(empty($bankinfo) && $opay->refcode =="02")'+
                                                            '<option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>'+
                                                            '@else'+
                                                            '<option value="{{$opay->refcode}}"> {{$opay->descen}} </option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>';
    
                            html +=    '<div id="bank_eft_'+i+'">'+
                                            '<div class="row p-t-20">'+
    
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_location')</label>'+
                                                        '<select class="form-control select" id="bankloc_'+i+'" name="bankloc" onchange="myFunction()">'+

                                                        '@foreach($optionbank as $ob)'+
                                                        '@if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)'+
                                                        '<option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>'+
                                                        '@else'+
                                                        '<option value="{{$ob->refcode}}">{{$ob->descen}}</option>'+
                                                        '@endif'+
                                                        '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row p-t-20">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.bai_status')</label>'+
                                                        '<select class="form-control select" name="baists" id="baists">'+
    
                                                            '@foreach($optionbai as $obai)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)'+
                                                            '<option value="{{$obai->refcode}}" selected>{{$obai->descen}}</option>'+
                                                            '@else'+
                                                            '<option value="{{$obai->refcode}}">{{$obai->descen}}</option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.substatus_desc')</label>'+
                                                        '@if(!empty($bankinfo) && $bankinfo->substsdesc != '')'+
                                                        '<input type="text" id="substsdesc" name="substsdesc" value="{{$bankinfo->substsdesc}}" class="form-control select">'+
                                                        '@else'+
                                                        '<input type="text" id="substsdesc" name="substsdesc" value="" class="form-control select">'+
                                                        '@endif'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div id="local_bank_'+i+'">'+
                                                '<h3 class="box-title m-t-60">@lang('form/scheme.general.collapse.bank.local_bank')</h3>'+
                                                '<hr>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<select class="form-control selectLocalBank" name='"bankcode"' id="bankcode">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                '@else'+
                                                                '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                '@endif'+
    
                                                                '@foreach($bankcode as $bc)'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->bankcode == $bc->refcode)'+
                                                                '<option value="{{$bc->refcode}}" selected>{{$bc->descen}} </option>'+
                                                                '@else'+
                                                                '<option value="{{$bc->refcode}}">{{$bc->descen}}</option>'+
                                                                '@endif'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_branch')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="{{$bankinfo->bankbr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="{{$bankinfo->accno}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-8">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->bankaddr)'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr"  class="form-control selectLocalBank" value="{{$bankinfo->bankaddr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->acctype)'+
                                                            '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="{{$bankinfo->acctype}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="">'+
                                                                '@else'+
                                                                '<select class="form-control selectLocalBank" name="localacctype" id="localacctype">'+
                                                                '@endif'+
        
        
                                                                '@foreach($accountype as $at)'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->acctype == $at->refcode)'+
                                                                '<option value="{{$at->refcode}}" selected>{{$at->descen}} </option>'+
                                                                '@else'+
                                                                '<option value="{{$at->refcode}}">{{$at->descen}}</option>'+
                                                                '@endif'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div id="oversea_bank_'+i+'" style="display:none">'+
                                                '<h3 class="box-title m-t-40" id="cardOverseas">@lang('form/scheme.general.collapse.bank.overseas_bank')</h3>'+
                                                '<hr>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
        
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->ovbankname)'+
                                                            '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="{{$bankinfo->ovbankname}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_branch')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->bankbr)'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="{{$bankinfo->bankbr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group ">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->accno)'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="{{$bankinfo->accno}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="{{$bankinfo->swiftcode}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="{{$bankinfo->bsbcode}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
    
                                                    '<div class="col-md-8">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="{{$bankinfo->bankaddr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@else'+
                                                                '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@endif'+
    
                                                                '@foreach($overseasbanktype as $ovt)'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc == "O" && $bankinfo->acctype == $ovt->refcode)'+
                                                                '<option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>'+
                                                                '@else'+
                                                                '<option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>'+
                                                                '@endif'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+ //overseabank
                                        '</div>'+ //bank_eft
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        
            $('#add_ot_accordian').append(html);
            $(".passport_expired_box").hide();
            $(".demised_date_box").hide();
            $(".in_edah_box").hide();
            $(".married_date_box").hide();
            $(".registered_married_box").hide();
            $(".married_ob_box").hide();
            $(".disability_box").hide();
            $(".disability_beforeafter_box").hide();
            $(".still_study_box").hide();
            $(".dependant_study_box").hide();
            // $(".edulvlothersyes_box").hide();
            $(".edu_other_box").hide();
    
            guardian_question();
            bank_info (i);
                
     
            
            function getAge(dateString){
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                    age--;
                }
                // console.log(age);
                return age;
                }
    
            // $('.stillstudy').change(function () {
            //     if (this.value == 'yes') {
            //         $('.dependant_study_box').show();
            //     }
            //     else{
            //         $('.dependant_study_box').hide();
            //     }
            // });
    
            
        });



});

</script>
