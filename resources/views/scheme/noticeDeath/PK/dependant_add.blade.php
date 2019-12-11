<div class="row">
    <div class="col-md-12">
        <div id="ot_accordion" role="tablist" aria-multiselectable="true">
            <div class="row">       
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.ot_name')</label>
                        <input type="text" id="name" name="name[]" value="" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.id_type')
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
                        <label class="control-label">@lang('dependantsProfile.attr.id_no')</label>
                        <input type="text" id="idno" name="idno[]" value="" class="form-control" required>
                    </div>
                </div>        
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.relationship')</label>
                            <select class="form-control relationship" name="relationship[]" id="relationship"> 
                            <option value="">Please select</option>
                            @foreach($relation as $rel)
                            <option value="{{$rel->refcode}}">{{$rel->descen}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3" id="otstatus">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.status')</label>
                        <select class="form-control ots" name="otsts[]" id="ots"> 
                            <option value="">Please select</option>    
                            @foreach($otsts as $ot)
                            <option value="{{$ot->refcode}}">{{$ot->descen}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Condition based on relationship, OT Status & ID Type = SSN -->
            <div class="row">
                <!-- Date Of Birth if relationship with OB = child -->
                <div class="col-md-3" id="date_birth">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.dateOfBirth')</label>
                        <input type="date" id="dob" name="dob[]" value="" class="form-control date_birth">
                    </div>
                </div>

                    <!-- Eligibility start Date -->
                    {{--<div class="col-md-4" id="eligibility_start">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.eligibility_start')</label>
                        <input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control">
                    </div>
                </div>
            
                <!-- Eligibility End Date -->
                <div class="col-md-4" id="eligibility_end">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.eligibility_end')</label>
                        <input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control">
                    </div>
                </div>--}}
            
                <!-- Demised Date if OT Status = Demised -->
                <div class="col-md-3" id="demised_date">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantsProfile.attr.date_death')</label>
                            <input type="date" id="dodeath" name="dodeath[]" value="" class="form-control">
                        </div>
                    </div>
                <!-- Passport Expired Date if ID Type = SSN -->
                <div class="col-md-3" id="passport_expired">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.passport_expired')
                        </label>
                            <input type="date" id="passportexp" name="passportexp[]" value="" class="form-control">
                    </div>
                </div> 
                <!-- Disablity either Before or After death if OT Status == disabled -->
                <div class="col-md-3" id="disability_beforeafter">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.disability_beforeAfter_death')</label>
                        <select class="form-control" name="disablewhen[]" id="disablewhen">  
                            <option value="">Please select</option>             
                            @foreach($disable as $dis)
                            <option value="{{$dis->refcode}}">{{$dis->descen}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 
            </div>
            <div class="row">                        
                <!--In Edah if Marital Status at the time of death is Divorced -->
                <div class="col-md-3" id="in_edah">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.edah')</label>
                        <select class="form-control" name="edah[]" id="edah">
                        <option value=''>Please select</option>
                        <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                        <option value='N'>@lang('dependantsProfile.attr.no')</option>
                        </select>
                    </div>
                </div>
                <!-- Date of Married with OB -->
                <div class="col-md-3" id="married_ob">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.date_marriedOb')</label>
                        <input type="date" id="marriedobdate" name="marriedobdate[]" value="" class="form-control">
                    </div>
                </div>       
            </div> 
            <div class="row">
                <!-- Married Date if OT Status = Married && Relation with OB == Child/Siblings -->
                <div class="col-md-3" id="married_date">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.married_date')</label>
                        <input type="date" id="marrieddate" name="marrieddate[]" value="" class="form-control">
                    </div>
                </div>
                <!-- Registered Married is the same with married date -->
                <div class="col-md-3" id="registered_married">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.registered_married')</label>
                        <select class="form-control" name="regmarried[]" id="regmarried">
                            <option value=''>Please select</option>
                            <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                            <option value='N'>@lang('dependantsProfile.attr.no')</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <!-- Disability if relation OB & OT == Child -->
                <div class="col-md-4" id="disability_i">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.disability')</label>
                            <select class="form-control" name="disability[]" id="disability">
                                <option value=''>Please select</option>
                                <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                                <option value='N'>@lang('dependantsProfile.attr.no')</option>
                            </select> 
                    </div>
                </div>
                                        
                <!-- Still Study appear when choose Yes -->
                <div class="col-md-4" id="still_study">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.still_study')</label>
                        <select class="form-control stillstudy" name="still_study[]" id="still_study_input">
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
                        <label class="control-label">@lang('dependantsProfile.attr.address')</label>
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
                        <label class="control-label">@lang('dependantsProfile.attr.city')</label>
                        <input type="text" id="city" name="city[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.state')</label>
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
                        <label class="control-label">@lang('dependantsProfile.attr.postcode')</label>
                        <input type="text" id="postcode" name="postcode[]" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.po_box')</label>
                        <input type="text" id="pobox" name="pobox[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.locked_bag')</label>
                        <input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.wdt')</label>
                        <input type="text" id="wdt" name="wdt[]" value="" class="form-control">
                    </div>
                </div>
                
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.telephoneNo')</label>
                        <input type="text" id="telno" name="telno[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.mobileNo')</label>
                        <input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.email')</label>
                        <input type="text" id="email" name="email[]" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('dependantsProfile.attr.ot_guardian')</label>
                        <select class="form-control" name="guardian[]">
                            <option>Please select</option>
                            <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                            <option value='N'>@lang('dependantsProfile.attr.no')</option>
                        </select> 
                    </div>
                </div>
            </div>
                        
            {{--<div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('dependantsProfile.attr.otobdependence')</label>
                    <input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('dependantsProfile.attr.qualification')</label>
                    <input type="text" id="qualification" name="qualification[]" value="" class="form-control">
                </div>
            </div>--}}
            {{--<div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('dependantsProfile.attr.eligibility')</label>
                    <input type="text" id="eligibility" name="eligibility[]" value="" class="form-control">
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('dependantsProfile.attr.pendingpay')</label>
                    <input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control">
                </div>
            </div>   
            <div class="col-md-4">
                <div class="form-group ">
                    <label class="control-label">@lang('dependantsProfile.attr.maritalstatus')</label>
                    <select class="form-control" name="maritalsts[]"> 
                    <option value="">Please select</option>    
                    @foreach($maritalsts as $id)
                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                    @endforeach
                </select>
                </div>
            </div>--}}                 
                        
            <div id="yes_dependantstudy">
            <h5 class="card-title">@lang('dependantStudy.title')</h5>
            <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.study_start_date')</label>
                            <input type="date" id="studystartdate" name="studystartdate[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.study_end_date')</label>
                            <input type="date" id="studyenddate" name="studyenddate[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.status')</label>
                            <select class="form-control" name="studysts[]" id="study_status"> 
                                <option value="">Please select</option>    
                                @foreach($studysts as $id)
                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.edu_level')</label>
                            <select class="form-control edu" name="edulvl[]" id="edulvl_"> 
                                <option value="">Please select</option>    
                                @foreach($edulvl as $id)
                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 edu_other_box" id="eduother">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.pls_specify')</label>
                            <input type="text" name="eduothers[]" id="eduothers" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.course_name')</label>
                            <input type="text" id="coursename" name="coursename[]" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('dependantStudy.attr.inst_univer_name')</label>
                            <input type="text" id="uniname" name="uniname[]" value="" class="form-control">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
    