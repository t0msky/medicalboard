<div class="row" id="containerx">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/otinfo">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{-- <input type="hidden" name="caserefno" value="{{$caserefno}}"> --}}
                        <div class="form-body">
                            <h5 class="card-title">@lang('dependantsProfile.title')</h5>
                            <hr>
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
    
                            @if (!empty($otinfo))
                            @foreach($otinfo as $key => $oti)
                            <div class="row" id="ot_list">
                                <div class="col-md-12">
                                    <div id="ot_accordion{{ $key }}" role="tablist" aria-multiselectable="true">
                                        <div class="card m-b-0">
                                            <div class="card-header" role="tab" id="otinfo">
                                                <h6 class="card-subtitle">
                                                    @if ($oti->name != '')
                                                    <a class="collapsed link" data-toggle="collapse" data-parent="#ot_accordion{{ $key }}" href="#ot_collapse{{ $key }}" aria-expanded="false" aria-controls="collapseTwo2">
                                                        @lang('dependantsProfile.title') ({{$oti->idno}})
                                                    </a>
                                                       
                                                    @endif
                                                    {{-- <button type="button" id="btn_del_ot{{ $key }}" class="close btn_del_ot" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button> --}}
                                                </h6>
                                            </div>
                                            <div id="ot_collapse{{ $key }}" class="collapse" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="row">       
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                    <label class="control-label">@lang('dependantsProfile.attr.ot_name')</label>
                                                                    @if(!empty($oti) && $oti->name !='')
                                                                        <input type="text" id="name" name="name[]" value="{{$oti->name}}" class="form-control" required>
                                                                    @else
                                                                        <input type="text" id="name" name="name[]" value="" class="form-control" required>
                                                                    @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                    <label class="control-label">@lang('dependantsProfile.attr.id_type')
                                                                    </label>
                                                                    <select id="idtype{{ $key }}" class="form-control idtype" value="@if(!empty($oti)){{$oti->idtype}} @endif" name="idtype[]">
                                                                    <option value="">Please select</option>
                                                                    @foreach($idtype as $id)
                                                                    @if (!empty($oti) && $id->refcode == $oti->idtype)
                                                                    <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                                                    @else
                                                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                    <label class="control-label">@lang('dependantsProfile.attr.id_no')</label>
                                                                    @if(!empty($oti) && $oti->idno !='')
                                                                        <input type="text" id="idno" name="idno[]" value="{{ $oti->idno }}" class="form-control" required>
                                                                    @else
                                                                        <input type="text" id="idno" name="idno[]" value="" class="form-control" required>
                                                                    @endif
                                                            </div>
                                                        </div>        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3" id="relay{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.relationship')</label>
                                                                    <select class="form-control relationship" name="relationship[]" id="relationship{{ $key }}"> 
                                                                    <option value="">Please select</option>
                                                                    @foreach($relation as $rel)
                                                                    @if (!empty($oti) && $oti->relationship == $rel->refcode)
                                                                    <option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>
                                                                    @else
                                                                    <option value="{{$rel->refcode}}">{{$rel->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3" id="otstatus{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.status')</label>
                                                                <select class="form-control ots" name="otsts[]" id="ots{{ $key }}"> 
                                                                    <option value="">Please select</option>
                                                                    @foreach($otsts as $ot)
                                                                    @if (!empty($oti) && $oti->otsts == $ot->refcode)
                                                                    <option value="{{$ot->refcode}}" selected>{{$ot->descen}}</option>
                                                                    @else
                                                                    <option value="{{$ot->refcode}}">{{$ot->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                        <!-- Condition based on relationship, OT Status & ID Type = SSN -->
                                                    <div class="row">
                                                        <!-- Date Of Birth if relationship with OB = child -->
                                                        <div class="col-md-3" id="date_birth{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.dateOfBirth')</label>
                                                                @if(!empty($oti) && $oti->dob !='')
                                                                    <input type="date" id="dob{{ $key }}" name="dob[]" value="{{substr($oti->dob,0,4)}}-{{substr($oti->dob,4,2)}}-{{substr($oti->dob,6,2)}}" class="form-control date_birth">
                                                                @else
                                                                    <input type="date" id="dob{{ $key }}" name="dob[]" value="" class="form-control date_birth">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Demised Date if OT Status = Demised -->
                                                        <div class="col-md-3" id="demised_date{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.date_death')</label>
                                                                @if(!empty($oti) && $oti->dodeath !='')
                                                                    <input type="date" id="dodeath{{ $key }}" name="dodeath[]" value="{{substr($oti->dodeath,0,4)}}-{{substr($oti->dodeath,4,2)}}-{{substr($oti->dodeath,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="dodeath{{ $key }}" name="dodeath[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
    
                                                        <!-- Eligibility start Date -->
                                                        {{--<div class="col-md-4" id="eligibility_start">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.eligibility_start')</label>
                                                                @if(!empty($oti) && $oti->eligibilitystart !='')
                                                                    <input type="date" id="eligibilitystart" name="eligibilitystart[]" value="{{substr($oti->eligibilitystart,0,4)}}-{{substr($oti->eligibilitystart,4,2)}}-{{substr($oti->eligibilitystart,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                            
                                                        <!-- Eligibility End Date -->
                                                        <div class="col-md-4" id="eligibility_end">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.eligibility_end')</label>
                                                                @if(!empty($oti) && $oti->eligibilityend !='')
                                                                    <input type="date" id="eligibilityend" name="eligibilityend[]" value="{{substr($oti->eligibilityend,0,4)}}-{{substr($oti->eligibilityend,4,2)}}-{{substr($oti->eligibilityend,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>--}}
                                                        <!-- Passport Expired Date if ID Type = SSN -->
                                                        <div class="col-md-3" id="passport_expired{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.passport_expired')
                                                                </label>
                                                                @if(!empty($oti) && $oti->passportexp !='')
                                                                    <input type="date" id="passportexp" name="passportexp[]" value="{{substr($oti->passportexp,0,4)}}-{{substr($oti->passportexp,4,2)}}-{{substr($oti->passportexp,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="passportexp" name="passportexp[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- Disablity either Before or After death if OT Status == disabled -->
                                                        <div class="col-md-3" id="disability_beforeafter{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.disability_beforeAfter_death')</label>
                                                                <select class="form-control" name="disablewhen[]" id="disablewhen{{ $key }}">           
                                                                    <option value=''>Please select</option>
                                                                    @foreach($disable as $dis)
                                                                    @if (!empty($oti) && $oti->disablewhen == $dis->refcode)
                                                                        <option value="{{$dis->refcode}}" selected>{{$dis->descen}}</option>
                                                                    @else
                                                                        <option value="{{$dis->refcode}}">{{$dis->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">                      
                                                        <!--In Edah -->
                                                        <div class="col-md-3" id="in_edah{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.edah')</label>
                                                                <select class="form-control" name="edah[]" id="edah{{ $key }}">
                                                                    <option value=''>Please select</option>
                                                                    @if (!empty($oti) && $oti->edah == 'Y')
                                                                    <option value='Y' selected>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @elseif (!empty($oti) && $oti->edah == 'N')
                                                                    <option value='Y' >@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N' selected>@lang('dependantsProfile.attr.no')</option>
                                                                    @else
                                                                    <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Date of Married with OB -->
                                                        <div class="col-md-3" id="married_ob{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.date_marriedOb')</label>
                                                                @if(!empty($oti) && $oti->marriedobdate !='')
                                                                    <input type="date" id="marriedobdate{{ $key }}" name="marriedobdate[]" value="{{substr($oti->marriedobdate,0,4)}}-{{substr($oti->marriedobdate,4,2)}}-{{substr($oti->marriedobdate,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="marriedobdate{{ $key }}" name="marriedobdate[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">                      
                                                        <!-- Married Date if OT Status = Married && Relation with OB == Child/Siblings -->
                                                        <div class="col-md-3" id="married_date{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.married_date')</label>
                                                                @if(!empty($oti) && $oti->marrieddate !='')
                                                                    <input type="date" id="marrieddate{{ $key }}" name="marrieddate[]" value="{{substr($oti->marrieddate,0,4)}}-{{substr($oti->marrieddate,4,2)}}-{{substr($oti->marrieddate,6,2)}}" class="form-control">
                                                                @else
                                                                    <input type="date" id="marrieddate{{ $key }}" name="marrieddate[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- Registered Married is the same with married date -->
                                                        <div class="col-md-3" id="registered_married{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.registered_married')</label>
                                                                <select class="form-control" name="regmarried[]" id="regmarried{{ $key }}">
                                                                    <option value=''>Please select</option>
                                                                    @if (!empty($oti) && $oti->regmarried == 'Y')
                                                                    <option value='Y' selected>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @elseif (!empty($oti) && $oti->regmarried == 'N')
                                                                    <option value='Y' >@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N' selected>@lang('dependantsProfile.attr.no')</option>
                                                                    @else
                                                                    <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                        <!-- Disability if relation OB & OT == Child -->
                                                        {{-- <div class="col-md-4" id="disability_i{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.disability')</label>
                                                                <select class="form-control" name="disability[]" id="disability{{ $key }}">
                                                                        <option value=''>Please select</option>
                                                                        @if (!empty($oti) && $oti->disability == 'Y')
                                                                        <option value='Y' selected>@lang('dependantsProfile.attr.yes')</option>
                                                                        <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                        @elseif (!empty($oti) && $oti->disability == 'N')
                                                                        <option value='Y' >@lang('dependantsProfile.attr.yes')</option>
                                                                        <option value='N' selected>@lang('dependantsProfile.attr.no')</option>
                                                                        @else
                                                                        <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                                                                        <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                        @endif
                                                                    </select> 
                                                            </div>
                                                        </div> --}}
                                                        
    
                                                        <!-- Still Study appear when choose Yes -->
                                                        {{-- <div class="col-md-4" id="still_study{{ $key }}">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.still_study')</label>
                                                                <select class="form-control stillstudy" name="still_study[]" id="still_study_input{{ $key }}">
                                                                    <option value=''>Please select</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div> --}}                       
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.address')</label>
                                                                @if(!empty($oti) && $oti->add1 !='')
                                                                <input type="text" id="add1" name="add1[]" value="{{ $oti->add1 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add1" name="add1[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                @if(!empty($oti) && $oti->add2 !='')
                                                                <input type="text" id="add2" name="add2[]" value="{{ $oti->add2 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add2" name="add2[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                @if(!empty($oti) && $oti->add3 !='')
                                                                <input type="text" id="add3" name="add3[]" value="{{ $oti->add3 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add3" name="add3[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.city')</label>
                                                                @if(!empty($oti) && $oti->city !='')
                                                                <input type="text" id="city" name="city[]" value="{{ $oti->city }}" class="form-control">
                                                                @else
                                                                <input type="text" id="city" name="city[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.state')</label>
                                                                <select name='statecode[]' id='statecode' class='form-control'>
                                                                    <option value="">Please select</option>
                                                                    @foreach($state as $s)
                                                                    @if(!empty($oti) && $oti->statecode == $s->refcode)
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
                                                                <label class="control-label">@lang('dependantsProfile.attr.postcode')</label>
                                                                @if(!empty($oti) && $oti->postcode !='')
                                                                <input type="text" id="postcode" name="postcode[]" value="{{ $oti->postcode }}" class="form-control">
                                                                @else
                                                                <input type="text" id="postcode" name="postcode[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.po_box')</label>
                                                                @if(!empty($oti) && $oti->pobox !='')
                                                                <input type="text" id="pobox" name="pobox[]" value="{{ $oti->pobox }}" class="form-control">
                                                                @else
                                                                <input type="text" id="pobox" name="pobox[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.locked_bag')</label>
                                                                @if(!empty($oti) && $oti->lockedbag !='')
                                                                <input type="text" id="lockedbag" name="lockedbag[]" value="{{ $oti->lockedbag }}" class="form-control">
                                                                @else
                                                                <input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.wdt')</label>
                                                                @if(!empty($oti) && $oti->wdt !='')
                                                                <input type="text" id="wdt" name="wdt[]" value="{{ $oti->wdt }}" class="form-control">
                                                                @else
                                                                <input type="text" id="wdt" name="wdt[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.telephoneNo')</label>
                                                                @if(!empty($oti) && $oti->telno !='')
                                                                <input type="text" id="telno" name="telno[]" value="{{ $oti->telno }}" class="form-control">
                                                                @else
                                                                <input type="text" id="telno" name="telno[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.mobileNo')</label>
                                                                @if(!empty($oti) && $oti->mobileno !='')
                                                                <input type="text" id="mobileno" name="mobileno[]" value="{{ $oti->mobileno }}" class="form-control">
                                                                @else
                                                                <input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.email')</label>
                                                                @if(!empty($oti) && $oti->email !='')
                                                                <input type="text" id="email" name="email[]" value="{{ $oti->email }}" class="form-control">
                                                                @else
                                                                <input type="text" id="email" name="email[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.ot_guardian')</label>
                                                                <select class="form-control" name="guardian[]">
                                                                    <option>Please select</option>
                                                                    @if (!empty($oti) && $oti->guardian == 'Y')
                                                                    <option value='Y' selected>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @elseif (!empty($oti) && $oti->guardian == 'N')
                                                                    <option value='Y' >@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N' selected>@lang('dependantsProfile.attr.no')</option>
                                                                    @else
                                                                    <option value='Y'>@lang('dependantsProfile.attr.yes')</option>
                                                                    <option value='N'>@lang('dependantsProfile.attr.no')</option>
                                                                    @endif
                                                                </select> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                    
                                                        {{--<div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.otobdependence')</label>
                                                                @if(!empty($oti) && $oti->obotdependence !='')
                                                                <input type="text" id="obotdependence" name="obotdependence[]" value="{{ $oti->obotdependence }}" class="form-control">
                                                                @else
                                                                <input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.qualification')</label>
                                                                @if(!empty($oti) && $oti->qualification !='')
                                                                <input type="text" id="qualification" name="qualification[]" value="{{ $oti->qualification }}" class="form-control">
                                                                @else
                                                                <input type="text" id="qualification" name="qualification[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>--}}
                                                    {{--<div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.eligibility')</label>
                                                                @if(!empty($oti) && $oti->eligibility !='')
                                                                <input type="text" id="eligibility" name="eligibility[]" value="{{ $oti->eligibility }}" class="form-control">
                                                                @else
                                                                <input type="text" id="eligibility" name="eligibility[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('dependantsProfile.attr.pendingpay')</label>
                                                                @if(!empty($oti) && $oti->pendingpay !='')
                                                                <input type="text" id="pendingpay" name="pendingpay[]" value="{{ $oti->pendingpay }}" class="form-control">
                                                                @else
                                                                <input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group ">
                                                                <label class="control-label">@lang('dependantsProfile.attr.maritalstatus')</label>
                                                                <select class="form-control" name="maritalsts[]"> 
                                                                @foreach($maritalsts as $id)
                                                                @if (!empty($oti) && $oti->maritalsts == $id->refcode)
                                                                <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                                                @else
                                                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                                @endif
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>--}}
    
                                                    <div id="yes_dependantstudy{{ $key }}" class="dependant_study_box">
                                                    <h5 class="card-title">@lang('dependantStudy.title')</h5>
                                                    <hr>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.study_start_date')</label>
                                                                    @if(!empty($oti) && $oti->studystartdate !='')
                                                                    <input type="date" id="studystartdate{{ $key }}" name="studystartdate[]" value="{{substr($oti->studystartdate,0,4)}}-{{substr($oti->studystartdate,4,2)}}-{{substr($oti->studystartdate,6,2)}}" class="form-control">
                                                                    @else
                                                                    <input type="date" id="studystartdate{{ $key }}" name="studystartdate[]" value="" class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.study_end_date')</label>
                                                                    @if(!empty($oti) && $oti->studyenddate !='')
                                                                    <input type="date" id="studyenddate{{ $key }}" name="studyenddate[]" value="{{substr($oti->studyenddate,0,4)}}-{{substr($oti->studyenddate,4,2)}}-{{substr($oti->studyenddate,6,2)}}" class="form-control">
                                                                    @else
                                                                    <input type="date" id="studyenddate{{ $key }}" name="studyenddate[]" value="" class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.status')</label>
                                                                    <select class="form-control" name="edulvl[]" id="edulvl{{ $key }}"> 
                                                                        <option value="">Please select</option>
                                                                        @foreach($edulvl as $id)
                                                                        @if (!empty($oti) && $oti->edulvl == $id->refcode)
                                                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                                                        @else
                                                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                                        @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.edu_level')</label>
                                                                    <select class="form-control edulv" name="edulvl[]" id="edulvl"> 
                                                                        <option value="">Please select</option>    
                                                                        @foreach($edulvl as $id)
                                                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" id="eduother{{ $key }}" class="edu_other_box">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.pls_specify')</label>
                                                                    @if(!empty($oti) && $oti->eduothers !='')
                                                                    <input type="text" id="eduothers{{ $key }}" name="eduothers[]" value="{{ $oti->eduothers }}" class="form-control">
                                                                    @else
                                                                    <input type="text" id="eduothers{{ $key }}" name="eduothers[]" value="" class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.course_name')</label>
                                                                    @if(!empty($oti) && $oti->coursename !='')
                                                                    <input type="text" id="coursename{{ $key }}" name="coursename[]" value="{{ $oti->coursename }}" class="form-control">
                                                                    @else
                                                                    <input type="text" id="coursename{{ $key }}" name="coursename[]" value="" class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">@lang('dependantStudy.attr.inst_univer_name')
                                                                    </label>
                                                                    @if(!empty($oti) && $oti->uniname !='')
                                                                    <input type="text" id="uniname{{ $key }}" name="uniname[]" value="{{ $oti->uniname }}" class="form-control">
                                                                    @else
                                                                    <input type="text" id="uniname{{ $key }}" name="uniname[]" value="" class="form-control">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
    
                            @else
                                @include('scheme.noticeDeath.PK.dependant_add')
                            @endif
                        </div>
                        <div id="add_ot_accordian">
                        </div>
                        <div class="form-actions text-right">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success"> 
                            @lang('insuredPerson.save')</button>
                            <button type="button" id="btn_add_ot" class="btn btn-sm waves-effect waves-light btn-info">ADD DEPENDANT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Confirm modal --}}
<div class="modal fade" id="deletemodalot" tabindex="-1" role="dialog" aria-hidden="true">
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
    
@php($no_ot = 0)
@php($otinfo == null ? $no_ot = 0 : $no_ot = count($otinfo))

<script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
    
<script>
$(document).ready(function() {

    // alert('Jquery detected');
    var no_ot = {!! $no_ot !!};
    //alert(no_ot);

    // FOR CHECKING
        if(no_ot > 0){
            var i = no_ot-1;
            var ot_data = {!! json_encode($otinfo) !!};

            if(ot_data){
                $.each(ot_data, function(index,value){
                    // alert (index);
                    // check the idtype
                    if (value.idtype == '05') {
                        $('#passport_expired'+index).show();
                    }
                    else {
                        $('#passportexp'+index).prop('value', '');
                        $('#passport_expired'+index).hide();
                    }
                    
                    // ------------------------------------ CHECK RELATIONSHIP -------------------------------------


                    if (value.relationship == '1') {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    if (value.relationship == '1' && value.otsts == '6') {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).show();
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    if (value.relationship == '1' && value.otsts == '5') {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).show();
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    if (value.relationship == '1' && value.otsts !== '5') {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    // ----------------- RELATIONSHIP = WIDOW --------------------
                    if (value.relationship == '2') {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).show();
                        $('#registered_married'+index).show();
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#yes_dependantstudy'+index).hide();
                        $('#studystartdate'+index).prop('value', '');
                        $('#studyenddate'+index).prop('value', '');
                        $('#study_status'+index).prop('value', '');
                        $('#edulvl'+index).prop('value', '');
                        $('#eduothers'+index).prop('value', '');
                        $('#coursename'+index).prop('value', '');
                        $('#uniname'+index).prop('value', '');
                    }
                    if (value.relationship == '2' && (value.otsts == '2' || value.otsts == '5')) {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).show();
                        $('#registered_married'+index).show();
                        $('#married_date'+index).show();
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');

                    }
                    if (value.relationship == '2' && value.otsts == '1') {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).show();
                        $('#registered_married'+index).show();
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).show();
                    }

                    // ----------------- RELATIONSHIP = WIDOWER --------------------
                    if (value.relationship == '3') {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                        $('#registered_married'+index).show();
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');

                    }
                    if (value.relationship == '3' && (value.otsts == '2' || value.otsts == '5')) {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                        $('#registered_married'+index).show();
                        $('#married_date'+index).show();
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');

                    }
                    if (value.relationship == '3' && value.otsts == '1') {
                        $('#married_ob'+index).show();
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                        $('#registered_married'+index).show();
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).show();
                    }
                    // ----------------- RELATIONSHIP = SIBLINGS --------------------
                    if (value.relationship == '8') {
                        $('#edah'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#otstatus'+index).show();
                        $('#married_date'+index).hide();
                        $('#ots'+index).prop('value', '');
                    }
                    if (value.relationship == '8' && (value.otsts == '2' || value.otsts == '5')) {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    if (value.relationship == '8' && (value.otsts == '1')) {
                        $('#otstatus'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).show();
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    if (value.relationship == '4' || value.relationship == '5' || value.relationship == '6' || value.relationship == '7') {
                        $('#otstatus'+index).hide();
                        $('#ots'+index).prop('value', '');
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                        $('#yes_dependantstudy'+index).hide();
                        $('#studystartdate'+index).prop('value', '');
                        $('#studyenddate'+index).prop('value', '');
                        $('#study_status'+index).prop('value', '');
                        $('#edulvl'+index).prop('value', '');
                        $('#eduothers'+index).prop('value', '');
                        $('#coursename'+index).prop('value', '');
                        $('#uniname'+index).prop('value', '');
                    }
                   

                    // ---------------------------- CHECK DEPENDANT INFO -------------------------------------

                    var a = $('#dob'+index).val();
                    var age = getAge(a);
                    // console.log(age);
                    // console.log(status);

                    

                    if (value.relationship == '1' && value.otsts == '4' && (age <= 21 && age >= 18)) {
                        $('#yes_dependantstudy'+index).show();
                        $('#registered_married'+index).hide();
                        $('#regmarried'+index).prop('value', '');
                        $('#married_date'+index).hide();
                        $('#marrieddate'+index).prop('value', '');
                        $('#disability_beforeafter'+index).hide();
                        $('#disablewhen'+index).prop('value', '');
                        $('#demised_date'+index).hide();
                        $('#dodeath'+index).prop('value', '');
                        $('#married_ob'+index).hide();
                        $('#marriedobdate'+index).prop('value', '');
                        $('#in_edah'+index).hide();
                        $('#edah'+index).prop('value', '');
                    }
                    else{
                        $('#yes_dependantstudy'+index).hide();
                        $('#studystartdate'+index).prop('value', '');
                        $('#studyenddate'+index).prop('value', '');
                        $('#study_status'+index).prop('value', '');
                        $('#edulvl'+index).prop('value', '');
                        $('#eduothers'+index).prop('value', '');
                        $('#coursename'+index).prop('value', '');
                        $('#uniname'+index).prop('value', '');
                    }
                })
            }
        }
            else 
        {
            var i = 0;
        }

        function getAge(dateString){
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                age--;
            }
            console.log(age);
            return age;
        }

        // --------------------------------------------------------- TO CHANGE IDTYPE VALUE -----------------------------------------------------------------

        $('#containerx').on('change','.idtype',function() {
            var current_id = event.target.id;
            var split_id = current_id.split("e");
            var id = split_id[1];
            // alert(id);

            if (this.value == '05') {
                $('#passport_expired'+id).show();
            }
            else {
                $('#passportexp'+id).prop('value', '');
                $('#passport_expired'+id).hide();
            }
        });

        // --------------------------- TO DISPLAY DEPENDANT STUDY INFO ------------------------------

            
        $('#containerx').on('change','.date_birth',function() {
            var current_id = event.target.id;
            var split_id = current_id.split("b");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('.ots').val()
            var relay = $('.relationship').val()
            var age = getAge(a);

            if (status == '4' && relay == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
            }
            else{
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });        

        // ---------------------- ON CHANGE WHEN CLICK RELATIONSHIP --------------------------

        $('#containerx').on('change','.relationship',function() {
            var current_id = event.target.id;
            var split_id = current_id.split("p");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('.ots').val()
            var dob = $('.date_birth').val()
            var age = getAge(dob);
            

            // check still study
            if (status == '4' && a == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
            }
            if (status !== '4' && a !== '1' && (age >= 21 && age <= 18)){
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }

            // ----------------- RELATIONSHIP = CHILD --------------------

            if (a == '1') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '1' && otstatus == '6') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).show();
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '1' && otstatus == '5') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '1' && otstatus !== '5') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            // ----------------- RELATIONSHIP = WIDOW --------------------
            if (a == '2') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            if (a == '2' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            if (a == '2' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            }

            // ----------------- RELATIONSHIP = WIDOWER --------------------
            if (a == '3') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            if (a == '3' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            if (a == '3' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            }
            // ----------------- RELATIONSHIP = SIBLINGS --------------------
            if (a == '8') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '8' && (otstatus == '1')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '8' && (otstatus == '6')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus'+id).hide();
                $('#ots'+id).prop('value', '');
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });

        $('#containerx').on('change','.ots',function() {
            var current_id = event.target.id;
            var split_id = current_id.split("s");
            var id = split_id[1];

            var otstatus = $(this).val()
            var dob = $('.date_birth').val()
            var a = $('.relationship').val()
            var age = getAge(dob);
            

            // check still study
            if (otstatus == '4' && a == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
            }
            if (otstatus !== '4' && a !== '1' && (age >= 21 && age <= 18)) {
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }

            if (a == '1' && otstatus == '6') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).show();
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '1' && otstatus == '5') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }

            if (a == '2' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            if (a == '2' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            
            }

            if (a == '3' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            if (a == '3' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            
            }
            if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '8' && (otstatus == '1')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '8' && (otstatus !== '1' && otstatus !== '2' && otstatus !== '5')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus'+id).hide();
                $('#ots'+id).prop('value', '');
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });

        $('#containerx').on('change','.edu',function() {
            var current_id = event.target.id;
            var split_id = current_id.split("_");
            var id = split_id[1];

            if (this.value == '6') {
                console.log(this.value);
                $('#eduother'+id).show();
            }
            else {
                console.log(this.value);
                $('#eduother'+id).hide();
                $('#eduothers'+id).prop('value', '');
            }
        });


        // ----------------------------- TO DISPLAY DEPENDANT STUDY --------------------------------------

        // $('#containerx').on('change','.stillstudy',function() {
        //     var current_id = event.target.id;
        //     var split_id = current_id.split("ut");
        //     var id = split_id[1];

        //     if (this.value == 'yes') {
        //         // alert('Cuba');
        //         $('#yes_dependantstudy'+id).show();
        //         $('#still_study_input'+id).prop('value', 'yes');
        //     }
        //     else{
        //         $('#yes_dependantstudy'+id).hide();
        //         $('#still_study_input'+id).prop('value', 'no');
        //         $('#study_status'+id).prop('value', '');
        //         $('#studystartdate'+id).prop('value', '');
        //         $('#studyenddate'+id).prop('value', '');
        //         $('#uniname'+id).prop('value', '');
        //         $('#coursename'+id).prop('value', '');
        //         $('#edulvl'+id).prop('value', '');
        //         $('#eduothers'+id).prop('value', '');
        //     }
            
        // });

        // --------------------------- Calculate age -----------------------------------------

        function getAge(dateString){
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                age--;
            }
            console.log(age);
            return age;
        }
            
        var html;
        // alert('Jquery detected');

        // --------------------------- FOR APPEND OT -------------------------------------

    $('#btn_add_ot').click(function(){  

        i++;

        html = '<div class="row" id="ot_list"><div class="col-md-12"><div id="ot_accordion'+i+'" role="tablist" aria-multiselectable="true">';    
        html += '<div class="card m-b-0"><div class="card-header" role="tab" id="otinfo"><h6 class="card-subtitle"><a class="collapsed link" data-toggle="collapse" data-parent="#ot_accordion'+i+'" href="#ot_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('dependantsProfile.title')</a><button type="button" id="btn_del_ot'+i+'" class="close btn_del_ot" aria-label="Close"><span aria-hidden="true">&times;</span></button></h6></div>';
        html += '<div id="ot_collapse'+i+'" class="collapse" role="tabpanel"><div class="card-body"><div class="row"><div class="col-md-12"><div class="form-group">';
        html += '<label class="control-label">@lang('dependantsProfile.attr.ot_name')</label><input type="text" id="name" name="name[]" value="" class="form-control" required></div></div></div>';
        html += '<div class="row"><div class="col-md-3"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.id_type')</label><select id="idtype'+i+'" class="form-control idtype" value="" name="idtype[]"><option>Please select</option> @foreach($idtype as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach</select></div></div>';
        html += '<div class="col-md-3"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.id_no')</label><input type="text" id="idno" name="idno[]" value="" class="form-control" required> </div></div></div>';
        html += '<div class="row"><div class="col-md-3 relay_box" id="relay'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.relationship')</label><select class="form-control relationship" name="relationship[]" id="relationship'+i+'"><option>Please select</option> @foreach($relation as $rel) <option value="{{$rel->refcode}}">{{$rel->descen}}</option> @endforeach </select></div></div>';
        html += '<div class="col-md-3 otstatus_box" id="otstatus'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.status')</label><select class="form-control ots" name="otsts[]" id="ots'+i+'"><option value="">Please select</option> @foreach($otsts as $ot) <option value="{{$ot->refcode}}">{{$ot->descen}}</option> @endforeach </select></div></div></div>';
        html += '<div class="row"><div class="col-md-3 date_birth_box" id="date_birth'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.dateOfBirth')</label><input type="date" id="dob'+i+'" name="dob[]" value="" class="form-control date_birth"></div></div>';
        //html += '<div class="col-md-4" id="eligibility_start"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.eligibility_start')</label><input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control"></div></div>';
        //html += '<div class="col-md-4" id="eligibility_end"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.eligibility_end')</label><input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control"></div></div></div>';
        html += '<div class="col-md-3 demised_date_box" id="demised_date'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.date_death')</label><input type="date" id="dodeath" name="dodeath[]" class="form-control"></div></div>';
        html += '<div class="col-md-3 passport_expired_box" id="passport_expired'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.passport_expired')</label><input type="date" id="passportexp" name="passportexp[]" class="form-control"></div></div>';
        html += '<div class="col-md-3 disability_beforeafter_box" id="disability_beforeafter'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.disability_beforeAfter_death')</label><select class="form-control" name="disablewhen[]" id="disablewhen"><option value="">Please select</option>@foreach($disable as $dis)<option value="{{$dis->refcode}}">{{$dis->descen}}</option>@endforeach</select></div></div></div>';
        html += '<div class="row"><div class="col-md-3 in_edah_box" id="in_edah'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.edah')</label><select class="form-control" name="edah[]" id="edah"><option value="">Please select</option><option value="Y">@lang('dependantsProfile.attr.yes')</option><option value="N">@lang('dependantsProfile.attr.no')</option></select></div></div>';
        html += '<div class="col-md-3 married_ob_box" id="married_ob'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.date_marriedOb')</label><input type="date" id="marriedobdate" name="marriedobdate[]" value="" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-3 married_date_box" id="married_date'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.married_date')</label><input type="date" id="marrieddate" name="marrieddate[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-3 registered_married_box" id="registered_married'+i+'"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.registered_married')</label><select class="form-control" id="regmarried" name="regmarried[]"><option>Please select</option><option value="Y">@lang('dependantsProfile.attr.yes')</option><option value="N">@lang('dependantsProfile.attr.no')</option></select></div></div></div>';

        html += '<div class="row"><div class="col-md-12"> <div class="form-group"><label class="control-label">Address</label><input type="text" id="add1" name="add1[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-12"><div class="form-group"><input type="text" id="add2" name="add2[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-12"><div class="form-group"><input type="text" id="add3" name="add3[]" value="" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.city')</label><input type="text" id="city" name="city[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.state')</label><select name="statecode[]" id="statecode" class="form-control"><option>Please select</option> @foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}</option> @endforeach </select></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.postcode')</label> <input type="text" id="postcode" name="postcode[]" value="" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.po_box')</label><input type="text" id="pobox" name="pobox[]" value="" class="form-control"></div> </div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.locked_bag')</label><input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.wdt')</label><input type="text" id="wdt" name="wdt[]" value="" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.telephoneNo')</label><input type="text" id="telno" name="telno[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.mobileNo')</label><input type="text" id="mobileno" name="mobileno[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.email')</label><input type="text" id="email" name="email[]" value="" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.ot_guardian')</label><select class="form-control" id="guardian" name="guardian[]"><option>Please select</option><option value="Y">@lang('dependantsProfile.attr.yes')</option><option value="N">@lang('dependantsProfile.attr.no')</option></select> </div></div></div>';
        //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.otobdependence')</label><input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control"></div></div>';
        //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.qualification')</label><input type="text" id="qualification" name="qualification[]" value="" class="form-control"></div></div></div>';
        //html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.eligibility')</label><input type="text" id="eligibility" name="eligibility[]" value="" class="form-control"></div></div>';
        //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantsProfile.attr.pendingpay')</label><input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control"> </div></div>';
        //html += '<div class="col-md-4"><div class="form-group "><label class="control-label">@lang('dependantsProfile.attr.maritalstatus')</label><select class="form-control" name="maritalsts[]"><option>Please select</option> @foreach($maritalsts as $id) <option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach</select></div></div>';

        html += '<div id="yes_dependantstudy'+i+'" class="dependant_study_box"><h5 class="card-title">@lang('dependantStudy.title')</h5><hr><div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.study_start_date')</label><input type="date" id="studystartdate" name="studystartdate[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.study_end_date')</label><input type="date" id="studyenddate" name="studyenddate[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.status')</label><select class="form-control" name="studysts[]"><option value="">Please select</option> @foreach($studysts as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select></div></div> </div>';
        html += '<div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.edu_level')</label><select class="form-control edu" name="edulvl[]" id="edulvl_'+i+'"> <option value="">Please select</option> @foreach($edulvl as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select></div></div>';
        html += '<div class="col-md-6 edu_other_box" id="eduother'+i+'"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.pls_specify')</label><input type="text" name="eduothers[]" id="eduothers" class="form-control"></div></div></div>';
        html += '<div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.course_name')</label><input type="text" id="coursename" name="coursename[]" value="" class="form-control"></div></div>';
        html += '<div class="col-md-6"><div class="form-group"><label class="control-label">@lang('dependantStudy.attr.inst_univer_name')</label><input type="text" id="uniname" name="uniname[]" value="" class="form-control"></div></div></div>';
    
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

            // Delete mc
        $('#containerx').on('click','.btn_del_ot',function(){
            var delete_id = $(this).attr('id');
            $('#deletemodalot').modal('show');
            $("#deletemodalot .modal-footer button").on('click', function(e) {
            var btn_id = e.target.id;
            if(btn_id == 'btn_delete'){
                $("#"+delete_id).closest("#ot_list").remove();
            }
        });
    });

});
</script>