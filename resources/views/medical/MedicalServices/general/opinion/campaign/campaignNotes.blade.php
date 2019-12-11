<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Search')</label>
                            <div class="input-group ">
                                <input type="text" class="form-control" id="commit_no">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background-color: #d8e8e9;"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------------- TABLE ---------------------------->

                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="committeeTable" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <th style="width:18%">@lang('Campaign Ref. No.')</th>
                                        <th style="width:15%" >@lang('Start Date')</th>
                                        <th style="width:15%">@lang('End Date')</th>
                                        <th style="width:25%">@lang('Campaign Name')</th>
                                        <th style="width:17%">@lang('Status')</th>
                                        <th style="width:10%">@lang('Action')</th>
                                    </thead>
                                    <tbody>
                                        <td>OD001/19</td>
                                        <td>950</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="align:center;width:5%;"><center>
                                            <a class='view'><i class="fas fa-file-alt"></i></a>&nbsp;
                                            <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>&nbsp;
                                            <a class='updatedraft'><i class="fas fa-edit"></i></a></center></td>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-------------CAMPAIGN NOTES -------------------->

                    <div class="card-body">
                        <h5 class="card-title">@lang('Campaign Notes')</h5>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Campaign Reference No.')</label>
                                <input type="text" name="campaignRefNo" id="campaignRefNo" value="" class="form-control" disabled >
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Date Time')</label>
                                <input type="text" name="dateTime" id="dateTime" value="" class="form-control" disabled >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Campaign Name')</label>
                                <input type="text" name="campaignName" id="campaignName" value="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Update Status')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('In Progress')</option>
                                    <option value="">@lang('Submit for Review')</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Notes')</label><br>
                                <textarea rows="5" cols="180"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Upload Images/Document')</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input " id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">@lang('Choose file')</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Save Notes')</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

    