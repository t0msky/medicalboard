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
            <h4 class="card-title">Reverse Decision</h4>
            <!-- Tab panes -->


                <ul class="nav customtab" role="tablist" id="tabMenu">
                        <li class="nav-item"> 
                                <a class="nav-link active" data-toggle="tab" href="#remarksReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                        <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.remarks')</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#claimDetailsReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.claim')</span>
                                </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommendationReverseDecIO"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">@lang('form/scheme.general.tab_title.recommendation')</span></a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#supportingDocumentReverseDecIO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.supporting_document')</span>
                                </a>
                        </li>
                </ul>


                <div class="row" id="rowindex">
                        <div class="col-md-12">
                        <div class="card text-left" id="cardindex">
                                <div class="card-body" id="cardbody">
                                <table>
                                        <thead>
                                        <tr>
                                                <td>
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>
                                                        <label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><label></label></td>
                                        </tr>
                                        <tr>
                                                <td>
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                                                        <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span>
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
                        <div class="tab-pane p-20 active" id="remarksReverseDecIO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.remarksIO')
                        </div>
                        <div class="tab-pane p-20" id="supportingDocumentReverseDecIO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.supportingDocIO')
                        </div>
                        <div class="tab-pane p-20" id="claimDetailsReverseDecIO" role="tabpanel">
                                <div id="accordion2" role="tablist" class="accordion">

                                        <!-- Case Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseInfo_reverse_decision_bk_to_bbk_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                                href="#caseInfoReverseDecIO" aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                        @lang('form/scheme.general.collapse.case_info.caseinfo') 
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseInfoReverseDecIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.caseInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Insured Person Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insurePersonInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('form/scheme.general.collapse.ob.title') </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insurePersonInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.insuredPersonInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- First Pyment Info -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="firstPaymentInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#firstPaymentInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> First Payment Information (HUS)
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="firstPaymentInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.firstPaymentInfo')
                                                        </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Accident Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="accidentNoticeInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accidentNoticeInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Accident Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="accidentNoticeInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.accidentNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Death Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="deathNoticeInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#deathNoticeInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Death Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="deathNoticeInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.deathNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                          <!-- Medical Board Decision -->
                                          <!-- <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalBoardDecision_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalBoardDecisioIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Board Decision
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalBoardDecisionIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.medicalBoardDecision')
                                                        </div>
                                                </div>
                                        </div> -->

                                         <!-- Medical Certificate Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalCertificateInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalCertificateInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Certificate Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalCertificateInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.medicalCertificateInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Preferred Socso Office -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="preferredSocsoOffice_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preferredSocsoOfficeIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Preferred Socso Office
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="preferredSocsoOfficeIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.preferredSocsoOffice')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Case Transferation -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseTransferation_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseTransferationIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Case Transferation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseTransferationIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.caseTransferation')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Bank Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="bankInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Bank Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="bankInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.bankInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Employer Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="employerInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employerInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="employerInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.employerInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Wages Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="WagesInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Wages Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="wagesInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.wagesInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Similar Worker Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="similarWorkerInfo_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#similarWorkerInfoIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Similar Worker Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="similarWorkerInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.similarWorkerInfo')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Insured Person Confirmation -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonConfirmation_reverseDecision_IO" style="background-color: #FFFFFF;">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonConfirmationIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Confirmation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insuredPersonConfirmationIO" class="collapse" role="tabpanel" aria-labelledby="insuredPersonConfirmation_reverseDecision_IO">
                                                        <div class="card-body">
                                                                <div id="accordionLesisure" role="tablist" class="accordion" >

                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingDependentProfile">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapseDependentProfile" aria-expanded="true" aria-controls="collapseDependentProfile">
                                                                                                <i class="fa fa-plus"></i>  Dependant Profile
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapseDependentProfile" class="collapse" role="tabpanel" aria-labelledby="headingDependentProfile">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.dependentProfile') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingGuardianInfo">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapseGuardianInfo" aria-expanded="true" aria-controls="collapseGuardianInfo">
                                                                                                <i class="fa fa-plus"></i>  Guardian Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapseGuardianInfo" class="collapse" role="tabpanel" aria-labelledby="headingGuardianInfo">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.guardianInfo') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingdependentEduInfo">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapsedependentEduInfo" aria-expanded="true" aria-controls="collapsedependentEduInfo">
                                                                                                <i class="fa fa-plus"></i>  Dependant Education Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapsedependentEduInfo" class="collapse" role="tabpanel" aria-labelledby="headingdependentEduInfo">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.dependentEduInfo') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingbankInfo_IPconfirm">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapsebankInfo_IPconfirm" aria-expanded="true" aria-controls="collapsebankInfo_IPconfirm">
                                                                                                <i class="fa fa-plus"></i>  Bank Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapsebankInfo_IPconfirm" class="collapse" role="tabpanel" aria-labelledby="headingbankInfo_IPconfirm">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.bankInfo_IPconfirm') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- FPM -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="fpm_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#fpmIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> FPM
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="fpmIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.fpm')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Similar Worker Details -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="similarWorkerDetails_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#similarWorkerDetailsIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Similar Worker Details
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="similarWorkerDetailsIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.similarWorkerDetails')
                                                                </div>
                                                        </div>
                                                </div>

                                                 <!-- Statement -->
                                                 <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="statement_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#statementIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Statement
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="statementIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.statementIO')
                                                                </div>
                                                        </div>
                                                </div>

                                                 <!-- Case Fact -->
                                                 <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="caseFactIO_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseFactIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Case Fact
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="caseFactIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.caseFactIO')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Investigation Information -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="investigationInfoIO_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationInfoIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Investigation Information
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="investigationInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.investigationInfoIO')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Inconsistent Information -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="inconsistentInfoIO_reverseDecision_IO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistentInfoIO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Inconsistent Information
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="inconsistentInfoIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.inconsistentInfoIO')
                                                                </div>
                                                        </div>
                                                </div>
                                </div>
                        </div>

                        <div class="tab-pane p-20" id="recommendationReverseDecIO" role="tabpanel">
                                <div id="accordionrecommendationReverseDecIO" role="tablist" class="accordion">
                                      <!-- Recommendation -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendation_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecIO" href="#recommendationIO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.recommendation')
                                                        </div>
                                                </div>
                                        </div>   

                                        <!-- Recommendation IO -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendationIO_reverseDecision_IO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecIO" href="#recommendationIO_IO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation IO</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO_IO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.recommendationIO')
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

//collapse plus minuse
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
