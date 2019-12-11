<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div class="card-body">
                    
                    <div id="accordion2" role="tablist" class="accordion" >
                    
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne1">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Case Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.case_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne2">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Applicant Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.applicant_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne3">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Case Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.case_info2')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne4">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Medical Board Decision</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.medical_board')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne5">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Appointment</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne5" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.appointment')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne6">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Statement</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne6" class="collapse" role="tabpanel" aria-labelledby="headingOne6">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.statement')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne7">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Case Fact</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne7" class="collapse" role="tabpanel" aria-labelledby="headingOne7">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.sao.caseFact')
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">SUBMIT</button>
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>

