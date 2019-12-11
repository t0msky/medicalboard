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
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Recommendation</label>
                                   <select class="form-control" readonly data-placeholder="sco_recommendation" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="1">Recommended</option>
                                        <option value="2">Not Recommended</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Recommended By</label>
                                <input type="text" id="sco_recommendedby" readonly name="sco_recommendedby" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Recommended Date</label>
                                <input type="date" id="sco_recommendeddate" readonly name="sco_recommendeddate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button> --}}
                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>    --}}
                                {{-- <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
