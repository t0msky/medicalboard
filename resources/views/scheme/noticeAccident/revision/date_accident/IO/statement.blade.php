<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
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
                                    <label class="control-label">@lang('form/scheme.general.collapse.statement.download')

                                        <button class="btn btn-facebook waves-effect waves-light" type="button"><i
                                                class="fas fa-download"></i> </button>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.inspectorInfo')</h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.inspectorName')</label>
                                    <input type="text" id="noticeid_acc" name="notice" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('form/scheme.general.collapse.interviewee_info.title')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.name')</label>
                                    <input type="text" id="name" name="name" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.age')</label>
                                    <input type="text" id="age" name="age" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.id_no')</label>
                                    <input type="text" id="idNum_acc" name="id_num" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.id_type')</label>
                                    <select class="form-control clearfields" name='idtype' id='idtype' required>
                                        <option selected disabled hidden>Please Select </option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('form/address-info.address')</label>
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
                                <label>@lang('form/address-info.postcode')</label>
                                <input type="text" id="postcode_dependent" name="postcode" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('form/address-info.city')</label>
                                <input type="text" id="city_dependent" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('form/address-info.state')</label>
                                <input type="text" id="state_dependent" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/address-info.tel-no')</label>
                                <input type="text" id="telephoneNo" name="telephoneNo" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.aboutInvestigation')</label>
                                <input type="date" id="aboutInvestigation" name="aboutInvestigation" value=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('index.attr.witnessInfo')</h5>
                    <hr>

                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/personal-info.id_no')</label>
                                <input type="text" id="idNum_acc" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/personal-info.id_type')</label>
                                <select class="form-control clearfields" name='idtype' id='idtype' required>
                                    <option selected disabled hidden>Please Select </option>
                                    @foreach ($idtype as $id)
                                    @if (old('idtype') == $id->refcode)
                                    <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                    @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                    <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                    @else
                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.name')</label>
                                    <input type="text"  id="name" name="name" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.witnessStatement')</label>
                                    <input type="text"  id="witnessStatement" name="witnessStatement" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.language')</label>
                                    <input type="text"  id="language" name="language" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.translatorName')</label>
                                    <input type="text"  id="translatorName" name="translatorName" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.investigationStartTime')</label>
                                    <input type="text"  id="investigationStartTime" name="investigationStartTime" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.investigationEndTime')</label>
                                    <input type="text"  id="investigationEndTime" name="investigationEndTime" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.investigationDate')</label>
                                    <input type="text"  id="investigationDate" name="investigationDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    <div class="form-actions">
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                        <button type="submit"
                            class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                            onclick="submitform()">@lang('button.reset')</button>

                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                            onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                            onclick="window.location='/obform_od'">@lang('button.back')</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
