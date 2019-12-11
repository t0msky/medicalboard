@extends('general.layouts.app')

@section('css')
<link href="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        {{-- <div class="card"> --}}
            <div class="card-body p-b-0">
                <h5 class="card-title">@lang('form/medical.medical_board')</h5>
                {{-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6> --}}
                {{-- <div class="row p-10">
                    <div class="col-md-6">
                    </div> --}}
                    {{-- Button Modal --}}
                    {{-- <div class="col-md-6" >
                        <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#request_info" data-whatever="@getbootstrap">@lang('medical_board/index.request_info')</button>
                        <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#set_appointment"d ata-whatever="@getbootstrap">@lang('index.set_appointment')</button>
                        <button type="button" class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#review" data-whatever="@getbootstrap">@lang('medical_board/index.review')</button>
                    </div> --}}
                    {{-- modal --}}
                    {{-- @include('medical_board.ro.detail_case.request_info') --}}
                    {{-- @include('medical_board.ro.set_appointment_modal') --}}
                {{-- </div> --}}
                    <!-- Nav tabs -->
                    <ul class="nav customtab nav-tabs" role="tablist">

                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#application_info" role="tab" id="navbar_application_info">
                                <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.application_info')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#current_case_info" role="tab" id="navbar_current_case_info"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.current_case_info')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#history_info" role="tab" id="navbar_history_info"><span class="hidden-sm-up"><i class="ti-layers"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.history')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#supporting_docs" role="tab" id="navbar_supporting_docs"><span class="hidden-sm-up"><i class="ti-layers-alt"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.supporting_doc')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.remarks')</span>
                            </a> 
                        </li>
                        
                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#decision" role="tab" id="navbar_decision"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.decision')</span>
                            </a> 
                        </li>

                        <li class="nav-item" id="feedback_tab"> 
                            <a class="nav-link" data-toggle="tab" href="#feedback" role="tab" id="navbar_feedback"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.feedback')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#appointment" role="tab" id="navbar_appointment"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.appointment')</span>
                            </a> 
                        </li> 

                    </ul>
                    <div class="row" id="rowindex">
                        <div class="col-md-12">
                            <div class="card text-left" id="cardindex">
                                <div class="card-body" id="cardbody">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th><label>@lang('form/personal-info.name')</label></th>      
                                            <th>:</th>
                                            {{-- <th> {{$obdetails->name}}</th> --}}
                                        </tr>
                                        <tr>
                                            <th><label>@lang('form/personal-info.id_no')</label></th>
                                            <th>:</th>
                                            {{-- <th> {{$obdetails->idno}}</th> --}}
                                        </tr>
                                        <tr>
                                            <th><label>@lang('form/medical.general.schemerefno')</label></th>
                                            <th>:</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th><label>@lang('form/medical.collapse.appointment.mbrefno')</label></th>
                                            <th>:</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">

                        <div class="tab-pane p-20 active" id="application_info" role="tabpanel">
                            @include('medical.medicalboard.information.application')
                        </div>

                        <div class="tab-pane p-20" id="current_case_info" role="tabpanel">
                            @include('medical.medicalboard.information.current_case')
                        </div>

                        <div class="tab-pane p-20" id="history_info" role="tabpanel">
                            @include('medical.medicalboard.information.history')
                        </div>

                        <div class="tab-pane p-20" id="supporting_docs" role="tabpanel">
                            @include('medical.medicalboard.information.supporting_document')
                        </div>

                        <div class="tab-pane p-20" id="remarks" role="tabpanel">
                            @include('medical.medicalboard.information.remarks')
                        </div>

                        <div class="tab-pane p-20" id="decision" role="tabpanel">
                            @include('medical.medicalboard.information.decision')
                        </div>

                        <div class="tab-pane p-20" id="feedback" role="tabpanel">
                            @include('medical.medicalboard.information.feedback')
                        </div>

                        <div class="tab-pane p-20" id="appointment" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">@lang('form/medical.appointment.title')</h5>
                                            {{-- <h6 class="card-subtitle"></h6> --}}
                                            <div id="accordion1" role="tablist" aria-multiselectable="true">
                                                <div class="card m-b-0">

                                                    <div id="appt_info" class="" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row p-t-20">
                                                                        {{-- <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('medical_board/appointment.attr.type_of_discipline')</label>
                                                                                <select name="appt_type_discipline" class="form-control">
                                                                                    <option value="">-- @lang('medical_board/appointment.value.please_select') --</option>
                                                                                    <option value="1">@lang('medical_board/appointment.value.yes')</option>
                                                                                    <option value="2">@lang('medical_board/appointment.value.no')</option>
                                                                                </select>
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('form/medical.general.hospital')</label>
                                                                                <select name="appt_hospital" class="form-control {{-- required --}}">
                                                                                    <option value="">-- @lang('option.please_select') --</option>
                                                                                    @foreach ($state as $s)
                                                                                        @foreach ($hospital as $h)
                                                                                            @if($s->ref_code == $h->statecode)
                                                                                                <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">
                                                                                                    <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                                                                </optgroup>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                                                                <select name="appt_mb_category" class="form-control {{-- required --}}">
                                                                                    <option value="">-- @lang('option.please_select') --</option>
                                                                                    @foreach ($medical_board_category1 as $mb)
                                                                                       <option value={{$mb->ref_code}}>{{$mb->desc_en}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                         <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('form/medical.general.session')</label>
                                                                                <select name="appt_session" class="form-control {{-- required --}}">
                                                                                    <option value="">-- @lang('option.please_select') --</option>
                                                                                    @foreach ($sidang as $s)
                                                                                        <option value={{$s->ref_code}}>{{$s->desc_en}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>

                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang('form/medical.collapse.decision.type_discipline')</label>
                                                                                <select id="appttype_disciplineid" name="appttype_discipline" class="form-control">
                                                                                    <option value="">-- @lang('option.please_select') --</option>}
                                                                                    <option value="1">SINGLE</option>}
                                                                                    <option value="2">MULTIPLE</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="table-responsive">
                                                                        <table id="tableAppt_discipline" class="table table-bordered table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th align="center">@lang('form/medical.collapse.appointment.select')</th>
                                                                                    <th>@lang('form/medical.general.speciality')</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                              
                                                                                @foreach($discipline as $d)
                                                                                    <tr>
                                                                                        <td width="10%" align="center"><div class="custom-control custom-checkbox">
                                                                                            <input type="checkbox" class="custom-control-input cbox" id="discipline{{$d->ref_code}}">
                                                                                            <label class="custom-control-label" for="discipline{{$d->ref_code}}"></label>
                                                                                    </div></td>
                                                                                        <td>{{$d->desc_en}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-md btn-success" style="margin:5px;">SKIP</button>
                                                    <button type="button" id="btninfoapptok" class="btn btn-md btn-success" data-toggle="modal" data-target="#setappt_modal" style="margin:5px;">OK</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('medical.medicalboard.information.modal.appointment_modal')
                    </div>
            </div>
        {{-- </div> --}}
    </div>
</div>

@endsection

@section('js')

<script src="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.js')}}"></script>
@include('medical.medicalboard.information.calendar_js')

<script>

    $("#btn_next_insured_person").click(function () {
        $("#current_case_info").addClass("active");
        $("#application_info").removeClass("active");
        $("#navbar_application_info").removeClass("active");
        $("#navbar_current_case_info").addClass("active");
    });

    $("#btn_next_current_case").click(function () {
        $("#history_info").addClass("active");
        $("#current_case_info").removeClass("active");
        $("#navbar_current_case_info").removeClass("active");
        $("#navbar_history_info").addClass("active");
    });

    $("#btn_next_history").click(function () {
        $("#supporting_docs").addClass("active");
        $("#history_info").removeClass("active");
        $("#navbar_history_info").removeClass("active");
        $("#navbar_supporting_docs").addClass("active");
    });

    $("#btn_next_support_docs").click(function () {
        $("#decision").addClass("active");
        $("#supporting_docs").removeClass("active");
        $("#navbar_supporting_docs").removeClass("active");
        $("#navbar_decision").addClass("active");
    });

    $("#btn_next_decision").click(function () {
        $("#appointment").addClass("active");
        $("#decision").removeClass("active");
        $("#navbar_decision").removeClass("active");
        $("#navbar_appointment").addClass("active");
    });

     $("#btn_submit_reviewcase").click(function () {
        $("#appointment").addClass("active");
        $("#decision").removeClass("active");
        $("#navbar_decision").removeClass("active");
        $("#navbar_appointment").addClass("active");
    });

     $("#btn_submit_query").click(function () {
        $("#feedback").addClass("active");
        $("#decision").removeClass("active");
        $("#navbar_decision").removeClass("active");
        $("#navbar_feedback").addClass("active");
    });

    document.getElementById("one1").style.display = "none";
    document.getElementById("two2").style.display = "none";
    document.getElementById("three3").style.display = "none";

    $('#decision_action').change(function () { 
        var action = $('#decision_action').val();

        if(action == '1'){
            document.getElementById("one1").style.display = "block";
            document.getElementById("two2").style.display = "none";
            document.getElementById("three3").style.display = "none";
        }else if(action == '2'){
            document.getElementById("one1").style.display = "none";
            document.getElementById("two2").style.display = "block";
            document.getElementById("three3").style.display = "none";
        }else if(action == '3'){
            document.getElementById("one1").style.display = "none";
            document.getElementById("two2").style.display = "none";
            document.getElementById("three3").style.display = "block";
        }
        else
        {
            document.getElementById("one1").style.display = "none";
            document.getElementById("two2").style.display = "none";
            document.getElementById("three3").style.display = "none";
        }
        
    });

    var counter = 0;
    $("#addquery").on("click", function () {
        
        var newRow = $("<tr id='addtablequery"+ counter +"'>");
        var cols = "";

        cols += '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input cbox" id="customCheck5"><label class="custom-control-label" for="customCheck5"></label></div></td>';
        cols += '<td><select name="decision_type"'+counter+' required class="form-control" id="decision_type"><option value="">-- @lang('option.please_select') -- </option><option value="">RTW</option><option value="">Scheme</option></select></td>';
        cols += '<td><textarea name="decision_remarks"'+counter+' class="form-control"></textarea></td>';

        cols += '<td><div style="float:left;"><button type="button" class="ibtnDelquery btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></div></td>';

        newRow.append(cols);
        $("table.appt_listing").append(newRow);
        counter++;
    });

    $("table.appt_listing").on("click", ".ibtnDelquery", function (event) {
        $(this).closest("tr").remove();    
        counter -= 1;
    });

    $(function() {

        $('#document_table').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'asc'],
            ],
            // Search not for text field
            'columnDefs' : [{ 
                // 'searchable'    : false, 
                'orderable'     : false,
                'targets'       : [1,2]
            }],
            // 10 rows per page
            "displayLength": 10,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        $('#previousclaims_table').DataTable({
            // Sort desc for column date
            "order": [
                [0, 'asc'],
            ],
            // Search not for text field
            'columnDefs' : [{ 
                // 'searchable'    : false, 
                'orderable'     : false,
                'targets'       : [1,2,3,4,5],
            }],
            // 10 rows per page
            "displayLength": 10,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        // $(function() {
        //     var table = $('#example').DataTable({
        //         "columnDefs": [{
        //             "visible": false,
        //             "targets": 2
        //         }],
        //         "order": [
        //             [2, 'asc']
        //         ],
        //         "displayLength": 25,
        //         "drawCallback": function(settings) {
        //             var api = this.api();
        //             var rows = api.rows({
        //                 page: 'current'
        //             }).nodes();
        //             var last = null;
        //             api.column(2, {
        //                 page: 'current'
        //             }).data().each(function(group, i) {
        //                 if (last !== group) {
        //                     $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
        //                     last = group;
        //                 }
        //             });
        //         }
        //     });
        //     // Order by the grouping
        //     $('#example tbody').on('click', 'tr.group', function() {
        //         var currentOrder = table.order()[0];
        //         if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        //             table.order([2, 'desc']).draw();
        //         } else {
        //             table.order([2, 'asc']).draw();
        //         }
        //     });
        // });
    });
</script>

<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
</script>
    
<script>
    //Custom design form example

    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "@lang('button.save')"
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function (event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function (event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
</script>

<script>
    var room = 1;

    function hospassistant_fields() {

        room++;
        var objTo = document.getElementById('hospassistant_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "removeclass" + room);
        divtest.setAttribute("style", "margin-top: 10px;");
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '{{--<div class="col-md-6">--}}<label class="control-label">@lang('medical_board/appointment.attr.hospital_assistant') '+ room +'</label><div class="input-group"><select name="appt_hospassistant'+ room +'" class="form-control {{-- required --}}"><option value="">-- @lang('medical_board/appointment.value.please_select') --</option><option value="">Nor Hidayah Binti Kassim</option><option value="">Mohd Syazlan Bin Akram</option></select><div class="input-group-append"><button class="btn btn-danger" type="button" onclick="remove_hospassistant_fields(' + room + ');"><i class="fa fa-minus"></i> </button></div></div>{{--</div>--}}';

        objTo.appendChild(divtest);
    }

    function remove_hospassistant_fields(rid) {
        $('.removeclass' + rid).remove();
        room--;
    }
</script>

    
<script>
    // For select 2
    $("#set_app_state").select2();
    $("#set_app_hospital").select2();
    $("#set_app_speciality").select2();
    $("#set_app_panel").select2();
    $("#set_app_chairman").select2();
    $("#set_app_sectariat").select2();
    $("#set_app_state2").select2();
    $("#set_app_hospital2").select2();
</script>

<script>
     var counter = 0;
     var count = 2;

    $("#addpanelbtn").on("click", function () {
        var newRow = $("<tr id='addpanel"+ counter +"'>");
        var cols = "";

        cols += '<td>'+ count +'</td>';
        cols += '<td><select name="appt_panel"'+ counter +' class="form-control {{-- required --}}"><option value="">-- @lang('medical_board/appointment.value.please_select') --</option>@foreach ($doctor as $doc)<option value={{$doc->doctor_id}}>{{$doc->doctor_name}}</option>@endforeach</select></td>';
        cols += '<td><select name="appt_speciality"'+ counter +' class="form-control {{-- required --}}"><option value="">-- @lang('medical_board/appointment.value.please_select') --</option>@foreach ($discipline as $d)<option value={{$d->ref_code}}>{{$d->desc_en}}</option>@endforeach</select></td>';

        cols += '<td>{{--<input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"> --}}<button type="button" class="delpanelbtn btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';
        newRow.append(cols);
        $("table.appt_addpanel_table").append(newRow);
        counter++;
        count++;
    });

    $("table.appt_addpanel_table").on("click", ".delpanelbtn", function (event) {
        $(this).closest("tr").remove();    
        counter -= 1;
        count -= 1;
    });

    var counter1 = 0;
    var count1 = 2;

    $("#addhospassistantbtn").on("click", function () {
        var newRow = $("<tr id='addhospassistant"+ counter1 +"'>");
        var cols = "";

        cols += '<td>'+ count1 +'</td>';
        cols += '<td><select name="appt_hospassistant" class="form-control"><option value="">-- @lang('option.please_select') --</option><option value="">Nor Hidayah Binti Kassim</option><option value="">Mohd Syazlan Bin Akram</option></select></td>';

        cols += '<td>{{--<input type="button" class="ibtnDel btn btn-md btn-danger " value="Delete"> --}}<button type="button" class="delhospassistantbtn btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';
        newRow.append(cols);
        $("table.appt_addhospassistant_table").append(newRow);
        counter1++;
        count1++;
    });

    $("table.appt_addhospassistant_table").on("click", ".delhospassistantbtn", function (event) {
        $(this).closest("tr").remove();    
        counter1 -= 1;
        count1 -= 1;
    });
</script>

<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });

            $('#rescappt_modal').on('shown.bs.modal', function () {
               // $("#calendar").fullCalendar('render');
               new Calendar('#calendar');
            });

        $("#saveinfoappt").click(function () {

            var date = new Date();
            date.setDate(date.getDate() + 14);

            var dateString  = $('#apptinfo_date').val();
            var year = dateString.substring(0,4);
            var month = dateString.substring(4,6);
            var day = dateString.substring(6,8);

            var dateSelect = new Date(year, month-1, day)
            // alert(date);
            if(dateSelect>date){
            // alert('lebih besar');
                 // var k = $('#buttonNo').val();
                 // alert($('#buttonNo').val());
                // $('#row'+k).text($('#apptdiscipline_date option:selected').text());
                $('#setappt_modal').modal('hide');

            }else{
            // alert('kecik');
                Swal.fire({
                  type: 'warning',
                  text: 'Date select is less than 14 days. Please put your justification.'
                })

            }

        });

    // jQuery('#feedbackdate').datepicker({
    //     autoclose: true,
    //     toggleActive: true,
    //     format: 'dd/mm/yyyy',
    //     todayHighlight: true,
    //     orientation: 'bottom',
    // });

    document.getElementById("fdremark_div").style.display = "none";
    
    $('#review_action').change(function () { 
        var reviewaction = $('#review_action').val();

        if(reviewaction == '1'){ //Query
            document.getElementById("fdremark_div").style.display = "block";
            document.getElementById("fdremark_div").style.display = "none";
            // $("#fdremark_div").hide();
        }else if(reviewaction == '2'){ //Assessment confirmation
            document.getElementById("fdremark_div").style.display = "none";
            document.getElementById("fdremark_div").style.display = "block";
            // $("#fdremark_div").show();
        }else
        {
            // $("#fdremark_div").hide();
            document.getElementById("fdremark_div").style.display = "none";
            document.getElementById("fdremark_div").style.display = "none";
        }
        
    });

    //wani tambah
    // document.getElementById("typediscipline_labeldiv").style.display = "none";
    // document.getElementById("multiple_disciplinediv").style.display = "none";
    // $('#decision_discipline').change(function () { 
    //     var decisiondiscipline = $('#decision_discipline').val();

    //     if(decisiondiscipline == '1'){ //Query
    //         // document.getElementById("multiple_decisiondiv").style.display = "block";
    //         document.getElementById("typediscipline_labeldiv").style.display = "none";
    //         document.getElementById("multiple_disciplinediv").style.display = "none";
    //     }else if(decisiondiscipline == '2'){ //Assessment confirmation
    //         // document.getElementById("multiple_decisiondiv").style.display = "none";
    //         document.getElementById("typediscipline_labeldiv").style.display = "block";
    //         document.getElementById("multiple_disciplinediv").style.display = "block";
    //     }else
    //     {
    //         document.getElementById("typediscipline_labeldiv").style.display = "none";
    //         document.getElementById("multiple_disciplinediv").style.display = "none";
    //         // document.getElementById("multiple_decisiondiv").style.display = "none";
    //     }
        
    // });

    // $('#table_disciplinedecision').DataTable({
    //     "bFilter" : false,
    //     "bLengthChange": false,
    //     // "bAutoWidth": false,
    //     "scrollX" : false,
    //     "pageLength" : 5,
    //   });

});
</script>

@endsection

