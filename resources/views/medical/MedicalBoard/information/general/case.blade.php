
<div class="card-header">
    <div class="card-body">
        <form action="#"> 
            <div class="form-body">
                <div class="form-row p-t-20">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.collapse.case_info.mbrefno')</label>
                        <input type="text" name="mbrefno" id="mbrefno" class="form-control" value="@isset($mbrefno) {{$mbrefno}} @endisset" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                        <input type="text" name="mbcategory" id="mbcategory" class="form-control" value="@isset($mbcategory) {{$mbcategory}} @endisset" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.collapse.case_info.received_date')</label>
                        <input type="text" name="received_date" id="received_date" class="form-control" value="@isset($assigned_date) {{$assigned_date}} @endisset" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.collapse.case_info.socso_office')</label>
                        <input type="text" name="socso_office" id="socso_office" class="form-control" value="@isset($socso_office) {{$socso_office}} @endisset" disabled>
                    </div>
                    <div class="col-md-6 offset-6">
                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse" data-target="#caseInformation,#insuredPersonInfo" aria-expanded="true" aria-controls="caseInformation">@lang('button.next')</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>