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
					<div class="form-group row">
						<br>
						<label class="control-label text-right col-md-3">@lang('form/admin.general.doctor.id_no')</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="">
							{{-- <small class="form-control-feedback"> This is inline help </small> </div> --}}
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label text-right col-md-3">@lang('form/admin.general.spr.representative')</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="">
							{{-- <small class="form-control-feedback"> This is inline help </small> </div> --}}
						</div>
					</div>
					<div class="form-group row">
						<label class="control-label text-right col-md-3">@lang('form/admin.general.spr.specialty')</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="">
							{{-- <small class="form-control-feedback"> This is inline help </small> </div> --}}
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="offset-sm-6">
										<button type="submit" class="btn btn waves-effect waves-light btn-success"> {{-- <i class="fa fa-check"></i> --}} @lang('button.save')</button>
										<button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Row -->

@endsection



