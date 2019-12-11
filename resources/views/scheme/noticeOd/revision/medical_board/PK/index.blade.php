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
            <h3 class="card-title">{{--@lang('index.attr.medicalBoardDecision')--}}Medical Board Decision</h3>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div id="accordion2" role="tablist" class="accordion">

                    <ul class="nav customtab" role="tablist" id="tabMenu">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">{{--@lang('form/scheme.general.tab_title.remarks')--}} Remarks</span></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claimDetails"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">{{--@lang('form/scheme.general.tab_title.claimDetails')--}}Claim Details</span></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingDocument"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">{{--@lang('form/scheme.general.tab_title.supportingDocument')--}}Supporting Document</span></a>
                        </li>
                    </ul>

                    <div class="row" id="rowindex">
                        <div class="col-md-12">
                            <div class="card text-left" id="cardindex">
                                <div class="card-body" id="cardbody">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td><span
                                                        class="no_bold">@lang('scheme/index.attr.name')</span>&nbsp;
                                                    <span
                                                        class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp;
                                                    <span
                                                        class="no_bold">@lang('scheme/index.attr.idno')</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan
                                                        Shah - 940117015674</label></td>
                                            </tr>
                                            <tr>
                                                <td><label></label></td>
                                            </tr>
                                            <tr>
                                                <td><span
                                                        class="no_bold">@lang('scheme/index.attr.schemerefno')</span>&nbsp;
                                                    <span
                                                        class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp;
                                                    <span
                                                        class="no_bold">@lang('scheme/index.attr.notice_date')</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label>
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane p-20 active" id="remarks" role="tabpanel">
                            {{-- @include('Scheme.revision.deathdate.PK.remarks') --}}
                            @include('scheme.noticeOd.revision.medical_board.PK.remarks')
                        </div>
                        <div class="tab-pane p-20" id="supportingDocument" role="tabpanel">
                            {{-- @include('Scheme.common.uploadDoc') --}}
                            @include('scheme.general.upload_doc') 
                        </div>

                        <div class="tab-pane p-20" id="claimDetails" role="tabpanel">

                            <!-- Initial Assessment appointmentdetails-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="caseInfo_medical">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#caseInfo" aria-expanded="false" aria-controls="collapseOne1">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                                {{--@lang('scheme/index.attr.case_details')--}}Case Information</h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('Scheme.revision.medical_board.PK.case_info') --}}
                                        @include('scheme.noticeOd.revision.medical_board.PK.case_info')
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="appealateInfo_medical">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#appealateInfo" aria-expanded="false" aria-controls="collapseOne1">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                                {{--@lang('index.attr.appealateInfo')--}} Appealate Information
                                            </h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="appealateInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('Scheme.revision.medical_board.PK.appealate_information') --}}
                                        @include('scheme.noticeOd.revision.medical_board.PK.appealate_information')
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="insuredPersonInfo_medical">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#insuredPerson" aria-expanded="false" aria-controls="collapseOne1">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                                @lang('scheme/index.attr.insured_details')</h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="insuredPerson" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('Scheme.revision.medical_board.PK.insured_person_info') --}}
                                        @include('scheme.noticeOd.revision.medical_board.PK.insured_person_info')
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="paymentOption_medical">
                                    <h5 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                            href="#paymentOption" aria-expanded="false" aria-controls="collapseOne1">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                                {{--@lang('index.attr.paymentOption')--}}Payment Option
                                            </h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="paymentOption" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        {{-- @include('Scheme.revision.medical_board.PK.payment_option') --}}
                                        @include('scheme.noticeOd.revision.medical_board.PK.payment_option')
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

</script>

<script>
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

    $(document).ready(function () {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function () {
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass(
                "fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass(
                "fa-minus");
        }).on('hide.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass(
                "fa-plus");
        });
    });

</script>

@endsection
