<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <form action="#">
                    <div class="row">
                        <div class="col-md-4 m-b-3">
                            <label class="control-label">@lang('Insured Person Name / ID No')</label>
                            <input type="text" name="requestRecDate" id="requestRecDate" class="form-control">
                        </div>
                        <div class="col-md-4 m-b-3">
                            <label class="control-label">@lang('Service Provider Name')</label>
                            <input type="text" name="requestRecDate" id="requestRecDate" class="form-control">
                        </div>
                        <div class="col-md-4 m-b-3">
                            <label class="control-label">@lang('Invoice No')</label>
                            <input type="text" name="requestRecDate" id="requestRecDate" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:3%'>@lang('No.')</th>
                                        <th style='width:20%'>@lang('Insured Person Name')</th>
                                        <th style='width:15%'>@lang('ID No')</th>
                                        <th style='width:15%'>@lang('Type of Investigation')</th>
                                        <th style='width:20%'>@lang('Service Provider Name')</th>
                                        <th style='width:10%'>@lang('Invoice No.')</th>
                                        <th style='width:10%'>@lang('Status')</th>
                                        <th style='width:5%'>@lang('View')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="align:center;width:5%;"><center><a id='view' class="w3-large" title="View"><i class="fas fa-file-alt"></i></a></center></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>