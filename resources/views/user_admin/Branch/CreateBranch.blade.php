@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.branch.title1')</h5>
						<hr>
						<form method='POST' action="{{route('create_branch')}}" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.branch_name')</label>
									<input type="text" class="form-control" name="name" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.long_name')</label>
									<input type="text" class="form-control" name="long_name" value="">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.branch_code')</label>
									<input type="text" class="form-control" name="code" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.statecode')</label>
									<select name="state_code" class="form-control">
										<option selected disabled hidden></option>
										@foreach($result as $value)
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.assist_branchcode')</label>
									<input type="text" class="form-control" name="assist_brcode" value="">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.pic')</label>
									<input type="text" class="form-control" name="pic" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.status')</label>
									<select name="status" class="form-control">
										<option selected disabled hidden></option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.e-mail')</label>
									<input type="text" class="form-control" name="email" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label>@lang('form/admin.general.branch.branch_address')</label>
									<input type="text" class="form-control" name="address_1" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label></label>
									<input type="text" class="form-control" name="address_2" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label></label>
									<input type="text" class="form-control" name="address_3" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.postcode')</label>
									<input type="text" class="form-control" name="postcode" value="">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.city')</label>
									<input type="text" class="form-control" name="city_id" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.phone_no')</label>
									<input type="text" class="form-control" name="phone_no" value="">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.fax_no')</label>
									<input type="text" class="form-control" name="fax_no" value="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-5">
									<label>@lang('form/admin.general.branch.type')</label>
									<select name="type" class="form-control">
										<option selected disabled hidden></option>
										<option value="1">PPN</option>
										<option value="0">PPP</option>
									</select>
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





