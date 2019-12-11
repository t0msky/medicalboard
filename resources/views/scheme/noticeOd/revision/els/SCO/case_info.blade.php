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
                                    <label class="control-label">Case Type</label>
                                    <select class="form-control" data-placeholder="caseType_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="FHUK">FHUK</option>
                                        <option value="PI">PI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Notice ID</label>
                                    <input type="text" id="noticeID_els" name="notice" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Revision Type</label>
                                    <input type="text" id="revType_els" name="rev_type" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Revision Reason</label>
                                    <select class="form-control" data-placeholder="revReason_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Application">Application</option>
                                        <option value="Review">Review</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Source</label>
                                    <select class="form-control" data-placeholder="source_els" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Email">Email</option>
                                        <option value="OTC">OTC</option>
                                        <option value="Portal">PORTAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Date of Revision Notice Received</label>
                                    <input type="date" id="dateRevNotice_els" name="dateRevNotice" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Start Date of Revision Payment</label>
                                    <input type="date" id="dateRevNotice_els" name="dateRevNotice" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">SAVE</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">RESET</button>

                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">CANCEL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
