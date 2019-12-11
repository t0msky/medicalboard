<div class="card-body">
    <div id="accordion1" role="tablist" aria-multiselectable="true">
        <!-- Inspector -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne1">
                <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion1"
                        href="#inspector" aria-expanded="false" aria-controls="collapseOne6">
                        Inspector Information
                    </a>
                </h6>
            </div>
            <div id="inspector" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeOd.revision.changedate_od.IO.inspector_info')
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingOne2">
                <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion1"
                        href="#interviewee" aria-expanded="false" aria-controls="collapseOne7">
                        Interviewee Information
                    </a>
                </h6>
            </div>
            <div id="interviewee" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                <div class="card-body">
                    @include('scheme.noticeOd.revision.changedate_od.IO.interviewee_info')
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingOne3">
                <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion1"
                        href="#witness" aria-expanded="false" aria-controls="collapseOne8">
                        Witness Information
                    </a>
                </h6>
            </div>
            <div id="witness" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
                <div class="card-body">
                    @include('scheme.noticeOd.revision.changedate_od.IO.witness_info')
                </div>
            </div>
        </div>
    </div>
</div>

