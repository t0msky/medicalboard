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
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}If Related to Section 96</label>
                                   <input type="text" name="section96" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}HUK Notice ID</label>
                                   <input type="text" name="huk_notice_id" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Option HUK or ILAT (Section 96)</label>
                                   <input type="text" name="option_huk_ilat" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Date of Option Received (Section 96)</label>
                                   <input type="date" name="date_notice_sec96" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appealBySocso')--}}Potential Section 96</label>
                                    <select class="form-control" data-placeholder="potential_sec96" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.appealReason')--}}Remark</label>
                                    <textarea name="remark" readonly class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>   
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
