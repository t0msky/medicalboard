@extends('general.layouts.app')

@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.unavailibility.title1')</h5>
			<form method='' action="" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-body">
					<br>
					<br>
					<div class="row p-t-20">
						<div class="col-md-2">
							<label class="control-label">@lang('form/admin.general.unavailibility.user_id')</label>
						</div>
						<div class="col-md-4">
							<select name="" class="form-control">
							</select>
						</div>
					</div> 
					<div class="row p-t-20">
						<div class="col-md-2">
							<label class="control-label">@lang('form/admin.general.unavailibility.start_date')</label>
						</div>
						<div class="col-md-2">
							<input type="date" class="form-control" name="" value="">
						</div>
						<div class="col-md-2">
							<label class="control-label">@lang('form/admin.general.unavailibility.end_date')</label>
						</div>
						<div class="col-md-2">
							<input type="date" class="form-control" name="" value="">
						</div>
					</div> 
					<div class="row p-t-20">
						<div class="col-md-2">
							<label class="control-label">@lang('form/admin.general.unavailibility.unavailibility_reasons')</label>
						</div>
						{{-- <div class="form-group"> --}}
							<div class="col-md-8">
								<textarea class="form-control" rows="10" cols="70"></textarea>
								{{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">Submit</button> --}}
							</div>
						</div>
					</div>        
				</form>
			</div>
		</div>
	</div>
</div>

@endsection