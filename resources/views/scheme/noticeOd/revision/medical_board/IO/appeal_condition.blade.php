<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">Appeal Condition</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="medappealateboarddecision_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#medappealateboarddecision" aria-expanded="false" aria-controls="collapseOne5">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.medappealateboarddecision')--}}Medical Appealate Board Decision
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="medappealateboarddecision" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            <div id="accordion1" role="tablist" aria-multiselectable="true">
                                            <!-- Initial Assessment appointmentdetails-->
                                            <div class="card">
                                                <div class="card-header" role="tab" id="huk_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#huk" aria-expanded="false" aria-controls="collapseOne6">
                                                            {{--@lang('scheme/index.attr.case_details')--}}HUK
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="huk" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.huk')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="previous_huk_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#previous_huk" aria-expanded="false" aria-controls="collapseOne7">{{--@lang('index.attr.appealateInfo')--}} Previous HUK
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="previous_huk" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.previous_huk')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="insuredpersonwagesinfo_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#insuredpersonwagesinfo" aria-expanded="false" aria-controls="collapseOne8">Insured Person Wages Information
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="insuredpersonwagesinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.insured_person_wages_information')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="ilat_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#ilat" aria-expanded="false" aria-controls="collapseOne9">
                                                                {{--@lang('index.attr.paymentOption')--}}ILAT
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="ilat" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.ilat')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="previousilat_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#previousilat" aria-expanded="false" aria-controls="collapseOne9">{{--@lang('index.attr.paymentOption')--}}Previous ILAT
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="previousilat" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.previous_ilat')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="insuredpersonwagesinfo2_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#insuredpersonwagesinfo2" aria-expanded="false" aria-controls="collapseOne8"> Insured Person Wages Information
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="insuredpersonwagesinfo2" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.insured_person_wages_information2')
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
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

