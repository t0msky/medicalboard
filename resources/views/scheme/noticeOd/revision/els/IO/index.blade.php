@extends('general.layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card-body p-b-0">
            <h4 class="card-title">Revision ELS</h4>
            
            <ul class="nav customtab" role="tablist" >
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Remarks</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claim" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Claim Details</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rec" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Recommendation</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Supporting Document</span></a> </li>
           </ul>
           
            <!-- <ul class="nav customtab" role="tablist" >
            	<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_info" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Case Information</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#applicant" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Applicant Information</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#case_info2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Case Information</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Medical Board Decision</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Appointment</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#statement" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Statement</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseFact" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Case Fact</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supporting" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Supporting Document</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rec" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Recommendation</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#io_rec" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">IO Recommendation</span></a> </li>
           </ul> -->
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
                @include('scheme.noticeOd.revision.els.io.remarks')
            </div>
            <div class="tab-pane p-20" id="claim" role="tabpanel">
                @include('scheme.noticeOd.revision.els.io.claim')
            </div>
            <div class="tab-pane p-20" id="supporting" role="tabpanel">
                @include('scheme.noticeOd.revision.els.io.supporting_document')
            </div>
            <div class="tab-pane p-20" id="rec" role="tabpanel">
                @include('scheme.noticeOd.revision.els.io.recommendation')
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

