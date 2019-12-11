<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form id="addtakwim_form" action="{{route('takwim.post')}}" method="post">
                    @csrf
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.calendar.title')</h5>
                        <hr>
                        <div id="message"></div>
                        <div class="form-row p-t-20">
                            <input type="hidden" name="_token" value="{{session('API_token')}}">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/medical.general.hospital')</label>
                                <span class="required">*</span>
                                <select name="takwim_hospital"  id="takwim_hospital" required class="select2 form-control" style="width:100%;">
                                    <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                    @isset(($hospital), ($ref_table->state))
                                    <option style="font-weight:bold;" value="ALL">@lang('option.all')</option>
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
                            <input type="hidden" id="takwim_statecode" name="takwim_statecode" class="form-control">
                            <div class="form-group col-md-12 col-lg-4">
                                <input type="hidden" name="application_url" id="application_url" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                                <label class="control-label">@lang('form/medical.calendar.address')</label>
                                <input type="text" class="form-control" id="takwim_address" name="takwim_address" disabled>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                <select name="takwim_medical_board_category_calendar" id="takwim_medical_board_category_calendar" class="form-control">
                                    <option value=""><b>-- @lang('option.please_select')  -- </b></option>
                                    @if(isset($ref_table->mb_category))
                                    <option value="ALL">@lang('option.all')</option>
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
                            <div class="form-group col-md-12">
                                <div id="calendar"></div>
                            </div>
{{--                             <div class="col-md-6 col-lg-12">
                                <label class="control-label"><b>LEGENDS : </b></label>
                                <div class="col-md-1 input-group">
                                    <span class="input-group-addon" style="border: 1px solid; color: white; background-color: blue;">Medical Board</span>
                                </div>
                            </div> --}}
                        </div>
                        @include('medical.medicalboard.annualagenda.modal.insert_modal')
                    </div>
                </form>
                @include('medical.medicalboard.annualagenda.modal.update_modal')
                @include('medical.medicalboard.annualagenda.modal.duplicate_modal')
                @include('medical.medicalboard.annualagenda.modal.reschedule_modal')
                @include('medical.medicalboard.annualagenda.modal.delete_modal')
            </div>
        </div>
    </div>
</div>