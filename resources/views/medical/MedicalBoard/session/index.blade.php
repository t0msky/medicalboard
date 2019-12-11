@extends('general.layouts.app')

@section('content')

<div class="form-row">
    <div class="col-lg-12">
        {{-- <div class="card"> --}}
            <div class="card-body m-10">
                <form action="" method="">
                {{ csrf_field() }}
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.secretariat.session_mgt')</h5>
                        <hr>
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane p-20 active" id="secretariat" role="tabpanel">
                                <ul class="nav  nav-tabs" role="tablist">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" data-toggle="tab" href="#panel_chairman" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                            <span class="hidden-xs-down">@lang('form/medical.secretariat.panelist_attendance')</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#ip_waiting_list" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                            <span class="hidden-xs-down">@lang('form/medical.secretariat.ip_waiting_list')</span>
                                        </a>
                                    </li> 
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#session_summary" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                            <span class="hidden-xs-down">@lang('form/medical.secretariat.session_summary')</span>
                                        </a>
                                    </li>  
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane p-20 active" id="panel_chairman" role="tabpanel">
                                        <div class="tab-pane p-20 " id="panel_chairman" role="tabpanel">
                                            @include('medical.medicalboard.session.panel_chairman')
                                        </div>
                                    </div>
                                    <div class="tab-pane p-20" id="ip_waiting_list" role="tabpanel">
                                        <div class="tab-pane p-20 " id="ip_waiting_list" role="tabpanel">
                                            @include('medical.medicalboard.session.ip_waiting_list')
                                        </div>
                                    </div>
                                    <div class="tab-pane p-20" id="session_summary" role="tabpanel">
                                        <div class="tab-pane p-20 " id="session_summary" role="tabpanel">
                                            @include('medical.medicalboard.session.session_summary')
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        {{-- </div> --}}
    </div>
</div>

@endsection

@section('js')

<script>
    $(document).ready(function(){

        document.getElementById("panelist_attendance").disabled = true;

        $('#appt_hospital_panel').change(function () { 
            checkingData1();
        });

        $('#appt_date_panel').change(function () { 
            checkingData1();
        });

        $('#appt_session_panel').change(function () { 
            checkingData1();
        });

        function checkingData1()
        {
            var hospital = $('#appt_hospital_panel').val();
            var date1 = $('#appt_date_panel').val();
            var session = $('#appt_session_panel').val();

            if(hospital != '' && date1 != '' && session != '')
                document.getElementById("panelist_attendance").disabled = false;
            else
                document.getElementById("panelist_attendance").disabled = true;
        }
       
        $("#addrowhospital").on("click", function () {
            var counter = $('#countHa').val();
            var newRowhospital = $("<tr id='addtable"+ counter +"'>");
            var cols = "";
            // counter++;
            cols += '<td>'+counter+'</td>';
            cols += '<td>'+
                        '<input type="text" name="nameH['+counter+']" id="nameH'+counter+'" class="form-control">'+
                    '</td>';
            cols += '<td>'+
                        '<input type="number" name="nric['+counter+']" id="nric'+counter+'" class="form-control">'+
                    '</td>';
            cols += '<td>'+
                        '<input type="number" name="acctno['+counter+']" id="acctno'+counter+'" class="form-control">'+
                    '</td>';

            cols += '<td>{{-- <input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"> --}}{{--<button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDelete"><i class="fas fa-trash-alt"></i></a></td>';
            newRowhospital.append(cols);
            $("table.table_chairman").append(newRowhospital);
            counter++;
            $('#countHa').val(counter);
        });

        var counterpanel = 1;
        $("#addrowpanel").on("click", function () {
            var newRow = $("<tr id='addtable"+ counterpanel +"'>");
            var cols = "";
            counterpanel++;
            cols += '<td>'+counterpanel+'</td>';
            cols += '<td>'+
                        '<input type="text" class="form-control"  name="" value="" id="">'+
                    '</td>';
            cols += '<td><select class="form-control" name="attd_attend1" id="attd_attend1">'+
                            '<option value="">-- @lang('option.please_select') -- </option>'+
                            '<option value="1">ATTEND</option>'+
                            '<option value="3">REPLACE</option>'+
                        '</select>'+
                    '</td>';
            cols += '<td><select class="form-control" name="attd_name" id="attd_name1">'+
                            '<option value="">-- @lang('option.please_select') -- </option>'+
                            '<option value="1">ATTEND</option>'+
                            '<option value="3">REPLACE</option>'+
                        '</select>'+
                    '</td>';

            // cols += '<td>{{-- <input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"> --}}{{--<button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDel"><i class="fas fa-trash-alt"></i></a></td>';
            newRow.append(cols);
            $("table.table_panel").append(newRow);
            // counterpanel++;
            // $('#takwim_table_count').val(counter);
        });

        $("#appt_hospital_session").select2();
        $("#appt_hospital_panel").select2();
        $("#appt_hospital_ip").select2();
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });        
    });

    $('#panelist_attendance').click(function () {
        
        var hospital = $('#appt_hospital_panel').val();
        var date1 = $('#appt_date_panel').val();
        var date = date1.replace(/-/g, "");
        var session = $('#appt_session_panel').val();
        var url = $('#application_url_listing').val();

        if(hospital != '' || date != '' || session != ''){
            $(document).ready(function() {

                $('#attendances').show();

                var countC = 1;
                var kC = 1;
                var lC = 1;

                var countP = 1;
                var kP = 1;
                var lP = 1;

                var countH = 1;
                var kH= 1;
                var lH= 1;
                
                var example_table = $('#chairman_table').dataTable({
                    destroy: true,
                    ajax: {
                        url: url + "/getchairmanattendance/" + hospital + "/" + date + "/" + session,
                        dataSrc: function(data){
                            if(data == null){
                                return [];
                            }
                            else {
                                return data;
                            }
                        },
                        dataType: "json",
                    },
                    "columns": [
                        { 
                            "data": "",
                            "defaultContent": ""
                        },
                        { 
                            "data": "name",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "replacementby",
                            "defaultContent": ""
                        },
                    ],
                    "columnDefs": [
                        {
                            "targets": [0],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="datacount'+countC+'" value="'+countC+'" class="form-control-plaintext" readonly>');
                                countC++;
                                
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [2],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<select class="form-control" name="attend_chairman['+kC+']" id="attend_chairman'+kC+'" onchange="attendChairman('+kC+')">' +
                                                        '<option value="">-- @lang('option.please_select') --' +  
                                                        '</option>' +
                                                        '<option value="1">ATTEND</option>' +
                                                        '<option value="2">REPLACE</option>' +
                                                    '</select>');
                                
                                kC++;
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [3],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;
                                // console.log(data);
                                var span = $('<span/>');
                                var $select = $('<select name="replace_chairman['+lC+']" class="form-control" id="replace_chairman'+lC+'" disabled>');
                                var option1 = $('<option value="">-- @lang('option.please_select') -- </option>');
                                $select.append(option1);

                                $.each(data, function (a, b) {
                                    var $option = $('<option value="'+b.user_id+'">'+b.replacementby+'</option>');
                                    $select.append($option);
                                });

                                span.append($select);

                                lC++;
                                return span.prop("outerHTML");
                            }
                        },
                    ],
                    "searching": false,
                    "displayLength": 10,
                    "lengthChange": false,
                    "paging": false,
                    "info": false,
                });

                var example_table2 = $('#panel_table').dataTable({
                    destroy: true,
                    ajax: {
                        url: url + "/getpanelattendance/" + hospital + "/" + date + "/" + session,
                        dataSrc: function(data){
                            if(data == null){
                                return [];
                            }
                            else {
                                return data;
                            }
                        },
                        dataType: "json",
                    },
                    "columns": [
                        { 
                            "data": "",
                            "defaultContent": ""
                        },
                        { 
                            "data": "name",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "replacementby",
                            "defaultContent": "Not Available"
                        },
                    ],
                    "columnDefs": [
                        {
                            "targets": [0],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="datacount'+countP+'" value="'+countP+'" class="form-control-plaintext" readonly>');
                                countP++;
                                
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [2],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<select class="form-control" name="attend_panel['+kP+']" id="attend_panel'+kP+'" onchange="attendPanel('+kP+')">' +
                                                        '<option value="">-- @lang('option.please_select') --' +  
                                                        '</option>' +
                                                        '<option value="1">ATTEND</option>' +
                                                        '<option value="2">REPLACE</option>' +
                                                    '</select>');
                                
                                kP++;
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [3],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;
                                // console.log(data);
                                var span = $('<span/>');
                                var $select = $('<select name="replace_panel['+lP+']" class="form-control" id="replace_panel'+lP+'" disabled>');
                                var option1 = $('<option value="">-- @lang('option.please_select') -- </option>');
                                $select.append(option1);

                                $.each(data, function (a, b) {
                                    var $option = $('<option value="'+b.user_id+'">'+b.replacementby+'</option>');
                                    $select.append($option);
                                });

                                span.append($select);

                                lP++;
                                return span.prop("outerHTML");
                            }
                        },
                    ],
                    "searching": false,
                    "displayLength": 10,
                    "lengthChange": false,
                    "paging": false,
                    "info": false,
                });

                var example_table3 = $('#ha_table').dataTable({
                    destroy: true,
                    ajax: {
                        url: url + "/gethaattendance/" + hospital,
                        dataSrc: function(data){
                            if(data == null){
                                return [];
                            }
                            else {
                                return data;
                            }
                        },
                        dataType: "json",
                    },
                    "columns": [
                        { 
                            "data": "",
                            "defaultContent": ""
                        },
                        { 
                            "data": "name",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "nric_no",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "acctno",
                            "defaultContent": ""
                        },
                    ],
                    "columnDefs": [
                        {
                            "targets": [0],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="datacount'+countH+'" value="'+countH+'" class="form-control-plaintext" readonly>');
                                countH++;
                                
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [2],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="nric['+kH+']" id="nric'+kH+'" value="'+data+'" class="form-control" readonly>');
                                
                                kH++;
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [3],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data = null ? data : 'Not Available';

                                var $textInput = $('<input type="number" name="acctno['+lH+']" id="acctno'+lH+'" value="'+data+'" class="form-control">');
                                
                                $('#countHa').val(lH);
                                lH++;
                                return $textInput.prop("outerHTML");
                            }
                        },
                    ],
                    "searching": false,
                    "displayLength": 10,
                    "lengthChange": false,
                    "paging": false,
                    "info": false,
                });

            });
                document.getElementById("panelist_attendance").disabled = true;

        }else{
            $('#chairman_table').DataTable().clear().draw();
            $('#panel_table').DataTable().clear().draw();
            $('#ha_table').DataTable().clear().draw();
            document.getElementById("panelist_attendance").disabled = true;
        }

    });

    function attendChairman(count)
    {

        var replace = $('#attend_chairman'+count).val();

        if(replace == '2')
            document.getElementById("replace_chairman"+count).disabled = false;
        else{
            $('#replace_chairman'+count).val('');
            document.getElementById("replace_chairman"+count).disabled = true;
        }

    }

    function attendPanel(count)
    {

        var replace = $('#attend_panel'+count).val();

        if(replace == '2')
            document.getElementById("replace_panel"+count).disabled = false;
        else{
            $('#replace_panel'+count).val('');
            document.getElementById("replace_panel"+count).disabled = true;
        }

    }

</script>

@endsection