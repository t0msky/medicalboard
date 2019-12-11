<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">     
                        <div class="row">
                                <div class="col-sm-12">
                                        <form class="form">
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingEleven11">
                                                                <h5 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.recommendation.title') </h6> </a>
                                                                </h5>
                                                        </div>
                                                        <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11">
                                                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.recommendation')</div>
                                                        </div>
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <!-- Initial Assessment Disabled Details--> 
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
                                <div class="card-header" role="tab" id="headingMCReco">
                                        <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1')</h6>
                                                </a>
                                        </h5>
                                </div>
                                <div id="collapseSix5" class="collapse" role="tabpanel" aria-labelledby="headingMCReco">
                                        <div class="card-body">@include('scheme.general.mc.hus')</div>
                                </div>
                        </div>
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingBanK">
                                        <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank1" aria-expanded="false" aria-controls="collapseBank"1>
                                                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.bank.title')</h6>
                                                </a>
                                        </h5>
                                </div>
                                <div id="collapseBank1" class="collapse" role="tabpanel" aria-labelledby="headingBanK">
                                        <div class="card-body">@include('scheme.general.bank')</div>
                                </div>
                        </div>
                        {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEleven011">
                                <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven011" aria-expanded="false" aria-controls="collapseEleven011">
                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.tab_title.routing') </h6> </a>
                                </h5>
                        </div>
                        <div id="collapseEleven011" class="collapse" role="tabpanel" aria-labelledby="headingEleven11">
                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.sco_recommendation')</div>
                        </div>
                        </div> --}}
                </form>
                </div>
        </div>
</div>                