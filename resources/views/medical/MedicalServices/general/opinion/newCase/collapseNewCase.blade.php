
<div id="accordion2" role="tablist" class="accordion" >
                  
    <!----------- REQUESTOR DETAILS ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="requestorDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#requestor" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Requestor Details')</h5>
                </a>
            </h6>
        </div>
        <div id="requestor" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.general.opinion.newCase.requestorDetails')
            </div>
        </div>
    </div>

    <!----------- BENEFIT CASE SUMMARY ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="benefirCaseSummary">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ben" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Benefit Case Summary')</h5>
                </a>
            </h6>
        </div>
        <div id="ben" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.general.opinion.newCase.benefitCaseSummary')
            </div>
        </div>
    </div>
    
</div>










