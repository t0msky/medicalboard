<div id="accordion2" role="tablist" class="accordion">
    <!-- RECOMMENDATION -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#recommendation" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Recommendation')</h5>
                </a>
            </h5>
        </div>
        <div id="recommendation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.HUK.SAO.beforeMB.recommendation')
            </div>
        </div>
    </div>
    <!-- APPROVAL-->
    {{-- <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#approval" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Approval')</h5>
                </a>
            </h5>
        </div>
        <div id="approval" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.HUK.SAO.beforeMB.approval')
            </div>
        </div>
    </div> --}}
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