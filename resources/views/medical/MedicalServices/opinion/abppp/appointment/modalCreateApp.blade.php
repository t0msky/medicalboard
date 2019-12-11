@section('css')
<style>

label {
    display: -webkit-box !important;
    vertical-align: top;
}

</style>
@endsection

<!---------------- MODAL CREATE APPOINTMENT ---------------------->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="appointment" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <h5 class="card-title" id="appointment" style="text-align: left">@lang('Create Appointment')
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h5>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Date')</label>
                        <input type="date" value="" id="create_date" class="form-control" >
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="m-t-20">@lang('Time')</label>
                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                            <input type="text" class="form-control" value="" id="create_time">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Place')</label>
                        <input type="text" id="" value="" class="form-control" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('Meeting Ref. No.')</label>
                        <input type="text" id="id_meeting" value="" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('Chairperson :')</label>
                        <input type="text" id="" value="" class="form-control">
                    </div>
                </div>
                    
                <div class="col-md-12" >
                    <div class="table-responsive">
                        <button type="button" id="panel" class="btn btn waves-effect waves-light btn-success" aria-expanded="true">@lang('Add Panel')</button>
                        <br>
                        <table id="tablePanel" class="table table-bordered"
                            data-toggle-column="first" style="text-align: left">
                            <thead>
                                <tr>
                                    <th style='width:40%'>@lang('Committee Panel')</th>
                                    <th style='width:50%'>@lang('Name')</th>
                                    <th style='width:10%'>@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="display:none;"><input type="hidden" value="0"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                        <button type="button" id="ob" class="btn btn waves-effect waves-light btn-success" aria-expanded="true">@lang('Add OB')</button>
                    <div class="table-responsive">
                        <table id="tabelOB" class="table table-bordered"data-toggle-column="first" style="text-align: left">
                            <thead>
                                <tr>
                                    <th style='width:20%'>@lang('MO Ref. No')</th>
                                    <th style='width:30%'>@lang('IP Name')</th>
                                    <th style='width:20%'>@lang('ID No.')</th>
                                    <th style='width:20%'>@lang('JD Date')</th>
                                    <th style='width:10%'>@lang('Select')</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="button" id="btn_create" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse" aria-expanded="true">@lang('Save')</button>
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">@lang('Close')</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        //------------------TABLE PANEL -------------
        $("#panel").click(function () {
           
        var no = $('#tablePanel tr:last td:first').find("input").val();
         no++

        $('#tablePanel > tbody:last-child').append('<tr data-expanded="true">' + no +
            '<td><input type="text" class="form-control" value=""></td>'+
            '<td><input type="text" class="form-control" value=""></td>'+
            '<td><div class="input-group-append"><a class="updatedraft" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-edit" title="Update" data-toggle="tooltip"></i>'+
            '</a>&nbsp;<a class="deletedraft" id="delete'+no+'" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>&nbsp;'+
            '<a class="get-code view" href="#tt1"aria-expanded="true"><i class="fas fa-file-alt"title="View" data-toggle="tooltip"></i></a></div></td></tr>');
        
        });

        //------------------TABLE OD -------------
        $("#ob").click(function () {
           
           var no = $('#tablePanel tr:last td:first').find("input").val();
            no++
   
           $('#tabelOB > tbody:last-child').append('<tr data-expanded="true">' + no + '<td><input type="text" class="form-control" value=""></td><td><input type="text" class="form-control" value=""></td><td><input type="text" class="form-control" value=""></td><td><input type="text" class="form-control" value=""></td><td><center><input type="checkbox" name="" value=""></center></td>/tr>');
           
           });
    });
</script>













    