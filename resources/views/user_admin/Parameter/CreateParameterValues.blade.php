@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- .row -->
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<form method='POST'action="{{ route('create_parametervalues')}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<h5 class="card-title">@lang('management.title11')</h5>
					<form class="form">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-5 col-form-label">@lang('management.pid')</label>
								<div class="col-10">
									<select name="tablerefcode" id="tablerefcode" class="form-control custom-select clearFields" data-placeholder="Choose a Category" tabindex="1">
										
										<option selected disabled hidden></option>
										@foreach ($optionparameterid as $opid)
										<option value="{{$opid->tablerefcode}}">{{$opid->tablerefcode}}</option>
										@endforeach

									</select>
								</div>
							</div>
						</div>
						

						<div class="col-md-6">
							<div class="form-group row">
								<label for="example-search-input" class="col-5 col-form-label">@lang('management.refcode')</label>
								<div class="col-10">
									<input class="form-control clearFields" type="search" value="" name="refcode" id="refcode">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="example-email-input" class="col-5 col-form-label">@lang('management.refdesc')</label>
								<div class="col-10">
									<input class="form-control clearFields" type="text" value="" name="descen" name="descen" id="descen">
								</div>
							</div>
						</div>

						@if(Session::get('messagedoc')) 
						<div class="card-footer">

							<div class="alert alert-success">
								{{Session::get('messagedoc')}}
							</div>

						</div>   
						@endif

						<div class="form-actions">
							<a href="/home"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('management.cancel')</button></a>
							<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('management.reset')</button>
							<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('management.save')</button>
						</div>

					</form>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection