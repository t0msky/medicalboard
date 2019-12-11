@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.role.title1')</h5>
						<hr>
						<form method='POST' action="{{route('create_role')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.name')</label>
									<input type="text" class="form-control" name="name" value="" required>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.code')</label>
									<input type="text" class="form-control" name="code" value="" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.description')</label>
									<input type="text" class="form-control" name="description" value="">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.usergroup')</label>
									<select  name="user_group" class="form-control">
										<option>Please Select</option>
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3">PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>
									</select>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">
								@lang('button.save')</button>
								<button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
								<a href="{{route('audit')}}"><button type="button" class="btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

