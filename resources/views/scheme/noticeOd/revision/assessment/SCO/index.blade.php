@extends('general.layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card-body p-b-0">
            {{-- <h4 class="card-title">@lang('scheme/index.attr.od_notice')</h4> --}}
            <h4 class="card-title">Revision of Assessment</h4>
            
            <ul class="nav customtab" role="tablist" >
            	  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.remarks')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claim_sco" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.claim_info')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting_sco" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.supporting')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommend_sco" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Recommendation</span></a> </li>
           </ul>
           <br>

           <div class="row" id="rowindex">
            <div class="col-md-12">
                   <div class="card text-left" id="cardindex">
                          <div class="card-body" id="cardbody">
                                 <table>
                                        <thead>
                                        <tr>
                                               <td><span class="no_bold">@lang('scheme/index.attr.name')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.idno')</span></td>
                                        </tr>
                                        <tr>
                                               <td><label class="no_margin">Putri Nor Shamiera Binti Azizan Shah - 940117015674</label></td>
                                        </tr>
                                        <tr>
                                               <td><label></label></td>
                                        </tr>
                                        
                                        <tr>
                                               <td><span class="no_bold">@lang('scheme/index.attr.schemerefno')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.notice_date')</span></td>
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
                    @include('scheme.noticeOd.revision.assessment.SCO.remarks')
                </div>
                <div class="tab-pane p-20" id="claim_sco" role="tabpanel">
                    @include('scheme.noticeOd.revision.assessment.SCO.claim_info')
                </div>
                <div class="tab-pane p-20" id="supporting_sco" role="tabpanel">
                     @include('scheme.noticeOd.revision.assessment.SCO.supporting_doc')
                </div>
                <div class="tab-pane p-20" id="recommend_sco" role="tabpanel">
                     @include('scheme.noticeOd.revision.assessment.SCO.recommendation_sco')
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

