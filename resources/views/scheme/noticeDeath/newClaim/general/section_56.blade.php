@section('css')

<style>

a#view{
    background-color:#5367db !important;
    color:white !important;
    padding-left: 12px !important;
    padding-right: 12px !important;
    padding-top: 5px !important;
    padding-bottom: 8px !important;
    border-radius: 10%;
    margin-top:5px !important;
    margin-bottom:5px !important;
    margin-right:5px !important;
}

.table thead th {
    font-weight: 700 !important;
}

</style>

@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <!-- Column -->
                    <div class="row p-t-20">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th width="1%">@lang('scheme/wages.attr.num')</th>
                                            <th width="10%">@lang('Employer Code')</th>
                                            <th>@lang('Employer Name')</th>
                                            <th width="9%">@lang('Action')</th>
                                            <th width="17%">@lang('Recommendation Status')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><a id='deletedraft' href="!#"><i class="fas fa-trash-alt "></i></a>
                                                <a id='view' href='#' data-toggle="modal" data-target="#viewSection56"><i class="fas fa-file-alt"></i></a></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
                            data-target="#poppup">@lang('ADD EMPLOYER')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ====================================== VIEW SECTION 56 ============================================= -->

<div id="viewSection56" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="vcenter">Add Employer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Employer Code')</label>
                                <input type="text" name="employerCode" id="empCode" value=""
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Employer Name')</label>
                                <input type="text" name="employerName" id="empName" value=""
                                    class="form-control" readonly>
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
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Employment End Date')</label>
                                <input type="text" name="empEndDate" id="empEDate" value=""
                                    class="form-control" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="table-responsive">
                            <table id="table_employer" class="table table-bordered"
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
                                    <tr data-expanded="true" id="emp_record1">
                                        <td>
                                            <div class="col-md-0">
                                                1.
                                            </div>
                                        </td>
                                        <td><input type="text" class="form-control" name="year[]" id="year1" readonly></td>
                                        <td><input type="text" class="form-control" name="month[]" id="month1" readonly></td>
                                        <td><input type="text" class="form-control" name="wages[]" id="wages1" readonly></td>
                                        <td>
                                            <select class="form-control" id="source1" name="source[]" readonly>
                                                <option selected disabled hidden>Please Choose </option>
                                                <option value="New IC">@lang('EPF')</option>
                                                <option value="Old IC">@lang('SOCSO')</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <center><input type="checkbox" class="custom-control-input" id="recommend_checkbox1" name="recommend" disabled>
                                                    <label class="custom-control-label" for="recommend_checkbox1"></label></center>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('Total Month Recommended')</label>
                                    <input type="text" name="totalMonthRecommended" id="tmRecommended" value=""
                                        class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="checkbox2" name="recommended" disabled>
                                        <label class="custom-control-label" for="checkbox2">Recomended</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>

<!-------------- POPUP/.modal -------------------->


<div id="poppup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="vcenter">Add Employer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
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
                        <table id="table_employer" class="table table-bordered"
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
                                <tr data-expanded="true" id="emp_record1">
                                    <td>
                                        <div class="col-md-0">
                                            1.
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control" name="year[]" id="year1"></td>
                                    <td><input type="text" class="form-control" name="month[]" id="month1"></td>
                                    <td><input type="text" class="form-control" name="wages[]" id="wages1"></td>
                                    <td>
                                        <select class="form-control" id="source1" name="source[]">
                                            <option selected disabled hidden>Please Choose </option>
                                            <option value="New IC">@lang('EPF')</option>
                                            <option value="Old IC">@lang('SOCSO')</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <center><input type="checkbox" class="custom-control-input" id="recommend_checkbox1" name="recommend">
                                                <label class="custom-control-label" for="recommend_checkbox1"></label></center>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-info waves-effect" id="add_record_56">ADD
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
                                    <input type="checkbox" class="custom-control-input" id="checkbox2" name="recommended">
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

<script>
    
    var no = 1;
    var count =1;

        $('#add_record_56').click(function(){
        // alert('masuk');
        no++;
        count++;
        $('#table_employer > tbody:last-child').append('<tr data-expanded="true"  id="emp_record'+no+'">'+
            '<td>'+
                '<div class="col-md-0">'+
                    +count+
                '</div>'+
            '</td>'+
            '<td><input type="text" class="form-control" name="year[]" id="year'+no+'"></td>'+
            '<td><input type="text" class="form-control" name="month[]" id="month'+no+'"></td>'+
            '<td><input type="text" class="form-control" name="wages[]" id="wages'+no+'"></td>'+
            '<td>'+
                    '<select class="form-control" id="source'+no+'" name="source[]">'+
                    '<option selected disabled hidden>Please Choose </option>'+
                    '<option value="New IC">@lang('EPF')</option>'+
                    '<option value="Old IC">@lang('SOCSO')</option>'+
                '</select>'+
            '</td>'+
            '<td>'+
                '<div class="form-group">'+
                    '<div class="custom-control custom-checkbox mr-sm-2">'+
                        '<center><input type="checkbox" class="custom-control-input" id="recommend_checkbox'+no+'" name="recommend">'+
                            '<label class="custom-control-label" for="recommend_checkbox'+no+'"></label></center>'+
                    '</div>'+
                '</div>'+
            '</td>'+
        '</tr>');

        checkbox ();

    });

</script>