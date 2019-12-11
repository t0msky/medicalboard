@extends('general.layouts.app')

@section('css')
<style>
	.select2-container--default .select2-selection--multiple {
		background-color: white;
		border: 1px solid #949596ab !important;
		cursor: text;
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
		font-size: .875rem;
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
						<h5 class="card-title">@lang('form/admin.general.hospital.title3')</h5>
						@foreach($result as $values)
						<hr>
						<form method="POST" action="{{route('update_hospital')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$values->id}}">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.hospital.hospital_type')</label>
									<select name="statecode" class="form-control">
										@foreach($option_hospital_type as $value)
										@if($value->ref_code==$values->idtype)
										<option value="{{$value->ref_code}}" selected>{{$value->desc_en}}</option>
										@else
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.hospital.hospital_name')</label>
									<input type="text" class="form-control" name="name" value="{{$values->name}}" required>
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.user.branch')</label>
									<select name="branchs[]" class="select2 m-b-10 form-control select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
										@foreach($option_branchs as $value)
										<option value="{{$value->id}}">{{$value->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
									<label>@lang('form/admin.general.hospital.address')</label>
									<input type="text" class="form-control clearFields" name="add1" value="{{$values->add1}}" >
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="text" class="form-control clearFields" name="add2" value="{{$values->add2}}">
								</div>
								<div class="form-group col-md-12 col-lg-12">
									<input type="text" class="form-control clearFields" name="add3" value="{{$values->add3}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.hospital.postcode')</label>
									<input type="text" class="form-control" name="postcode" value="{{$values->postcode}}">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.hospital.city')</label>
									<input type="text" class="form-control" name="city" value="{{$values->city}}">
								</div>
								<div class="form-group col-md-12 col-lg-4">
									<label>@lang('form/admin.general.hospital.state')</label>
									<select name="statecode" class="form-control" required>
										@foreach($option_state as $value)
										@if($value->ref_code==$values->statecode)
										<option value="{{$value->ref_code}}" selected>{{$value->desc_en}}</option>
										@else
										<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group col-md-12 col-lg-8">
								<label class="control-label">@lang('form/admin.general.hospital.medical_board_category')</label>
								<div class="row p-l-20">
									<div class="custom-control custom-checkbox">
										@if ($values->jdind == '1')
										<input type="checkbox" value="{{ $values->jdind }}" name="jdind" class="custom-control-input" id="customCheck1" checked>
										@else
										<input type="checkbox" value="" name="jdind" class="custom-control-input" id="customCheck1">
										@endif
										<label class="custom-control-label" for="customCheck1">@lang('form/admin.general.hospital.medical_board')</label>
									</div>
									<div class="custom-control custom-checkbox">
										@if ($values->jdkind == '1')
										<input type="checkbox" value="{{ $values->jdkind }}" name="jdkind" class="custom-control-input" id="customCheck2" checked>
										@else
										<input type="checkbox" value="" name="jdkind" class="custom-control-input" id="customCheck2">
										@endif
										<label class="custom-control-label" for="customCheck2">@lang('form/admin.general.hospital.medical_special_board')</label>
									</div>
									<div class="custom-control custom-checkbox">
										@if ($values->jdrind == '1') 
										<input type="checkbox" value="{{ $values->jdrind }} " name="jdrind" class="custom-control-input" id="customCheck3" checked>
										@else
										<input type="checkbox" value="" name="jdrind" class="custom-control-input" id="customCheck3">
										@endif
										<label class="custom-control-label" for="customCheck3">@lang('form/admin.general.hospital.medical_appeal_board')</label>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
								<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
								<a href="/home"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
							</div>
						</form>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
<script>

	$('input[type="checkbox"]').change(function(){
		this.value = (Number(this.checked));
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


	{{-- <script>
		$(document).ready(function () {
			$("#yes").hide();

			$('select[name=hospital_jdind]').change(function () {

				if (this.value == '1') {
					$('#yes').show();

				}

				else{
					$('#yes').hide();

				}
			});
		});
	</script> --}}




