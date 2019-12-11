<div id="colapseNewCase" role="tablist" class="accordion" >
            
    <!----------- INSURED PERSON DETAILS ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="insuredPerson">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Insured Person Details')</h6>
                </a>
            </h6>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.obDetails')
            </div>
        </div>
    </div>

        <!----------- EMPLOYER DETAILS ------------>
                
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="empDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empD" aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Employer Details')</h6>
                </a>
            </h6>
        </div>
        <div id="empD" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.employerDetails')
            </div>
        </div>
    </div>

    <!----------- *Accident->ACCIDENT DETAILS *ILAT - Morbidity details *OD - Occupational Disease Details ------------>
            
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="accDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accD" aria-expanded="false" aria-controls="collapseOne1">
                    @if ($casetype == '1')
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Accident Details')</h6>
                    @elseif ($casetype == '2')
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Occupational Disease Details')</h6>
                    @elseif ($casetype == '3')
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Morbidity Details')</h6>
                    @else
                    <h6 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Accident Details')</h6>
                    @endif
                </a>
            </h6>
        </div>
        <div id="accD" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @if ($casetype == '1' || $casetype == '2' || $casetype == '3')
                @include('medical.general.allNotice.accidentDetails')
                @else
                @include('medical.MedicalServices.general.opinion.newCase.accidentDetails')
                @endif
            </div>
        </div>
    </div>

</div>
