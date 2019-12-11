<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <!-- Column -->
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-sm table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:3%'>@lang('No.')</th>
                                            <th style='width:25%'>@lang('Employer Code')</th>
                                            <th style='width:40%'>@lang('Employer Name')</th>
                                            <th style='width:8%'>@lang('Action')</th>
                                            <th dstyle='width:20%'>@lang('Recommendation Status')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td style="align:center;width:1%;">
                                                <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                                <a class='view'><i class="fas fa-file-alt"></i></a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td style="align:center;width:1%;">
                                                    <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                                    <a class='view'><i class="fas fa-file-alt"></i></a>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#poppup">@lang('ADD EMPLOYER')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-------------- POPUP/.modal -------------------->

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <!-- sample modal content -->
            <div id="poppup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content">
                    <h4 class="card-title" id="vcenter">@lang('Add Employer')
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h4>
                        <div class="modal-body">
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('Employer Code')</label>
                                        <input type="text" name="employerCode" id="empCode" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employer Name')</label>
                                        <input type="text" name="employerName" id="empName" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-0">
                                    <div class="form-group">
                                        <br>
                                        <button type="button" data-toggle="modal" data-target="#verticalcenter"
                                            class="btn btn-facebook waves-effect waves-light"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('Employment Start Date')</label>
                                        <input type="text" name="empStartDate" id="empSDate" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employment End Date')</label>
                                        <input type="text" name="empEndDate" id="empEDate" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th data-breakpoints="xs">@lang('scheme/wages.attr.num')</th>
                                                <th>@lang('scheme/wages.attr.year')</th>
                                                <th>@lang('scheme/wages.attr.month')</th>
                                                <th>@lang('Wages')</th>
                                                <th>@lang('Source')</th>
                                                <th>@lang('Recommended')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true">
                                                <td>1</td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td>
                                                    <select class="form-control" data-placeholder="idType_invalidity"
                                                        tabindex="2">
                                                        <option selected disabled hidden>Please Choose </option>
                                                        <option value="New IC">@lang('EPF')</option>
                                                        <option value="Old IC">@lang('SOCSO')</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                            <center><input type="checkbox" class="custom-control-input"
                                                                    id="checkbox1" value="check">
                                                                <label class="custom-control-label"
                                                                    for="checkbox1"></label></center>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">ADD
                                        RECORD</button>
                                </div>
                                <div class='row'>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>@lang('Total Month Recommended')</label>
                                            <input type="text" name="totalMonthRecommended" id="tmRecommended" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkbox2"
                                                    value="check">
                                                <label class="custom-control-label" for="checkbox2">Recomended</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">RESET</button>
                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">SAVE</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
        </div>
    </div>
</div>
