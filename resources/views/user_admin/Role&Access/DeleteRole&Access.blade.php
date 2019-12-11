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
				<h3 class="card-title">Delete Role & Access</h3>
				<form class="form">
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group mt-5 row">
								<label for="example-text-input" class="col-2 col-form-label">Group</label>
								<div class="col-10">
									<input class="form-control" type="text" value="" id="example-text-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-search-input" class="col-2 col-form-label">Role</label>
								<div class="col-10">
									<input class="form-control" type="search" value="" id="example-search-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-search-input" class="col-2 col-form-label">Module</label>
								<div class="col-10">
									<input class="form-control" type="search" value="" id="example-search-input">
								</div>
							</div>
						</fieldset>
					</div>


					<div class="form-actions">
						<a href="/ParameterManagement"><button type="button" class="btn btn waves-effect waves-light btn-danger">DELETE</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection