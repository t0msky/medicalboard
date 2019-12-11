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
                                    <label>@lang('Route')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('IO')</option>
                                        <option value="">@lang('SCO')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Status')</label>
                                    <input type="text" id="status" name="status" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Submission Date')</label>
                                    <input type="date" readonly id="submissionDate" name="submissionDate" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Submission By')</label>
                                    <input type="text" readonly id="submissionBy" name="submissionBy" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Payment')</label>
                                    <input type="text" readonly id="payment" name="payment" value=""
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
