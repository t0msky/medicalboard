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
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.generate_appendixHof')
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
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.acceptance_appendixHof')
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
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.investigation')
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
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.pr_letterHof')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="PRMailAppendixB">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixB1"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                           RECOMMENDATION
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="AppendixB1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.recommendation')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="rejectionMail">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rejectMail"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            APPROVAL
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="rejectMail" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.approval')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="afterPrintDoc">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#printDoc"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            HEAD OF LOCAL OFFICE PN/PP APPROVAL
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="printDoc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.approval_headlocal')
                </div>
            </div>
        </div>

        <div class="card m-b-0">
            <div class="card-header" role="tab" id="disbursementapproval">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#disbursementapprovalHof"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            AK DISBURSEMENT APPROVAL
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="disbursementapprovalHof" class="collapse" role="tabpanel" aria-labelledby="disbursementapproval">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.approval_disbursement')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="financeapprovalHof">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#financeapproval"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            HEAD OF FINANCE APPROVAL
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="financeapproval" class="collapse" role="tabpanel" aria-labelledby="financeapprovalHof">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.approval_finance')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="pkdisbursement">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#disbursement"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            PK DISBURSEMENT
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="disbursement" class="collapse" role="tabpanel" aria-labelledby="pkdisbursement">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.pk_disbursement')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="after_docprinted">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#docprinted"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            AFTER DOCUMENT PRINTED
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="docprinted" class="collapse" role="tabpanel" aria-labelledby="after_docprinted">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.after_documentprinted')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="interim">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#interimHof"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            INTERIM
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="interimHof" class="collapse" role="tabpanel" aria-labelledby="interim">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.interim')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="cancelationPR">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#cancelation"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            CANCELLATION OF PERMANENT REPRESENTATIVE
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="cancelation" class="collapse" role="tabpanel" aria-labelledby="cancelationPR">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.HOF.cancelationPR')
                </div>
            </div>
        </div>
    </div>