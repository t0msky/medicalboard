<div class="row">
    <div class="col-sm-12">
        <div class="card">
        <form class="form">
            <div id="accordion2" role="tablist" class="accordion" >
                <!-- Ob Form -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOb">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/ob.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                        <div class="card-body">
                            @include('scheme.general.ob')
                        </div>
                    </div>
                </div>
                <!-- Employer Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingEmployer">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEmployer" aria-expanded="false" aria-controls="collapseEmployer"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/employer.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseEmployer" class="collapse" role="tabpanel" aria-labelledby="headingEmployer">
                        <div class="card-body">
                            @include('scheme.general.employer')
                        </div>
                    </div>
                </div>
                <!-- Wages Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingWages">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/wages.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                        <div class="card-body">
                            @include('scheme.general.wages')
                        </div>
                    </div>
                </div>
                <!-- Death Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDeath">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDeath" aria-expanded="false" aria-controls="collapseDeath"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/deathDetails.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDeath" class="collapse" role="tabpanel" aria-labelledby="headingDeath">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.death')
                        </div>
                    </div>
                </div>
                <!-- Dependant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDependant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependant" aria-expanded="false" aria-controls="collapseDependant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/dependantsProfile.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDependant" class="collapse" role="tabpanel" aria-labelledby="headingDependant">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.dependant')
                        </div>
                    </div>
                </div>
                <!-- Applicant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingApplicant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/applicantDetails.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.applicant')
                        </div>
                    </div>
                </div>
                <!-- Socso Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingApplicant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/applicantDetails.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.applicant')
                        </div>
                    </div>
                </div>
                <!-- Upload Document Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingUploadDoc">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseUploadDoc" aria-expanded="false" aria-controls="collapseUploadDoc"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/employerDetails.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseUploadDoc" class="collapse" role="tabpanel" aria-labelledby="headingUploadDoc">
                        <div class="card-body">
                            @include('scheme.general.employer')
                        </div>
                    </div>
                </div>
                <!-- Confirmation Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingConfirmation">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirmation" aria-expanded="false" aria-controls="collapseConfirmation"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/employerDetails.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseConfirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirmation">
                        <div class="card-body">
                            @include('scheme.general.employer')
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
   