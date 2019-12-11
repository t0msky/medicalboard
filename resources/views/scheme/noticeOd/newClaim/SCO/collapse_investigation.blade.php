<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div id="accordion2" role="tablist" class="accordion">
                    <!-- Appointment -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne1">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appointment" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Appointment')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="appointment" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                @include('scheme.general.appointment.main')
                            </div>
                        </div>
                    </div>
                    <!-- Investigation Document -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne2">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation_doc" aria-expanded="true" aria-controls="collapseOne1">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('Investigation Document')</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="investigation_doc" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="card-body">
                                @include('scheme.general.investigation.main')
                            </div>
                        </div>
                    </div>
                    <!-- Inconsistency and Doubtful Information -->
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOne9">
                            <h6 class="mb-0">                           
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation" aria-expanded="false" aria-controls="collapseOne6">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> Inconsistency and Doubtful Information</h6>
                                </a>
                            </h6>
                        </div>
                        <div id="investigation" class="collapse" role="tabpanel" aria-labelledby="headingOne9">
                            <div class="card-body">
                                @include('scheme.general.inconsistency.main')
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