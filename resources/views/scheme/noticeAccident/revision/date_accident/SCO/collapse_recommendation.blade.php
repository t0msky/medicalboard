<div class="card m-b-0">
    <div class="card-header" role="tab" id="recommendation_dateOfAccident">
        <h5 class="mb-0">
            <a class="link" data-toggle="collapse" data-parent="#accordion2"
                href="#recommendations" aria-expanded="false" aria-controls="collapseOne1">
                <h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.recommendation.title')</h4>
            </a>
        </h5>
    </div>
    <div id="recommendations" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
        <div class="card-body">
            @include('Scheme.noticeAccident.revision.date_accident.SCO.recommendation')
        </div>
    </div>
</div>