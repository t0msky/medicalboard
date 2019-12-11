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
			<h5 class="card-title">@lang('form/admin.general.nurse.title2')</h5>
			<br>
			<div class="row ">
				<div class="col-12">
					<div class="card">
						{{-- <div class="col-md-14"> --}}
							<div class="table-responsive m-t-40 p-l-30 p-r-30">
								<table id="nursemanage" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>@lang('form/admin.general.update')</th>
											<th>@lang('form/admin.general.delete')</th>
											<th>@lang('form/admin.general.doctor.id_no')</th>
											<th>@lang('form/admin.general.nurse.hospital')</th>
											<th>@lang('form/admin.general.nurse.nurse_name')</th>
											<th>@lang('form/admin.general.doctor.account_no')</th>
											<th>@lang('form/admin.general.doctor.bank')</th>
											
										</tr>
									</thead>
									<tbody>

										{{-- @foreach ($result as $key => $value) --}}
										<tr>
											<td width="20"><a href="/UpdateNurse/" id='selectdraft' ><i class="fas fa-edit"></i></a></td>
                                             <td  width="20"><a href="/deleteNurse/" id="deletedraft" onclick="return confirm ('Do you want to delete this ?');" ><i class="fas fa-trash-alt fa-sm"></i></a></td>											
											<td>{{-- {{$value->nurse_id} --}}</td>
											<td>{{-- {{$value->hospital_name}} --}}</td>
											<td>{{-- {{$value->nurse_name}} --}}</td>
											<td>{{-- {{$value->nurse_acctno}} --}}</td>
											<td>{{-- {{$value->descen}} --}}</td>
											
										</tr>
										{{-- @endforeach --}}
									</tbody>
								</table>
							</div>

							@if(Session::get('messagedoc')) 
							<div class="card-footer">

								<div class="alert alert-success">
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

      $('#nursemanage').DataTable({
      	
      	language: {
      		"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json"
      	},
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  }
  else{
      //$('#english').addClass("ti-check");
      //$('#malay').removeClass("ti-check");
      
      $('#nursemanage').DataTable({
      	
      });
      $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
      //chg07072019 - irina
      $('#malay').css("cssText", "font-weight:normal !important;");
      $('#english').css("cssText", "font-weight:bold !important;");

  }
});
</script>

@endsection