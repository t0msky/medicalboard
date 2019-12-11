@section('csss')
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

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form method='POST' action="{{route('create_weekend')}}" >
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-body">
						<table  id="its_weekend_yahoo" class="table table-sm table-bordered" data-toggle-column="first">
							<thead>
								<tr>
									<th style='width:10%'>@lang('form/admin.general.calendar.state')</th> 
									<th style='width:15%'>@lang('form/admin.general.calendar.tab_title3')</th> 
									<th style='width:2%'>@lang('form/admin.general.calendar.action')</th>
								</tr>
							</thead>

							<tbody>

								@foreach ($results as $key => $values)
								<tr data-expanded="true" class="workrow" id="">
									<td>
										@foreach ($values->states as $v)
										@foreach ($result as $x)
										@if ($v==$x->ref_code)
										{{$x->desc_en}},
										@endif
										@endforeach
										@endforeach
									</td>

									<td>
										@foreach ($values->weekend as $w)
										@if($w=="0")
										Sunday,
										@elseif($w=="1")
										Monday,
										@elseif($w=="2")
										Tuesday,
										@elseif($w=="3")
										Wednesday
										@elseif($w=="4")
										Thursday,
										@elseif($w=="5")
										Friday,
										@else
										Saturday,
										@endif
										@endforeach
									</td>
									<td><a class='updatedraft' data-toggle="modal" data-id="" data-case="" data-target="#edit_modal_weekend{{$values->id}}" href="#!"><i class="fas fa-edit"></i></a> | &nbsp;<a class='view' data-toggle="modal" data-target="#delete_weekend_1" data-id="{{$values->id}}"  href="#!"><i class="fas fa-trash-alt "></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

						<div class="form-actions">
							<button id='add_weekend_bebeh' type="button" class="btn btn waves-effect waves-light btn-success" ><i class="fa fa-plus"></i> @lang('form/admin.general.add_weekend')</button>
							<button id='saves' type="submit" style="display:none;" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
							<a href=""><button id='delete' type="button" style="display:none;" class="btn btn waves-effect waves-light btn-success deletesunday" id='deletedraft0' >@lang('button.cancel')</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


{{-- modal update --}}
@foreach ($results as $key => $values)

<div class="modal fade" id="edit_modal_weekend{{$values->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header  card-title">
				<h4 class="modal-title" id="exampleModalLabel3">@lang('form/admin.general.calendar.update_weekend_holiday')</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form method='post' action="{{route('update_weekend')}}" >
				@csrf
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="{{$values->id}}">
				<div class="modal-body">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="form-row">
									<div class="form-group col-md-12 col-lg-12">
										<label>@lang('form/admin.general.calendar.state')</label>
										<select name="states[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
											@foreach ($values->states as $v)
											@foreach ($result as $s)
											@if($s->ref_code==$v)
											<option value="{{$s->ref_code}}" selected>{{$s->desc_en}}</option>
											@else
											<option value="{{$s->ref_code}}">{{$s->desc_en}}</option>
											@endif
											@endforeach
											@endforeach
										</select>
									</div>
									<div class="form-group col-md-12 col-lg-12">
											<label>@lang('form/admin.general.calendar.tab_title3')</label>
											<select name="weekend[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
												@foreach ($values->weekend as $m)
												@if($m == '0')
												<option value="0" selected>Sunday</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												@elseif($m == '1')
												<option value="0">Sunday</option>
												<option value="1" selected>Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												@elseif($m == '2')
												<option value="0">Sunday</option>
												<option value="1">Monday</option>
												<option value="2" selected>Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												@elseif($m == '3')
												<option value="0">Sunday</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3" selected>Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												@elseif($m == '4')
												<option value="0">Sunday</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4" selected>Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												@elseif($m == '5')
												<option value="0">Sunday</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5" selected>Friday</option>
												<option value="6">Saturday</option>
												@else
												<option value="0">Sunday</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6" selected>Saturday</option>
												@endif
												@endforeach
											</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
					<button type="submit" id="save_just" class="btn btn-primary save_just" value="">@lang('button.save')</button>
				</div>
			</form>
			
		</div>
	</div>
</div>
@endforeach

{{-- modal delete --}}
<div class="modal fade" id="delete_weekend" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete?
				<input type="hidden" class="form-control" name="id" id="id">
			</div>
			<div class="modal-footer">
				<button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
				<button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete_weekend_1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{route('delete_weekend')}}">
				@csrf
				<div class="modal-body">
					Are you sure you want to delete?
					<input type="hidden" class="form-control" name="id" id="idWeekend">
				</div>
				<div class="modal-footer">
					<button type="button" id="btn_close" class="btn btn-secondary btn-sm"
					data-dismiss="modal">Close</button>
					<button type="submit" id="btn_deletedependent"  class="btn btn-danger btn-sm" >Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>


@section('jss')

<script>

	$(document).ready(function(){

		modal_delete();
		multi_select();

		var k = 0;
				// alert();

				$('#add_weekend_bebeh').on('click',function(){
		            // alert();

		            $('#saves').show();
		            $('#delete').show();

		            // var k = $("i[id^=deletedraft]").length;

		            k++;
		            // console.log("length i: "+k);
                // alert(k);
                // for (w = 0; w <= k; w++) { 
                // 	if($("#deletedraft"+w).length == 0 ) { 

                	var bebeh_2 = '<tr data-expanded="true" class="workrow" id="">'+
                	'<td>'+
                	' <select name="states'+k+'[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose">'+
                	'@foreach($result as $value)'+
                	'<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>'+
                	'@endforeach'+
                	' </select>'+
                	' </td>'+ 

                	'<td>'+
                	' <select name="weekend'+k+'[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose">'+
                	'<option value="0">Friday</option>'+
                	'<option value="1">Saturday</option>'+
                	'<option value="2">Sunday</option>'+
                	' </select>'+
                	' </td>'+

                	'<td>'+
                	// '<input type="hidden" name=no[] value="'+k+'">'+
                	// '<a id="updatedraft" data-toggle="modal" data-id="" data-case="" data-target="#edit_modal_weekend" href="#!"><i class="fas fa-edit"></i></a> | &nbsp;<a  data-toggle="modal" data-id="" data-target="#delete_weekend"  href="#!"><i class="fas fa-trash-alt deletesunday " id="deletedraft'+k+'"></i></a>'+
                	'</td>'+

                	'</tr>';

                	$('#its_weekend_yahoo tbody > tr:last').after(bebeh_2);

                	modal_delete();
                	multi_select();

                		// break;
                // 	}
                // }

            });
			});



	$('#edit_modal_weekend').on('show.bs.modal', function (e){

		var desc = $(e.relatedTarget).data('desc');


		$('#edit_modal_weekend').prop('value', desc);

	});

	$('#delete_weekend_1').on('show.bs.modal',function(e){

		var id=$(e.relatedTarget).data('id');
		$('#idWeekend').prop("value",id);

	});

	function multi_select(){
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
}

function modal_delete(){

        // Delete work
        $('.deletesunday').on('click',function(){

        	var delete_id = $(this).attr('id');
        	console.log('delete_id: '+delete_id);

        	// alert();
        	$("#delete_weekend").modal('show');
        	$("#delete_weekend .modal-footer button").on('click', function(e) {
        		var btn_id = event.target.id;
        		if(btn_id == 'btn_delete'){
        			e.preventDefault();

        			var jumlah = $("i[id^=deletedraft]").length;
        			console.log('del_id: '+jumlah);

        			if(jumlah !== 1){
        				$('#'+delete_id).closest("tr").remove();

        			}
        			
        		}
        	});
        });

    }
</script>

@endsection

