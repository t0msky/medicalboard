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
            <h4 class="card-title">@lang('New Case')</h4>

            <!----------------- Nav tabs ---------------------->

            <ul class="nav nav-tabs" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#newcase" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> @lang('New Case')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdoc" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('Supporting Document')</span></a> </li>
            </ul>

           <!------------------------ TAB -------------------->
           
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="newcase" role="tabpanel">
                    @include('medical.MedicalServices.general.opinion.newCase.collapseNewCase')
                </div>
                <div class="tab-pane p-20" id="supportingdoc" role="tabpanel">
                    @include('general.supportingDocument.uploadDoc') 
                </div>

            </div>
        </div>
    </div>
</div>

<!---------------------- collapse + -  ------------------------>

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

@endsection
