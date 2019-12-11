<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="col-md-8">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:1%'>@lang('No')</th>
                                            <th style='width:15%'>@lang('Send to')</th>
                                            <th style='width:15%'>@lang('Notification type')</th>
                                            <th style='width:5%'>@lang('Generated Date')</th>
                                            <th style='width:10%'>@lang('Action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                            <td>1.</td>
                                            <td>
                                                <select class="form-control" data-placeholder="" tabindex="2">
                                                    <option selected readonly disabled hidden>Please Choose </option>
                                                    <option value="">@lang(' Insured Person')</option>
                                                    <option value="">@lang(' Employer')</option>
                                                    <option value="">@lang('Others')</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="text" name="generated_date" value=""
                                                        class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="date" name="generated_date" value=""
                                                        class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <button class="btn btn-facebook waves-effect waves-light"
                                                        type="button"><i class="fas fa-download"></i> </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row p-t-10">
                                    <div class="col-mdcol-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Notification Type:')</label>
                                            <input type="text" name="notiType" id="notificationType"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit"
                                        class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info"
                                        onclick="submitform()">@lang('button.reset')</button>

                                    <button type="button" class="btn waves-effect waves-light btn-secondary"
                                        id='btncancelacc'
                                        onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary"
                                        id='btncancelacc'
                                        onclick="window.location='/obform_od'">@lang('button.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
