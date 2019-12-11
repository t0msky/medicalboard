@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-3 my-md-5">
    <div class="container">
        
        <div class="row">
            <!--div class="col-12"-->

                <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                    <h3 class="card-title">RECORD IS SUCCESSFULLY SUBMITTED</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <label class="form-label">{{Session::get('messageconf')}} </label>
                    
                </div>
                <div class="card-footer text-right">
                    <div class="d-flex">
                      <a href="./home" class="btn btn-link">Cancel</a>

                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
        <!-- row -->
 @endsection
