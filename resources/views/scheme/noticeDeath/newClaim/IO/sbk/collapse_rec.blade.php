<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
            <!-- Dependant Details -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingDependantSbk">
                   <h6 class="mb-0">                           
                       <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependantSbk" aria-expanded="false" aria-controls="collapseDependantSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                       @lang('form/scheme.notice_death.PK.dependant.title')</h6>
                       </a>
                   </h6>
               </div>
               <div id="collapseDependantSbk" class="collapse" role="tabpanel" aria-labelledby="headingDependantSbk">
                   <div class="card-body">
                       @include('scheme.noticeDeath.newClaim.general.dependant')
                   </div>
               </div>
            </div> 
            <!-- Scheme Qualifying Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingSchemeQSbk">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSchemeQSbk" aria-expanded="false" aria-controls="collapseSchemeQSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Scheme Qualifying Information</h6>
                        </a>
                     </h6>
               </div>
               <div id="collapseSchemeQSbk" class="collapse" role="tabpanel" aria-labelledby="headingSchemeQSbk">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.general.scheme_qualifying')
                     </div>
               </div>
            </div>
            <!-- Contribution Based on Section 56 -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingContributionSbk">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseContributionSbk" aria-expanded="false" aria-controls="collapseContributionSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Contribution Based on Section 56</h6>
                        </a>
                     </h6>
               </div>
               <div id="collapseContributionSbk" class="collapse" role="tabpanel" aria-labelledby="headingContributionSbk">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.general.section_56')
                     </div>
               </div>
            </div>
            <!-- Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingRecommendationSbk">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommendationSbk" aria-expanded="false" aria-controls="collapseRecommendationSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Recommendation</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseRecommendationSbk" class="collapse" role="tabpanel" aria-labelledby="headingRecommendationSbk">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.general.recommendation')
                  </div>
               </div>
            </div>
            <!-- Wages Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingWagesSbk">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWagesSbk" aria-expanded="false" aria-controls="collapseWagesSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Wages Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseWagesSbk" class="collapse" role="tabpanel" aria-labelledby="headingWagesSbk">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.wages')
                  </div>
               </div>
            </div>
            <!-- HUS Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingHusSbk">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseHusSbk" aria-expanded="false" aria-controls="collapseHusSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                     HUS Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseHusSbk" class="collapse" role="tabpanel" aria-labelledby="headingHusSbk">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.hus_info')
                  </div>
               </div>
            </div>
            <!-- FPM Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingFpmRecSbk">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFpmRecSbk" aria-expanded="false" aria-controls="collapseFpmRecSbk"><h6 class="card-title"><i class="fa fa-plus"></i>
                     FPM Recommendation</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseFpmRecSbk" class="collapse" role="tabpanel" aria-labelledby="headingFpmRecSbk">
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