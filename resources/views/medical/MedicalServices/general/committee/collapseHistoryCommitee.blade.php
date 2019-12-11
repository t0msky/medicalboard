<div id="accordion2" role="tablist" class="accordion" >
            
    <!----------- EMPLOYMENT HISTORY ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="currentCase">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#eh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>@lang(' Employment History')</h5>
                </a>
            </h6>
        </div>
        <div id="eh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.employmentHistory')
            </div>
        </div>
    </div>

        <!----------- BENEFIT HISTORY ------------>
                
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="empDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>@lang(' Benefit History')</h5>
                </a>
            </h6>
        </div>
        <div id="bh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.benefitHistory')
            </div>
        </div>
    </div>

    <!----------- MEDICAL BOARD HISTORY ------------>
            
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="accDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mbh" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>@lang(' Medical Board History')</h5>
                </a>
            </h6>
        </div>
        <div id="mbh" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.medicalBoardHistory')
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