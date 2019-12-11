@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<!-- Column -->
<div class="my-3 my-md-5">
    <div class="row" >
        <div class="col-lg-12">
            <div class="row" id="rowindex">
                <div class="col-md-12 col-lg-4 offset-lg-8">
                    <span class="title-beside-green">Preview</span>
                    <div class="card text-left" id="cardindex">
                        <div class="card-body" id="cardbodyaccident">
                            <table>
                                <thead>
                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label></td>
                                    </tr>
                                    <tr>
                                        <td><label></label></td>
                                    </tr>

                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- ================================== REQUEST QUOTATION ================================ -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">Form 34 Received Date</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="03/09/2019" disabled style="background-color:transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="accordion2" role="tablist" class="accordion" >
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#RequestQuotation" aria-expanded="false" aria-controls="RequestQuotation">
                                            <h4 class="card-title"><i class="fa fa-plus"></i> Request Quotation</h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="RequestQuotation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    @include('medical.MedicalServices.Investigation.specialReport.abppp.preview.requestQuo')
                                </div>
                            </div>
                        </div>
                        <!-- ================================== UPLOAD QUOTATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#UploadQuotation" aria-expanded="false" aria-controls="UploadQuotation">
                                            <h4 class="card-title"><i class="fa fa-plus"></i> Upload Quotation</h4>
                                    </a>
                                </h6>
                            </div>
                            <div id="UploadQuotation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                @include('medical.MedicalServices.Investigation.specialReport.abppp.preview.uploadQuo')
                            </div>
                        </div>
                        <!-- ================================== UPLOAD INVOICE AND REPORT ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#UploadInvoice" aria-expanded="false" aria-controls="UploadInvoice">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>Upload Invoice & Report</h4>
                                    </a>
                                </h6>
                            </div>
                            <div id="UploadInvoice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                @include('medical.MedicalServices.Investigation.specialReport.abppp.preview.uploadinv')
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-actions">
                                    <button type="submit" name="action" value="Submit" class="btn btn waves-effect waves-light btn-success" >SUBMIT</button>
                                    <button type="submit" name="action" value="Back"  class="btn btn waves-effect waves-light btn-info" onclick="submitform()">BACK</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
