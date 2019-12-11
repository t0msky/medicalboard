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
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Notice ID</label>
                                   <input type="text" readonly id="notice_els" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.name')--}}Name</label>
                                    <input type="text" readonly id="name_els" name="name" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.id_num')--}}Identification No</label>
                                <input type="text" readonly id="idNum_els" name="id_num" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.accDate')--}}Accident Date</label>
                                <input type="date" readonly id="accDate_els" name="accDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.scheme_ref_info')--}}Scheme Ref. No</label>
                                    <input type="date" readonly id="schemeRefInfoMedical" name="schemeRefInfo" value="" class="form-control">
                                </div>
                          </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.notice_date')--}}Notice Date</label>
                                    <input type="date" readonly id="noticeDateMedical" name="notice_date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.noticetype')--}}Notice Type</label>
                                    <input type="text" readonly id="caseTypeMedical" name="casetype" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.casetype')--}}Case Type</label>
                                    <input type="text" readonly id="caseTypeMedical" name="casetype" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.status')--}}Status</label>
                                    <input type="text" readonly id="statusMedical" name="status" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.invalidityStartingDate')--}}Invalidity Starting Date Requirements</label>
                                    <input type="date" readonly id="invalidityStartingDateMedical" name="invalidityStartingDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.morbidDateRequirement')--}}Morbid Date Requirements</label>
                                    <input type="date" readonly id="morbidDateRequirementMedical" name="morbidDateRequirement" value="" class="form-control">
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
