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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Name</label><span
                                            class="required">*</span>
                                        <input type="text" id="name_asses" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Identification Type</label><span
                                            class="required">*</span>
                                            <select class="form-control clearfields" name='idtype' id='idtype' required>
                                            <option selected readonly disabled hidden>Please Select </option>
                                            {{-- @foreach ($idtype as $id)
                                            @if (old('idtype') == $id->refcode)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @else
                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                            @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Identification Number</label><span
                                            class="required">*</span>
                                        <input type="text" name="idNum" id="idNum_asses" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Postal Address</label>
                                        <input type="text" name="add1" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="add2" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="add3" value="" class="form-control">
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
                                    <label>Postcode</label>
                                    <input type="text"  id="postcode_dependent" name="postcode" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text"  id="city_dependent" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <input type="text"   id="state_dependent" name="state" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone Number</label><span class="required">*</span>
                                    <input type="text" id="telNo_asses" name="tel_no" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" id="email_asses" name="email" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">Save</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">Reset</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    