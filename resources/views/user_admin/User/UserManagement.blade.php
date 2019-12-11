@extends('general.layouts.app')

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.user.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card-header">
							<div class="table-responsive">
								<table id="user" class="display nowrap table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th>@lang('form/admin.general.update')</th>
											<th>@lang('form/admin.general.delete')</th>
											<th>@lang('form/admin.general.user.username')</th>
											<th>@lang('form/admin.general.user.email')</th>
											<th>@lang('form/admin.general.user.name')</th>
											<th>@lang('form/admin.general.user.staff_number')</th>
											<th>@lang('form/admin.general.user.branch')</th>
											<th>@lang('form/admin.general.user.management_id')</th>
											<th>@lang('form/admin.general.user.multi_select_role')</th>	
										</tr>
									</thead>
									<tbody>
										@foreach ($result as $key => $value)
										<tr>
											{{-- <td>{{$loop->iteration}}</td> --}}
											<td width="20"><a class='updatedraft' href="{{ route('edit_user',$value->id) }}" ><i class="fas fa-edit"></i></a></td>

											<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodaluser"><i class="fas fa-trash-alt fa-sm"></i></td>

											<td>{{ $value->operation_id }}</td>
											<td>{{ $value->work_email }}</td>
											<td>{{ $value->name }}</td>
											<td>{{ $value->staff_number }}</td>
											<td>
												@foreach ($result_branchs as $value2)
												@if ($value->branch_id==$value2->id)
												{{ $value2->name }}
												@endif
												@endforeach
											</td>
											<td>
												@if($value->manager_id=="1")
												Manager
												@else
												supervior
												@endif
											</td>
											<td>
												@foreach ($result_roles as $value3)
												@foreach ($result[$key]->user->roles as $roles)
												@if ($roles->id==$value3->id)
												{{$value3->name}}
												@endif
												@endforeach
												@endforeach
											</td>
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

<div class="modal fade" id="deletemodaluser" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('delete_user') }}">
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

		$('#deletemodaluser').on('show.bs.modal',function(e){

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

      $('#user').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#user').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection

