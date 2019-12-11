<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="set_takwim_modal">@lang('form/medical.modal.title4')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="deletetakwim_form" action="{{route('takwim.delete')}}" method="post">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="takwim-index">
                <input name="takwim_hospital" type="hidden">
                <input type="hidden" name="takwim_statecode">
                <input id="takwim_table_count" name="takwim_table_count" type="hidden">
                <input type="hidden" name="_token" value="{{session('API_token')}}">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.date')</label>
                        <div class="input-group input-daterange" id="date-range">
                            <input id="min-date" name="takwim-start-date" type="text" class="form-control" disabled>
                            <div class="input-group-prepend input-group-append">
                                {{-- <div class="input-group-text">to</div> --}}
                            </div>
                            <input name="takwim-end-date" type="hidden" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.venue')</label>
                        <input type="text" name="takwim_venue" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.session')</label>
                        <select name="takwim_session" id="takwim_session" class="form-control" disabled>
                            <option value="">-- @lang('option.please_select') --</option>
                            @foreach ($ref_table->sidang as $value)
                                <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                        <select name="takwim_medical_board_category" class="form-control" disabled>
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
                        <select name="takwim_chairman" id="takwim_chairman_delete" class="form-control" disabled>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.secretariat')</label>
                        <select name="takwim_sectariat" id="takwim_secretariat_delete" class="form-control" disabled>
                        </select>
                    </div>
                    <br>
                    <div class="card-header">
                        <div class="table-responsive" style="position: relative;height: 200px;overflow: auto;display:block;">
                            <table id="delete_takwim_table" class="table order-list5 table-sm table-bordered delete_takwim_table">
                                <thead>
                                    <tr>
                                        <th>@lang('form/medical.general.discipline')</th>
                                        <th>@lang('form/medical.modal.panel')</th>
                                        <th>@lang('form/medical.modal.min_quota')</th>
                                        <th>@lang('form/medical.modal.max_quota')</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td>
                                            <select name="takwim_discipline" class="form-control" id="takwim_discipline" disabled>
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @foreach ($ref_table->doc_special as $value)
                                                    <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="takwim_doctor" class="form-control" id="takwim_doctor" disabled>
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @foreach ($doctor as $value)
                                                    <option value={{$value->user_id}}>{{$value->doctor_name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="takwim_minquota" class="form-control" disabled>
                                        </td>
                                        <td>
                                            <input type="number" name="takwim_maxquota" class="form-control" disabled>
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
                <button type="button" class="btn btn waves-effect waves-light btn-success" id="delete1-event"><i class="fas fa-trash-alt"></i> @lang('button.delete')</button>
            </div>
        </form>
        </div>
    </div>
</div>
