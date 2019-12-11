@extends('general.layouts.app')

@section('css')
<style>
	.select2-container--default .select2-selection--multiple {
		background-color: white;
		border: 1px solid #949596ab !important;
		border-radius: 4px;
		cursor: text;
		min-height: 39px;
	}

	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		background-color: #fec107!important;
		border: 1px solid #aaa;
		border-radius: 4px;
		cursor: default;
		float: left;
		margin-right: 5px;
		margin-top: 5px;
		padding: 0 5px;
	}
</style>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body">
					<div class="form-body">
						<h5 class="card-title">@lang('form/admin.general.user.title3')</h5>
						<hr>
						@foreach($result as $key => $value)
						<form method='post' action="{{route('update_user')}}" >
							@csrf
							{{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
							<input type="hidden" name="id" value="{{$value->id}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.user.name')</label>
									<input type="text" class="form-control" name="name" value="{{$value->name}}" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.user.username')</label>
									<input type="text" class="form-control" name="operation_id" value="{{$value->operation_id}}" required>

								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.chairman.icno')</label>
									<input type="text" class="form-control" name="nric_no" value="{{$value->nric_no}}" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.user.email')</label>
									<input type="text" class="form-control" name="email" value="{{$value->work_email}}">
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.user.staff_number')</label>
									<input type="text" class="form-control" name="staff_number" value="{{$value->staff_number}}" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.user.branch')</label>
									<select name="branch_id" class="form-control">
										<option selected disabled hidden></option>
										@foreach ($option_branch as $ob)
										@if($ob->id==$value->branch_id)
										<option value="{{$ob->id}}" selected>{{$ob->name}}</option>
										@else
										<option value="{{$ob->id}}">{{$ob->name}}</option>
										@endif
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.user.management_id')</label>
									<select name="manager_id" class="form-control">
										<option selected disabled hidden></option>
										@if($value->manager_id == '1')
										<option value="1" selected>Manager</option>
										<option value="2">supervior</option>
										@else
										<option value="1" >Manager</option>
										<option value="2" selected>supervior</option>
										@endif
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-6">
									<label>@lang('form/admin.general.user.multi_select_role')</label>
									<select name="roles[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
										@foreach ($option_role as $or)
										@foreach ($result[$key]->user->roles as $roles)
										@if ($roles->id==$or->id)
										<option value="{{$or->id}}" selected>{{$or->name}}</option>
										@else
										<option value="{{$or->id}}">{{$or->name}}</option>
										@endif
										@endforeach
										@endforeach
									</select>
								</div>
							</div>
							@endforeach
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">
								@lang('button.save')</button>
								<button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-success">RESET</button>
								<a href="{{route('audit')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$('#pre-selected-options').multiSelect();
	$('#optgroup').multiSelect({
		selectableOptgroup: true
	});
	$('#public-methods').multiSelect();
	$('#select-all').click(function () {
		$('#public-methods').multiSelect('select_all');
		return false;
	});
	$('#deselect-all').click(function () {
		$('#public-methods').multiSelect('deselect_all');
		return false;
	});
	$('#refresh').on('click', function () {
		$('#public-methods').multiSelect('refresh');
		return false;
	});
	$('#add-option').on('click', function () {
		$('#public-methods').multiSelect('addOption', {
			value: 42,
			text: 'test 42',
			index: 0
		});
		return false;
	});

	$(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
            	new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
            	verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
            	verticalbuttons: true
            });
            if (vspinTrue) {
            	$('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
            	min: 0,
            	max: 100,
            	step: 0.1,
            	decimals: 2,
            	boostat: 5,
            	maxboostedstep: 10,
            	postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
            	min: -1000000000,
            	max: 1000000000,
            	stepinterval: 50,
            	maxboostedstep: 10000000,
            	prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
            	initval: 40
            });
            $("input[name='tch5']").TouchSpin({
            	prefix: "pre",
            	postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
            	selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
            	$('#public-methods').multiSelect('select_all');
            	return false;
            });
            $('#deselect-all').click(function () {
            	$('#public-methods').multiSelect('deselect_all');
            	return false;
            });
            $('#refresh').on('click', function () {
            	$('#public-methods').multiSelect('refresh');
            	return false;
            });
            $('#add-option').on('click', function () {
            	$('#public-methods').multiSelect('addOption', {
            		value: 42,
            		text: 'test 42',
            		index: 0
            	});
            	return false;
            });
            $(".ajax").select2({
            	ajax: {
            		url: "https://api.github.com/search/repositories",
            		dataType: 'json',
            		delay: 250,
            		data: function (params) {
            			return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                        	results: data.items,
                        	pagination: {
                        		more: (params.page * 30) < data.total_count
                        	}
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                	return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>

    @endsection

