<div id="accordion2" role="tablist" class="accordion">

        <!-- Initial Assessment appointmentdetails-->
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="caseInfo_bankruptcy">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('Case Info')</h4>
                    </a>
                </h5>
            </div>
            <div id="caseInfo" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Bankruptcy.SAO.case_info')
                </div>
            </div>
        </div>
         <div class="card m-b-0">
            <div class="card-header" role="tab" id="bankruptcyDetails_bankruptcy">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#bankrupDetails" aria-expanded="false"
                        aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('Bankruptcy Details')</h4>
                    </a>
                </h5>
            </div>
            <div id="bankrupDetails" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Bankruptcy.SAO.bankruptcy_details')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="interim_bankruptcy">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#interim" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('Interim')</h4>
                    </a>
                </h5>
            </div>
            <div id="interim" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Bankruptcy.SAO.interim')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="recco">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#reco" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('Recommendation')</h4>
                    </a>
                </h5>
            </div>
            <div id="reco" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Bankruptcy.SAO.recommendation')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="approval">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#app" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('Approval')</h4>
                    </a>
                </h5>
            </div>
            <div id="app" class="collapse" role="tabpanel"
                aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Bankruptcy.SAO.approval')
                </div>
            </div>
        </div>
    </div>