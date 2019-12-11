<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingZero0">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificationEmployer" aria-expanded="false" aria-controls="certificationEmployer">
                    <h6 class="card-title"><i class="fa fa-plus"></i> Certification By Employer </h6>
                </a>
            </h6>
        </div>
        <div id="certificationEmployer" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
            <div class="card-body">
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                Name
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($certificate) ||$certificate!=null)
                                <input type="text" id="emprepname" name="emprepname" value="{{$certificate->emprepname}}" class="form-control-preview" disabled style="background-color:white">
                                @else
                                <input type="text" id="emprepname" name="emprepname" value="" class="form-control-preview"  disabled style="background-color:white">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                    Designation
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($certificate) ||$certificate!=null)
                                <input type="text" id="emprepdes" name="emprepdes" value="{{$certificate->emprepdes}}" class="form-control-preview" disabled style="background-color:white">
                                @else
                                <input type="text" id="emprepdes" name="emprepdes" value="" class="form-control-preview" disabled style="background-color:white">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                Date
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($certificate) ||$certificate!=null)
                                <input type="date" id="emprepdate" name="emprepdate" value="{{$certificate->emprepdate}}" class="form-control-preview" disabled style="background-color:white">
                                @else
                                <input type="date" id="emprepdate" name="emprepdate" value="" class="form-control-preview" disabled style="background-color:white">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>