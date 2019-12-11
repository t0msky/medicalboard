<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="{{Route('reschedule_appt')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.tab_title.appointmentlisting')</h5>
                        <!-- <hr> -->
                        <!-- <br> -->
                        <div id="ip_attendance" class="" role="tabpanel" aria-labelledby="headingTwo2">
                            <div class="form-row p-t-20">
                                <div class="col-md-12">
                                    <form action="" method="">
                                    @csrf
                                        <div class="card-header"> 
                                            <div class="form-body">
                                                <div class="form-row p-t-20">
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.general.hospital')</label>
                                                        <span class="required">*</span>
                                                        <select name="appt_hospital" id="appt_hospital2" required class="form-control" style="width:100%;">
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
                                                    <input type="hidden" name="application_url" id="application_url_listing" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.general.date')</label>
                                                        <span class="required">*</span>
                                                        <input type="text" name="appt_date" id="appt_date2" required class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.appointment.option')</label>
                                                        <select name="option1" id="option1" class="form-control">
                                                            <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                                            <option value="1"><b>ID No</b></option>
                                                            <option value="2"><b>Name</b></option>
                                                            <option value="3"><b>Scheme Ref No</b></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6" id="div_idno" style="display:none;">
                                                        <label class="control-label">@lang('form/medical.general.no')</label>
                                                        <input name="appt_idno" id="appt_idno" type="number" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6" id="div_name" style="display:none;">
                                                        <label class="control-label">@lang('form/medical.general.name')</label>
                                                        <input name="appt_name" id="appt_name" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6" id="div_schemerefno" style="display:none;">
                                                        <label class="control-label">@lang('form/medical.general.schemerefno')</label>
                                                        <input name="appt_schemerefno" id="appt_schemerefno" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 col-sm-2">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="search_appt_listing" disabled><i class="fa fa-search"></i> @lang('button.search')</button>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- <br> -->
                                                <div class="table-responsive">
                                                    <table id="appt_listing2" class="table table-sm table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">@lang('form/medical.general.no')</th>
                                                                <th width="15%">@lang('form/medical.general.schemerefno')</th>
                                                                <th width="20%">@lang('form/medical.general.ipname')</th>
                                                                <th width="23%">@lang('form/medical.general.discipline')</th>
                                                                <th width="10%">@lang('form/medical.general.session')</th>
                                                                <th width="12%">@lang('form/medical.general.date')</th>
                                                                <th width="10%">@lang('form/medical.collapse.appointment.status')</th>
                                                                <th width="5%">@lang('form/medical.general.action')</th>
                                                            </tr>
                                                        </thead>

                                                        {{-- <tbody id="tbody">
                                                            <tr>
                                                                <td>1</td>
                                                                <td>A20190820005</td>
                                                                <td>Mohd Affendi Bin Kassim</td>
                                                                <td>OTHO</td>
                                                                <td>Morning</td>
                                                                <td id='row1'>2019-01-24</td>
                                                                <td>Done</td>
                                                                <td>
                                                                    <div style="float:left;">
                                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#rescheduled_modal" id="btnreschappt">@lang('button.rescheduled')</button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>2</td>
                                                                <td>OD0190820010</td>
                                                                <td>Siti Saleha Binti Zulkarnain</td>
                                                                <td>OTHO</td>
                                                                <td>Morning</td>
                                                                <td id='row2'>2019-01-24</td>
                                                                <td>Rescheduled</td>
                                                                <td>
                                                                    <div style="float:left;">
                                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#rescheduled_modal" id="btnreschappt1">@lang('button.rescheduled')</button>
                                                                        <!-- <button type="button" class=" btn-success">@lang('button.rescheduled')</button> -->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                         --}}
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id='buttonNo'>
                                        @include('medical.medicalboard.appointment.modal.appointmentrescheduled_modal')
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    