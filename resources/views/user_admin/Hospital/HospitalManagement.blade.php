@extends('general.layouts.app')

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.hospital.title2')</h5>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="table-responsive m-t-40">
							<table id="hospitalmanage" class="display nowrap table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>@lang('form/admin.general.update')</th>
										<th>@lang('form/admin.general.delete')</th>
										<th>@lang('form/admin.general.hospital.hospital_type')</th>
										<th>@lang('form/admin.general.hospital.hospital_name')</th>
										<th>@lang('form/admin.general.hospital.address')</th>
										<th>@lang('form/admin.general.hospital.postcode')</th>
										<th>@lang('form/admin.general.hospital.city')</th>
										<th>@lang('form/admin.general.hospital.state')</th>
										<th>@lang('form/admin.general.hospital.medical_board_category')</th>
										{{-- <th>@lang('form/admin.general.hospital.branch')</th> --}}
									</tr>
								</thead>
								<tbody>
									@foreach ($result as $key => $value)
									<tr>
										{{-- {{dd($value)}} --}}
										<td width="20"><a class='updatedraft' href="{{ route('edit_hospital',$value->id) }}"><i class="fas fa-edit"></i></a></td>

										<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodalhospital"><i class="fas fa-trash-alt fa-sm"></i></td>
											<td>
												@foreach ($option_hospitalType as $value_hospitalType)
												@if($value_hospitalType->ref_code == $value->idtype)
												{{$value_hospitalType->desc_en}}
												@endif
												@endforeach
											</td>
											<td>{{$value->name}}</td>

											<td>{{$value->add1}}<br>
												{{$value->add2}}<br>
												{{$value->add3}}
											</td>

											<td>{{$value->postcode}}</td>

											<td>{{$value->city}}</td>

											<td>
												@foreach ($option_state as $value_state)
												@if($value_state->ref_code == $value->statecode)
												{{$value_state->desc_en}}
												@endif
												@endforeach
											</td>

											<td>
												@if($value->jdind=="1")
												Medical Board <br>
												@elseif($value->jdkind=="1")
												Medical Special Board 
												@else
												Medical Appeal Board 
												@endif
												{{$value->jdind}}<br>
												{{$value->jdkind}}<br>
												{{$value->jdrind}}
											</td>
											{{-- <td>
												@foreach ($result_branch as $value2)
												@foreach ($result[$key]->branchs as $branchs)
											    @if ($branchs->branch_id==$value2->id)
												{{$value3->name}}
												@endif
												@endforeach
												@endforeach
											</td> --}}

											{{-- <td>{{$value[branchs]}}</td> --}}
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

	
	<div class="modal fade" id="deletemodalhospital" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="{{ route('delete_hospital') }}">
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

			$('#deletemodalhospital').on('show.bs.modal',function(e){

			var id=$(e.relatedTarget).data('id');
			$('#id').prop("value",id);

		});
			var language= $('#change_language').val();
			if(language=="BM"){
      //$('#malay').addClass("ti-check");
      //$('#english').removeClass("ti-check");
      
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:bold !important;");
      $('#english').css("cssText", "font-weight:normal !important;");

      $('#hospitalmanage').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#hospitalmanage').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection