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
                                    <label class="control-label">@lang('Name')</label><span
                                        class="required">*</span>
                                    <input type="text" id="name_PaymentOption" name="name" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('ID Type')</label><span
                                        class="required">*</span>
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
                                    <label class="control-label">@lang('ID Number')</label><span
                                        class="required">*</span>
                                    <input type="text" id="idNum_PaymentOption" name="id_num" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Mobile Number')</label><span
                                        class="required">*</span>
                                    <input type="text" id="mobileNo_PaymentOption" name="mobileNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Email')</label><span
                                        class="required">*</span>
                                    <input type="text" id="email_PaymentOption" name="email" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('postal Address')</label><span
                                        class="required">*</span>
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
                                    <label>@lang('Postcode')</label><span class="required">*</span>
                                    <input type="text" id="postcode_dependent" name="postcode" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('City')</label><span class="required">*</span>
                                    <input type="text" id="city_dependent" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('State')</label><span class="required">*</span>
                                    <input type="text" id="state_dependent" name="state" value="" class="form-control">
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
