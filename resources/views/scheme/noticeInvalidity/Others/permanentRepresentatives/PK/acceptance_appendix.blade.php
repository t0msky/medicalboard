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
                                    <label>@lang('Notice')</label>
                                    <input type="text" readonly id="notice" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Casetype')</label>
                                    <input type="text" readonly id="casetype" name="casetype" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('Insured Person')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Insured Person Name')</label>
                                    <input type="text" readonly id="insuredPersonName" name="insuredPersonName" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Permanent Representatives Type')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="">@lang('Mother')</option>
                                        <option value="">@lang('Father')</option>
                                        <option value="">@lang('Husband')</option>
                                        <option value="">@lang('Wife')</option>
                                        <option value="">@lang('Other')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('New IC')</label>
                                    <input type="text" readonly id="new_ic" name="new_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Old IC')</label>
                                    <input type="text" readonly id="old_ic" name="old_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Others')</label>
                                    <input type="text" readonly id="other" name="other" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('Permanent Representative')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Permanent Representative Name')</label>
                                    <input type="text" id="PRName" name="PRName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Mobile Number')</label>
                                    <input type="text" id="mobileNo" name="mobileNo" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('Postal Address')</label>
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
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('Relationship Permanent Representative With Insured
                                    Person')</label>
                                <input type="text" id="relationshipPRwithOB" name="relationshipPRwithOB" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Relationship Insured Person with Permanent
                                    Representative ')</label>
                                <input type="text" id="relationshipOBwithPR" class="form-control"
                                    name="relationshipOBwithPR" value="">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('Insured Person Situation')</label>
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
                                <label class="control-label">@lang('Permanent Representative Status')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Permanent')</option>
                                    <option value="">@lang('Non Permanent')</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('PN / PP ')</h5>
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
                    </div>
                    <div class='row'>
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
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('Insured Person Situation')</label>
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
                                <label class="control-label">@lang('Permanent Representative Status')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Permanent')</option>
                                    <option value="">@lang('Non Permanent')</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('Bank')</h5>
                    <hr>

                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Bank Name')</label>
                                <input type="text" id="bankName" name="bankName" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Bank Branch')</label>
                                <input type="text" readonly id="bankBranch" name="bankBranch" value=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('Postal Address')</label>
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
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
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
