<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h5 class="card-title">	Remarks</h5>
                            <hr>
                            {{-- <div class="col-md-12" id="container">
                                <div class="table-responsive">
                                    <div class="form-actions text-right">
                                    </div>
                                    <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first"> --}}
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <div class="form-actions text-right">
                                        </div>
                                        <table class="table table-sm table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td> <input  type="hidden" id="date" name="date" value="" class="form-control" center >No Record</td>
                                                    <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="from" name="from" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="to" name="to" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="remark" name="remark" value="" class="form-control" required ></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Remarks</label>
                                        <textarea type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>