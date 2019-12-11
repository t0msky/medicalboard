<div class="form-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('form/medical.appointment.title')</h5>
                <div class="card-header">
                    <div id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="card m-b-0">

                            <div id="appt_info" class="" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="form-row p-t-20">
                                    
                                    <div class="form-group col-md-12 col-lg-6">
                                        <label class="control-label">@lang('form/medical.general.hospital')</label>
                                        <select name="appt_hospital" class="form-control {{-- required --}}">
                                            <option value="">-- @lang('option.please_select') --</option>
                                            @foreach ($state as $s)
                                                @foreach ($hospital as $h)
                                                    @if($s->ref_code == $h->statecode)
                                                        <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">
                                                            <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-6">
                                        <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                        <select name="appt_mb_category" class="form-control {{-- required --}}">
                                            <option value="">-- @lang('option.please_select') --</option>
                                            @foreach ($medical_board_category1 as $mb)
                                               <option value={{$mb->ref_code}}>{{$mb->desc_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-6">
                                        <label class="control-label">@lang('form/medical.general.session')</label>
                                        <select name="appt_session" class="form-control {{-- required --}}">
                                            <option value="">-- @lang('option.please_select') --</option>
                                            @foreach ($sidang as $s)
                                                <option value={{$s->ref_code}}>{{$s->desc_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-lg-6l">
                                        <label class="control-label">@lang('form/medical.collapse.decision.type_discipline')</label>
                                        <select id="appttype_disciplineid" name="appttype_discipline" class="form-control">
                                            <option value="">-- @lang('option.please_select') --</option>}
                                            <option value="1">SINGLE</option>}
                                            <option value="2">MULTIPLE</option>
                                        </select>
                                    </div>
                                   
                                </div>
                                <!-- <div class="table-responsive">
                                    <table id="tableAppt_discipline" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th align="center">@lang('form/medical.collapse.appointment.select')</th>
                                                <th>@lang('form/medical.general.speciality')</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                          
                                            @foreach($discipline as $d)
                                                <tr>
                                                    <td width="10%" align="center"><div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input cbox" id="discipline{{$d->ref_code}}">
                                                        <label class="custom-control-label" for="discipline{{$d->ref_code}}"></label>
                                                </div></td>
                                                    <td>{{$d->desc_en}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-md btn-success" style="margin:5px;">SKIP</button>
                            <button type="button" id="btninfoapptok" class="btn btn-md btn-success" data-toggle="modal" data-target="#setappt_modal" style="margin:5px;">OK</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>