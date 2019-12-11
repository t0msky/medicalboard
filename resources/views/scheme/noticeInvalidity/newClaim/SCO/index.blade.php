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
            <h4 class="card-title">@lang('Notice Invalidity')</h4>

            <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                            @lang('Remarks')</span></a> </li>

                <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#collapse" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                            @lang('Claim Details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigate" id="nav_uploaddoc"
                        role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span><span
                            class="hidden-xs-down"> @lang('Investigation Details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scheme" id="nav_uploaddoc"
                        role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span
                            class="hidden-xs-down"> @lang('Scheme Qualifying Condition')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical" id="nav_uploaddoc"
                        role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span
                            class="hidden-xs-down"> @lang('Medical Board Decision')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#query_opinion" id="nav_uploaddoc"
                        role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span
                            class="hidden-xs-down"> @lang('Query And Opinion')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommend" id="nav_uploaddoc"
                        role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span
                            class="hidden-xs-down"> @lang('Recommendation')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdoc" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">
                            @lang('Supporting Document')</span></a> </li>
            </ul>

            <!--------------- Tab panes ------------------->
            <br>
            <div class="row" id="rowindex">
                <div class="col-md-4 offset-md-8">
                    <div class="card text-left" id="cardindex">
                        <div class="card-body" id="cardbodyilat">
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
                                        <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah -
                                                940117015674</label></td>
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
            <div class="tab-content tabcontent-border">
                <div class="tab-pane p-20 active" id="remarks" role="tabpanel">
                    @include('scheme.general.remarks')
                </div>
                <div class="tab-pane p-20 " id="collapse" role="tabpanel">
                    @include('scheme.noticeInvalidity.newClaim.SCO.collapse')
                </div>
                <div class="tab-pane p-20" id="investigate" role="tabpanel">
                    @include('scheme.general.investigation.main')
                </div>
                <div class="tab-pane p-20" id="scheme" role="tabpanel">
                    @include('scheme.noticeInvalidity.newClaim.SCO.afterMB.collapse_scheme')
                </div>
                <div class="tab-pane p-20" id="medical" role="tabpanel">
                    @include('scheme.noticeInvalidity.newClaim.SCO.medicalboard')
                </div>
                <div class="tab-pane p-20" id="query_opinion" role="tabpanel">
                    @include('scheme.general.queryOpinion.main')
                </div>
                <div class="tab-pane p-20" id="recommend" role="tabpanel">
                    @include('scheme.noticeInvalidity.newClaim.SCO.afterMB.collapse_recommendation')
                </div>
                <div class="tab-pane p-20" id="supportingdoc" role="tabpanel">
                    @include('general.supportingDocument.main')
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------- row ------------------------>

<script>
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
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

</script>

@endsection
