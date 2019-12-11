<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
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
                                    <label class="control-label">@lang('insuredPerson.attr.investigationDate')</label>
                                    <input type="date" id="investigationDate" name="investigationDate" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.investigationReportQuest1')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.investigationReportQuest2')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.investigationReportQuest3')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.investigationReportQuest4')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.investigationReportQuest5')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.ioRecommend')</label>
                                    <input type="text" id="ioRecommend" name="ioRecommend" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
