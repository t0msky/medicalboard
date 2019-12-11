<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">

                    <!-- Column -->
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Employment Start Date</label>
                                <input type="date" name="emp_start_date" id="emp_start_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Employment End Date</label>
                                <input type="date" name="emp_end_date" id="emp_end_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">

                            {{-- <div class="table-responsive">
                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th data-breakpoints="xs">@lang('scheme/wages.attr.num')</th>
                                                <th>@lang('scheme/wages.attr.year')</th>
                                                <th>@lang('scheme/wages.attr.month')</th>
                                                <th>@lang('scheme/wages.attr.contribute')</th>
                                                <th>@lang('scheme/wages.attr.action')</th>
                                            
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
                                                <td><button type="button" data-toggle="modal" data-target="#verticalcenter" class="btn btn-facebook waves-effect waves-light"><i
                                                    class="fas fa-search"></i></button> </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>

                                                    <input type="text" class="form-control">

                                                </td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td> <button type="button" data-toggle="modal" data-target="#verticalcenter" class="btn btn-facebook waves-effect waves-light"><i
                                                    class="fas fa-search"></i></button></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>

                                                    <input type="text" class="form-control">

                                                </td>

                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td> <button type="button" data-toggle="modal" data-target="#verticalcenter" class="btn btn-facebook waves-effect waves-light"><i
                                                    class="fas fa-search"></i></button></td>
                                                
                                            </tr>
                                          
                                        </tbody>
                                    </table>

                                </div> --}}
                            <div class="table-responsive">
                                <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                                    data-paging="true" data-paging-size="7">
                                    <thead>
                                        <tr>
                                            <th style='width:5%'>@lang('scheme/wages.attr.num')</th>
                                            <th>@lang('scheme/wages.attr.year')</th>
                                            <th>@lang('scheme/wages.attr.month')</th>
                                            <th>@lang('scheme/wages.attr.contribute')</th>
                                            <th style='width:5%'>@lang('scheme/wages.attr.action')</th>

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
                                            <td><button type="button" data-toggle="modal" data-target="#verticalcenter"
                                                    class="btn btn-facebook waves-effect waves-light"><i
                                                        class="fas fa-search"></i></button> </td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td> <button type="button" data-toggle="modal" data-target="#verticalcenter"
                                                    class="btn btn-facebook waves-effect waves-light"><i
                                                        class="fas fa-search"></i></button></td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td> <button type="button" data-toggle="modal" data-target="#verticalcenter"
                                                    class="btn btn-facebook waves-effect waves-light"><i
                                                        class="fas fa-search"></i></button></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- sample modal content -->
                    <div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Employer
                                            Code:</label>

                                        <a href="#" class="text-info" title="Click To Edit Information"
                                            data-toggle="modal" data-target="#employer_code">10004</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Employer
                                            Name:</label>
                                        <label for="recipient-name" class="control-label">Heitech Padu Berhad</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Start
                                            Date:</label>
                                        <label for="recipient-name" class="control-label">20/3/2019</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">End
                                            Date:</label>
                                        <label for="recipient-name" class="control-label">13/8/2019</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Contribution:</label>
                                        <label for="recipient-name" class="control-label">RM
                                            2000</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect"
                                        data-dismiss="modal">Close</button>
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

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- sample modal content -->
                    <div id="employer_code" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Employer
                                            Code:</label>
                                        <label for="recipient-name" class="control-label"><a data-toggle="modal"
                                                data-target="#employer_code">10004</a></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Employer
                                            Name:</label>
                                        <label for="recipient-name" class="control-label">Heitech Padu Berhad</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Address:</label>
                                        <input type="text" class="form-control" id="recipient-name"
                                            value="No 5 Jalan usj 12/1j">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Phone No:</label>
                                        <input type="text" class="form-control" id="recipient-name" value="013-6134022">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Email :</label>
                                        <input type="text" class="form-control" id="recipient-name"
                                            value="najmiemon42@gmail.com">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">Save
                                        changes</button>

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
        <div class="form-actions">
            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
          
            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
        </div>
    </div>
</div>