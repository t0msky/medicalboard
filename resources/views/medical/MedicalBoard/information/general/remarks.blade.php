<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.general.remarks')</h5>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <div class="form-actions text-right">
                                    </div>
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th>@lang('form/medical.general.date')</th>
                                                <th>@lang('form/medical.remark.time')</th>
                                                <th>@lang('form/medical.remark.from')</th>
                                                <th>@lang('form/medical.remark.to')</th>
                                                <th>@lang('form/medical.general.remarks')</th>
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
                        <div class='form-row'>
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('form/medical.general.remarks')</label>
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class="col-md-12">
                                <div class="form-actions">
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