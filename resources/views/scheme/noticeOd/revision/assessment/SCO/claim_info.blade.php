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
                                    <div class="card-header" role="tab" id="headingCaseInfo" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseInfo" aria-expanded="false" aria-controls="collapseCaseInfo">
                                                <h5 class="card-title" ><i class="fa fa-plus"></i>
                                                Case Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseCaseInfo" class="collapse" role="tabpanel" aria-labelledby="headingCaseInfo">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info')
                                            </div>
                                        </div>
                                   
                                </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingApplicant" style="background-color: #FFFFFF;">
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h5 class="card-title"><i class="fa fa-plus"></i>
                                               Applicant Information</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.applicant_info')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingCaseInfoTwo" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCaseInfoTwo" aria-expanded="false" aria-controls="collapseCaseInfoTwo"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                 Case Information</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseCaseInfoTwo" class="collapse" role="tabpanel" aria-labelledby="headingCaseInfoTwo">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.case_info2')
                                            </div>
                                        </div>
                                    </div>
    
                                <div class="card m-b-0">
                                    <div class="card-header" role="tab" id="headingAppealate" style="background-color: #FFFFFF;" >
                                        <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAppealate" aria-expanded="false" aria-controls="collapseAppealate"><h5 class="card-title"><i class="fa fa-plus"></i>
                                              Medical Board Decision-Appealate</h5>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseAppealate" class="collapse" role="tabpanel" aria-labelledby="headingAppealate">
                                        <div class="card-body">
                                                @include('scheme.noticeOd.revision.assessment.SAO.mbd_appealate')
                                        </div>
                                    </div>
                                </div>

                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingMbd" style="background-color: #FFFFFF;" >
                                            <h5 class="mb-0">
                                                <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMbd" aria-expanded="false" aria-controls="collapseMbd"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                  Medical Board Decision</h5>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseMbd" class="collapse" role="tabpanel" aria-labelledby="headingMbd">
                                            <div class="card-body">
                                                    @include('scheme.noticeOd.revision.assessment.SAO.medical_board')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                            <div class="card-header" role="tab" id="headingPreMbd" style="background-color: #FFFFFF;" >
                                                <h5 class="mb-0">
                                                    <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapsePreMbd" aria-expanded="false" aria-controls="collapsePreMbd"><h5 class="card-title"><i class="fa fa-plus"></i>
                                                      Previous Medical Board Decision</h5>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapsePreMbd" class="collapse" role="tabpanel" aria-labelledby="headingPreMbd">
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
