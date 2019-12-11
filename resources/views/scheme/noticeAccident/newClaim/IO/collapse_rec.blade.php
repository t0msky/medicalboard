<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form"> 
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingEleven100">
                                        <h5 class="mb-0">                           
                                             <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                                   <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.recommendation.title') </h6> </a>
                                        </h5>
                                </div>
                                <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven100">
                                        <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.recommendation')</div>
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
                                <div class="card-header" role="tab" id="headingMcIo">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMcIo" aria-expanded="false" aria-controls="collapseMcIo">
                                                <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.mc.title1')</h6>
                                             </a>
                                        </h5>
                                </div>
                                <div id="collapseMcIo" class="collapse" role="tabpanel" aria-labelledby="headingMcIo">
                                        <div class="card-body">@include('scheme.general.mc.hus')</div>
                                </div>
                        </div>
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingBankIo">
                                        <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBankIo" aria-expanded="false" aria-controls="collapseBankIo">
                                                        <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.bank.title')</h6>
                                                </a>
                                        </h5>
                                </div>
                                <div id="collapseBankIo" class="collapse" role="tabpanel" aria-labelledby="headingBankIo">
                                        <div class="card-body">@include('scheme.general.bank')</div>
                                </div>
                        </div>
                </form>
                </div>
        </div>
</div>                
