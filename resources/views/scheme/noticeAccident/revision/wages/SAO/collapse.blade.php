<div id="accordion2" role="tablist" class="accordion">
    <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseInfo_OBProfile">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.case_info.title')</h4>
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
                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.ob.title')</h4>
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
        <div class="card-header" role="tab" id="OBInfo_OBProfile2">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#obProfile2" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.employer.title')</h4>
                </a>
            </h5>
        </div>
        <div id="obProfile2" class="collapse" role="tabpanel"
            aria-labelledby="headingOne1">
            <div class="card-body">
                 @include('Scheme.noticeAccident.revision.wages.SCO.employer')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="declaration117_OBProfile">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#wages" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.wages.title')</h4>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel"
            aria-labelledby="headingOne1">
            <div class="card-body">
                {{-- @include('Scheme.noticeAccident.revision.ob_profile.SCO.wages') --}}
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="approval">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                    href="#approvalRevision" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.approval.title')</h4>
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
</div></div>