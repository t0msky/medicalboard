<div class="row">
        <div class="col-sm-12">
                <div class="card">
                        <form class="form">
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven110">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven110" aria-expanded="false" aria-controls="collapseEleven110">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.recommendation.title') </h6> </a>
                                                </h5>
                                        </div>
                                        <div id="collapseEleven110" class="collapse" role="tabpanel" aria-labelledby="headingEleven110">
                                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SAO.recommendation')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEight8">
                                                <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                                        <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('form/scheme.general.collapse.wages.title') 
                                                        </h6>
                                                </a>
                                                </h5>
                                        </div>
                                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                                <div class="card-body"> @include('scheme.noticeAccident.newClaim.SCO.wages')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingMcSao">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMcSao" aria-expanded="false" aria-controls="collapseMcSao">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1') </h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseMcSao" class="collapse" role="tabpanel" aria-labelledby="headingMcSao">
                                                <div class="card-body">@include('scheme.general.mc.hus')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingBankSao">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBankSao" aria-expanded="false" aria-controls="collapseBankSao">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.bank.title') </h6>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseBankSao" class="collapse" role="tabpanel" aria-labelledby="headingBankSao">
                                                <div class="card-body">@include('scheme.general.bank')</div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>                
       
