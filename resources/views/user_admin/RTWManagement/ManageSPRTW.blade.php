@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.sp.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card">
						{{-- <div class="col-md-14"> --}}
							<div class="table-responsive m-t-40 p-l-30 p-r-30">
								<table id="sprtwmanage" class="display nowrap table table-hover table-striped table-bordered">
									<thead>
										<tr>
											<th>@lang('form/admin.general.update')</th>
											<th>@lang('form/admin.general.delete')</th>
											<th>@lang('form/admin.general.sp.service_provider')</th>
											<th>@lang('form/admin.general.hospital.address')</th>
											<th>@lang('form/admin.general.branch.postcode')</th>
											<th>@lang('form/admin.general.branch.city')</th>
											<th>@lang('form/admin.general.sp.state')</th>
										</tr>
									</thead>
									<tbody>

										{{-- @foreach ($hospital as $value) --}}
										<tr>
											<td width="20"><a href="" id='selectdraft' ><i class="fas fa-edit"></i></a></td>
                                             <td  width="20"><a href="" id="deletedraft" onclick="return confirm ('Do you want to delete this Hospital ?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td>	
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
												{{-- @if($value->hospital_idtype=="1")
												KKM
												@else
												PRIVATE
												@endif --}}
											</td>
											{{-- @foreach ($hospital1 as $value2)						
												@if($value2 -> refcode  == $value-> hospital_idtype)
												{{$value2->descen}}
												@endif
												@endforeach --}}
											
												</tr>
												{{-- @endforeach --}}
											</tbody>
										</table>
									</div>

									@if(Session::get('messagedoc')) 
									<div class="card-footer">

										<div class="alert alert-warning">
											{{Session::get('messagedoc')}}
										</div>

									</div>   
									@endif	
								{{-- </div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@endsection

		@section('js')

		<script>
			$(document).ready(function () {
				var language= $('#change_language').val();
				if(language=="BM"){
      //$('#malay').addClass("ti-check");
      //$('#english').removeClass("ti-check");
      
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:bold !important;");
      $('#english').css("cssText", "font-weight:normal !important;");

      $('#sprtwmanage').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#sprtwmanage').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection