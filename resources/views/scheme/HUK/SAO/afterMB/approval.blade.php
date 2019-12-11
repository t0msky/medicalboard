<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Action')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
