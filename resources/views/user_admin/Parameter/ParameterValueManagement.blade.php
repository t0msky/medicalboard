@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('management.title12')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card">
						{{-- <div class="col-md-14"> --}}
							<div class="table-responsive m-t-40">
								<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>@lang('management.pid1')</th>
											<th>@lang('management.refcode1')</th>
											<th>@lang('management.description1')</th>
											<th>@lang('management.action')</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach ($parameter1 as $key => $value)
										<tr>
											<td>{{ $value->tablerefcode }}</td>
											<td>{{ $value->refcode }}</td>
											<td>{{ $value->descen }}</td>

											<td>
												{{-- 		<div class="form-actions"> --}}
													<a href="/deleteParameterValue/{{$value->refcode}}"><button type="submit" class="btn btn waves-effect waves-light btn-success" onclick="return confirm ('Do you want to delete this parameter value ?');">@lang('management.delete')</button></a>
												{{-- </div> --}}
											</td>
											<td>
												<a href="/UpdateParameterValue/{{$value->refcode}}"><button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('management.update')</button></a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@if(Session::get('messagedoc')) 
								<div class="card-footer">

									<div class="alert alert-success">
										{{Session::get('messagedoc')}}
									</div>

								</div>   
								@endif
							</div>
							{{-- <div class="col-md-2">
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>

@endsection