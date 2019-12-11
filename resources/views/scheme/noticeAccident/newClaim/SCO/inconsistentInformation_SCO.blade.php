<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/inconsistentInformation.attr.item')</label>
                                        <input type="text" name="item" id="item" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scheme/inconsistentInformation.attr.data')</label>
                                        <input type="text" name="data" id="data" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/inconsistentInformation.attr.review')</label>
                                        <input type="text" name="review" id="review" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/inconsistentInformation.attr.review_by')</label>
                                        <input type="text" id="review_by" name="review_by" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>@lang('scheme/inconsistentInformation.attr.justification_finding')</h3>
                                    <hr>
                                        <div class="row p-t-20">    
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/inconsistentInformation.attr.date_investigation')</label>
                                                    <input id="date" name="date" type="date" value="" class="form-control" >
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" >@lang('inconsistentInformation.attr.date')</label>
                                                    <input id="date" name="date" type="date" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" >@lang('inconsistentInformation.attr.data_amendment')</label>
                                                        <input id="data_amendment" name="data_amendment" type="date" value="" class="form-control" >
                                                </div>
                                            </div> --}}
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/inconsistentInformation.attr.finding_data')</label>
                                                        <input type="text" id="finding_data" name="finding_data" value="" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                            <div  class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('scheme/inconsistentInformation.attr.justification_finding')</label>
                                                            <textarea rows="3" type="text" id="justification_finding" name="justification_finding" class="form-control" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/inconsistentInformation.attr.justify_by')</label>
                                                        <input type="text" id="justify_by" name="justify_by" value="" class="form-control" >
                                                </div>
                                            </div>
                                            <label class="control-label" id='lblmcerror' style='color:red'></label>
                                </div>
                            </div><br>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>