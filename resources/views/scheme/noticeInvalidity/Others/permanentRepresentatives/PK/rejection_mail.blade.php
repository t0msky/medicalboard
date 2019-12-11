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
                                    <label>@lang('Contracter Incharge')</label>
                                    <input type="text" id="contracterIncharge" name="contracterIncharge" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Contracted Incharge Phone Number')</label>
                                    <input type="text" id="contractedInchargePhoneNo" name="contractedInchargePhoneNo" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('Postal Address')</label>
                                <input type="text" readonly name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" readonly name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" readonly name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Postcode')</label>
                                <input type="text" readonly id="postcode_dependent" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('City')</label>
                                <input type="text" readonly id="city_dependent" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('State')</label>
                                <input type="text" readonly  id="state_dependent" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Branch Perkeso Name')</label>
                                    <input type="text" id="branchPerkesoName" name="branchPerkesoName" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>

