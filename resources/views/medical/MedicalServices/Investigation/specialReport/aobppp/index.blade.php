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
                <h4 class="card-title">@lang('Investigation : Special Report')</h4>
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            {{-- <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#invoice_approval" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Invoice Approval')</span>
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#quotation_approval" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Quotation Approval')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#approval_invoice" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                        class="hidden-xs-down">@lang('Invoice & Report Approval')</span>
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

        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
{{-- 
            <div class="tab-pane p-20 active" id="invoice_approval" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.aobppp.invoiceApproval')
            </div> --}}

            <div class="tab-pane p-20 active" id="quotation_approval" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.aobppp.quotationApproval')
            </div>

            <div class="tab-pane p-20" id="approval_invoice" role="tabpanel">
                @include('medical.MedicalServices.Investigation.specialReport.aobppp.approvalInvoice')
            </div>
        </div>
    </div>
</div>
@endsection
