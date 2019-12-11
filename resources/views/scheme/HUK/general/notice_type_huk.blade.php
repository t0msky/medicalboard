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
                {{-- <form action="{{Route('noticetypehuk')}}" method="post"> --}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('Notice Type')</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Medical Board Type')</label>
                                    <select name="medical_board_type" id='medical_board_type' class="form-control clearfields">
                                        <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Identification Type')</label>
                                    <select class="form-control clearfields" name='idtype' id='idtype' required>
                                        <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                        {{-- @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->ref_code)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @elseif(!empty($selectidtype)&&$id->ref_code== $selectidtype)
                                        <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                        @else
                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                        @endif
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Identification No')</label>
                                    {{-- @if(!empty($idno)) --}}
                                    <input type="text" name="idno" id='idno' class="form-control clearfields" value="" required>
                                    {{-- @else
                                    <input type="text" name="idno" id='idno' class="form-control clearfields" value="{{ old('idno') }}" required> --}} 
                                    {{-- {{Session::get('idno')}}
                                    <!--label class="" >{{Session::get('error')}}</label-->
                                    {{-- @endif --}}
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Insured Person Name')</label>
                                <input type="text" name="insured_person_name" id='insured_person_name' class="form-control clearfields" value="" required>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title-sub">Search </h5> <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="50%">
                                    <thead>
                                        <tr>
                                            <center>
                                            <th style='width:5%'>No</th>
                                            <th style='width:20%'>Benefit Ref. No.</th>
                                            <th style='width:15%'>Notice Type</th>
                                            <th style='width:20%'>Accident Date</th>
                                            <th style='width:15%'>Status</th>
                                            <th style='width:15%'>Potential HUK</th>
                                            <th style='width:15%'>View</th>
                                            <th style='width:15%'>Action</th>
                                            </center>
                                        </tr>
                                    </thead>

                                    <tbody class='align-middle'>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                                <center>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1"></label>
                                                    </div>
                                                </center>
                                        </td>
                                        </tr>
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

@endsection