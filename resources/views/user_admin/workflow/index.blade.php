@extends('general.layouts.app')

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.workflow.title')</h5>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="card-header">
							<div class="table-responsive">
								<table id="branch_manage" class="display nowrap table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th>@lang('form/admin.general.update')</th>
											<th>@lang('form/admin.general.delete')</th>
											<th>@lang('form/admin.general.workflow.workflow_type')</th>
											<th>@lang('form/admin.general.workflow.module')</th>
											<th>@lang('form/admin.general.workflow.module_next')</th>
											<th>@lang('form/admin.general.workflow.type')</th>
											<th>@lang('form/admin.general.workflow.roles')</th>
											<th>@lang('form/admin.general.workflow.roles_next')</th>
											<th>@lang('form/admin.general.workflow.substatus_first')</th>
											<th>@lang('form/admin.general.workflow.substatus_last')</th>
											<th>@lang('form/admin.general.workflow.code')</th>
											<th>@lang('form/admin.general.workflow.name')</th>
											<th>@lang('form/admin.general.workflow.sequence')</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($list as $value)
									<tr>
										<td><a id='updatedraft' href="{{ route('workflow_update',$value->id) }}"><i class="fas fa-edit"></i></a></td>
										<td><a id='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#workflow_confirm"><i class="fas fa-trash-alt fa-sm"></td>
										<td>{{ $value->workflow_type->name ?? 'No Workflow' }}</td>
										<td>{{ $value->module }}</td>
										<td>{{ $value->module_next }}</td>
										<td>{{ $value->type }}</td>
										<td>{{ $value->role->name ?? 'No Role' }}</td>
										<td>{{ $value->role_next->name ?? 'No Role Next' }}</td>
										<td>{{ $value->sub_status_first->name ?? 'No Status First' }}</td>
										<td>{{ $value->sub_status_last->name ?? 'No Status Last' }}</td>
										<td>{{ $value->code }}</td>
										<td>{{ $value->name }}</td>
										<td>{{ $value->sequence }}</td>
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

<div class="modal fade" id="workflow_confirm" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('workflow_delete') }}">
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
$('#workflow_confirm').on('show.bs.modal', function (event) {
	var id = $(event.relatedTarget).data('id');
	$('#workflow_confirm').find('input[name="id"]').val(id);
})
</script>
@endsection