@extends('general.layouts.app')

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.parameter.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card-header">
						<div class="table-responsive">
							<table id="parameter" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>@lang('form/admin.general.update')</th>
										<th>@lang('form/admin.general.delete')</th>
										<th>@lang('form/admin.general.parameter.code_category')</th>
										<th>@lang('form/admin.general.parameter.ref_code')</th>
										<th>@lang('form/admin.general.parameter.description_en')</th>
										<th>@lang('form/admin.general.parameter.description_bm')</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($result as $value) 
									<tr>
										<td width="20"><a class='updatedraft' href="{{ route('edit_parameter',$value->id) }}"><i class="fas fa-edit"></i></a></td>
										<td style="align:center;width:1%;"><a class='view' data-id="{{$value->id}}" data-toggle="modal" data-target="#deletemodalparameter"></a><i class="fas fa-trash-alt fa-sm"></i></td>
										<td>{{ $value->code_category }}</td>
										<td>{{ $value->ref_code }}</td>
										<td>{{ $value->desc_en }}</td>
										<td>{{ $value->desc_bm }}</td>
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

<div class="modal fade" id="deletemodalparameter" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('delete_parameter')}}">
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

		$('#deletemodalparameter').on('show.bs.modal',function(e){

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

      $('#parameter').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#parameter').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection