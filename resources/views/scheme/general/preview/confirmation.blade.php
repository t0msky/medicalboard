<div class="card m-b-0">
    <div class="card-header" role="tab" id="headingZero0">
        <h6 class="mb-0">
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="confirmation">
                <h6 class="card-title"><i class="fa fa-plus"></i> Confirmation</h6>
            </a>
        </h6>
    </div>
    <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
     
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Completion Completed?
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($confirmation)|| $confirmation!=null)
                        @if($confirmation->jrecv == 'Y')
                        <input type="text" class="form-control-preview" value="Yes" disabled style="background-color:white">
                        @elseif($confirmation->jrecv == 'N')
                        <input type="text" class="form-control-preview" value="No" disabled style="background-color:white">
                        @endif
                        @else
                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Completion Date
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($confirmation)|| $confirmation!=null)
                        <input type="text" class="form-control-preview" value="{{ $confirmation->jrecvdate }}" disabled style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>