<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">
                <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEleven19">
                                <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven19" aria-expanded="false" aria-controls="collapseEleven19">
                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.inconsistent.title') </h6> </a>
                                </h5>
                        </div>
                        <div id="collapseEleven19" class="collapse" role="tabpanel" aria-labelledby="headingEleven19">
                                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.inconsistency')</div>
                        </div>
                </div>
               <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTwenty20">
                                <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty20" aria-expanded="false" aria-controls="collapseTwenty20">
                                                <h6 class="card-title"><i class="fa fa-plus"></i> Appointment</h6>
                                        </a>
                                </h5>
                        </div>
                        <div id="collapseTwenty20" class="collapse" role="tabpanel" aria-labelledby="headingTwenty20">
                                <div class="card-body">@include('scheme.noticeAccident.newClaim.IO.appointment_IO')</div>
                        </div>
                </div>
                <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTen10">
                                <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.investigation_document.title') </h6>
                                        </a>
                                </h5>
                        </div>
                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                <div class="card-body">@include('scheme.general.investigation.main')</div>
                        </div>
                </div>
                </form>
                </div>
        </div>
</div>                
