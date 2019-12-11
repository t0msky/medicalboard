<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <div class="form-actions text-right">
                                    </div>
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Employer Code</th>
                                                <th>Year</th>
                                                <th>Employee Monthly Contribution</th>
                                                <th>No of Contribution</th>
                                                <th>Total Months Contributed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td>1</td>
                                                <td> <input type="text" readonly name="employer_code_medical" value="A1996U13" class="form-control"></td>
                                                <td> <input type="text" readonly name="year_medical" value="2017" class="form-control"></td>
                                                <td> <select class="form-control" readonly data-placeholder="Month" tabindex="2">
                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                    </option>
                                                    <option value="February">
                                                        @lang('wages.attr.february')</option>
                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                    </option>
                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                    </option>
                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                    <option value="June" selected>@lang('scheme/wages.attr.june')
                                                    </option>
                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                    </option>
                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                    </option>
                                                    <option value="September">
                                                        @lang('scheme/wages.attr.september')</option>
                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                    </option>
                                                    <option value="November">
                                                        @lang('scheme/wages.attr.november')</option>
                                                    <option value="December">
                                                        @lang('scheme/wages.attr.december')</option>
                                                </select></td>
                                                <td> <input type="text" name="no_contribution_medical" readonly value="" class="form-control"></td>
                                                <td> <input type="text" name="total_months_contributed_medical" readonly value="" class="form-control"></td>
                                            </tr>
                                            <tr> 
                                                <td>1</td>
                                                <td> <input type="text" readonly name="employer_code_medical" value="A1996U13" class="form-control"></td>
                                                <td> <input type="text" readonly name="year_medical" value="2017" class="form-control"></td>
                                                <td> <select class="form-control" readonly data-placeholder="Month" tabindex="2">
                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                    <option value="January">@lang('scheme/wages.attr.january')
                                                    </option>
                                                    <option value="February">
                                                        @lang('wages.attr.february')</option>
                                                    <option value="March">@lang('scheme/wages.attr.march')
                                                    </option>
                                                    <option value="April">@lang('scheme/wages.attr.april')
                                                    </option>
                                                    <option value="May">@lang('scheme/wages.attr.may')</option>
                                                    <option value="June" selected>@lang('scheme/wages.attr.june')
                                                    </option>
                                                    <option value="July">@lang('scheme/wages.attr.july')
                                                    </option>
                                                    <option value="August">@lang('scheme/wages.attr.august')
                                                    </option>
                                                    <option value="September">
                                                        @lang('scheme/wages.attr.september')</option>
                                                    <option value="October">@lang('scheme/wages.attr.october')
                                                    </option>
                                                    <option value="November">
                                                        @lang('scheme/wages.attr.november')</option>
                                                    <option value="December">
                                                        @lang('scheme/wages.attr.december')</option>
                                                </select></td>
                                                <td> <input type="text" name="no_contribution_medical" readonly value="" class="form-control"></td>
                                                <td> <input type="text" name="total_months_contributed_medical" readonly value="" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>