<div class="modal fade" id="duplicate-modal" tabindex="-1" role="dialog" aria-labelledby="duplicate-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="duplicate_takwim_modal">@lang('form/medical.modal.title3')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="duplicatetakwim_form" action="{{route('takwim.duplicate')}}" method="post">
            <div class="modal-body">
                @csrf
                {{-- <input type="hidden" name="takwim-index"> --}}
                <input name="takwim_hospital" type="hidden">
                <input type="hidden" name="takwim_statecode">
                <input id="takwim_table_count" name="takwim_table_count" type="hidden">
                <input type="hidden" name="_token" value="{{session('API_token')}}">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.general.date')</label>
                        <div class="input-group input-daterange" id="date-range-duplicate">
                            <input id="min-date" name="takwim-start-date" type="text" required class="form-control start_duplicate" onkeydown="return false">
                            <div class="input-group-prepend input-group-append">
                                <div class="input-group-text">to</div>
                            </div>
                            <input name="takwim-end-date" id="takwim-end-date" type="text" required class="form-control" onkeydown="return false">
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
                            @isset($ref_table->sidang)
                                @foreach ($ref_table->sidang as $value)
                                    <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                @endforeach
                            @endisset
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
                        <select name="takwim_chairman" id="takwim_chairman_duplicate" class="form-control" disabled>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label class="control-label">@lang('form/medical.modal.secretariat')</label>
                        <select name="takwim_sectariat" id="takwim_secretariat_duplicate" class="form-control" disabled>
                        </select>
                    </div>
                    <br>
                    <div class="card-header">
                        <div class="table-responsive" style="position: relative;height: 200px;overflow: auto;display:block;">
                            <table id="duplicate_takwim_table" class="table table-sm table-bordered duplicate_takwim_table order-list4">
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
                                                @isset($ref_table->doc_special)
                                                    @foreach ($ref_table->doc_special as $value)
                                                        <option value={{$value->ref_code}}>{{$value->desc_en}}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </td>
                                        <td>
                                            <select name="takwim_doctor" class="form-control" id="takwim_doctor" disabled>
                                                <option value="">-- @lang('option.please_select') -- </option>
                                                @isset($doctor)
                                                    @foreach ($doctor as $value)
                                                        <option value={{$value->user_id}}>{{$value->doctor_name}}</option>
                                                    @endforeach
                                                @endisset
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
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="duplicate2-event"><i class="fa fa-check"></i> @lang('button.save')</button>
            </div>
        </form>
        </div>
    </div>
</div>
