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
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}JD Session Date</label>
                                <input type="date" readonly name="jdsessiondate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}JD Type</label>
                                <input type="text" readonly name="jdtype" value="JDR" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Invalidity Start Date</label>
                                <input type="date" readonly name="invaliditystartdate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Morbid Date</label>
                                <input type="date" readonly name="morbiddate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Invalidity Decision</label>
                                <input type="text" readonly name="invalidity_decision" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}ELS</label>
                                <input type="text" readonly name="els" value="" class="form-control">
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
