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
                @include('scheme.noticeOd.revision.changedate_od.PK.case_info')
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
                @include('scheme.noticeOd.revision.changedate_od.PK.ob')
            </div>
        </div>
    </div>
    <!-- statement -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne3">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#statement" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Statement</h5>
                </a>
            </h5>
        </div>
        <div id="statement" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
            <div class="card-body">
                @include('scheme.noticeOd.revision.changedate_od.IO.statement')
            </div>
        </div>
    </div>
    <!-- case fact -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne4">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#casefact" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Case Fact</h5>
                </a>
            </h5>
        </div>
        <div id="casefact" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
            <div class="card-body">
                @include('scheme.noticeOd.revision.changedate_od.IO.case_fact')
            </div>
        </div>
    </div>
    <!-- investigation report -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne5">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#report" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Investigation Report</h5>
                </a>
            </h5>
        </div>
        <div id="report" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
            <div class="card-body">
                @include('scheme.noticeOd.revision.changedate_od.IO.report')
            </div>
        </div>
    </div>
    <!-- inconsistent information -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne6">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistent" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> Inconsistent Information</h5>
                </a>
            </h5>
        </div>
        <div id="inconsistent" class="collapse" role="tabpanel" aria-labelledby="headingOne6">
            <div class="card-body">
                @include('scheme.noticeOd.revision.changedate_od.IO.inconsistent_info')
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