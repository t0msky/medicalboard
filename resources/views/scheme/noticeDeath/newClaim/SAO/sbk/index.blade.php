@extends('general.layouts.app')

@section('content')

<div class="card-body p-b-0">

    <h4 class="card-title">@lang('scheme/index.attr.death_notice')</h4>

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

    <div class="row" id="rowindex">
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
     
    <div class="tab-content tabcontent-border">
            <!-- Remarks tab -->
        <div class="tab-pane p-20 active" id="remarks" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.general.collapse_remarks')
        </div>
            <!-- Claim Details tab -->
        <div class="tab-pane p-20" id="claim" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SAO.sbk.collapse')
        </div>
            <!-- Investigation tab -->
        <div class="tab-pane p-20" id="investigation" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SAO.sbk.collapse_investigation')
        </div>
            <!-- Query and Opinion tab -->
        <div class="tab-pane p-20" id="query" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.general.query')
        </div>
            <!-- Recommendation tab -->
        <div class="tab-pane p-20" id="recommendations" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SAO.sbk.collapse_rec')
        </div>
            <!-- FPM tab -->
        {{-- <div class="tab-pane p-20" id="fpm" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.general.applicant')
        </div> --}}
            <!-- Supporting Document tab -->
        <div class="tab-pane p-20" id="upload" role="tabpanel">
            @include('scheme.noticeDeath.newClaim.SAO.sbk.collapse_upload')
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