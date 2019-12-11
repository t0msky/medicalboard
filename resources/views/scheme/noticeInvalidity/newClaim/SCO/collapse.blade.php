<div id="accordion2" role="tablist" class="accordion">

    <!------------------- PREPARED INFO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingZero0">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#prepared_info"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Prepared Info')</h6>
                </a>
            </h5>
        </div>
        <div id="prepared_info" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
            <div class="card-body">
                @include('scheme.general.prepare')
            </div>
        </div>
    </div>
    <!------------------- CASE INFO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseInfo">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ci" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Case Details')</h6>
                </a>
            </h5>
        </div>
        <div id="ci" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.case_info')
            </div>
        </div>
    </div>

    <!------------------- OB --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="insuredPerson">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Insured Person Info')
                    </h6>
                </a>
            </h5>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.ob')
            </div>
        </div>
    </div>

    <!------------------- INVALIDITY NOTICE INFO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="invalidityInfo">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ii" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Invalidity Info')
                    </h6>
                </a>
            </h5>
        </div>
        <div id="ii" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.SCO.invalidNoticeDetails')
            </div>
        </div>
    </div>

    <!------------------- PREFFERED SOCSO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="prefferedSocso">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ps" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Preferred SOCSO')
                    </h6>
                </a>
            </h5>
        </div>
        <div id="ps" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.SCO.socso')
            </div>
        </div>
    </div>
    <!------------------- BANK --------------------->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfo" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Bank Information')</h6>
                </a>
            </h5>
        </div>
        <div id="bankInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.bank')
            </div>
        </div>
    </div>
    <!------------------- CONFIRMATION OB --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="confirmation">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#cob" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Confirmation of Insured Person/Dependent/Claimant')</h6>
                </a>
            </h5>
        </div>
        <div id="cob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.confirmation')
            </div>
        </div>
    </div>
    <!------------------- CONFIRMATION OB --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="appointment11">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appointment"
                    aria-expanded="false" aria-controls="collapseOne11">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        Appointment</h6>
                </a>
            </h5>
        </div>
        <div id="appointment" class="collapse" role="tabpanel" aria-labelledby="appointment11">
            <div class="card-body">
                @include('scheme.general.appointment.main')
            </div>
        </div>
    </div>
</div>
To Najmi : only before MB got case History
