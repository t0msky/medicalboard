@extends('general.layouts.app')

@section('css')
<link href="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- Row -->
<div class="form-row">
    <div class="col-md-12">
            <div class="card-body p-b-0">
                {{-- <h5 class="card-title">@lang('form/medical.medical_board')</h5> --}}

                <div class="row p-12">
                    <div class="col-md-12">
                        @if ($casetype == '1')
                        <h4 class="card-title">@lang('Accident')</h4>
                        @elseif ($casetype == '2')
                        <h4 class="card-title">@lang('Occupacational Disease')</h4>
                        @elseif ($casetype == '3')
                        <h4 class="card-title">@lang('Invalidity')</h4>
                        @else
                        <h4 class="card-title">@lang('Death')</h4>
                        @endif
                    </div>
                </div>
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="tabMenu">

                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#applicationinfo_od" role="tab" id="navbar_applicationinfo_od">
                                <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.application_info')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#current_caseinfo_od" role="tab" id="navbar_current_caseinfo_od"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.current_case_info')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#historyinfo_od" role="tab" id="navbar_historyinfo_od"><span class="hidden-sm-up"><i class="ti-layers"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.history')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#supportingdocs_od" role="tab" id="navbar_supportingdocs_od"><span class="hidden-sm-up"><i class="ti-layers-alt"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.supporting_doc')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.remarks')</span>
                            </a> 
                        </li>
                        
                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#decision_od" role="tab" id="navbar_decision_od"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.decision')</span>
                            </a> 
                        </li>

                        <li class="nav-item" id="feedback_tab"> 
                            <a class="nav-link" data-toggle="tab" href="#feedback_od" role="tab" id="navbar_feedback_od"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.feedback')</span>
                            </a> 
                        </li>

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#appointment_od" role="tab" id="navbar_appointment_od"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.appointment')</span>
                            </a> 
                        </li> 

                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#preview_assessment" role="tab" id="navbar_preview_assessment"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.assessment')</span>
                            </a> 
                        </li> 

                        <!-- <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#caseclosure_od" role="tab" id="navbar_caseclosure_od"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.tab_title.caseclosure')</span>
                            </a> 
                        </li>  -->

                    </ul>
                    <br>
                    <div class="form-row" id="rowindex">
                        <div class="col-md-4 offset-md-8">
                            <div class="card text-left" id="cardindex">
                                <div class="card-body" id="cardbodyod">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td><span
                                                        class="no_bold">@lang('form/personal-info.name')</span>&nbsp;
                                                    <span
                                                        class="no_bold"> - </span>&nbsp;
                                                    <span
                                                        class="no_bold">@lang('form/personal-info.id_no')</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="no_margin">
                                                @isset($obprofile) 
                                                    {{ $obprofile->name  }} - 
                                                    {{ $idno }}
                                                    {{-- @foreach($obprofile->idinfo as $idx=> $ic) 
                                                        {{ $ic->idno  }}
                                                    @endforeach --}}
                                                @endisset</label></label></td>
                                            </tr>
                                            <tr>
                                                <td><label></label></td>
                                            </tr>
                                            <tr>
                                                <td><span
                                                        class="no_bold">@lang('workbasket.scheme_ref_no')</span>&nbsp;
                                                    <span
                                                        class="no_bold"> - </span>&nbsp;
                                                    <span
                                                        class="no_bold">Date of Death</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label>
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">

                        <div class="tab-pane p-20 active" id="applicationinfo_od" role="tabpanel">
                            @include('medical.medicalboard.information.general.application')
                        </div>

                        <div class="tab-pane p-20" id="current_caseinfo_od" role="tabpanel">
                            {{-- @include('medical.MedicalBoard.information.general.current_case') --}}
                            @include('medical.general.allNotice.collapseCurrentCase')                        
                        </div>

                        <div class="tab-pane p-20" id="historyinfo_od" role="tabpanel">
                            {{-- @include('medical.medicalboard.information.general.history') --}}
                            @include('medical.general.history')
                        </div>

                        <div class="tab-pane p-20" id="supportingdocs_od" role="tabpanel">
                            {{-- @include('medical.medicalboard.information.general.supporting_document') --}}
                            <div id="accordion2" role="tablist" class="accordion">
                                @include('general.supportingDocument.uploadDoc')
                            </div>
                        </div>

                        <div class="tab-pane p-20" id="remarks" role="tabpanel">
                            {{-- @include('medical.medicalboard.information.general.remarks') --}}
                            @include('general.remarks')
                        </div>

                        <div class="tab-pane p-20" id="decision_od" role="tabpanel">
                            @include('medical.medicalboard.information.general.decision')
                        </div>

                        <div class="tab-pane p-20" id="feedback_od" role="tabpanel">
                            @include('medical.medicalboard.information.general.feedback')
                        </div>

                        <div class="tab-pane p-20" id="appointment_od" role="tabpanel">
                            @include('medical.medicalboard.information.general.appointment')
                        </div>
                        <div class="tab-pane p-20" id="preview_assessment" role="tabpanel">
                            @if(checkRole(['PNL']))
                            
                                @include('medical.medicalboard.information.od.disclaimerOd')
                            
                             @else
                            
                                @include('medical.medicalboard.information.general.preview_assessment')
                            
                            @endif
                        </div>
                    </div>
            </div>
    </div>
</div>

@endsection

@section('js')

<script src="{{asset('ui_template/assets/node_modules/js-year-calendar/dist/js-year-calendar.js')}}"></script>
{{-- @include('medical.medicalboard.information.calendar_js') --}}

<script>
    $(document).ready(function() {
        $('#shownextpanel').hide();
        $('#showpanel').hide();
    });

    $("#btn_next_insured_person").click(function () {
        $("#current_caseinfo_od").addClass("active");
        $("#applicationinfo_od").removeClass("active");
        $("#navbar_applicationinfo_od").removeClass("active");
        $("#navbar_current_caseinfo_od").addClass("active");
    });

    $("#btn_next_current_case").click(function () {
        $("#historyinfo_od").addClass("active");
        $("#current_caseinfo_od").removeClass("active");
        $("#navbar_current_caseinfo_od").removeClass("active");
        $("#navbar_historyinfo_od").addClass("active");
    });

    $("#btn_next_history").click(function () {
        $("#supportingdocs_od").addClass("active");
        $("#historyinfo_od").removeClass("active");
        $("#navbar_historyinfo_od").removeClass("active");
        $("#navbar_supportingdocs_od").addClass("active");
    });

    $("#btn_next_support_docs").click(function () {
        $("#decision_od").addClass("active");
        $("#supportingdocs_od").removeClass("active");
        $("#navbar_supportingdocs_od").removeClass("active");
        $("#navbar_decision_od").addClass("active");
    });

    $("#btn_next_decision").click(function () {
        $("#appointment_od").addClass("active");
        $("#decision_od").removeClass("active");
        $("#navbar_decision_od").removeClass("active");
        $("#navbar_appointment_od").addClass("active");
    });

     $("#btn_submit_reviewcase").click(function () {
        $("#appointment_od").addClass("active");
        $("#decision_od").removeClass("active");
        $("#navbar_decision_od").removeClass("active");
        $("#navbar_appointment_od").addClass("active");
    });

     $("#btn_submit_query").click(function () {
        $("#feedback_od").addClass("active");
        $("#decision_od").removeClass("active");
        $("#navbar_decision_od").removeClass("active");
        $("#navbar_feedback_od").addClass("active");
    });

    document.getElementById("one1").style.display = "none";
    document.getElementById("two2").style.display = "none";
    

    $('#decision_action').change(function () { 
        var action = $('#decision_action').val();

        if(action == '1'){
            document.getElementById("one1").style.display = "block";
            document.getElementById("two2").style.display = "none";
        }else if(action == '2'){
            document.getElementById("one1").style.display = "none";
            document.getElementById("two2").style.display = "block";
        }
        else
        {
            document.getElementById("one1").style.display = "none";
            document.getElementById("two2").style.display = "none";
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

<!-- <script>
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
</script> -->

    
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
        cols += '<td><select name="appt_panel"'+ counter +' class="form-control {{-- required --}}"><option value="">-- @lang('medical_board/appointment.value.please_select') --</option></select></td>';
        cols += '<td><select name="appt_speciality"'+ counter +' class="form-control {{-- required --}}"><option value="">-- @lang('medical_board/appointment.value.please_select') --</option></select></td>';

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

