<div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="set_takwim_modal">@lang('form/medical.modal.title')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="takwim-index">
                <input type="hidden" id="takwim_table_count" name="takwim_table_count">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.date')</label>
                        <div class="input-group input-daterange" id="date-range_modal">
                            <input id="min-date" name="takwim-start-date" type="text" required class="form-control" readonly>
                            <div class="input-group-prepend input-group-append">
                                {{-- <div class="input-group-text" id="to">to</div> --}}
                            </div>
                            <input name="takwim-end-date" id="takwim-end-date" type="hidden" required class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.venue')</label>
                        <span class="required">*</span>
                        <input type="text" name="takwim_venue" id="takwim_venue" required class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.session')</label>
                        <span class="required">*</span>
                        <select name="takwim_session" id="takwim_session" required class="form-control">
                            <option value="">-- @lang('option.please_select') --</option>
                            @if(isset($ref_table->sidang))
                                @foreach ($ref_table->sidang as $value)
                                    <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                @endforeach
                            @endif
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
                        <select name="takwim_chairman" id="takwim_chairman" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.secretariat')</label>
                        <select name="takwim_sectariat" id="takwim_secretariat" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="card-header">
                        <div class="table-responsive" style="position: relative;height: 200px;overflow: auto;display:block;">
                            <table id="set_takwim_table" class="table table-sm table-bordered order-list">
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
                                            <select name="takwim_discipline" required class="form-control" id="takwim_discipline" onchange="getPanel(this.name)">
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @if(isset($ref_table->doc_special))
                                                    @foreach ($ref_table->doc_special as $value)
                                                        <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </td>
                                        <td width="30%">
                                            <select name="takwim_doctor" required class="form-control takwim_doctor" id="takwim_doctor" disabled>
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                {{-- @foreach ($doctor as $value)
                                                    <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </td>
                                        <td width="20%">
                                            <input type="number" name="takwim_minquota" required class="form-control">
                                        </td>
                                        <td width="20%">
                                            <input type="number" name="takwim_maxquota" required class="form-control">
                                        </td>
                                        <td>
                                            {{-- <button type="button" id="addrow" ><a class="adddraft" id="addrow"><i class="fas fa-plus"></i></a></button> --}}
                                            <a class="adddraft" id="addrow"><i class="fas fa-plus"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-center text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('button.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="save-event"><i class="fa fa-check"></i> @lang('button.save')</button>
            </div>
        </div>
    </div>
</div>
