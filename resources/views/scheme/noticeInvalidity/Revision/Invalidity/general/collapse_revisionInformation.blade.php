<div id="accordion2" role="tablist" class="accordion">
    <!-- Revision Information -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#rec" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('Revision Information')</h5>
                </a>
            </h5>
        </div>
        <div id="rec" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Revision.invalidity.general.rev_information')
            </div>
        </div>
    </div>
    <!-- MB Decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#app" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('MB Decision')</h5>
                </a>
            </h5>
        </div>
        <div id="app" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Revision.invalidity.general.mb_decision')           
            </div>
        </div>
    </div>
     <!-- MO INFO -->
     <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mo" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('MO Info/MAB Info')</h5>
                </a>
            </h5>
        </div>
        <div id="mo" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeInvalidity.Revision.invalidity.SAO.afterOpinion.mao')
            </div>
        </div>
    </div>
</div>


<p>*To Najmi : sao and sco</p>
<p>After MB : Revision Information, MB Decision</p>
<p>Before MB : Revision Information</p>
<p> After Request Assessment Opinion : Revision Information, MB Information, MO Info/MAB Info</p>


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