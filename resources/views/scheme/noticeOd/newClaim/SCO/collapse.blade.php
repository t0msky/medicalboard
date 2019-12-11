<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div id="accordion2" role="tablist" class="accordion" >
                    <!-- preparer -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne16">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preparer" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Preparer Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="preparer" class="collapse" role="tabpanel" aria-labelledby="headingOne16">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.IO.preparer')
                            </div>
                        </div>
                    </div>
                    <!-- case info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#case" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Case Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="case" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.IO.caseinfo')
                            </div>
                        </div>
                    </div>
                    <!-- certificate -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne14">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificate" aria-expanded="false" aria-controls="collapseOne9">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Employer Certification')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="certificate" class="collapse" role="tabpanel" aria-labelledby="headingOne14">
                            <div class="card-body">
                                @include('scheme.general.certification')
                            </div>
                        </div>
                    </div> 
                    <!-- obform -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne2">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#obform" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Insured Person Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="obform" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="card-body">
                                {{-- @include('scheme.general.ob') --}}
                            </div>
                        </div>
                    </div>  
                    <!-- employer -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne3">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employer" aria-expanded="false" aria-controls="collapseOne2">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Employer Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="employer" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
                            <div class="card-body">
                                @include('scheme.general.employer')
                            </div>
                        </div>
                    </div>  
                    <!-- employment history -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne4">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odempinfo" aria-expanded="false" aria-controls="collapseOne3">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Employment History')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="odempinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
                            <div class="card-body">
                                @include('Scheme.noticeOd.newClaim.PK.odEmphistory')
                            </div>
                        </div>
                    </div>  
                    <!-- od info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne5">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odinfo" aria-expanded="false" aria-controls="collapseOne4">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Occupational Disease Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="odinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
                            <div class="card-body">
                                @include('Scheme.noticeOd.newClaim.IO.odInformation')
                            </div>
                        </div>
                    </div>  
                    <!-- mc info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne6">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mcdetails" aria-expanded="false" aria-controls="collapseOne5">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('HUS Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="mcdetails" class="collapse" role="tabpanel" aria-labelledby="headingOne6">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.IO.mc')
                            </div>
                        </div>
                    </div>
                    <!-- wages info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne7">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne6">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Wages Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne7">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.IO.wages')
                            </div>
                        </div>
                    </div>
                    <!-- jdk decision -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne8">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#jdkdecision" aria-expanded="false" aria-controls="collapseOne6">
                                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.jdk_dec')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="jdkdecision" class="collapse" role="tabpanel" aria-labelledby="headingOne8">
                            <div class="card-body">
                                @include('scheme.noticeOd.SCO.jdk_decision')
                            </div>
                        </div>
                    </div>  --}}
                    <!-- investigation -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne9">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation" aria-expanded="false" aria-controls="collapseOne6">
                                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigation')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="investigation" class="collapse" role="tabpanel" aria-labelledby="headingOne9">
                            <div class="card-body">
                                @include('scheme.noticeOd.IO.investigation')
                            </div>
                        </div>
                    </div>  --}}
                    <!-- investigation info -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne10">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation_info" aria-expanded="false" aria-controls="collapseOne6">
                                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigation_info')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="investigation_info" class="collapse" role="tabpanel" aria-labelledby="headingOne10">
                            <div class="card-body">
                                @include('scheme.noticeOd.IO.investigationInfo')
                            </div>
                        </div>
                    </div>  --}}
                    <!-- socso office -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne12">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false" aria-controls="collapseOne7">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('SOCSO Office')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingOne12">
                            <div class="card-body">
                                @include('scheme.general.socso')
                            </div>
                        </div>
                    </div>
                    <!-- bank info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne13">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankinfo" aria-expanded="false" aria-controls="collapseOne8">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Bank Information')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="bankinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne13">
                            <div class="card-body">
                                @include('scheme.general.bank')
                            </div>
                        </div>
                    </div>
                    <!-- bank info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne15">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne10">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Confirmation')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne15">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.IO.confirmation')
                            </div>
                        </div>
                    </div>  
                    <!-- sco recommendation -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne16">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#recommendation" aria-expanded="false" aria-controls="collapseOne10">
                                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.sco_recommend')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="recommendation" class="collapse" role="tabpanel" aria-labelledby="headingOne16">
                            <div class="card-body">
                                @include('Scheme.noticeOd.SCO.sco_recommendation')
                            </div>
                        </div>
                    </div>   --}}
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Row -->

<script>
//redirect to specific tab
$(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
});

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});

</script>