@extends('general.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">@lang('form/admin.general.WorkflowType.title1')</h5>
				<hr>
				<form method='POST' action="{{route('workflowtype_save')}}" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{ $list->id ?? '' }}">
					<div class="form-body">
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.WorkflowType.name')</label>
								<input type="text" class="form-control" name="name" value="{{ $list->name ?? '' }}">
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.WorkflowType.description')</label>
								<input type="text" class="form-control" name="description" value="{{ $list->description ?? '' }}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.WorkflowType.list')</label>
								<input type="text" class="form-control" name="list" value="{{ $list->list ?? '' }}">
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.WorkflowType.status')</label>
								<input type="text" class="form-control" name="status" value="{{ $list->status ?? '' }}">
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