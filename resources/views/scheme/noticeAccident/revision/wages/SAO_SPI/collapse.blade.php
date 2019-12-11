<div id="accordion2" role="tablist" class="accordion">
        <!-- Initial Assessment appointmentdetails-->
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="caseInfo_OBProfile">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Case Info</h4>
                    </a>
                </h5>
            </div>
            <div id="caseInfo" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO.case_info')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="OBInfo_OBProfile">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#obProfile" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Insured Person</h4>
                    </a>
                </h5>
            </div>
            <div id="obProfile" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO.ob_info')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="employer">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#employer2" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Employer Info</h4>
                    </a>
                </h5>
            </div>
            <div id="employer2" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO.employer')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="similar1">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#similar" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Similar Worker</h4>
                    </a>
                </h5>
            </div>
            <div id="similar" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO.similar_workers')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="previous_wages">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#wagesPrevious" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Previous Wages</h4>
                    </a>
                </h5>
            </div>
            <div id="wagesPrevious" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.wages_previous')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="declaration117_OBProfile">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#wagesLatest" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Latest Wages</h4>
                    </a>
                </h5>
            </div>
            <div id="wagesLatest" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.wages_latest')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="invalidity">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#invaliditySpi" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Invalidity Notice Information</h4>
                    </a>
                </h5>
            </div>
            <div id="invaliditySpi" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.invalidity')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="creditPer">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#creditPeriod" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Credit Period</h4>
                    </a>
                </h5>
            </div>
            <div id="creditPeriod" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.credit_period')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="contribution">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#contriBased" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Contribution Based On Section 56</h4>
                    </a>
                </h5>
            </div>
            <div id="contriBased" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.contribution_based')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="contribution1">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#contriInfo" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Contribution Information</h4>
                    </a>
                </h5>
            </div>
            <div id="contriInfo" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.contribution_info')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="medical">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#medicalBoard" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Medical Board Decision</h4>
                    </a>
                </h5>
            </div>
            <div id="medicalBoard" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.medical_board')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="invalidityGrant">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#invalidityGrant1" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>Invalidity Grant Wages Information</h4>
                    </a>
                </h5>
            </div>
            <div id="invalidityGrant1" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SCO_SPI.invalidityGrant')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="approval">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#approvalRevision" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> Approval</h4>
                    </a>
                </h5>
            </div>
            <div id="approvalRevision" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('Scheme.noticeAccident.revision.wages.SAO.approval')
                </div>
            </div>
        </div>
    </div>
    </div>