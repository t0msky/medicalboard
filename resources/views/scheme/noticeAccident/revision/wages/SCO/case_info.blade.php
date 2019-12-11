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
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_type')</label>
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
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_num')</label>
                                <input type="text"  id="idNum_wages" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                            <label>Revision Notice ID</label>
                                <input type="text" readonly id="name_wages" name="name" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Notice ID</label>
                                <input type="text"  id="revType_wages" name="rev_type" value="" class="form-control">
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="form-group">
                                <label>Received Revision Notice Date</label>
                                    <input type="text"  id="revType_wages" name="rev_type" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Case Type</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Notice Type</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Operation Branch Location</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Revision Type</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Revision Reason</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Source</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Accident Date</label>
                                <input type="date"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
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
