<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
                <form action="#">
                    <div class=card-body>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-8">
                            <label class="control-label">@lang('From')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Date')</label>
                            <input type="date" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Query')</label>
                            <input type="text" value="" class="form-control" readonly>
                        </div>
                    </div>
                    @include('medical.MedicalServices.opinion.abppp.feedback.collapseFeedback')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>        

