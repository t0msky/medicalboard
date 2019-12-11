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
<!-- Row -->
<div class="row">
    <div class="col-md-12">

        {{-- <h4 class="card-title">Default Tab</h4> --}}
        {{-- <h6 class="card-subtitle">Use default tab with class <code>nav-tabs & tabcontent-border </code></h6> --}}


        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('Investigation : Special Report')</h4>
            </div>
        </div>

        <!----------------- Nav tabs --------------------->
        <ul class="nav nav-tabs" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#req_quotation" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Request Quotation')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#upload_quotation" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Upload Quotation')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_special" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Upload Invoice & Report')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#support_doc_special" role="tab">
                    <span class="hidden-sm-up"><i class="ti-layers-alt"></i></span> 
                    <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>

        </ul>
        
        <div class="row" id="rowindex">
            <div class="col-md-4 offset-md-8">
                <div class="card text-left" id="cardindex">
                    <div class="card-body" id="cardbody">
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
                                    <th></th>
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

        <!--------------------- Tab panes ------------------>

        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="req_quotation" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.abppp.requestQuotation')
            </div>

            <div class="tab-pane p-20" id="upload_quotation" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.abppp.uploadQuotation')
            </div>

            <div class="tab-pane p-20" id="medical_special" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.abppp.uploadInvoice')
            </div>

            <div class="tab-pane p-20" id="support_doc_special" role="tabpanel">
                @include('general.supportingDocument.uploadDoc')
            </div>



        </div>
    </div>
</div>
@endsection
