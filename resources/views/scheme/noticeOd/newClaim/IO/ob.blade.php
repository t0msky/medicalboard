<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="obform" method="POST" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        {{-- <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label ">@lang('scheme/ob.attr.form34_receivedDate')</label><span class="required">*</span>
                                    <input type="date" id="form34" name="form34" value="" class="form-control clearFields" required>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <h5 class="card-title">@lang('insuredPerson.title')</h5>
                        <hr> --}}
                        @if(Session::get('messageob')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>
                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.name')</label>
                                    <span class="required">*</span>
                                    @if(!empty($obprofile) && $obprofile->name != '')
                                    <input type="text" id="name" name="name" value="{{ $obprofile->name }}" class="form-control clearFields" required>
                                    @elseif(!empty($obformassist) && $obformassist->name != '')
                                    <input type="text" id="name" name="name" value="{{ $obformassist->name }}" class="form-control clearFields" required>
                                    @else
                                    <input type="text" id="name" name="name" value="" class="form-control clearFields" required>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                        <div class="card">

                                            <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>@lang('scheme/ob.attr.id_type')</th>
                                                        <th>@lang('scheme/ob.attr.id_no')</th>
                                                    </tr>
                                                </thead>

                                                <tbody class='align-middle'>
                                                    @if(!empty($obprofile))
                                                    <tr>
                                                        @foreach($idtype as $id)
                                                        @if (!empty($obprofile) && $id->ref_code == $obprofile->idtype)
                                                        <td><input type="hidden" name="idtype" id="idtype" value="{{$obprofile->idtype}}" class="form-control" required>{{$id->desc_en}}</td>
                                                        @endif
                                                        @endforeach

                                                        @if(!empty($obprofile) && $obprofile->idno !='')
                                                        <td><input type="hidden" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >{{ $obprofile->idno }}</td>
                                                        @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                        <td><input type="hidden" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required>{{ $obformassist->idno }}</td>
                                                        @else
                                                        <td><input type="hidden" id="idno" name="idno" value="" class="form-control" required></td>
                                                        @endif
                                                    @endif
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                

                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.dateOfBirth')</label>
                                    @if(!empty($obprofile) && $obprofile->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($obprofile->dob,0,4)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,6,2)}}" class="form-control clearFields">
                                    @elseif(!empty($obformassist) && $obformassist->dob !='')
                                    <input type="date" id="dob" name="dob" value="{{substr($obformassist->dob,0,4)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,6,2)}}" class="form-control clearFields">
                                    @else
                                    <input type="date" id="dob" name="dob" value="" class="form-control clearFields">
                                    @endif

                                </div>
                            </div>
                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.race')</label>
                                    {{--  <input type="text" id="race" value="{{ $obprofile->race }}" class="form-control"> --}}
                                    <select class="form-control clearFields" name="race" id="race"> 
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        @foreach($race as $id)
                                        @if (!empty($obprofile) && $obprofile->race == $id->ref_code)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @elseif (!empty($obformassist) && $obformassist->race == $id->ref_code)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @else
                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.gender')</label>
                                    {{--  <input type="text" id="gender" value="{{ $obprofile->gender }}" class="form-control"> --}}
                                    <select class="form-control clearFields" name="gender">
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        @if (!empty($obprofile) && $obprofile->gender == 'F')
                                        <option value="F" selected>Female</option>
                                        <option value="M">Male</option>
                                        @elseif (!empty($obprofile) && $obprofile->gender == 'M')
                                        <option value="F">Female</option>
                                        <option value="M" selected>Male</option>
                                        @elseif (!empty($obformassist) && $obformassist->gender == 'F')
                                        <option value="F" selected>Female</option>
                                        <option value="M">Male</option>
                                        @elseif (!empty($obformassist) && $obformassist->gender == 'M')
                                        <option value="F">Female</option>
                                        <option value="M" selected>Male</option>
                                        @else
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.occupation_form34')</label>
                                    @if(!empty($obprofile) && $obprofile->occupation != '')
                                    <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="occupation" name="occupation" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.occupation')</label>
                                    <select class="form-control clearFields" name="occucode" id="occucode" onchange="statechange()"> 
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        @foreach($occucode as $id)
                                        @if (!empty($obprofile) && $obprofile->occucode == $id->ref_code)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @else
                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.sub_occupation')</label>
                                    <select name="suboccupation" id="suboccupation" class="form-control" onchange='fieldchange()'required>
                                        <option value=""></option>
                                        @foreach($suboccupation as $so)
                                        @if (!empty($obprofile) && $obprofile->suboccupation == $so->so_occcode)
                                        <option value="{{$so->so_occcode}}" selected>{{$so->so_occcode}}</option>
                                        @elseif (!empty($obformassist) && $obformassist->suboccupation == $so->so_occcode)
                                        <option value="{{$so->so_occcode}}" selected>{{$so->so_occcode}}</option>
                                        @else
                                        <option value="{{$so->so_occcode}}">{{$so->so_occcode}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.sub_occupation')</label>
                                    @if(!empty($obprofile) && $obprofile->suboccucode != '')
                                    <input type="text" id="suboccucode" name="suboccucode" value="{{ $obprofile->suboccucode }}" class="form-control">
                                    @elseif(!empty($obformassist) && $obformassist->suboccucode != '')
                                    <input type="text" id="suboccucode" name="suboccucode" value="{{ $obformassist->suboccucode }}" class="form-control">
                                    @else
                                    <input type="text" id="suboccucode" name="suboccucode" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.sub_list')</label>
                                    @if(!empty($obprofile) && $obprofile->suboccucodelist != '')
                                    <input type="text" id="suboccucodelist" name="suboccucodelist" value="{{ $obprofile->suboccupation }}" class="form-control">
                                    @elseif(!empty($obformassist) && $obformassist->suboccucodelist != '')
                                    <input type="text" id="suboccucodelist" name="suboccucodelist" value="{{ $obformassist->suboccupation }}" class="form-control">
                                    @else
                                    <input type="text" id="suboccucodelist" name="suboccucodelist" value="" class="form-control">
                                    @endif
                                </div>
                         
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postal_address')</label>
                                    @if(!empty($obprofile) && $obprofile->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{ $obprofile->add1 }}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                 {{--  <label>@lang('scheme/ob.attr.postal_address2')</label> --}}
                                 @if(!empty($obprofile) && $obprofile->add2 != '')
                                 <input type="text" id="add2" name="add2" value="{{ $obprofile->add2 }}" class="form-control clearFields">
                                 @else
                                 <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                 @endif
                             </div>
                         </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label>@lang('scheme/ob.attr.postal_address3')</label> --}}
                                @if(!empty($obprofile) && $obprofile->add3 != '')
                                <input type="text" id="add3" name="add3" value="{{ $obprofile->add3 }}" class="form-control clearFields">
                                @else
                                <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                <select name='state' id='state' class='form-control'>
                                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                    @foreach($state as $s)
                                    @if(!empty($obprofile) && $obprofile->statecode == $s->ref_code)
                                    <option>Please Select</option>
                                    <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                    @else
                                    <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.city')</label>
                                @if(!empty($obprofile) && $obprofile->city != '')
                                <input type="text" id="city" name="city" value="{{ $obprofile->city }}" class="form-control clearFields">
                                @else
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.postcode')</label>
                                @if(!empty($obprofile) && $obprofile->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $obprofile->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.pobox')</label>
                                @if(!empty($obprofile) && $obprofile->pobox != '')
                                <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control clearFields">
                                @else
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.lockedbag')</label>
                                @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control clearFields">
                                @else
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.wdt')</label>
                                @if(!empty($obprofile) && $obprofile->wdt != '')
                                <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control clearFields">
                                @else
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.telNo')</label>
                                @if(!empty($obprofile) && $obprofile->telno != '')
                                <input type="text" id="telno" name="telno" value="{{ $obprofile->telno }}" class="form-control clearFields">
                                @else
                                <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.mobileNo')</label>
                                @if(!empty($obprofile) && $obprofile->mobileno != '')
                                <input type="text" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" class="form-control clearFields">
                                @else
                                <input type="text" id="mobileno" name="mobileno" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.email')</label>
                                @if(!empty($obprofile) && $obprofile->email != '')
                                <input type="email" id="email" name="email" value="{{ $obprofile->email }}" class="form-control clearFields">
                                @else
                                <input type="email" id="email" name="email" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.citizen')</label>
                                {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }} @endif" class="form-control"> --}}
                                <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                    @foreach($national as $N)
                                    @if (!empty($obprofile) && $obprofile->nationality == $N->ref_code)
                                    <option value="{{$N->ref_code}}" selected>{{$N->desc_en}}</option>
                                    @else
                                    <option value="{{$N->ref_code}}">{{$N->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('noticetype.back')</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            <script>
                function submitform(){
                    $('#reset').find('form').submit();
                    $('.clearFields').val('');
                }
            </script>



