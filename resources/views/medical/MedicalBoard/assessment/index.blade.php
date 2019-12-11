@extends('general.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h4 class="card-title">@lang('form/medical.assessment.title')</h4>
                        <hr>
                        <br>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.hospital')</label>
                                    <span class="required">*</span>
                                    <select name="appt_hospital" required class="form-control">
                                        <option value="">-- @lang('option.please_select') -- </option>}
                                        @foreach ($state as $s)
                                            @php $state2 = ''; @endphp
                                            @foreach ($hospital as $h)
                                                @if($s->ref_code != $state2)
                                                    @if($s->ref_code == $h->statecode) 
                                                        <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                            <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                        {{-- <optgroup> --}}
                                                        @php $state2 = $s->ref_code; @endphp
                                                    @endif
                                                @else 
                                                    @if($s->ref_code == $h->statecode)   
                                                            <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                        {{-- </optgroup> --}}
                                                        @php $state2 = $s->ref_code; @endphp
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.session')</label>
                                    <select name="brief_session" required class="form-control">
                                        <option value="">-- @lang('option.please_select') -- </option>}
                                        @foreach ($session as $s)
                                            <option value={{$s->ref_code}}>{{$s->desc_en}}</option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                    <select name="appt_mb_category" required class="form-control">
                                        <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                        @foreach ($medical_board_category1 as $value)
                                            <option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
                                        @endforeach
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
                                        <th>@lang('form/medical.general.no')</th>
                                        <th>@lang('form/medical.general.schemerefno')</th>
                                        <th>@lang('form/medical.general.ipname')</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>
                                        <td>1</td>
                                        <td>A20190820001</td>
                                        <td>Khairunnisa Hannis Binti Khairul</td>
                                        <td><button type="button" class="btn btn-sm btn-warning" style="margin:5px;"><i class="fas fa-upload"></i></button>
                                            <button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-file-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>OD0190820001</td>
                                        <td>Natasha Faizulikha binti Faizal</td>
                                        <td><button type="button" class="btn btn-sm btn-warning" style="margin:5px;"><i class="fas fa-upload"></i></button>
                                            <button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-file-alt"></i></button>
                                        </td>
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

@endsection