<div id="accordion2" role="tablist" class="accordion">
    <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseInfo_OBProfile">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>Recommendation</h4>
                </a>
            </h5>
        </div>
        <div id="caseInfo" class="collapse" role="tabpanel"
            aria-labelledby="headingOne1">
            <div class="card-body">
                @include('Scheme.noticeAccident.revision.ob_profile.IO.recommendation')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="OBInfo_OBProfile">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#obProfile" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>IO Recommendation</h4>
                </a>
            </h5>
        </div>
        <div id="obProfile" class="collapse" role="tabpanel"
            aria-labelledby="headingOne1">
            <div class="card-body">
                @include('Scheme.noticeAccident.revision.ob_profile.IO.recommendation_io')
            </div>
        </div>
    </div>
</div></div>