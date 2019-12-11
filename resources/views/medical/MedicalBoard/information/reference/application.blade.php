{{-- Include case_info (from medical services) and insured person (from scheme) --}}

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('form/medical.application_info.title')</h5>
                <hr>
                <div id="accordion2" role="tablist" class="accordion" >
                    <!-- Case Information -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInformation_od" aria-expanded="true" aria-controls="caseInformation_od"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.case_info.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="caseInformation_od" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                            @include('medical.medicalboard.information.case')
                        </div>
                    </div>
                    <!-- Insured Person Information -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTwo2">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonInfo_od" aria-expanded="false" aria-controls="insuredPersonInfo_od"><h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.insured_person.title')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="insuredPersonInfo_od" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                            @include('medical.medicalboard.information.insured_person')
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>



























