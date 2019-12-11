<div class="modal fade" id="clarification" tabindex="-1" role="dialog" aria-labelledby="clarification">
    <div class="modal-dialog modal-xl" style="width:100%;" role="document">
        <div class="modal-content">
        <h5 class="card-title"></i> @lang('Request Document')
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button></h5>
            <div class="modal-body">
            <form action ="novalidate">
                <div class="form-body">
                    <h6 class="card-title-sub">@lang('Clarification') </h6>
                        <div class="modal-body">
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Patient Name')</label>
                                        <input type="text" name="patientName" id="patientName" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Identification Number')</label>
                                        <input type="text" name="idNo" id="idNo" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Date')</label>
                                        <input type="date" name="date" id="date" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="align-self-center text-left">
                                <button type="button" id="btn_clarification" class="btn btn waves-effect waves-light btn-success" data-toggle="modal"
                                data-whatever="@getbootstrap" aria-expanded="true">@lang('Add Row')</button>
                            </div>
                            <br>
                            <br>
                            <div class="table-responsive m-t-40">
                                <table id="myTable_clarification" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th style='width:5%'>@lang('No.')</th>
                                            <th style='width:50%'>@lang('Info Required')</th>
                                            <th style='width:36%'>@lang('Answer')</th>
                                            <th style='width:4%'>@lang('Delete')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="clari1">
                                            <td style="display:none;"><input type="hidden" value="1"></td>
                                            <td>@lang('1')</td>
                                            <td>@lang('Presenting Complaint?')</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="clari2">
                                            <td style="display:none;"><input type="hidden" value="2"></td>
                                            <td>@lang('2')</td>
                                            <td>@lang('Past Medical History including')</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                    <tr id="clari3">
                                        <td style="display:none;"><input type="hidden" value="3">>3</td>
                                        <td>@lang('3')</td>
                                        <td>@lang('Physical examination findings on the first visit')</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="clari4">
                                            <td style="display:none;"><input type="hidden" value="4"></td>
                                            <td>@lang('4')</td>
                                            <td>@lang('Diagnosis of the patient’s problem')</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Disclaimer')</label>
                                        <input type="text" name="Disclaimer" id="Disclaimer" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Doctor Name ')</label>
                                        <input type="text" name="docName" id="docName" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Place Of Work')</label>
                                        <input type="text" name="placeOfWork" id="placeOfWork" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Contact No.')</label>
                                        <input type="text" name="placeOfWork" id="placeOfWork" value="" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Date')</label>
                                        <input type="text" name="placeOfWork" id="placeOfWork" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="align-self-center text-left">
                                    <button type="button" id="submitModal" class="btn btn waves-effect waves-light btn-success"><i class="fa fa-check"></i> @lang('Print')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    