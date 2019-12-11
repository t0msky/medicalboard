<div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div id="accordion2" role="tablist" class="accordion" >
               <!-- Investigation Appointment -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingInconsistency">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInconsistency" aria-expanded="false" aria-controls="collapseInconsistency"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Inconsistent & Doubtful Information</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseInconsistency" class="collapse" role="tabpanel" aria-labelledby="headingInconsistency">
                     <div class="card-body">
                        @include('scheme.general.inconsistency.main')
                     </div>
                  </div>
               </div>
               <!-- Appointment -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingAppointment">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAppointment" aria-expanded="false" aria-controls="collapseAppointment"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Appointment</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseAppointment" class="collapse" role="tabpanel" aria-labelledby="headingAppointment">
                     <div class="card-body">
                        @include('scheme.general.appointment.main')
                     </div>
                  </div>
               </div>
               <!-- Investigation Document -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingInvDocs">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInvDocs" aria-expanded="false" aria-controls="collapseInvDocs"><h6 class="card-title"><i class="fa fa-plus"></i>
                        Investigation Documents</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseInvDocs" class="collapse" role="tabpanel" aria-labelledby="headingInvDocs">
                     <div class="card-body">
                        @include('scheme.general.investigation.main')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
         