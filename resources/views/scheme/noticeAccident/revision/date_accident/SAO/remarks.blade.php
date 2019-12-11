<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/scheme.remarks')</h5>
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
                                                <th>@lang('form/scheme.general.remarks.date')</th>
                                                <th>@lang('form/scheme.general.remarks.time')</th>
                                                <th>@lang('form/scheme.general.remarks.from')</th>
                                                <th>@lang('form/scheme.general.remarks.to')</th>
                                                <th>@lang('form/scheme.general.remarks.remarks')</th>
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
                                    <label class="control-label">@lang('form/scheme.general.remarks.remarks')</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('form/scheme.general.noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('form/scheme.general.noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('form/scheme.general.noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('form/scheme.general.noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>