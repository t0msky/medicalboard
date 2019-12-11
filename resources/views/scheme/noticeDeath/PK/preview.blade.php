@extends('layouts.app')

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
            <div class="card">
                <div class="card-body">
                    <form action="/back" method="POST"> 
                        <h5 class="card-title">@lang('insuredPerson.title')</h5>
                        <hr class="m-t-0 m-b-40">
                            <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label"><label>@lang('insuredPerson.attr.name')</label></td>
                                    <td>:</td>
                                    <td>
                                            @if(!empty($obprofile) && $obprofile->name !='')
                                            {{ $obprofile->name }}
                                            @elseif(!empty($obformassist) && $obformassist->name !='')
                                            {{ $obformassist->name }}
                                            @else
                                            @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"><label>@lang('insuredPerson.attr.id_type')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        @foreach($idtype as $id)
                                            @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                            {{$id->descen}}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.id_no')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($obprofile) && $obprofile->idno !='')
                                                {{ $obprofile->idno }}
                                                @elseif(!empty($obformassist) && $obformassist->idno !='')
                                            {{ $obformassist->idno }}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.dateOfBirth')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($obprofile) && $obprofile->dob !='')
                                                {{substr($obprofile->dob,6,2)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,0,4)}}
                                                @elseif(!empty($obformassist) && $obformassist->dob !='')
                                                {{substr($obformassist->dob,6,2)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,0,4)}}
                                                @else
                                                @endif
                                        </td>  
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.race')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                            @foreach($race as $id)
                                                @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                                {{$id->descen}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.gender')</label></td>
                                        <td>:</td>
                                    <td class="control-label text-left" > 
                                        {{-- {{$obprofile->gender}} --}}
                                        @if (!empty($obprofile) && $obprofile->gender == "F")
                                            Female
                                            @elseif(!empty($obprofile) && $obprofile->gender == "M")
                                            Male
                                            @else
                                            @endif
                                        {{-- @if (!empty($obprofile) && $obprofile->gender == "F")
                                                <label class="control-label text-right ">Female</label>
                                        @else
                                                <label class="control-label text-right ">Male</label>
                                        @endif  --}}
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.occupation')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                            @if(!empty($obprofile)){{ $obprofile->occupation }} @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.postal_address')</label></td>
                                        <td>:</td>
                                        <td class="control-label" >
                                                <label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add1 }} @endif</label>
                                                {{-- <br><label class="control-label text-right ">{{ $obprofile->add2 }} </label>
                                                <br><label class="control-label text-right ">{{ $obprofile->add3 }}  </label> --}}
                                                    
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.city')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($obprofile)){{ $obprofile->city }} @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add2 }} @endif</label></td>
                                        <td></td>
                                    
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.state')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                            @foreach($state as $s)
                                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                            {{$s->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add3 }} @endif</label></td>
                                        
                                </tr>
                                <tr>    
                                    <td class="control-label"><label>@lang('insuredPerson.attr.postcode')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            @if(!empty($obprofile)){{ $obprofile->postcode }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"><label>@lang('insuredPerson.attr.pobox')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile)){{ $obprofile->pobox }} @endif
                                    </td>
                                    
                                    
                                </tr>
                                <tr>    
                                        <td class="control-label"><label>@lang('insuredPerson.attr.lockedbag')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($obprofile)){{ $obprofile->lockedbag }} @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.wdt')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($obprofile)){{ $obprofile->wdt }} @endif
                                        </td>
                                        
                                        
                                </tr>
                                <tr>    
                                        <td class="control-label"><label>@lang('insuredPerson.attr.mobileNo')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->mobileno }} @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.telNo')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->telno }} @endif
                                        </td>
                                        
                                </tr>
                                <tr>    
                                        <td class="control-label"><label>@lang('insuredPerson.attr.email')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->email }} @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.citizen')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                <label class="control-label text-right ">
                                                        @foreach($national as $N)
                                                        @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                                        {{$N->descen}}
                                                        @endif
                                                        @endforeach
                                                    </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                </tr>
                            </table><br/> 
                        <h5 class="card-title"><label>@lang('employerDetails.title')</label></h5>
                        <hr class="m-t-0 m-b-40">
                            <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label"><label>@lang('employerDetails.attr.employerCode')</label></td>
                                    <td>:</td>
                                    <td><label class="control-label text-right ">
                                            @if(!empty($emprecord) && $emprecord->empcode != '')
                                            {{$emprecord->empcode}}
                                            @elseif(!empty($employer) && $employer->empcode != '')
                                            {{$employer->empcode}}
                                            @else
                                            @endif
                                    </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"><label>@lang('employerDetails.attr.employerType')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            @foreach ($emptype as $et)
                                            @if (!empty($emprecord) && $emprecord->emptype == $et->refcode )
                                                {{$et->descen}}
                                            @endif
                                            @endforeach
                                    </td>
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.employerName')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($emprecord) && $emprecord->empname != '')
                                                {{$emprecord->empname}}
                                                @elseif(!empty($employer) && $employer->empname != '')
                                                {{$employer->empname}}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('employerDetails.attr.postal_address')</label></td>
                                        <td>:</td>
                                        <td class="control-label" >
                                            <label class="control-label text-right ">
                                                    @if(!empty($emprecord) && $emprecord->add1 != '')
                                                    {{$emprecord->add1}}
                                                    @elseif(!empty($employer) && $employer->add1 != '')
                                                    {{$employer->add1}}
                                                    @else
                                                    @endif
                                            </label>
                                        </td> 
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.postcode')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($emprecord) && $emprecord->postcode != '')
                                                {{$emprecord->postcode}}
                                                @elseif(!empty($employer) && $employer->add3 != '')
                                                {{$employer->postcode}}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td> @if(!empty($emprecord) && $emprecord->add2 != '')
                                                {{$emprecord->add1}}
                                                @elseif(!empty($employer) && $employer->add2 != '')
                                                {{$employer->add2}}
                                                @else
                                                @endif
                                            </td>
                                        
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.state')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @foreach($state as $id)
                                                @if (!empty($emprecord) && $emprecord->statecode == $id->refcode)
                                                {{$id->descen}}
                                                @endif
                                                @endforeach
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                                @if(!empty($emprecord) && $emprecord->add3 != '')
                                                {{$emprecord->add3}}
                                                @elseif(!empty($employer) && $employer->add3 != '')
                                                {{$employer->add3}}
                                                @else
                                                @endif
                                        </td>
                                        
                                </tr>
                                <tr>
                                        
                                        <td class="control-label"><label>@lang('employerDetails.attr.city')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($emprecord) && $emprecord->city != '')
                                                {{$emprecord->city}}
                                                @elseif(!empty($employer) && $employer->city != '')
                                                {{$employer->city}}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.pobox')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($emprecord) && $emprecord->pobox != '')
                                            {{$emprecord->pobox}}
                                                {{-- @elseif(!empty($employer) && $employer->pobox != '')
                                                <input type="text" id="pobox" name="pobox" value="{{$employer->pobox}}" class="form-control"> --}}
                                                @else
                                                @endif
                                            
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.telNo')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($emprecord) && $emprecord->telno != '')
                                                {{$emprecord->telno}}
                                                @elseif(!empty($employer) && $employer->phoneno != '')
                                                {{$employer->phoneno}}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.lockedbag')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-LEFT" >
                                                @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                            {{$emprecord->lockedbag}}
                                                {{-- @elseif(!empty($employer) && $employer->lockedbag != '')
                                                <input type="text" id="lockedbag" name="lockedbag" value="{{$employer->lockedbag}}" class="form-control"> --}}
                                                @else
                                                @endif
                                        </td>
                                    
                                </tr>
                                <tr>
                                        <td class="control-label"><label>@lang('employerDetails.attr.email')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left">
                                                @if(!empty($emprecord) && $emprecord->email != '')
                                                {{$emprecord->email}}
                                                @elseif(!empty($employer) && $employer->faxno != '')
                                                {{$employer->email}}
                                                @else
                                                @endif
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label"><label>@lang('insuredPerson.attr.wdt')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($emprecord) && $emprecord->wdt != '')
                                                {{$emprecord->wdt}}
                                                {{-- @elseif(!empty($employer) && $employer->wdt != '')
                                                <input type="text" id="wdt" name="wdt" value="{{$employer->wdt}}" class="form-control"> --}}
                                                @else
                                                @endif
                                        </td>
                                </tr>
                                <tr>            
                                        <td class="control-label"><label>@lang('employerDetails.attr.faxNo')</label></td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                            <label class="control-label text-right ">
                                                    @if(!empty($emprecord) && $emprecord->faxno != '')
                                                    {{$emprecord->faxno}}
                                                    @elseif(!empty($employer) && $employer->faxno != '')
                                                    {{$employer->faxno}}
                                                    @else
                                                    @endif  
                                            </label>
                                        </td>
                                        
                                </tr>  
                            </table><br/> 
                        <h5 class="card-title">@lang('wages.title')</h5>
                        <hr class="m-t-0 m-b-40"> 

                        <?php $contrcnt = 0; ?>
                        <?php $wagescnt = 0; ?>
                        @foreach ($contribution as $contr)
                            <table border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label"><label>@lang('wages.attr.company_name')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">{{$contr->empname}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"><label>@lang('wages.attr.commencement_date')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">{{substr($contr->startdate,0,4)}}-{{substr($contr->startdate,4,2)}}-{{substr($contr->startdate,6,2)}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label"><label>@lang('wages.attr.end_date')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">{{substr($contr->enddate,0,4)}}-{{substr($contr->enddate,4,2)}}-{{substr($contr->enddate,6,2)}}</td>
                                </tr>
                            </table>
                            <div class="row p-t-20">
                                    <div class="col-12">
                                        <div class="card">
                                            <label>@lang('wages.attr.details_wages_od')</label>
                                            <div class="table-responsive">
                                                <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                    <thead>
                                                        <tr>
                                                            <th data-breakpoints="xs">@lang('wages.attr.num')</th>
                                                            <th>@lang('wages.attr.month')</th>
                                                            <th>@lang('wages.attr.year')</th>
                                                            <th data-breakpoints="xs sm">@lang('wages.attr.wages')</th>
                                                            <th data-breakpoints="xs">@lang('wages.attr.contribution')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $mcmonth = session('mcmonth'); 
                                                          $mcyear = session('mcyear'); 
                                                          $cnt = 0; 
                                                          if ($mcmonth == '')
                                                          {
                                                              $mcmonth = date('m');
                                                          }
                                                          if ($mcyear == '')
                                                          {
                                                              $mcyear = date('Y');
                                                          }
                                                          ?>
                                                    @while ($cnt < 6)   
                                                    <?php 
                                                    $mcmonth = $mcmonth - 1;
                                                    if ($mcmonth <= 0)
                                                    {
                                                        $mcmonth = 12 + $mcmonth;
                                                        $mcyear  = $mcyear - 1;
                                                    }
                                                    ?>
                                                        <tr data-expanded="true">
                                                            <td>{{$cnt+1}}</td>
                                                            <td><select id="month[{{$contrcnt}}][{{$cnt}}]" name="month[{{$contrcnt}}][{{$cnt}}]" class="form-control" readonly>
                                                                    @foreach ($month as $m)
                                                                    @if ($m->refcode == $mcmonth)
                                                                    <option value='{{$m->refcode}}' selected>{{$m->descen}}</option>
                                                                    @else
                                                                    <option value='{{$m->refcode}}'>{{$m->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td><input type="text" id="year[{{$contrcnt}}][{{$cnt}}]" name="year[{{$contrcnt}}][{{$cnt}}]" value="{{$mcyear}}" class="form-control" readonly></td>
                                                            <?php $wagefound = false; ?>
                                                            @if (!empty($wagesinfo))
                                                            @foreach ($wagesinfo as $w)
                                                                @if ($w->empcode == $contr->empcode)
                                                                @foreach ($w->wagesinfo as $gaji)
                                                                    @if ($gaji->month == $mcmonth && $gaji->year == $mcyear)
                                                                    <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control maskdecimal" ></td>
                                                                    <?php $wagefound = true; ?>
                                                                    @endif
                                                                @endforeach
                                                                @endif
                                                            @endforeach
                                                            @endif
                                                            @if ($wagefound == false)
                                                            <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" ></td>
                                                            @endif
                                                            
                                                            <?php $contrfound = false; ?>
                                                            @if (!empty($contr))
                                                            @foreach ($contr->contribution as $c)
                                                            @if ($c->month == $mcmonth && $c->year == $mcyear)
                                                            <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$c->contribution}}" class="form-control maskdecimal" ></td>
                                                            <?php $contrfound = true; ?>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                            
                                                            @if ($contrfound == false)
                                                            <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" ></td>
                                                            @endif
                                                            
                                                        </tr>
                                                        <?php $cnt++; 
                                                              ?>
                                                    @endwhile
                                                                                                    
                                                    <!--    @for ($i = 0; $i < 6; $i++)
                                                        <tr data-expanded="true">
                                                            <td>{{$i+1}}</td>
                                                            <td>
                                                                <select id="month[{{$i}}]" name="month[{{$i}}]">
                                                                    @foreach ($month as $m)
        
                                                                    <option value='{{$m->refcode}}'>{{$m->descen}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </td>
                                                            <td><input type="text" id="year[{{$i}}]" name="year[{{$i}}]" value="" class="form-control" ></td>
                                                            <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control" ></td>
                                                            <td><input type="text" id="contrpaid[{{$i}}]" name="contrpaid[{{$i}}]" value="" class="form-control"></td>
                                                        </tr>
                                                        @endfor 
                                                        -->
                                                    
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $contrcnt++; ?>                    
                            @endforeach

                            <h5 class="card-title">@lang('deathDetails.title')</h5>
                            <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="5px">
                                <tr >
                                    <td class="control-label"><label class="control-label">@lang('deathDetails.attr.date_death')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">{{substr($deathdetail->dodeath,0,4)}}-{{substr($deathdetail->dodeath,4,2)}}-{{substr($deathdetail->dodeath,6,2)}}</td>
                                    <td class="control-label"><label class="control-label">@lang('deathDetails.attr.cause_death')</label></p></td>
                                    <td></td>
                                    <td class="control-label text-left">{{ $deathdetail->deathcause }}</td>                             
                                    <td class="control-label"><label class="control-label">@lang('deathDetails.attr.status')</label></td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                    </td>
                                </tr>
                            </table>


                        
                        <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                        <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="5px">
                                <tr >

                                    <td class="control-label"><label>@lang('confirmation.attr.payment')</label></td>
                                    <td>:</td>
                                    <td width="300">
                                            @foreach($optionpay as $opay)
                                            @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                                {{$opay->descen}}
                                                <input type="hidden" id="payment_method" value="{{$opay->refcode}}">
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                        <td class="control-label have_acc_bank"><label>@lang('confirmation.attr.recipient_bank')</label></td>
                                        <td class="control-label have_acc_bank">:</td>
                                        <td class="control-label have_acc_bank" width="300">
                                            @foreach($optionreason as $or)
                                                @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                {{$or->descen}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="control-label have_acc_bank"></td>
                                        <td class="control-label reason_no_acc"><label>@lang('confirmation.attr.reason_no_bankAcc')</label></td>
                                        <td class="control-label reason_no_acc">:</td>
                                        <td class="control-label reason_no_acc">
                                            @foreach($optionreason as $or)
                                                @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                {{$or->descen}}
                                                @else
                                                @endif
                                                @endforeach
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label bank_location"><label>@lang('confirmation.attr.bank_location')</label></td>
                                        <td class="control-label bank_location">:</td>
                                        <td class="control-label bank_location">
                                            @foreach($optionbank as $ob)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                                {{$ob->descen}}
                                                <input type="hidden" id="preview_bank" value="{{$ob->refcode}}">
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="control-label bank_location"></td>
                                        <td class="control-label status_bai"><label>@lang('confirmation.attr.bai_status')</label></td>
                                        <td class="control-label status_bai">:</td>
                                        <td class="control-label status_bai" width="300">
                                            @foreach($optionbai as $obai)
                                                @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                                {{$obai->descen}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label bank_status"><label>@lang('confirmation.attr.substatus_desc')</label></td>
                                        <td class="control-label bank_status">:</td>
                                        <td class="control-label bank_status">
                                            @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                            {{$bankinfo->substsdesc}}
                                                @else
                                            @endif
                                        </td>
                                        <td class="control-label bank_status"></td>
                                        <td class="control-label bank_code"><label>@lang('confirmation.attr.bank_name')</label></td>
                                        <td class="control-label bank_code">:</td>
                                        <td class="control-label bank_code">
                                            @foreach($bankcode as $bc)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                $bankinfo->bankcode == $bc->refcode)
                                                {{$bc->descen}}
                                                @else
                                                @endif
                                            @endforeach
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label bank_branch"><label>@lang('confirmation.attr.bank_branch')</label></td>
                                        <td class="control-label bank_branch">:</td>
                                        <td class="control-label bank_branch">
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                {{$bankinfo->bankbr}}
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                @else
                                            @endif
                                        </td>
                                        <td class="control-label bank_branch"></td>
                                        <td class="control-label bank_acc"><label>@lang('confirmation.attr.bank_accNo')</label></td>
                                        <td class="control-label bank_acc">:</td>
                                        <td class="control-label bank_acc">  
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                {{$bankinfo->accno}}
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                @else
                                            @endif
                                        </td>
                                </tr>
                                <tr>
                                        <td class="control-label bank_address"><label>@lang('confirmation.attr.bank_address')</label></td>
                                        <td class="control-label bank_address">:</td>
                                        <td class="control-label bank_address">
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                                {{$bankinfo->bankaddr}}
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                @else
                                            @endif
                                        </td>
                                        <td class="control-label bank_address"></td>
                                        <td class="control-label bank_acc_type"><label>@lang('confirmation.attr.type_acc')</label></td>
                                        <td class="control-label bank_acc_type">:</td>
                                        <td class="control-label bank_acc_type">
                                            @foreach($accountype as $at)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' && $bankinfo->acctype == $at->refcode)
                                                {{$at->descen}}
                                                @endif
                                            @endforeach
                                        </td>
                                </tr>
                                <tr>
                                    <td class="control-label swiftcode"><label>@lang('confirmation.attr.swift_code')</label></td>
                                    <td class="control-label swiftcode">:</td>
                                    <td class="control-label swiftcode">
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            {{$bankinfo->swiftcode}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            @else
                                            @endif
                                    </td>
                                    <td class="control-label swiftcode"></td>
                                    <td class="control-label bsbcode"><label>@lang('confirmation.attr.bsb_code')</label></td>
                                    <td class="control-label bsbcode">:</td>
                                    <td class="control-label bsbcode"> 
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        {{$bankinfo->bsbcode}}
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        @else
                                        @endif
                                    </td>
                                </tr>
                            </table><br>

                        <h5 class="card-title">@lang('confirmation.title_ob')</h5>
                        <hr class="m-t-0 m-b-40">
                        <h5 class="box-title"><label>@lang('socso.title')</label></h5>
                        <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="5px">
                                <tr>
                                    <td class="control-label"><label>@lang('socso.attr.state')</label></td>
                                    <td>:</td>
                                    <td><label class="control-label text-right ">
                                            @foreach($state as $S)
                                            @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                                {{$S->descen}}
                                            @endif
                                            @endforeach
                                        </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                        <td></td>
                                    <td class="control-label"><label>@lang('socso.attr.city')</label></td>
                                    <td>:</td>
                                    <td><label class="control-label text-right ">
                                            @foreach($branch as $B)
                                            @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                                {{$B->brname}}
                                            @endif
                                            @endforeach
                                        </label>
                                    </td>
                                    <td></td>
                                </tr>
                            </table><br>
                        <h5 class="box-title"><label>@lang('confirmation.title_ob')</label></h5>
                        <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="5px">
                                @if (!empty($confirmation -> jsection)) 
                                @foreach($confirmation -> jsection as $d)
                                        <tr>
                                            <td class="control-label"><label>@lang('confirmation.attr.idtype')</label></td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @foreach($idtype as $id)
                                                    @if(!empty($d) && $id->refcode == $d->idtype)
                                                     {{$id->descen}}
                                                    @endif
                                                    @endforeach
                                                </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('confirmation.attr.idno')</label></td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @if(!empty($d) && $d->idno !='')
                                                    {{ $d->idno }}
                                                    @else
                                                    @endif
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="control-label"><label>@lang('confirmation.attr.sectionj_received')</label></td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">

                                                </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label"><label>@lang('confirmation.attr.complete_sectionj')</label></td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                 @if(!empty($d) && $d->jrecvdate != '')
                                                {{substr($d->jrecvdate,0,4)}}-{{substr($d->jrecvdate,4,2)}}-{{substr($d->jrecvdate,6,2)}}
                                                @else
                                                @endif 
                                            </label>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="control-label"><label>@lang('confirmation.attr.acceptance_stamp')</label></td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                 @if(!empty($confirmation) && $confirmation->stampdate != '')
                                                 {{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}
                                                @else
                                                @endif
                                                </label>
                                        </td>
                                        </tr>
                                        @endforeach
                                        @endif
                            </table>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn btn-danger"> <i class="fa fa-pencil"></i> Edit</button>
                                                <button type="submit" class="btn btn waves-effect waves-light btn-success" alt="alert" class="img-responsive model_img" id="sa-warning">Submit</button>
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