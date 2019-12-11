{{-- @extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

<!-- Column -->
<div class="my-3 my-md-5">
    <div class="row" >
        <div class="col-lg-12">
            <div class="row" id="rowindex">
                <div class="col-md-12">
                    <span class="title-beside-green">Preview</span>
                    <div class="col-md-4 offset-md-8">
                        <div class="card text-left" id="cardindex">
                            <div class="card-body" id="cardbodydeath">
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
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/back" method="POST"> 
                        <div class="row p-t-20">
                            <div class="col-md-4">
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
                            <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">Name</span>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification Type
                                                </div>
                                                <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification No
                                                </div>
                                                <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Date of Birth
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Race
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Gender
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation (Based on Form 34)
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Sub Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Address
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    State
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    City
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Postcode
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    P.O Box
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Locked Bag
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    W.D.T
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    House Telephone No.
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Mobile No.
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Email Address
                                                </div>
                                                <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Nationality
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
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
    </div>
</div> --}}
