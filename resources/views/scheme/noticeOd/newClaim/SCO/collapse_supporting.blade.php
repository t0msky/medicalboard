<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div id="accordion2" role="tablist" class="accordion" >
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">@lang('Supporting Document')</h6>
                            <!-- preparer -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preparer" aria-expanded="true" aria-controls="collapseOne1">
                                            <h6 class="card-title"><i class="fa fa-plus"></i>@lang('Upload Document')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="preparer" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('scheme.noticeOd.newClaim.SCO.uploadDoc') --}}
                                    </div>
                                </div>
                            </div>
                            <!-- case info -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne2">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#case" aria-expanded="true" aria-controls="collapseOne1">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Generated Document')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="case" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                                    <div class="card-body">
                                        @include('scheme.noticeOd.newClaim.SCO.generated_doc')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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