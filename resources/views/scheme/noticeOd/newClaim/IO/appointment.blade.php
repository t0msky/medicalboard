<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body"> 
                <form class="form">
                    {{-- <h4 class="card-title">@lang('appointment.title')</h4> --}}

                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>

                    <br><br>       
                </form>
            </div>
        </div>
    </div>
</div>
    
{{-- MODAL --}}
<div class="modal fade" id="event-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="card-title">Investigation Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Date</label>
                                <input id="date" name="date" type="date" class="form-control">
                                {{-- <input id="min-date" name="date" type="text" class="form-control"> --}}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Time</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                        <input type="time" class="form-control" id='time' name="time" value="">
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input id="location" name="location" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Correspondence Address</label>
                                <input id="address" name="adresss" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label class="control-label">Correspondence Address</label> --}}
                                <input id="address" name="adresss" type="text" class="form-control">
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Correspondence Address</label>
                                <input id="address" name="adresss" type="text" class="form-control">
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input id="name" name="name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input id="address" name="adresss" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {{-- <label class="control-label">Correspondence Address</label> --}}
                                <input id="address" name="adresss" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Postcode</label>
                                <input id="postcode" name="postcode" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input id="city" name="city" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">State</label>
                                <input id="state" name="state" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="min-date" class="col-sm-4 control-label">Dates</label>
                        <div class="col-sm-8">
                            <div class="input-group input-daterange" id="date-range">
                                <input id="min-date" name="takwim-start-date" type="text" class="form-control">
                                <div class="input-group-prepend input-group-append">
                                    <div class="input-group-text">to</div>
                                </div>
                                <input name="takwim-end-date" type="text" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save-event">Save</button>
            </div>
        </div>
    </div>
</div>