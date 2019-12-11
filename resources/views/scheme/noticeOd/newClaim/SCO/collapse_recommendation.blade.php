<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div>
                    <!-- recommendation -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#recommendation" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Recommendation')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="recommendation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                @include('scheme.noticeOd.newClaim.SCO.recommendation')
                            </div>
                        </div>
                    </div>
                    <!-- case info -->
                    {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne2">
                            <h5 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#routing" aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.routing')</h5>
                                </a>
                            </h5>
                        </div>
                        <div id="routing" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="card-body">
                                @include('scheme.noticeOd.SCO.generated_doc')
                            </div>
                        </div>
                    </div> --}}   
                </div>
            </form>
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