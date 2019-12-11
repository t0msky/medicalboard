<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group form-group col-md-12 col-lg-4">
                                <div class="">
                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.minimum_wages')</label>
                                    <select class="form-control clearFields" name="minimumwages" id="minimumwages">
                                        <option selected hidden readonly value="please_select">@lang('Please Select')</option>
                                        <option value='Y' >@lang('Yes')</option>
                                        <option value='N' selected>@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h6 class="card-title-sub">Similar Worker</h6>
                        <hr>
                        <div class="form-row">
                            <div class="form-group form-group col-md-12 col-lg-4" id="similarworker">
                                <div class="">
                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.similar_worker')</label>
                                    <select class="form-control clearFields" name="similar" id="similar1">
                                        <option selected hidden readonly value="please_select">@lang('Please Select')</option>
                                        <option value='Y' >@lang('Yes')</option>
                                        <option value='N' selected>@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- MODAL SIMILAR --}}
                        <div class="modal fade" id="similar_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header  card-title">
                                        <h4 class="modal-title" id="exampleModalLabel1">Similar Worker Info</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-5">
                                                <div class="">
                                                    <label class="control-label">@lang('Employer Code')</label>
                                                    <input type="text" id="empcode" name="empcode" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-5">
                                                <div class="">
                                                    <label class="control-label">@lang('Identification Type')</label>
                                                    <select class="form-control">
                                                        <option value="">@lang('scheme/similar.attr.new_ic')</option>
                                                        <option value="">@lang('scheme/similar.attr.old_ic')</option>
                                                        <option value="">@lang('scheme/similar.attr.army_id')</option>
                                                        <option value="">@lang('scheme/similar.attr.police_id')</option>
                                                        <option value="">@lang('scheme/similar.attr.ssn_id')</option>
                                                        <option value="">@lang('scheme/similar.attr.cid')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-lg-5">
                                                <div class="">
                                                    <label class="control-label">@lang('Identification No')</label>
                                                    <input type="text" id="similar_empcode" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_search">SEARCH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END MODAL --}}
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingwages">
                                    <h6 class="mb-0 h5 card-title-sub">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#collapsewages" aria-expanded="true" aria-controls="collapse">
                                            @lang('form/scheme.general.collapse.wages.employer_info')
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsewages" class="collapse show" role="tabpanel" aria-labelledby="headingwages">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <div class="">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.empcode')</label>
                                                    <input type="text" id="empcode" name="empcode" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-lg-4">
                                                <div class="">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.company_name')</label>
                                                    <input type="text" id="empname" name="empname" value="" class="form-control" >
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <div class="">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.commencement_date')</label><span class="required">*</span>
                                                    <input type="date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-lg-4">
                                                <div class="">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.end_date')</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="table-responsive">
                                                <div class="card-header">
                                                    <label>@lang('form/scheme.general.collapse.wages.details_wages_accd')</label>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <table id="demo-foo-row-toggler" class="table table-sm table-bordered" data-toggle-column="first">
                                                            <thead>
                                                                <tr>
                                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('form/scheme.general.collapse.wages.num')</th>
                                                                    <th style='width:9%' class="text-center">@lang('form/scheme.general.collapse.wages.year')</th>
                                                                    <th style='width:16%' class="text-center">@lang('form/scheme.general.collapse.wages.month')</th>
                                                                    <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.wages')</th>
                                                                    <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_paid')</th>
                                                                    <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_payable')</th>
                                                                    {{-- <th style='width:15%' class="text-center">@lang('wages.attr.contribution')</th> --}}
                                                                    <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_surplus')</th>
                                                                    <th style='width:5%' class="text-center" colspan="2">Accept</th>
                                                                    {{-- <th style='width:20%' class="text-center">@lang('form/scheme.general.collapse.wages.reason')</th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr data-expanded="true">
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February"> @lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September"> @lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                </tr>  
                                                                <tr data-expanded="true">
                                                                    <td>2</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February">@lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September">@lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                </tr>  
                                                                <tr data-expanded="true">
                                                                    <td>3</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February">@lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September">@lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                </tr>  
                                                                <tr data-expanded="true">
                                                                    <td>4</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February">@lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September">@lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>   
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                </tr>  
                                                                <tr data-expanded="true">
                                                                    <td>5</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February">@lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September">@lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                </tr>   
                                                                <tr data-expanded="true">
                                                                    <td>6</td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                <option>@lang('form/scheme.general.collapse.wages.please_select')</option>
                                                                                <option value="January">@lang('form/scheme.general.collapse.wages.january')
                                                                                </option>
                                                                                <option value="February">@lang('form/scheme.general.collapse.wages.february')</option>
                                                                                <option value="March">@lang('form/scheme.general.collapse.wages.march')
                                                                                </option>
                                                                                <option value="April">@lang('form/scheme.general.collapse.wages.april')
                                                                                </option>
                                                                                <option value="May">@lang('form/scheme.general.collapse.wages.may')</option>
                                                                                <option value="June">@lang('form/scheme.general.collapse.wages.june')
                                                                                </option>
                                                                                <option value="July">@lang('form/scheme.general.collapse.wages.july')
                                                                                </option>
                                                                                <option value="August">@lang('form/scheme.general.collapse.wages.august')
                                                                                </option>
                                                                                <option value="September">@lang('form/scheme.general.collapse.wages.september')</option>
                                                                                <option value="October">@lang('form/scheme.general.collapse.wages.october')
                                                                                </option>
                                                                                <option value="November"> @lang('form/scheme.general.collapse.wages.november')</option>
                                                                                <option value="December"> @lang('form/scheme.general.collapse.wages.december')</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group col-md-12 col-lg-12">
                                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Yes
                                                                    </td>
                                                                    <td><a class='view' data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-alt"></i></a></td>
                                                                    </tr>    
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="form-group col-md-12 col-lg-12">
                                        <div class="">
                                            <label class="control-label">@lang('form/scheme.general.collapse.wages.remarks')</label>
                                            <textarea type="text" id="remarks" name="remarks" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- MODEL --}}
                                <div class="form-group col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- sample modal content -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12 col-lg-6">
                                                                        <label for="recipient-name" class="control-label">Month </label>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="form-group col-md-12 col-lg-6">
                                                                        <label for="recipient-name" class="control-label">Year</label>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <label for="recipient-name" class="control-label">Wages</label>
                                                                    <input type="text" class="form-control" >
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12 col-lg-3">
                                                                        <label for="message-text" class="control-label">Accept</label>
                                                                    </div>
                                                                    <div class="form-group col-md-12 col-lg-6">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="radio_yes" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="radio_yes">Yes</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="radio_no" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="radio_no">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <label for="message-text" class="control-label">Reason</label>
                                                                    <select class="form-control" name="" id="">
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="">
                                                                    <label for="message-text" class="control-label">Remarks</label>
                                                                    <textarea class="form-control" id="message-text1"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- END MODEL --}}
                            </div>
                        </div>
                    </div>
                    <div class='row' id=buttonlist>
                        <div class="form-group col-md-12 col-lg-12">
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                    <div class="similar_work" id="similar_work1" style="display:none">
                        @include('scheme.noticeAccident.newClaim.SCO.similar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('select[name=minimumwages]').change(function () 
        {
            if (this.value == 'Y') {
                $('#similar1').prop("disabled", true); 
            }
            else {
                $('#similar1').prop("disabled", false);   
            }
        });

        $('select[name=similar]').change(function () 
        {
            if (this.value == 'Y') {
                $("#similar_work1").show();
            }
            else {
                $("#similar_work1").hide();
            }
        }); 

        // $('#similar_work').hide();
        $("#similar_search").click(function (){
            $modal = $('#similar_modal');
            $modal.modal('show');
        });

        $("#btn_search").click(function (){
            $('#similar_section').show();
        });
        
    });
</script>