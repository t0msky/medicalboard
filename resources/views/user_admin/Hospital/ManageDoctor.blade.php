@extends('general.layouts.app')

@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.doctor.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card">
						<div class="table-responsive">
							<table id="doctormanage" class="display nowrap table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>@lang('form/admin.general.update')</th>
										<th>@lang('form/admin.general.delete')</th>
										<th>@lang('form/admin.general.chairman.icno')</th>
										<th>@lang('form/admin.general.doctor_name')</th>
										<th>@lang('form/admin.general.chairman.email')</th>
										<th>@lang('form/admin.general.doctor.type')</th>
										<th>@lang('form/admin.general.doctor.group')</th>
										<th>@lang('form/admin.general.doctor.speciality')</th>
										<th>@lang('form/admin.general.doctor.bank')</th>
										<th>@lang('form/admin.general.doctor.account_no')</th>
										<th>@lang('form/admin.general.doctor.mobile_no')</th>
										<th>@lang('form/admin.general.doctor.tel_no')</th>
										<th>@lang('form/admin.general.doctor.availability')</th>
									</tr>
								</thead>
								<tbody>
									{{-- @php print_r ($result);@endphp --}}
									@foreach ($result as $key => $value)
									<tr>
										<td width="20"><a class='updatedraft' href="{{route('edit_doctor',$value->id)}}"><i class="fas fa-edit"></i></a></td>

										<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodaldoctor"><i class="fas fa-trash-alt fa-sm"></i></a></td>											

										<td>{{$value->nric_no}}</td>
										<td>{{$value->doctor_name}}</td>
										<td>{{$value->email}}</td>
										<td>
											@foreach($Type as $value2)
											@if($value->type==$value2->ref_code)
											{{$value2->desc_en}}
											@endif
											@endforeach
										</td>
										<td>
											@if($value->group_id=="0")
											MO1
											@else
											MO2
											@endif
										</td>
										<td>
											@foreach($Special as $value3)
											@if($value->speciality_id==$value3->ref_code)
											{{$value3->desc_en}}
											@endif
											@endforeach
										</td>
										<td>
											@foreach($Bank as $value4)
											@if($value->type==$value4->ref_code)
											{{$value4->desc_en}}
											@endif
											@endforeach
										</td>
										<td>{{$value->accountno}}</td>
										<td>{{$value->mobileno}}</td>
										<td>{{$value->telno}}</td>
										<td>{{$value->availability}}</td>
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

<div class="modal fade" id="deletemodaldoctor" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('delete_doctor') }}">
				@csrf
				<div class="modal-body">
					Are you sure you want to delete?
					<input type="hidden" class="form-control" name="id" id="id">
				</div>
				<div class="modal-footer">
					<button type="button" id="btn_close" class="btn btn-secondary btn-sm"
					data-dismiss="modal">Close</button>
					<button type="submit" id="btn_deletedependent"  class="btn btn-danger btn-sm" >Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$(document).ready(function () {

		$('#deletemodaldoctor').on('show.bs.modal',function(e){

			var id = $(e.relatedTarget).data('id');
			console.log(id);
			$('#id').prop("value",id);

		});

		var language= $('#change_language').val();
		if(language=="BM"){
      //$('#malay').addClass("ti-check");
      //$('#english').removeClass("ti-check");
      
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:bold !important;");
      $('#english').css("cssText", "font-weight:normal !important;");

      $('#doctormanage').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#doctormanage').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection