<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Notice Type')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Scheme Reference No ')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Name ')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('ID No.')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">@lang('Investigation Date ')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label">@lang('Place ')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-success">
                                <label class="control-label">State</label>
                                <select name="state" class="form-control">
                                <option>--Select Your Sate  --</option>
                                <option value="1">Selangor</option>
                                <option value="2">Perak</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('City ')</label>
                                <input type="text" value="" name="city" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Postcode ')</label>
                                <input type="text" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="table-responsive" id="table-generated">
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>@lang('No.')</th>
                                            <th>@lang('Claim History')</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td></td>    
                                        <td></td>    
                                    </tbody>                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-6">
                            <button type="button" class="btn btn waves-effect waves-light btn-success a1" id="btn_moei_investigation" data-toggle="modal"
                                data-whatever="@getbootstrap" aria-expanded="true"> @lang('Add Diagnosis')
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="table-responsive" id="table-generated">
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th style='width:5%'>@lang('No.')</th>
                                            <th style='width:45%'>@lang('Diagnosis')</th>
                                            <th style='width:45%'>@lang('5th Schedule')</th>
                                            <th style='width:5%'>@lang('Action')</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="moei1">
                                        <td style="display:none;"><input type="hidden" value="0"></td>    
                                        </tr>
                                    </tbody>                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('Family/Social History')</label>
                                <input type="text" value="" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('Medical History')</label>
                                <input type="text" value="" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-6 offset-6">
                            <button type="button" class="btn btn waves-effect waves-light btn-success a1" id="btn_description" data-toggle="modal"
                                data-whatever="@getbootstrap" aria-expanded="true">@lang('Add Job History') 
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="table-responsive" id="table-generated">
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>@lang('No.')</th>
                                            <th>@lang('Data(from year to year)')</th>
                                            <th>@lang('Company')</th>
                                            <th>@lang('Job Title')</th>
                                            <th>@lang('Job Description')</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="description">
                                        <td style="display:none;"><input type="hidden" value="0"></td>    
                                        </tr>
                                    </tbody>                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('Observation and Investigation')</label>
                                <input type="text" value="" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('Recommendation')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Prepared By')</label>
                                <input type="text" value="" class="form-control" readonly >
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6 offset-6">
                            <button type="submit" class="pull-center btn btn waves-effect waves-light btn-success a1">Preview/Save</button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<script>

$("#btn_moei_investigation").click(function () {
    var no = $('#myTable_moei_investigation tr:last td:first').find("input").val();
    var delete1 = "('Are you sure want to delete the draft?')";
    no++;
    // var no = no++;
    $('#myTable_moei_investigation > tbody:last-child').append('<tr id="moei'+no+'"> ' +
    '<td style="display:none;"><input type="hidden" value="'+no+'"></td>' +
    '<td>'+no+'</td> <td></td>' +
    '<td><select class="form-control" name="scedule" id="scedule"> <option value="PS" hidden selected readonly>Please Select</option><option value="Y">Yes</option> <option value="N">No</option><option value="N">Not Applicable</option></select></td>'+ 
    '<td><a class="btn btn-sm btn-danger"  id="deletedraft'+no+'" confirm('+delete1+'); ><i class="fas fa-trash-alt fa-sm"></i></a></td> </tr>');
    $('#deletedraft'+no+'').click(function(){
        alert('Are you sure want to delete the draft? ');

        $('#myTable_moei_investigation').each(function(){
        $('#moei'+no+'').remove();
    });
    });
});
</script>

<script>
    $("#btn_description").click(function(){
    var no = $('#table_description tr:last td:first').find("input").val();
    no++;

    $('#table_description> tbody:last-child').append('<tr id="description'+no+'"> ' +
    '<td style="display:none;"><input type="hidden" value="'+no+'"></td>' +
    '<td>'+no+'</td> <td></td>' +
    '<td></td>'+ 
    '<td></td>'+ 
    '<td></td> </tr>');
    
});
</script>