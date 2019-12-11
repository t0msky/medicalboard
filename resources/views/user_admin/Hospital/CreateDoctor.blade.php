@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.doctor.title1')</h5>
						<hr>
						<form method='get' action="{{route('checking_doctor')}}">
							@csrf
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-3">
									<label class="control-label">@lang('form/admin.general.chairman.icno')</label>
									<input type="text" name="nric_no" id="nric_no" class="form-control" placeholder="">
								</div>
								<div class="form-group col-md-12 col-lg-3">
									<label class="control-label">@lang('form/admin.general.user.email')</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="">
								</div>
								<input type="hidden" name="registed" id="register" value="{{$result->Registered}}" class="form-control" placeholder="">
								<div class="form-actions">
									<button type="submit" class="btn btn waves-effect waves-light btn-success">
									@lang('form/admin.general.search')</button>
								</div>
							</div>
						</form>
						<form id="yes" method="post" action="{{route('create_doctor')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.dr_name')</label>
									<input type="text" name="doctor_name" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.ic_no')</label>
									<input type="text" name="nric_no" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.type')</label>
									<select name="type" class="form-control" required>
										<option selected disabled hidden></option>
										@foreach ($option_doctorType as $value)
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.email')</label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.group')</label>
									<select name="group_id" class="form-control" required>
										<option selected disabled hidden></option>
										<option value="0">MO1</option>
										<option value="1">MO2</option>
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.speciality')</label>
									<select name="speciality_id" class="form-control" required>
										<option selected disabled hidden></option>
										@foreach ($option_speciality as $value)
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.account_no')</label>
									<input type="text" name="accountno" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.bank')</label>
									<select name="bank" class="form-control">
										<option selected disabled hidden></option>
										@foreach ($option_bankCode as $value)
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.mobile_no')</label>
									<input type="text" name="mobileno" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.tel_no')</label>
									<input type="text" name="telno" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.availability')</label>
									<input type="text" name="availability" class="form-control">
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

@section('js')
<script>
	$(document).ready(function () {
		$("#yes").hide();

		// $('[name=registed]').change(function () {

			if ($("#register").val() == '0') {
				$('#yes').show();

			}

			else{
				$('#yes').hide();

			}
		});
	</script>
	@endsection



