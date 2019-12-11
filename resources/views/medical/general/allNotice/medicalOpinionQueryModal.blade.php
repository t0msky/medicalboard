<div class="modal fade" id="medicalOpinionModal'+no+'" tabindex="-1" role="dialog" aria-labelledby="medicalOpinionModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="medicalOpinionModal">Medical Investigation - Medical Clarification</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Patient's Name :</label>
                                    <input type="text" value="" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('ID No. :')</label>
                                    <input type="text" value="" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date :')</label>
                                    <input type="text" value="" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 offset-6">
                                <a class="btn-success link a1" id="btn_clarification_moei" data-toggle="modal"
                                    data-whatever="@getbootstrap" aria-expanded="true">
                                    Add Row
                                </a>
                            </div>
                            <div class="table-responsive m-t-40">
                                <table id="myTable_clarification_moei" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            <th>No.</th>
                                            <th>Info Required</th>
                                            <th>Answer</th>
                                            <th>Delete</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="clari_m1">
                                            <td style="display:none;"><input type="hidden" value="1"></td>
                                            <td>1</td>
                                            <td>Presenting Complaint?</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="clari_m2">
                                            <td style="display:none;"><input type="hidden" value="2">>2</td>
                                            <td>2</td>
                                            <td>Past Medical History including</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="clari_m3">
                                            <td style="display:none;"><input type="hidden" value="3">>3</td>
                                            <td>2</td>
                                            <td>Physical examination findings on the first visit</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="clari_m4">
                                            <td style="display:none;"><input type="hidden" value="4"></td>
                                            <td>4</td>
                                            <td>Diagnosis of the patient’s problem</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Doctor Name :</label>
                                    <input type="text" value="" name="ms_mcf_doctor" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Place Of Work :</label>
                                    <input type="text" value="" name="ms_mcf_place" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Contact No. :</label>
                                    <input type="text" value="" name="ms_mcf_contact" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Date :</label>
                                    <input type="text" value="<?php echo date("d-m-Y"); ?>" class="form-control"
                                        readonly>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="align-self-center text-left">
                        <button type="button" class="btn btn waves-effect waves-light btn-danger" id="clear">@lang('medical_board/modal.cancel')</button>
                    </div>
                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> @lang('medical_board/modal.save')</button>
                </div>
            </div>
        </div>
    </div>
</div>
