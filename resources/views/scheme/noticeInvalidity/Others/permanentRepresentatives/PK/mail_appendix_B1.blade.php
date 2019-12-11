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
                                    <label>@lang('CEO Name')</label>
                                    <input type="text" readonly id="ceoName" name="ceoName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('CEO ID')</label>
                                    <input type="text" readonly id="ceoID" name="ceoID" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-13">
                            <div class="form-group">
                                <label>@lang('HQ Address')</label>
                                <input type="text" name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-13">
                            <div class="form-group">
                                <input type="text" name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-13">
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
                                <label>@lang('SCO Branch Name')</label>
                                <input type="text" id="scoBranchName" name="scoBranchName" value=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-13">
                            <div class="form-group">
                                <label>@lang('SCO Office Address')</label>
                                <input type="text" name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-13">
                            <div class="form-group">
                                <input type="text" name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-13">
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
                                <label>@lang('Position PN/PP')</label>
                                <input type="text" readonly id="branchPerkesoName" name="branchPerkesoName" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Position SCO')</label>
                                <input type="text" readonly id="positionSCO" name="positionSCO" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Month')</label>
                                <input type="text" readonly id="month" name="month" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Signed Date')</label>
                                <input type="date" id="signedDate" name="signedDate" value="" class="form-control">
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


