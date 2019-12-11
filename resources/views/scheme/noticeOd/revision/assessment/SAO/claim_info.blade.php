<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <form action="/obform" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                            {{-- <h5 class="card-title">Claim</h5> --}}
                        
                        @if(Session::get('messageob')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div id="accordion2" role="tablist" class="accordion" >
                  
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingCaseSao" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseSao" aria-expanded="false" aria-controls="collapseCaseSao">
                                                <h5 class="card-title" ><i class="fa fa-plus"></i>
                                                Case Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseCaseSao" class="collapse" role="tabpanel" aria-labelledby="headingCaseSao">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info')
                                            </div>
                                        </div>
                                   
                                </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingApplicantSao" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicantSao" aria-expanded="false" aria-controls="collapseApplicantSao"><h5 class="card-title"><i class="fa fa-plus"></i>
                                               Applicant Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseApplicantSao" class="collapse" role="tabpanel" aria-labelledby="headingApplicantSao">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.applicant_info')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingCaseSaoTwo" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseSaoTwo" aria-expanded="false" aria-controls="collapseCaseSaoTwo"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                 Case Information</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseCaseSaoTwo" class="collapse" role="tabpanel" aria-labelledby="headingCaseSaoTwo">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info2')
                                            </div>
                                        </div>
                                    </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingAppealateSao" style="background-color: #FFFFFF;" >
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAppealateSao" aria-expanded="false" aria-controls="collapseAppealateSao"><h5 class="card-title"><i class="fa fa-plus"></i>
                                              Medical Board Decision-Appealate</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseAppealateSao" class="collapse" role="tabpanel" aria-labelledby="headingAppealateSao">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.mbd_appealate')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingMdbSao" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMdbSao" aria-expanded="false" aria-controls="collapseMdbSao"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                  Medical Board Decision</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMdbSao" class="collapse" role="tabpanel" aria-labelledby="headingMdbSao">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.medical_board')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                            <div class="card-header" role="tab" id="headingPreMbdSao" style="background-color: #FFFFFF;" >
                                                <h5 class="mb-0">
                                                    <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapsePreMbdSao" aria-expanded="false" aria-controls="collapsePreMbdSao"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                      Previous Medical Board Decision</h5>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapsePreMbdSao" class="collapse" role="tabpanel" aria-labelledby="headingPreMbdSao">
                                                <div class="card-body">
                                                        @include('scheme.noticeOd.revision.assessment.SAO.pre_medical_board')
                                                </div>
                                            </div>
                                        </div>
                            </div>

                        
                                                                           
                        {{-- <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
