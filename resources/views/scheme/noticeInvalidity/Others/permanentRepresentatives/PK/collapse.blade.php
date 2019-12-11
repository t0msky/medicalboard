<div id="accordion2" role="tablist" class="accordion">
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="generate_appendixA">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#generate_appendix"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Generate Appendix A')
                    </h4>
                </a>
            </h5>
        </div>
        <div id="generate_appendix" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.generate_appendix')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="acceptanceAppendixA">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accAppendix"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Acceptance Appendix A')
                    </h4>
                </a>
            </h5>
        </div>
        <div id="accAppendix" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.acceptance_appendix')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="appendixE">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixE" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('SURAT PR - LAMPIRAN E / E1')
                    </h4>
                </a>
            </h5>
        </div>
        <div id="AppendixE" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.PRMail')
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="PRMailAppendixB">
                <h5 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixB"
                        aria-expanded="false" aria-controls="collapseOne1">
                        <h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('SURAT DECLARATION - LAMPIRAN B')
                        </h4>
                    </a>
                </h5>
            </div>
            <div id="AppendixB" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.mail_appendix_B')
                </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="PRMailAppendixB">
                    <h5 class="mb-0">
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AppendixB1"
                            aria-expanded="false" aria-controls="collapseOne1">
                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                @lang('SURAT DECLARATION - LAMPIRAN B1')
                            </h4>
                        </a>
                    </h5>
                </div>
                <div id="AppendixB1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.mail_appendix_B1')
                    </div>
                </div>
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="rejectionMail">
                        <h5 class="mb-0">
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rejectMail"
                                aria-expanded="false" aria-controls="collapseOne1">
                                <h4 class="card-title"><i class="fa fa-plus"></i>
                                    @lang('SURAT TOLAK')
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="rejectMail" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="card-body">
                            @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.rejection_mail')
                        </div>
                    </div>
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="afterPrintDoc">
                            <h5 class="mb-0">
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#printDoc"
                                    aria-expanded="false" aria-controls="collapseOne1">
                                    <h4 class="card-title"><i class="fa fa-plus"></i>
                                        @lang('SELEPAS CETAKAN DOKUMEN')
                                    </h4>
                                </a>
                            </h5>
                        </div>
                        <div id="printDoc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.after_print_doc')
                            </div>
                        </div>
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="SuratKebenaran">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#surat"
                                        aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            @lang('SURAT KEBENARAN KEPADA WAKIL TETAP UNTUK MENUNAIKAN CEK/WARAN -
                                            LAMPIRAN F')
                                        </h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="surat" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.surat_kebenaran')
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="Interim">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#interim"
                                            aria-expanded="false" aria-controls="collapseOne1">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                                @lang('Interim')
                                            </h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="interim" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.interim')
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="perbatalanWakilTetap">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#wakilTetap" aria-expanded="false" aria-controls="collapseOne1">
                                                <h4 class="card-title"><i class="fa fa-plus"></i>
                                                    @lang('Perbatalan Wakil Tetap')
                                                </h4>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="wakilTetap" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.perbatalan_wakil_tetap')
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="submission">
                                            <h5 class="mb-0">
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                    href="#Submissions" aria-expanded="false"
                                                    aria-controls="collapseOne1">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i>
                                                        @lang('Submission')
                                                    </h4>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="Submissions" class="collapse" role="tabpanel"
                                            aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                @include('scheme.noticeInvalidity.Others.permanentRepresentatives.PK.submission')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
