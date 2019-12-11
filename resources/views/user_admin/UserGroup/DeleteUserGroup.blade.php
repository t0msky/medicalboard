@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="" id="">
					<div class="form-body">
						<h3 class="card-title">Delete User Group</h3>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<fieldset disabled>
									<div class="form-group row">
										<label for="disabledTextInput" class="col-2 col-form-label">Group ID</label>
										<div class="col-10">
											<input class="form-control" id="refcode" name="refcode" type="text" value="refcode">
										</div>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="form-actions">
							<a href="/Management"><button type="button" class="btn btn waves-effect waves-light btn-success">CANCEL</button></a>
							<a href="/Management"><button type="button" class="btn btn waves-effect waves-light btn-danger" onclick="return confirm ('Do you want to delete this Group ID ?');">DELETE</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>


@endsection