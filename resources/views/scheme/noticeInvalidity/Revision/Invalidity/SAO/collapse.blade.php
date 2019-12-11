<div id="accordion2" role="tablist" class="accordion">

        <!-- Initial Assessment appointmentdetails-->
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="caseInfo_invalidity">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('Case Info')</h4>
                    </a>
                </h5>
            </div>
            <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.case_info')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="obInfo_invalidity">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#obInfo" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('Insured Person Info')</h4>
                    </a>
                </h5>
            </div>
            <div id="obInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.ob_information')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="emp_info">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employer" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Employer Info')</h4>
                    </a>
                </h5>
            </div>
            <div id="employer" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.employer_info')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="decaration117_invalidity">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#decaration117" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Declaration 117')</h4>
                    </a>
                </h5>
            </div>
            <div id="decaration117" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.declaration117')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="rate_calculation">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rate" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Benefit Rate Calculation')</h4>
                    </a>
                </h5>
            </div>
            <div id="rate" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.rate_calculation')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="contri">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#contribution" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Latest Contribution')</h4>
                    </a>
                </h5>
            </div>
            <div id="contribution" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.contribution')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="med">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medical" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Medical Board Decision')</h4>
                    </a>
                </h5>
            </div>
            <div id="medical" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.medical_board')
                </div>
            </div>
        </div>

       
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="app">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#approval" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('Approval')</h4>
                    </a>
                </h5>
            </div>
            <div id="approval" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Revision.Invalidity.SAO.approval')
                </div>
            </div>
        </div>
    </div>