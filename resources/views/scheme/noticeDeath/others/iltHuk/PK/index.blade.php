@extends('general.layouts.app')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="card-body p-b-0">
    {{-- <h4 class="card-title">@lang('scheme/index.attr.death_notice')</h4> --}}
    <h4 class="card-title">Declaration 117 ILT and HUK</h4>

        <!-- Nav tabs -->
    <ul class="nav customtab" role="tablist" id="tabMenu">
    
        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#ilthuk" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Declaration 117</span></a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('form/scheme.general.tab_title.supporting_document')</span></a> </li>
        
    </ul>

    <div class="tab-content tabcontent-border">

        <!-- Employer details tab -->
        <div class="tab-pane p-20 active" id="ilthuk" role="tabpanel">
            @include('scheme.noticeDeath.others.iltHuk.PK.collapse')
        </div>

            <!-- Wages tab -->
        <div class="tab-pane p-20" id="upload" role="tabpanel">
         @include('scheme.noticeDeath.others.iltHuk.PK.collapse_doc')
      </div>
    </div>
</div>

<!-- row -->
<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>

<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
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

        // $(document).ready(function(){
        //     // Add minus icon for collapse element which is open by default
        //     $(".collapse1.show").each(function(){
        //     $(this).prev(".card-header1").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        //     });
            
        //     // Toggle plus minus icon on show hide of collapse element
        //     $(".collapse1").on('show.bs.collapse1', function(){
        //     $(this).prev(".card-header1").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        //     }).on('hide.bs.collapse', function(){
        //     $(this).prev(".card-header1").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        //     });
        // });
        
        </script>

@endsection
