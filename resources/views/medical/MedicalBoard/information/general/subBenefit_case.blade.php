<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">                    
                        <!----------- MEDICAL BOARD HISTORY ------------>
                                        
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="mbHistory">
                                <h6 class="mb-0 ">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mb_history" aria-expanded="false" aria-controls="collapseOne1">
                                        <h5 class="card-title-sub"><i class="fa fa-plus"></i> @lang('form/medical.collapse.mb_history.title')</h5>
                                    </a>
                                </h6>
                            </div>
                            <div id="mb_history" class="collapse" role="tabpanel" aria-labelledby="mbHistory">
                                <div class="card-body">
                                    @include('medical.medicalboard.information.general.mb_history')
                                </div>
                            </div>
                        </div>

                        <!----------- MEDICAL OPINION HISTORY ------------>
                                
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="moHistory">
                                <h6 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#opinionHistory" aria-expanded="false" aria-controls="collapseOne1">
                                        <h5 class="card-title-sub"><i class="fa fa-plus"></i> @lang('form/medical.collapse.ms_history.title')</h5>
                                    </a>
                                </h6>
                            </div>
                            <div id="opinionHistory" class="collapse" role="tabpanel" aria-labelledby="moHistory">
                                <div class="card-body">
                                   @include('medical.medicalboard.information.general.ms_history')
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
