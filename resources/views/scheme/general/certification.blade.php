<div class="form-row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="{{route('post.certification')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-body">
						<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label class="control-label">@lang('form/personal-info.name')</label>
									@if(!empty($certificate) ||$certificate!=null)
									<input type="text" id="emprepname" name="emprepname" value="{{$certificate->emprepname}}" class="form-control">
									@else
									<input type="text" id="emprepname" name="emprepname" value="" class="form-control">
									@endif
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label class="control-label">@lang('form/scheme.general.collapse.certification.designation')</label>
									@if(!empty($certificate) ||$certificate!=null)
									<input type="text" id="emprepdes" name="emprepdes" value="{{$certificate->emprepdes}}" class="form-control">
									@else
									<input type="text" id="emprepdes" name="emprepdes" value="" class="form-control">
									@endif
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-2">
									<label class="control-label">@lang('form/scheme.general.collapse.certification.date')</label>
									@if(!empty($certificate) ||$certificate!=null)
									<input type="date" id="emprepdate" name="emprepdate" value="{{$certificate->emprepdate}}" class="form-control">
									@else
									<input type="date" id="emprepdate" name="emprepdate" value="" class="form-control">
									@endif
								</div>
							</div>

					<div class="form-actions">
					<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
					<button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- form-row -->
</div>
