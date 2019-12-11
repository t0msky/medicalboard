<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="p-20">
                    <form action="#">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Meerting Referrence Number')</label>
                                <input type="text" value="" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Date')</label>
                                <input type="date" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:9%'>@lang('Insured Person Name')</th>
                                            <th style='width:9%'>@lang('Identification Number')</th>
                                            <th style='width:9%'>@lang('PPN/PPP')</th>
                                            <th style='width:9%'>@lang('JD Result')</th>
                                            <th style='width:9%'>@lang('Status')</th>
                                            <th style='width:9%'>@lang('JDR Result')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="button" class="btn btn waves-effect waves-light btn-success" >@lang('Preview/Save')</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    