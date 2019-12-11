<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
                <form action="#">
                    <div class="form-row">
                    @if(!empty ($casetype) || $casetype !=null)
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Name')</label>
                            <input type="text" name="Name" id="Name" value=""class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Identification Number')</label>
                            <input type="text" name="idNo" id="idNo" value=""class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Occupacation')</label>
                            <input type="text" name="Occupacation" id="Occupacation" value=""class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Job Description')</label>
                            <input type="text" name="jobDescription" id="jobDescription" value=""class="form-control">
                        </div>
                    </div>

                    @else

                    <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Insured Person Name')</label>
                            <input type="text" name="obName" id="obName" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Identification No')</label>
                            <input type="text" name="idNo" id="idNo" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Occupation')</label>
                            <input type="text" name="occupacation" id="occupacation" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Job Description')</label>
                            <input type="text" name="jobDescription" id="jobDescription" class="form-control" disabled>
                        </div>
                    </div>
                    @endif
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('NEXT')</button>
                </form>
            </div>
        </div>
    </div>
</div>