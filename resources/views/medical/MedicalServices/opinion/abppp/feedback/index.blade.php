@extends('general.layouts.app')
@section('head')
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="card-title">@lang('ABPPP')</h4>
    
        <!-- Nav tabs -->
        <ul class="nav nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#list" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Committee Decision')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#feedback" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Feedback(ABPPP)')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#feedback2" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Feedback')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supDoc" role="tab">
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
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><label>Identification No.</label></th>
                                    <th>:</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><label>Scheme Reference No.</label></th>
                                    <th>:</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><label>MO Reference No.</label></th>
                                    <th>:</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    <!-- Tab panes -->
        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="list" role="tabpanel">
                    @include('medical.MedicalServices.opinion.abppp.feedback.resultOfDecision')
            </div>
                    
            <div class="tab-pane p-20" id="feedback" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.feedback.feedback')
            </div>

            <div class="tab-pane p-20 " id="feedback2" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.feedback.feedbackGeneral')
            </div>

            <div class="tab-pane p-20 " id="supDoc" role="tabpanel">
                @include('general.supportingDocument.uploadDoc')
            </div>

        </div>
    </div>
</div>

@endsection
