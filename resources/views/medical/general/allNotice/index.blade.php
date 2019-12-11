@extends('general.layouts.app')
@section('head')
@endsection
@section('content')
<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="row p-12">
            <div class="col-md-12">
                @if ($casetype == '1')
                <h4 class="card-title">@lang('Accident')</h4>
                @elseif ($casetype == '2')
                <h4 class="card-title">@lang('Occupacational Disease')</h4>
                @elseif ($casetype == '3')
                <h4 class="card-title">@lang('Invalidity')</h4>
                @else
                <h4 class="card-title">@lang('Death')</h4>
                @endif
            </div>
        </div>

        <!------------------- Nav tabs -------------------->
        
        <ul class="nav nav nav-tabs" role="tablist" id="tabMenu">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#fact_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Case Fact Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#current_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Current Case Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#benefit_case" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('History Info')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supporting_document" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medical_view" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('Decision')</span>
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

        <!----------------- Tab panes ------------------>

        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="fact_case" role="tabpanel">
                @include('medical.general.allNotice.collapseCaseFact')
            </div>

            <div class="tab-pane p-20" id="current_case" role="tabpanel">
                @include('medical.general.allNotice.collapseCurrentCase')
               
            </div>

            <div class="tab-pane p-20" id="benefit_case" role="tabpanel">
                @include('medical.general.allNotice.collapseHistory')
                
            </div>
         
            <div class="tab-pane p-20" id="supporting_document" role="tabpanel">
                <div id="accordion2" role="tablist" class="accordion">
                    @include('general.supportingDocument.uploadDoc')
                </div>
            </div>

            <div class="tab-pane p-20" id="medical_view" role="tabpanel">
                @include('medical.MedicalServices.general.decision')
            </div>

        </div>
    </div> 
 </div>

@endsection
