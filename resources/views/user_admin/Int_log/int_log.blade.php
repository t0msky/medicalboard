@extends('general.layouts.app')

@section('css')
<style>

	element.style {
	}
	.form-control:disabled, .form-control[readonly] {
		opacity: .7;
	}
	.form-control:disabled, .form-control[readonly] {
		background-color: #fafbfb;
	}

</style>
@endsection

@section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<div class="card-body">
				<h5 class="card-title">@lang('form/admin.general.integration_log.title1')</h5>
				<br>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="table-responsive m-t-40">
								<table id="log" class="display nowrap table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th>@lang('form/admin.general.no')</th>
											<th>@lang('form/admin.general.integration_log.message_ref_no')</th>
											<th>@lang('form/admin.general.integration_log.case_ref_no')</th>
											<th>@lang('form/admin.general.integration_log.path')</th>
											<th>@lang('form/admin.general.integration_log.response')</th>
											<th>@lang('form/admin.general.integration_log.request')</th>
											<th>@lang('form/admin.general.integration_log.sent_confirmation')</th>
											<th>@lang('form/admin.general.integration_log.message')</th>
											<th>@lang('form/admin.general.integration_log.addby')</th>
											<th>@lang('form/admin.general.integration_log.branch_code')</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($result as $value)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{$value->messagerefno}}</td>
											<td>{{$value->caserefno}}</td>
											<td>{{$value->path}}</td>
											<td style="align:center;width:1%;"><a class='view' data-desc="{{$value->response}}" data-toggle="modal" data-target="#response"><i class="fas fa-file-alt fa-sm"></i></a></td>
											<td style="align:center;width:1%;"><a class='view' data-desc="{{$value->request}}" data-toggle="modal" data-target="#request"><i class="fas fa-file-alt fa-sm"></i></a></td>
											<td>{{$value->sentconfirmation}}</td>
											<td>{{$value->message}}</td>
											<td>@foreach ($result2 as $value2)
												@if ($value->addBy == $value2->user_id)
												{{ $value2->operation_id }}
												@endif
												@endforeach
											</td>
											<td>{{$value->brcode}}</td>
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
</div>

<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header  card-title">
				<h4 class="modal-title" id="exampleModalLabel3">@lang('form/admin.general.integration_log.request')</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="p-20">
								<textarea rows="20" type="text" id="responses" name="justification_finding[]" class="form-control" readonly></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
				{{-- <button type="submit" id="save_just" data-dismiss="modal" class="btn btn-primary save_just" value="">@lang('button.save')</button> --}}
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header  card-title">
				<h4 class="modal-title" id="exampleModalLabel3">@lang('form/admin.general.integration_log.response')</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="p-20">
								<textarea rows="10" type="text" id="requests" name="justification_finding[]" class="form-control" readonly></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
				{{-- <button type="submit" id="save_just" data-dismiss="modal" class="btn btn-primary save_just" value="">@lang('button.save')</button> --}}
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>

	$(document).ready(function(){

// $("#modalJustification").modal('show');
$('#request').on('show.bs.modal', function (e){

					// $('#ref_no').prop('value', "");
					// $('#employee_id').prop('value', "");
					// $('#identification_type').prop('value', "");
					// $('#identification_no').prop('value', "");
					// $('#month_from').prop('value', "");
					// $('#month_to').prop('value', "");

					var desc = $(e.relatedTarget).data('desc');
					// var desc = JSON.stringify(desc);

					// Object.keys(desc).forEach(function(key) {
					//     console.log(key, desc[key]);
					// });

					// var cuba = JSON.parse(desc);


					$('#requests').prop('value', desc);

				});

$('#response').on('show.bs.modal', function (e){

					// $('#status').prop('value', '');
					// $('#message').prop('value', "");
					// $('#employee_info_list').prop('value', "");

					var desc = $(e.relatedTarget).data('desc');
					// console.log(desc); //nak tengok 

					// var cuba = JSON.parse(desc);


					$('#responses').prop('value', desc);
					// $('#message').prop('value', desc.message);

					// foreach(employeeInfoList)
					// $('#gender').prop('value', desc.employeeInfoList);
					// $('#race').prop('value', desc.race);

				});

});



	$(document).ready(function () {
		var language= $('#change_language').val();
		if(language=="BM"){
      //$('#malay').addClass("ti-check");
      //$('#english').removeClass("ti-check");
      
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:bold !important;");
      $('#english').css("cssText", "font-weight:normal !important;");

      $('#log').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#log').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});

</script>
@endsection

