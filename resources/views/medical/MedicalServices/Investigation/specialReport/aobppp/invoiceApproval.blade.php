<div class="form-row">
    <div class="form-group col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('MO Ref. No').</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Quotation Ref. No').</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Type of Investigation')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Date')</label>
                                            <input type="date" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Insured Person Name')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('ID No.')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Tel. No.')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Place of Investigation')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label class="control-label">State</label>
                                            <select name="state" class="form-control">
                                            <option>--  Select Your Sate  --</option>
                                            <option value="1">Selangor</option>
                                            <option value="2">Perak</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('City ')</label>
                                            <input type="text" value="" name="city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Postcode ')</label>
                                            <input type="text" name="postcode" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="table-responsive m-t-40">
                                        <table id="myTable_clarification" class="table table-sm table-bordered">
                                            <thead style="background-color:skyblue;">
                                                <tr>
                                                    <!-- <th>No.</th> -->
                                                    <th>@lang('Service Provider')</th>
                                                    <th>@lang('Email')</th>
                                                    <th>@lang('Quotation Ref. No.')</th>
                                                    <th>@lang('Amount')</th>
                                                    <th>@lang('Expired Date')</th>
                                                    <th>@lang('Action')</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="clari1">
                                                    <td style="display:none;"><input type="hidden" value="1"></td>
                                                    <!-- <td>1</td> -->
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="text" name="postcode" value="" class="form-control"></td>
                                                    <td><input type="text" name="postcode" value="" class="form-control"></td>
                                                    <td><input type="date" name="postcode" value="" class="form-control"></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <a class="view" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View"
                                                                    data-toggle="tooltip"></i></a></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Recommendation')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group has-success">
                                            <label class="control-label">Action</label>
                                            <select name="state" class="form-control">
                                            <option>-- Please Select --</option>
                                            <option value="reject">Reject</option>
                                            <option value="nego">Negotiable</option>
                                            <option value="nego">Approved</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Justification')</label>
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-6">
                                    <button type="button"
                                        class="btn btn waves-effect waves-light btn-success a1">@lang('Submit')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
