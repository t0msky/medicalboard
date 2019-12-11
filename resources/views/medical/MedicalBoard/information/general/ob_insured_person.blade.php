<div class="form-row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        
                        <form action="{{Route('updatembobdetails.post')}}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-row p-t-20">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">@lang('form/personal-info.name')</label>
                                        <span class="required">*</span>
                                        @if ((!empty($obprofile)||$obprofile!=null))
                                            <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $obprofile->name  }}" required readonly>
                                        @else
                                            <input type="text" class="form-control form-control-sm" id="name" name="name" value="" required readonly>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.id_type')</label>
                                        @if ((!empty($obprofile)||$obprofile!=null))
                                            {{-- @foreach($obprofile->idinfo as $idx=> $ic) --}}
                                                {{-- <input type="text" class="form-control clearFields" id="idtype" name="idtype[{{$idx}}]" value="{{$ic->idtype}}" disabled=""> --}}
                                                <input type="text" class="form-control clearFields" id="idtype" {{--name="idtype[{{$idx}}]"--}} value="{{$idtype}}" disabled="">
                                            {{-- @endforeach --}}
                                        @else
                                            <input type="text" class="form-control clearFields" id="idtype" name="idtype" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.id_no')</label>
                                        @if ((!empty($obprofile)||$obprofile!=null))
                                            {{-- @foreach($obprofile->idinfo as $idx=> $ic) --}}
                                                {{-- <input type="text" class="form-control clearFields" id="idno" name="idno[{{$idx}}]" value="{{ $ic->idno  }}" disabled> --}}
                                                <input type="text" class="form-control clearFields" id="idtype" {{--name="idtype[{{$idx}}]"--}} value="{{$idno}}" disabled="">
                                            {{-- @endforeach --}}
                                        @else
                                            <input type="text" class="form-control clearFields" id="idno" name="idno" value="" disabled>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.date_birth')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="date" class="form-control clearFields" id="dob" name="dob" value="{{ $obprofile->dob  }}" disabled>
                                        @else
                                            <input type="date" class="form-control clearFields" id="dob" name="dob" value="" disabled>
                                        @endif
                                    </div>
        
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.race')</label>
                                        <select class="form-control clearFields" name="race" id="race" disabled>
                                            <option value="please select" selected>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                            @foreach($ref_table->race as $id)
                                                @if ((!empty($obprofile) ||$obprofile!=null) && ($obprofile->race == $id->ref_code))
                                                    <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                                @else
                                                    <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.gender')</label>
                                        <select class="form-control clearFields" name="gender" disabled>
                                            <option value="please select" selected> @lang('form/scheme.general.collapse.ob.please_select')</option>
                                            @foreach($ref_table->gender as $gender_data)
                                                @if ((!empty($obprofile) ||$obprofile!=null) && ($obprofile->gender == $gender_data->ref_code))
                                                    <option value="{{$gender_data->ref_code}}" selected>{{$gender_data->desc_en}}
                                                </option>
                                                @else
                                                    <option value="{{$gender_data->ref_code}}">{{$gender_data->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-6">
                                        <label class="control-label">@lang('form/scheme.general.collapse.ob.occupation_form34')</label>
                                        @if (!empty($obprofile) ||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="occupation" name="occupation" value="{{ $obprofile->occupation  }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="occupation" name="occupation" value="" disabled>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.ob.occupation')</label>
                                        <select class="form-control clearFields" name="occucode" id="occucode" onchange="statechange()" disabled>
                                            <option value="please select" selected> @lang('form/scheme.general.collapse.ob.please_select')</option>
                                            @foreach($ref_table->occupation as $id)
                                                @if ((!empty($obprofile)||$obprofile!=null) && ($obprofile->occucode == $id->ref_code))
                                                    <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                                @else
                                                    <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.ob.sub_occupation')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control" id="sub_occucode" name="sub_occucode" value="{{ $obprofile->suboccucode  }}" disabled>
                                        @else
                                            <input type="text" class="form-control" id="sub_occucode" name="sub_occucode" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.ob.sub_occupation_list')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control" id="sub_occucode_list" name="sub_occucode_list" value="{{ $obprofile->suboccucodelist  }}" disabled>
                                        @else
                                            <input type="text" class="form-control" id="sub_occucode_list" name="sub_occucode_list" value="" disabled>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>@lang('form/medical.general.address')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="add1" name="add1" value="{{ $obprofile->add1  }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="add1" name="add1" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="add2" name="add2" value="{{ $obprofile->add2 }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="add2" name="add2" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                         @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="add3" name="add3" value="{{ $obprofile->add3 }}" disabled>
                                        @else 
                                            <input type="text" class="form-control clearFields" id="add3" name="add3" value="" disabled>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/address-info.state')</label>
                                        <select name='state_code' id='state' class='form-control' disabled>
                                            <option value="please select" selected>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                            @foreach($ref_table->state as $s)
                                                @if((!empty($obprofile)|| $obprofile!=null) && ($obprofile->statecode == $s->ref_code))
                                                    <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                                @else
                                                    <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/address-info.city')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="city" name="city" value="{{ $obprofile->city }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="city" name="city" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/address-info.postcode')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="{{ $obprofile->postcode }}" disabled>
                                        @else 
                                            <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="" disabled>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/scheme.general.collapse.ob.lockedbag')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="locked_bag" name="locked_bag" value="{{ $obprofile->lockedbag  }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="locked_bag" name="locked_bag" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/scheme.general.collapse.ob.wdt')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" disabled>
                                        @else
                                            <input type="text" class="form-control clearFields" id="wdt" name="wdt" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/scheme.general.collapse.ob.pobox')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="pobox" name="pobox"value="{{ $obprofile->pobox }}" disabled>
                                        @else 
                                            <input type="text" class="form-control clearFields" id="pobox" name="pobox"value="" disabled>
                                        @endif
                                    </div>
                                </div>

                               {{--  //checkbox home address --}}
                                <div class="form-row">
                                    <div class="col-sm-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="address" onclick="same_address()">
                                            <label class="custom-control-label" for="address"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">@lang('form/medical.general.add_address')</label>
                                    </div>
                                </div>
                                <br>
                              

                                {{--Add Mailing address --}}
                                <div id="mailAdressDiv" class="form-group" >

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label> @lang('form/medical.general.mailing_address') </label>
                                            @if(!empty($insuredperson)||$insuredperson!=null)
                                                <input type="text" class="form-control clearFields" id="mailadd1" name="mailadd1" value="{{$insuredperson->obdetails_add1}}">
                                            @else
                                                <input type="text" class="form-control clearFields" id="mailadd1" name="mailadd1" value="">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12">
                                            @if(!empty($insuredperson)||$insuredperson!=null)
                                            <input type="text" class="form-control clearFields" id="mailadd2" name="mailadd2" value="{{$insuredperson->obdetails_add2}}">
                                            @else
                                            <input type="text" class="form-control clearFields" id="mailadd2" name="mailadd2" value="">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12">
                                            @if(!empty($insuredperson)||$insuredperson!=null)
                                            <input type="text" class="form-control clearFields" id="mailadd3" name="mailadd3" value="{{$insuredperson->obdetails_add3}}">
                                            @else
                                            <input type="text" class="form-control clearFields" id="mailadd3" name="mailadd3" value="">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label class="control-label">@lang('form/address-info.state')</label>
                                            <select name='statecode_add' id='statecode_add' class='form-control'>
                                                <option value="" selected>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                                 @if (!empty($obprofile)||$obprofile!=null)
                                                <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                 @else
                                                 <option value=''></option>
                                                 @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label>@lang('form/address-info.city')</label>
                                            @if(!empty($insuredperson)||$insuredperson!=null)
                                            <input type="text" class="form-control clearFields" id="cityadd" name="cityadd" value="{{$insuredperson->obdetails_city}}">
                                            @else
                                            <input type="text" class="form-control clearFields" id="cityadd" name="cityadd" value="">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label>@lang('form/address-info.postcode')</label>
                                            @if(!empty($insuredperson)||$insuredperson!=null) 
                                                <input type="text" class="form-control clearFields" id="postcodeadd" name="postcodeadd" value="{{$insuredperson->obdetails_postcode}}">
                                            @else
                                                <input type="text" class="form-control clearFields" id="postcodeadd" name="postcodeadd" value="">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label>@lang('form/scheme.general.collapse.ob.lockedbag')</label>
                                            @if(!empty($insuredperson)||$insuredperson!=null) 
                                                <input type="text" class="form-control clearFields" id="lockedbag_add" name="lockedbag_add" value="{{$insuredperson->obdetails_logbag}}">
                                            @else
                                                <input type="text" class="form-control clearFields" id="lockedbag_add" name="lockedbag_add" value="">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label>@lang('form/scheme.general.collapse.ob.wdt')</label>
                                            @if(!empty($insuredperson)||$insuredperson!=null) 
                                                <input type="text" class="form-control clearFields" id="wdtadd" name="wdtadd" 
                                            value="{{$insuredperson->obdetails_wdt}}">
                                            @else
                                                <input type="text" class="form-control clearFields" id="wdtadd" name="wdtadd" 
                                            value="">
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label>@lang('form/scheme.general.collapse.ob.pobox')</label>
                                            @if(!empty($insuredperson)||$insuredperson!=null)
                                                <input type="text" class="form-control clearFields" id="poboxadd" name="poboxadd"value="{{$insuredperson->obdetails_pobox}}">
                                            @else
                                                <input type="text" class="form-control clearFields" id="poboxadd" name="poboxadd"value="">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/personal-info.telNo')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                            <input type="text" class="form-control clearFields" id="telno" name="telno" value="{{ $obprofile->telno }}" disabled>
                                        @else 
                                            <input type="text" class="form-control clearFields" id="telno" name="telno" value="" disabled>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4 nopadding">
                                        <label>@lang('form/personal-info.mobileNo')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                        <div class="input-group">
                                            <input type="text" class="form-control clearFields" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" disabled>
                                            <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="btnPhone_no" onclick="phone_no();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        @else 
                                        <div class="input-group">
                                            <input type="text" class="form-control clearFields" id="mobileno" name="mobileno" value="" disabled>
                                            <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="btnPhone_no" onclick="phone_no();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div id="phone_no"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label>@lang('form/personal-info.email')</label>
                                        @if (!empty($obprofile)||$obprofile!=null)
                                        <div class="input-group">
                                            <input type="email" class="form-control clearFields" id="email" name="email" value="{{ $obprofile->email  }}" disabled>
                                            <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="btnEmail" onclick="add_email();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        @else 
                                        <div class="input-group">
                                            <input type="email" class="form-control clearFields" id="email" name="email" value="" disabled>
                                            <div class="input-group-append">
                                                    <button class="btn btn-success" type="button" id="btnEmail" onclick="add_email();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/personal-info.nationality')</label>
                                        <select class="form-control" name='nationality' id='nationality' disabled>
                                            <option value="please select" selected>
                                                @lang('form/scheme.general.collapse.ob.please_select')</option>
                                            @foreach($ref_table->national as $N)
                                                @if ((!empty($obprofile) || $obprofile!=null)&& ($obprofile->nationality == $N->ref_code))
                                                    <option value="{{$N->ref_code}}" selected>{{$N->desc_en}}</option>
                                                @else
                                                    <option value="{{$N->ref_code}}">{{$N->desc_en}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>

                                <input type="hidden" id="caserefno" name="caserefno" value="{{$caserefno}}">

                                <div id="add_email"></div>
                                
                                {{-- @include('scheme.noticeInvalidity.newClaim.SCO.beforeMB.case_history') --}}
        
                                 <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="reset" class="btn btn waves-effect waves-light btn-info">@lang('button.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                </div>
                            </div>
        
                            <input type="hidden" id="telnohide" 
                            @isset($insuredperson->obdetails_telno) 
                                value=" {{$insuredperson->obdetails_telno}}"
                            @endisset>
                            @isset($insuredperson->obdetails_mobileno) 
                                <input type="hidden" id="mobilenohide" value="{{$insuredperson->obdetails_mobileno}}">
                            @endisset
                            @isset($insuredperson->obdetails_email) 
                                <input type="hidden" id="emailhide" value="{{$insuredperson->obdetails_email}}">
                            @endisset
                        </form>
                </div>
            </div>
        </div>
    </div>


<script>
    $(document).ready(function(){
        displayPhone();
        displayEmail();
    });


    var room = 1;
    var countPhone = 1;

    //if phone already exist in db
    function displayPhone(){
        if($('#telnohide').val() != null || $('#mobilenohide').val() !=null){
            room++;
            var objTo = document.getElementById('phone_no')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "removeclass" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML = '<div class="form-row">'+
                                    '<div class="form-group col-md-12 col-lg-4 nopadding">'+
                                        '<label>@lang('form/personal-info.telNo')</label>'+
                                        '<input type="text" class="form-control clearFields" id="telnoadd" name="telnoadd" '+
                                        @isset($insuredperson->obdetails_telno) 
                                        'value="{{$insuredperson->obdetails_telno}}">'+
                                        @else
                                        'value="">'+
                                        @endisset 
                                    '</div>'+
                                    '<div class="form-group col-md-12 col-lg-4 nopadding">'+
                                        '<label>@lang('form/personal-info.mobileNo')</label>'+
                                        '<div class="input-group">'+
                                            '<input type="text" class="form-control clearFields" id="emailadd" name="emailadd" '+
                                            @isset($insuredperson->obdetails_mobileno) 
                                            'value="{{$insuredperson->obdetails_mobileno}}">'+
                                            @endisset 
                                            '<div class="input-group-append">'+
                                                    '<button class="btn btn-danger" type="button" onclick="remove_phone_no(' + room + ')"><i class="fa fa-minus"></i></button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                   '</div>'+
                                '</div>';

            objTo.appendChild(divtest);

             $("#btnPhone_no").attr("disabled", true);
        }
    }

    function displayEmail(){
        if($('#emailhide').val() != null){
            email1++;
            var objTo = document.getElementById('add_email')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "removeclassEmail" + email1);
            var rdiv = 'removeclass' + email1;
            divtest.innerHTML = '<div class="form-row">'+
                                    '<div class="form-group col-md-12 col-lg-4 nopadding">'+
                                        '<label>@lang('form/personal-info.email')</label>'+
                                        '<div class="input-group">'+
                                            '<input type="text" class="form-control clearFields" id="emailadd" name="emailadd" '+
                                            @isset($insuredperson->obdetails_email) 
                                            'value="{{$insuredperson->obdetails_email}}">'+
                                            @endisset
                                            '<div class="input-group-append">'+
                                                    '<button class="btn btn-danger" type="button" onclick="remove_add_email(' + email1 + ')"><i class="fa fa-minus"></i></button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';

            objTo.appendChild(divtest);
            $("#btnEmail").attr("disabled", true);
        }
    }

    function phone_no() 
    {

        room++;
        var objTo = document.getElementById('phone_no')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="form-row">'+
                                '<div class="form-group col-md-12 col-lg-4">'+
                                    '<label>@lang('form/personal-info.telNo')</label>'+
                                    '<input type="text" class="form-control clearFields" id="telnoadd" name="telnoadd" value="">'+
                                '</div>'+
                                '<div class="form-group col-md-12 col-lg-4 nopadding">'+
                                    '<label>@lang('form/personal-info.mobileNo')</label>'+
                                        
                                    '<div class="input-group">'+
                                        '<input type="text" class="form-control clearFields" id="mobilenoadd" name="mobilenoadd" value="">'+
                                        '<div class="input-group-append">'+
                                                '<button class="btn btn-danger" type="button" onclick="remove_phone_no(' + room + ')"><i class="fa fa-minus"></i></button>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';

        objTo.appendChild(divtest);

         $("#btnPhone_no").attr("disabled", true);
    }


    function remove_phone_no(rid) {
        $('.removeclass' + rid).remove();
        room--;

        $("#btnPhone_no").removeAttr('disabled');
    }

    //onclick email
    var email1 = 1;

    function add_email() 
    {

        email1++;
        var objTo = document.getElementById('add_email')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclassEmail" + email1);
        var rdiv = 'removeclass' + email1;
        divtest.innerHTML = '<div class="form-row">'+
                                '<div class="form-group col-md-12 col-lg-4 nopadding">'+
                                    '<label>@lang('form/personal-info.email')</label>'+
                                    '<div class="input-group">'+
                                        '<input type="text" class="form-control clearFields" id="emailadd" name="emailadd" value="">'+
                                        '<div class="input-group-append">'+
                                                '<button class="btn btn-danger" type="button" onclick="remove_add_email(' + email1 + ')"><i class="fa fa-minus"></i></button>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';

        objTo.appendChild(divtest);
        $("#btnEmail").attr("disabled", true);
    }

    function remove_add_email(rid) {
        $('.removeclassEmail' + rid).remove();
        email1--;
        $("#btnEmail").removeAttr('disabled');
    }

    function same_address()
    {
        var check = document.getElementById("address");

        if(check.checked == true ){
            // disabled
            $('#mailadd1').attr('disabled','disabled');
            $('#mailadd2').attr('disabled','disabled');
            $('#mailadd3').attr('disabled','disabled');
            $('#statecode_add').attr('disabled','disabled');
            $('#cityadd').attr('disabled','disabled');
            $('#postcodeadd').attr('disabled','disabled');
            $('#lockedbag_add').attr('disabled','disabled');
            $('#wdtadd').attr('disabled','disabled');
            $('#poboxadd').attr('disabled','disabled');

            //set value
            $('#mailadd1').val($('#add1').val());
            $('#mailadd2').val($('#add2').val());
            $('#mailadd3').val($('#add3').val());
            $('#statecode_add').val($('#state_code').val());
            $('#cityadd').val($('#city').val());
            $('#postcodeadd').val($('#postcode').val());
            $('#lockedbag_add').val($('#locked_bag').val());
            $('#wdtadd').val($('#wdt').val());
            $('#poboxadd').val($('#pobox').val());

        }
        else
        {
            //remove disabled
            $('#mailadd1').removeAttr('disabled');
            $('#mailadd2').removeAttr('disabled');
            $('#mailadd3').removeAttr('disabled');
            $('#statecode_add').removeAttr('disabled');
            $('#cityadd').removeAttr('disabled');
            $('#postcodeadd').removeAttr('disabled');
            $('#lockedbag_add').removeAttr('disabled');
            $('#wdtadd').removeAttr('disabled');
            $('#poboxadd').removeAttr('disabled');

            $('#mailadd1').val('');
            $('#mailadd2').val('');
            $('#mailadd3').val('');
            $('#statecode_add').val('');
            $('#cityadd').val('');
            $('#postcodeadd').val('');
            $('#lockedbag_add').val('');
            $('#wdtadd').val('');
            $('#poboxadd').val('');
        }
    }

</script>
    