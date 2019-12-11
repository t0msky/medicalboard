@extends('general.layouts.app')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">@lang('index.nav.index')</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">@lang('index.nav.home')</a></li>
                <li class="breadcrumb-item active">@lang('index.nav.index')</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('head')
@endsection
@section('content')

<!-------------- Row --------------------->
<div class="row">
    <div class="col-md-12">
        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('Investigation : Internal')</h4>
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">


            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#set_appointment_internal_abppp" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Set Appointment')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supporting_doc" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>
    
        </ul>
        <div class="row" id="rowindex">
            <div class="col-md-4 offset-md-8">
                <div class="card text-left" id="cardindex">
                    <div class="card-body" id="cardbodyaccident">
                        <table>
                            <thead>
                                <tr>
                                    <th><label>Name</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->name) {{$FactC->name}} @endisset</th>
                                </tr>
                                <tr>
                                    <th><label>Identification No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->idno) {{$FactC->idno}} @endisset</th>
                                </tr>
                                <tr>
                                    <th><label>Scheme Reference No.</label></th>
                                    <th>:</th>
                                    <th>{{(Session::get('schemerefno'))}}</th>
                                </tr>
                                <tr>
                                    <th><label>MO Reference No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->msrefno) {{$FactC->msrefno}} @endisset</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-------------- Tab panes ------------->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="set_appointment_internal_abppp" role="tabpanel">
                @include('medical.MedicalServices.Investigation.internalDocument.abppp.setAppointment')
            </div>

            <div class="tab-pane p-20" id="supporting_doc" role="tabpanel">
                    @include('general.supportingDocument.uploadDoc')
            </div>

        </div>
    </div>
</div>
@endsection
