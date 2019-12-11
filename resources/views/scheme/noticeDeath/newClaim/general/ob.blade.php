<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="/obform_sco" method="POST" id="reset">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            {{-- <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label ">@lang('scheme/ob.attr.form34_receivedDate')</label><span class="required">*</span>
                                        <input type="date" id="form34" name="form34" value="" class="form-control clearFields ">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <h5 class="card-title">@lang('scheme/ob.title')</h5>
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
                                        <label class="control-label">@lang('scheme/ob.attr.name')</label><span class="required">*</span>
                                        @if(!empty($obprofile) && $obprofile->name !='')
                                        <input type="text" id="name" name="name" value="{{ $obprofile->name }}" class="form-control clearFields " required>
                                        @elseif(!empty($obformassist) && $obformassist->name !='')
                                        <input type="text" id="name" name="name" value="{{ $obformassist->name }}" class="form-control clearFields" required>
                                        @else
                                        <input type="text" id="name" name="name" value="" class="form-control" required>
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
                                                <tr> 
                                                    @foreach($idtype as $id)
                                                    @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                                    <td><input type="hidden" id="idtype" name="idtype" value="{{$obprofile->idtype}}" class="form-control" >{{$id->descen}}</td>
                                                    @endif
                                                    @endforeach
                                                    @if(!empty($obprofile) && $obprofile->idno !='')
                                                    <td>  <input type="hidden" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >{{ $obprofile->idno }}</td>
                                                    @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                    <td>  <input type="hidden" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >{{ $obformassist->idno }}</td>
                                                    @else
                                                    <td>  <input type="hidden" id="idno" name="idno" value="" class="form-control" required ></td>
                                                    @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class='row'>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('ob.attr.id_type')</label> <span class="required">*</span> --}}
                                       {{-- <input id="idtype" value="{{ $obprofile->idtype }}" class="form-control"> --}}
    
                                        {{-- <select id="idtype" class="form-control" value="@if(!empty($obprofile)){{$obprofile->idtype}} @endif" name="idtype" required> --}}
                                                {{-- <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option--> --}}
                                            {{-- @foreach($idtype as $id)
                                            @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @else
                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                            @endif
                                            @endforeach --}}
                                        {{-- </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('ob.attr.id_no')</label><span class="required">*</span>
                                        @if(!empty($obprofile) && $obprofile->idno !='')
                                        <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                        <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                        @elseif(!empty($obformassist) && $obformassist->idno !='')
                                        <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                        <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                        @else
                                        <input type="text" id="idno" name="idno" value="" class="form-control" required >
                                        <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                            <div class='row'>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.dateOfBirth')</label><span class="required">*</span>
                                        @if(!empty($obprofile) && $obprofile->dob !='')
                                        <input type="date" id="dob" name="dob" value="{{substr($obprofile->dob,0,4)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,6,2)}}" class="form-control clearFields" required>
                                        @elseif(!empty($obformassist) && $obformassist->dob !='')
                                        <input type="date" id="dob" name="dob" value="{{substr($obformassist->dob,0,4)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,6,2)}}" class="form-control clearFields" required>
                                        @else
                                        <input type="date" id="dob" name="dob" value="" class="form-control">
                                        @endif
    
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.race')</label>
                                       {{--  <input type="text" id="race" value="{{ $obprofile->race }}" class="form-control"> --}}
                                        <select class="form-control" name="race"> 
                                                <!--option value="">@if(!empty($obprofile)){{ $obprofile->race }} @endif</option-->
                                            @foreach($race as $id)
                                            @if (!empty($obprofile) && $obprofile->race == $id->refcode)
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
                                        <label class="control-label">@lang('scheme/ob.attr.gender')</label>
                                       {{--  <input type="text" id="gender" value="{{ $obprofile->gender }}" class="form-control"> --}}
                                        <select class="form-control" name="gender">
                                    <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                            @if (!empty($obprofile) && $obprofile->gender == 'F')
                                            <option value="F" selected>Female</option>
                                             <option value="M">Male</option>
                                             @elseif (!empty($obprofile) && $obprofile->gender == 'M')
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
                                        @if(!empty($obprofile) && $obprofile->occupation !='')
                                        <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control clearFields" >
                                        @elseif(!empty($obformassist) && $obformassist->occupation !='')
                                        <input type="text" id="occupation" name="occupation" value="{{ $obformassist->occupation }}" class="form-control clearFields">
                                        @else
                                        <input type="text" id="occupation" name="occupation" value="" class="form-control">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/ob.attr.occupation')</label>
                                            <select class="form-control clearFields" name="occucode" id="occucode" onchange="statechange()"> 
                                                <!--option value="">@if(!empty($obprofile)){{ $obprofile->race }} @endif</option-->
                                                @foreach($occucode as $id)
                                                @if (!empty($obprofile) && $obprofile->occucode == $id->refcode)
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
                                            <label class="control-label">@lang('scheme/ob.attr.sub_occupation')</label>
                                            @if(!empty($obprofile) && $obprofile->suboccucode !='')
                                            <input type="text" id="suboccucode" name="suboccucode" value="{{ $obprofile->suboccucode }}" class="form-control clearFields" >
                                            @elseif(!empty($obformassist) && $obformassist->suboccucode !='')
                                            <input type="text" id="suboccucode" name="suboccucode" value="{{ $obformassist->suboccucode }}" class="form-control clearFields">
                                            @else
                                            <input type="text" id="suboccucode" name="suboccucode" value="" class="form-control">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/ob.attr.sub_occupation_list')</label>
                                            @if(!empty($obprofile) && $obprofile->suboccucodelist !='')
                                            <input type="text" id="suboccucodelist" name="suboccucodelist" value="{{ $obprofile->suboccucodelist }}" class="form-control clearFields" >
                                            @elseif(!empty($obformassist) && $obformassist->suboccucodelist !='')
                                            <input type="text" id="suboccucodelist" name="suboccucodelist" value="{{ $obformassist->suboccucodelist }}" class="form-control clearFields">
                                            @else
                                            <input type="text" id="suboccucodelist" name="suboccucodelist" value="" class="form-control">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('ob.attr.sub_occupation')</label>
                                        <input class="form-control" type="text" name="sub_occupation" id="sub_occupation" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('ob.attr.sub_occupation_list')</label>
                                        <input class="form-control" type="text" name="sub_occupation_list" id="sub_occupation_list" value="">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.postal_address')</label>
                                        <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        
                                        <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                       
                                        <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                                    </div>
                                </div>
                            </div>
                
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                        <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                        <select name='state' id='state' class='form-control'>
                                            @foreach($state as $s)
                                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
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
                                        <label>@lang('scheme/ob.attr.city')</label>
                                        <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.postcode')</label>
                                        <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.pobox')</label>
                                        <input type="text" class="form-control clearFields" name="pobox"  value="@if(!empty($obprofile)){{ $obprofile->pobox }} @endif">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.lockedbag')</label>
                                        <input type="text" name="lockedbag" id="lockedbag" value="@if(!empty($obprofile)){{ $obprofile->lockedbag }} @endif" class="form-control clearFields">
                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.wdt')</label>
                                        <input type="text" id="wdt" name="wdt" value="@if(!empty($obprofile)){{ $obprofile->wdt }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.telNo')</label>
                                        <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.mobileNo')</label>
                                        <input type="text" id="mobileno" name="mobileno" value="@if(!empty($obprofile)){{ $obprofile->mobileno }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.email')</label>
                                        <input type="email" id="email" name="email"  value="@if(!empty($obprofile)){{ $obprofile->email }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.citizen')</label>
                                        {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }} @endif" class="form-control"> --}}
                                        {{-- @if(!empty($obprofile) && $obprofile->name !='')
                                        <input type="text" id="nationality" name="nationality" value="{{ $obprofile->nationality }}" class="form-control">
                                        @else
                                        <input type="text" id="nationality" name="nationality" value="{{ $obformassist->nationality }}" class="form-control">
                                        @endif --}}
                                        
                                        <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                                <!--option value="">@if(!empty($obcontact)){{ $obcontact->nationality }} @endif</option-->
                                            @foreach($national as $N)
                                            @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                                <option value="{{$N->refcode}}" selected>{{$N->descen}}</option>
                                                @else
                                                <option value="{{$N->refcode}}">{{$N->descen}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    <!-- /.modal -->
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <script>
        function submitform()
        {
            $('#reset').find('form').submit();
            $('.clearFields').val('');
        }
    </script>