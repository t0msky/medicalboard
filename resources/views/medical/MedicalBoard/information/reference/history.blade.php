<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.history.title')</h5>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.benefit_case.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="table-responsive">
                                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                                        data-toggle-column="first">
                                                        <thead>
                                                            <th>@lang('form/medical.collapse.benefit_case.notice_date')</th>
                                                            <th>@lang('form/medical.collapse.benefit_case.notice_type')</th>
                                                            <th>@lang('form/medical.general.schemerefno')</th>
                                                            <th>@lang('form/medical.collapse.benefit_case.ben_refno')</th>
                                                            <th>@lang('form/medical.general.view')</th>
                                                        </thead>
                                                        <tbody>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td><div class="input-group-append">
                                                                    <span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code"  href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="Scheme Case/Supporting Doc
                                                                        "data-toggle="tooltip"></i></a></span>
                                                                    &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-info-circle" title="Opinion Details
                                                                        "data-toggle="tooltip"></i></a></span>
                                                                    &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-handshake" title="RTW Social Economic Report
                                                                        "data-toggle="tooltip"></i></a></span>
                                                                    &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-users" title="RTW Report
                                                                        "data-toggle="tooltip"></i></a></span>
                                                                    
                                                                </div></td>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-md-6 offset-6">
                                                            <!-- <a class="btn btn-success collapsed link a1" data-toggle="collapse"
                                                                data-target="#collapseOne11,#collapseThree333" aria-expanded="true"
                                                                aria-controls="collapseOne11">
                                                                @lang('button.next')
                                                            </a> -->

                                                            <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse" data-target="#collapseOne11,#collapseThree333" aria-expanded="true" aria-controls="collapseOne11" id="btn_next_benefitcase">@lang('button.next')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingThree333">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseThree333" aria-expanded="false" aria-controls="collapseThree333"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.rehab_supply_history.title')</h6>
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseThree333" class="collapse" role="tabpanel" aria-labelledby="headingThree333">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>@lang('form/medical.collapse.rehab_supply_history.bil')</th>
                                                                <th>@lang('form/medical.collapse.rehab_supply_history.type_equipment')</th>
                                                                <th>@lang('form/medical.collapse.rehab_supply_history.diagnosis')</th>
                                                                <th>@lang('form/medical.collapse.rehab_supply_history.date_delivery')</th>
                                                                <th>@lang('form/medical.collapse.rehab_supply_history.total')</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 offset-6">
                                                    <!-- <a class="btn btn-success collapsed link a1" data-toggle="collapse"
                                                        data-target="#collapseThree333,#collapseTwo22" aria-expanded="true"
                                                        aria-controls="collapseTwo22">
                                                        @lang('button.next')
                                                    </a> -->

                                                    <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse"  data-target="#collapseThree333,#collapseTwo22" aria-expanded="true"  aria-controls="collapseTwo22" id="btn_next_rehab_history">@lang('button.next')</button>
                                                </div>
                                            </div>

                                            <!-- <br/> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.mb_history.title')</h6>
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseTwo22" class="collapse" role="tabpanel" aria-labelledby="headingTwo22">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <th>@lang('form/medical.general.no')</th>
                                                                <th>@lang('form/medical.general.schemerefno')</th>
                                                                <th>@lang('form/medical.collapse.mb_history.mbdate')</th>
                                                                <th>@lang('form/medical.general.mbcategory')</th>
                                                                <th>@lang('form/medical.collapse.mb_history.diagnosis')</th>
                                                                <th>@lang('form/medical.collapse.mb_history.result')</th>
                                                                <th>@lang('form/medical.general.view')</th>
                                                            </thead>
                                                            <tbody>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><div class="input-group-append">
                                                                        <span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="All Details + Supporting Doc
                                                                            "data-toggle="tooltip"></i></a></span>
                                                                    </div></td>
                                                            </tbody>
                                                        </table>
                                                        <div class="form-actions">
                                                            {{-- <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.cancel')</button>
                                                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.reset')</button> --}}

                                                            <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_next_history">@lang('button.next')</button>
                                                            {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('medical_board/index.save')</button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
