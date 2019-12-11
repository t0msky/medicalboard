<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form id="" action="" method="">
                    <div class="form-body">
                        @csrf
                        <h5 class="card-title">@lang('form/medical.tab_title.appointment')</h5>
                        <!-- <hr> -->
                                
                        <div id="panel_attendance" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="card-body">
                                <div class="form-row p-t-20">
                                    <div class="col-md-12">
                                        <form action="" method="">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="form-group col-md-12 col-lg-5">
                                                        <label class="control-label">@lang('form/medical.general.hospital')</label>
                                                        <span class="required">*</span>
                                                        <select name="appt_hospital" id="appt_hospital" required class="form-control" style="width:100%;">
                                                            <option value="">-- @lang('option.please_select') -- </option>
                                                            <option value="5">Hospital Kuala Lumpur</option>
                                                            @isset(($ref_table->state), ($hospital))
                                                            @foreach ($ref_table->state as $s)
                                                                @php $state2 = ''; @endphp
                                                                    @foreach ($hospital as $hs)
                                                                    @foreach($hs as $h)
                                                                        @if($s->ref_code != $state2)
                                                                            @if($s->ref_code == $h->statecode) 
                                                                                <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                                                <option value={{$h->id}}>{{$h->name}}</option>
                                                                                @php $state2 = $s->ref_code; @endphp
                                                                            @endif
                                                                        @else 
                                                                            @if($s->ref_code == $h->statecode)   
                                                                                <option value={{$h->id}}>{{$h->name}}</option>
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
                                                    <div class="form-group col-md-12 col-lg-5">
                                                        <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                                        <span class="required">*</span>
                                                        <select name="appt_mb_category" id="appt_mb_category" required class="form-control">
                                                            <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                                            @isset($ref_table->mb_category)
                                                                @foreach ($ref_table->mb_category as $value)
                                                                    <option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>

                                                    <div class="col-md-12 col-lg-2" style="margin-top:25px;">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="search_appt" disabled><i class="fa fa-search"></i> @lang('button.search')
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="table-responsive">
                                                    <table id="appt_listing" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">@lang('form/medical.general.no')</th>
                                                                <th>@lang('form/medical.general.schemerefno')</th>
                                                                <th>@lang('form/medical.general.ipname')</th>
                                                                <th>@lang('form/medical.general.discipline')</th>
                                                                {{-- <th>@lang('form/medical.general.session')</th> --}}
                                                            </tr>
                                                        </thead>

                                                        <tbody id="tbody">
                                                           <!--  <tr>
                                                                <td>1</td>
                                                                <td>A20190820001</td>
                                                                <td>Khairunnisa Hannis Binti Khairul</td>
                                                                <td>OTHO</td>
                                                                <td>Morning</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>OD0190820001</td>
                                                                <td>Natasha Faizulikha binti Faizal</td>
                                                                <td>OTHO</td>
                                                                <td>Morning</td>
                                                            </tr> -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn waves-effect waves-light btn-success" id="btnsetappt">@lang('button.set_date_appt')</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
