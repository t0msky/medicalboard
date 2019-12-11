@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{Route('search')}}" method="post" novalidate>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('Insured Person and Employer Registration Status')</h5>
                        <hr>
                        
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('Notice Type')</label>
                                    <select name="notice_type" id='notice_type' class="form-control clearfields">
                                        <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                        @foreach($ref_table->case_type as $ct)
                                        @if (old('notice_type') == $ct->ref_code)
                                        <option value="{{$ct->ref_code}}" selected>{{$ct->desc_en}}</option>
                                        @elseif(!empty($selectnoticetype) && $ct->ref_code== $selectnoticetype)
                                        <option value="{{$ct->ref_code}}" selected>{{$ct->desc_en}}</option>
                                        @else
                                        <option value="{{$ct->ref_code}}">{{$ct->desc_en}}</option>
                                        @endif
                                        @endforeach

                                    </select>
                            </div>

                            <div class="form-group col-md-12 col-lg-4" id="employment" style="display:none;">
                                    <label class="control-label">@lang('Is Insured Person Still in Employment?')</label>
                                    <select name="in_employment" id="in_employment" class="form-control clearfields">
                                            <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                        @if(!empty($in_employment))
                                        @if($in_employment=='Yes')
                                        <option value="Yes" selected>@lang('Yes')</option>
                                        <option value="No">@lang('No')</option>
                                        @elseif($in_employment=='No')
                                        <option value="Yes">@lang('Yes')</option>
                                        <option value="No" selected>@lang('No')</option>
                                        @endif
                                        @else
                                        <option value="please select" selected hidden readonly>
                                        @lang('Please Select')</option>
                                        <option value="Yes">@lang('Yes')</option>
                                        <option value="No">@lang('No')</option>
                                        @endif


                                    </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4" id="death" style="display:none;">
                                    <label class="control-label">@lang('Is the Death due to Accident?')</label>
                                    <select name="select_death_accident" id="select_death_accident" class="form-control clearfields">
                                            <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                        @if(!empty($select_death))
                                        @if($select_death=='Yes')
                                        <option value="Yes" selected>@lang('Yes')</option>
                                        <option value="No">@lang('No')</option>
                                        @elseif($select_death=='No')
                                        <option value="Yes">@lang('Yes')</option>
                                        <option value="No" selected>@lang('No')</option>
                                        @endif
                                        @else
                                        <option value="please select" selected hidden readonly>
                                        @lang('Please Select')</option>
                                        <option value="Yes">@lang('Yes')</option>
                                        <option value="No">@lang('No')</option>
                                        @endif


                                    </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4" id="accdate" style="display:none;">
                                    <label class="control-label">@lang('Accident Date')</label>
                                    @if(!empty($accddate))
                                    <input type="date" class="form-control clearfields" id="accdate"  name="accdate" value="{{ $accddate }}" required>
                                    @else
                                    <input type="date" class="form-control clearfields" id="accdate"  name="accdate" value="{{ old('accddate') }}" required>
                                    @endif

                            </div>
                            <div class="form-group col-md-12 col-lg-4" id="acctime" style="display:none;">
                                    <label class="control-label">@lang('Accident Time')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                    @if(!empty($accdtime))
                                    <input type="time" class="form-control clearfields" id='acctime' name="acctime" value="{{ $accdtime }}" required>
                                    @else
                                    <input type="time" class="form-control clearfields" id='acctime' name="acctime" value="{{ old('accdtime') }}" required>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Employer Code')</label>
                                @if(!empty($empcode))
                                <input type="text" id='empcode' name="empcode" value="{{ $empcode }}"
                                class="form-control clearfields" required>
                                @else
                                <input type="text" id='empcode' name="empcode" value="{{ old('employerCode') }}"
                                class="form-control clearfields" required>{{-- {{Session::get('empcode')}} --}}
                                <!--label class="" >{{Session::get('error')}}</label-->
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Identification Type')</label>
                                <select class="form-control clearfields" name='idtype' id='idtype' required>
                                    <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                    @foreach($ref_table->id_type as $id)
                                    @if (old('idtype') == $id->ref_code)
                                    <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                    @elseif(!empty($selectidtype)&&$id->ref_code== $selectidtype)
                                    <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                    @else
                                    <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                    @endif
                                    @endforeach

                                </select>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Identification No')</label>
                                @if(!empty($idno))
                                <input type="text" name="idno" id='idno' class="form-control clearfields"
                                value="{{ $idno }}" required>
                                @else
                                <input type="text" name="idno" id='idno' class="form-control clearfields"
                                value="{{ old('idno') }}" required>{{-- {{Session::get('idno')}} --}}
                                <!--label class="" >{{Session::get('error')}}</label-->
                                @endif
                        </div>
                        <div class="col-md-0">
                            <div class="form-group">
                                <br>
                                <button type="submit" name="action" id="action" value="search"
                                class="btn btn-facebook waves-effect waves-light"><i
                                class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <label class="control-label">@lang('Employer Registration Status')</label>
                            <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="50%">
                                <thead>
                                    <tr>
                                        <th style='width:10%'>Employer Code</th>
                                        <th style='width:15%'>Company Name</th>
                                    </tr>
                                </thead>

                                <tbody class='align-middle'>

                                    <tr>
                                        @if (empty($empinfo))
                                        <td colspan="2">
                                            <center>No Record Found</center>
                                        </td>
                                        @else
                                        @foreach($empinfo as $emp)
                                        @php $empcode = $emp->{'employerCode'}@endphp
                                        @php $empname = $emp->{'employerName'}@endphp
                                        <td>{{$empcode}}</td>
                                        <td>{{$empname}}</td>
                                        @endforeach
                                        @endif
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <label class="control-label">@lang('Insured Person Registration Status')</label>

                            <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="50%">
                                <thead>
                                    <tr>
                                        <th style='width:10%'>Identification No</th>
                                        <th style='width:15%'>Name</th>
                                    </tr>
                                </thead>

                                <tbody class='align-middle'>
                                    <tr>
                                        @if (empty($obassist))
                                        <td colspan="2">
                                            <center>No Record Found</center>
                                        </td>
                                        @else
                                        @foreach($obassist as $id)
                                        @php $idno = $id->{'identificationNo'} @endphp
                                        <td>{{ $idno }}</td>
                                        @endforeach
                                        <td><input type="text" name="name" id='name' class="form-control" value="{{ $name }}" hidden> {{ $name }} </td>
                                        @endif
                                  </tr>
                                  {{-- @endif --}}
                                  {{-- @if( $loop->iteration > 1)
                                  <input type="hidden" value="2" id="ic_more">
                                  @endif --}}
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>

              @if(Session::get('messagent'))
              <br />
              <div class="card-footer">

                <div class="alert alert-warning">
                    {{Session::get('messagent')}}
                </div>

            </div>

            @endif

            <label class="control-label" id='lblmcerror' style='color:red'></label>
            <div class="form-actions">
                <button type="submit" id="btnnotice"
                class="btn btn waves-effect waves-light btn-success">@lang('Next')</button>
                <button type="button" id="btn_reset" class="btn btn waves-effect waves-light btn-info"
                onclick="submitform()">@lang('Reset')</button>

                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                onclick="window.location='/noticetype'">@lang('Cancel')</button>
                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                onclick="window.location='/obform_od'">@lang('Back')</button>
            </div>
        </form>

    </div>
</div>
</div>
</div>

<script>

    function checkmandatory() {
        var casetype = document.getElementById('notice_type').value;
        var empcodefld = document.getElementById('empcode');
        var idno = document.getElementById('idno').value;

        if (casetype == '1' || casetype == '2' || casetype == '4') {
            empcodefld.required = true;
        } else {
            empcodefld.required = false;
        }

        //alert(casetype);
    }

    $(document).ready(function () {

        var noticetype = document.getElementById("notice_type");
        var empcode = document.getElementById("empcode");
        var in_employment = document.getElementById("in_employment");
        var ic_more = document.getElementById("ic_more");
        
        if (noticetype.value == '2') {
            // alert('ya');
            $('#employment').show();
        } else if (noticetype.value == '4') {
            $('#death').show();
            $('#employment').show();
        } else if(noticetype.value =='1') {
            $('#accdate').show();
            $('#acctime').show();
        }
        else {
            $('#death').hide();
            $('#employment').hide();
            $('#accdate').hide();
            $('#acctime').hide();
        }
    

    $('select[name=notice_type]').change(function () {

        if (this.value == '1') { //accident
            // alert('ya');
            $('#accdate').show();
            $('#acctime').show();
            $('#employment').hide();
            $('#death').hide();
            $('#btnnotice').prop("disabled", false);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);
            $('#in_employment').val("");
            $('#in_employment option[value="please select"]').prop("selected", true);

            $('select[name=accdate]').change(function () {
                if (this.value == 'dd/mm/yyyy') {
                    // alert('ya');
                    $('#btnnotice').prop("disabled", true);


                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });

            $('select[name=acctime]').change(function () {
                if (this.value == 'please select') {
                    $('#btnnotice').prop("disabled", true);

                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });
            

        } else if (this.value == '2') { //od
            // alert('try');
            $('#accdate').hide();
            $('#acctime').hide();
            $('#employment').show();
            $('#death').hide();
            $('#btnnotice').prop("disabled", true);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);

            $('select[name=in_employment]').change(function () {
                if (this.value == 'please select') {
                    $('#btnnotice').prop("disabled", true);


                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });

        } else if (this.value == '3') { //invalidity
            // alert('try');
            $('#accdate').hide();
            $('#acctime').hide();
            $('#employment').hide();
            $('#death').hide();
            $('#btnnotice').prop("disabled", true);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);

        } else { //death
            $('#accdate').hide();
            $('#acctime').hide();
            $('#death').show();
            $('#employment').show();
            $('#btnnotice').prop("disabled", true);
            $('#in_employment').val("");
            $('#in_employment option[value="please select"]').prop("selected", true);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);

            $('select[name=select_death_accident]').change(function () {
                if (this.value == 'please select') {
                    $('#btnnotice').prop("disabled", true);


                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });

        } 
    });

    $("#btn_reset").click(function () {
        $(".clearfields").val('');
        $('#in_employment option[value="please select"]').prop("selected", true);
        $('#select_death_accident option[value="please select"]').prop("selected", true);
        $('#idtype option[value="please select"]').prop("selected", true);
        $('#notice_type option[value="please select"]').prop("selected", true);
        $('#still_employment').hide();
        $('#death_accident').hide();

    });

    if (ic_more != null && ic_more.value == "2") {
        $('#btnnotice').prop("disabled", true);
    } else {
        $('#btnnotice').prop("disabled", false);
    }
    // $("#btn_close").click(function () {  
    //     $('#form_noticetype').attr('action', '/home');

    // });


});

</script>

@endsection