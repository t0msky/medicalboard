<div id="accordion2" role="tablist" class="accordion" >
    <!-- case info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseinfo" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> Case Information</h5>
                </a>
            </h5>
        </div>
        <div id="caseinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeOd.revision.provisional.SCO.case_info')
            </div>
        </div>
    </div>
    <!-- insured person info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h5>
                </a>
            </h5>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeOd.revision.provisional.SCO.ob')
            </div>
        </div>
    </div>
    <!-- medical board decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne3">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medical" aria-expanded="false" aria-controls="collapseOne8">
                <h5 class="card-title"><i class="fa fa-plus"></i> Medical Board Decision</h5>
                </a>
            </h5>
        </div>
        <div id="medical" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
            <div class="card-body">
                @include('scheme.noticeOd.revision.provisional.SCO.medical_board')
            </div>
        </div>
    </div>
    <!-- previous medical board decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne4">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#prev_medical" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Previous Medical Board Decision</h5>
                </a>
            </h5>
        </div>
        <div id="prev_medical" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
            <div class="card-body">
                @include('scheme.noticeOd.revision.provisional.SCO.prevmedical_board')
            </div>
        </div>
    </div> 
    <!-- wages info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne5">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Wages Information</h5>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
            <div class="card-body">
                @include('scheme.noticeOd.revision.provisional.SCO.wages')
            </div>
        </div>
    </div> 
</div>
<!-- Row -->

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