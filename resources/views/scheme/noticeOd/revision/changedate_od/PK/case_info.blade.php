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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label><span
                                        class="required">*</span>
                                        <select class="form-control">
                                            <option selected readonly disabled hidden>Please Select</option>
                                            <option value="" selected>New IC</option>
                                            <option value="">Old IC</option>
                                            <option value="">Army ID</option>
                                            <option value="">Police ID</option>
                                            <option value="">Social Security Number ID (SSN)</option>
                                            <option value="">CID</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification No.</label><span
                                        class="required">*</span>
                                    <input type="text" id="idno" name="idno" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Date of OD</label><span
                                        class="required">*</span>
                                    <input type="date" id="dateod" name="dateod" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Revision Type</label><span
                                        class="required">*</span>
                                    <input class="form-control" type="text" name="revtype" id="revtype" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Received Revision Notice Date</label><span
                                        class="required">*</span>
                                    <input type="date" id="rec_rev" name="recvdate" id="recvdate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Source</label><span class="required">*</span>
                                    <select class="form-control">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">New Info</option>
                                        <option value="">Complain</option>
                                        <option value="">Others</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
