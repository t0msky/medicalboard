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
                                   <label class="control-label">Notice ID</label>
                                   <input type="text"  readonly id="noticeID_medical" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" readonly id="name_paymentOption" name="name" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="New IC">@lang('New IC')</option>
                                        <option value="Old IC">@lang('Old IC')</option>
                                        <option value="Army ID">@lang('Army ID')</option>
                                        <option value="Police ID">@lang('Police ID')</option>
                                        <option value="Social Security ID">@lang('Social Security ID')</option>
                                        <option value="CID">@lang('CID')</option>
                                </select>                                
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">Identification No.</label>
                                <input type="text" readonly id="idNum_paymentOption" name="id_num" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Accident Date</label>
                                    <input type="date" readonly id="accDate_paymentOption" name="accDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Notice Date</label>
                                    <input type="text" readonly id="noticeDate_paymentOption" name="noticeDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Case Type</label>
                                    <input type="text" readonly id="casetype_paymentOption" name="casetype" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <input type="text" readonly id="status_paymentOption" name="status" value="" class="form-control">
                                </div>
                            </div>
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
