<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Purpose Of Referral ')</label>
                            <input type="text" name="purposeOfReferral" id="purposeOfReferral" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            @if ($casetype==1)
                            <label class="control-label">@lang('Accident Details')</label>
                            @elseif ($casetype ==2)
                            <label class="control-label">@lang('Occupational Disease Details')</label>
                            @elseif ($casetype ==3)
                            <label class="control-label">@lang('Morbidity Details')</label> 
                            @else
                            @endif
                            <input type="text" name="accDetails" id="accDetails" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Investigation Details')</label>
                            <input type="text" name="typeOfIndustry" id="typeOfIndustry" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Investigation Date')</label>
                            <input type="date" name="investigationDate" id="investigationDate" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Investigation By')</label>
                            <input type="text" name="investigationBy" id="investigationBy" value=""class="form-control"readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Comment')</label>
                            <input type="text" name="comment" id="comment" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Conclusion')</label>
                            <input type="text" name="conclusion" id="conclusion" value=""class="form-control" readonly>
                        </div>
                    </div>
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('NEXT')</button>
                </form>
            </div>
        </div>
    </div>
</div>