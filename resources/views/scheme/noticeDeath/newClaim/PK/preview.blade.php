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
                    {{-- <form action="{{route('death.success')}}" method="POST"> --}}
                        @csrf
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">Form 34 Received Date</span>
                                    </div>
                                    <div class="col-sm-9">
                                        @if ((!empty($obprofile)||$obprofile!=null))
                                        <input type="text" class="form-control-preview"name="f34recvdate" value="{{$obprofile->f34recvdate}}" disabled style="background-color:transparent">
                                        @else
                                        <input type="text" class="form-control-preview"name="f34recvdate" value="" disabled style="background-color:transparent">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"><br>
                            <div class="form-group col-md-12 col-lg-3">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Form 34 Submission By')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control clearFields" name="f34submitby" id="f34submitby">
                                            <option hidden disabled value="please select" selected>@lang('Please Select')</option>
                                            @if(!empty($ref_table)|| $reftable!=null )
                                            @foreach($ref_table->f34submitby as $f34)
                                            @if ((!empty($obprofile)||$obprofile!=null)&& $obprofile->f34submitby == $f34->ref_code)
                                            <option value="{{$f34->ref_code}}" selected>{{$f34->desc_en}}</option>
                                            @else
                                            <option value="{{$f34->ref_code}}">{{$f34->desc_en}}</option>
                                            @endif
                                            @endforeach
                                            @endif
                                        </select>
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
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="card-body">
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
                                                        {{-- @if ((!empty($obprofile)||$obprofile!=null))
                                                        @foreach($obprofile->idinfo as $idx=> $ic)
                                                        <input type="text" class="form-control-preview" value="{{$ic->idtype}}" disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endforeach
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
                                                        {{-- @if ((!empty($obprofile)||$obprofile!=null))
                                                        @foreach($obprofile->idinfo as $idx=> $ic)
                                                        <input type="text" class="form-control-preview" value="{{$ic->idno}}" disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endforeach
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
                                                        @if (!empty($obprofile)||$obprofile!=null)
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->dob }}"  disabled style="background-color:transparent">
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
                                                        {{-- @if(!empty($obprofile) && $obprofile->sub_occucode != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->sub_occucode }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->sub_occucode != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->sub_occucode }}"  disabled style="background-color:transparent">
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
                                                        Occupation
                                                    </div>
                                                    <div class="col-sm-9">
                                                        {{-- @if(!empty($obprofile) && $obprofile->sub_occucode_list != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->sub_occucode_list }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->sub_occucode_list != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->sub_occucode_list }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif --}}
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
                                                        {{-- @if(!empty($obprofile) && $obprofile->state_code != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->state_code }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->state_code != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->state_code }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif --}}
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
                                                        {{-- @if(!empty($obprofile) && $obprofile->locked_bag != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->locked_bag }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        W.D.T
                                                    </div>
                                                    <div class="col-sm-9">
                                                        {{-- @if(!empty($obprofile) && $obprofile->wdt != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->wdt }}"  disabled style="background-color:transparent">
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
                            </div>
                            <!-- ================================== EMPLOYER INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#EmployerInformation" aria-expanded="false" aria-controls="EmployerInformation">
                                                    <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information</h6>
                                            </a>
                                    </h6>
                                </div>
                                <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    {{-- <h5 class="card-title">Employer Information</h5>
                                    <hr class="m-t-0 m-b-40"> --}}
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        <span class="no_bold">Employer Code</span>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($empinfo) && !empty($empinfo->empcode))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->empcode}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->empname))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->empname}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->bussentity))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->bussentity}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->subbussentity))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->subbussentity}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->subbussentitylist))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->subbussentitylist}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->servicetype))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->servicetype}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->indscode))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->indscode}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->subindscodelist))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->subindscodelist}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && !empty($empinfo->add1))
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->add1}} {{$empinfo->add2}} {{$empinfo->add3}}" disabled style="background-color:transparent">
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
                                                        {{-- @foreach($ref_table->state as $s)
                                                            @if(!empty($empinfo) && $empinfo->statecode == $s->ref_code)
                                                                <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                                            @else
                                                                <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                            @endif
                                                        @endforeach --}}
                                                        {{-- @if(!empty($empinfo) && $empinfo->statecode == $s->ref_code)
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->statecode}}" disabled style="background-color:transparent">
                                                        @elseif(!empty($employer) && $employer->statecode != '')
                                                        <input type="text" class="form-control-preview" value="{{$employer->statecode}}" disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                        @endif --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        City
                                                    </div>
                                                    <div class="col-sm-9">
                                                            @if(!empty($empinfo) && $empinfo->city != '')
                                                            <input type="text" class="form-control-preview" value="{{$empinfo->city}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->postcode != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->postcode}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->pobox != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->pobox}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->lockedbag != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->lockedbag}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->wdt != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->wdt}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->telno != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->telno}}" disabled style="background-color:transparent">
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
                                                        @if(!empty($empinfo) && $empinfo->faxno != '')
                                                        <input type="text" class="form-control-preview" value="{{$empinfo->faxno}}" disabled style="background-color:transparent">
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
                                                            @if(!empty($empinfo) && $empinfo->email != '')
                                                            <input type="text" class="form-control-preview" value="{{$empinfo->email}}" disabled style="background-color:transparent">
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
                                    <div class="card-body">
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
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        @lang('Date of Death')                                            
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if ((!empty($deathdetail)||$deathdetail!=null))
                                                        <input type="text" id="dodeath" name="dodeath" value="{{ $deathdetail->dodeath }}" disabled style="background-color:white" class="form-control-preview" >
                                                        @else
                                                        <input type="text" id="dodeath" name="dodeath" value="" disabled style="background-color:white" class="form-control-preview">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        @lang('Cause Of Death')                                            
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if ((!empty($deathdetail)||$deathdetail!=null))
                                                        <input type="text" id="dodeath" name="dodeath" value="{{ $deathdetail->deathcause }}" disabled style="background-color:white" class="form-control-preview" >
                                                        @else
                                                        <input type="text" id="deathcause" name="deathcause" value="" disabled style="background-color:white" class="form-control-preview">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        @lang('Marital Status of Insured Person')
                                                        </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($deathdetail)||$deathdetail!=null)
                                                        @foreach($ref_table->marital_sts as $id)
                                                        @if ((!empty($deathdetail) ||$deathdetail!=null) && $deathdetail->obsts == $id->ref_code)
                                                        <input type="text" class="form-control-preview" value="{{$id->desc_en}}" disabled style="background-color:white">
                                                        @endif
                                                        @endforeach
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
                                                        @lang('Periodical Payment Receiver?')                                            
                                                    </div>
                                                    <div class="col-sm-9">
                                                            @if ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='N')
                                                            <input type="text" id="periodical" name="periodical" value="No" class="form-control-preview" disabled style="background-color:white">
                                                            @elseif ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='Y')
                                                            <input type="text" id="periodical" name="periodical" value="Yes" class="form-control-preview" disabled style="background-color:white">
                                                          @endif
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
                                    <div class="card-body">
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
                            </div>
                            <!-- ================================== APPLICANT INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#applicantInfo" aria-expanded="false" aria-controls="applicantInfo">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Applicant Information </h4>
                                        </a>
                                    </h6>
                                </div>
                                <div id="applicantInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="card-body">
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
                                                                    <td>No records</td>
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
                            <!-- ================================== SOCSO INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socsoOffice" aria-expanded="false" aria-controls="socsoOffice">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> SOCSO Office </h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="socsoOffice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        State
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($state)||$state!=null)
                                                        @foreach($state as $s)
                                                        @if(!empty($socso) && $socso->statecode == $s->ref_code)
                                                        <input type="text" class="form-control-preview" value="{{$s->name}}" disabled style="background-color:white">
                                                        @endif
                                                        @endforeach
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
                                                        @if(!empty($socso)||$socso!=null)
                                                        @foreach($state as $s)
                                                        @if($socso->statecode == $s->ref_code)
                                                        @foreach($s->branch as $branch)
                                                        @if($socso->preferredbrcode == $branch->code)
                                                        <input type="text" class="form-control-preview" value="{{$branch->name}}" disabled style="background-color:white">
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </div>
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
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Certification By Employer </h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="certificationEmployer" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Name
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($certificate) ||$certificate!=null)
                                                        <input type="text" id="emprepname" name="emprepname" value="{{$certificate->emprepname}}" class="form-control-preview" disabled style="background-color:white">
                                                        @else
                                                        <input type="text" id="emprepname" name="emprepname" value="" class="form-control-preview"  disabled style="background-color:white">
                                                        @endif
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
                                                        @if(!empty($certificate) ||$certificate!=null)
                                                        <input type="text" id="emprepdes" name="emprepdes" value="{{$certificate->emprepdes}}" class="form-control-preview" disabled style="background-color:white">
                                                        @else
                                                        <input type="text" id="emprepdes" name="emprepdes" value="" class="form-control-preview" disabled style="background-color:white">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group-preview row">
                                                    <div class="col-sm-9 label-preview">
                                                        Date
                                                    </div>
                                                    <div class="col-sm-9">
                                                        @if(!empty($certificate) ||$certificate!=null)
                                                        <input type="date" id="emprepdate" name="emprepdate" value="{{$certificate->emprepdate}}" class="form-control-preview" disabled style="background-color:white">
                                                        @else
                                                        <input type="date" id="emprepdate" name="emprepdate" value="" class="form-control-preview" disabled style="background-color:white">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
           </div>
        </div>
    </div>
</div>
@endsection