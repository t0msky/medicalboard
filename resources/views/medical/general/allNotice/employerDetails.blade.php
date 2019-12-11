<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="p-20">
                <form action="#">
                    
                    @if(!empty ($casetype) || $casetype !=null)

                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Employer Name')</label>
                            <input type="text" name="empName" id="empName" value=""class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Industries Code')</label>
                            <input type="text" name="industriesCode" id="industriesCode" value=""class="form-control" >
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Type Of Industry')</label>
                            <input type="text" name="typeOfIndustry" id="typeOfIndustry" value=""class="form-control" >
                        </div>
                    </div>

                    @else

                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Employer Name')</label>
                            <input type="text" name="obName" id="obName" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Industry Code')</label>
                            <input type="text" name="IndustryCode" id="IndustryCode" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Type of Industry')</label>
                            <input type="text" name="typeOfIndustry" id="typeOfIndustry" class="form-control" disabled>
                        </div>
                    </div>
                    
                    @endif
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('NEXT')</button>
                </form>
            </div>
        </div>
    </div>
</div>