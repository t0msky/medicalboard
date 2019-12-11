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
				<h3 class="card-title">Delete User</h3>
				<form class="form">
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group mt-5 row">
								<label for="example-text-input" class="col-2 col-form-label">User ID</label>
								<div class="col-10">
									<input class="form-control" type="text" value="" id="example-text-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-search-input" class="col-2 col-form-label">User Name</label>
								<div class="col-10">
									<input class="form-control" type="search" value="" id="example-search-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-email-input" class="col-2 col-form-label">Email</label>
								<div class="col-10">
									<input class="form-control" type="email" value="" id="example-email-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-url-input" class="col-2 col-form-label">Branch</label>
								<div class="col-10">
									<input class="form-control" type="url" value="" id="example-url-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-tel-input" class="col-2 col-form-label">Group</label>
								<div class="col-10">
									<input class="form-control" type="tel" value="" id="example-tel-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-password-input" class="col-2 col-form-label">Role</label>
								<div class="col-10">
									<input class="form-control" type="password" value="" id="example-password-input">
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-password-input" class="col-2 col-form-label">Status</label>
								<div class="col-10">
									<input class="form-control" type="password" value="" id="example-password-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="form-actions">
						<a href="/Management"><button type="button" class="btn btn waves-effect waves-light btn-danger">DELETE</button></a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

@endsection