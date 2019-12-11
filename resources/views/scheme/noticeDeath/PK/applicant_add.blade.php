<div class="row">
     <div class="col-md-12">
         <div id="applicant_accordion0" role="tablist" aria-multiselectable="true">
               <div class="card m-b-0">
                    <div class="card-header" role="tab" id="applicantinfo0" style="display:none">
                        <h6 class="card-subtitle">
                            <a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion0" href="#applicant_collapse0" aria-expanded="false" aria-controls="collapseTwo2">
                                @lang('applicantDetails.title')
                            </a>
                            <!-- <a onclick="delete_div(0)" style="text-align:right !important; color:red"><i class="far fa-trash-alt"></i></a> -->
                        </h6>
                    </div>
                <!-- <div id="applicant_collapse0" class="collapse" role="tabpanel"> -->
                <div id="applicant_collapse0">
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.name')</label>
                                      <input type="text" id="name" name="name[]" value="" class="form-control">
                                      <input type="hidden" class="kira" id="kira" name="kira" value="0">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.relationship')</label>
                                        <select class="form-control" name="relation[]" id="relation0"> 
                                        <option value="">Please select</option>
                                        @foreach($applrelation as $aplrl)
                                        <option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('applicantDetails.attr.id_type')</label>
                                <select id="idtype" class="form-control" value="" name="idtype[]">
                                <option value="">Please select</option>
                                @foreach($idtype as $id)
                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('applicantDetails.attr.id_no')</label>
                                <input type="text" id="idno" name="idno[]" value="" class="form-control">
                            </div>
                        </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.postal_address')</label>
                                      <input type="text" id="add1" name="add1[]" value="" class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="text" id="add2" name="add2[]" value="" class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="text" id="add3" name="add3[]" value="" class="form-control">
                                  </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.postcode')</label>
                                      <input type="text" id="postcode" name="postcode[]" value="" class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.state')</label>
                                      <select name='statecode[]' id='statecode' class='form-control'>
                                          @foreach($state as $s)
                                          <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.city')</label>
                                      <input type="text" id="city" name="city[]" value="" class="form-control">
                                  </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label">@lang('applicantDetails.attr.telNo')</label>
                                      <input type="text" id="telno" name="telno[]" value="" class="form-control">
                                  </div>
                                </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.mobileNo')</label>
                                    <input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.email')</label>
                                    <input type="text" id="email" name="email[]" value="" class="form-control">
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.pobox')</label>
                                    <input type="text" id="pobox" name="pobox[]" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.lockedbag')</label>
                                    <input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.wdt')</label>
                                    <input type="text" id="wdt" name="wdt[]" value="" class="form-control">
                                </div>
                            </div>
                         </div>
                         <div class="row">
                         
                            <div class="col-md-4" id="div_amount0" style="display:none">

                                <div class="form-group">
                                    <label class="control-label">@lang('applicantDetails.attr.amount')</label>
                                    <input type="text" id="amount" name="amount[]" value=""  class="form-control">
                                </div>
                        
                            </div>
                         </div>
                    </div>
                    </div>
               </div>
         </div>
     </div>
</div>