<div id="accordion2" role="tablist" class="obFeedback" >
            
    <!-------------- INSURED PERSON -------------->

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="caseInfo">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ip" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title-sub"><i class="fa fa-plus"></i>
                    @lang('Insured Person')</h5>
                </a>
            </h6>
        </div>
        <div id="ip" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.feedback.ob')
            </div>
        </div>
    </div>

    <!----------- EMPLOYER ------------>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="employerFeedaback">
            <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#emp" aria-expanded="false" aria-controls="collapseOne1">
                    <h5 class="card-title-sub"><i class="fa fa-plus"></i>
                    @lang('Employer')</h5>
                </a>
            </h6>
        </div>
        <div id="emp" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('medical.MedicalServices.opinion.abppp.feedback.employer')
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