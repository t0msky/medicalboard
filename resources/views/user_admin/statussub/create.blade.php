@extends('general.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">@lang('form/admin.general.statussub.title1')</h5>
				<hr>
				<form method='POST' action="{{route('statussub_save')}}" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="id" value="{{ $list->id ?? '' }}">
					<div class="form-body">
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.statussub.status')</label>
								<select class="form-control" name="status">
									<option></option>
									@if(isset($status->data))
										@foreach($status->data as $status)
											@if($status->id == $list->status)
												<option value="{{ $status->id }}" selected="selected">{{ $status->name }}</option>
											@else
												<option value="{{ $status->id }}">{{ $status->name }}</option>
											@endif
										@endforeach
									@endif
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.statussub.name')</label>
								<input type="text" class="form-control" name="name" value="{{ $list->name ?? '' }}">
							</div>
							<div class="form-group col-md-6 col-lg-6">
								<label>@lang('form/admin.general.statussub.description')</label>
								<input type="text" class="form-control" name="description" value="{{ $list->description ?? '' }}">
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