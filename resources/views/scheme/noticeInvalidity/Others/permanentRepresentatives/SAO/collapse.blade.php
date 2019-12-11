<div id="accordion2" role="tablist" class="accordion">
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="generate_appendixA">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#generate_appendix" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('GENERATE APPENDEIX A')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="generate_appendix" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.generate_appendix')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="acceptanceAppendixA">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accAppendix"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('ACCEPTANCE APPENDIX A')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="accAppendix" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.acceptance_appendix')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="installation">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                        href="#Installation" aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('INVESTIGATION')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="Installation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.IO.installation')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="PRMailAppendixB">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixB"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('PR LETTER - APPENDIX E')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="AppendixB" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.pr_letter')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="PRMailAppendixB">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixB1"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('PRESENTATION')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="AppendixB1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.presentation')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="rejectionMail">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rejectMail"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('APPROVAL')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="rejectMail" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.approve')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="afterPrintDoc">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#printDoc"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('INTERIM')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="printDoc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.interim')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="Disclaimer">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#disclaimer"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('DISCLAIMER')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="disclaimer" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.SAO.disclaimer')
                </div>
            </div>
        </div>
    </div>