<div class="form-row">
    <div class="form-group col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
            <form action="{{route('previewSpecialreport')}}">
                @csrf
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('MO Ref. No.')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Type of Investigation')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Date')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Insured Person Name')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ID No.')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Tel. No.')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Place of Investigation')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('City ')</label>
                            <input type="text" value="" name="city" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('Postcode ')</label>
                            <input type="text" name="postcode" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Service Provider')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Email')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Recommendation')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Status')</label>
                            <input type="text" value="Approved" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Justification')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <!-------------QUOTATION -------------->

                <h5 class="card-title">@lang('Quotation')</h5>

                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ref. No. :</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Expiry Date')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Amount')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <!--------------INVOICE -------------> 

                <h5 class="card-title">@lang('Invoice')</h5>

                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Ref. No.')</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Invoice Date')</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Amount')</label>
                            <input type="text" value="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Upload')</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">@lang('Choose file')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--------------REPORT -------------> 

                <h5 class="card-title">@lang('Report')</h5>

                <div class="row p-t-20">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Upload')</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">@lang('Choose
                                        file')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" href="{{route('previewSpecialreport')}}" name="action" value="Preview" class="btn btn waves-effect waves-light btn-success">@lang('button.submit')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                        onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                        onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                </div>
            </div>
        </div>
    </div>
</div>
