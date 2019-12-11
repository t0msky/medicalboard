<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            {{-- <div class="card-body"> --}}
                <form action="#">
                    <div class="form-body">
                        {{-- <h5 class="card-title">@lang('form/medical.history.title')</h5>
                        <hr> --}}
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingEmployment">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#employment_history" aria-expanded="false" aria-controls="benefit_case"><h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.employment_history.employment_history')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="employment_history" class="collapse" role="tabpanel" aria-labelledby="headingEmployment">
                                    @include('medical.general.employment_history')
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="benefitCase">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#benefit_case" aria-expanded="false" aria-controls="benefit_case"><h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.benefit_case.title')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="benefit_case" class="collapse" role="tabpanel" aria-labelledby="benefitCase">
                                    @include('medical.general.benefit_case_history')
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <h5 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#rehab_history" aria-expanded="false" aria-controls="rehab_history"><h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.rehab_supply_history.title')</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="rehab_history" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                    @include('medical.general.rehab_history')
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            {{-- </div> --}}
        </div>
    </div>
</div>
