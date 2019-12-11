@extends('general.layouts.app')

@section('content')

<div class="card-body p-b-0">

    <h4 class="card-title">@lang('form/scheme.general.tab_title.death_notice')</h4>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" id="tabMenu">
    
        <li class="nav-item-remarks"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.remarks')</span></a> </li>
        <li class="nav-item-claim"> <a class="nav-link" data-toggle="tab" href="#claim" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.claim')</span></a> </li>
        <li class="nav-item-investigation"> <a class="nav-link" data-toggle="tab" href="#investigation" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.investigation')</span></a> </li>
        <li class="nav-item-query"> <a class="nav-link" data-toggle="tab" href="#query" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Query and Opinion</span></a> </li>
        <li class="nav-item-recommendations"> <a class="nav-link" data-toggle="tab" href="#recommendations" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.recommendation')</span></a> </li>
        {{-- <li class="nav-item-fpm"> <a class="nav-link" data-toggle="tab" href="#fpm" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">FPM Information</span></a> </li> --}}
        <li class="nav-item-upload"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('form/scheme.general.tab_title.supporting_document')</span></a> </li>
        
    </ul>

    @include('general.tag_profile')
     
    <div class="tab-content tabcontent-border">
            <!-- Remarks tab -->
        <div class="tab-pane p-20 active" id="remarks" role="tabpanel">
            @include('scheme.general.remarks')
        </div>
            <!-- Claim Details tab -->
        <div class="tab-pane p-20" id="claim" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SCO.sbk.collapse')
        </div>
            <!-- Investigation tab -->
        <div class="tab-pane p-20" id="investigation" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SCO.sbk.collapse_investigation')
        </div>
            <!-- Query and Opinion tab -->
        <div class="tab-pane p-20" id="query" role="tabpanel">
            @include('scheme.general.query')
        </div>
            <!-- Recommendation tab -->
        <div class="tab-pane p-20" id="recommendations" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SCO.sbk.collapse_rec')
        </div>
            <!-- FPM tab -->
        {{-- <div class="tab-pane p-20" id="fpm" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.general.applicant')
        </div> --}}
            <!-- Supporting Document tab -->
        <div class="tab-pane p-20" id="upload" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SCO.sbk.collapse_upload')
        </div>
    </div>
</div>

@endsection

@section('js')

<!-- row -->
<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>

<script>
    function placeacc(){
        
        var accdwhen = $("#placeaccd").val();
        //alert(accdwhen);
        $('#descen').find('option').not(':first').remove();
        if (accdwhen){  

            $.ajax({ 
                url: '/reftable/'+accdwhen,
                type: 'GET',
                dataType: 'json',
                    success: function(data){
                    //console.log(data);
                        var len = 0;
                        if(data != null){
                        len = data.length;
                    }   

                    if(len > 0){
                        $("#accwhen").empty();
                        for(var i=0; i<len; i++){

                            var id = data[i].refcode;
                            var name = data[i].descen; 
                            
                            var option ="<option value='"+id+"'>"+name+"</option>";

                            $("#accwhen").append(option);
                        }
                    }   
                
                    },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " +textStatus);
                alert("Error :" +errorThrown);
                }
            }); 
        }
    }
</script>

<script>
    function occupationcode(){
        alert('hi');
        var suboccucode = $("#occucode").val();
        alert(suboccucode);
        $('#descen').find('option').not(':first').remove();
        if (suboccucode){  
            alert('masuk');
            $.ajax({ 
                url: '/reftable1/'+suboccucode,
                type: 'GET',
                dataType: 'json',
                    success: function(data){
                    //console.log(data);
                        var len = 0;
                        if(data != null){
                        len = data.length;
                    }   

                    if(len > 0){
                        $("#suboccucode").empty();
                        for(var i=0; i<len; i++){

                            var id = data[i].refcode;
                            var name = data[i].descen; 
                            
                            var option ="<option value='"+id+"'>"+name+"</option>";

                            $("#suboccucode").append(option);
                        }
                    }   
                
                    },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " +textStatus);
                alert("Error :" +errorThrown);
                }
            }); 
        }
    }
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
    
</script>
    
@endsection