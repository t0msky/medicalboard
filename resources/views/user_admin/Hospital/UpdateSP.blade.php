@extends('general.layouts.app')

{{-- @section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
 --}}
@section('content')

<!-- Row -->
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.sp.title3')</h5>
			<hr>
			<form action="#" >
				<div class="form-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.sp.service_provider')</label>
								<input type="text" class="form-control" id="service_provider" value="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.hospital.address')</label>
								<input type="text" class="form-control" id="address" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.branch.postcode')</label>
								<input type="text" class="form-control" id="postcode" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.branch.city')</label>
								<input type="text" class="form-control" id="city" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.sp.state')</label>
								<input type="text" class="form-control" id="state" value="">
							</div>
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
<!-- Row -->

@endsection



