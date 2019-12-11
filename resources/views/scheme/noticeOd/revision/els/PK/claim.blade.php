<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <form class="form">
                <div class="card-body">
                    

                    <div id="scoAccordion" role="tablist" class="accordion" >
                    
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="scoclaim1">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#scoAccordion" href="#scocol1" aria-expanded="false" aria-controls="scocol1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Case Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="scocol1" class="collapse" role="tabpanel" aria-labelledby="scoclaim1">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.pk.case_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim applicant info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="scoclaim2">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#scoAccordion" href="#scocol2" aria-expanded="false" aria-controls="scocol2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Applicant Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="scocol2" class="collapse" role="tabpanel" aria-labelledby="scoclaim2">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.pk.applicant_info')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="scoclaim3">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#scoAccordion" href="#scocol3" aria-expanded="false" aria-controls="scocol3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Case Information</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="scocol3" class="collapse" role="tabpanel" aria-labelledby="scoclaim3">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.pk.case_info2')
                                </div>
                            </div>
                        </div>
                        <!-- claim case info-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="scoclaim4">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#scoAccordion" href="#scocol4" aria-expanded="false" aria-controls="scocol4"><h5 class="card-title"><i class="fa fa-plus"></i>
                                    Medical Board Decision</h5>
                                    </a>
                                </h5>
                            </div>
                            <div id="scocol4" class="collapse" role="tabpanel" aria-labelledby="scoclaim4">
                                <div class="card-body">
                                    @include('scheme.noticeOd.revision.els.pk.medical_board')
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