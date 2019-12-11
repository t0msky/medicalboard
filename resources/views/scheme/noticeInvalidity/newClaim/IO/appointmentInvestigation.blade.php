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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('appointment.title1')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="event-index">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="event-name" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8">
                                <input id="event-name" name="event-name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="event-location" class="col-sm-4 control-label">Location</label>
                            <div class="col-sm-8">
                                <input id="event-location" name="event-location" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
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
                        </div>
                    </form>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                  
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                </div>
            </div>
        </div>
    </div>
