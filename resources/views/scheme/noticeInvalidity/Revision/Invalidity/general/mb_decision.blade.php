
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-body">
                    <div class="card m-b-0">
                        
                        <h6 class="card-title-sub">@lang('Medical Board Information') </h6>
                        
                        <div class="card-body">
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB Ref. No.')</label>
                                        <input type="text" readonly id="mbRefNo " name="mbRefNo " value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB Type')</label>
                                        <input type="text" readonly id="mbType" name="mbType" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB Session Date')</label>
                                        <input type="text" readonly id="mbSessionDate" name="mbSessionDate" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB/MAB Result')</label>
                                        <input type="text" readonly id="mbmabResult" name="mbmabResult" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Invalidity')</label>
                                        <input type="text" readonly id="Invalidity" name="Invalidity" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Remarks')</label>
                                        <input type="text" readonly id="Remarks" name="Remarks" value="" class="form-control">
                                    </div>
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
