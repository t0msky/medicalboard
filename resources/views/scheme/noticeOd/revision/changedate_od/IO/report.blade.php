<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    {{-- <h5 class="card-title">@lang('scheme/investigationInfo.title')</h5>
                    <hr> --}}
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.date')</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.question_1')</label>
                                    <select class="form-control" id="question1" name="question1">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Y">@lang('scheme/investigationInfo.attr.yes')</option>
                                        <option value="N">@lang('scheme/investigationInfo.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.question_2')</label>
                                    <select class="form-control" id="question2" name="question2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Y">@lang('scheme/investigationInfo.attr.yes')</option>
                                        <option value="N">@lang('scheme/investigationInfo.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.question_3')</label>
                                    <select class="form-control" id="question3" name="question3">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Y">@lang('scheme/investigationInfo.attr.yes')</option>
                                        <option value="N">@lang('scheme/investigationInfo.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.question_4')</label>
                                    <select class="form-control" id="question4" name="question4">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Y">@lang('scheme/investigationInfo.attr.yes')</option>
                                        <option value="N">@lang('scheme/investigationInfo.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/investigationInfo.attr.question_5')</label>
                                    <select class="form-control" id="question5" name="question5">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="Y">@lang('scheme/investigationInfo.attr.yes')</option>
                                        <option value="N">@lang('scheme/investigationInfo.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">IO Recommendation</label>
                                    <select name="recommendation" id="recommendation" class="form-control">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">Bencana Kerja</option>
                                        <option value="">Bukan Bencana Kerja</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>