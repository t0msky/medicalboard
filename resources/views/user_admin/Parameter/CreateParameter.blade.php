@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			
				<div class="card-body">
					<div class="form-body">
						<form method='POST' action="{{route('create_parameter')}}" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<h5 class="card-title">@lang('form/admin.general.parameter.title1')</h5>
							<hr>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.code_category')</label>
									<input type="text" class="form-control" name="code_category" value="" required>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.ref_code')</label>
									<input type="text" class="form-control" name="ref_code" value="" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.description_en')</label>
									<input type="text" class="form-control" name="desc_en" value="">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.parameter.description_bm')</label>
									<input type="text" class="form-control" name="desc_bm" value="">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
								<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
								<a href="{{route('audit')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection