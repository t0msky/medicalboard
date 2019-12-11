<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form id="" action="" method="">
                    <div class="form-body">
                        @csrf
                        <div class="form-row p-t-20">
                            <input type="hidden" name="application_url" id="application_url_listing" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                            <input type="hidden" name="countHa" id="countHa">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.hospital')</label>
                                <span class="required">*</span>
                                <select name="appt_hospital_panel" id="appt_hospital_panel" required class="select2 form-control" style="width:100%;">
                                    <option value="">-- @lang('option.please_select') -- </option>
                                    @isset(($hospital), ($ref_table->state))
                                    @foreach ($ref_table->state as $s)
                                        @php $state2 = ''; @endphp
                                        @foreach ($hospital as $h)
                                            @foreach ($h as $hs)
                                                @if($s->ref_code != $state2)
                                                    @if($s->ref_code == $hs->statecode) 
                                                        <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                            <option value={{$hs->id}}>{{$hs->name}}</option>
                                                        @php $state2 = $s->ref_code; @endphp
                                                    @endif
                                                @else 
                                                    @if($s->ref_code == $hs->statecode)   
                                                            <option value={{$hs->id}}>{{$hs->name}}</option>
                                                        @php $state2 = $s->ref_code; @endphp
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                        </optgroup>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.date')</label>
                                <span class="required">*</span>
                                <input name="appt_date_panel" id="appt_date_panel" type="date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.session')</label>
                                <span class="required">*</span>
                                <select name="appt_session_panel" id="appt_session_panel" class="form-control" required>
                                    <option value="">-- @lang('option.please_select') -- </option>
                                    @isset($ref_table->sidang)
                                        @foreach ($ref_table->sidang as $s)
                                            <option value={{$s->ref_code}}>{{$s->desc_en}}</option> 
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-6" style="margin-top:25px;">
                                <button type="button" class="btn btn waves-effect waves-light btn-success" id="panelist_attendance"><i class="fa fa-search"></i> @lang('button.search')</button>
                            </div>
                            <div class="col-md-12" id="attendances" style="display:none;">
                                <hr><br>

                                <h5 class="card-title">
                                 @lang('form/medical.collapse.appointment.chairman')
                                </h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="chairman_table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="10%">@lang('form/medical.general.no')</th>
                                                    <th width="30%">@lang('form/medical.secretariat.chairman_name')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.attendance')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.replacementby')</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <h5 class="card-title">
                                 @lang('form/medical.tab_title.panel')
                                </h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="panel_table" class="table table-bordered table-striped table_panel">
                                            <thead>
                                                <tr>
                                                    <th width="10%">@lang('form/medical.general.no')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.panel_name')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.attendance')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.replacementby')</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                           
                                </div>
                                <br>
                                <h5 class="card-title"> @lang('form/medical.secretariat.hospital_assistant') 
                                </h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="ha_table" class="table table-bordered table-striped table_chairman">
                                            <thead>
                                                <tr>
                                                    <th width="10%">@lang('form/medical.general.no')</th>
                                                    <th width="30%">@lang('form/medical.secretariat.hospital_assistant_name')</th>
                                                    <th width="30%">@lang('form/medical.collapse.attendance.id/ic_no')</th>
                                                    <th width="20%">@lang('form/medical.secretariat.account_no')</th>
                                                    <th width="10%">Action</th>

                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    {{-- <div id="addrow"></div> --}}
                                    <div class="form-group col-md-12 col-lg-12">
                                        <div class="form-actions">
                                            <button class="btn btn waves-effect waves-light btn-success" type="button" id="addrowhospital"><i class="fa fa-plus"></i> Add Hospital Assistant 
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

