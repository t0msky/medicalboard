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
                                   <label class="control-label">{{--@lang('insuredPerson.attr.name')--}}Name</label><span class="required">*</span>
                                   <input type="text"  id="nameMedical" name="name" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.id_num')--}}Identification No</label><span class="required">*</span>
                                    <input type="text"  id="idNuMedical" name="idNum" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.telephoneNo')--}}Telephone No</label><span class="required">*</span>
                                    <input type="text"  id="telNoMedical" name="telephoneNo" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>{{--@lang('insuredPerson.attr.postal_address')--}}Address</label><span class="required">*</span>
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
                                <label>{{--@lang('insuredPerson.attr.postcode')--}}Postcode</label>
                                <input type="text"  id="postcode_dependent" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{--@lang('insuredPerson.attr.city')--}}City</label>
                                <input type="text"  id="city_dependent" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.state')--}}State</label>
                                <input type="text"   id="state_dependent" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.email')--}}Email</label><span class="required">*</span>
                                    <input type="text" id="emailMedical" name="appealReceivedDateOfJDR" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.jdSessionDate')--}}JD Session Date</label><span class="required">*</span>
                                    <input type="text" id="jdSessionDateMedical" name="jdSessionDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.jddecision')--}}JD Decision</label><span class="required">*</span>
                                    <textarea id="jddecisionMedical" name="jddecision" value="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{--@lang('insuredPerson.attr.reasonAppeal')--}}Reason of Appeal</label><span class="required">*</span>
                                    <textarea id="reasonAppealMedical" name="reasonAppeal" value="" class="form-control"></textarea>
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
