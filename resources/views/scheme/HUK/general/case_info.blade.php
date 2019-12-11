<!----------------------- *From PK (Potential HUK = No) ----------------->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('RMB Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="rmb" name="rmb_no" value="{{$getHUKsao['rmb_no']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="rmb" name="rmb_no" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Prepared By')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="preparedBy" name="preparedBy" value="{{$getHUKsao['preparedBy']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="preparedBy" name="preparedBy" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Prepared Date')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="date" readonly id="preparedDate" name="preparedDate" value="{{$getHUKsao['preparedDate']}}" class="form-control">
                                    @else
                                    <input type="date" readonly id="preparedDate" name="preparedDate" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!------------------- * From auto (Potential HUK = Yes) ------------------->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('RMB Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="rmbAuto" name="rmbAuto" value="{{$getHUKsao['rmbAuto']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="rmbAuto" name="rmbAuto" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Created Date')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="date" readonly id="createdDate" name="createdDate" value="{{$getHUKsao['createdDate']}}" class="form-control">
                                    @else
                                    <input type="date" readonly id="createdDate" name="createdDate" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
