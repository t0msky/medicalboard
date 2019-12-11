<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.form_34')</label>
                                    <input type="date" id="form_34" name="form_34" value="" class="form-control"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.source')</label>
                                    <input type="text" id="source" name="source" value="" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.name')</label>
                                    <input type="text" id="name" name="name" value="" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <table id="table-medical-details0" class="table table-sm table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:20%'>@lang('scheme/ob.attr.id_type')</th>
                                            <th style='width:17%'>@lang('scheme/ob.attr.id_no')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow">
                                            <td>
                                                <div class="form-group">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.id_type')</label>
                                        <select id="idtype" class="form-control" value="" name="idtype" required>
                                                <!--option value=""></option-->
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.id_no')</label>
                                        <input type="text" id="idno" name="idno" value="" class="form-control" required>
                                    </div>
                                </div> --}}
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.dateOfBirth')</label>
                                    <input type="date" id="dob" name="dob" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.race')</label>
                                    {{--  <input type="text" id="race" value="{{ $obprofile->race }}"
                                    class="form-control"> --}}
                                    <select class="form-control" name="race">
                                        <!--option value="">@if(!empty($obprofile)){{ $obprofile->race }} @endif</option-->

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.gender')</label>
                                    <select class="form-control" name="gender">
                                        <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                        {{-- @if (!empty($obprofile) && $obprofile->gender == 'F') --}}
                                        {{-- <option value="F" selected>Female</option>
                                                <option value="M">Male</option>
                                                @elseif (!empty($obprofile) && $obprofile->gender == 'M')
                                                <option value="F">Female</option>
                                                <option value="M" selected>Male</option>
                                                @else --}}
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                        {{-- @endif --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.occupation')</label>
                                    <input class="form-control" type="text" name="occupation" id="occupation" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.sub_occupation')</label>
                                    <input class="form-control" type="text" name="sub_occupation" id="sub_occupation"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.sub_occupation_list')</label>
                                    <input class="form-control" type="text" name="sub_occupation_list"
                                        id="sub_occupation_list" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postal_address')</label>
                                    <input type="text" name="add1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" name="add2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" name="add3" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.pobox')</label>
                                    <input type="text" class="form-control" name="pobox" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbag" id="lockedbag" value="" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.telNo')</label>
                                    <input type="text" id="telno" name="telno" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.mobileNo')</label>
                                    <input type="text" id="mobileno" name="mobileno" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.email')</label>
                                    <input type="text" id="email" name="email" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.citizen')</label>
                                    {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }}
                                    @endif" class="form-control"> --}}
                                    {{-- @if(!empty($obprofile) && $obprofile->name !='')
                                        <input type="text" id="nationality" name="nationality" value="{{ $obprofile->nationality }}"
                                    class="form-control">
                                    @else
                                    <input type="text" id="nationality" name="nationality"
                                        value="{{ $obformassist->nationality }}" class="form-control">
                                    @endif --}}

                                    <select class="form-control" tabindex="1" name='nationality' id='nationality'>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.worker_under')</label>
                                    <input type="text" id="worker_under" name="worker_under" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.worker_not_under')</label>
                                    <input type="date" id="worker_not_under" name="worker_not_under" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.dod')</label>
                                        <input type="Date" id="dofdeath" name="dofdeath"  value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.age_death')</label>
                                        <input type="text" id="age" name="age"  value="" class="form-control">
                                 </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.source_death')</label>
                                        <input type="text" id="source_death" name="source_death"  value="" class="form-control">
                                 </div>
                                </div>
                            </div> --}}
                        <div class="row">
                            {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/ob.attr.worker_under')</label>
                                        <input type="text" id="worker_under" name="worker_under"  value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.worker_not_under')</label>
                                        <input type="date" id="worker_not_under" name="worker_not_under"  value="" class="form-control">
                                    </div>
                                </div> --}}
                            {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.ssab_decision')</label>
                                        <input type="text" id="ssab_decision" name="ssab_decision"  value="" class="form-control">
                                    </div>
                                </div> --}}
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                          
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
