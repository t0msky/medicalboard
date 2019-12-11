@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.chairman.title1')</h5>
						<hr>
						<form method='get' action="{{route('checking_chairman')}}" >
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
								<input type="hidden" name="registed" id="register" value="{{$result_checking->Registered}}" class="form-control" placeholder="">
								<div class="form-actions">
									<button type="submit" class="btn btn waves-effect waves-light btn-success">
									@lang('form/admin.general.search')</button>
								</div>
							</div>
						</form>
						<form id="yes" style="display:none;" method='POST' action="{{route('create_chairman')}}" >
							@csrf
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.icno')</label>
									<input type="text" name="nric_no" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.name')</label>
									<input type="text" name="chairman_name" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.email')</label>
									<input type="text" name="email" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.chairman.account_no')</label>
									<input type="text" name="acctno" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.chairman.bank')</label>
									<select name="bank" class="form-control">
										<option selected disabled hidden></option>
										@foreach($result as $value)
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.hospital')</label>
									<select name="hospital_id" class="form-control">
										<option selected disabled hidden></option>
										@foreach($option_hospital as $value)
										<option value="{{$value->id}}">{{$value->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.mobile_no')</label>
									<input type="text" name="mobileno" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.tel_no')</label>
									<input type="text" name="telno" class="form-control">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">
								@lang('button.save')</button>
								<button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
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

			if ($("#register").val() == '0') {
				$('#yes').show();

			}

			else{
				$('#yes').hide();

			}

		});
	</script>
	@endsection	

