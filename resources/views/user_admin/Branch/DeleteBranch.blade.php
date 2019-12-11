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
				<h3 class="card-title">Delete Branch</h3>
				<form class="form">

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group mt-5 row">
								<label for="example-text-input" class="col-2 col-form-label">Branch Code</label>
								<div class="col-10">
									<input class="form-control" type="text" value="" id="example-text-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-search-input" class="col-2 col-form-label">Branch Name</label>
								<div class="col-10">
									<input class="form-control" type="search" value="" id="example-search-input">
								</div>
							</div>
						</fielset>
					</div>

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-email-input" class="col-2 col-form-label">Branch Address</label>
								<div class="col-10">
									<input class="form-control" type="email" value="" id="example-email-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-url-input" class="col-2 col-form-label"></label>
								<div class="col-10">
									<input class="form-control" type="url" value="" id="example-url-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-tel-input" class="col-2 col-form-label"></label>
								<div class="col-10">
									<input class="form-control" type="tel" value="" id="example-tel-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="row">
						<div class="col-md-6">
							<fieldset disabled>
								<div class="form-group row">
									<label class="col-2 col-form-label">State</label>
									<div class="col-10">
										<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>
							</fieldset>
						</div>
					</div>

					<div class="col-md-6">
						<fieldset disabled>
							<div class="form-group row">
								<label for="example-password-input" class="col-2 col-form-label">Tel No</label>
								<div class="col-10">
									<input class="form-control" type="password" value="" id="example-password-input">
								</div>
							</div>
						</fieldset>
					</div>

					<div class="form-actions">
						<a href="/BranchManagement"><button type="button" class="btn btn waves-effect waves-light btn-success">OK</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection