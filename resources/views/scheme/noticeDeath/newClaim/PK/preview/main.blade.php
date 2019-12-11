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
                        <div class="card-header">
                              {{-- <form action="{{route('death.success')}}" method="POST"> --}}
                        @csrf
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-3">
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
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-3">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        <span class="no_bold">@lang('Form 34 Submission By')</span>
                                    </div>
                                    <div class="col-sm-9">
                                        @if(!empty($ref_table)|| $reftable!=null )
                                        @foreach($ref_table->f34submitby as $f34)
                                        @if ((!empty($obprofile)||$obprofile!=null)&& $obprofile->f34submitby == $f34->ref_code)
                                        <input type="text" class="form-control-preview" name="f34submitby" value="{{$f34->desc_en}}" disabled style="background-color:transparent">
                                        @endif
                                        @endforeach
                                        <input type="text" class="form-control-preview"name="f34submitby" value="" disabled style="background-color:transparent">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                        <div id="accordion2" role="tablist" class="accordion" >
                         <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                            @include('scheme.general.preview.ob')
                            <!-- ================================== EMPLOYER INFORMATION ================================ -->
                            @include('scheme.general.preview.employer')
                            <!-- ================================== WAGES INFORMATION ================================ -->
                            @include('scheme.general.preview.wages')
                            <!-- ================================== DEATH INFORMATION ================================ -->
                            @include('scheme.noticeDeath.newClaim.PK.preview.death')
                            <!-- ================================== DEPENDANT INFORMATION ================================ -->
                            @include('scheme.noticeDeath.newClaim.PK.preview.dependant')
                            <!-- ================================== APPLICANT INFORMATION ================================ -->
                            @include('scheme.noticeDeath.newClaim.PK.preview.applicant')
                            <!-- ================================== SOCSO INFORMATION ================================ -->
                            @include('scheme.general.preview.socso')
                            <!-- ================================== CERTIFICATION ================================ -->
                            @include('scheme.general.preview.certification')
                            <!-- ================================== CONFIRMATION ================================ -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="confirmation">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> Confirmation of Insured Person/Dependant/Claimant</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
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

@section('js')

<script>

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