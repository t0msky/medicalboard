@extends('general.layouts.app')
@section('maintitle', 'Tab Screen')
@section('desc', 'Form')
@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">Reverse Decision</h4>
            <!-- Tab panes -->


                <ul class="nav customtab" role="tablist" id="tabMenu">
                        <li class="nav-item"> 
                                <a class="nav-link active" data-toggle="tab" href="#remarksReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                        <span class="hidden-xs-down">Remarks</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#claimDetailsReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Claim Details</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#recommendationReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Recommendation</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#supportingDocumentReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Supporting Document</span>
                                </a>
                        </li>
                </ul>


                <div class="row" id="rowindex">
                        <div class="col-md-12">
                        <div class="card text-left" id="cardindex">
                                <div class="card-body" id="cardbody">
                                <table>
                                        <thead>
                                        <tr>
                                                <td>
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>
                                                        <label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><label></label></td>
                                        </tr>
                                        <tr>
                                                <td>
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span>
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


                <div class="tab-content tabcontent-border">
                        <div class="tab-pane p-20 active" id="remarksReverseDecIO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.remarks')
                        </div>
                        <div class="tab-pane p-20" id="supportingDocumentReverseDecIO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.supporting_document')
                        </div>
                        <div class="tab-pane p-20" id="claimDetailsReverseDecIO" role="tabpanel">
                                <div id="accordion2" role="tablist" class="accordion">

                                        <!-- Case Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseInformation_reverse_decision_nationality_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                                href="#caseInformationIO" aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                        Case Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseInformationIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.caseInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Insured Person Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Insured Person Information</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insuredPersonInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.insuredPersonInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Statement -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="statement_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#statementIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Statement</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="statementIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.statement')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Case Fact -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseFact_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseFactIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Case Fact</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseFactIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.caseFact')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Investigation Report -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="investigationReport_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationReportIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Investigation Report</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="investigationReportIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.investigationReport')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Inconsistence Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="inconsistenceInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistenceInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Inconsistence Information</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="inconsistenceInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.inconsistentInfo')
                                                        </div>
                                                </div>
                                        </div>   
                                </div>
                        </div>

                        <div class="tab-pane p-20" id="recommendationReverseDecIO" role="tabpanel">
                                <div id="accordionrecommendationReverseDecIO" role="tablist" class="accordion">
                                      <!-- Recommendation -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendation_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecIO" href="#recommendationIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.recommendation')
                                                        </div>
                                                </div>
                                        </div>   

                                        <!-- Recommendation IO -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendationIO_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecIO" href="#recommendationIO_IO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation IO</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO_IO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_nationality.IO.recommendationIO')
                                                        </div>
                                                </div>
                                        </div>      
                                </div>
                        </div>
                </div>


            
        </div>
    </div>
</div>
<!-- row -->














<script>
    //redirect to specific tab
    $(document).ready(function () {
        $("a#changeme").attr('href', 'http://maps.google.com/');
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show');
        $('#wages').click(function () {
            // $("a.wages").prop("href", "/obformilat")


        });
    });


    function placeacc() {

        var accdwhen = $("#placeaccd").val();
        //alert(accdwhen);
        $('#descen').find('option').not(':first').remove();
        if (accdwhen) {

            $.ajax({
                url: '/reftable/' + accdwhen,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        $("#accwhen").empty();
                        for (var i = 0; i < len; i++) {

                            var id = data[i].refcode;
                            var name = data[i].descen;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#accwhen").append(option);
                        }


                    }

                }

            });
        }
    }

    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });

//collapse plus minuse
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
