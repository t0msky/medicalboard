<!----------- BENEFIT HISTORY ------------>
                
<div class="card m-b-0">
    <div class="card-header" role="tab" id="empDetails">
        <h6 class="mb-0 ">                           
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bh" aria-expanded="false" aria-controls="collapseOne1">
                <h5 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Benefit History')</h5>
            </a>
        </h6>
    </div>
    <div id="bh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
        <div class="card-body">
            @include('medical.general.allNotice.benefitHistory')
        </div>
    </div>
</div>

<!----------- MEDICAL BOARD HISTORY ------------>
        
<div class="card m-b-0">
    <div class="card-header" role="tab" id="accDetails">
        <h6 class="mb-0">                           
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mbh" aria-expanded="false" aria-controls="collapseOne1">
                <h5 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Medical Board History')</h5>
            </a>
        </h6>
    </div>
    <div id="mbh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
        <div class="card-body">
            @include('medical.general.allNotice.medicalBoardHistory')
        </div>
    </div>
</div>
<!----------- MEDICAL INVESTIGATION INFO ------------>
        
<div class="card m-b-0">
    <div class="card-header" role="tab" id="medicalInvestigationInfo">
        <h6 class="mb-0">                           
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mii" aria-expanded="false" aria-controls="collapseOne1">
                <h5 class="card-title-sub"><i class="fa fa-plus"></i>@lang(' Medical Investigation Info')</h5>
            </a>
        </h6>
    </div>
    <div id="mii" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
        <div class="card-body">
            @include('medical.general.allNotice.medicalInvestigationInfo')
        </div>
    </div>
</div>