<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('scheme/index.attr.remarks')</h5>
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
                                                <th>@lang('scheme/remark.attr.date')</th>
                                                <th>@lang('scheme/remark.attr.time')</th>
                                                <th>@lang('scheme/remark.attr.from')</th>
                                                <th>@lang('scheme/remark.attr.to')</th>
                                                <th>@lang('scheme/remark.attr.remark')</th>
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
                                    <label class="control-label">@lang('scheme/remark.attr.remark')</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>