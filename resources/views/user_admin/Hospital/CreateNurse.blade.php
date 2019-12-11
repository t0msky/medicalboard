@extends('general.layouts.app')

{{-- @section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection --}}

@section('content')

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">@lang('form/admin.general.nurse.title1')</h5>
			<hr>
			<form action="#" >
				<div class="form-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.doctor.id_no')</label>
								<input type="text" class="form-control" id="id_no" value="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.nurse.hospital')</label>
								<select class="form-control">
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.nurse.nurse_name')</label>
								<input type="text" class="form-control" id="id_no" value="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.doctor.account_no')</label>
								<input type="text" class="form-control" id="id_no" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>@lang('form/admin.general.doctor.bank')</label>
								<select class="form-control">
								</select>
							</div>
						</div>
					</div>
					<div class="form-actions">
							<button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
							<button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('button.reset')</button>
							<a href="{{route('audit')}}"><button type="button" class="btn btn waves-effect waves-light btn-success">@lang('button.cancel')</button></a>
						</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Row -->
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



