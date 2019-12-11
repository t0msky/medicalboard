@extends('general.layouts.app')

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form method='POST' action="{{-- {{ route('create_usergroup')}} --}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-body">
						{{-- <h5 class="card-title">@lang('management.title1')</h5> --}}
						<h5 class="card-title">@lang('form/admin.general.usergroup.title3')</h5>
						<hr>
						<div class="form-row">
							<div class="form-group col-md-12 col-lg-6">
								<label>@lang('form/admin.general.usergroup.group_id')</label>
								<input type="text" class="form-control" id="group_id" value="">
							</div>
							<div class="form-group col-md-12 col-lg-6">
								<label>@lang('form/admin.general.usergroup.description')</label>
								<input type="text" class="form-control" id="description" value="">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
							<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
							<a href="/home"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection