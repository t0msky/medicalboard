<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div id="accordion2" role="tablist" class="accordion" >
                <!-- Ob Form -->
                <form action="{{route('post.ob')}}" method="POST" id="reset">
                   
                    <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingOb">
                            <div class="card-body">
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
                            <div class="form-row"><br>
                                <div class="form-group col-md-12 col-lg-3">
                                    <label class="control-label">@lang('Form 34 Submission By')</label>
                                    <select class="form-control clearFields" name="f34submitby" id="f34submitby">
                                        <option hidden disabled value="please select" selected>@lang('Please Select')</option>
                                        @if(!empty($ref_table)|| $reftable!=null )
                                        @foreach($ref_table->f34submitby as $f34)
                                        @if ((!empty($obprofile)||$obprofile!=null)&& $obprofile->f34submitby == $f34->ref_code)
                                        <option value="{{$f34->ref_code}}" selected>{{$f34->desc_en}}</option>
                                        @else
                                        <option value="{{$f34->ref_code}}">{{$f34->desc_en}}</option>
                                        @endif
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            </div>
                            <h6 class="mb-0">
                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb"
                                    aria-expanded="false" aria-controls="collapseOb">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.ob.title')
                                    </h6>
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
                <!-- Wages Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingWages">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.wages.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                        <div class="card-body">
                            {{-- @include('scheme.general.wages') --}}
                            @include('scheme.noticeAccident.newClaim.PK.wages')
                        </div>
                    </div>
                </div>
                <!-- Death Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDeath">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDeath" aria-expanded="false" aria-controls="collapseDeath"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.notice_death.death.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDeath" class="collapse" role="tabpanel" aria-labelledby="headingDeath">
                        <div class="card-body">
                            @include('scheme.noticeDeath.newClaim.general.death')
                        </div>
                    </div>
                </div>
                <!-- Dependant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDependant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependant" aria-expanded="false" aria-controls="collapseDependant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.notice_death.dependant.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDependant" class="collapse" role="tabpanel" aria-labelledby="headingDependant">
                        <div class="card-body">
                             @include('scheme.noticeDeath.newClaim.general.dependant') 
                        </div>
                    </div>
                </div>
                <!-- Applicant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingApplicant">
                        <h6 class="mb-0">                           
                            <a class="link" id="linkapplicant" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h6 class="card-title" id="cardtitleapplicant" ><i class="fa fa-plus"></i>
                                @lang('form/scheme.notice_death.applicant.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                        <div class="card-body">
                             @include('scheme.noticeDeath.newClaim.general.applicant') 
                        </div>
                    </div>
                </div>
                <!-- Socso Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingSocso">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSocso" aria-expanded="false" aria-controls="collapseSocso"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.socso.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseSocso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
                        <div class="card-body">
                            @include('scheme.general.socso')
                        </div>
                    </div>
                </div>
                <!-- Certification -->
                <div class="card m-b-0" id="certificationemp">
                    <div class="card-header" role="tab" id="headingCertification">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCertification" aria-expanded="false" aria-controls="collapseCertification"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.certification.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseCertification" class="collapse" role="tabpanel" aria-labelledby="headingCertification">
                        <div class="card-body">
                            @include('scheme.general.certification')
                        </div>
                    </div>
                </div>
                <!-- Confirmation Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingConfirmation">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirmation" aria-expanded="false" aria-controls="collapseConfirmation"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.confirmation.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseConfirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirmation">
                        <div class="card-body">
                            @include('scheme.noticeDeath.newClaim.PK.confirmation')
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

// $(document).ready(function () {
    
//     $("#certificationemp").hide();

// });

    
    
</script>
   
   