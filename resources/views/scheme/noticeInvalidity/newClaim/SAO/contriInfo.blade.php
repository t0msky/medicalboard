<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">

                    <!-- Column -->
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Employer Code</label>
                                <input type="date" name="emp_code" id="emp_code" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Employer Name</label>
                                <input type="date" name="emp_name" id="emp_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="xs">No .</th>
                                            <th data-breakpoints="xs">Year</th>
                                            <th>Month</th>
                                            <th>Wages (RM)</th>
                                            <th>@lang('scheme/wages.attr.source')</th>
                                            <th data-breakpoints="xs">Contribution Payable (RM)</th>
                                            <th data-breakpoints="xs">Contribution Paid (RM) </th>
                                            <th data-breakpoints="xs">Contribution (Surplus/deficit/arrears)</th>
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
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>

                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                      
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
