<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.summary_listing.title')</h5>
                        <hr>
                        <br>
                        <div class="form-row p-t-20">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.summary_listing.year')</label><span class="required">*</span>
                                <select name="takwim_year" id="takwim_year_listing" class="form-control">
                                    <option value="">-- @lang('option.please_select') -- </option>}
                                    @for($year=date('Y') - 1 ; $year <= date('Y') + 1 ; $year++)
                                        <option value="{{$year}}">{{$year}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.hospital')</label>
                                <select name="takwim_hospital"  id="takwim_hospital_listing" required class="select2 form-control" style="width:100%;">
                                    <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                    @if(isset($hospital) && isset($ref_table->state))
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
                                    @endif
                                </select>
                            </div>
                            <input type="hidden" id="takwim_statecode_listing" name="takwim_statecode">
                            <input type="hidden" name="application_url" id="application_url_listing" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                <select name="takwim_medical_board_category" id="takwim_medical_board_category_listing" required class="form-control">
                                    <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                    <option value="ALL">@lang('option.all')</option>
                                    @foreach ($ref_table->mb_category as $value)
                                    <option value="{{$value->ref_code}}" {{-- selected = "selected" --}}>{{$value->desc_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-2" style="margin-top: 25px;">
                                <label class="control-label"></label>
                                <button type="button" class="btn btn waves-effect waves-light btn-success" id="search_annualAgenda" disabled> <i class="fa fa-search"></i> @lang('button.search')</button>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="card-header">
                            <div class="table-responsive">
                                <table id="takwim_listing" class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th>@lang('form/medical.general.date')</th>
                                            <th>@lang('form/medical.general.hospital')</th>
                                            <th>@lang('form/medical.summary_listing.venue')</th>
                                            <th>@lang('form/medical.general.mbcategory')</th>
                                            <th>@lang('form/medical.general.discipline')</th>
                                            <th>@lang('form/medical.general.session')</th>
                                            <th>@lang('form/medical.summary_listing.panel')</th>
                                            <th width="10%">@lang('form/medical.summary_listing.quota')</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

