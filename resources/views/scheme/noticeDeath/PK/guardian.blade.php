<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <form method="POST" action="./guardianinfo">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
      
                          <div class="form-body">
                              <h5 class="card-title">@lang('guardianDetails.title')</h5>
                              <hr>
     
                              @if(Session::get('messageguardianinfo')) 
                                   <div class="card-footer">
     
                                   <div class="alert alert-warning">
                                        {{Session::get('messageguardianinfo')}}
                                   </div>
     
                                   </div>
                                   @elseif (!empty($messageguardianinfo))
                                   <div class="card-footer">
     
                                   <div class="alert alert-warning">
                                        {{$messageguardianinfo}}
                                   </div>
     
                                   </div>
                              @endif
     
                         @if (!empty($guardianinfo))
                         @php $i = 0; @endphp
                         @foreach($guardianinfo as $key => $guardiani)
     
                         @php
                         $arrayidno = array();
     
                              foreach($guardiani->otinfo as $try => $otidno){
                                   $arrayidno[] = $otidno->idno ;
                              }
           
                         @endphp
                         
                             <div class="row">
                                 <div class="col-md-12">
                                     <div id="guardian_accordion{{ $i }}" role="tablist" aria-multiselectable="true">
                                         <div class="card m-b-0">
                                             <div class="card-header" role="tab" id="guardianinfo{{ $i }}">
                                                 <h6 class="card-subtitle">
                                                     @if ($guardiani->name != '')
                                                     <a class="collapsed link" data-toggle="collapse" data-parent="#guardian_accordion{{ $i }}" href="#guardian_collapse{{ $key }}" aria-expanded="false" aria-controls="collapseTwo{{ $i }}">
                                                         <!-- @lang('guardianDetails.title') ({{$guardiani->idno}}) -->
                                                         {{$guardiani->name}} ({{$guardiani->idno}})
                                                     </a>
                                                     @endif
                                                 </h6>
                                             </div>
                                             <div id="guardian_collapse{{ $i }}" class="collapse" role="tabpanel">
                                                 <div class="card-body">
                                                  <div class="table-responsive m-t-40">
                                                       <table id="tableOT{{ $i }}" name="tableOT" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                                       <thead>
                                                            <tr>
                                                                 <th>@lang('guardianDetails.no')</th>
                                                                 <th>@lang('guardianDetails.attr.ot_name')</th>
                                                                 <th>@lang('guardianDetails.attr.id_no')</th>
                                                            </tr>
                                                       </thead>
                                                       
                                                       <tbody>
                                                  
                                                                 @foreach ($otinfo as $og)
                                                                 @if($og->guardian == 'Y')
                                                                 <tr class="{{ $og->idno }}" id="{{ $og->idno }}_{{ $i }}"  >
                                                                      <!-- <td><input type="checkbox" class="cb" name="OT_{{ $i }}[]" value="{{ $og->idno }}_0_{{ $og->idtype }}" @//if ($guardiani->otinfo->in_array($og->idno)) checked=checked @//endif></td> -->
                                                                      <td><input type="checkbox" class="cb" name="OT_{{ $i }}[]" value="{{ $og->idno }}_{{ $i }}_{{ $og->idtype }}" @php if(in_array($og->idno, $arrayidno)) echo 'checked="checked"';  @endphp ></td>
                                                                      <td>{{ $og->name }}</td>
                                                                      <td>{{ $og->idno }}</td>
                                                                      
                                                                 </tr>
                                                                 @endif
                                                                 @endforeach 
                                                   
                                                       </tbody>
                                                       </table>
                                                  </div>
                                                  <input type="hidden" class="count" name="count[]" value="{{ $i }}">
     
                                                  <div class="row p-t-20">
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                                 <label class="control-label">@lang('guardianDetails.attr.guardian_name')</label>
                                                                 @if(!empty($guardiani) && $guardiani->name !='')
                                                                 <input type="text" name="guardian_name[{{ $i }}]" id="guardian_name" value="{{ $guardiani->name }}" class="form-control">
                                                                 @else
                                                                 <input type="text" name="guardian_name[{{ $i }}]" id="guardian_name" value="{{ $guardiani->name }}" class="form-control">
                                                                 @endif
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="row p-t-20">
                                                       <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.id_type')</label>
                                                            <select id="idtype{{$i}}" class="form-control" name="idtype[{{ $i }}]">
                                                                 <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option-->
                                                            @foreach($idtype as $id)
                                                            @if (!empty($guardiani) && $id->refcode == $guardiani->idtype)
                                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                                            @else
                                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                       </select>
                                                       </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.id_no')</label>
                                                            @if(!empty($guardiani) && $guardiani->idno !='')
                                                            <input type="text" name="identification_number[{{ $i }}]" id="identification_number" value="{{ $guardiani->idno }}" class="form-control">
                                                            @else
                                                            <input type="text" name="identification_number[{{ $i }}]" id="identification_number" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                  </div>
     
                                             <!-- If ID Type != SSN -->
                                             <div id="not_ssn{{ $i }}" style="display:none">
                                                  <div class="row p-t-20">
                                                       <!-- <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                                                            <input type="date" name="eligibility_start_date[{{ $i }}]" id="eligbility_start_date" class="form-control" readonly>
                                                       </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                                                            <input type="date" name="eligbility_end_date[{{ $i }}]" id="eligbility_end_date" class="form-control" readonly>
                                                       </div>
                                                       </div> -->
                                                  </div>
                                             </div>
                                             <!-- If ID Type = SSN -->
                                             <div id="ssn{{ $i }}" style="display:none">
                                                  <div class="row p-t-20">
                                                       <!-- <div class="col-md-4">
                                                            <div class="form-group">
                                                                 <label class="control-label">@lang('guardianDetails.attr.pass_exp_date')</label>
                                                                 @//if(!empty($guardiani) && $guardiani->passportexp !='')
                                                                 <input type="date" name="passport_expired_date[{{ $i }}]" id="passport_expired_date{{ $i }}" value="{{ $guardiani->passportexp }}" class="form-control">
                                                                 @//else
                                                                 <input type="date" name="passport_expired_date[{{ $i }}]" id="passport_expired_date{{ $i }}"  class="form-control">
                                                                 @//endif
                                                            </div>
                                                       </div> -->
                                                       <!-- <div class="col-md-4">
                                                            <div class="form-group">
                                                                 <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                                                                 <input type="date" name="eligibility_start_date[{{ $i }}]" id="eligbility_start_date" class="form-control" readonly>
                                                            </div>
                                                       </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                 <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                                                                 <input type="date" name="eligbility_end_date[{{ $i }}]" id="eligbility_end_date" class="form-control" readonly>
                                                            </div>
                                                       </div> -->
                                                  </div>
                                             </div>
     
                                                  <div class="row p-t-20">
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.address')</label>
                                                            @if(!empty($guardiani) && $guardiani->add1 !='')
                                                            <input type="text" name="address1[{{ $i }}]" id="address1" value="{{ $guardiani->add1 }}" class="form-control">
                                                            @else
                                                            <input type="text" name="address1[{{ $i }}]" id="address1" class="form-control">
                                                            @endif
                                                            </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                            @if(!empty($guardiani) && $guardiani->add2 !='')
                                                            <input type="text" name="address2[{{ $i }}]" id="address2" value="{{ $guardiani->add2 }}" class="form-control">
                                                            @else
                                                            <input type="text" name="address2[{{ $i }}]" id="address2" class="form-control">
                                                            @endif
                                                            </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                            @if(!empty($guardiani) && $guardiani->add3 !='')
                                                            <input type="text" name="address3[{{ $i }}]" id="address3" value="{{ $guardiani->add3 }}" class="form-control">
                                                            @else
                                                            <input type="text" name="address3[{{ $i }}]" id="address3" class="form-control">
                                                            @endif
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="row p-t-20">
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.city')</label>
                                                            @if(!empty($guardiani) && $guardiani->city !='')
                                                            <input type="text" name="city[{{ $i }}]" id="city" value="{{ $guardiani->city }}" class="form-control">
                                                            @else
                                                            <input type="text" name="city[{{ $i }}]" id="city" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.state')</label>
                                                            <select name='statecode[{{ $i }}]' id='statecode' class='form-control'>
                                                                 @foreach($state as $s)
                                                                 @if(!empty($guardiani) && $guardiani->statecode == $s->refcode)
                                                                 <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                                                 @else
                                                                 <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                                 @endif
                                                                 @endforeach
                                                            </select>
                                                       </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.postcode')</label>
                                                            @if(!empty($guardiani) && $guardiani->postcode !='')
                                                            <input type="number" name="post_code[{{ $i }}]" id="post_code" value="{{ $guardiani->postcode }}" class="form-control">
                                                            @else
                                                            <input type="number" name="post_code[{{ $i }}]" id="post_code" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                  </div>
                                                  <div class="row p-t-20">
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.po_box')</label>
                                                            @if(!empty($guardiani) && $guardiani->city !='')
                                                            <input type="text" name="pobox[{{ $i }}]" id="pobox" value="{{ $guardiani->pobox }}" class="form-control">
                                                            @else
                                                            <input type="text" name="pobox[{{ $i }}]" id="pobox" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.locked_bag')</label>
                                                            @if(!empty($guardiani) && $guardiani->city !='')
                                                            <input type="text" name="lockedbag[{{ $i }}]" id="lockedbag" value="{{ $guardiani->lockedbag }}" class="form-control">
                                                            @else
                                                            <input type="text" name="lockedbag[{{ $i }}]" id="lockedbag" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                       <div class="form-group">
                                                            <label class="control-label">@lang('guardianDetails.attr.wdt')</label>
                                                            @if(!empty($guardiani) && $guardiani->city !='')
                                                            <input type="text" name="wdt[{{ $i }}]" id="wdt" value="{{ $guardiani->wdt }}" class="form-control">
                                                            @else
                                                            <input type="text" name="wdt[{{ $i }}]" id="wdt" class="form-control">
                                                            @endif
                                                       </div>
                                                       </div>
                                                  </div>
                                                  <!-- <div class="row p-t-20">
                                                       <div class="col-md-4">
                                                            <div class="form-group">
                                                                 <label class="control-label">@lang('guardianDetails.attr.demised_date')</label>
                                                                  @//if(!empty($guardiani) && $guardiani->add3 !='') -->
                                                                 <!-- <input type="date" name="demised_date[{{ $i }}]" id="demised_date" class="form-control" readonly>
                                                            </div>
                                                       </div>
                                                  </div> -->
                                             </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             @php $i++; @endphp
                         @endforeach 
                         @else
                              @include('scheme.noticeDeath.PK.guardian_add')
                         @endif
                              <div id="add_guardian_accordian">
                              </div>
                          </div>                    
                          <div class="form-actions">
                              <button type="submit" class="btn btn waves-effect waves-light btn-success">
                              @lang('insuredPerson.save')</button>
                              <button type="button" id="btn_add_guardian" class="btn btn-sm waves-effect waves-light btn-info">ADD GUARDIAN</button>
                         <br><br>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
     </div>
     
     @php($no_ot = 0)
     @php($guardianinfo == null ? $no_ot = 0 : $no_ot = count($guardianinfo))
     
     <script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
     <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
     <script>
     $( document ).ready(function() {
     
          // alert('test guardian');
          //$('[id=tableOT]').DataTable();
         // table(0);
         // check_checked(0);
          var no_ot = {!! $no_ot !!};
         //alert(no_ot);
     
         if(no_ot > 0){
             var i = no_ot-1;

             check_checked_fromdb();

         }else{
             var i = 0;
         }
     
       
     
         var html;
         // alert('Jquery detected');
     
         // Append ot
         table(0);
        // check_unchecked();
     
         $('#btn_add_guardian').click(function(){  
          //    alert('berjaya');
     
               if ($('input[type="checkbox"]').not(':checked').length == 0) {
                    return false;
               }
             i++;
             
         
             html = '<div class="row"><div class="col-md-12"><div id="guardian_accordion'+i+'" role="tablist" aria-multiselectable="true">';    
             html += '<div class="card m-b-0"><div class="card-header" role="tab" id="guardianinfo'+i+'"><h6 class="card-subtitle"><a class="collapsed link" data-toggle="collapse" data-parent="#guardian_accordion'+i+'" href="#guardian_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo'+i+'">Guardian Details</a></h6></div>';
             html += '<div id="guardian_collapse'+i+'" class="collapse" role="tabpanel"><div class="card-body"><div class="row"><div class="col-md-12"><div class="form-group">';
             
             html += '<table id="tableOT'+i+'" name="tableOT" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">';
             html += '<thead><tr><th>@lang('guardianDetails.no')</th><th>@lang('guardianDetails.attr.ot_name')</th><th>@lang('guardianDetails.attr.id_no')</th></tr></thead>';
             html += '<tbody> @if ($otinfo !== null && $otinfo !== '') @foreach ($otinfo as $og) @if($og->guardian == 'Y')';                         
             html += '<tr class="{{ $og->idno }}" id="{{ $og->idno }}_'+i+'" style=""><td><input type="checkbox" class="cb" name="OT_'+i+'[]" value="{{ $og->idno }}_'+i+'_{{ $og->idtype }}"></td><td>{{ $og->name }}</td>';
             html += '<td>{{ $og->idno }}</td></tr> @endif @endforeach @endif </tbody> </table></div><input type="hidden" class="count" name="count[]" value="'+i+'">';
     
             html += '<div class="row p-t-20"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.guardian_name')</label>';
             html += '<input type="text" name="guardian_name['+i+']" id="guardian_name" class="form-control"></div></div> </div>';
                              
             html += '<div class="row p-t-20"><div class="col-md-6"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.id_type')</label>';
             html += '<select id="idtype" class="form-control" name="idtype['+i+']">';
             html += '@foreach($idtype as $id) <option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select> </div> </div>';
             
             html += '<div class="col-md-6"> <div class="form-group"> <label class="control-label">@lang('guardianDetails.attr.id_no')</label>';
             html += '<input type="text" name="identification_number['+i+']" id="identification_number" class="form-control"></div></div> </div>';
     
          //    html += '<div id="not_ssn"> <div class="row p-t-20"> <div class="col-md-6"> <div class="form-group"><label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>';
          //    html += '<input type="date" name="eligibility_start_date['+i+']" id="eligbility_start_date" class="form-control" readonly></div></div><div class="col-md-6"><div class="form-group">';
          //    html += '<label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label><input type="date" name="passport_end_date['+i+']" id="eligbility_end_date" class="form-control" readonly></div></div></div></div>';
     
          //    html += '<div id="ssn"><div class="row p-t-20"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.pass_exp_date')</label>';
          //    html += '<input type="date" name="passport_expired_date['+i+']" id="passport_expired_date" class="form-control"></div></div><div class="col-md-4"><div class="form-group">';
          //    html += '<label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label><input type="date" name="eligibility_start_date['+i+']" id="eligbility_start_date" class="form-control" readonly></div></div>';
             
          //    html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>';
          //    html += '<input type="date" name="passport_end_date['+i+']" id="eligbility_end_date" class="form-control" readonly></div></div></div></div>';
     
             html += '<div class="row p-t-20"><div class="col-md-12"> <div class="form-group"><label class="control-label">@lang('guardianDetails.attr.address')</label>';
             html += '<input type="text" name="address1['+i+']" id="address1" class="form-control"></div></div><div class="col-md-12"><div class="form-group"><input type="text" name="address2['+i+']" id="address2" class="form-control"></div></div>';
             html += '<div class="col-md-12"><div class="form-group"><input type="text" name="address3['+i+']" id="address3" class="form-control"></div></div></div>';
                                   
             html += '<div class="row p-t-20"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.city')</label><input type="text" name="city['+i+']" id="city" class="form-control"></div></div>';
     
             html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.state')</label><select name="statecode['+i+']" id="statecode" class="form-control">';
             html += '@foreach($state as $s)<!-- @if(!empty($oti) && $oti->statecode == $s->refcode)<option value="{{$s->refcode}}" selected>{{$s->descen}}</option>@else --><option value="{{$s->refcode}}">{{$s->descen}}</option><!-- @endif -->@endforeach</select></div></div>';
             html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.postcode')</label><input type="number" name="post_code['+i+']" id="post_code" class="form-control"></div></div></div>';
             html += '<div class="row p-t-20"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.po_box')</label><input type="text" name="pobox[]" id="pobox" class="form-control"></div></div>';
             html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.locked_bag')</label><input type="text" name="lockedbag[]" id="lockedbag" class="form-control"></div></div>';
             html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.wdt')</label><input type="text" name="wdt[]" id="wdt" class="form-control"></div></div></div>';
          //    html += '<div class="row p-t-20"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('guardianDetails.attr.demised_date')</label><input type="date" name="demised_date['+i+']" id="demised_date" class="form-control" readonly></div></div>';
             html += '</div></div></div></div></div></div></div>';
      
             $('#add_guardian_accordian').append(html);
     
             table(i);
             check_checked(i);
     
             
         });
     
     });
     
     function check_idtype(no){
          var idtype = $('#idtype'+no).val();
          // alert(idtype);
     }
     
     function table(i) {
     
               $('table[name^=tableOT]').on('change', 'input[class^=cb]', function () {
                    //alert("hahahaha");
                    var val = $(this).val();
                    console.log(val);
                    var values = val.split('_');
                    var idno = values[0];
                    var count = values[1];
     
                    var x = document.getElementsByClassName("count");
                    var i;
                    for (i = 0; i < x.length; i++) {
     
                         if (x[i].value !== count) {
     
                              if($(this).is(':checked')){
                                   // alert("checked");
                                  $('#'+ idno +'_'+ x[i].value).hide();
                                  console.log('#'+ idno +'_'+ x[i].value);
                                  //$('#'+ idno +'_'+ x[i].value).prop("display", "none");
     
                              }else{
                                   // alert("unchecked");
                                   $('#'+ idno +'_'+ x[i].value).show();
                                   console.log('#'+ idno +'_'+ x[i].value);
                                   //$('#'+ idno +'_'+ x[i].value).prop("display", "block");
                              }
     
                              //alert('hide: '+ idno + x[i].value );
                              
                         }
                         //alert(x[i].value);
                    }
     
               });
     
               // $('select[id^=idtype]').on('change', function () {
     
               //      var val = $(this).val();
               //      console.log(val);
               //      var id = $(this).attr("id");
     
               //      var values = id.split('e');
               //      var count = values[1];
               //      //var idtype = $('#idtype'+val).val();
     
               //      if(val == '05'){
               //           $('#ssn'+count).show();
               //           $('#not_ssn'+count).hide();
               //      }else{
               //           $('#not_ssn'+count).show();
               //           $('#ssn'+count).hide();
               //      }
                    
               //      console.log(id);
               //      console.log(count);
     
               // });
     }
     
     function check_checked(i){// after append hide the previously checked 
         
          var cboxes = document.getElementsByClassName('cb');
          var len = cboxes.length;
          for (var j=0; j<len; j++) {
               if ($(cboxes[j]).is(':checked')){

                    // alert(cboxes[j]);
     
                    var val = cboxes[j].value;
                    var values = val.split('_');
                    var idno = values[0];
     
                    $('#'+ idno +'_'+ i).hide();
                    
                    // alert(i + ('checked ') + cboxes[i].value);
               }
               // alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);
          }
     
     }
     function check_checked_fromdb(){//hide checkbox that has been select by other table from db
         
          var cboxes = document.getElementsByClassName('cb');
          var len = cboxes.length;
          for (var j=0; j<len; j++) {
               if ($(cboxes[j]).is(':checked')){ 

                    var val = cboxes[j].value;
                    var values = val.split('_');
                    var idno = values[0];
                    var i = values[1];

                     var this_id = '#'+ idno +'_'+ i;
                    // alert('this_id' +$this_id);


                    var counts = document.getElementsByClassName('count');
                    var panjang = counts.length;
                    for (var k=0; k<panjang; k++) { //looping semua id 

                         var val = counts[k].value;
                         var id_looping =idno +'_'+ val;

                         if(this_id !==  id_looping  && i !== val){ //hide semua yg sama ic excluded the checked one

                              // alert('id_looping' + $id_looping);

                              $('#'+ idno +'_'+ val).hide();

                         }

                    }
                    // alert(i + ('checked ') + cboxes[i].value);
               }
               // alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);
          }
     
     }
     
     function check_unchecked(){ 
          //var i=0;
          var cboxes = document.getElementsByClassName('cb');
          var len = cboxes.length;
          for (var j=0; j<len; j++) {
               if ($(cboxes[j]).is(':unchecked')){
     
                    var val = cboxes[j].value;
                    var values = val.split('_');
                    var idno = values[0];
                    var i = values[1];

                    console.log(val);
                    $(cboxes[j]).hide();
                    //$('#'+ idno +'_'+ i).hide();
                    
                    //alert(i + ('checked ') + cboxes[i].value);
               }
               //alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);
          }
     
          if ($('.cb input[type="checkbox"]').not(':checked').length == 0) {
             //alert();
             return false;
         }
     
     }
     
     
     </script>  