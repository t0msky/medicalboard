@extends('general.layouts.app')
@section('head')
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row p-12">
            <div class="col-md-12">
                <h4 class="card-title">@lang('CAMPAIGN')</h4>
            </div>
        </div>

        <!----------------- NAV TABS ----------------------->
        
        <ul class="nav nav nav-tabs" role="tablist" id="tabMenu">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#cc" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Create Campaign')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cn" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Campaign Notes')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pr" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Prepare Report')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sd" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Supporting Document')</span>
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

        <!--------------------- Tab panes ------------------------>
        
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="cc" role="tabpanel">
                @include('medical.MedicalServices.general.opinion.campaign.createCampaign')

            </div>
             <div class="tab-pane p-20" id="cn" role="tabpanel">
                @include('medical.MedicalServices.general.opinion.campaign.campaignNotes') 

            </div>
            <div class="tab-pane p-20" id="pr" role="tabpanel">
                @include('medical.MedicalServices.general.opinion.campaign.prepareReport') 

            </div> 
            <div class="tab-pane p-20" id="sd" role="tabpanel">
                @include('general.supportingDocument.uploadDoc') 
            </div>
            
        </div>
    </div>
</div>

@endsection
