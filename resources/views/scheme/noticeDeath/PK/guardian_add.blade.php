<div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-body">

                     <div class="form-body">
                         <div class="table-responsive m-t-40">
                              <table id="tableOT" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                  <thead>
                                      <tr>
                                          <th>@lang('guardianDetails.no')</th>
                                          <th>@lang('guardianDetails.attr.ot_name')</th>
                                          <th>@lang('guardianDetails.attr.id_no')</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody>
                                    @if ($otinfo !== null && $otinfo !== '')   
                                        @foreach ($otinfo as $og)
                                        @if($og->guardian == 'Y')
                                        <tr class="{{ $og->idno }}" id="{{ $og->idno }}_0" style="">
                                             <td><input type="checkbox" class="cb" name="OT_0[]" value="{{ $og->idno }}_0_{{ $og->idtype }}"></td>
                                             <td>{{ $og->name }}</td>
                                             <td>{{ $og->idno }}</td>
                                             
                                        </tr>
                                        @endif
                                        @endforeach 
                                    @endif
                                  </tbody>
                              </table>
                          </div>
                          <input type="hidden" class="count" name="count[]" value="0">

                         <div class="row p-t-20">
                              <div class="col-md-12">
                                   <div class="form-group">
                                        <label class="control-label">@lang('guardianDetails.attr.guardian_name')</label>
                                        <input type="text" name="guardian_name[]" id="guardian_name" class="form-control">
                                   </div>
                              </div>
                         </div>
                         <div class="row p-t-20">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.id_type')</label>
                                   <select id="idtype0" class="form-control"  name="idtype[]">
                                        <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option-->
                                    @foreach($idtype as $id)
                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                    @endforeach
                                </select>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.id_no')</label>
                                   <input type="text" name="identification_number[]" id="identification_number" class="form-control">
                              </div>
                              </div>
                         </div>


                    <!-- If ID Type != SSN -->
                    <div id="not_ssn0" style="display:none">
                         <div class="row p-t-20">
                              <!-- <div class="col-md-6">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                                   <input type="date" name="eligibility_start_date[]" id="eligbility_start_date" class="form-control" readonly>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                                   <input type="date" name="passport_end_date[]" id="eligbility_end_date" class="form-control" readonly>
                              </div>
                              </div> -->
                         </div>
                    </div>

                    <!-- If ID Type = SSN -->
                    <div id="ssn0" style="display:none">
                         <div class="row p-t-20">
                              <!-- <div class="col-md-4">
                                   <div class="form-group">
                                        <label class="control-label">@lang('guardianDetails.attr.pass_exp_date')</label>
                                        <input type="date" name="passport_expired_date[]" id="passport_expired_date" class="form-control">
                                   </div>
                              </div> -->
                              <!-- <div class="col-md-4">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.eligibility_start_date')</label>
                                   <input type="date" name="eligibility_start_date[]" id="eligbility_start_date" class="form-control" readonly>
                              </div>
                              </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.eligibility_end_date')</label>
                                   <input type="date" name="passport_end_date[]" id="eligbility_end_date" class="form-control" readonly>
                              </div>
                              </div> -->
                         </div>
                    </div>

                         <div class="row p-t-20">
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.address')</label>
                                   <input type="text" name="address1[]" id="address1" class="form-control">
                                   </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <input type="text" name="address2[]" id="address2" class="form-control">
                                   </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <input type="text" name="address3[]" id="address3" class="form-control">
                                   </div>
                              </div>
                         </div>
                         <div class="row p-t-20">
                              <div class="col-md-4">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.city')</label>
                                   <input type="text" name="city[]" id="city" class="form-control">
                              </div>
                              </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.state')</label>
                                   <select name='statecode[]' id='statecode' class='form-control'>
                                        @foreach($state as $s)
                                        <!-- @if(!empty($oti) && $oti->statecode == $s->refcode)
                                        <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                        @else -->
                                        <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                        <!-- @endif -->
                                        @endforeach
                                   </select>
                              </div>
                              </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                   <label class="control-label">@lang('guardianDetails.attr.postcode')</label>
                                   <input type="number" name="post_code[]" id="post_code" class="form-control">
                              </div>
                              </div>
                         </div>
                    <div class="row p-t-20">
                         <div class="col-md-4">
                         <div class="form-group">
                              <label class="control-label">@lang('guardianDetails.attr.po_box')</label>
                              <input type="text" name="pobox[]" id="pobox" class="form-control">
                         </div>
                         </div>
                         <div class="col-md-4">
                         <div class="form-group">
                              <label class="control-label">@lang('guardianDetails.attr.locked_bag')</label>
                              <input type="text" name="lockedbag[]" id="lockedbag" class="form-control">
                         </div>
                         </div>
                         <div class="col-md-4">
                         <div class="form-group">
                              <label class="control-label">@lang('guardianDetails.attr.wdt')</label>
                              <input type="text" name="wdt[]" id="wdt" class="form-control">
                         </div>
                         </div>
                    </div>
                         <!-- <div class="row p-t-20">
                              <div class="col-md-4">
                                   <div class="form-group">
                                        <label class="control-label">@lang('guardianDetails.attr.demised_date')</label>
                                        <input type="date" name="demised_date[]" id="demised_date" class="form-control" readonly>
                                   </div>
                              </div>
                         </div> -->
                     </div>                    
             </div>
         </div>
     </div>
</div>
