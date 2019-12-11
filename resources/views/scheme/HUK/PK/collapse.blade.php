<div id="accordion2" role="tablist" class="accordion" >
    <!--Case Info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="hus_case_info">
                <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseInfo" aria-expanded="false" aria-controls="collapseCaseInfo"><h6 class="card-title"><i class="fa fa-plus"></i>
                    @lang(' HUS Case Info ')</h6>
                </a>
                </h6>
        </div>
        <div id="collapseCaseInfo" class="collapse" role="tabpanel" aria-labelledby="hus_case_info">
                <div class="card-body">
                    @include('scheme.HUK.PK.case_info')
                </div>
        </div>
    </div>
    
    <!--Insured Person -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="insured_person">
                <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInsuredPerson" aria-expanded="false" aria-controls="collapseCaseInfo"><h6 class="card-title"><i class="fa fa-plus"></i>
                    @lang(' Insured Person Info ')</h6>
                </a>
                </h6>
        </div>
        <div id="collapseInsuredPerson" class="collapse" role="tabpanel" aria-labelledby="insured_person">
                <div class="card-body">
                    @include('scheme.general.ob')
                </div>
        </div>
    </div>

    <!--Application Information -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="application_info">
                <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse_application" aria-expanded="false" aria-controls="collapse_application"><h6 class="card-title"><i class="fa fa-plus"></i>
                    @lang(' Application Information  ')</h6>
                </a>
                </h6>
        </div>
        <div id="collapse_application" class="collapse" role="tabpanel" aria-labelledby="application_info">
                <div class="card-body">
                    @include('scheme.HUK.PK.app_info')
                </div>
        </div>
    </div>
</div> 