<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
            <!-- Create FPM -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingCreateFPM">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCreateFPM" aria-expanded="false" aria-controls="collapseCreateFPM"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Create FPM</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseCreateFPM" class="collapse" role="tabpanel" aria-labelledby="headingCreateFPM">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.create_fpm')
                  </div>
               </div>
            </div>
            <!-- Dependant Details -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingDependant">
                   <h6 class="mb-0">                           
                       <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependant" aria-expanded="false" aria-controls="collapseDependant"><h6 class="card-title"><i class="fa fa-plus"></i>
                       @lang('form/scheme.notice_death.PK.dependant.title')</h6>
                       </a>
                   </h6>
               </div>
               <div id="collapseDependant" class="collapse" role="tabpanel" aria-labelledby="headingDependant">
                   <div class="card-body">
                       {{-- @include('scheme.noticeDeath.newClaim.general.dependant') --}}
                   </div>
               </div>
            </div> 
            <!-- Scheme Qualifying Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingSchemeQ">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSchemeQ" aria-expanded="false" aria-controls="collapseSchemeQ"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Scheme Qualifying Information</h6>
                        </a>
                     </h6>
               </div>
               <div id="collapseSchemeQ" class="collapse" role="tabpanel" aria-labelledby="headingSchemeQ">
                     <div class="card-body">
                        @include('scheme.general.scheme_qualifying')
                     </div>
               </div>
            </div>
            <!-- Contribution Based on Section 56 -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingContribution">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseContribution" aria-expanded="false" aria-controls="collapseContribution"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Contribution Based on Section 56</h6>
                        </a>
                     </h6>
               </div>
               <div id="collapseContribution" class="collapse" role="tabpanel" aria-labelledby="headingContribution">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.general.section_56')
                     </div>
               </div>
            </div>
            <!-- Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingRecommendation">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommendation" aria-expanded="false" aria-controls="collapseRecommendation"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Recommendation</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseRecommendation" class="collapse" role="tabpanel" aria-labelledby="headingRecommendation">
                  <div class="card-body">
                     @include('scheme.general.recommendation.main')
                  </div>
               </div>
            </div>
            <!-- Wages Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingWages">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Wages Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.wages')
                  </div>
               </div>
            </div>
            <!-- HUS Info -->
            {{-- <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingHus">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseHus" aria-expanded="false" aria-controls="collapseHus"><h6 class="card-title"><i class="fa fa-plus"></i>
                     HUS Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseHus" class="collapse" role="tabpanel" aria-labelledby="headingHus">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.hus_info')
                  </div>
               </div>
            </div> --}}
            <!-- FPM Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingFpmRec">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFpmRec" aria-expanded="false" aria-controls="collapseFpmRec"><h6 class="card-title"><i class="fa fa-plus"></i>
                     FPM Recommendation</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseFpmRec" class="collapse" role="tabpanel" aria-labelledby="headingFpmRec">
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