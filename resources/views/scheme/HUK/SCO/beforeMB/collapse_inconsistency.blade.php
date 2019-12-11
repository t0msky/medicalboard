<div id="accordion2" role="tablist" class="accordion">

    <!-- Inconsistent & Doubtful Information -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistent" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Inconsistent & Doubtful Information')</h5>
                </a>
            </h5>
        </div>
        <div id="inconsistent" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                <div class="card-body">@include('scheme.noticeAccident.newClaim.SCO.inconsistency')</div>
            </div>
        </div>
    </div>

    <!-- Appointment -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appointment" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Appointment')</h5>
                </a>
            </h5>
        </div>
        <div id="appointment" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.HUK.SCO.beforeMB.appointment_IO')          
            </div>
        </div>
    </div>
    <!-- Investigation Documents -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation_doc" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Investigation Documents')</h5>
                </a>
            </h5>
        </div>
        <div id="investigation_doc" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.general.investigation.main')
            </div>
        </div>
    </div>
</div>


<script>
//redirect to specific tab
$(document).ready(function () {
$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
});

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
    $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
    $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
    $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});

</script>