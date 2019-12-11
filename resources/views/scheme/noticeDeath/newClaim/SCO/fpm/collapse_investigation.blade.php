<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
            <!-- Investigation Appointment -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingInconsistency">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInconsistency" aria-expanded="false" aria-controls="collapseInconsistency"><h6 class="card-title"><i class="fa fa-plus"></i>
                     @lang('form/scheme.general.collapse.inconsistency.title')</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseInconsistency" class="collapse" role="tabpanel" aria-labelledby="headingInconsistency">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.inconsistency')
                  </div>
               </div>
            </div>
            <!-- Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingRecommendation">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommendation" aria-expanded="false" aria-controls="collapseRecommendation"><h6 class="card-title"><i class="fa fa-plus"></i>
                     @lang('form/scheme.general.collapse.inconsistency.title')</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseRecommendation" class="collapse" role="tabpanel" aria-labelledby="headingRecommendation">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.recommendation')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      