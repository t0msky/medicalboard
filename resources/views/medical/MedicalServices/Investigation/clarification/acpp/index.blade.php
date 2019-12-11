@extends('general.layouts.app')


@section('head')
<!-- page css -->
<link href="/PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/wizard/steps.css" rel="stylesheet">
<!--alerts CSS -->
<link href="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link href="/PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/PERKESO_UI/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-md-12">

        {{-- <h4 class="card-title">Default Tab</h4> --}}
        {{-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6> --}}



        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('ACPP')</h4>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#insurdperson" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Insured Person Details')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#doctor" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Doctor
                        Details')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#document" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Prepare Document')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#invoice" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Upload
                        Invoice And Report')</span>
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
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="insurdperson" role="tabpanel">
                @include('medical.MedicalServices.Investigation.clarification.acpp.insuredPerson')

            </div>
            <div class="tab-pane p-20" id="doctor" role="tabpanel">
                @include('medical.MedicalServices.Investigation.clarification.acpp.doctor')

            </div>
            <div class="tab-pane p-20" id="document" role="tabpanel">
                @include('medical.MedicalServices.Investigation.clarification.acpp.prepareDocument')

            </div>
            <div class="tab-pane p-20" id="invoice" role="tabpanel">
                @include('medical.MedicalServices.Investigation.clarification.acpp.invoice')

            </div>

        </div>
    </div>
</div>

@endsection
