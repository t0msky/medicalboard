<div class="form-row">
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
                                            href="#benefit_case" aria-expanded="true" aria-controls="benefit_case"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.benefit_case.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="benefit_case" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                                    @include('medical.medicalboard.information.general.benefit_case_history')
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#rehab_history" aria-expanded="false" aria-controls="rehab_history"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.rehab_supply_history.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="rehab_history" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    @include('medical.medicalboard.information.general.rehab_history')
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingThree3">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#mb_history" aria-expanded="false" aria-controls="mb_history"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.mb_history.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="rehab_history" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    @include('medical.medicalboard.information.general.rehab_history')
                                    {{-- @include('medical.medicalboard.information.general.icd10') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
