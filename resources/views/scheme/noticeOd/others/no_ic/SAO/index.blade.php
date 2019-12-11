@extends('general.layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card-body p-b-0">
            <h4 class="card-title">Pre Process No IC</h4>
            
            <ul class="nav customtab" role="tablist" >
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#lampiran" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Appendix A</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rec" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Recommendation</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#approval" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Approval</span></a> </li>
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
            <div class="tab-content">
                <div class="tab-pane p-20 active" id="lampiran" role="tabpanel">
                    @include('scheme.noticeOd.others.no_ic.SAO.lampiran_a')
                </div>
                <div class="tab-pane p-20" id="rec" role="tabpanel">
                    @include('scheme.noticeOd.others.no_ic.SAO.recommendation')
                </div>
                <div class="tab-pane p-20" id="approval" role="tabpanel">
                    @include('scheme.noticeOd.others.no_ic.SAO.approval')
                </div>
            </div>
        </div>
</div>
@endsection

@section('script')

<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>

@endsection

