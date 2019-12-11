<div class="form-row">
    <div class="form-group col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route ('set_appointment')}}" method="POST">
                @csrf
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Meeting Reference No.')</label>
                                <input type="text" value="" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Opinion Case No.') </label>
                                <input type="text" value="" class="form-control clearFields" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Doctor Name')</label>
                                <select class="form-control clearFields" id="ms_mia_docname">
                                    <option value="" hidden selected readonly>Please Select</option>
                                    <option value="Afiqah">Afiqah</option>
                                    <option value="N"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Date')</label>
                                <input type="date" value="" id="ms_mia_date" class="form-control clearFields">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Time')</label>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control clearFields" id="ms_mia_time">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-10 m-b-10">
                                <div id="input-type" class="row">
                                    <div class="col-sm-3 m-b-10">
                                        <label class="radio-inline m-b-10" onclick=""><input type="radio" id="radio_emp" name="servicetype19" />
                                            @lang('Employer')</label>
                                    </div>
                                    <div class="col-sm-3 m-b-10">
                                        <label class="radio-inline m-b-10" onclick=""><input type="radio" id="radio_od" name="servicetype19"  />
                                            @lang('OD')</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Address')</label>
                                    <input type="text" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-success">
                                    <label class="control-label">State</label>
                                    <select name="state" class="form-control">
                                    <option>--  Select Your Sate  --</option>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Contact No.')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Email')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Agencies')</label>
                                    <select class="form-control clearFields" id="agency">
                                        <option value="PS" hidden selected readonly>Please Select</option>
                                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                                        <option value="N"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Email')</label>
                                    <input type="text" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6 offset-6">
                                <button type="button" class="btn btn waves-effect waves-light btn-success a1" id="btn_add_sp" data-toggle="modal" 
                                data-target="#quotationModal" data-whatever="@getbootstrap" aria-expanded="true">@lang('Add')</button>
                            </div>
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="table-responsive" id="table-generated">
                                        <table class="table table-sm table-bordered" data-toggle-column="first">
                                            <thead style="background-color:skyblue;">
                                                <tr>
                                                    <th>@lang('Date')</th>
                                                    <th>@lang('Time')</th>
                                                    <th>@lang('Place')</th>
                                                    <th>@lang('Doctor Name')</th>
                                                    <th>@lang('Employer')</th>
                                                    <th>@lang('Agency')</th>
                                                    <th>@lang('Action')</th>
                                                    <th>@lang('Select')</th>
                                                </tr>
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
                            </div>
                        </div>
                        <button type=" button" class="btn btn waves-effect waves-light btn-success a1">@lang('Send Invitation')</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var no = $('#myTable_doctor tr:last td:first').find("input").val();
    $("#btn_add_sp").click(function () {

        var delete11 = "('Are you sure want to delete the draft?')";
        no++;

        //   alert(no);
        var datet = $('#ms_mia_date').val();
        var timet = $('#ms_mia_time').val();
        var place = $('#ms_mia_place').val();
        var doctor_name = $('#ms_mia_docname').val();

        // alert(datet);
        // var employer=$('#employer').val(); 
        // var agency=$('#agency').val(); 
        // var no = no++;
        $('#myTable_doctor> tbody:last-child').append('<tr id="clarif' + no + '">' +
            '<td style="display:none;"><input type="hidden" value="' + no + '"></td>' +
            ' <td>  <input type="text" value="' + datet + '" id="ms_mia_date" name="ms_mia_date[' + no +
            ']" class="form-control" readonly></td>' +
            ' <td>  <input type="text" value="' + timet + '" id="ms_mia_time" name="ms_mia_time[' + no +
            ']" class="form-control" readonly></td>' +
            '<td><input type="text" value="' + place + '" id="ms_mia_place" name="ms_mia_place[' + no +
            ']" class="form-control" readonly></td>' +
            '<td><input type="text" value="' + doctor_name + '" id="ms_mia_docname" name="ms_mia_docname[' +
            no + ']" class="form-control" readonly></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td><a class="btn btn-sm btn-danger"  id="deletedraft' + no + '" confirm(' + delete11 +
            '); ><i class="fas fa-trash-alt fa-sm"></i></a></td>' +
            '<td><div class="custom-control custom-checkbox mr-sm-2 mb-3"><input type="checkbox" class="custom-control-input" id="checkbox1' +
            no +
            '" value="check"><label class="custom-control-label" for="checkbox0"></label></div></td> </tr>');

        //  confirm('+delete1+');
        $('#deletedraft' + no + '').click(function () {
            $('#myTable_doctor').each(function () {
                $('#clarif' + no + '').remove();
            });
        });


        $('#reset').find('form').submit();
        $('.clearFields').val('');



    });

</script>
