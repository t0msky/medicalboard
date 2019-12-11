<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
                    
                    <h5 class="card-title"> @lang('Recommendation')</h5> <br>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title-sub"> @lang('Recommend')</h5>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Recommended By')</label>
                                    <input type="text" readonly id="recBy" name="recBy" value="{{$getHUKsao['recBy']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Recommended Date')</label>
                                    <input type="text" readonly id="recDate" name="recDate" value="{{$getHUKsao['recDate']}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Recommended')</label>
                                    <input type="text" readonly id="status" name="status" value="{{$getHUKsao['status']}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title-sub"> @lang('Revision - Change of Accident Date')</h5>

                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date')</label>
                                    <input type="text" readonly  id="accDate_revision" name="accDate_revision" value="{{$getHUKsao['accDate_revision']}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date from other source')</label>
                                    <input type="text"  readonly id="accDateOtherSource" name="accDateOtherSource" value="{{$getHUKsao['accDateOtherSource']}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title-sub">@lang('Transfer Case')</h5>

                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('SOCSO Office')</label>
                                    <input type="text" readonly id="socsoOffice" name="socsoOffice" value="{{$getHUKsao['socsoOffice']}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Transfer case?')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="transferCase">
                                        <option selected readonly disabled hidden>{{$getHUKsao['transferCase']}}</option>
                                        <option value="y">@lang('yes')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Remarks')</label>
                                    <input type="text" id="remarks" name="remarks" value="{{$getHUKsao['remarks']}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title-sub"> @lang('Approval')</h5>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Action')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="action">
                                        <option value="1">@lang('Refer to Medical Board')</option>
                                        <option value="2">@lang('Revision - Change of Accident Date')</option>
                                        <option value="3">@lang('Transfer Case')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
