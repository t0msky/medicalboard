<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.hospital')</label>
                                    <span class="required">*</span>
                                    <select name="appt_hospital" id="appt_hospital_ip" required class="select2 form-control" style="width:100%;" >
                                        <option value="">-- @lang('option.please_select') -- </option>}
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.session')</label>
                                    <span class="required">*</span>
                                    <select name="brief_session" required class="form-control">
                                        <option value="">-- @lang('option.please_select') -- </option>}
                                        @isset($ref_table->sidang)
                                            @foreach ($ref_table->sidang as $s)
                                                <option value={{$s->ref_code}}>{{$s->desc_en}}</option> 
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                    <span class="required">*</span>
                                    <select name="appt_mb_category" required class="form-control">
                                        <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                        @isset($ref_table->mb_category)
                                            @foreach ($ref_table->mb_category as $value)
                                                <option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1 col-lg-1" style="margin-top:25px;">
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><i class="fa fa-search"></i>
                                        @lang('button.search')</button>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="table-responsive">
                            <table id="appt_listing" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10%">@lang('form/medical.general.no')</th>
                                        <th width="15%">@lang('form/medical.general.schemerefno')</th>
                                        <th width="25%">@lang('form/medical.general.ipname')</th>
                                        <th width="40%">@lang('form/medical.secretariat.panel_details')</th> 
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td>1</td>
                                        <td>A20190820001</td>
                                        <td>Khairunnisa Hannis Binti Khairul</td>
                                        <td >
                                            <div class="form-group row">
                                                <label for="chairperson" class="col-3 col-form-label">@lang('form/medical.secretariat.chairperson'):</label>
                                                <div class="col 1">
                                                    <input class="form-control" type="text" value="" id="chairperson">
                                                </div>
                                            </div>
                                            @for($i = 0; $i<$countPanel; $i++)
                                            <div class="form-group row">
                                                <label for="panel_doctor" class="col-3 col-form-label">@lang('form/medical.tab_title.panel') {{$i+1}}:</label>
                                                <div>
                                                    <select name="panel_doctor" required class="form-control" id="panel_doctor">
                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                        @isset($doctor)
                                                        @foreach ($doctor as $value)
                                                            <option value={{$value->user_id}}>{{$value->doctor_name}}</option>
                                                        @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>
                                            @endfor
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><center>@lang('form/medical.secretariat.ok')</center>
                                            </button>
                                        </td>
                                        {{-- <td><button type="button" class="btn btn-sm btn-warning" style="margin:5px;"><i class="fas fa-upload"></i></button>
                                            <button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-file-alt"></i></button>
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>OD0190820001</td>
                                        <td>Natasha Faizulikha binti Faizal</td>
                                        <td><div class="form-group row">
                                                <label for="chairperson" class="col-3 col-form-label">@lang('form/medical.secretariat.chairperson'):</label>
                                                <div class="col 1">
                                                    <input class="form-control" type="text" value="" id="chairperson">
                                                </div>
                                            </div>
                                            @for($i = 0; $i<$countPanel; $i++)
                                            <div class="form-group row">
                                                <label for="panel_doctor" class="col-3 col-form-label">@lang('form/medical.tab_title.panel') {{$i+1}}:</label>
                                                <div>
                                                    <select name="panel_doctor" required class="form-control" id="panel_doctor">
                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                        @isset($doctor)
                                                        @foreach ($doctor as $value)
                                                            <option value={{$value->user_id}}>{{$value->doctor_name}}</option>
                                                        @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>
                                            @endfor</td>
                                        <td>
                                             <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><center>@lang('form/medical.secretariat.ok')</center>
                                            </button>
                                        </td>
                                        {{-- <td><button type="button" class="btn btn-sm btn-warning" style="margin:5px;"><i class="fas fa-upload"></i></button>
                                            <button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-file-alt"></i></button>
                                        </td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="btnsetappt">@lang('button.submit/verified')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div id="calendar"></div>
                        @include('medical_board/ro.appointment.modal')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

