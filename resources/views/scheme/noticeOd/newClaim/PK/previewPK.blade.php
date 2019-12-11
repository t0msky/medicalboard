@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->
<div class="my-3 my-md-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="row" id="rowindex">
                <div class="col-md-12 col-lg-4 offset-lg-8">
                    <span class="title-beside-green">Preview</span>
                    <div class="card text-left" id="cardindex">
                        <div class="card-body" id="cardbodyod">
                            <table>
                                <thead>
                                    <tr>
                                        <td><span
                                                class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp;
                                            <span
                                                class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                            <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">{{ $obprofile->name }} - @foreach($obprofile->idinfo as $idx=> $ic)
                                                {{$ic->idno}} @endforeach</label></td>
                                    </tr>
                                    <tr>
                                        <td><label></label></td>
                                    </tr>

                                    <tr>
                                        <td><span
                                                class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp;
                                            <span
                                                class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                            <span
                                                class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span>
                                        </td>
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


            <form action="{{route('finalsubmit')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-12 col-lg-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">Form 34 Received Date</span>
                                    </div>
                                    <div class="col-sm-9">
                                        @if (!empty($obprofile)||$obprofile!=null)
                                        <input type="text" class="form-control-preview" value="{{$obprofile->f34recvdate}}" disabled  style="background-color:transparent">
                                        @else
                                        <input type="text" class="form-control-preview" value="" disabled  style="background-color:transparent">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            <span class="no_bold">Form 34 Submission By</span>
                                        </div>
                                        <div class="col-sm-9">
                                            @if(!empty($ref_table)|| $reftable!=null )
                                            @foreach($ref_table->f34submitby as $f34)
                                            @if ((!empty($obprofile)||$obprofile!=null) && ($obprofile->f34submitby == $f34->ref_code))
                                            <input type="text" class="form-control-preview" value="{{$f34->desc_en}}" disabled  style="background-color:transparent">
                                            @endif
                                            @endforeach
                                            @else
                                            <input type="text" class="form-control-preview" value="" disabled  style="background-color:transparent">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <br>
                       
                        <div id="accordion2" role="tablist" class="accordion">
                            
                            <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                            @include('scheme.general.preview.ob')

                            <!-- ================================== EMPLOYER INFORMATION ================================ -->
                            @include('scheme.general.preview.employer')

                            <!-- ================================== EMPLOYER HISTORY ================================ -->
                            @include('scheme.general.preview.employer_history')

                            <!-- ================================== OCCUPATIONAL DISEASE INFORMATION ============================= -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AccidentInformation" aria-expanded="false" aria-controls="AccidentInformation">
                                                    <h6 class="card-title"><i class="fa fa-plus"></i> Occupational Disease Information</h6>
                                            </a>
                                    </h6>
                                </div>
                                <div id="AccidentInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Description of Occupational Disease')
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($oddata) && $oddata->oddesc != '')
                                                <input type="text" class="form-control-preview" value="{{$oddata->oddesc}}" disabled style="background-color:white">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Is the Disease Related to Employment?')
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if (!empty($oddata) == 'Y') @lang('Yes') @elseif  (!empty($oddata) == 'N') @lang('No') @endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Date of Death (if applicable)')
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Are the Disease related to the Occupation?')
                                            </div>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="@if (!empty($oddata) == 'Y') @lang('Yes') @elseif  (!empty($oddata) == 'N') @lang('No') @endif" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Specify Duties and How Insured Person Exposed to the Danger')
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($oddata) && $oddata->dutydesc != '')
                                                <input type="text" class="form-control-preview" value="{{$oddata->dutydesc}}" disabled style="background-color:white">
                                                @else
                                                <input type="text" class="form-control-preview" value="{{$oddata->dutydesc}}" disabled style="background-color:white">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                @lang('Please Explain Symptoms/Sign Encountered')
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($oddata) && $oddata->symptom != '')
                                                <input type="text" class="form-control-preview" value="{{$oddata->symptom}}" disabled style="background-color:white">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- ================================== MEDICAL CERTIFICATE ================================ -->
                            @include('scheme.general.preview.mc')

                            <!-- ================================== WAGES INFORMATION ================================ -->
                            @include('scheme.general.preview.wages')

                            <!-- ================================== SOCSO OFFICE ================================ -->
                            @include('scheme.general.preview.socso')

                            <!-- ================================== CERTIFICATE  ================================ -->
                            @include('scheme.general.preview.certification')

                            <!-- ================================== BANK INFORMATION  ================================ -->
                            @include('scheme.general.preview.bank')

                            <!-- ================================== CONFIRMATION ================================ -->
                            @include('scheme.general.preview.confirmation')

                            <div class='row'>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-actions">
                                        @foreach(Session::get('workflow') as $s)
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success"
                                            id="submit" name="submit" value="{{$s->id}}">{{$s->name}}</button>
                                        @endforeach
                                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                                            onclick="submitform()">Back</button>
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

<script>
    //redirect to specific tab
    $(document).ready(function () {
        //$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });

    $(document).ready(function () {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function () {
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

</script>

@endsection