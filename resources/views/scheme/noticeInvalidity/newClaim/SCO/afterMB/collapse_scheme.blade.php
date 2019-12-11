<div id="accordion2" role="tablist" class="accordion">

    <!------------------- SCHEME QUALIFYING INFO --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#schemeQ" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Scheme Qualifying Info')</h5>
                </a>
            </h5>
        </div>
        <div id="schemeQ" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.SCO.scheme_qualifying')
            </div>
        </div>
    </div>

    <!------------------- CREDIT PERIOD --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#cp" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Credit Period')</h5>
                </a>
            </h5>
        </div>
        <div id="cp" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.SCO.credit')
            </div>
        </div>
    </div>

    <!------------------- CONTRIBUTION BASED ON SECTION 56 --------------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne11">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#iv" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Contribution Based on Section 56')</h5>
                </a>
            </h5>
        </div>
        <div id="iv" class="collapse" role="tabpanel" aria-labelledby="headingOne11">
            <div class="card-body">
                    @include('scheme.noticeInvalidity.newClaim.SCO.contribution56')
            </div>
        </div>
    </div> 
</div>
To Najmi : Only afterMB have recommendation and medical board decision tab 

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