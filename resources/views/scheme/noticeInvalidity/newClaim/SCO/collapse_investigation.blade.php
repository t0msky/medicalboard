<div id="accordion2" role="tablist" class="accordion">

    <!------------------- INCONSISTENT AND DOUBTFUL INFO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inco" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Inconsistent and Doubtful Information')</h5>
                </a>
            </h5>
        </div>
        <div id="inco" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.inconsistency')
            </div>
        </div>
    </div>

    <!------------------- APPOINTMENT --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#app" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Appointment')</h5>
                </a>
            </h5>
        </div>
        <div id="app" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.general.appointment')
            </div>
        </div>
    </div>

    <!------------------- INVESTIGATION DOCUMENT --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne11">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#iv" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Investigation Document')</h5>
                </a>
            </h5>
        </div>
        <div id="iv" class="collapse" role="tabpanel" aria-labelledby="headingOne11">
            <div class="card-body">
                {{-- @include('scheme.general.investigation_doc') --}}
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