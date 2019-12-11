@extends('general.layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card-body p-b-0">
            <h4 class="card-title">@lang('Occupational Disease Notice')</h4>
            
            <ul class="nav nav-tabs" role="tablist" >
            	  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.remarks')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claim" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.claim')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistency" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Investigation Details</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#query" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Query and Opinion</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rec" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('Recommendation')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.supporting_document')</span></a> </li>
           </ul>
           <br>
           <div class="row" id="rowindex">
            <div class="col-md-4 offset-md-8">
                   <div class="card text-left" id="cardindex">
                          <div class="card-body" id="cardbodyod">
                                 <table>
                                        <thead>
                                        <tr>
                                               <td><span class="no_bold">@lang('Name')</span>&nbsp; <span class="no_bold">@lang('-')</span>&nbsp; <span class="no_bold">@lang('Identification No.')</span></td>
                                        </tr>
                                        <tr>
                                               <td><label class="no_margin">Putri Nor Shamiera Binti Azizan Shah - 940117015674</label></td>
                                        </tr>
                                        <tr>
                                               <td><label></label></td>
                                        </tr>
                                        
                                        <tr>
                                               <td><span class="no_bold">@lang('Scheme Ref. No.')</span>&nbsp; <span class="no_bold">@lang('-')</span>&nbsp; <span class="no_bold">@lang('Notice Date')</span></td>
                                        </tr>
                                        <tr>
                                               <td><label class="no_margin">A31NTK0720190001 - 31/01/2018</label></td>
                                        </tr>
                                        </thead>
                                 </table>
                          </div>
                   </div>
            </div>
        </div>

          <!-- Nav tabs -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane p-20 active" id="remarks" role="tabpanel">
            @include('scheme.general.remarks')
          </div>
          <div class="tab-pane p-20" id="claim" role="tabpanel">
            @include('scheme.noticeOd.newClaim.IO.collapse')
          </div>
          <div class="tab-pane p-20" id="inconsistency" role="tabpanel">
            @include('scheme.noticeOd.newClaim.SCO.collapse_investigation')
          </div>
          <div class="tab-pane p-20" id="query" role="tabpanel">
            @include('scheme.general.queryOpinion.main')
          </div>
          <div class="tab-pane p-20" id="rec" role="tabpanel">
            @include('scheme.noticeOd.newClaim.SCO.collapse_recommendation')
          </div>
          <div class="tab-pane p-20" id="supporting" role="tabpanel">
            @include('scheme.noticeOd.newClaim.SCO.collapse_supporting')
          </div>
        </div>
    </div>
</div>


<!-- row -->
@endsection

@section('script')

<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>
@endsection

