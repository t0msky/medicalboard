@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-5 my-md-7">
    <div class="container">
        <form action="/backhome" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="greyGroup text-center">
                      <div class="row">
                        <div class="col-md-5 messageScreen">
                            <br><br><br>
                            <h3 class="text-center">
                                <img src="/images/logo-beams-01.png" style="width:150px;height:150px;"><br>
                                <b>Alert Message</b>
                            </h3>
                        </div>
                        <div class="col-md-5 messageScreenKanan">
                            <div class=" text-right">
                                <div class="card-body"><br><br>
                                    <div class="row">
                                        <h3 class="text-center" style="margin-left:30px;"><b>Case has been submitted successfully</b></h3>
                                    </div>
                                    <div class='row' style="margin-left:30px;">
                                        <label class="form-label" ><br>
                                            <h4>Scheme Ref No:</h4>
                                        </label>
                                        <label class="form-label">
                                            <h4><strong>{{Session::get('schemerefno')}}</strong></h4>
                                        </label>
                                    </div>
                                    <div class='row' style="margin-left:30px;">
                                        <label class="form-label" >
                                            <h4>Case Status:</h4>
                                        </label>
                                        @if (Session::get('casestatus') == '02')
                                        <label class="form-label">
                                            <h4><strong>New</strong></h4>
                                        </label>
                                        @elseif (Session::get('casestatus') == '100')
                                        <label class="form-label">
                                            <h5><strong>Closed</strong></h5>
                                        </label>
                                        @endif
                                    </div>
                                
                                    <div class="d-flex">
                                        <!--a href="./home" class="btn btn-success">OK</a-->
                                        <button type="submit" class="btn btn-success" style="width:100px;height:50px;position:absolute;right:40px;">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- row -->
@endsection
