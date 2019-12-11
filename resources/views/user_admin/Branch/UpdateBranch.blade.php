@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.branch.title3')</h5>
						<hr>
						@foreach($result as $value)
						<form method='post' action="{{route('update_branch')}}" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$value->id}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.branch_name')</label>
									<input type="text" class="form-control" name="name" value="{{$value->name}}" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.long_name')</label>
									<input type="text" class="form-control" name="long_name" value="{{$value->long_name}}">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.branch_code')</label>
									<input type="text" class="form-control" name="code" value="{{$value->code}}" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.statecode')</label>
									<select name="state_code" class="form-control">
										@foreach ($option_state as $os)
										@if($os->ref_code==$value->state_code)
										<option value="{{$os->ref_code}}" selected>{{$os->desc_en}}</option>
										@else
										<option value="{{$os->ref_code}}">{{$os->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.assist_branchcode')</label>
									<input type="text" class="form-control" name="assist_brcode" value="{{$value->assist_brcode}}">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.pic')</label>
									<input type="text" class="form-control" name="name" value="{{$value->name}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.status')</label>
									<select name="status" class="form-control">
										@if($value->status == '1')
										<option value="1" selected>Active</option>
										<option value="0">Inactive</option>
										@else
										<option value="1" >Active</option>
										<option value="0" selected>Inactive</option>
										@endif
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.branch.e-mail')</label>
									<input type="text" class="form-control" name="email" value="{{$value->email}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label>@lang('form/admin.general.branch.branch_address')</label>
									<input type="text" class="form-control" name="address_1" value="{{$value->address_1}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label></label>
									<input type="text" class="form-control" name="address_2" value="{{$value->address_2}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label></label>
									<input type="text" class="form-control" name="address_3" value="{{$value->address_3}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.postcode')</label>
									<input type="text" class="form-control" name="postcode" value="{{$value->postcode}}">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.city')</label>
									<input type="text" class="form-control" name="city_id" value="{{$value->city_id}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.phone_no')</label>
									<input type="text" class="form-control" name="phone_no" value="{{$value->phone_no}}">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.branch.fax_no')</label>
									<input type="text" class="form-control" name="fax_no" value="{{$value->fax_no}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-5">
									<label>@lang('form/admin.general.branch.type')</label>
									<select name="type" class="form-control">
										@if($value->type == '1')
										<option value="1" selected>PPN</option>
										<option value="0">PPP</option>
										@else
										<option value="1" >PPN</option>
										<option value="0" selected>PPP</option>
										@endif
									</select>
								</div>
							</div>
							@endforeach
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
								<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
								<a href="{{route('branch_management')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

