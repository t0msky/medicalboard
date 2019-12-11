<div id="accordion2" role="tablist" class="accordion">

      <!-- Initial Assessment appointmentdetails-->
      <div class="card m-b-0">
         <div class="card-header" role="tab" id="caseInfo_Payment">
            <h5 class="mb-0">
                  <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInfo"
                     aria-expanded="false" aria-controls="collapseOne1">
                     <h4 class="card-title"><i class="fa fa-plus"></i> @lang('Case Info')
                     </h4>
                  </a>
            </h5>
         </div>
         <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                  @include('Scheme.noticeInvalidity.Revision.paymentOption.PK.case_info')
            </div>
         </div>
      </div>
</div>