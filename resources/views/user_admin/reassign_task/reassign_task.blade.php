@extends('general.layouts.app')

@section('css')

<style>

</style>
@endsection

@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.r_task.title1')</h5>
			<br>
			<br>
			<div class="row ">
				<label class="control-label">Task of ID</label>
				<div class="col-md-4">
					<select name="" class="form-control">
						{{-- <option selected disabled hidden></option>
						<option value="1">PPN</option>
						<option value="2">PPP</option> --}}
					</select>
				</div>
			</div>
			<br>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card">
						<div class="table-responsive m-t-40">
							<table id="" class="display nowrap table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>@lang('form/admin.general.user.no')</th>
										<th>@lang('form/admin.general.r_task.date')</th>
										<th>@lang('form/admin.general.r_task.aging')</th>
										<th>@lang('form/admin.general.r_task.module')</th>
										<th>@lang('form/admin.general.r_task.source')</th>
										<th>@lang('form/admin.general.r_task.reference_no')</th>
										<th>@lang('form/admin.general.r_task.notice_type')</th>
										<th>@lang('form/admin.general.r_task.description')</th>
										<th>@lang('form/admin.general.r_task.task_status')</th>
										<th>@lang('form/admin.general.r_task.reassign_to')</th>
										<th>@lang('form/admin.general.r_task.reassingment_reason')</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">Reassign Task</button>
							</div>
							<br>
							<br>
							<br>
							<div class="container" style="border: 2px solid lightgrey; width:820px;padding-left:20px;margin-left:320px;">
								<br>
								<br>
								<div class="row p-t-20">
									<div class="col-md-2">
										<label class="control-label">Reassign to:</label>
									</div>
									<div class="col-md-8">
										<select name="" class="form-control">
										{{-- <option selected disabled hidden></option>
										<option value="1">PPN</option>
										<option value="2">PPP</option> --}}
										</select>
									</div>
								</div>
								<div class="row p-t-20">
									<div class="col-md-2">
										<label class="control-label">Reassignment Reason :</label>
									</div>
									{{-- <div class="form-group"> --}}
									<div class="col-md-8">
										<textarea class="form-control" rows="10" cols="70"></textarea>
										<button type="submit" class="btn btn waves-effect waves-light btn-success">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection