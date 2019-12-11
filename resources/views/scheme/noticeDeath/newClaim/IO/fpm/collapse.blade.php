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
                            @include('scheme.noticeDeath.newClaim.general.prepare')
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
                            @include('scheme.noticeDeath.newClaim.general.case_info')
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
                            @include('scheme.noticeDeath.newClaim.general.certification')
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
                            @include('scheme.noticeDeath.newClaim.general.ob')
                        </div>
                    </div>
                </div>
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
                   