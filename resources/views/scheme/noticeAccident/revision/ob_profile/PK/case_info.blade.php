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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>@lang('form/personal-info.id_type')</label><span class="required">*</span>
                                    <select class="form-control clearfields" name='idtype' id='idtype' required>
                                        <option selected readonly disabled hidden>Please Select </option>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.id_no')</label><span class="required">*</span>
                                    <input type="text" id="idNum_obProf" name="id_num" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row p-t-20">    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.name')</label>
                                    <input type="text" readonly id="accDeclare_obProfile" name="name" value="" class="form-control">
                                </div>
                            </div>
                        </div> --}}
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.name')</label><span class="required">*</span>
                                    <input type="text"  id="name_obProf" name="name" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.type_revision')</label>
                                    <input type="text" readonly id="accDeclare_obProfile" name="acc_dec" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">@lang('form/scheme.general.collapse.case_info.reason_revision')</label><span class="required">*</span>
                                <input type="text" id="typeRev_obProf" name="type_rev" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.received_revision')</label>
                                    <input type="text" readonly id="recDate_obProfile" name="rec_date" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.year')</label><span class="required">*</span>
                                    <input type="text" id="reasonRev_obProf" name="reasonRev" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.received_date')</label>
                                    <input type="text" readonly id="received_date" name="received_date" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.acceptance_declaration')</label><span class="required">*</span>
                                    <input type="text" id="acceptance_declaration" name="acceptance_declaration" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.SSN_received')</label><span class="required">*</span>
                                    <input type="text" id="SSN_received" name="SSN_received" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.case_info.received_revision')</label><span class="required">*</span>
                                    <input type="text" id="SSN_received" name="SSN_received" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                              
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
