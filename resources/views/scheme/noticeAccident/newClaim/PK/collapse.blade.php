<div id="accordion2" role="tablist" class="accordion" >
    <form action="{{route('post.ob')}}" method="POST" id="reset">
        <div class="card m-b-0">
           <div class="card-header" role="tab" id="headingOb">
                <div class="form-row"><br>
                    <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label ">Form 34 Received Date</label><span class="required">*</span>
                        @if ((!empty($obprofile)||$obprofile!=null))
                        <input type="date" id="f34recvdate" name="f34recvdate" value="{{$obprofile->f34recvdate}}"
                            class="form-control clearFields" required>
                        @else
                        <input type="date" id="f34recvdate" name="f34recvdate" value="" class="form-control clearFields"
                            required>
                        @endif
                    </div>
                </div>
                <!-- Ob Form -->
                <h6 class="mb-0">                           
                   <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb">
                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.ob.title')</h6>
                   </a>
                </h6>
           </div>
           <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                <div class="card-body">
                    @include('scheme.general.ob')
                </div>
           </div>
       </div>
    </form>
       <!-- Employer Details -->
        <div class="card m-b-0">
           <div class="card-header" role="tab" id="headingEmployer">
                <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEmployer" aria-expanded="false" aria-controls="collapseEmployer"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.employer.title')</h6>
                    </a>
                </h6>
           </div>
           <div id="collapseEmployer" class="collapse" role="tabpanel" aria-labelledby="headingEmployer">
                <div class="card-body">
                     @include('scheme.general.employer')
                </div>
            </div>
        </div>
       {{-- Accident Details --}}
        <div class="card m-b-0">
           <div class="card-header" role="tab" id="headingAccident">
                <h6 class="mb-0">                           
                   <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAccident" aria-expanded="false" aria-controls="collapseAccident"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.accident.title')</h6>
                   </a>
                </h6>
           </div>
           <div id="collapseAccident" class="collapse" role="tabpanel" aria-labelledby="headingAccident">
                <div class="card-body">
                     @include('scheme.noticeAccident.newClaim.PK.accidentDetails')
                </div>
           </div>
       </div>
        {{-- MC --}}
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingMC">
                <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMC" aria-expanded="false" aria-controls="collapseMC">
                        <h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.mc.title')
                        </h6>
                    </a>
                </h6>
            </div>
            <div id="collapseMC" class="collapse" role="tabpanel" aria-labelledby="headingMC">
                <div class="card-body"> 
                     @include('scheme.general.mc.main')
                </div>
            </div>
       </div>
       {{-- Wages --}}
       <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingWages">
                <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages">
                        <h6 class="card-title"><i class="fa fa-plus"></i> 
                             @lang('form/scheme.general.collapse.wages.title')
                        </h6>
                    </a>
                </h6>
            </div>
            <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                <div class="card-body">
                     @include('scheme.noticeAccident.newClaim.PK.wages')
                </div>
            </div>
       </div>
       <!-- Socso --> 
       <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingSocso">
                <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSocso" aria-expanded="false" aria-controls="collapseSocso">
                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.socso.title')</h6>
                    </a>
                </h6>
            </div>
            <div id="collapseSocso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
                <div class="card-body">
                     @include('scheme.general.socso')
                </div>
            </div>
       </div>
       <!-- Certificate --> 
       <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingCert">
                <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCert" aria-expanded="false" aria-controls="collapseCert">
                        <h6 class="card-title"><i class="fa fa-plus"></i>  
                            @lang('form/scheme.general.collapse.certification.title') 
                        </h6>
                     </a>
                </h6>
            </div>
             <div id="collapseCert" class="collapse" role="tabpanel" aria-labelledby="headingCert">
                <div class="card-body">
                     @include('scheme.general.certification')
                </div>
             </div>
       </div>
       <!-- Bank --> 
       <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingBank">
                <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank" aria-expanded="false" aria-controls="collapseBank">
                        <h6 class="card-title"><i class="fa fa-plus"></i> 
                            @lang('form/scheme.general.collapse.bank.title')
                        </h6>
                     </a>
                </h6>
            </div>
            <div id="collapseBank" class="collapse" role="tabpanel" aria-labelledby="headingBank">
                <div class="card-body">
                     @include('scheme.general.bank')
                </div>
            </div>
       </div>
       {{-- Confirmation --}}
       <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingConfirm">
                <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirm" aria-expanded="false" aria-controls="collapseConfirm">
                        <h6 class="card-title"><i class="fa fa-plus"></i> 
                                Confirmation of Insured Person
                        </h6>
                    </a>
                </h6>
            </div>
            <div id="collapseConfirm" class="collapse" role="tabpanel" aria-labelledby="headingConfirm">
                <div class="card-body">
                      @include('scheme.general.confirmation')
                </div>
            </div>
       </div>
</div> 