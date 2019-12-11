<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('MO Ref. No.')</label>
                                            <input type="text" value="{{$quotation->ms_quo_morefno}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Type of Investigation')</label>
                                            <input type="text" value="{{$quotation->ms_quo_invtype}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Date')</label>
                                            <input type="text" value="{{$quotation->ms_quo_currdate}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Insured Person Name')</label>
                                            <input type="text" value="{{$quotation->ms_quo_invtype}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('ID No.')</label>
                                            <input type="text" value="{{$quotation->ms_quo_idno}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Tel. No.')</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <label class="control-label">@lang('Place of Investigation')</label>
                                    @foreach(explode(',', $quotation->ms_quo_place) as $idx)
                                        <div class="form-group">
                                            <input type="text" value="{{$idx}}" class="form-control" readonly>
                                        </div>
                                    @endforeach
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <input type="text" value="{{$quotation->ms_quo_state}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('City ')</label>
                                            <input type="text" value="{{$quotation->ms_quo_city}}" name="city" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Postcode ')</label>
                                            <input type="text" name="postcode" value="{{$quotation->ms_quo_postcode}} " class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="myTable_clarification" class="table table-sm table-bordered">
                                            <thead style="background-color:skyblue;">
                                                <tr>
                                                    <!-- <th>No.</th> -->
                                                    <th>Service Provider</th>
                                                    <th>Email</th>
                                                    <th>Quotation Ref. No.</th>
                                                    <th>Amount</th>
                                                    <th>Expiry Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="clari1">
                                                    <td style="display:none;"><input type="hidden" value="1"></td>
                                                    <!-- <td>1</td> -->
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="text" value="" class="form-control"></td>
                                                    <td><input type="text" value="" class="form-control"></td>
                                                    <td><input type="date" value="" class="form-control"></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <a class="uploaddraft" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View Upload File"
                                                                    data-toggle="tooltip"></i></a>
                                                            &nbsp;
                                                            <a class="view" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View" data-toggle="tooltip"></i></a>
                                                            &nbsp;
                                                            <a class="deletedraft" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i
                                                                    class="fas fa-trash-alt fa-sm" title="Delete"
                                                                    data-toggle="tooltip"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr id="clari2">
                                                    <td style="display:none;"><input type="hidden" value="2">>2</td>
                                                    <!-- <td>2</td> -->
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="text" value="" class="form-control"></td>
                                                    <td><input type="text" value="" class="form-control"></td>
                                                    <td><input type="date" value="" class="form-control"></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <a class="uploaddraft" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View Upload File"
                                                                    data-toggle="tooltip"></i></a>
                                                            &nbsp;

                                                            <a class="view" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i class="fas fa-file-alt"
                                                                    title="View" data-toggle="tooltip"></i></a>
                                                            &nbsp;
                                                            <a class="deletedraft" data-toggle="modal"
                                                                data-target="#modal_document" data-id="1"
                                                                data-whatever="@getbootstrap" href="#tt1"
                                                                aria-expanded="true"><i
                                                                    class="fas fa-trash-alt fa-sm" title="Delete"
                                                                    data-toggle="tooltip"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Recommendation.')</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-6">
                                    <button type="button" class=" pull-center btn btn waves-effect waves-light btn-success a1">Save</button>
                                    <button type="submit" class=" pull-center btn btn waves-effect waves-light btn-success a1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
