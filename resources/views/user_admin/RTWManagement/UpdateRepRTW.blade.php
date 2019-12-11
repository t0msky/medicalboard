@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Row -->
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title">@lang('form/admin.general.spr.title3')</h3>
			<form action="#" class="form-horizontal form-bordered">
				<div class="form-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.doctor.id_no')</label>
								<input type="text" class="form-control" id="id_no" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.spr.representative')</label>
								<input type="text" class="form-control" id="representative" value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>@lang('form/admin.general.spr.specialty')</label>
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
