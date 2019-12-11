@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.doctor.title3')</h5>
						@foreach($result as $value)
						<hr>
						<form method='post' action="{{route('update_doctor')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$value->id}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.dr_name')</label>
									<input type="text" name="doctor_name" value="{{$value->doctor_name}}" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.ic_no')</label>
									<input type="text" name="nric_no" value="{{$value->nric_no}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.type')</label>
									<select name="type" class="form-control" required>
										<option selected disabled hidden></option>
										@foreach ($Type as $type)
										@if($type->ref_code==$value->type)
										<option value="{{$type->ref_code}}" selected>{{$type->desc_en}}</option>
										@else
										<option value="{{$type->ref_code}}">{{$type->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.email')</label>
									<input type="text" name="email" value="{{$value->email}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.group')</label>
									<select name="group_id" class="form-control" required>
										<option selected disabled hidden></option>
										@if($value->group_id == '0')
										<option value="0" selected>MO1</option>
										<option value="1">MO2</option>
										@else
										<option value="0" >MO1</option>
										<option value="1" selected>MO2</option>
										@endif
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.speciality')</label>
									<select name="speciality_id" class="form-control" required>
										<option selected disabled hidden></option>
										@foreach ($Special as $special)
										@if($special->ref_code==$value->speciality_id)
										<option value="{{$special->ref_code}}" selected>{{$special->desc_en}}</option>
										@else
										<option value="{{$special->ref_code}}">{{$special->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.account_no')</label>
									<input type="text" name="accountno" value="{{$value->accountno}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.bank')</label>
									<select name="bank" class="form-control">
										<option selected disabled hidden></option>
										@foreach ($Bank as $bank)
										@if($bank->ref_code==$value->bank)
										<option value="{{$bank->ref_code}}" selected>{{$bank->desc_en}}</option>
										@else
										<option value="{{$bank->ref_code}}">{{$bank->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.mobile_no')</label>
									<input type="text" name="mobileno" value="{{$value->mobileno}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.tel_no')</label>
									<input type="text" name="telno" value="{{$value->telno}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.doctor.availability')</label>
									<input type="text" name="availability" value="{{$value->availability}}" class="form-control">
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



