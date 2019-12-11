@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.chairman.title3')</h5>
						@foreach($result as $key => $value)
						<hr>
						<form method='POST' action="{{route('update_chairman')}}" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$value->id}}">
							@csrf
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.icno')</label>
									<input type="text" name="nric_no" value="{{$value->nric_no}}" class="form-control" readonly>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.name')</label>
									<input type="text" name="chairman_name" value="{{$value->chairman_name}}" class="form-control" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.email')</label>
									<input type="text" name="email" value="{{$value->email}}" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.chairman.account_no')</label>
									<input type="text" name="acctno" value="{{$value->acctno}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.chairman.bank')</label>
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
									<label>@lang('form/admin.general.chairman.hospital')</label>
									<select name="hospital_id" class="form-control">
										<option selected disabled hidden></option>
										@foreach($Hospital as $hospital)
										@if($hospital->id==$value->hospital_id)
										<option value="{{$hospital->id}}" selected>{{$hospital->name}}</option>
										@else
										<option value="{{$hospital->id}}">{{$hospital->name}}</option>
										@endif
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.mobile_no')</label>
									<input type="text" name="mobileno" value="{{$value->mobileno}}" class="form-control">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.tel_no')</label>
									<input type="text" name="telno" value="{{$value->telno}}" class="form-control">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">
								@lang('button.save')</button>
								<button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
								<a href="{{route('audit')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
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

