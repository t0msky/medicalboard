@extends('general.layouts.app')

@section('css')
<style>
	.select2-container--default .select2-selection--multiple {
		background-color: white;
		border: 1px solid #949596ab !important;
		border-radius: 4px;
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
	}
</style>
@endsection

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.role.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card-header">
							<div class="table-responsive">
								<table id="role" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>@lang('form/admin.general.update')</th>
											<th>@lang('form/admin.general.delete')</th>
											<th>@lang('form/admin.general.role.name')</th>
											<th>@lang('form/admin.general.role.code')</th>
											<th>@lang('form/admin.general.role.description')</th>
											<th>@lang('form/admin.general.role.usergroup')</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($result as $value)
										<tr>
											<td width="20"><a class='updatedraft' href="{{ route('edit_role',$value->id) }}"><i class="fas fa-edit"></i></a></td>

											<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodalrole"><i class="fas fa-trash-alt fa-sm"></i></td>

											<td>{{ $value->name }}</td>
											<td>{{ $value->code }}</td>
											<td>{{ $value->description }}</td>
											<td>
												@if($value->user_group=="1")
												HQ
												@elseif($value->user_group=="2")
												PPN
												@elseif($value->user_group=="3")
												PPP
												@elseif($value->user_group=="4")
												SCHEME
												@elseif($value->user_group=="5")
												RTW
												@elseif($value->user_group=="5")
												MEDICAL BOARD
												@else
												PORTAL
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
</div>

<div class="modal fade" id="deletemodalrole" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('delete_role') }}">
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

			$('#deletemodalrole').on('show.bs.modal',function(e){

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

      $('#role').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#role').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection
