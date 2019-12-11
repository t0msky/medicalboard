<div id="accordion2" role="tablist" class="accordion">

    <!-- CASE INFO -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseinfo" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.case_info')</h5>
                </a>
            </h5>
        </div>
        <div id="caseinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.HUK.general.case_info')
            </div>
        </div>
    </div>

    <!-- iNSURED PERSON -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.ob')</h5>
                </a>
            </h5>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                           
            </div>
        </div>
    </div>
    <!-- FHUS -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#fhus" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.fhus')</h5>
                </a>
            </h5>
        </div>
        <div id="fhus" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
            @include('scheme.HUK.general.fhus')
            </div>
        </div>
    </div>

    <!-- APPLICATION INFORMATION -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appInfo" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.appInfo')</h5>
                </a>
            </h5>
        </div>
        <div id="appInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
            @include('scheme.HUK.general.appInfo')
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