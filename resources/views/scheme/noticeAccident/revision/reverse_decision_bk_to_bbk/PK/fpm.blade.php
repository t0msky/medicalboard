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
                                <label class="control-label">@lang('insuredPerson.attr.caseStatus')</label><span class="required">*</span>
                                <input type="text"  id="caseStatus_reverseDecision" name="caseStatus" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                <input type="text"  id="name_reverseDecision" name="name" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_type')</label>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.id_num')</label>
                                <input type="text"  id="idNum_reverseDecision" name="id_num" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address')</label>
                                <input type="text"  name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postcode')</label>
                                <input type="text"  id="postcode_reverseDecision" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.city')</label>
                                <input type="text"  id="city_reverseDecision" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <input type="text"   id="state_reverseDecision" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.pobbox')</label>
                                <input type="text"  id="pobox_reverseDecision" name="pobox" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.lockbag')</label>
                                <input type="text"  id="lockbag_reverseDecision" name="lockbag" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.wdt')</label>
                                <input type="text"  id="wdt_reverseDecision" name="wdt" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                       <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.relationshipWithOB')</label>
                                <input type="text"  id="relationshipWithOB_reverseDecision" name="relationshipWithOB" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.statusPayment')</label>
                                <input type="text"  id="statusPayment_reverseDecision" name="statusPayment" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.numOfPayablePerson')</label>
                                <input type="text"  id="numberOfPayablePerson_reverseDecision" name="numberOfPayablePerson" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.claimAmount')</label>
                                <input type="text"  id="claimAmount_reverseDecision" name="claimAmount" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.payable')</label>
                                <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Yes">@lang('wages.attr.yes')</option>
                                        <option value="No">@lang('wages.attr.no')</option>
                                        <option value="Suspended">@lang('wages.attr.suspended')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
