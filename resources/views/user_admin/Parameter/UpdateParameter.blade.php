@extends('general.layouts.app')

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						@foreach($result as $value)
						<form method='post' action="{{route('update_parameter')}}" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$value->id}}">
							<h5 class="card-title">@lang('form/admin.general.parameter.title3')</h5>
							<hr>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.code_category')</label>
									<input type="text" class="form-control" name="code_category" value="{{$value->code_category}}" required>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.ref_code')</label>
									<input type="text" class="form-control" name="ref_code" value="{{$value->ref_code}}" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.description_en')</label>
									<input type="text" class="form-control" name="desc_en" value="{{$value->desc_en}}">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.description_bm')</label>
									<input type="text" class="form-control" name="desc_bm" value="{{$value->desc_bm}}">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
								<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
								<a href="/home"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection