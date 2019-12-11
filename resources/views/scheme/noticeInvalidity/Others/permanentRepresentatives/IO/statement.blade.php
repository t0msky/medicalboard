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

                        <h5 class="card-title">@lang('INSPECTION DETAILS')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Examiner Name')</label>
                                    <input type="text" readonly id="insuredPersonName" name="insuredPersonName" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('THE PERSON IN QUESTION DETAILS')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Identification Type')</label>
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
                                    <label>@lang('New Identification No.')</label>
                                    <input type="text" id="mobileNo" name="mobileNo" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Old Identification No.')</label>
                                    <input type="text" id="new_ic" name="new_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Others')</label>
                                    <input type="text" id="other" name="other" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Address')</label>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label"> @lang('Pstcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('City')</label>
                                    <input type="text" id="city" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('State')</label>
                                    <input type="text" id="state" name="state" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> @lang('Telephone No.')</label>
                                    <input type="text" id="relationshipPRwithOB" name="relationshipPRwithOB" value=""
                                        class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"> @lang('Age')</label>
                                        <input type="text" id="relationshipPRwithOB" name="relationshipPRwithOB"
                                            value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('About Investigation')</label>
                                        <input type="text" id="relationshipOBwithPR" class="form-control"
                                            name="relationshipOBwithPR" value="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h5 class="card-title">@lang('DETAILS PEOPLE WHO INTERVIEW')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('PN / PP Name')</label>
                                    <input type="text" id="pnppName" name="pnppName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('PN / PP Office')</label>
                                    <input type="text" id="pnppOffice" name="pnppOffice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('New IC')</label>
                                    <input type="text" id="new_ic" name="new_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Old IC')</label>
                                    <input type="text" id="old_ic" name="old_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Others')</label>
                                    <input type="text" id="other" name="other" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> @lang('OB Situation')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('Coma')</option>
                                        <option value="">@lang('Bedridden')</option>
                                        <option value="">@lang('Paralyzed')</option>
                                        <option value="">@lang('Lost Memory')</option>
                                        <option value="">@lang('Unable')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('PR Status')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('Permanent')</option>
                                        <option value="">@lang('Non Permanent')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('WITNESS DETAILS ')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Bank Name')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Address')</label>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label"> @lang('Postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('City')</label>
                                    <input type="text" id="city" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('State')</label>
                                    <input type="text" id="state" name="state" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Generate Date')</label>
                                    <input type="date" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Received Date')</label>
                                    <input type="date" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Received By')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Remark')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Recommendation To Close')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Routing Date')</label>
                                    <input type="date" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('Routing By')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">@lang('button.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/obform_od'">@lang('button.back')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
