
                       
<div id="accordion2" role="tablist" class="accordion">
    
        <!-- ================================== INSURED PERSON INFORMATION ================================ -->
    @include('scheme.general.preview.ob')

    <!-- ================================== ILAT INFORMATION ================================ -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ilatinfo" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Invalidity Information')</h6>
                </a>
            </h6>
        </div>
        <div id="ilatinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card m-b-0">
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">@lang('Description Of Morbidity')
                            </div>
                            <div class="col-sm-9">
                                @if((!empty($ilatinfo) ||$ilatinfo!=null) )
                                <input type="text" class="form-control-preview" value="{{ $ilatinfo->morbiddesc}}" disabled style="background-color:white">
                                @else
                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                @lang('Year Morbidity Is First Suffered')
                            </div>
                            @if((!empty($ilatinfo) ||$ilatinfo!=null) )
                            <div class="col-sm-9"> <input type="text" class="form-control-preview" value="{{$ilatinfo->morbidyear}}" disabled style="background-color:white"></div>
                            @else 
                            <div class="col-sm-9"> <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                @lang('Is the insured person still engaged in employment?')
                            </div>
                            <div class="col-sm-9">
                                @if((!empty($ilatinfo) ||$ilatinfo!=null) )
                                @if($ilatinfo->inemployment==1)
                                <input type="text" class="form-control-preview" value="Yes" disabled  style="background-color:white">
                                @else
                                <input type="text" class="form-control-preview" value="No" disabled  style="background-color:white">
                                @endif
                                @else 
                                <input type="text" class="form-control-preview" value="" disabled  style="background-color:white">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================== Employer History ================================ -->
    @include('scheme.general.preview.employer_history')

    <!-- ================================== WAGES ================================ -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Wages Information')</h6>
                </a>
            </h6>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-12">
                                        <div class="card-header">
                                            <table id="table_add_emp_info" class="table table-sm table-bordered" data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th style='width: 5%;align-self: center'> @lang('No')</th>
                                                        <th style='width: 20%;align-self: center'> @lang('Year')</th>
                                                        <th style='width: 25%;align-self: center'> @lang('Month')</th>
                                                        <th style='width: 15%;align-self: center'> @lang('Employer Code')</th>
                                                        <th style='width: 20%;align-self: center'> @lang('Employer Name')</th>
                                                        <th style='width: 15%;align-self: center'> @lang('Wages (RM) ')</th>
                                                        <th style='width: 15%;align-self: center'> @lang('Contribution Paid')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($wages)||$wages!=null)
                                                    @php $cnt=0;@endphp
                                                    @foreach($wages as $idx=>$data)
                                                    @foreach($data->contrinfo as $idx_contri=>$contri)
                                                    <tr data-expanded="true">
                                                        @if($idx_contri<=0)
                                                        <td>{{$data->count}}</td>
                                                        @else
                                                        @php $cnt++ @endphp
                                                        <td></td>
                                                        @endif
                                                        <td>{{$contri->year}}</td>
                                                        <td>{{$contri->month}}</td>
                                                        <td>{{$contri->empcode}}</td>
                                                        <td>{{$contri->empname}}</td>
                                                        
                                                        <td>{{$contri->wages}}</td>
                                                        <td>{{number_format($contri->contrpaid,2)}}</td>
                                                    </tr>
                                                    @endforeach
                                                    @php $cnt++ @endphp
                                                    @endforeach
                                                    @else
                                                    <td colspan="7"> <center>No Record Found</center></td>
                                                    @endif
                                                </tbody>
                                            </table>
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

        <!-- ================================== SOCSO OFFICE ================================ -->
    @include('scheme.general.preview.socso')

    <!-- ================================== CERTIFICATE  ================================ -->
    @include('scheme.general.preview.certification')

    <!-- ================================== BANK INFORMATION  ================================ -->
    @include('scheme.general.preview.bank')

    <!-- ================================== CONFIRMATION ================================ -->
    @include('scheme.general.preview.confirmation')

   
    
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


