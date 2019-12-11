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

            <!-- ================================== INSURED PERSON INFORMATION ================================ -->
            <div class="card">
                <div class="card-body">
                <form action="{{route('accident.success')}}" method="POST">
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
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0">
                                            <h4 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">Name</span>
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->name != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->name }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->name != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->name }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification Type
                                                </div>
                                                <div class="col-sm-9">
                                                        {{-- @if(!empty($obprofile) && $obprofile->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idtype }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification No
                                                </div>
                                                <div class="col-sm-9">
                                                        {{-- @if(!empty($obprofile) && $obprofile->idno != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->idno != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idno }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Date of Birth
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->dob != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->dob }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->dob != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->dob }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Race
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->race != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->race }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->race != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->race }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Gender
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->gender != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->gender }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->gender != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->gender }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation (Based on Form 34)
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->occupation != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->occupation }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->occucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->occucode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Sub Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) )
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucode }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->sub_occucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile))
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->sub_occucode_list != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Address
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->add1 != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->add1 }},{{ $obprofile->add2 }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->add1 != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->add1 }},{{ $obformassist->add2 }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    State
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->statecode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->statecode }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->statecode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->statecode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    City
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->city != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->city }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->city != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->city }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Postcode
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->postcode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->postcode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    P.O Box
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->pobox != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->pobox }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Locked Bag
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->lockedbag }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    W.D.T
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->wdt != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->wdt }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    House Telephone No.
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->telno != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->telno }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Mobile No.
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->mobileno != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->mobileno }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Email Address
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->email != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->email }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Nationality
                                                </div>
                                                <div class="col-sm-9">
                                                    {{-- @if (!empty($obprofile) && $obprofile->nationality == $N->ref_code)
                                                    <input type="text" class="form-control-preview" value="{{$N->desc_en}}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- ================================== EMPLOYER INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#EmployerInformation" aria-expanded="false" aria-controls="EmployerInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Employer Information</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                {{-- <h5 class="card-title">Employer Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                <span class="no_bold">Employer Code</span>
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->empcode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->empcode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->empcode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->empcode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->empname != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->empname}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->empname != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->empname}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->bussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->bussentity}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->bussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->bussentity}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subbussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subbussentity}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subbussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subbussentity}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity List
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subbussentitylist != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subbussentitylist}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subbussentitylist != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subbussentitylist}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Service Type
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->servicetype != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->servicetype}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->servicetype != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->servicetype}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Industry Code
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->indscode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->indscode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->indscode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->indscode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Industry Code List
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subindscodelist != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subindscodelist}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subindscodelist != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subindscodelist}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Address
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->add1 != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->add1}},{{$emprecord->add2}},{{$emprecord->add3}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->add1 != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->add1}},{{$employer->add2}},{{$employer->add3}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->statecode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->statecode}},{{$emprecord->add2}},{{$emprecord->add3}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->statecode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->statecode}},{{$employer->add2}},{{$employer->add3}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                    @if(!empty($emprecord) && $emprecord->city != '')
                                                    <input type="text" class="form-control-preview" value="{{$emprecord->city}}" disabled style="background-color:transparent">
                                                    @elseif(!empty($employer) && $employer->city != '')
                                                    <input type="text" class="form-control-preview" value="{{$employer->city}}" disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Postcode
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->postcode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->postcode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->postcode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->postcode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                P.O Box
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->pobox != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->pobox}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->pobox != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->pobox}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Locked Bag
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->lockedbag}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->lockedbag != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->lockedbag}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                W.D.T
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->wdt != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->wdt}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->wdt != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->wdt}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Telephone No.
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->telno != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->telno}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->phoneno != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->phoneno}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Fax No.
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->faxno != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->faxno}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->phoneno != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->faxno}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Email Address
                                            </div>
                                            <div class="col-sm-9">
                                                    @if(!empty($emprecord) && $emprecord->email != '')
                                                    <input type="text" class="form-control-preview" value="{{$emprecord->email}}" disabled style="background-color:transparent">
                                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                                    <input type="text" class="form-control-preview" value="{{$employer->email}}" disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                         <!-- ================================== WAGES INFORMATION ================================ -->
                    
                        <!-- ================================== SOCSO OFFICE  ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socsoOffice" aria-expanded="false" aria-controls="socsoOffice">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> SOCSO Office </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="socsoOffice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== CERTIFICATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificationEmployer" aria-expanded="false" aria-controls="certificationEmployer">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Certification By Employer </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="certificationEmployer" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Designation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== BANK ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInformation" aria-expanded="false" aria-controls="bankInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Bank Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="bankInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Payment Mode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="EFT" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Location
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Johor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="CIMB Bank" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="765432346" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Account
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Overseas Bank Account Type
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Country
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Currency
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Swift Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                BSB Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Overseas Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== CONFIRMATION  ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="confirmation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i>Confirmation of Insured Person/Dependant/Claimant </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Acceptance Stamp Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Completion Completed?
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Remark
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>

<script>
    //redirect to specific tab
    $(document).ready(function () {
    //$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

</script>

@endsection