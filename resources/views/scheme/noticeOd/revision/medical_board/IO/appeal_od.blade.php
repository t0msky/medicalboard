<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">Appeal OD</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="odinformation_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#odinformation" aria-expanded="false" aria-controls="collapseOne15">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}OD Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="odinformation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.od_information')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="mc_information_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#mc_information" aria-expanded="false" aria-controls="collapseOne16">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}MC Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="mc_information" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.mc_information')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="emp_info_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#emp_info" aria-expanded="false" aria-controls="collapseOne16">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Employer Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="emp_info" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.employer_information')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="wages_info_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#wages_info" aria-expanded="false" aria-controls="collapseOne16">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Insured Person Wages Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="wages_info" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.wages_info')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="similar_worker_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#similar_worker" aria-expanded="false" aria-controls="collapseOne16">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Similar Worker Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="similar_worker" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.similar_worker_info')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="medappealateboarddecision1_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#medappealateboarddecision1" aria-expanded="false" aria-controls="collapseOne17">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('index.attr.medappealateboarddecision1')--}}Medical Appealate Board Decision
                                                </h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="medappealateboarddecision1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            <div id="accordion3" role="tablist" aria-multiselectable="true">
                                            <!-- Initial Assessment appointmentdetails-->
                                            <div class="card">
                                                <div class="card-header" role="tab" id="huk1_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion3"
                                                            href="#huk1" aria-expanded="false" aria-controls="collapseOne6">
                                                            {{--@lang('scheme/index.attr.case_details')--}}HUK
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="huk1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.huk')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="previous_huk1_medical">
                                                    <h5 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion3"
                                                            href="#previous_huk1" aria-expanded="false" aria-controls="collapseOne7">{{--@lang('index.attr.appealateInfo')--}} Previous HUK
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="previous_huk1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                    <div class="card-body">
                                                        @include('scheme.noticeOd.revision.medical_board.IO.previous_huk')
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

