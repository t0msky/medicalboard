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
                                    <label>@lang('Ref Permanent Representative Number')</label>
                                    <input type="text" readonly id="refPRNo" name="refPRNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Sign Date B')</label>
                                    <input type="text" readonly id="signDateB" name="signDateB" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Date Of Death')</label>
                                    <input type="date" readonly id="dod" name="dod" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Contracted Incharge Phone Number')</label>
                                    <input type="text" readonly id="contractedInchargePhoneNo"
                                        name="contractedInchargePhoneNo" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
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
                                    <label>@lang('Signed Date')</label>
                                    <input type="text" id="signedDate" name="signedDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Signed By')</label>
                                    <input type="text" id="signedBy" name="signedBy" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Generate Date')</label>
                                    <input type="text" readonly id="generateDate" name="generateDate" value=""
                                        class="form-control">
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
</div>
