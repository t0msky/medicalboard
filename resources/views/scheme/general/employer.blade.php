<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('post.employer')}}" method="POST" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        {{--
                        <h5 class="card-title">@lang('employerDetails.title')</h5>
                        <hr>
                        --}}
                        @if(Session::get('messageemp'))
                        <div class="card-footer">
                            <div class="alert alert-warning">{{Session::get('messageemp')}}</div>
                        </div>
                        @elseif (!empty($messageemp))
                        <div class="card-footer">
                            <div class="alert alert-warning">{{$messageemp}}</div>
                        </div>
                        @endif
                        <div class="row">
                            {{--
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Employer Code</label>
                                    <input type="text" class="form-control" name="empcode" value={{$checkaccddate->empcode}} required>
                                    <div class="input-group-append">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                            </div>
                            --}}
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.employerCode')</label>
                                <span class="required">*</span>
                                @if(!empty($empinfo) && !empty($empinfo->empcode))
                                <input type="text" id="empcode" name="empcode" value="{{$empinfo->empcode}}" class="form-control" required readonly>
                                @else
                                <input type="text" id="empcode" name="empcode" value="{{old('empcode')}}" class="form-control" required readonly>
                                @endif
                            </div>
                            {{--
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                            </div>
                            --}}
                            <div class="form-group col-md-12 col-lg-8">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.employerName')</label>
                                <span class="required">*</span>
                                @if(!empty($empinfo) && !empty($empinfo->empname))
                                <input type="text" id="empname" name="empname" value="{{$empinfo->empname}}" class="form-control clearFields" required readonly>
                                @else
                                <input type="text" id="empname" name="empname" value="" class="form-control clearFields" required readonly>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.business_entity')</label>
                                @if(!empty($empinfo) && !empty($empinfo->bussentity))
                                <input type="text" id="bussentity" name="bussentity" value="{{$empinfo->bussentity}}" class="form-control" readonly>
                                <input type="text" id="bussentity" name="bussentityId" value="{{$empinfo->bussentityId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="bussentity" name="bussentity" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.subbusiness_entity')</label>
                                @if(!empty($empinfo) && !empty($empinfo->subbussentity))
                                <input type="text" id="subbussentity" name="subbussentity" value="{{$empinfo->subbussentity}}" class="form-control" readonly>
                                <input type="text" id="subbussentity" name="subbussentityId" value="{{$empinfo->subbussentityId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="subbussentity" name="subbussentity" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.subbusiness_list')</label>
                                @if(!empty($empinfo) && !empty($empinfo->subbussentitylist))
                                <input type="text" id="subbussentitylist" name="subbussentitylist" value="{{$empinfo->subbussentitylist}}" class="form-control" readonly>
                                <input type="text" id="subbussentitylist" name="subbussentitylistId" value="{{$empinfo->subbussentitylistId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="subbussentitylist" name="subbussentitylist" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.service_type')</label>
                                @if(!empty($empinfo) && !empty($empinfo->servicetype))
                                <input type="text" id="servicetype" name="servicetype" value="{{$empinfo->servicetype}}" class="form-control" readonly>
                                <input type="text" id="servicetype" name="servicetypeId" value="{{$empinfo->servicetypeId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="servicetype" name="servicetype" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.industry_code')</label>
                                @if(!empty($empinfo) && !empty($empinfo->indscode))
                                <input type="text" id="indscode" name="indscode" value="{{$empinfo->indscode}}" class="form-control" readonly>
                                <input type="text" id="indscode" name="indscodeId" value="{{$empinfo->indscodeId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="indscode" name="indscode" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/scheme.general.collapse.employer.subindustry_list')</label>
                                @if(!empty($empinfo) && !empty($empinfo->subindscodelist))
                                <input type="text" id="subindscodelist" name="subindscodelist" value="{{$empinfo->subindscodelist}}" class="form-control" readonly>
                                <input type="text" id="subindscodelist" name="subindscodelistId" value="{{$empinfo->subindscodelistId}}" class="form-control" readonly hidden>
                                @else
                                <input type="text" id="subindscodelist" name="subindscodelist" value="" class="form-control clearFields" readonly>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">@lang('Address')</label>
                                @if(!empty($empinfo) && !empty($empinfo->add1))
                                <input type="text" id="add1" name="add1" value="{{$empinfo->add1}}" class="form-control clearFields">
                                @else
                                <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address2')</label> --}}
                                @if(!empty($empinfo) && !empty($empinfo->add2))
                                <input type="text" id="add2" name="add2" value="{{$empinfo->add2}}" class="form-control clearFields">
                                @else
                                <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address3')</label>  --}}
                                @if(!empty($empinfo) && !empty($empinfo->add3))
                                <input type="text" id="add3" name="add3" value="{{$empinfo->add3}}" class="form-control clearFields">
                                @else
                                <input type="text" id="add3" name="add3" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('State')</label>
                                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->state_code }} @endif" class="form-control"-->
                                <select name='state' id='state' class='form-control'>
                                    <option value="please select" selected hidden readonly>@lang('form/scheme.general.collapse.ob.please_select')</option>
                                    @foreach($ref_table->state as $s)
                                        @if(!empty($empinfo) && $empinfo->statecode == $s->ref_code)
                                            <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                        @else
                                            <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/address-info.city')</label>
                                @if(!empty($empinfo) && !empty($empinfo->city))
                                <input type="text" id="city" name="city" value="{{ $empinfo->city }}" class="form-control clearFields">
                                @else
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/address-info.postcode')</label>
                                @if(!empty($empinfo) && !empty($empinfo->postcode))
                                <input type="text" id="postcode" name="postcode" value="{{ $empinfo->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/scheme.general.collapse.employer.pobox')</label>
                                @if(!empty($empinfo) && !empty($empinfo->pobox))
                                <input type="text" id="pobox" name="pobox" value="{{$empinfo->pobox}}" class="form-control clearFields">
                                @else
                                <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('Lockedbag')</label>
                                @if(!empty($empinfo) && !empty($empinfo->lockedbag))
                                <input type="text" id="lockedbag" name="lockedbag" value="{{$empinfo->lockedbag}}" class="form-control clearFields">
                                @else
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/scheme.general.collapse.employer.wdt')</label>
                                @if(!empty($empinfo) && !empty($empinfo->wdt))
                                <input type="text" id="wdt" name="wdt" value="{{$empinfo->wdt}}" class="form-control clearFields">
                                @else
                                <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('Telephone No.')</label>
                                @if(!empty($empinfo) && !empty($empinfo->telno))
                                <input type="text" id="telno" name="telno" value="{{$empinfo->telno}}" class="form-control clearFields">
                                @else
                                <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/personal-info.faxNo')</label>
                                @if(!empty($empinfo) && !empty($empinfo->faxno))
                                <input type="text" id="faxno" name="faxno" value="{{$empinfo->faxno}}" class="form-control clearFields">
                                @else
                                <input type="text" id="faxno" name="faxno" value="" class="form-control clearFields">
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label>@lang('form/personal-info.email')</label>
                                @if(!empty($empinfo) && !empty($empinfo->email))
                                <input type="email" id="email" name="email" value="{{$empinfo->email}}" class="form-control clearFields">
                                @else
                                <input type="email" id="email" name="email" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="reset" class="btn btn waves-effect waves-light btn-info">@lang('button.reset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
