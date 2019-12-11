@extends('general.layouts.app')
@section('breadcrumb')
@endsection
@section('head')
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('Investigation : Internal')</h4>
            </div>
        </div>

        <!----------------- Nav tabs ------------------------>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#medical_investigation" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Employability Report')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#support_doc_investigation" role="tab">
                    <span class="hidden-sm-up"><i class="ti-layers-alt"></i></span> 
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


        <!------------------------- Tab panes ------------------------->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="medical_investigation" role="tabpanel">
                @include('medical.MedicalServices.Investigation.internalDocument.moei.employabilityReport')
            </div>
            <div class="tab-pane p-20" id="support_doc_investigation" role="tabpanel">
                @include('general.supportingDocument.uploadDoc')
            </div>

        </div>
    </div>
</div>
@endsection
