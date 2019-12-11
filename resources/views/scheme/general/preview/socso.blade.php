<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingZero0">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socsoOffice" aria-expanded="false" aria-controls="socsoOffice">
                    <h6 class="card-title"><i class="fa fa-plus"></i> SOCSO Office </h6>
                </a>
            </h6>
        </div>
        <div id="socsoOffice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
            <div class="card-body">
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                State
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($state)||$state!=null)
                                @foreach($state as $s)
                                @if(!empty($socso) && $socso->statecode == $s->ref_code)
                                <input type="text" class="form-control-preview" value="{{$s->name}}" disabled style="background-color:white">
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                City
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($socso)||$socso!=null)
                                @foreach($state as $s)
                                @if($socso->statecode == $s->ref_code)
                                @foreach($s->branch as $branch)
                                @if($socso->preferredbrcode == $branch->code)
                                <input type="text" class="form-control-preview" value="{{$branch->name}}" disabled style="background-color:white">
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>