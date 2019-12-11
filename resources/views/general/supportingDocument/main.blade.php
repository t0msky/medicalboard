
<div id="accordion2" role="tablist" class="accordion" >
                  
    <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseinfo" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Upload Document')</h5>
                </a>
            </h6>
        </div>
        <div id="caseinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('general.supportingDocument.uploadDoc')
            </div>
        </div>
    </div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Generated Documents')</h5>
                </a>
            </h6>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('general.supportingDocument.generatedDoc')
            </div>
        </div>
    </div>
    
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="notification">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#noti" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Notification')</h5>
                </a>
            </h6>
        </div>
        <div id="noti" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('general.supportingDocument.notification')
            </div>
        </div>
    </div>
    
</div>










