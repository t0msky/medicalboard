@extends('general.layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.role.title3')</h5>
						@foreach($result as $value)
						<hr>
						<form method='POST' action="{{route('update_role')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$value->id}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.name')</label>
									<input type="text" class="form-control" name="name" value="{{$value->name}}" required>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.code')</label>
									<input type="text" class="form-control" name="code" value="{{$value->code}}" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.description')</label>
									<input type="text" class="form-control" name="description" value="{{$value->description}}">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.role.usergroup')</label>
									<select  name="user_group" value="{{$value->user_group}}" class="form-control">
										<option>Please Select</option>
										@if($value->user_group == '1')
										<option value="1" selected>HQ</option>
										<option value="2">PPN</option>
										<option value="3">PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@elseif($value->user_group == '2')
										<option value="1">HQ</option>
										<option value="2" selected>PPN</option>
										<option value="3">PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@elseif($value->user_group == '3')
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3" selected>PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@elseif($value->user_group == '4')
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3" >PPP</option>
										<option value="4" selected>SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@elseif($value->user_group == '5')
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3" >PPP</option>
										<option value="4" >SCHEME</option>
										<option value="5" selected>RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@elseif($value->user_group == '6')
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3">PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6" selected>MEDICAL BOARD</option>
										<option value="7">PORTAL</option>

										@else
										<option value="1">HQ</option>
										<option value="2">PPN</option>
										<option value="3">PPP</option>
										<option value="4">SCHEME</option>
										<option value="5">RTW</option>
										<option value="6">MEDICAL BOARD</option>
										<option value="7" selected>PORTAL</option>
										@endif
									</select>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">
								@lang('button.save')</button>
								<button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
								<button type="button" class="btn waves-effect waves-light btn-success"  onclick="window.location='/role_managements'">@lang('button.cancel')</button>
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

