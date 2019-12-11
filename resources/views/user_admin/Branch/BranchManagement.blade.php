@extends('general.layouts.app')

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.branch.title2')</h5>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="card-header">
						<div class="table-responsive">
							<table id="branch_manage" class="display nowrap table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>@lang('form/admin.general.update')</th>
										<th>@lang('form/admin.general.delete')</th>
										<th>@lang('form/admin.general.branch.branch_name')</th>
										<th>@lang('form/admin.general.branch.branch_code')</th>
										<th>@lang('form/admin.general.branch.assist_branchcode')</th>
										<th>@lang('form/admin.general.branch.state')</th>
										<th>@lang('form/admin.general.branch.branch_address')</th>
										<th>@lang('form/admin.general.branch.postcode')</th>
										<th>@lang('form/admin.general.branch.city')</th>
										<th>@lang('form/admin.general.branch.phone_no')</th>
										<th>@lang('form/admin.general.branch.fax_no')</th>
										<th>@lang('form/admin.general.branch.type')</th>
										<th>@lang('form/admin.general.branch.status')</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($result as $value)
									<tr>
										<td width="20"><a class='updatedraft' href="{{ route('edit_branch',$value->id) }}"><i class="fas fa-edit"></i></a></td>

										<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodalbranch"><i class="fas fa-trash-alt fa-sm"></i></a></td>

										<td>{{ $value->name }}</td>
										<td>{{ $value->code }}</td> 
										<td>{{ $value->assist_brcode }}</td> 
										<td> 
											@foreach ($option_state as $value2)
											@if ($value->state_code==$value2->ref_code)
											{{ $value2->desc_en }}
											@endif
											@endforeach
										</td>
										<td>
											{{$value->address_1}}<br>
											{{$value->address_2}}<br>
											{{$value->address_3}}
										</td>
										<td>{{ $value->postcode }}</td>
										<td>{{ $value->city_id }} </td>
										<td>{{ $value->phone_no }}</td>
										<td>{{ $value->fax_no }} </td>
										<td>@if($value->type=="1")
											PPN
											@else
											PPP
											@endif
										</td>
										<td> 
											@if($value->status=="1")
											Active
											@else
											Inactive
											@endif
										</td> 
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deletemodalbranch" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('delete_branch') }}">
				@csrf
				<div class="modal-body">
					Are you sure you want to delete?
					<input type="hidden" class="form-control" name="id" id="id">
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

@endsection

@section('js')

<script>
	$(document).ready(function () {

		$('#deletemodalbranch').on('show.bs.modal',function(e){

			var id=$(e.relatedTarget).data('id');
			$('#id').prop("value",id);

		});
		
		var language= $('#change_language').val();
		if(language=="BM"){
      //$('#malay').addClass("ti-check");
      //$('#english').removeClass("ti-check");
      
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:bold !important;");
      $('#english').css("cssText", "font-weight:normal !important;");

      $('#branch_manage').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#branch_manage').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection