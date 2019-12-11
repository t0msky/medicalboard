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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_obProf" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">State</label>
                                <input type="text"  id="state_obProf" name="state" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postcode</label>
                                <input type="text"  id="postcode_obProf" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Email Address</label>
                                <input type="email"  id="email_obProf" name="email" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Telephone No</label>
                                <input type="text" id="telNo_obProf" name="telNo" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Mobile No</label>
                                <input type="text"  id="mobileNo_obProf" name="mobileNo" value="" class="form-control">
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
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('noticetype.back')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
