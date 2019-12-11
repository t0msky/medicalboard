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
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">@lang('Ref Number Appendix A')</label>
                                    <input type="text" readonly id="refNoAppendixA" name="refNoAppendixA" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-0"><br>
                                <div>
                                    <button class="btn btn-facebook waves-effect waves-light" type="button"><i
                                            class="fas fa-download"></i> </button>
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
                                    <input type="text" readonly id="casetype" name="casetype" value="" class="form-control">
                                </div>
                            </div>
                        </div>
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
                                    <label>@lang('Generate Date')</label>
                                    <input type="date" readonly id="generateDate" name="generateDate" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Source')</label>
                                    <select class="form-control" data-placeholder="source_wages" readonly tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="Akuan117">@lang('wages.attr.akuan117')</option>
                                        <option value="Counter">@lang('wages.attr.counter')</option>
                                    </select>
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

