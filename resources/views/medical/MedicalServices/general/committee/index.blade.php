@extends('general.layouts.app')
@section('head')
@endsection
@section('content')


<!--------------- ROW  -------------------------->
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
        <h4 class="card-title">@lang('COMMITTEE')</h4>

         <!-------------- Nav tabs ------------------------->

         <ul class="nav nav-tabs" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#committees" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('List Of Insured Person')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#facts" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Fact Case Info')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#currents" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Current Case Info')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#historys" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('History Info')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supDoc" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#feedbacks" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Query & Feedback')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#recommendations" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Recommendation')</span>
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

        <!------------------ Tab panes ----------------->

        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="committees" role="tabpanel">
                @include('medical.MedicalServices.general.committee.listOB')
            </div>
            <div class="tab-pane p-20 " id="facts" role="tabpanel">
                @include('medical.general.allNotice.collapseCaseFact')

            </div>
            <div class="tab-pane p-20 " id="currents" role="tabpanel">
                @include('medical.general.allNotice.collapseCurrentCase')
            </div>
            <div class="tab-pane p-20 " id="historys" role="tabpanel">
                @include('medical.MedicalServices.general.committee.collapseHistoryCommitee')
            </div>
            <div class="tab-pane p-20 " id="supDoc" role="tabpanel">
                @include('general.supportingDocument.uploadDoc')
            </div>
            <div class="tab-pane p-20 " id="feedbacks" role="tabpanel">
                @include('medical.MedicalServices.general.committee.queryFeedback')
            </div>
            <div class="tab-pane p-20 " id="recommendations" role="tabpanel">
                @include('medical.MedicalServices.general.committee.recommendation')
            </div>

        </div>
    </div>
</div>
</div>

@endsection
