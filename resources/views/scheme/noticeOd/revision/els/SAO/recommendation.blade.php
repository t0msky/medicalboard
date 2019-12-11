<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                    
                        <div id="recAccordion" role="tablist" class="accordion" >
                    
                            <!-- claim case info-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="rec1">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#recAccordion" href="#reccol1" aria-expanded="false" aria-controls="reccol1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        Recommendation</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="reccol1" class="collapse" role="tabpanel" aria-labelledby="rec1">
                                    <div class="card-body">
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Updated By</label>
                                                    <input type="text" readonly id="updated_by_io" name="name_io" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Updated Date</label>
                                                    <input type="date" readonly id="updated_by_io" name="name_io" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label">Recommendation</label>
                                                    <textarea type="text" readonly class="form-control" name="recommend_sao_io" id="recommend_sao_io" cols="12" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Recommended By</label>
                                                    <input type="text" readonly id="rec_by_io" name="rec_by_io" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Recommended Date</label>
                                                    <input type="date" readonly id="recommend_date_io" name="rec_date_io" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- claim case info-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="rec2">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#recAccordion" href="#reccol2" aria-expanded="false" aria-controls="reccol2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        IO Recommendation</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="reccol2" class="collapse" role="tabpanel" aria-labelledby="rec2">
                                    <div class="card-body">
                                        @include('scheme.noticeOd.revision.els.sao.io_recommendation')
                                    </div>
                                </div>
                            </div>
                        </div>    
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>