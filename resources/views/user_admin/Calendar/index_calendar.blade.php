@extends('general.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
            <h5 class="card-title">@lang('form/admin.general.calendar.title1')</h5>

             <!-- Tab panes -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#calendartab" role="tab"><span
                    class="hidden-sm-up"><i class="ti-home"></i></span> <span
                    class="hidden-xs-down">@lang('form/admin.general.calendar.tab_title1')</span></a> 
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#public_holiday" role="tab"><span
                    class="hidden-sm-up"><i class="ti-home"></i></span> <span
                    class="hidden-xs-down">@lang('form/admin.general.calendar.tab_title2')</span></a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#weekend" role="tab"><span
                    class="hidden-sm-up"><i class="ti-home"></i></span> <span
                    class="hidden-xs-down">@lang('form/admin.general.calendar.tab_title3')</span></a>
                </li>
            </ul>

            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="calendartab" role="tabpanel">
                    @include('user_admin.Calendar.calendar')
                </div>
                <div class="tab-pane p-20" id="public_holiday" role="tabpanel">
                <br>
                <br>
                    @include('user_admin.Calendar.public_holiday')
                </div>
                <div class="tab-pane p-20" id="weekend" role="tabpanel">
                     @include('user_admin.Calendar.weekend')
                     @include('user_admin.Calendar.calendar_for_function')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script>

        //redirect to specific tab
        $(document).ready(function () {
        	$("a#changeme").attr('href', 'http://maps.google.com/');
        	$('#tabMenu a[href="#{{ old('
        		tab ') }}"]').tab('show');
        	$('#wages').click(function () {
                // $("a.wages").prop("href", "/obformilat")

            });
        });

        function placeacc() {

        	var accdwhen = $("#placeaccd").val();
            //alert(accdwhen);
            $('#descen').find('option').not(':first').remove();
            if (accdwhen) {

            	$.ajax({
            		url: '/reftable/' + accdwhen,
            		type: 'GET',
            		dataType: 'json',
            		success: function (data) {
                        //            console.log(data);

                        var len = 0;
                        if (data != null) {
                        	len = data.length;
                        }

                        if (len > 0) {
                        	$("#accwhen").empty();
                        	for (var i = 0; i < len; i++) {

                        		var id = data[i].refcode;
                        		var name = data[i].descen;

                        		var option = "<option value='" + id + "'>" + name + "</option>";

                        		$("#accwhen").append(option);
                        	}


                        }

                    }

                });
            }
        }

        //redirect to specific tab
        $(document).ready(function () {
        	$('#tabMenu a[href="#{{ old('
        		tab ') }}"]').tab('show')
        });

        $(document).ready(function () {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function () {
            	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function () {
            	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function () {
            	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });

</script>
@endsection