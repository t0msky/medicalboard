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
				<form method="post" action="{{route('update4')}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<h5 class="card-title">@lang('management.title17')</h5>
					@foreach($result as $value)
					<form class="form">

						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-5 col-form-label">@lang('management.pid')</label>
								<div class="col-10">
									<select name="tablerefcode" id="tablerefcode" class="form-control custom-select clearFields" data-placeholder="Choose a Category" tabindex="1">						
										<option selected disabled hidden></option>
{{-- 
											@foreach ($optionparameterid as $pi)
											<option value="{{$pi->tablerefcode}}">{{$pi->tablerefcode}}</option>
											@endforeach --}}
											{{-- @if(!empty($value) && $pi->tablerefcode == $value->optionparameterid)
												<option value="{{$pi->tablerefcode}}" selected>{{$pi->tablerefcode}}</option>
												@else
												<option value="{{$pi->tablerefcode}}"></option>
												@endif --}}
												{{-- @endforeach  --}}

												@foreach ($optionparameterid as $pi)
												@if($pi->tablerefcode==$value->tablerefcode)
												<option value="{{$value->tablerefcode}}" selected>{{$pi->tablerefcode}}</option>
												@else
												<option value="{{$pi->tablerefcode}}">{{$pi->tablerefcode}}</option>
												@endif
												@endforeach
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group row">
										<label for="example-search-input" class="col-5 col-form-label">@lang('management.refcode')</label>
										<div class="col-10">
											<input class="form-control clearFields" type="text" value="{{$value->refcode}}" name="refcode" id="refcode">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label for="example-email-input" class="col-5 col-form-label">@lang('management.refdesc')</label>
										<div class="col-10">
											<input class="form-control clearFields" type="text" value="{{$value->descen}}" id="descen" name="descen">
										</div>
									</div>
								</div>
								@endforeach

								@if(Session::get('messagedoc')) 
								<div class="card-footer">

									<div class="alert alert-success">
										{{Session::get('messagedoc')}}
									</div>

								</div>   
								@endif

								<div class="form-actions">
									<a href="/ParameterValueManagement"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('management.cancel')</button></a>
									<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('management.reset')</button>
									<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('management.update')</button>
								</div>
							</form>
						</form>
					</div>
				</div>
			</div>
		</div>

		@endsection