@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<form method="POST" action="#">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">@lang('form/admin.general.audit.title1')</h5>
				<br>
				<div class="row ">

					<span id="total_records"></span></b></div> 
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">@lang('form/admin.general.audit.date_from')</label>
								<input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">@lang('form/admin.general.audit.date_to')</label>
								<input type="date" name="from_date" id="to_date" class="form-control" placeholder="To Date">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">@lang('form/admin.general.audit.user_id')</label>
								{{-- <input type="text" name="from_date" id="to_date" class="form-control" placeholder=""> --}}
								<div class="input-group">
									<input type="text" class="form-control" id="uname" placeholder="">
									<div class="input-group-append"><span class="input-group-text"><i class="ti-search"></i></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-left:3px;">
							<div class="form-group">
								<button style="margin-right:500px;" type="button" name="refresh" id="refresh" class="btn btn waves-effect waves-light btn-success">@lang('form/admin.general.audit.reset')</button>
							</div>
						{{-- </div> --}}
					</div>



					<div class="col-12">
						<div class="card">
							{{-- <div class="col-md-14"> --}}
								<div class="table-responsive m-t-40 p-l-30 p-r-30">
									<table id="audittrail" class="display nowrap table table-hover table-striped table-bordered">
										<thead>
											<tr>
												{{-- <th>@lang('form/admin.general.update')</th>
												<th>@lang('form/admin.general.delete')</th> --}}
												<th>@lang('form/admin.general.no')</th>
												<th>@lang('form/admin.general.audit.date')</th>
												<th>@lang('form/admin.general.audit.time')</th>
												<th>@lang('form/admin.general.audit.user_id')</th>
												<th>@lang('form/admin.general.audit.branchcode')</th>
												<th>@lang('form/admin.general.audit.att_type')</th>
												<th>@lang('form/admin.general.audit.id_no')</th>
												<th>@lang('form/admin.general.audit.crn')</th>
												<th>@lang('form/admin.general.audit.mrn')</th>
												<th>@lang('form/admin.general.audit.rtwn')</th>
												{{-- <th>@lang('management.msr')</th> --}}
												<th>@lang('form/admin.general.audit.success')</th>
												<th>@lang('form/admin.general.audit.description')</th>
												
											</tr>
										</thead>
										<tbody>

											{{-- @foreach ($audittrail as $value) --}}
											<tr>
												{{-- 			<td>{{substr($value-> date,6,7)}}-{{substr($value-> date,4,-2)}}-{{substr($value-> date,2,-4)}}</td> --}}
												{{-- <td width="20"><a href="" id='selectdraft' ><i class="fas fa-edit"></i></a></td>
												<td  width="20"><a href="" id="deletedraft" onclick="return confirm('Do you want to delete this Hospital ?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td> --}}
												<td>1</td>
												<td>02062019</td>
												<td>070824</td>
												<td>Irina</td>
												<td>A31</td>
												<td>C</td>
												<td>800920145348</td>
												<td>A31NTPK191000001</td>
												<td>DMA3019080001</td>
												<td>MB00120190</td>
												<td>Y</td>
												<td style="align:center;width:1%;"><a id='view' data-desc="Successful update OB Profile. idno: 760709016544, newidno:760709016544" data-toggle="modal" data-target="#modalJustification"><i class="fas fa-file-alt"></i></td>
												</tr>
												{{-- @endforeach --}}
												<tr>
											{{-- 	<td width="20"><a href="" id='selectdraft' ><i class="fas fa-edit"></i></a></td>
											<td  width="20"><a href="" id="deletedraft" onclick="return confirm('Do you want to delete this Hospital ?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td> --}}
											<td>2</td>
											<td>03062019</td>
											<td>032043</td>
											<td>Irina</td>
											<td>A31</td>
											<td>C</td>
											<td>920606047195</td>
											<td></td>
											<td></td>
											<td></td>
											<td>Y</td>
											<td style="align:center;width:1%;"><a id='view' data-desc="" data-toggle="modal" data-target="#modalJustification"><i class="fas fa-file-alt"></i></td></i></td>

											</tr>
											<tr>
												{{-- <td width="20"><a href="" id='selectdraft' ><i class="fas fa-edit"></i></a></td>
												<td  width="20"><a href="" id="deletedraft" onclick="return confirm('Do you want to delete this Hospital ?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td> --}}
												<td>3</td>
												<td>08062019</td>
												<td>185830</td>
												<td>Irina</td>
												<td>A31</td>
												<td>C</td>
												<td>800920145348</td>
												<td></td>
												<td></td>
												<td></td>
												<td>Y</td>
												<td style="align:center;width:1%;"><a id='view' data-desc="" data-toggle="modal" data-target="#modalJustification"><i class="fas fa-file-alt"></i></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		<div class="modal fade" id="modalJustification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header  card-title">
						<h4 class="modal-title" id="exampleModalLabel3"></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="p-20">
											<div class="row">
												<div class="col-md-12">
													<h3>@lang('form/admin.general.audit.description')</h3>
													<hr>
													<div  class="row">
														<div class="col-md-12">
															<div class="form-group">
																<input  type="text" id="justification_finding" name="justification_finding[]" class="form-control" readonly>
															</div>
														</div>
													</div>
												</div>
											</div>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
					</div>
				</div>
			</div>
		</div>
		@endsection
		

		@section('js')
		<script>
			$(document).ready(function(){

				// $("#modalJustification").modal('show');
				$('#modalJustification').on('show.bs.modal', function (e){

					var desc = $(e.relatedTarget).data('desc');


					$('#justification_finding').prop('value', desc);

				});

			});
			
		</script>
		@endsection
		



























		

