@extends('general.layouts.app')
@section('maintitle', 'Tab Screen')
@section('desc', 'Form')
@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<!--------------- Column ------------------------>

<div class="my-3 my-md-5">
    <div class="row" >
        <div class="col-lg-12">
            <div class="row" id="rowindex">
                <div class="col-md-12 col-lg-4 offset-lg-8">
                    <span class="title-beside-green">Preview</span>
                    <div class="card text-left" id="cardindex">
                        <div class="card-body" id="cardbodyaccident">
                            <table>
                                <thead>
                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label></td>
                                    </tr>
                                    <tr>
                                        <td><label></label></td>
                                    </tr>

                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===================================== PREVIEW RECOMMENDATION =================================== -->

            <div class="card">
                <div class="card-body">
                    <form action="{{route ('previewrecommendation')}}" method="POST">
                        @csrf
                        <h5 class="card-title">@lang('Recommendation')</h5>
                        <br>
                        <div class="form-group col-md 12 col-lg-12">
                            <div class="table-responsive">
                                <table id="myTable2" class="table table-bordered table-striped">
                                    <thead style="background-color:skyblue;">
                                        <tr>
                                            @if ($casetype == '2')
                                            <th style='width:5%'> @lang('No.')</th>
                                            <th style='width:40%'> @lang('Diagnosis')</th>
                                            <th style='width:50%'> @lang('5th schedule ESSA 1969')
                                            @else 
                                            <th style='width:5%'> @lang('No.')</th>
                                            <th style='width:95%'> @lang('Diagnosis')</th>
                                            @endif
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="display:none;"><input type="hidden" value="0"></td>
                                            <td style="display:none;"><input type="hidden" value=""></td>
                                            <td style="display:none;"><input type="hidden" value=""></td>
                                            <td style="display:none;"><input type="hidden" value=""></td>
                                        </tr>
                                        @foreach($tableDiagnosis as $idx => $data)
                                        <tr>
                                            <td>{{$idx+1}}</td>
                                            <td><input type="hidden" name="ms_rc_diagnosis[]"value="{{$data['ms_rc_diagnosis']}}">{{$data['ms_rc_diagnosis']}}</td>
                                            <td><input type="hidden" name="schedulus[]"value="{{$data['scheduleESSA']}}">{{$data['scheduleESSA']}}</td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 col-lg-11">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Justification')</span>
                                    </div>
                                    <div class="col-sm-11">
                                    <input type="text" class="form-control-preview" value="{{$justification}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-11">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Recommendation')</span>
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control-preview" value="{{$recommend}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Submit to')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$submitto}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-actions">
                                    <button type="submit" name="confirm" value="confirmRecommend" class="btn btn waves-effect waves-light btn-success" >CONFIRM</button>
                                    <button type="submit" name="action" value="Back"  class="btn btn waves-effect waves-light btn-info" onclick="submitform()">BACK</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
