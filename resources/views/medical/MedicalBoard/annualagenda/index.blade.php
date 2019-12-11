@extends('general.layouts.app')

@section('css')
<link href="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.css')}}" rel="stylesheet">
{{-- <link href="{{asset('js-year-calendar/dist/js-year-calendar.css')}}" rel="stylesheet"> --}}
<style>
    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 1px solid #949596ab !important;
        border-radius: 4px;
        cursor: text;
        margin-left: 5px;
        padding-right: 10px;
        padding-bottom: 8px;
        font-size: .875rem;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #284682!important;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px;
        font-size: .875rem;
    }

    .select2-container--default .select2-search--inline .select2-search__field {
        width: 120px ! important; 
        color: black;
        font-size: .875rem;
        /*border: 1px solid black;*/
    }
    label.error {
        color:red;
        display:block;
        font-weight: normal !important;
    }

</style>
@endsection

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        {{-- <div class="card"> --}}
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="tabMenu">
                    
                    <li class="nav-item"> 
                        <a class="nav-link active" data-toggle="tab" href="#calendar_takwim" role="tab"><span class="hidden-sm-up"><i class="ti-calendar"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.calendar')</span>
                        </a> 
                    </li>

                    <li class="nav-item"> 
                        <a class="nav-link" data-toggle="tab" href="#listing_takwim" role="tab">
                            <span class="hidden-sm-up"><i class="ti-menu-alt"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.summary_listing')</span>
                        </a> 
                    </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    
                    <div class="tab-pane p-20 active" id="calendar_takwim" role="tabpanel">
                        @include('medical.medicalboard.annualagenda.calendar')
                    </div>

                    <div class="tab-pane p-20" id="listing_takwim" role="tabpanel">
                        @include('medical.medicalboard.annualagenda.summary_listing')
                    </div>

                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>

@endsection

@section('js')

<script src="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.js')}}"></script>
{{-- <script src="{{asset('js-year-calendar/dist/js-year-calendar.js')}}"></script> --}}
@include('medical.medicalboard.annualagenda.calendar_js')

{{-- FORM DEFAULT --}}
<script>

    $('#addtakwim_form').submit(function(e){
        e.preventDefault(); // Prevent Default Submission
    });
    $('#updatetakwim_form').submit(function(e){
        e.preventDefault(); // Prevent Default Submission
    });
    $('#rescheduletakwim_form').submit(function(e){
        e.preventDefault(); // Prevent Default Submission
    });
    $('#duplicatetakwim_form').submit(function(e){
        e.preventDefault(); // Prevent Default Submission
    });
    $('#deletetakwim_form').submit(function(e){
        e.preventDefault(); // Prevent Default Submission
    });

    $('.selectmultiple').selectpicker();
</script>

{{-- CALENDAR --}}
<script type="text/javascript">
    $('#takwim_hospital').change(function () { 

        var hospital_id = $(this).val();
        
        if(hospital_id == ''){
            $('#takwim_address').val('');
            $('#takwim_statecode').val('');
            $('#calendar').hide();
        }else{
            $('#calendar').show();
            calendar(hospital_id);
        }
        var url = $('#application_url').val(); 

        $.ajax({
            url: url + "/takwim/hospital_address/" + hospital_id, 
            dataType: "json", 
            error: function (data){
                $('#takwim_address').empty();
                $('#takwim_address').val('');

                $('#takwim_statecode').empty();
                $('#takwim_statecode').val('');
            },
            success: function (data) { 
                // console.log(data);
                $('#takwim_address').empty();
                $('#takwim_address').val((data[0].add1 ? data[0].add1 + ' ':'') + (data[0].add2 ? data[0].add2 + ' ':'') + (data[0].add3 ? data[0].add3 + ' ':'') + (data[0].postcode ? data[0].postcode + ' ':'') + (data[0].city ? data[0].city + ' ':''));

                $('#takwim_statecode').empty();
                $('#takwim_statecode').val((data[0].statecode ? data[0].statecode:'0'));
            }
        });

        // $.ajax({
        //     url: url + "/takwim/statecode/" + hospital_id, 
        //     dataType: "json", 
        //     success: function (data) { 
        //         $('#takwim_statecode').empty();
        //         $.each(data, function (key, value) {
        //             $('#takwim_statecode').val(value.statecode);
        //         });
        //     }
        // });

        $.ajax({
            url: url + "/takwim/getChairman/" + hospital_id,
            dataType: "json", 
            contentType: "application/json; charset=utf-8",
            error: function(data){
                $('#takwim_chairman').empty();
                $('#takwim_chairman').append($('<option>').text('-- Please Select --').attr('value', ''));
            },
            success: function (data) { 
                // console.log(data)
                $('#takwim_chairman').empty();
                $('#takwim_chairman_update').empty();
                $('#takwim_chairman_reschedule').empty();
                $('#takwim_chairman_duplicate').empty();
                $('#takwim_chairman_delete').empty();
                $('#takwim_chairman').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_chairman_update').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_chairman_reschedule').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_chairman_duplicate').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_chairman_delete').append($('<option>').text('-- Please Select --').attr('value', ''));
                $.each(data, function (key, value) {
                    if(data){
                        $('#takwim_chairman').append($('<option>').text(value.chairman_name).attr('value', value.user_id));
                        $('#takwim_chairman_update').append($('<option>').text(value.chairman_name).attr('value', value.user_id));
                        $('#takwim_chairman_reschedule').append($('<option>').text(value.chairman_name).attr('value', value.user_id));
                        $('#takwim_chairman_duplicate').append($('<option>').text(value.chairman_name).attr('value', value.user_id));
                        $('#takwim_chairman_delete').append($('<option>').text(value.chairman_name).attr('value', value.user_id));
                    }else{
                        $('#takwim_chairman').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_chairman_update').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_chairman_reschedule').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_chairman_duplicate').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_chairman_delete').append($('<option>').text('-- Please Select --').attr('value', ''));
                    }
                });
            }
        });

        $.ajax({
            url: url + "/takwim/getSecretariat/" + hospital_id,
            dataType: "json", 
            contentType: "application/json; charset=utf-8",
            error: function(data){
                $('#takwim_secretariat').empty();
                $('#takwim_secretariat').append($('<option>').text('-- Please Select --').attr('value', ''));
            },
            success: function (data) { 
                // console.log(data);
                $('#takwim_secretariat').empty();   
                $('#takwim_secretariat_update').empty();
                $('#takwim_secretariat_reschedule').empty();
                $('#takwim_secretariat_duplicate').empty();
                $('#takwim_secretariat_delete').empty();
                $('#takwim_secretariat').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_secretariat_update').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_secretariat_reschedule').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_secretariat_duplicate').append($('<option>').text('-- Please Select --').attr('value', ''));
                $('#takwim_secretariat_delete').append($('<option>').text('-- Please Select --').attr('value', ''));
                $.each(data, function (key, value) {
                    // alert(operation_id);
                    if(data){
                        $('#takwim_secretariat').append($('<option>').text(value.operation_id).attr('value', value.user_id));
                        $('#takwim_secretariat_update').append($('<option>').text(value.operation_id).attr('value', value.user_id));
                        $('#takwim_secretariat_reschedule').append($('<option>').text(value.operation_id).attr('value', value.user_id));
                        $('#takwim_secretariat_duplicate').append($('<option>').text(value.operation_id).attr('value', value.user_id));
                        $('#takwim_secretariat_delete').append($('<option>').text(value.operation_id).attr('value', value.user_id));
                    }else{
                        $('#takwim_secretariat').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_secretariat_update').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_secretariat_reschedule').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_secretariat_duplicate').append($('<option>').text('-- Please Select --').attr('value', ''));
                        $('#takwim_secretariat_delete').append($('<option>').text('-- Please Select --').attr('value', ''));
                    }
                });
            }
        });

    });

    $('#takwim_medical_board_category_calendar').change(function () { 
        var hospital_id = $('#takwim_hospital').val();
        var takwim_medical_board_category_calendar = $('#takwim_medical_board_category_calendar').val();
        var takwim_medical_board_category_listing = $('#takwim_medical_board_category_listing').val(takwim_medical_board_category_calendar);
        var currentYear = new Date().getFullYear();
        var takwim_year_listing = $('#takwim_year_listing').val(currentYear);

        if(takwim_medical_board_category_listing != '' && takwim_year_listing != '')
            document.getElementById("search_annualAgenda").disabled = false;

        if(hospital_id != '')
        {
            calendar(hospital_id);
        }
        else
                // alert('Please choose hospital.');
            Swal.fire({"title":"Please choose hospital ","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
    });

    function getPanel(name)
    {
        var discipline_id = $('#'+name).val();
        var count = name.match(/\d/g) ? name.match(/\d/g):'';
        var url = $('#application_url').val(); 

        $.ajax({
            url: url + "/takwim/getPanel/" + discipline_id,
            dataType: "json", 
            contentType: "application/json; charset=utf-8",
            success: function (data) { 
                $('#takwim_doctor'+count).empty();
                // $('#takwim_doctor_updt').empty();
                $('#takwim_doctor'+count).append($('<option>').text('-- Please Select --').attr('value', ''));
                // $('#takwim_doctor_updt').append($('<option>').text('-- Please Select --').attr('value', ''));
                if(data != '')
                {
                    $.each(data, function (key, value) {
                        // $('#takwim_doctor').val(value.doctor_id);
                        document.getElementById('takwim_doctor'+count).disabled = false;
                        $('#takwim_doctor'+count).append($('<option>').text(value.doctor_name).attr('value', value.user_id));   

                        // document.getElementById('takwim_doctor_updt').disabled = false;
                        // $('#takwim_doctor_updt').append($('<option>').text(value.doctor_name).attr('value', value.user_id));
                    });
                }
                else
                {
                    document.getElementById('takwim_doctor'+count).disabled = true;
                    $('#takwim_doctor'+count).append($('<option>').text('-- Please Select --').attr('value', ''));
                    // document.getElementById('takwim_doctor_updt').disabled = true;
                    // $('#takwim_doctor_updt').append($('<option>').text('-- Please Select --').attr('value', ''));

                    Swal.fire({"title":"Panel Not Found","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
                }  
            },
            error: function (data){
                Swal.fire({"title":"Error","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
            }
        });
    }

</script>

{{-- SUMMARY LISTING --}}
<script type="text/javascript">

    $('#takwim_year_listing').change(function () { 
        // var takwim_hospital_listing = $('#takwim_hospital_listing').val();
        var takwim_year_listing = $('#takwim_year_listing').val();

        if(takwim_year_listing != '')
            document.getElementById("search_annualAgenda").disabled = false;
        else
            document.getElementById("search_annualAgenda").disabled = true;
    });

    $('#takwim_medical_board_category_listing').change(function () { 
        document.getElementById("search_annualAgenda").disabled = false;
    });

    $('#takwim_hospital_listing').change(function () { 

        document.getElementById("search_annualAgenda").disabled = false;

        var id = $(this).val();
        var url = $('#application_url_listing').val();

        if(id == ''){
            $('#takwim_statecode_listing').val('');
        }

        $.ajax({
            url: url + "/takwim/hospital_address/" + id, 
            dataType: "json", 
            error: function (data){
                $('#takwim_statecode_listing').empty();
                $('#takwim_statecode_listing').val('');
            },
            success: function (data) { 
                $('#takwim_statecode_listing').empty();
                $('#takwim_statecode_listing').val((data[0].statecode ? data[0].statecode:'0'));
            }
        });

    });
</script>

{{-- SUMMARY LISTING --}}
<script type="text/javascript">
    $('#search_annualAgenda').click(function () {

        var takwim_year_listing = $('#takwim_year_listing').val();
        var takwim_hospital_listing1 = $('#takwim_hospital_listing').val();
        var takwim_medical_board_category_listing1 = $('#takwim_medical_board_category_listing').val();

        if(takwim_year_listing == ''){
            Swal.fire({"title":"Please select year ","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
        }

        if(takwim_hospital_listing1 == ''){
            var takwim_hospital_listing = 'NULL';
        }else{
            var takwim_hospital_listing = $('#takwim_hospital_listing').val(); 
        }

        if(takwim_medical_board_category_listing1 == ''){
            var takwim_medical_board_category_listing = 'NULL';
        }else{
            var takwim_medical_board_category_listing = $('#takwim_medical_board_category_listing').val(); 
        }

        var url = $('#application_url_listing').val(); 

        if(takwim_year_listing != ''){
            $(document).ready(function() {

                jQuery.extend( jQuery.fn.dataTableExt.oSort, {
                    "date-uk-pre": function ( a ) {
                        if (a == null || a == "") {
                            return 0;
                        }
                        var ukDatea = a.split('/');
                        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
                    },
                    
                    "date-uk-asc": function ( a, b ) {
                        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
                    },
                    
                    "date-uk-desc": function ( a, b ) {
                        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
                    }
                } );

                var example_table = $('#takwim_listing').DataTable( {
                    destroy: true,
                    ajax: {
                        url: url + "/takwim/annualAgenda/" + takwim_hospital_listing + "/" + takwim_year_listing + "/" + takwim_medical_board_category_listing,
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
                            "data": "date_takwim",
                            "defaultContent": ""
                        },
                        { 
                            "data": "hospital_id",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "venue",
                            "defaultContent": "" 
                        },
                        {  
                            "data": "mb_category",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "discipline",
                            "defaultContent": "" 
                        },
                        { 
                            "data": "session",
                            "defaultContent": "" 
                        },
                        {  
                            "data": "panel",
                            "defaultContent": "" 
                        },
                        {  
                            "data": "quota",
                            "defaultContent": "" 
                        },
                    ],
                        // Sort desc for column date
                        // "order": [
                        //     [0, 'asc'],
                        // ],
                        //Search not for text field
                        'columnDefs' : [
                            { 
                                type: 'date-uk', 
                                targets: 0,
                                // "order" : false,
                                // "target": 4, 
                            }
                        ],
                        // 10 rows per page
                        "displayLength": 10,
                        dom: 'Bfrtip',
                        buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                });
                    // example_table.on( 'order.dt search.dt', function () {
                    //     example_table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    //         cell.innerHTML = i+1;
                    //     });
                    // }).draw();
                    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
            });
            document.getElementById("search_annualAgenda").disabled = true;
        }else{
            $('#takwim_listing').DataTable().clear().draw();
            document.getElementById("search_annualAgenda").disabled = true;
        }

    });
</script>

{{-- SCRIPT for SEARCH DROPDOWN --}}
<script>

    $(".select2").select2({
        placeholder: "-- Please Select --",
        tags: true
    });

    $("#takwim_hospital").select2();
    $("#takwim_hospital_listing").select2();
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
    </script>

    {{-- SCRIPT for TAB_NAV --}}
    <!-- start - This is for export functionality only -->

    <script>
        $(function() {
            $('#takwim_listing').DataTable({
        // Sort desc for column date
        "order": [
        [0, 'desc'],
        ],
        // Search not for text field
        // 'columnDefs' : [{ 
        //     'orderable'    : false, 
        //     'targets'       : [1]
        // }],
        // 10 rows per page
        "displayLength": 10,
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print',
        ]
    });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        });
    </script>

    <!-- Date Picker Plugin JavaScript -->
    <script>
    // Date Picker
    jQuery('#date-range_modal').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
        // startDate: '-3d',
        // endDate: '+3d',
        // startDate: $('#min-date').val(),
    });

    // Date Picker
    jQuery('#date-range_update').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    // Date Picker
    $('#date-range_reschedule').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
        todayHighlight: true,
    });

    // Date Picker
    jQuery('#date-range-duplicate').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    jQuery('#date-range-quota').datepicker({
        autoclose: true,
        toggleActive: true,
        format: 'dd/mm/yyyy',
    });

    $('.start_update').change(function() {
        var date2 = $('.start_update').datepicker('getDate');
        date2.setDate(date2.getDate());
        $('.end_update').datepicker('setDate', date2);
    });

    $('.start_reschedule').change(function() {
        var date2 = $('.start_reschedule').datepicker('getDate');
        date2.setDate(date2.getDate());
        $('.end_reschedule').datepicker('setDate', date2);
        $("#min-date-error").hide();
    });

    $('.start_duplicate').change(function() {
        $("#min-date-error").hide();
        $("#takwim-end-date-error").hide();
    });

</script>

<script>
    // Date Picker
    jQuery('#takwim_year').datepicker({
        autoclose: true,
        format: 'yyyy',
    });
</script>

{{-- <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
</script> --}}
{{-- <script src="{{asset('js/calendar1.js')}}"></script> --}}

<script>
    $(document).ready(function () {
        // var counter = 0;

        $("#addrow").on("click", function () {
            var counter = $('#event-modal input[name="takwim_table_count"]').val() ? $('#event-modal input[name="takwim_table_count"]').val():'0';
            var newRow = $("<tr id='addtable"+ counter +"'>");
            var cols = "";

            cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control" id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)"><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select></td>';
            cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control takwim_doctor" id="takwim_doctor'+counter+'" disabled><option value="">-- @lang('option.please_select') -- </option></select></td>';
            cols += '<td><input type="number" name="takwim_minquota'+ counter +'" required class="form-control"></td>';
            cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" required class="form-control"></td>';

            cols += '<td>{{-- <input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"> --}}{{--<button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDel"><i class="fas fa-trash-alt"></i></a></td>';

            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
            // $('#takwim_table_count').val(counter);
            $('#event-modal input[name="takwim_table_count"]').val(counter);
        });

        $("table.order-list").on("click", ".ibtnDel", function (event) {
            var counter = $('#event-modal input[name="takwim_table_count"]').val() ? $('#event-modal input[name="takwim_table_count"]').val():'0';
            $(this).closest("tr").remove();    
            counter -= 1;
            var count = $('#event-modal input[name="takwim_table_count"]').val() - 1; 
            // $('#takwim_table_count').val(count); 
            $('#event-modal input[name="takwim_table_count"]').val(count);
        });

    // $("#addtakwim_form").on("click", "#save-event", function (event) {
    //     var countArray = $('#event-modal input[name="takwim_table_count"]').val();

    //     if(countArray >= '1'){
    //         for(i=0; i<countArray; i++){
    //             // alert(i);
    //             // var takwim_dis = $('#event-modal select[name="takwim_discipline'+ i +'"]').val();
    //             // var takwim_doc = $('#event-modal select[name="takwim_doctor'+ i +'"]').val();
    //             // var takwim_quo = $('#event-modal input[name="takwim_quota'+ i +'"]').val();
    
    //             // if(takwim_dis != '' && takwim_doc != '' && takwim_quo != ''){
    //                 // alert('TAKE');
    //                 for(i=0; i<countArray; i++){
    //                     $('#addtable'+ i).remove();
    //                     counter -= 1;
    //                     var count = $('#takwim_table_count').val() - 1; 
    //                     $('#takwim_table_count').val(count); 
    //                 }
    //             // }
    //             // alert('lalu');
    //         }
    //     }
    // });

    // $("#updatetakwim_form").on("click", "#update-event", function (event) {
    //     var counter = $('#update-modal input[name="takwim_table_count"]').val() ? $('#update-modal input[name="takwim_table_count"]').val():'0';
    //     var countArray = $('#update-modal input[name="takwim_table_count"]').val();

    //     if(countArray >= '1'){
    //         for(i=0; i<countArray; i++){
    //             $('#addtableupdate'+ i).remove();
    //             counter -= 1;
    //             var count = $('#update-modal input[name="takwim_table_count"]').val() - 1; 
    //             $('#update-modal input[name="takwim_table_count"]').val(count); 
    //         }
    //     }
    // });

    $("#addrowupdate").on("click", function () {
        var counter = $('#update-modal input[name="takwim_table_count"]').val();
        var newRow = $("<tr id='addtableupdate"+ counter +"'>");
        var cols = "";

        cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control " id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)"><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select><input type="hidden" class="form-control" name="tdid'+ counter +'" value="0"></td>';
        cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control" id="takwim_doctor'+counter+'" disabled><option value="">-- @lang('option.please_select') -- </option></select><input type="hidden" class="form-control" name="tdoctor_id'+ counter +'" value="0"></td>';
        cols += '<td><input type="number" name="takwim_minquota'+ counter +'" required class="form-control"></td>';
        cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" required class="form-control"></td>';

        cols += '<td>{{--<button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDelupdate"><i class="fas fa-trash-alt"></i></a></td>';

        newRow.append(cols);
        $("table.order-list2").append(newRow);
        counter++;
        $('#update-modal input[name="takwim_table_count"]').val(counter);
    });

    $("table.order-list2").on("click", ".ibtnDelupdate", function (event) {
        $(this).closest("tr").remove();    
        counter -= 1;
        var count = $('#update-modal input[name="takwim_table_count"]').val() - 1; 
        $('#update-modal input[name="takwim_table_count"]').val(count);
    });

});

</script>

@endsection