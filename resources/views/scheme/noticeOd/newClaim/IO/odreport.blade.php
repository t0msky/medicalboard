<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    {{-- <h5 class="card-title">@lang('scheme/odreport.title')</h5>
                    <hr> --}}
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/odreport.attr.disease')</label>
                                    <input type="text" name="disease" id="disease" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/odreport.attr.type_illness')</label>
                                    <select class="form-control" id="type_illness" name="type_illness">
                                        <option>@lang('scheme/odreport.attr.please_select')</option>
                                        <option>@lang('scheme/odreport.attr.hearing_loss')</option>
                                        <option>@lang('scheme/odreport.attr.backpain')</option>
                                        <option>@lang('scheme/odreport.attr.asthma')</option>
                                        <option>@lang('scheme/odreport.attr.carpal_syndrome')</option>
                                        <option>@lang('scheme/odreport.attr.skin_disease')</option>
                                        <option>@lang('scheme/odreport.attr.cancer')</option>
                                        <option>@lang('scheme/odreport.attr.lung_disease')</option>
                                        <option>@lang('scheme/odreport.attr.rotator_syndrome')</option>
                                    </select>
                                </div>
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="row p-t-20"> --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/odreport.attr.type_question')</label>
                                    <select class="form-control" id="type_question" name="type_question">
                                        <option>@lang('scheme/odreport.attr.please_select')</option>
                                        <option>@lang('scheme/odreport.attr.hearing_loss')</option>
                                        <option>@lang('scheme/odreport.attr.backpain')</option>
                                        <option>@lang('scheme/odreport.attr.asthma')</option>
                                        <option>@lang('scheme/odreport.attr.carpal_syndrome')</option>
                                        <option>@lang('scheme/odreport.attr.skin_disease')</option>
                                        <option>@lang('scheme/odreport.attr.cancer')</option>
                                        <option>@lang('scheme/odreport.attr.lung_disease')</option>
                                        <option>@lang('scheme/odreport.attr.rotator_syndrome')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/odreport.attr.question_bank')</label>
                                    <div class="table-responsive">
                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                                data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th data-breakpoints="xs" style='width:0.1%'>@lang('scheme/odreport.attr.no')</th>
                                                        <th class="text-center">@lang('scheme/odreport.attr.question')</th>
                                                        <th class="text-center">@lang('scheme/odreport.attr.evidence')</th>
                                                        <th data-breakpoints="xs sm" class="text-center">@lang('scheme/odreport.attr.reference')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-expanded="true">
                                                        <td>1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>   
                                                    <tr data-expanded="true">
                                                        <td>2</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr> 
                                                    <tr data-expanded="true">
                                                        <td>3</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/odreport.attr.recommendation')</label>
                                    <select class="form-control" id="type_question" name="type_question">
                                        <option>@lang('scheme/odreport.attr.please_select')</option>
                                        <option>@lang('scheme/odreport.attr.yes')</option>
                                        <option>@lang('scheme/odreport.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                            @lang('scheme/ob.save')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>