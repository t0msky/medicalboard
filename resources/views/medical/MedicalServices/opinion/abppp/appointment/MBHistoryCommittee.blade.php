<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    
                    @include('medical.general.allNotice.medicalBoardHistory')

                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Opinion')</label>
                            <input type="text" name="Opinion" id="Opinion" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Recommendation')</label>
                            <input type="text" name="Recommendation" id="Recommendation" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Prepared By')</label>
                            <input type="text" name="preparedBy" id="preparedBy" value=""class="form-control"readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Date')</label>
                            <input type="date" name="date" id="date" value=""class="form-control"readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('NEXT')</button>
                </form>
            </div>
        </div>
    </div>
</div>
