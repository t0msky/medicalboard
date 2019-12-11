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
                <form action="/Scheme/idno" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/scheme.general.notice_type.title')</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                @lang('form/scheme.general.notice_type.details')<br /><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.notice_type.notice_type')</label>
                                    <select name="notice_type" id='notice_type' class="form-control clearfields">
                                        <option selected hidden readonly value="please select">@lang('option.please_select')</option>
                                        @foreach ($noticetype as $nt)
                                        @if (old('notice_type') == $nt->refcode)
                                        <option value="{{$nt->refcode}}" selected>{{$nt->descen}}</option>
                                        @elseif(!empty($selectnoticetype)&&$nt->refcode == $selectnoticetype)
                                        <option value="{{$nt->refcode}}" selected>{{$nt->descen}}</option>
                                        @else
                                        <option value="{{$nt->refcode}}">{{$nt->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3" id="still_employment" style="display:none;">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.notice_type.in_employment')</label>
                                    <select name="in_employment" id="in_employment" class="form-control clearfields">

                                        @if(!empty($in_employment))
                                        @if($in_employment=='Yes')
                                        <option value="Yes" selected>@lang('option.yes')</option>
                                        <option value="No">@lang('option.no')</option>
                                        @else
                                        <option value="Yes">@lang('option.yes')</option>
                                        <option value="No" selected>@lang('option.no')</option>
                                        @endif
                                        @else
                                        <option value="please select" selected hidden readonly>
                                            @lang('option.please_select')</option>
                                        <option value="Yes">@lang('option.yes')</option>
                                        <option value="No">@lang('option.no')</option>
                                        @endif


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" id="death_accident" style="display:none;">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.notice_type.death_accident')</label>
                                        <select name="select_death_accident" id="select_death_accident" class="form-control clearfields">
    
                                            @if(!empty($select_death_accident))
                                            @if($select_death_accident=='Yes')
                                            <option value="Yes" selected>@lang('option.yes')</option>
                                            <option value="No">@lang('option.no')</option>
                                            @else
                                            <option value="Yes">@lang('option.yes')</option>
                                            <option value="No" selected>@lang('option.no')</option>
                                            @endif
                                            @else
                                            <option value="please select" selected hidden readonly>
                                                @lang('option.please_select')</option>
                                            <option value="Yes">@lang('option.yes')</option>
                                            <option value="No">@lang('option.no')</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.notice_type.employer_code')</label>
                                    @if(!empty($empcode))
                                    <input type="text" id='empcode' name="empcode" value="{{ $empcode }}"
                                        class="form-control clearfields">
                                    @else
                                    <input type="text" id='empcode' name="empcode" value="{{ old('empcode') }}"
                                        class="form-control clearfields">{{-- {{Session::get('empcode')}} --}}
                                    <!--label class="" >{{Session::get('error')}}</label-->
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.notice_type.id_type')</label>
                                    <select class="form-control clearfields" name='idtype' id='idtype' required>
                                        <option selected hidden readonly value="please select">@lang('option.please_select')</option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.notice_type.enter_ic')</label>
                                    @if(!empty($idno))
                                    <input type="text" name="idno" id='idno' class="form-control clearfields"
                                        value="{{ $idno }}" required>
                                    @else
                                    <input type="text" name="idno" id='idno' class="form-control clearfields"
                                        value="{{ old('idno') }}" required>{{-- {{Session::get('idno')}} --}}
                                    <!--label class="" >{{Session::get('error')}}</label-->
                                    @endif
                                </div>

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
                                <label class="control-label">@lang('form/scheme.general.notice_type.employer')</label>
                                <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="50%">
                                    <thead>
                                        <tr>
                                            <th style='width:10%'>@lang('table-header.employer_code')</th>
                                            <th style='width:15%'>@lang('table-header.company_name')</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class='align-middle'>

                                        <tr>
                                            @if (empty($empinfo))
                                            <td colspan="2">
                                                    <center>No Record Found</center>
                                                </td>
                                                @else
                                            <td>{{ $empinfo -> empcode}}</td>
                                            <td>{{ $empinfo -> empname}}</td>
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
                                <label class="control-label">@lang('form/scheme.general.notice_type.Insured_Person')</label>

                                <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="50%">
                                    <thead>
                                        <tr>
                                            <th style='width:10%'>@lang('table-header.id_no')</th>
                                            <th style='width:15%'>@lang('table-header.employer_name')</th>
                                        </tr>
                                    </thead>

                                    <tbody class='align-middle'>
                                        @if (empty($obassist))
                                        <tr>
                                                <td colspan="2">
                                                    <center>No Record Found</center>
                                                </td>
                                            </tr>
                                            @else
                                        @foreach($obassist as $data)
                                     
                                        @foreach($nameid as $data_name)
                                                  @if($data ->idtype ==$selectidtype)
                                                         <tr>
                                                          <td>{{ $data -> idno}}</td>
                                                           <td>{{ $data_name -> name }}</td>

                                                          </tr>
                                                     @endif
                                                     @if( $loop->iteration > 1)
                                                   <input type="hidden" value="2" id="ic_more">
                                                 @endif
                                        @endforeach
                                       

                                        @endforeach
                                        @endif
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

                  
                    <div class="form-actions">
                        <button type="submit" id="btnnotice"
                            class="btn btn waves-effect waves-light btn-success">@lang('button.next')</button>
                        <button type="button" id="btn_reset" class="btn btn waves-effect waves-light btn-info"
                            onclick="submitform()">@lang('button.reset')</button>

                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                            onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                            onclick="window.location='/obform_od'">@lang('button.back')</button>
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

        if (casetype == '01' || casetype == '02' || casetype == '04') {
            empcodefld.required = true;
        } else {
            empcodefld.required = false;
        }

        //alert(casetype);
    }

</script>
@endsection
