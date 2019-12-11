<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <form action="#"> --}}
                <form action="" method="POST">
                    <div class="form-body">
                        {{-- <h3 class="card-title">@lang('insuredPerson.title')</h3>
                        <hr> --}}
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" id="name" name="name" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">New IC</option>
                                        <option value="">Old IC</option>
                                        <option value="">Army ID</option>
                                        <option value="">Police ID</option>
                                        <option value="">Social Security Number ID (SSN)</option>
                                        <option value="">CID</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">New Identification No.</label>
                                    <input type="text" id="ic_no" name="ic_no" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" id="address1" name="address1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="address2" name="address2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="address3" name="address3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <select class="form-control" tabindex="1">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="NegeriSembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                        <option value="KualaLumpur">W.P Kuala Lumpur</option>
                                        <option value="Labuan">W.P Labuan</option>
                                        <option value="Putrajaya">W.P Putrajaya</option>
                                    </select>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" id="city" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postcode</label>
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telephone No.</label>
                                    <input type="text" id="telNo" name="telNo" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" id="age" name="age" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>About Investigation</label>
                                    <input type="text" id="about" name="about" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                       <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
