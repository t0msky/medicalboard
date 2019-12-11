<div id="accordion2" role="tablist" class="accordion" >
            
    <!----------- CURRENT CASE ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="currentCase">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#cc" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>@lang(' Case Details')</h5>
                </a>
            </h6>
        </div>
        <div id="cc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.currentCase')
            </div>
        </div>
    </div>

        <!----------- RTW INFORMATION------------>
                
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="empDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rtw" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i>@lang(' RTW Information')</h5>
                </a>
            </h6>
        </div>
        <div id="rtw" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.rtwInfo')
            </div>
        </div>
    </div>

    <!----------- MEDICAL BOARD INFORMATION/ MEDICAL OPINION INFORMATION ------------>
            
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="accDetails">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mbi" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> 
                    @if (checkRole(['ROLOSMB','ROLOMB','ROLOMAB','ROLOSMAB','ROMAB','PNL']))
                        @lang('form/medical.collapse.mo_information.title')
                    @else
                        @lang(' Medical Board Information')
                    @endif
                    </h5>
                </a>
            </h6>
        </div>
        <div id="mbi" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.general.allNotice.medicalBoardInfo')
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