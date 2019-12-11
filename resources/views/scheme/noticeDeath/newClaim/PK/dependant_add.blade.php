<div class="row">
        <div class="col-md-12">
            <div id="ot_accordion" role="tablist" aria-multiselectable="true">
                <!-- <div class="row">     -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Dependant Information Available?</label>
                            <select class="form-control dependentQ" name="dependentQ[]" id="dependentQ">
                                <option>Please select</option>
                                <option value='Y'>@lang('option.yes')</option>
                                <option value='N'>@lang('option.no')</option>
                            </select> 
                        </div>
                    </div>   

                    <div class="table-responsive m-t-40">
                                  <table id="tableDependent" class="display nowrap table table-hover table-striped table-bordered" style="display:none;" cellspacing="40" width="50%">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Dependant Name</th>
                                              <th>ID No</th>
                                              <th>Date of Birth</th>
                                              <th>Relationship</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                              <!-- <th>@lang('form/scheme.notice_death.PK.dependant.T_name')</th> -->
                                          </tr>
                                      </thead>
                                      
                                      <tbody>
                                 
                                      </tbody>
                                  </table>
                              </div>
                <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_name')</label>
                            <input type="text" id="name0" name="name[]" value="" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_type')
                                </label>
                                <select id="idtype" class="form-control idtype" value="@if(!empty($oti)){{$oti->idtype}} @endif" name="idtype[]">
                            <option value="">Please select</option>
                                @foreach($idtype as $id)
                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_no')</label>
                            <input type="text" id="idno0" name="idno[]" value="" class="form-control" required>
                        </div>
                    </div>        
                </div>
                <div class="row">
                    <div class="col-md-3" id="date_birth0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.dateOfBirth')</label>
                            <input type="date" id="dob0" name="dob[]" value="" class="form-control date_birth">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.relationship')</label>
                                <select class="form-control relationship" name="relationship[]" id="relationship0"> 
                                <option value="">Please select</option>
                                @foreach($relation as $rel)
                                <option value="{{$rel->refcode}}">{{$rel->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                    <!-- Date of Married with OB -->
                    <!-- <div class="col-md-3" id="married_ob0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_marriedOb')</label>
                            <input type="date" id="marriedobdate0" name="marriedobdate[]" value="" class="form-control">
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-3" id="otstatus0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.status')</label>
                            <select class="form-control ots" name="otsts[]" id="ots0"> 
                                <option value="">Please select</option>    
                                @foreach($otsts as $ot)
                                <option value="{{$ot->refcode}}">{{$ot->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                    <!-- Demised Date if OT Status = Demised -->
                    <!-- <div class="col-md-3" id="demised_date0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_death')</label>
                            <input type="date" id="dodeath0" name="dodeath[]" value="" class="form-control">
                        </div>
                    </div> -->
                    <!-- Passport Expired Date if ID Type = SSN -->
                    <!-- <div class="col-md-3" id="passport_expired0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passport_expired')
                            </label>
                                <input type="date" id="passportexp0" name="passportexp[]" value="" class="form-control">
                        </div>
                    </div>  -->
                    <!-- Disablity either Before or After death if OT Status == disabled -->
                    <!-- <div class="col-md-3" id="disability_beforeafter0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability_beforeAfter_death')</label>
                            <select class="form-control" name="disablewhen[]" id="disablewhen0">  
                                <option value="">Please select</option>  
                                <option value="Y">Yes</option>
                                <option value="N">No</option>           
                                {{-- @foreach($disable as $dis)
                                <option value="{{$dis->refcode}}">{{$dis->descen}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>  -->
                    <!-- <div class="col-md-3" id="married_date0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.married_date')</label>
                            <input type="date" id="marrieddate0" name="marrieddate[]" value="" class="form-control">
                        </div>
                    </div>
                </div> -->
    
                <!-- Condition based on relationship, OT Status & ID Type = SSN -->
                <!-- {{-- <div class="row"> --}} -->
                    <!-- Date Of Birth if relationship with OB = child -->
                    
    
                        <!-- Eligibility start Date -->
                        <!-- {{--<div class="col-md-4" id="eligibility_start0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_start')</label>
                            <input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control">
                        </div>
                    </div> -->
                
                    <!-- Eligibility End Date -->
                    <!-- <div class="col-md-4" id="eligibility_end0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_end')</label>
                            <input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control">
                        </div>
                    </div>--}} -->
                
                    
                    <!-- Date of Married with OB -->
                    <!-- {{-- <div class="col-md-3" id="divored_ob0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_divorcedOb')</label>
                            <input type="date" id="divorcedobdate0" name="divorcedobdate[]" value="" class="form-control">
                        </div>
                    </div>  --}}
                {{-- </div> --}}
                {{-- <div class="row">                         --}} -->
                    <!--In Edah if Marital Status at the time of death is Divorced -->
                    <!-- {{-- <div class="col-md-3" id="in_edah0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.edah')</label>
                            <select class="form-control" name="edah[]" id="edah0">
                            <option value=''>Please select</option>
                            <option value='Y'>@lang('option.yes')</option>
                            <option value='N'>@lang('option.no')</option>
                            </select>
                        </div>
                    </div> --}}
                         
                {{-- </div>  --}}
                {{-- <div class="row"> --}} -->
                    <!-- Married Date if OT Status = Married && Relation with OB == Child/Siblings -->
                    
                    <!-- Registered Married is the same with married date -->
                    <!-- {{-- <div class="col-md-3" id="registered_married0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.registered_married')</label>
                            <select class="form-control" name="regmarried[]" id="regmarried0">
                                <option value=''>Please select</option>
                                <option value='Y'>@lang('option.yes')</option>
                                <option value='N'>@lang('option.no')</option>
                            </select>
                        </div>
                    </div> --}}
                {{-- </div> --}}
                {{-- <div class="row"> -->
                    <!-- Disability if relation OB & OT == Child -->
                    <!-- <div class="col-md-4" id="disability_i0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability')</label>
                                <select class="form-control" name="disability[]" id="disability0">
                                    <option value=''>Please select</option>
                                    <option value='Y'>@lang('option.yes')</option>
                                    <option value='N'>@lang('option.no')</option>
                                </select> 
                        </div>
                    </div> -->
                                            
                    <!-- Still Study appear when choose Yes -->
                    <!-- <div class="col-md-4" id="still_study0">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.still_study')</label>
                            <select class="form-control stillstudy" name="still_study[]" id="still_study_input0">
                                <option value="">Please select</option>    
                                <option value="yes" selected>Yes</option>
                                <option value="no" selected>No</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.address')</label>
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
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.state')</label>
                            <select name='statecode[]' id='statecode' class='form-control'>
                                    <option value="">Please select</option>    
                                    @foreach($state as $s)
                                    <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.city')</label>
                            <input type="text" id="city" name="city[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.postcode')</label>
                            <input type="text" id="postcode" name="postcode[]" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.po_box')</label>
                            <input type="text" id="pobox" name="pobox[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.locked_bag')</label>
                            <input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.wdt')</label>
                            <input type="text" id="wdt" name="wdt[]" value="" class="form-control">
                        </div>
                    </div>
                    
                
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.telephoneNo')</label>
                            <input type="text" id="telno" name="telno[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.mobileNo')</label>
                            <input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.email')</label>
                            <input type="text" id="email" name="email[]" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_guardian')</label>
                            <select class="form-control guardianQ" name="guardian[]" id="guardianQ0">
                                <option>Please select</option>
                                <option value='Y'>@lang('option.yes')</option>
                                <option value='N'>@lang('option.no')</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-actions col-md-8 pull-right">
                        <button type="button" id="btn_add_guardian0" style="display:none" class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-toggle="modal" data-id="0" data-target="#modal_guardian">ADD GUARDIAN INFO</button>
                    </div>  
                </div>
                            
                {{--<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.otobdependence')</label>
                        <input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.qualification')</label>
                        <input type="text" id="qualification" name="qualification[]" value="" class="form-control">
                    </div>
                </div>--}}
                {{--<div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility')</label>
                        <input type="text" id="eligibility" name="eligibility[]" value="" class="form-control">
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.pendingpay')</label>
                        <input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control">
                    </div>
                </div>   
                <div class="col-md-4">
                    <div class="form-group ">
                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.maritalstatus')</label>
                        <select class="form-control" name="maritalsts[]"> 
                        <option value="">Please select</option>    
                        @foreach($maritalsts as $id)
                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>--}} 
          
                <div id="yes_dependantstudy0">
                <h5 class="card-title">@lang('form/scheme.notice_death.PK.dependant_study.title')</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_start_date')</label>
                                <input type="date" id="studystartdate0" name="studystartdate[]" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_end_date')</label>
                                <input type="date" id="studyenddate0" name="studyenddate[]" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.status')</label>
                                <select class="form-control" name="studysts[]" id="study_status0"> 
                                    <option value="">Please select</option>    
                                    @foreach($studysts as $id)
                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.edu_level')</label>
                                <select class="form-control edu" name="edulvl[]" id="edulvl_0"> 
                                    <option value="">Please select</option>    
                                    @foreach($edulvl as $id)
                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 edu_other_box" id="eduother0">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.pls_specify')</label>
                                <input type="text" name="eduothers[]" id="eduothers0" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.course_name')</label>
                                <input type="text" id="coursename0" name="coursename[]" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.inst_univer_name')</label>
                                <input type="text" id="uniname0" name="uniname[]" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div> 
    
                <div class="form-body"  id="bank_info0" style="display:none;">
                    <h5 class="card-title-sub">@lang('form/scheme.general.collapse.bank.title')</h5>
                    <hr>
                    @if(Session::get('messagebank'))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messagebank')}}
                        </div>

                    </div>
                    @elseif (!empty($messagebank))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messagebank}}
                        </div>

                    </div>
                    @endif
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>
                                <select class="form-control" name='paymode' id='paymode' required>
                                    {{-- <option value=""></option>     --}}
                                    @foreach($optionpay as $opay)
                                    @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                    <option value="{{$opay->refcode}}" selected >{{$opay->descen}}</option>
                                    @elseif(empty($bankinfo) && $opay->refcode =='02')
                                    <option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>
                                    @else
                                    <option value="{{$opay->refcode}}"> {{$opay->descen}} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4" id="bank_location">
                            <div class="form-group">
                                <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_account')</label>
                                <select class="form-control select" id="bankloc" name='bankloc'
                                onchange="myFunction()">
                                @foreach($optionbank as $ob)
                                @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                <option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>
                                @else
                                <option value="{{$ob->refcode}}">{{$ob->descen}}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="bank_reason">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.bank.reason')</label>
                                    @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                                    <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                    @else
                                    <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                    @endif
                                    @foreach($optionreason as $or)
                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                    <option value="{{$or->refcode}}" selected>{{$or->descen}}</option>
                                    <option>@lang('form/scheme.general.collapse.bank.senior')</option>
                                    <option>@lang('form/scheme.general.collapse.bank.legal')</option>
                                    @else
                                    <option value="{{$or->refcode}}">{{$or->descen}}</option>
                                    @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bank_eft">
                        <div id="local_bank">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <select class="form-control selectLocalBank" name='bankcode'
                                            id='bankcode'>
                                            @else
                                            <select class="form-control selectLocalBank" name='bankcode'
                                            id='bankcode'>
                                            @endif

                                            @foreach($bankcode as $bc)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                            $bankinfo->bankcode == $bc->refcode)
                                            <option value="{{$bc->refcode}}" selected>{{$bc->descen}}
                                            </option>
                                            @else
                                            <option value="{{$bc->refcode}}">{{$bc->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                        @else
                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                        <select class="form-control selectLocalBank" name='localacctype'
                                        id='localacctype' value="{{$bankinfo->acctype}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <select class="form-control selectLocalBank" name='localacctype'
                                        id='localacctype' value="">
                                        @else
                                        <select class="form-control selectLocalBank" name='localacctype'
                                        id='localacctype'>
                                        @endif


                                        @foreach($accountype as $at)
                                        @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                        $bankinfo->acctype == $at->refcode)
                                        <option value="{{$at->refcode}}" selected>{{$at->descen}}
                                        </option>
                                        <option>@lang('form/scheme.general.collapse.bank.joint')</option>
                                        @else
                                        <option value="{{$at->refcode}}">{{$at->descen}}</option>
                                        @endif
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="oversea_bank">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->ovbankname)
                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->ovbankname}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->accno}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.ov_type_acc')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <select class="form-control selectOverseasBank" name='ovacctype'
                                            id='ovacctype'>
                                            @else
                                            <select class="form-control selectOverseasBank" name='ovacctype'
                                            id='ovacctype'>
                                            @endif

                                            @foreach($overseasbanktype as $ovt)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                            $bankinfo->acctype == $ovt->refcode)
                                            <option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>
                                            <option>@lang('form/scheme.general.collapse.bank.joint')</option>
                                            @else
                                            <option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.country')</label>
                                        <input type="text" name="country" id="country" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.currency')</label>
                                        <input type="text" name="currency" id="currency" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.ov_bank_address')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
         