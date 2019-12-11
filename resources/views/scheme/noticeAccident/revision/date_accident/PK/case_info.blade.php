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
                                            <label class="control-label">@lang('form/personal-info.id_type')</label><span class="required">*</span>
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
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/personal-info.id_no')</label><span class="required">*</span>
                                                <input type="text" id="id_num" name="id_num" value="" class="form-control" >
                                            </div>
                                        </div>
                                </div>

                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.accident_date')</label><span class="required">*</span>
                                        <input type="date" id="od" name="od" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.type_revision')</label><span class="required">*</span>
                                        <input class="form-control" type="text" name="type_revision" id="type_revision" value="">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.received_revision')</label><span class="required">*</span>
                                        <input type="date" id="acc_rec_rev" name="received_rev" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('form/scheme.general.collapse.case_info.source')</label><span class="required">*</span>
                                        <input type="text" id="acc_source" class="form-control" name="source"  value="">
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
    