@extends('general.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">@lang('form/admin.general.workflow.title1')</h5>
				<hr>
				<form method='POST' action="{{route('workflow_save')}}" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{ $list->id ?? '' }}">
					<div class="form-body">
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.workflow_type')</label>
								<select class="form-control" name="workflow_type">
									<option></option>
									@if(isset($ref_tabled->workflowtype))
										@foreach($ref_tabled->workflowtype as $workflowtype)
											@if(!empty($list) && $workflowtype->id == $list->workflow_type)
												<option value="{{ $workflowtype->id }}" selected="selected">{{ $workflowtype->name }}</option>
											@else
												<option value="{{ $workflowtype->id }}">{{ $workflowtype->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.type')</label>
								<select class="form-control" name="type">
									<option></option>
									@if(isset($ref_table->case_type))
										@foreach($ref_table->case_type as $case_type)
											@if(!empty($list) && $case_type->ref_code == $list->type)
												<option value="{{ $case_type->ref_code }}" selected="selected">{{ $case_type->desc_en }}</option>
											@else
												<option value="{{ $case_type->ref_code }}">{{ $case_type->desc_en }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.module')</label>
								<select class="form-control" name="module">
									<option></option>
									@if(isset($module))
										@foreach($module as $id => $text)
											@if(!empty($list) && $id == $list->module)
												<option value="{{ $id }}" selected="selected">{{ $text }}</option>
											@else
												<option value="{{ $id }}">{{ $text }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.module_next')</label>
								<select class="form-control" name="module_next">
									<option></option>
									@if(isset($module))
										@foreach($module as $id => $text)
											@if(!empty($list) && $id == $list->module_next)
												<option value="{{ $id }}" selected="selected">{{ $text }}</option>
											@else
												<option value="{{ $id }}">{{ $text }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.roles')</label>
								<select class="form-control" name="roles">
									<option></option>
									@if(isset($ref_tabled->roles))
										@foreach($ref_tabled->roles as $roles)
											@if(!empty($list) && $roles->code == $list->roles)
												<option value="{{ $roles->code }}" selected="selected">{{ $roles->name }}</option>
											@else
												<option value="{{ $roles->code }}">{{ $roles->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.roles_next')</label>
								<select class="form-control" name="roles_next">
									<option></option>
									@if(isset($ref_tabled->roles))
										@foreach($ref_tabled->roles as $roles)
											@if(!empty($list) && $roles->code == $list->roles_next)
												<option value="{{ $roles->code }}" selected="selected">{{ $roles->name }}</option>
											@else
												<option value="{{ $roles->code }}">{{ $roles->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.substatus_first')</label>
								<select class="form-control" name="substatus_first">
									<option></option>
									@if(isset($ref_tabled->statussub))
										@foreach($ref_tabled->statussub as $statussub)
											@if(!empty($list) && $statussub->id == $list->substatus_first)
												<option value="{{ $statussub->id }}" selected="selected">{{ $statussub->name }}</option>
											@else
												<option value="{{ $statussub->id }}">{{ $statussub->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.substatus_last')</label>
								<select class="form-control" name="substatus_last">
									<option></option>
									@if(isset($ref_tabled->statussub))
										@foreach($ref_tabled->statussub as $statussub)
											@if(!empty($list) && $statussub->id == $list->substatus_last)
												<option value="{{ $statussub->id }}" selected="selected">{{ $statussub->name }}</option>
											@else
												<option value="{{ $statussub->id }}">{{ $statussub->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.name')</label>
								<input type="text" class="form-control" name="name" value="{{ $list->name ?? '' }}">
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.code')</label>
								<input type="text" class="form-control" name="code" value="{{ $list->code ?? '' }}">
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.workflow.sequence')</label>
								<input type="text" class="form-control" name="sequence" value="{{ $list->sequence ?? '' }}">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
							<button type="reseet" class="btn btn waves-effect waves-light btn-success">@lang('button.reset')</button>
							<a href="{{route('audit')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection