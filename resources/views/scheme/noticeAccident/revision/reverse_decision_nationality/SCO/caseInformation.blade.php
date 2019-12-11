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
                                <label>ID Type</label>
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
                                <label>ID No.</label>
                                <input type="text"  id="idNum_wages" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                            <label>Notice ID</label>
                                <input type="text" readonly id="name_wages" name="name" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Revision Type</label>
                                <input type="text"  id="revType" name="revType" value="" class="form-control">
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="form-group">
                                <label>Revision Reason</label>
                                    <input type="text"  id="revReason" name="revReason" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Source</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Nationality</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employer Under the Act</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date Employer Not Under the Act</label>
                                <input type="text"  id="receivedRevisionNoticeDate_wages" name="receivedRevisionNoticeDate_wages" value="" class="form-control">
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
