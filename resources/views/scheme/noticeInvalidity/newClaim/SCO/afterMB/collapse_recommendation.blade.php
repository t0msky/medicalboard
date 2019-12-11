<div id="accordion2" role="tablist" class="accordion">

        <!------------------- WAGES INFO --------------------->
    
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne1">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="true" aria-controls="collapseOne1">
                        <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Wages Info')</h5>
                    </a>
                </h5>
            </div>
            <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.newClaim.SCO.wages_info')
                </div>
            </div>
        </div>
    
        <!------------------- BANK INFO --------------------->
    
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne2">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bank" aria-expanded="true" aria-controls="collapseOne1">
                        <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Bank Info')</h5>
                    </a>
                </h5>
            </div>
            <div id="bank" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                <div class="card-body">
                    @include('scheme.general.bank')
                </div>
            </div>
        </div>
    
        <!------------------- RECOMMENDATION --------------------->
    
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne11">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rc" aria-expanded="false" aria-controls="collapseOne6">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Recommendation')</h5>
                    </a>
                </h5>
            </div>
            <div id="rc" class="collapse" role="tabpanel" aria-labelledby="headingOne11">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.newClaim.SCO.beforeMB.recommendation')
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