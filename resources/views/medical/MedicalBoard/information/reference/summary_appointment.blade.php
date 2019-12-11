<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">@lang('medical_board/application_info.title')</h4>
                <hr> --}}
                {{-- <div class="row p-t-20">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="control-label">@lang('medical_board/appointment.summary.id')</label>
                            <div class="controls">
                                <input type="text" class="form-control" name="smmry_id">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="control-label">@lang('medical_board/appointment.summary.medicalrefno')</label>
                            <div class="controls">
                                <input type="text" class="form-control" name="smmry_medicalrefno">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="margin-top: 30px;margin-left: 0px;" >
                        <div class="form-group">
                            <label class="control-label"></label>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" id="search_annualAgenda"> <i class="fa fa-search"></i> @lang('medical_board/takwim.search')</button>
                        </div>
                    </div>
                </div> --}}
                {{-- <br> --}}
                <div class="table-responsive">
                    <table id="takwim_listing" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('form/medical.general.no')</th>
                                <th>@lang('form/medical.collapse.appointment.caserefno')</th>
                                <th>@lang('form/medical.general.mbcategory')</th>
                                <th>@lang('form/medical.general.discipline')</th>
                                <th>@lang('form/medical.general.hospital')</th>
                                <th>@lang('form/medical.general.session')</th>
                                <th>@lang('form/medical.general.date')</th>
                                <th>@lang('form/medical.collapse.appointment.status')</th>
                                <th>@lang('form/medical.general.action')</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td>1</td>
                                <td>201907240015</td>
                                <td>Medical Board</td>
                                <td>Otho</td>
                                <td>Hospital Kuala Lumpur</td>
                                <td>Morning</td>
                                <td>12/08/2019</td>
                                <td>In Progress</td>
                                <td>
                                    {{-- <button type="button" class="btn btn-sm btn-danger" id="apptdelete" style="margin:5px;" ><i class="fas fa-trash-alt"></i></button> --}}
                                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#rescappt_modal" data-whatever="@getbootstrap" id="apptreschedule" style="margin:5px;"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @include('medical.medicalboard.information.modal.reschedule_modal')
                </div>
            </div>
        </div>
    </div>
</div>