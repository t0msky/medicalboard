<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Investigation Date</label>
                                    <input type="date" readonly id="investigation_date" name="investigation_date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Investigation Time</label>
                                    <input type="time" readonly id="investigation_time" name="investigation_time" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Appointment Person</label>
                                    <select readonly class="form-control" data-placeholder="appointment_person" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="employer">Employer</option>
                                        <option value="ob">Insured Person</option>
                                        <option value="dependent">Dependents</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Dependents Name</label>
                                    <select readonly class="form-control" data-placeholder="dependent_name" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Interviewee Name</label>
                                    <input type="text" readonly id="updated_by" name="name" value="" class="form-control" placeholder="IO/SAO">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.postal_address1')</label>
                                    <input type="text" readonly id="postal_address1" name="postal_address1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.postal_address2')</label>
                                    <input type="text" readonly id="postal_address2" name="postal_address2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.postal_address3')</label>
                                    <input type="text" readonly id="postal_address3" name="postal_address3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">IO Name</label>
                                    <input type="text" readonly id="postal_address1" name="postal_address1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">IO Email</label>
                                    <input type="text" readonly id="postal_address2" name="postal_address2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Investigation Place</label>
                                    <input type="text" readonly id="postal_address3" name="postal_address3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Required Document</label>
                                    <input type="text" readonly id="req_doc" name="req_doc" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>