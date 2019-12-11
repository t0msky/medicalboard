<div id="accordion2" role="tablist" class="accordion" >
                
    <!-------------- Committtee Board: Case Summary -------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="mbreviewcomittee">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mbrc" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Committtee Board: Case Summary')</h5>
                </a>
            </h6>
        </div>
        <div id="mbrc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.appointment.caseSummary')
            </div>
        </div>
    </div>

    <!----------- Employment History ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="employmentHistory">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#eh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Employment History')</h5>
                </a>
            </h6>
        </div>
        <div id="eh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.appointment.employmentHistory')
            </div>
        </div>
    </div>

     <!----------- Benefit History ------------>

     <div class="card m-b-0">
        <div class="card-header" role="tab" id="BenefitHistory">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Benefit History')</h5>
                </a>
            </h6>
        </div>
        <div id="bh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.appointment.benefitHistory')
            </div>
        </div>
    </div>

    <!----------- Medical Board History ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="MedicalBoardHistory">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mbh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Medical Board History')</h5>
                </a>
            </h6>
        </div>
        <div id="mbh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.appointment.MBHistoryCommittee')
            </div>
        </div>
    </div>

         <!----------- Decision ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="decision">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#dc" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Decision')</h5>
                </a>
            </h6>
        </div>
        <div id="dc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.general.decision')
            </div>
        </div>
    </div>
</div>










