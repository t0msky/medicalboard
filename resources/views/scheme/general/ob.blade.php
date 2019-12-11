<div class="form-row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-row p-t-20">
                                <div class="form-group col-md-12">
                                    <label class="control-label">@lang('form/personal-info.name')</label>
                                    <span class="required">*</span>
                                    @if ((!empty($obprofile)||$obprofile!=null))
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $obprofile->name  }}" required readonly>
                                    @else
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="" required   @if($casetype==2||$casetype==3) readonly @endif>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4 col-md-12">
                                    <table id="tblwb" class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th style='width:45%'>@lang('form/personal-info.id_type')</th>
                                                <th style='width:75%'>@lang('form/personal-info.id_no')</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                           
                                            @if ((!empty($obprofile)||$obprofile!=null))
                                            @foreach($obprofile->idinfo as $idx=> $ic)
                                            <tr>
                                               
                                                
                                                
                                                @foreach($ref_table->id_type as $table)
                                                @if($table->ref_code ==$ic->idtype)
                                                <td><input type="hidden" name="idtype[{{$idx}}]" id="idtype" value="{{$ic->idtype}}">{{$table->desc_en }}</td>
                                                @endif
                                                @endforeach
                                                <td><input type="hidden" name="idno[{{$idx}}]"   id="idno"  value="{{ $ic->idno  }}">{{$ic->idno}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/personal-info.date_birth')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="date" class="form-control clearFields" id="dob" name="dob" value="{{ $obprofile->dob  }}">
                                    @else
                                    <input type="date" class="form-control clearFields" id="dob" name="dob" value="" required>
                                    @endif
                                </div>
    
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/personal-info.race')</label>
                                    <select class="form-control clearFields" name="race" id="race">
                                        <option value="please select" selected>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                        @foreach($ref_table->race as $id)
                                        @if ((!empty($obprofile) ||$obprofile!=null) && $obprofile->race == $id->ref_code)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @else
                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/personal-info.gender')</label>
                                    <select class="form-control clearFields" name="gender">
                                        <option value="please select" selected> @lang('form/scheme.general.collapse.ob.please_select')</option>
                                        @foreach($ref_table->gender as $gender_data)
                                        @if ((!empty($obprofile) ||$obprofile!=null) && $obprofile->gender == $gender_data->ref_code )
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
                                <div class="form-group col-md-12 col-lg-8">
                                    <label class="control-label">@lang('form/scheme.general.collapse.ob.occupation_form34')</label>
                                    @if (!empty($obprofile) ||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="occupation" name="occupation" value="{{ $obprofile->occupation  }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="occupation" name="occupation" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label">@lang('form/scheme.general.collapse.ob.occupation')</label>
                                    <select class="form-control clearFields" name="occucode" id="occucode" onchange="statechange()">
                                        <option value="please select" selected> @lang('form/scheme.general.collapse.ob.please_select')</option>
                                        @foreach($ref_table->occupation as $id)
                                        @if ((!empty($obprofile)||$obprofile!=null) && $obprofile->occucode == $id->ref_code)
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
                                    <input type="text" class="form-control" id="sub_occucode" name="sub_occucode" value="{{ $obprofile->suboccucode  }}">
                                    @else
                                    <input type="text" class="form-control" id="sub_occucode" name="sub_occucode" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.ob.sub_occupation_list')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control" id="sub_occucode_list" name="sub_occucode_list" value="{{ $obprofile->suboccucodelist  }}">
                                    @else
                                    <input type="text" class="form-control" id="sub_occucode_list" name="sub_occucode_list">
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>@lang('form/address-info.address')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="add1" name="add1" value="{{ $obprofile->add1  }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="add1" name="add1" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="add2" name="add2" value="{{ $obprofile->add2 }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="add2" name="add2" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                     @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="add3" name="add3" value="{{ $obprofile->add3 }}">
                                    @else 
                                    <input type="text" class="form-control clearFields" id="add3" name="add3" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/address-info.state')</label>
                                    <select name='state_code' id='state' class='form-control'>
                                        <option value="please select" selected>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                        @foreach($ref_table->state as $s)
                                        @if((!empty($obprofile)|| $obprofile!=null) && $obprofile->statecode == $s->ref_code)
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
                                    <input type="text" class="form-control clearFields" id="city" name="city" value="{{ $obprofile->city }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="city" name="city" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/address-info.postcode')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="{{ $obprofile->postcode }}">
                                    @else 
                                    <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/scheme.general.collapse.ob.lockedbag')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="locked_bag" name="locked_bag" value="{{ $obprofile->lockedbag  }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="locked_bag" name="locked_bag" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/scheme.general.collapse.ob.wdt')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="wdt" name="wdt" value="{{ $obprofile->wdt }}">
                                    @else
                                    <input type="text" class="form-control clearFields" id="wdt" name="wdt" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/scheme.general.collapse.ob.pobox')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="pobox" name="pobox"value="{{ $obprofile->pobox }}">
                                    @else 
                                    <input type="text" class="form-control clearFields" id="pobox" name="pobox"value="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/personal-info.telNo')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="telno" name="telno" value="{{ $obprofile->telno }}">
                                    @else 
                                    <input type="text" class="form-control clearFields" id="telno" name="telno" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/personal-info.mobileNo')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="text" class="form-control clearFields" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}">
                                    @else 
                                    <input type="text" class="form-control clearFields" id="mobileno" name="mobileno" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/personal-info.email')</label>
                                    @if (!empty($obprofile)||$obprofile!=null)
                                    <input type="email" class="form-control clearFields" id="email" name="email" value="{{ $obprofile->email  }}">
                                    @else 
                                    <input type="email" class="form-control clearFields" id="email" name="email" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/personal-info.nationality')</label>
                                    <select class="form-control" name='nationality' id='nationality' disabled>
                                        <option value="please select" selected>
                                            @lang('form/scheme.general.collapse.ob.please_select')</option>
                                        @foreach($ref_table->national as $N)
                                        @if ((!empty($obprofile) || $obprofile!=null)&& $obprofile->nationality == $N->ref_code)
                                        <option value="{{$N->ref_code}}" selected>{{$N->desc_en}}</option>
                                        @else
                                        <option value="{{$N->ref_code}}">{{$N->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            {{-- @include('scheme.noticeInvalidity.newClaim.SCO.beforeMB.case_history') --}}
    
                             <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="reset" class="btn btn waves-effect waves-light btn-info">@lang('button.reset')</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    