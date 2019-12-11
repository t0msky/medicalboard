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
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_type')</label><span class="required">*</span>
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
                                <label>@lang('insuredPerson.attr.id_num')</label><span class="required">*</span>
                                <input type="text"  id="idNum_wages" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>@lang('insuredPerson.attr.name')</label><span class="required">*</span>
                                <input type="text" readonly id="name_wages" name="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>@lang('insuredPerson.attr.rev_type')</label><span class="required">*</span>
                                <input type="text"  id="revType_wages" name="rev_type" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.rev_reason')</label><span class="required">*</span>
                                <select class="form-control" data-placeholder="revReason_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Wages Changes">@lang('wages.attr.wagesChanges')</option>
                                        <option value="Additional Contribution">@lang('wages.attr.additionalContribution')</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.received_rev')</label><span class="required">*</span>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.source')</label><span class="required">*</span>
                                <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="HUK">@lang('wages.attr.otc')</option>
                                        <option value="ILAT">@lang('wages.attr.email')</option>
                                        <option value="HUK">@lang('wages.attr.portal')</option>
                                        <option value="ILAT">@lang('wages.attr.complaint')</option>
                                        <option value="HUK">@lang('wages.attr.new_info')</option>                                   
                                 </select>
                            </div>
                        </div>
                    </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
