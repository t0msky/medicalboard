@extends('general.layouts.app')

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-md-12">
        {{-- <div class="card"> --}}
            <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        
                        <li class="nav-item"> 
                            <a class="nav-link active" data-toggle="tab" href="#appt" role="tab">
                            	<span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span>
                            	<span class="hidden-xs-down">@lang('form/medical.tab_title.appointment')</span>
                            </a> 
                        </li>
						
						<li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#appt_session" role="tab">
                                <span class="hidden-sm-up"><i class="ti-bookmark-alt"></i></span> 
                                <span class="hidden-xs-down">@lang('form/medical.tab_title.appointmentlisting')</span>
                            </a> 
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        
                        <div class="tab-pane p-20 active" id="appt" role="tabpanel">
                            @include('medical.medicalboard.appointment.appointment')
                        </div>

						
						<div class="tab-pane p-20" id="appt_session" role="tabpanel">
                            @include('medical.medicalboard.appointment.session_preview')
                        </div>

                    </div>
            </div>
        {{-- </div> --}}
    </div>
</div>

@endsection


<!-- javascript -->
@section('js')

<script>

	$(document).ready(function(){

       // Date Picker
	    jQuery('#appt_date').datepicker({
	        autoclose: true,
	        toggleActive: true,
	        format: 'dd/mm/yyyy',
	        todayHighlight: true,
			orientation: 'bottom',
	    });

		jQuery('#appt_date2').datepicker({
	        autoclose: true,
	        toggleActive: true,
	        format: 'dd/mm/yyyy',
	        todayHighlight: true,
			orientation: 'bottom',
	    });

		$('#btnsetappt').click(function() {
			alert('Appointment has been set.');
		});

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

		$('#option1').change(function () { 
			var action = $('#option1').val();

            document.getElementById("search_appt_listing").disabled = false;

			if(action == '1'){
				document.getElementById("div_idno").style.display = "block";
				document.getElementById("div_name").style.display = "none";
                document.getElementById("div_schemerefno").style.display = "none";
			}else if(action == '2'){
				document.getElementById("div_idno").style.display = "none";
				document.getElementById("div_name").style.display = "block";
                document.getElementById("div_schemerefno").style.display = "none";
            }else if(action == '3'){
                document.getElementById("div_idno").style.display = "none";
                document.getElementById("div_name").style.display = "none";
                document.getElementById("div_schemerefno").style.display = "block";
			}else
			{
				document.getElementById("div_idno").style.display = "none";
				document.getElementById("div_name").style.display = "none";
                document.getElementById("div_schemerefno").style.display = "none";
			}
			
		});

        $('#appt_idno').keyup(function(){
            if($(this).val().length !=0)
                $('#search_appt_listing').attr('disabled', false);            
            else
                $('#search_appt_listing').attr('disabled',true);
        });

        $('#appt_name').keyup(function(){
            if($(this).val().length !=0)
                $('#search_appt_listing').attr('disabled', false);            
            else
                $('#search_appt_listing').attr('disabled',true);
        });

        $('#appt_schemerefno').keyup(function(){
            if($(this).val().length !=0)
                $('#search_appt_listing').attr('disabled', false);            
            else
                $('#search_appt_listing').attr('disabled',true);
        });

    });

   	$("#appt_hospital").select2();
   	$("#appt_hospital2").select2();
   	$("#appt_hospital3").select2();

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

    //Appointment (Search Button)
    $('#appt_hospital').change(function () { 
        checkingData1();
    });

    $('#appt_mb_category').change(function () { 
        checkingData1();
    });

    function checkingData1()
    {
        var hospital = $('#appt_hospital').val();
        var mb_category = $('#appt_mb_category').val();

        if(hospital != '' && mb_category != '')
            document.getElementById("search_appt").disabled = false;
        else
            document.getElementById("search_appt").disabled = true;
    }

    //Appointment Listing (Search Button)
    $('#appt_hospital2').change(function () { 
        checkingData();
    });

    $('#appt_date2').change(function () { 
        checkingData();
    });

    function checkingData()
    {
        var hospital_listing = $('#appt_hospital2').val();
        var date_listing = $('#appt_date2').val();

        if(hospital_listing != '' && date_listing != '')
            document.getElementById("search_appt_listing").disabled = false;
        else
            document.getElementById("search_appt_listing").disabled = true;
    }

    $('#apptrescheduled_modal').on('show.bs.modal', function(e){
        var date = $(e.relatedTarget).data('date');
        var row = $(e.relatedTarget).data('row');

        $('#apptresc_id').val(row['id'] ? row['id'] : '');
        $('#apptresc_absent').val(row['absent'] ? row['absent'] : '');
        $('#apptresc_uniquerefno').val(row['uniquerefno'] ? row['uniquerefno'] : '');
        $('#apptresc_prev_takwimid').val(row['prev_takwimid'] ? row['prev_takwimid'] : '');
        $('#apptresc_id2').val(row['id2'] ? row['id2'] : '');
        $('#apptresc_mbid').val(row['medicalboard_id'] ? row['medicalboard_id'] : '');
        $('#apptresc_mssid').val(row['mb_sessionspeciality_id'] ? row['mb_sessionspeciality_id'] : '');
        $('#apptresc_prev_date').val(row['prevdate'] ? row['prevdate'] : '');

        $('#apptdiscipline_date').empty();
        $('#apptdiscipline_session').empty();
        $('#apptdiscipline_date').append($('<option value="">-- @lang('option.please_select') --</option>'));
        $('#apptdiscipline_session').append($('<option value="">-- @lang('option.please_select') --</option>'));

        $.each(date, function (key, value) {
        //     console.log(value['sdate']);
            @foreach($ref_table->sidang as $sts)
                if(value['session'] == '{{$sts->ref_code}}')
                    var session_sts = '{{$sts->desc_en}}';
            @endforeach

            if(date){
                // $('#apptdiscipline_date').append($('<option value="'+date['sdate']+'">'+date['sdate']+'</option>'));
                // $('#apptdiscipline_session').append($('<option value="'+date['session']+'">'+session_sts+'</option>'));
                $('#apptresc_takwimid').val(value['currtakwimid'] ? value['currtakwimid'] : '');
                $('#apptdiscipline_date').append($('<option value="'+value['sdate']+'">'+value['sdate']+'</option>'));
                $('#apptdiscipline_session').append($('<option value="'+value['session']+'">'+session_sts+'</option>'));
            }else{
               $('#apptdiscipline_date').append($('<option value="">-- @lang('option.please_select') --</option>'));
               $('#apptdiscipline_session').append($('<option value="">-- @lang('option.please_select') --</option>'));
            }
        });
    });

    $('#search_appt').click(function () {

    var hospital = $('#appt_hospital').val();
    var mb_category = $('#appt_mb_category').val();
    var url = $('#application_url_listing').val();

    if(hospital != '' || mb_category != ''){
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
            });

            var count = 1;
            var example_table = $('#appt_listing').dataTable({
                destroy: true,
                ajax: {
                    url: url + "/getappointment/" + hospital + "/" + mb_category,
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
                        "data": "schemerefno",
                        "defaultContent": ""
                    },
                    { 
                        "data": "schemerefno",
                        "defaultContent": "" 
                    },
                    { 
                        "data": "name",
                        "defaultContent": ""
                    },
                    {  
                        "data": "discipline",
                        "defaultContent": ""
                    },
                ],
                    // Sort desc for column date
                    // "order": [
                    //     [0, 'asc'],
                    // ],
                    //Search not for text field
                    // 'columnDefs' : [{ 
                        // type: 'date-uk', 
                        // targets: 0,
                        // "order" : false,
                        // "target": 4, 
                    // }],
                    "columnDefs": [
                        {
                            "targets": [0],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="datacount'+count+'" value="'+count+'" class="form-control-plaintext" readonly>');
                                count++;
                                
                                return $textInput.prop("outerHTML");
                            }
                        },
                    ],
                    // 10 rows per page
                    "displayLength": 10,
                });
                // example_table.on( 'order.dt search.dt', function () {
                //     example_table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                //         cell.innerHTML = i+1;
                //     });
                // }).draw();
                $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
            });
            document.getElementById("search_appt").disabled = true;

        }else{
            $('#appt_listing').DataTable().clear().draw();
            document.getElementById("search_appt").disabled = true;
        }

    });

    $('#search_appt_listing').click(function () {

        var hospital_listing = $('#appt_hospital2').val();
        var date_listing = $('#appt_date2').val();
        var idno_listing = $('#appt_idno').val();
        var name_listing = $('#appt_name').val();
        var url = $('#application_url_listing').val();
        var day = date_listing.substring(0, 2);
        var month = date_listing.substring(3, 5);
        var year = date_listing.substring(6, 10);
        var date = year + '-' + month + '-' + day;

        if(idno_listing == '')
            idno_listing = 'NULL';

        if(name_listing == '')
            name_listing = 'NULL';

        if(hospital_listing != '' || date_listing != ''){
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
                });

                var count = 1;
                var example_table = $('#appt_listing2').dataTable({
                    destroy: true,
                    ajax: {
                        url: url + "/getappointmentlisting/" + hospital_listing + "/" + date + "/" + idno_listing + "/" + name_listing,
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
                        "data": "schemerefno",
                        "defaultContent": ""
                    },
                    { 
                        "data": "schemerefno",
                        "defaultContent": "" 
                    },
                    { 
                        "data": "name",
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
                        "data": "date",
                        "defaultContent": "" 
                    },
                    { 
                        "data": "status",
                        "defaultContent": ""
                    },
                    { 
                        "data": null,
                        "defaultContent": ''
                    },
                    ],
                        // Sort desc for column date
                        // "order": [
                        //     [0, 'asc'],
                        // ],
                        //Search not for text field
                        // 'columnDefs' : [{ 
                            // type: 'date-uk', 
                            // targets: 0,
                            // "order" : false,
                            // "target": 4, 
                        // }],
                        "columnDefs": [
                            {
                                "targets": [0],
                                "className": "text-center",
                                "type": "html",
                                "render": function (data, type, row, meta) {

                                    var defaultselected = data;

                                    var $textInput = $('<input type="number" name="datacount'+count+'" value="'+count+'" class="form-control-plaintext" readonly>');
                                    count++;
                                    
                                    return $textInput.prop("outerHTML");
                                }
                            },
                            {
                                "targets": [7],
                                "className": "text-center",
                                "type": "html",
                                "render": function (data, type, row, meta) {

                                    var date = JSON.stringify([row.reschedule_date]);
                                    // var date = JSON.stringify(row.reschedule_date);
                                    var row = JSON.stringify(row);

                                    return "<button type='button' class='btn btn waves-effect waves-light btn-success' data-toggle='modal' data-target='#apptrescheduled_modal' data-date='"+date+"' data-row='"+row+"'>@lang('button.rescheduled')</button>";

                                   
                                }
                            },
                        ],
                        // 10 rows per page
                        "displayLength": 10,
                    });
                    // example_table.on( 'order.dt search.dt', function () {
                    //     example_table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    //         cell.innerHTML = i+1;
                    //     });
                    // }).draw();
                    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
                });
            document.getElementById("search_appt_listing").disabled = true;

        }else{
            $('#appt_listing2').DataTable().clear().draw();
            document.getElementById("search_appt_listing").disabled = true;
        }

    });

    //for button rescheduled at appointment listing
    $("#btnreschappt").click(function () {
        $('#buttonNo').val('1');
    });

    $("#btnreschappt1").click(function () {
        $('#buttonNo').val('2');

    });


    //save button for rescheduled
    $(".saverescheduled").click(function () {

    	var date = new Date();
	    date.setDate(date.getDate() + 14);

	    var dateString  = $('#apptdiscipline_date').val();
		var year = dateString.substring(0,4);
		var month = dateString.substring(4,6);
		var day = dateString.substring(6,8);

		var dateSelect = new Date(year, month-1, day)

		//check select 14 days
	    if(dateSelect>date){
	    	var k = $('#buttonNo').val();
	        $('#row'+k).text($('#apptdiscipline_date option:selected').text());
	        $('#rescheduled_modal').modal('hide');

	    }else{
	    	Swal.fire({
			  type: 'warning',
			  text: 'Date select is less than 14 days. Please put your justification.'
			})

	    }

    });

</script>

@endsection