<div id="accordion2" role="tablist" class="accordion" >
                
    <!-------------- CASE DETAILS -------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseInfo">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ci" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Case Details')</h5>
                </a>
            </h6>
        </div>
        <div id="ci" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.caseInfo')
            </div>
        </div>
    </div>

    <!----------- CASE FACT DETAILS ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseFactDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#cfd" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Case Fact Details')</h5>
                </a>
            </h6>
        </div>
        <div id="cfd" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.collapseCaseFactDetails')
            </div>
        </div>
    </div>
    
</div>










