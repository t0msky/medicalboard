{{-- Include case_info (from medical services)--}}

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            {{-- <div class="card-body"> --}}
                {{-- <h5 class="card-title">@lang('form/medical.application_info.title')</h5>
                <hr> --}}
                <div id="accordion2" role="tablist" class="accordion">
                    <!-- Case Information -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInformation" aria-expanded="false" aria-controls="caseInformation"><h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.case_info.title')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="caseInformation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            @include('medical.MedicalBoard.information.general.case')
                        </div>
                    </div>
                    <!-- Insured Person Information -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTwo2">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonInfo" aria-expanded="false" aria-controls="insuredPersonInfo"><h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.insured_person.title')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="insuredPersonInfo" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                            {{-- @include('medical.MedicalBoard.information.general.insured_person') --}}
                            @include('medical.MedicalBoard.information.general.ob_insured_person')
                        </div>
                    </div>
                </div> 
            {{-- </div> --}}
        </div>
    </div>
</div>



























