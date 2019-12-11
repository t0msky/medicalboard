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
                                <a class="nav-link active" data-toggle="tab" href="#remarksReverseDecSCO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                        <span class="hidden-xs-down">Remarks</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#claimDetailsReverseDecSCO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Claim Details</span>
                                </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommendationReverseDecSCO"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">Recommendation</span></a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#supportingDocumentReverseDecSCO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Supporting Document</span>
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
                        <div class="tab-pane p-20 active" id="remarksReverseDecSCO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.remarksSCO')
                        </div>
                        <div class="tab-pane p-20" id="supportingDocumentReverseDecSCO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.supportingDocSCO')
                        </div>
                        <div class="tab-pane p-20" id="claimDetailsReverseDecSCO" role="tabpanel">
                                <div id="accordion2" role="tablist" class="accordion">

                                        <!-- Case Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseInfo_reverse_decision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                                href="#caseInfoReverseDecSCO" aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                        Case Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseInfoReverseDecSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.caseInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Insured Person Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insurePersonInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Insured Person Information</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insurePersonInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.insuredPersonInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- First Pyment Info -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="firstPaymentInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#firstPaymentInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> First Payment Information (HUS)
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="firstPaymentInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.firstPaymentInfo')
                                                        </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Accident Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="accidentNoticeInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accidentNoticeInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Accident Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="accidentNoticeInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.accidentNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Death Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="deathNoticeInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#deathNoticeInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Death Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="deathNoticeInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.deathNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                          <!-- Medical Board Decision -->
                                          <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalBoardDecision_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalBoardDecisionSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Board Decision
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalBoardDecisionSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.medicalBoardDecision')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Medical Certificate Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalCertificateInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalCertificateInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Certificate Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalCertificateInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.SCO.medicalCertificate_SCO')
                                                        {{-- @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.medicalCertificateInfo') --}}
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Preferred Socso Office -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="preferredSocsoOffice_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preferredSocsoOfficeSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Preferred Socso Office
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="preferredSocsoOfficeSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.preferredSocsoOffice')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Case Transferation -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseTransferation_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseTransferationSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Case Transferation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseTransferationSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.caseTransferation')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Bank Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="bankInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Bank Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="bankInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.bankInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Employer Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="employerInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employerInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="employerInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.employerInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Wages Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="WagesInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Wages Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="wagesInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.wagesInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Similar Worker Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="similarWorkerInfo_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#similarWorkerInfoSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Similar Worker Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="similarWorkerInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.similarWorkerInfo')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Insured Person Confirmation -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonConfirmation_reverseDecision_SCO" style="background-color: #FFFFFF;">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonConfirmationSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Confirmation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insuredPersonConfirmationSCO" class="collapse" role="tabpanel" aria-labelledby="insuredPersonConfirmation_reverseDecision_SCO">
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
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.dependentProfile') 
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
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.guardianInfo') 
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
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.dependentEduInfo') 
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
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.bankInfo_IPconfirm') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- FPM -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="fpm_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#fpmSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> FPM
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="fpmSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.fpm')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Investigation Assisstant -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="investigationAss_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationAssSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Investigation Assisstant
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="investigationAssSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.investigationAss')
                                                                </div>
                                                        </div>
                                                </div>

                                                 <!-- Statement -->
                                                 <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="statement_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#statementSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Statement
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="statementSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.statementSCO')
                                                                </div>
                                                        </div>
                                                </div>

                                                 <!-- Case Fact -->
                                                 <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="caseFactSCO_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseFactSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Case Fact
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="caseFactSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.caseFactSCO')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Investigation Information -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="investigationInfoSCO_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationInfoSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Investigation Information
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="investigationInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.investigationInfoSCO')
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Inconsistent Information -->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="inconsistentInfoSCO_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistentInfoSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Inconsistent Information
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="inconsistentInfoSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.inconsistentInfoSCO')
                                                                </div>
                                                        </div>
                                                </div>

                                                 <!-- Quiry Document -->
                                                 <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="quiryDocSCO_reverseDecision_SCO">
                                                                <h6 class="mb-0">
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#quiryDocSCO"
                                                                        aria-expanded="false" aria-controls="collapseOne1">
                                                                        <h6 class="card-title"><i class="fa fa-plus"></i> Quiry Document
                                                                        </h6>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        
                                                        <div id="quiryDocSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">
                                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.quiryDocSCO')
                                                                </div>
                                                        </div>
                                                </div>       
                                </div>
                        </div>

                        <div class="tab-pane p-20" id="recommendationReverseDecSCO" role="tabpanel">
                                <div id="accordionrecommendationReverseDecSCO" role="tablist" class="accordion">
                                      <!-- Recommendation -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendation_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecSCO" href="#recommendationSCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationSCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.recommendation')
                                                        </div>
                                                </div>
                                        </div>   

                                        <!-- Recommendation IO -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendationSAO_reverseDecision_SCO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecSCO" href="#recommendationIO_SCO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation SCO</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO_SCO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.recommendationSCO')
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
