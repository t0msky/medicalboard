<div class="row">
        <div class="col-sm-12">
                <div class="card">
                        <form class="form">      
                           <div id="accordion2" role="tablist" class="accordion" >
                                <!-- Prepare -->   
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingZero0">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.preparer.title')</h6></a>
                                                </h5>
                                        </div>
                                        <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                                <div class="card-body">
                                                        @include('scheme.general.prepare')
                                                </div>
                                        </div>
                                </div>
                                <!-- Case Info -->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne1">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.case_info.title')</h6></a>
                                                </h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                <div class="card-body">@include('scheme.general.case_info')</div>
                                        </div>
                                </div>
                                <!-- Certification -->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwelve12">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve12" aria-expanded="false" aria-controls="collapseTwelve12">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.certification.title') </h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseTwelve12" class="collapse" role="tabpanel" aria-labelledby="headingTwelve12">
                                                <div class="card-body">
                                                        @include('scheme/general.certification')
                                                </div>
                                        </div>
                                </div>
                                <!-- Insured Person -->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.ob.title')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                <div class="card-body">
                                                        @include('scheme.general.ob')
                                                </div>
                                        </div>
                                </div>
                                <!-- Employer -->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSeven7">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.employer.title') </h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                                                <div class="card-body">
                                                        @include('scheme.general.employer')
                                                </div>
                                        </div>
                                </div>
                                <!-- Accident Details --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFive5">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.accident.title')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.accidentDetails')</div>
                                        </div>
                                </div>
                                <!-- Wages --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEight8">
                                                <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                                        <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('form/scheme.general.collapse.wages.title')
                                                        </h6>
                                                </a>
                                                </h5>
                                        </div>
                                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                                <div class="card-body"> @include('scheme.noticeAccident.newClaim.SCO.wages')</div>
                                        </div>
                                </div> 
                                <!-- HUS --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSix6">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6">
                                                <div class="card-body">@include('scheme.general.mc.hus')</div>
                                        </div>
                                </div>
                                <!-- SOCSO --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingThirteen13">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen13" aria-expanded="false" aria-controls="collapseThirteen13">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.socso.title')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseThirteen13" class="collapse" role="tabpanel" aria-labelledby="headingThirteen13">
                                                <div class="card-body">@include('scheme.general.socso')</div>
                                        </div>
                                </div>
                                <!-- BANK --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingBank1">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank1" aria-expanded="false" aria-controls="collapseBank1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.bank.title')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseBank1" class="collapse" role="tabpanel" aria-labelledby="headingBank1">
                                                <div class="card-body">@include('scheme.general.bank')</div>
                                        </div>
                                </div>
                                <!-- CONFIRMATION --> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFifteen15">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFifteen15" aria-expanded="false" aria-controls="collapseFifteen15">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.confirmation.title')</h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseFifteen15" class="collapse" role="tabpanel" aria-labelledby="headingFifteen15">
                                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.confirmation_SCO')</div>
                                        </div>
                                </div> 
                            </div> 
                        </form>
                </div>
        </div>
</div>                
       