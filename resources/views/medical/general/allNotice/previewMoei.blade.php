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
                    <form action="{{route('previewremployabilityreport')}}" method="POST">
                        @csrf
                        <h5 class="card-title">@lang('Investigation : Internal')</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-5 label-preview">
                                        <span class="no_bold">@lang('Notice Type')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['notice_type']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-5 label-preview">
                                        <span class="no_bold">@lang('Scheme Reference No')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['schemeRefNo']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-9">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Name')</span>
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control-preview" value="{{$data['name']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Identification Number')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['idNo']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Investigation Date')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['investigationDate']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Place')</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-preview" value={{$data['place']}} disabled style="background-color:transparent">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-preview" value="{{$data['place1']}}" disabled style="background-color:transparent">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-preview" value="{{$data['place2']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-4 label-preview">
                                        <span class="no_bold">@lang('State')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['state']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-4 label-preview">
                                        <span class="no_bold">@lang('City')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['city']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-4 label-preview">
                                        <span class="no_bold">@lang('Postcode')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['postcode']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-------TABLE CLAIM HISTORY ---->

                        <div class="col-md-12 col-lg-12">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead style="background-color:skyblue;">
                                    <tr>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:95%'>@lang('Claim History')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="hidden" value="0"></td>    
                                        <td><input type="hidden" value="0"></td>
                                    </tr>  
                                </tbody>                                      
                                </table>
                            </div>
                        </div>
                        <br>
                         <!------------ TABLE DIAGNOSIS ----->

                        <div class="form-group col-md-12 col-lg-12">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead style="background-color:skyblue;">
                                    <tr>
                                        @if('casetype' == '2')
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:45%'>@lang('Diagnosis')</th>
                                        <th style='width:45%'>@lang('5th Schedule')</th>
                                        @else 
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:45%'>@lang('Diagnosis')</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="moei1">
                                        <td><input type="hidden" value="0"></td>
                                        <td><input type="hidden" name="nameDiag[]" value="{{$data['nameDiag']}}">{{$data['nameDiag']}}</td>
                                    </tr>
                                </tbody>                                      
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Family/Social History')</span>
                                    </div>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control-preview" value="{{$data['familtySocial']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Medical History')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['medHistory']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                          <!-----------TABLE JOB HISTORY ------->

                        <div class="form-group col-md-12 col-lg-12">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead style="background-color:skyblue;">
                                    <tr>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:15%'>@lang('Data(from year to year)')</th>
                                        <th style='width:25%'>@lang('Company')</th>
                                        <th style='width:25%'>@lang('Job Title')</th>
                                        <th style='width:40%'>@lang('Job Description')</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="description">
                                    <td><input type="hidden" value="0"></td>   
                                    <td><input type="hidden" name="year[]" value="{{$data['year']}}">{{$data['year']}}</td>
                                    <td><input type="hidden" name="company[]" value="{{$data['company']}}">{{$data['company']}}</td>  
                                    <td><input type="hidden" name="jobtitle[]" value="{{$data['jobtitle']}}">{{$data['jobtitle']}}</td> 
                                    <td><input type="hidden" name="jobdesc[]" value="{{$data['jobdesc']}}">{{$data['jobdesc']}}</td> 
                                    </tr>
                                </tbody>                                      
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Observation and Investigation')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['observeAndInvest']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Recommendation')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['recommendation']}}" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Prepared By')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="{{$data['preparedBy']}}" disabled style="background-color:transparent">
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
