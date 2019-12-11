<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
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
                        @include('scheme.noticeDeath.newClaim.general.scheme_qualifying')
                     </div>
               </div>
            </div>
            <!-- FPM Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingFpmRec">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFpmRec" aria-expanded="false" aria-controls="collapseFpmRec"><h6 class="card-title"><i class="fa fa-plus"></i>
                     FPM Information</h6>
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