{{-- matt nyer hehe --}}
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div class="card-body">


                    <div id="accordion2" role="tablist" class="accordion">

                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne1">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Case Information</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.case_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="insuredPerson_section96">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#obInfo"
                                        aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Insured Person</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="obInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.ob_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="jemaahdoktor_section96SCO">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#jemaahdoktor" aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Medical Board Decision</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="jemaahdoktor" class="collapse" role="tabpanel"
                                aria-labelledby="jemaahdoktor_section96SCO">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.medicalboardSAO')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="wagesob_section96SCO">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesob"
                                        aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Insured Person Wages Info.</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="wagesob" class="collapse" role="tabpanel" aria-labelledby="wagesob_section96SCO">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.OBwagesinfo')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="wagesobinfo_section96SCO">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesobinfo"
                                        aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Insured Person Wages Detail</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="wagesobinfo" class="collapse" role="tabpanel"
                                aria-labelledby="wagesobinfo_section96SCO">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.OBwagesdetail')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="wagescontribution_section96SCO">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#wagescontribution" aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Wages and Contribution Confirmations Info.</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="wagescontribution" class="collapse" role="tabpanel"
                                aria-labelledby="wagescontribution_section96SCO">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.wagesconfirmation')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="creditperiod_section96SCO">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#creditperiod" aria-expanded="false" aria-controls="collapseOne1">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Credit Period</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="creditperiod" class="collapse" role="tabpanel"
                                aria-labelledby="creditperiod_section96SCO">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.creditperiod')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne2">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Applicant Information</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.ob_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne3">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Contributions Based on Section 56</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.contributions_based_on_section_56')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne4">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Contribution Information</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.contributions_details')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne5">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Medical View</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne5" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.medical_view')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                       

                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingSuggestion">
                                <h5 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapseSuggestion" aria-expanded="false"
                                        aria-controls="collapseSuggestion">
                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                            Confirmation</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSuggestion" class="collapse" role="tabpanel"
                                aria-labelledby="headingSuggestion">
                                <div class="card-body">
                                    @include('Scheme.noticeInvalidity.Revision.section96.SAO.confirmation')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
