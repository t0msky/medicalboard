<div class="row">
        <div class="col-sm-12">
            <div class="card">
            <form class="form">
                <div id="accordion2" role="tablist" class="accordion" >
                    <!-- Preparer Info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingPreparer">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapsePreparer" aria-expanded="false" aria-controls="collapsePreparer"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.preparer.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapsePreparer" class="collapse" role="tabpanel" aria-labelledby="headingPreparer">
                            <div class="card-body">
                                @include('scheme.general.prepare')
                            </div>
                        </div>
                    </div>
                    <!-- Case Info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingCaseinfo">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseinfo" aria-expanded="false" aria-controls="collapseCaseinfo"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.case_info.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseCaseinfo" class="collapse" role="tabpanel" aria-labelledby="headingCaseinfo">
                            <div class="card-body">
                                @include('scheme.general.case_info')
                            </div>
                        </div>
                    </div>
                    <!-- Case Info -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingCertification">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCertification" aria-expanded="false" aria-controls="collapseCertification"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.certification.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseCertification" class="collapse" role="tabpanel" aria-labelledby="headingCertification">
                            <div class="card-body">
                                @include('scheme.general.certification')
                            </div>
                        </div>
                    </div>
                    <!-- Ob Form -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOb">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.ob.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                            <div class="card-body">
                                {{-- @include('scheme.noticeDeath.newClaim.general.ob') --}}
                            </div>
                        </div>
                    </div>
                    <!-- Employer Details -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEmployer">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEmployer" aria-expanded="false" aria-controls="collapseEmployer"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.employer.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseEmployer" class="collapse" role="tabpanel" aria-labelledby="headingEmployer">
                            <div class="card-body">
                                @include('scheme.general.employer')
                            </div>
                        </div>
                    </div> --}}
                    <!-- Wages Details -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingWages">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.wages.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                            <div class="card-body">
                                @include('scheme.general.wages')
                            </div>
                        </div>
                    </div> --}}
                    <!-- Death Details -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingDeath">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDeath" aria-expanded="false" aria-controls="collapseDeath"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.notice_death.PK.death.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseDeath" class="collapse" role="tabpanel" aria-labelledby="headingDeath">
                            <div class="card-body">
                                @include('scheme.noticeDeath.newClaim.SCO.general.death')
                            </div>
                        </div>
                    </div>
                    
                    <!-- Applicant Details -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingApplicant">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.notice_death.PK.applicant.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                            <div class="card-body">
                                @include('scheme.noticeDeath.newClaim.general.applicant')
                            </div>
                        </div>
                    </div> --}}
                    <!-- Legal Decision -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingLegalD">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseLegalD" aria-expanded="false" aria-controls="collapseLegalD"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.legal_decision.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseLegalD" class="collapse" role="tabpanel" aria-labelledby="headingLegalD">
                            <div class="card-body">
                                @include('scheme.noticeDeath.newClaim.general.legal_decision')
                            </div>
                        </div>
                    </div>
                    <!-- Socso Details -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingSocso">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSocso" aria-expanded="false" aria-controls="collapseSocso"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.socso.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseSocso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
                            <div class="card-body">
                                @include('scheme.general.socso')
                            </div>
                        </div>
                    </div>
                    <!-- Confirmation Details -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingConfirmation">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirmation" aria-expanded="false" aria-controls="collapseConfirmation"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.confirmation.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="collapseConfirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirmation">
                            <div class="card-body">
                                @include('scheme.noticeDeath.newClaim.general.confirmation')
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
                       