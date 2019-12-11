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
                            <!-- ================================== CASE INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInformation" aria-expanded="false" aria-controls="caseInformation">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Case Information </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="caseInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row p-t-20">
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.caseCategory')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.scheme_ref_no')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.typeOfScheme')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.SPIeligible')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.notice_type')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.notice_date')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.accident_date')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.form34_date')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.registrationDate')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.socsoRegistrationOffice')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.general.collapse.case_info.socsoOffice')</span>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification Type
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idtype }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification No
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->idno != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->idno != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idno }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Sub Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->suboccucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucode }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->suboccucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
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
                                                    @if(!empty($obprofile) && $obprofile->suboccucodelist != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->suboccucodelist != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    State
                                                </div>
                                                <div class="col-sm-9">
                                                    {{-- @if(!empty($obprofile) && $obprofile->state != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->state }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->state != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->state }}"  disabled style="background-color:transparent">
                                                    @else --}}
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Nationality
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->nationality != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->nationality }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
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
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information</h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    {{-- <h5 class="card-title">Employer Information</h5>
                                    <hr class="m-t-0 m-b-40"> --}}
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    State
                                                </div>
                                                <div class="col-sm-9">
                                                    {{-- @if(!empty($emprecord) && $emprecord->state_code != '')
                                                    <input type="text" class="form-control-preview" value="{{$emprecord->state_code}},{{$emprecord->add2}},{{$emprecord->add3}}" disabled style="background-color:transparent">
                                                    @elseif(!empty($employer) && $employer->state_code != '')
                                                    <input type="text" class="form-control-preview" value="{{$employer->state_code}},{{$employer->add2}},{{$employer->add3}}" disabled style="background-color:transparent">
                                                    @else --}}
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfo" aria-expanded="false" aria-controls="wagesInfo">
                                                    <h6 class="card-title"><i class="fa fa-plus"></i> Wages Information </h4>
                                            </a>
                                    </h6>
                                </div>
                                <div id="wagesInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Employer Code
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Employer Name
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                        Employment Start Date
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                        Employment End Date
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                        Details of Wages for the Period of 6 Consecutive Months Before the Month of Death
                                                </div>
                                                <div class="col-md-12">
                                                    <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                        <thead>
                                                            <tr>
                                                                <th data-breakpoints="xs">@lang('table-header.wages.num')</th>
                                                                <th>@lang('table-header.wages.year')</th>
                                                                <th>@lang('table-header.wages.month')</th>
                                                                <th data-breakpoints="xs sm">@lang('table-header.wages.wages')</th>
                                                                <th data-breakpoints="xs">@lang('table-header.wages.contribution_paid')</th>
                                                                <th data-breakpoints="xs">Contribution Payable (RM)</th>
                                                                <th data-breakpoints="xs">Contribution Surplus</th>
                                                                <th data-breakpoints="xs">Reject</th>
                                                                <th data-breakpoints="xs">Reason</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-expanded="true">
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr> 
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- ================================== DEATH INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#deathInfo" aria-expanded="false" aria-controls="deathInfo">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Death Information </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="deathInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    @lang('scheme/deathDetails.attr.cause_death')                                            
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    @lang('scheme/deathDetails.attr.status')
                                                    </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="Divorced" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    @lang('scheme/deathDetails.attr.periodical')                                            
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="No" disabled style="background-color:white">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                               
                            
                                    <!-- ------------------------------------- If the death due to accident = Yes --------------------------------------------------- -->
                                    @if(Session::get('select_death_accident') == 'Yes')
                                    <div class="card-body">
                                        <h6 class="card-title-sub">@lang('scheme/accidentDetails.title')</h6>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Accident Date
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if (!empty($accinfo))
                                                        <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                                        @else

                                                        @if (Session::get('accddate'))
                                            
                                                        <input type="text" class="form-control-preview" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" disabled style="background-color:white">
                                                        @else
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Accident Time
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if (!empty($accinfo))
                                                        <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                                        @else
                                                        @if (Session::get('accdtime'))
                                                        <input type="text" class="form-control-preview" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}" disabled style="background-color:white">
                                                        @else
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Place of Accident
                                                    </div>
                                                    <div class="col-sm-9">
                                                        {{-- @foreach($accdplace as $AccPlace)
                                                        @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code) --}}
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                        {{-- @endif
                                                        @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        When Accident Happen?
                                                    </div>
                                                    <div class="col-sm-9">
                                                        {{-- @foreach($accdplace as $AccWhen)
                                                        @if (!empty($accinfo) && $accinfo->place == $AccWhen->ref_code) --}}
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                        {{-- @endif
                                                        @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        How the Accident Happened?
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->how}} @endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Reason for Travelling on The Day of Accident (For road accident only)
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($accinfo)&&$accinfo->reasontravel)
                                                        <input type="text" class="form-control-preview" value="{{$accinfo->reasontravel}}" disabled style="background-color:white">
                                                        @else
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Injury Description
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Is Accident Date a Working Day For The Insured Person
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Start Working Time on Accident Day
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Time Of Recess On The Accident Date
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Ending Time of Work on The Accident Date
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Name of Witness(If any)
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Witness Phone No.
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                            Name and Address of Clinic Which Provides First Treatment
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif" disabled style="background-color:white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- -------------------------------------------------   MC DETAILS ------------------------------------------------------- -->
                                        <div class="form-body" id="container">
                                            <h6 class="card-title-sub">@lang('scheme/mc.title')</h6>
                                            <hr>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12" id="container">
                                                        <div class="table-responsive" id="table-medical">
                                                            <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                                                <thead>
                                                                    <tr>
                                                                        <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                                                        <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                                                        <th style='width:17%'>@lang('scheme/mc.attr.start_date')</th>
                                                                        <th style='width:18%'>@lang('scheme/mc.attr.end_date')</th>
                                                                        <th style='width:15%'>@lang('scheme/mc.attr.days_work')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                                                        <td>
                                                                            <div class="col-md-12">

                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-12">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-12">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-12">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>     
                                                            <label class="control-label" id='lblmcerror0' style='color:red'></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div id="add_mc_accordian">
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <!-- ================================== DEPENDANT INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#dependantInfo" aria-expanded="false" aria-controls="dependantInfo">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Dependant Information </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="dependantInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">Dependant Information Available?</span>
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->name != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->name }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->name != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->name }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value="YES" disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="row p-t-20">
                                                <div class="table-responsive m-t-40">
                                                    <table id="tableDependent" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Dependant Name</th>
                                                                <th>ID No</th>
                                                                <th>Date of Birth</th>
                                                                <th>Relationship</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ================================== FPM RECOMMENDATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#applicantInfo" aria-expanded="false" aria-controls="applicantInfo">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> FPM Recommendation </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="applicantInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="col-10-applicant">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive m-t-40">
                                                    <table id="tableClaimant" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th width="40%">Name</th>
                                                                <th>Identification No</th>
                                                                <th>Date Of Birth</th>
                                                                <th>Relationship</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class='align-middle'>
                                                            {{-- @if (!empty($applicantinfo))
                                                            @if (count($applicantinfo) == 0)
                                                            <td>No record</td>
                                                            @else
                                                            @foreach ($applicantinfo as $wb) --}}
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>    
                                                </div>        
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ================================== SCHEME QUALIFYING INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#schemeQualifying" aria-expanded="false" aria-controls="schemeQualifying">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Scheme Qualifying Information </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="schemeQualifying" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row p-t-20">
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.entry_date')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.age_entry_date')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.statutory_body')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">Statutory Body Type</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.start_date')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.end_date')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_entry_death')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_contributed')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.qualifying_condition')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.pension')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('Benefit Reference No')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.while_receiving_fhus')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.fhus_benefit_ref_no')</span>
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
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.fhuk_periodical_receiver')</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">@lang('form/scheme.notice_death.SCO.scheme_q.fhuk_benefit_ref_no')</span>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ================================== CONTRIBUTION SECTION 56 ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#section56" aria-expanded="false" aria-controls="section56">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Contributions Based on Section 56 </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="section56" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                                        data-toggle-column="first">
                                                        <thead>
                                                            <tr>
                                                                <th width="1%">@lang('scheme/wages.attr.num')</th>
                                                                <th width="10%">@lang('Employer Code')</th>
                                                                <th>@lang('Employer Name')</th>
                                                                <th width="9%">@lang('Action')</th>
                                                                <th width="17%">@lang('Recommendation Status')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-expanded="true">
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
</div>
@endsection