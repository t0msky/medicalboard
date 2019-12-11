<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">Claim Details</h4>
                        <hr>
                        {{-- <div class="col-md-12" id="container">
                            <div class="table-responsive">
                                <div class="form-actions text-right">
                                </div>
                                <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first"> --}}
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <!-- Initial Assessment appointmentdetails-->
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="caseInfo_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Case Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.case_info')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="appealateInfo_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#appealateInfo" aria-expanded="false" aria-controls="collapseOne2">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.appealateInfo')--}} Appealate Information
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="appealateInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.PK.appealate_information')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="insuredPersonInfo_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#insuredPerson" aria-expanded="false" aria-controls="collapseOne3">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    @lang('scheme/index.attr.insured_details')</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="insuredPerson" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.insured_person_info')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="section96_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#section96" aria-expanded="false" aria-controls="collapseOne19">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.section96')--}}Section 96
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section96" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.SAO.section96')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="paymentOption_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#paymentOption" aria-expanded="false" aria-controls="collapseOne4">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.paymentOption')--}}Payment Option
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="paymentOption" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.PK.payment_option')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="approval_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#approval" aria-expanded="false" aria-controls="collapseOne4">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.approval')--}}Approval
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="approval" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.SAO.approval')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

