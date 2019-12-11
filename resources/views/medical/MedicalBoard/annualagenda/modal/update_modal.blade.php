<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="update-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="update_takwim_modal">@lang('form/medical.modal.title2')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <form id="updatetakwim_form" action="{{route('takwim.update')}}" method="post">
            <div class="modal-body">
                @csrf
                <input type="hidden" name="takwim-index">
                <input type="hidden" id="takwim_table_count" name="takwim_table_count">
                <input type="hidden" name="_token" value="{{session('API_token')}}">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.date')</label>
                        <div class="input-group input-daterange" id="date-range_update">
                            <input type="text" name="takwim-start-date" class="form-control start_update" readonly>
                            <div class="input-group-prepend input-group-append">
                                {{-- <div class="input-group-text">to</div> --}}
                            </div>
                            <input type="hidden" name="takwim-end-date" class="form-control end_update" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.venue')</label>
                        <span class="required">*</span>
                        <input type="text" name="takwim_venue" required class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.session')</label>
                        <span class="required">*</span>
                        <select name="takwim_session" id="takwim_session" required class="form-control">
                            <option value="">-- @lang('option.please_select') --</option>
                            @foreach ($ref_table->sidang as $value)
                                <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                        <span class="required">*</span>
                        <select name="takwim_medical_board_category" required class="form-control">
                            <option value="">-- @lang('option.please_select') --</option>
                            @if(isset($ref_table->mb_category))
                                @foreach ($ref_table->mb_category as $value)
                                    @foreach($medical_board_category as $v)
                                        @if($v == $value->desc_en)
                                            <option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.chairman')</label>
                        <select name="takwim_chairman" id="takwim_chairman_update" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.secretariat')</label>
                        <select name="takwim_sectariat" id="takwim_secretariat_update" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group col-md-12">
                        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar" style="position: relative;height: 150px;overflow: auto;display:block;">
                            <table id="update_takwim_table" class="table order-list2 table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>@lang('form/medical.general.discipline')</th>
                                        <th>@lang('form/medical.modal.panel')</th>
                                        <th>@lang('form/medical.modal.min_quota')</th>
                                        <th>@lang('form/medical.modal.max_quota')</th>
                                        <th>@lang('form/medical.general.action')</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td width="30%">
                                            <select name="takwim_discipline_updt" required class="form-control" id="takwim_discipline_updt" onchange="getPanel(this.name)">
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @foreach ($ref_table->doc_special as $value)
                                                    <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" class="form-control" name="tdid">
                                        </td>
                                        <td width="30%">
                                            <select name="takwim_doctor_updt" required class="form-control" id="takwim_doctor_updt">
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @isset($doctor)
                                                    @foreach ($doctor as $value)
                                                        <option value={{$value->user_id}}>{{$value->doctor_name}}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                            <input type="hidden" class="form-control" name="tdoctor_id">
                                        </td>
                                        <td width="20%">
                                            <input type="number" name="takwim_minquota" required class="form-control">
                                        </td>
                                        <td width="20%">
                                            <input type="number" name="takwim_maxquota" required class="form-control">
                                        </td>
                                        <td>
                                            {{-- <button type="button" class="btn btn-md btn-info" id="addrowupdate" ><i class="fas fa-plus"></i></button> --}}
                                            <a class="adddraft" id="addrowupdate"><i class="fas fa-plus"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('form/medical.general.remarks')</label>
                        <span class="required">*</span>
                        <textarea name="takwim_remarks" required class="form-control"></textarea>
                        <input type="text" name="takwim_remarks_id" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-left text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal" id="duplicate-event">@lang('button.duplicate')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('button.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="update-event"><i class="fa fa-check"></i> @lang('button.update')</button>
            </div>
        </form>
        </div>
    </div>
</div>
