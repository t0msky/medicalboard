@extends('general.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form id="" action="" method="">
                    <div class="form-body">
                        {{ csrf_field() }}
                        <h4 class="card-title">@lang('form/medical.attendance.title')</h4>
                        <hr>
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
                                    <label class="control-label">@lang('form/medical.general.date')</label>
                                    <input name="brief_date" id="brief_date" type="date" class="form-control">
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
                            <div class="col-md-1 col-lg-1" style="margin-top:25px;">
                                <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><i class="fa fa-search"></i>
                                        @lang('button.search')</button>
                            </div>
                            <div class="col-md-12">
                                <br><br>
                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#panel_attendance" aria-expanded="true" 
                                            aria-controls="panel_attendance"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.attendance.title') <h4>
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="panel_attendance" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="panel_list" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>@lang('form/medical.general.no')</th>
                                                                <th>@lang('form/medical.collapse.attendance.panel_name')</th>
                                                                <th>@lang('form/medical.general.discipline')</th>
                                                                <th>@lang('form/medical.collapse.attendance.attendance')</th>
                                                                <th>@lang('form/medical.collapse.attendance.replacementby')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">
                                                            <tr>
                                                                <td>1<input type="text" name="count" value="2" id="countattd" hidden></td>
                                                                <td>Dr.Laili</td>
                                                                <td>OTHO</td>
                                                                <td><select class="form-control" name="attend" id="attend1">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                                <td><select name="takwim_doctor" required class="form-control" id="replace1">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        @foreach ($doctor as $value)
                                                                            <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                                                        @endforeach
                                                                    </select>          
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Dr.Helina</td>
                                                                <td>OTHO</td>
                                                                <td><select class="form-control" name="attend" id="attend2">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                                <td><select name="takwim_doctor" required class="form-control" id="replace2">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        @foreach ($doctor as $value)
                                                                            <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                                                        @endforeach
                                                                    </select>          
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn-success collapsed link a1" data-toggle="collapse"
                                                        data-target="#panel_attendance,#ip_attendance" aria-expanded="true"
                                                        aria-controls="panel_attendance">
                                                        @lang('button.next')
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1" href="#ip_attendance" aria-expanded="false" 
                                            aria-controls="ip_attendance"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.attendance.title2') <h4>
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="ip_attendance" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="panel_list" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>@lang('form/medical.general.no')</th>
                                                                <th>@lang('form/medical.general.schemerefno')</th>
                                                                <th>@lang('form/medical.general.ipname')</th>
                                                                <th>@lang('form/medical.collapse.attendance.id/ic no')</th>
                                                                <th>@lang('form/medical.general.discipline')</th>
                                                                <th>@lang('form/medical.collapse.attendance.panel1')</th>
                                                                <th>@lang('form/medical.collapse.attendance.panel2')</th>
                                                                <th>@lang('form/medical.collapse.attendance.attend')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">
                                                            <tr>
                                                                <td>1</td>
                                                                <td>A20190820001</td>
                                                                <td>Khairunnisa Hannis Binti Khairul</td>
                                                                <td>960312069990</td>
                                                                <td>OTHO</td>
                                                                <td><select name="brief_session" required class="form-control">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        @foreach ($doctor as $d)
                                                                            <option value={{$d->doctor_id}}>{{$d->doctor_name}}</option> 
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><select name="brief_session" required class="form-control">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        @foreach ($doctor as $d)
                                                                            <option value={{$d->doctor_id}}>{{$d->doctor_name}}</option> 
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><button type="button" class="btn btn-sm btn-info" style="margin:5px;">OK</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>OD0190820001</td>
                                                                <td>Natasha Faizulikha binti Faizal</td>
                                                                <td>890312069990</td>
                                                                <td>OTHO</td>
                                                                <td><select name="brief_session" required class="form-control">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        @foreach ($doctor as $d)
                                                                            <option value={{$d->doctor_id}}>{{$d->doctor_name}}</option> 
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><select name="brief_session" required class="form-control">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        @foreach ($doctor as $d)
                                                                            <option value={{$d->doctor_id}}>{{$d->doctor_name}}</option> 
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td><button type="button" class="btn btn-sm btn-info" style="margin:5px;">OK</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <a class="btn btn-success collapsed link a1" data-toggle="collapse"
                                                        data-target="#ip_attendance,#chairman_attendance" aria-expanded="true"
                                                        aria-controls="panel_attendance">
                                                        @lang('button.next')
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1" href="#chairman_attendance" aria-expanded="false" 
                                            aria-controls="chairman_attendance"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.attendance.title3') <h4>
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="chairman_attendance" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="chairman" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>@lang('form/medical.general.no')</th>
                                                                <th>@lang('form/medical.collapse.attendance.role')</th>
                                                                <th>@lang('form/medical.collapse.attendance.name')</th>
                                                                <th>@lang('form/medical.collapse.attendance.attend')</th>
                                                                <th>@lang('form/medical.collapse.attendance.replacement')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">
                                                            <tr>
                                                                <td>1</td>
                                                                <td><select name="attd_role" required class="form-control" id="attd_role">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        <option value="1">Chairman</option>}
                                                                        <option value="2">Hospital Assistant</option>}
                                                                    </select>
                                                                </td>
                                                                <td></td>
                                                                <td><select class="form-control" name="attd_attend1" id="attd_attend1">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                                <td><select class="form-control" name="attd_name" id="attd_name1">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><select name="attd_role" required class="form-control" id="attd_role">
                                                                        <option value="">-- @lang('option.please_select') -- </option>}
                                                                        <option value="1">Chairman</option>}
                                                                        <option value="2">Hospital Assistant</option>}
                                                                    </select>
                                                                </td>
                                                                <td></td>
                                                                <td><select class="form-control" name="attd_attend2" id="attd_attend2">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                                <td><select class="form-control" name="attd_name" id="attd_name2">
                                                                        <option value="">-- @lang('option.please_select') -- </option>
                                                                        <option value="1">ATTEND</option>
                                                                        <option value="3">REPLACE</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
@endsection

@section('js')
    <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
    </script>
    <script>

        document.getElementById("replace1").disabled = true;
        document.getElementById("replace2").disabled = true;
        document.getElementById("attd_name1").disabled = true;
        document.getElementById("attd_name2").disabled = true;
        var count_attend = $('#countattd').val();

        $('#attend1').change(function () { 
            var attend1 = $('#attend1').val();

            if(attend1 == '3')
                document.getElementById("replace1").disabled = false;
            else
                document.getElementById("replace1").disabled = true;
        });

        $('#attend2').change(function () { 
            var attend2 = $('#attend2').val();

            if(attend2 == '3')
                document.getElementById("replace2").disabled = false;
            else
                document.getElementById("replace2").disabled = true;
        });

        $('#attd_attend1').change(function () { 
            var attend2 = $('#attd_attend1').val();

            if(attend2 == '3')
                document.getElementById("attd_name1").disabled = false;
            else
                document.getElementById("attd_name1").disabled = true;
        });

        $('#attd_attend2').change(function () { 
            var attend2 = $('#attd_attend2').val();

            if(attend2 == '3')
                document.getElementById("attd_name2").disabled = false;
            else
                document.getElementById("attd_name2").disabled = true;
        });

    </script>
@endsection