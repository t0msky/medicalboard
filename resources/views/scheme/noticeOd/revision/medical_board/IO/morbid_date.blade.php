<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">Morbid Date</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="case_info_morbid_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#case_info_morbid" aria-expanded="false" aria-controls="collapseOne15">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Case Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="case_info_morbid" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.case_info_morbid')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="wages_info_morbid_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#wages_info_morbid" aria-expanded="false" aria-controls="collapseOne15">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Insured Person Wages Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="wages_info_morbid" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.wages_info_morbid')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="wages_contri_info_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#wages_contri_info" aria-expanded="false" aria-controls="collapseOne15">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Wages and Contribution Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="wages_contri_info" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.wages_contri_info')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="invaliditynoticeinformation_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#invaliditynoticeinformation" aria-expanded="false" aria-controls="collapseOne14">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Invalidity Notice Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="invaliditynoticeinformation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.invalidity_notice')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="creditperiod_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#creditperiod" aria-expanded="false" aria-controls="collapseOne13">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Credit Period</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="creditperiod" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.credit_period')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="contributionseksyen56_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#contributionseksyen56" aria-expanded="false" aria-controls="collapseOne12">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Contribution Based on Section 56</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="contributionseksyen56" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.contribution_section56')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="totalcontribution_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#totalcontribution" aria-expanded="false" aria-controls="collapseOne11">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Total Contribution Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="totalcontribution" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.total_contribution')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="invalidity_support_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#invalidity_support" aria-expanded="false" aria-controls="collapseOne10">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Invalidity Support and Wages Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="invalidity_support" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.invalidity_support')
                                        </div>
                                    </div>
                                </div>
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="medicalboarddecision_medical">
                                        <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                href="#medicalboarddecision" aria-expanded="false" aria-controls="collapseOne9">
                                                <h5 class="card-title"><i class="fa fa-plus"></i>
                                                    {{--@lang('scheme/index.attr.case_details')--}}Medical Board Decision</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="medicalboarddecision" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                        <div class="card-body">
                                            @include('scheme.noticeOd.revision.medical_board.IO.medical_board_decision')
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

