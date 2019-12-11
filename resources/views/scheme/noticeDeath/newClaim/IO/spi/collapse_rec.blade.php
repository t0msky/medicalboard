<div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div id="accordion2" role="tablist" class="accordion" >
               <!-- Dependant Details -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingDependantSpi">
                      <h6 class="mb-0">                           
                          <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependantSpi" aria-expanded="false" aria-controls="collapseDependantSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                          @lang('form/scheme.notice_death.PK.dependant.title')</h6>
                          </a>
                      </h6>
                  </div>
                  <div id="collapseDependantSpi" class="collapse" role="tabpanel" aria-labelledby="headingDependantSpi">
                      <div class="card-body">
                          @include('scheme.noticeDeath.newClaim.general.dependant')
                      </div>
                  </div>
               </div> 
               <!-- Scheme Qualifying Info -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingSchemeQSpi">
                        <h6 class="mb-0">                           
                           <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSchemeQSpi" aria-expanded="false" aria-controls="collapseSchemeQSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                           Scheme Qualifying Information</h6>
                           </a>
                        </h6>
                  </div>
                  <div id="collapseSchemeQSpi" class="collapse" role="tabpanel" aria-labelledby="headingSchemeQSpi">
                        <div class="card-body">
                           @include('scheme.noticeDeath.newClaim.general.scheme_qualifying')
                        </div>
                  </div>
               </div>
               <!-- Contribution Based on Section 56 -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingContributionSpi">
                        <h6 class="mb-0">                           
                           <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseContributionSpi" aria-expanded="false" aria-controls="collapseContributionSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                           Contribution Based on Section 56</h6>
                           </a>
                        </h6>
                  </div>
                  <div id="collapseContributionSpi" class="collapse" role="tabpanel" aria-labelledby="headingContributionSpi">
                        <div class="card-body">
                           @include('scheme.noticeDeath.newClaim.general.section_56')
                        </div>
                  </div>
               </div>
               <!-- Recommendation -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingRecommendationSpi">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommendationSpi" aria-expanded="false" aria-controls="collapseRecommendationSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Recommendation</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseRecommendationSpi" class="collapse" role="tabpanel" aria-labelledby="headingRecommendationSpi">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.general.recommendation')
                     </div>
                  </div>
               </div>
               <!-- Wages Info -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingWagesSpi">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWagesSpi" aria-expanded="false" aria-controls="collapseWagesSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Wages Information</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseWagesSpi" class="collapse" role="tabpanel" aria-labelledby="headingWagesSpi">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.SCO.sbk.wages')
                     </div>
                  </div>
               </div>
               <!-- HUS Info -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingHusSpi">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseHusSpi" aria-expanded="false" aria-controls="collapseHusSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                        HUS Information</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseHusSpi" class="collapse" role="tabpanel" aria-labelledby="headingHusSpi">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.SCO.sbk.hus_info')
                     </div>
                  </div>
               </div>
               <!-- FPM Recommendation -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingFpmRecSpi">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFpmRecSpi" aria-expanded="false" aria-controls="collapseFpmRecSpi"><h6 class="card-title"><i class="fa fa-plus"></i>
                        FPM Recommendation</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseFpmRecSpi" class="collapse" role="tabpanel" aria-labelledby="headingFpmRecSpi">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.SCO.sbk.fpm_recommendation')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
         
   <script>
      $('#dependentQ').on('change',function(){
         var dependentQ  = $(this).val();
         if (dependentQ === 'Y'){
               $('#btn_add_ot').show();
               if(!$('#tableDependent').is(':visible'))
               {
      
                  $('#modal_dependent').modal('show');
      
                  // style="background-color:grey !important;"
                  // $('#cardtitleapplicant').css('background-color', 'grey !important');
                  $('#cardtitleapplicant').attr('style', 'background-color: grey !important');
                  $("#linkapplicant").prop("href", "#!");
               }
      
         }else{
               $('#btn_add_ot').hide();
      
               if(!$('#tableDependent').is(':visible'))
               {
                  // $('#cardtitleapplicant').css('background-color', 'grey');
                  $('#cardtitleapplicant').attr('style', '');
                  $("#linkapplicant").prop("href", "#collapseApplicant");
      
               }
         
         }
                  
      });
   </script>