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
            <div class="card">
                <div class="card-body">
                <form action="{{route('finalsubmit')}}" method="POST">
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
                        <br>
                        <div id="accordion2" role="tablist" class="accordion" >
                        <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                            @include('scheme.general.preview.ob')
                        <!-- ================================== EMPLOYER INFORMATION ================================ -->
                            @include('scheme.general.preview.employer')
                        <!-- ================================== ACCIDENT INFORMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AccidentInformation" aria-expanded="false" aria-controls="AccidentInformation">
                                                    <h6 class="card-title"><i class="fa fa-plus"></i> Accident Information</h6>
                                            </a>
                                    </h6>
                                </div>
                                <div id="AccidentInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                {{-- <h5 class="card-title">Accident Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Accident Date
                                            </div>
                                            <div class="col-sm-9">
                                                @if (!empty($accinfo))
                                                <input type="text" class="form-control-preview" value="{{$accinfo->accddate}}" disabled style="background-color:white">
                                                @else

                                                @if (Session::get('accddate'))

                                                <input type="text" class="form-control-preview" value="{{$accinfo->accddate}}" disabled style="background-color:white">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Accident Time
                                            </div>
                                            <div class="col-sm-9">
                                                @if (!empty($accinfo))
                                                <input type="text" class="form-control-preview" value="{{$accinfo->accdtime}}" disabled style="background-color:white">
                                                @else
                                                @if (Session::get('accdtime'))
                                                <input type="text" class="form-control-preview" value="{{$accinfo->accdtime}}" disabled style="background-color:white">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Place of Accident
                                            </div>
                                            <div class="col-sm-9">
                                                @if (!empty($accinfo) || $accinfo !=null)
                                                @foreach($ref_table->accd_place as $AccPlace)
                                                @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code)
                                                <input type="text" class="form-control-preview" value="{{$AccPlace->desc_en}}" disabled style="background-color:white">
                                                @endif
                                                @endforeach
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                When Accident Happen?
                                            </div>
                                            <div class="col-sm-9">
                                                @if (!empty($accinfo) || $accinfo !=null)
                                                @foreach($ref_table->acc_when as $AccWhen)
                                                @if (!empty($accinfo) && $accinfo->accdwhen == $AccWhen->ref_code)
                                                <input type="text" class="form-control-preview" value="{{$AccWhen->desc_en}}" disabled style="background-color:white">
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
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                How the Accident Happened?
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->how}} @endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
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
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Injury Description
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Is Accident Date a Working Day For The Insured Person
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($accinfo)|| $accinfo!=null)
                                                @if($accinfo->accwork == 'Y')
                                                <input type="text" class="form-control-preview" value="Yes" disabled style="background-color:white">
                                                @elseif($accinfo->accwork == 'N')
                                                <input type="text" class="form-control-preview" value="No" disabled style="background-color:white">
                                                @endif
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($accinfo)|| $accinfo!=null)
                                @if($accinfo->accwork == 'Y')
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Start Working Time on Accident Day
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
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
                                @endif
                                @endif
                                <div class="row p-t-20">
                                    @if(!empty($accinfo)|| $accinfo!=null)
                                    @if($accinfo->accwork == 'Y')
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Ending Time of Work on The Accident Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                    <div class="col-md-12 col-lg-4">
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
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Witness Phone No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
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
                                </div>
                            </div>
                         <!-- ================================== MC ================================ -->
                            @include('scheme.general.preview.mc')
                         <!-- ================================== WAGES INFORMATION ================================ -->
                             @include('scheme.general.preview.wages')

                        <!-- ================================== SOCSO OFFICE  ================================ -->
                            @include('scheme.general.preview.socso')

                        <!-- ================================== CERTIFICATION ================================ -->
                            @include('scheme.general.preview.certification')

                        <!-- ================================== BANK ================================ -->
                            @include('scheme.general.preview.bank')

                        <!-- ================================== CONFIRMATION  ================================ -->
                            @include('scheme.general.preview.confirmation')

                        <div class='row'>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-actions">
                                    @foreach(Session::get('workflow') as $s)
                                    <input type="hidden" value="{{$s->id}}" name="submit">
                                    @endforeach
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success" id="submit">Submit</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info"
                                        onclick="submitform()">Back</button>
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