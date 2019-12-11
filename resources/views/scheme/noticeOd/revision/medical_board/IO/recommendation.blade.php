<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h4 class="card-title">Recommendation</h4>
                        <hr>
                        {{-- <div class="col-md-12" id="container">
                            <div class="table-responsive">
                                <div class="form-actions text-right">
                                </div>
                                <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first"> --}}
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <!-- SCO Recommendation-->
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="caseInfo_medical">
                                            <h5 class="mb-0">
                                                <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                    href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                                                    <h5 class="card-title"><i class="fa fa-plus"></i>
                                                        {{--@lang('scheme/index.attr.case_details')--}}SCO Recommendation</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                @include('scheme.noticeOd.revision.medical_board.IO.sco_recommendation')
                                            </div>
                                        </div>
                                    </div>
                                    <!-- IO Recommendation-->
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="appealateInfo_medical">
                                            <h5 class="mb-0">
                                                <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                                    href="#appealateInfo" aria-expanded="false" aria-controls="collapseOne1">
                                                    <h5 class="card-title"><i class="fa fa-plus"></i>
                                                        {{--@lang('index.attr.appealateInfo')--}} IO Recommendation
                                                    </h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="appealateInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                @include('scheme.noticeOd.revision.medical_board.IO.io_recommendation')
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

