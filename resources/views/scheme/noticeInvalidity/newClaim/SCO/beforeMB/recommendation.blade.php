<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <!------------------ FROM INSPIRE ------------------>

                        <h6 class="card-title-sub">@lang('Recommendation Rehabilitation') </h6>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Refer to Medical Board')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Yes')</option>
                                    <option value="">@lang('No')</option>
                                </select>
                            </div>
                        </div>

                        <h6 class="card-title-sub">@lang('Recommendation') </h6>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Recommend for Close Case')</option>
                                    <option value="">@lang('Refer to Medical Board')</option>
                                    <option value="">@lang('Not Qualified')</option>
                                    <option value="">@lang('Transfer Case')</option>
                                    <option value="">@lang('Investigation')</option>
                                </select>
                            </div>
                        </div>

                        <!------------------ FROM SCHEME ------------------>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Recommend to Medical Board')</option>
                                    <option value="">@lang('Appeal')</option>
                                    <option value="">@lang('Not Qualified')</option>
                                    <option value="">@lang('Transfer Case')</option>
                                    <option value="">@lang('Investigation')</option>
                                </select>
                            </div>
                        </div>

                        <h6 class="card-title-sub">@lang('Transfer Case') </h6>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Reason To Transfer')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('Requested by Insured Person')</option>
                                    <option value="">@lang('Requested by Dependent')</option>
                                    <option value="">@lang('Refer to Medical Board')</option>
                                    <option value="">@lang('Requested by Employer')</option>
                                </select>
                            </div>
                        </div>

                        <!----------------TABLE -----------------> 

                        <div class="col-9">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:5%'>@lang('No.')</th>
                                            <th style='width:20%'>@lang('Scheme Ref. No.')</th>
                                            <th style='width:35%'>@lang('SOCSO Office')</th>
                                            <th style='width:40%'>@lang('Medical Board Location')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('State')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                </select>
                            </div>
                        
                       
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('SOCSO Office')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                    <option value="">@lang('')</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Remarks')</label>
                                <textarea rows="6" cols="100"> </textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.next')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
