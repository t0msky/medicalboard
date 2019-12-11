<div id="accordion2" role="tablist" class="accordion">
	<!-- Ob Form -->
	<form action="{{route('post.ob')}}" method="POST" id="reset">
        <div class="card m-b-0">
           <div class="card-header" role="tab" id="headingOb">
                <div class="form-row"><br>
                     <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">Form 34 Received Date</label><span class="required">*</span>
                        @if ((!empty($obprofile)||$obprofile!=null))
						<input type="date" id="accddate" name="f34recvdate" value="{{ $obprofile->f34recvdate  }}" class="form-control clearFields" required>
						@else
						<input type="date" id="accddate" name="f34recvdate" value="" class="form-control clearFields" required>
						@endif
                     </div>
                </div>
                <div class="form-row"><br>
                     <div class="form-group col-md-12 col-lg-3">
                     	<label class="control-label">@lang('Form 34 Submission By')</label>
                        <select class="form-control clearFields" name="f34submitby" id="f34submitby">
	                        <option value="please select" selected>@lang('Please Select')</option>
	                     	@foreach($ref_table->f34submitby as $f34)
	                     	@if ((!empty($obprofile) ||$obprofile!=null) && $obprofile->f34submitby == $f34->ref_code ))
	                       	<option value="{{$f34->ref_code}}" selected>{{$f34->desc_en}}</option>
	                       	@else
	                       	<option value="{{$f34->ref_code}}">{{$f34->desc_en}}</option>
	                       	@endif
	                        @endforeach
                    	</select>
                     </div>
                </div>
                <!-- Ob Form -->
                <h6 class="mb-0">                           
                   <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb">
                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.ob.title')</h6>
                   </a>
                </h6>
           </div>
           <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                <div class="card-body">
                    @include('scheme.general.ob')
                </div>
           </div>
       </div>
    </form>

	<!-- Employer Details -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingEmployer">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEmployer" aria-expanded="false" aria-controls="collapseEmployer">
					<h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.employer.title')</h6>
				</a>
			</h6>
		</div>
		<div id="collapseEmployer" class="collapse" role="tabpanel" aria-labelledby="headingEmployer">
			<div class="card-body">
				@include('scheme.general.employer')
			</div>
		</div>
	</div>

	<!-- Employment History -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingOdHist">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odempOdHist" aria-expanded="false" aria-controls="collapseOne3">
					<h6 class="card-title"><i class="fa fa-plus"></i> @lang('Employment History')</h6>
				</a>
			</h6>
		</div>
		<div id="odempOdHist" class="collapse" role="tabpanel" aria-labelledby="headingOdHist">
			<div class="card-body">
				@include('scheme.general.empHistory.main')
			</div>
		</div>
	</div>

	<!-- OD Info -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingOdInfo">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odinfo" aria-expanded="false" aria-controls="collapseOne4">
					<h6 class="card-title"><i class="fa fa-plus"></i>  @lang('Occupational Disease Information')</h6>
				</a>
			</h6>
		</div>
		<div id="odinfo" class="collapse" role="tabpanel" aria-labelledby="headingOdInfo">
			<div class="card-body">
				@include('scheme.noticeOd.newClaim.PK.odInformation')
			</div>
		</div>
	</div>

	<!-- Wages Info -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingWages">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne6">
					<h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.wages.title')</h6>
				</a>
			</h6>
		</div>
		<div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
			<div class="card-body">
				@include('scheme.noticeAccident.newClaim.PK.wages')
			</div>
		</div>
	</div>

	<!-- MC Info -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingMC">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mcdetails" aria-expanded="false" aria-controls="collapseOne5">
					<h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.mc.title')</h6>
				</a>
			</h6>
		</div>
		<div id="mcdetails" class="collapse" role="tabpanel" aria-labelledby="headingMC">
			<div class="card-body">
				@include('scheme.general.mc.main')
			</div>
		</div>
	</div>

	<!-- SOCSO Office -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingSocso">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#office" aria-expanded="false" aria-controls="collapseOne7">
					<h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.socso.title')</h6>
				</a>
			</h6>
		</div>
		<div id="office" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
			<div class="card-body">
				@include('scheme.general.socso')
			</div>
		</div>
	</div>

	<!-- Employer Certification -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingCert">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificate" aria-expanded="false" aria-controls="collapseOne9">
					<h6 class="card-title"><i class="fa fa-plus"></i> @lang('Employer Certification')</h6>
				</a>
			</h6>
		</div>
		<div id="certificate" class="collapse" role="tabpanel" aria-labelledby="headingCert">
			<div class="card-body">
				@include('scheme.general.certification')
			</div>
		</div>
	</div>

	<!-- Bank Info -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingBank">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankinfo" aria-expanded="false" aria-controls="collapseOne8">
					<h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.bank.title')</h6>
				</a>
			</h6>
		</div>
		<div id="bankinfo" class="collapse" role="tabpanel" aria-labelledby="headingBank">
			<div class="card-body">
				@include('scheme.general.bank')
			</div>
		</div>
	</div>

	<!-- Confirmation -->
	<div class="card m-b-0">
		<div class="card-header" role="tab" id="headingConfirm">
			<h6 class="mb-0"> 
				<a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne10">
					<h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.confirmation.title_confirmation')</h6>
				</a>
			</h6>
		</div>
		<div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirm">
			<div class="card-body">
				@include('scheme.general.confirmation')
			</div>
		</div>
	</div>
</div>

<script>
//redirect to specific tab
$(document).ready(function () {
	$('#tabMenu a[href="#{{ old('
		tab ') }}"]').tab('show')
	// Add minus icon for collapse element which is open by default
	$(".collapse.show").each(function () {
		$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
	});

	// Toggle plus minus icon on show hide of collapse element
	$(".collapse").on('show.bs.collapse', function () {
		$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
	}).on('hide.bs.collapse', function () {
		$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
	});
});
</script>