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
                                <a class="nav-link active" data-toggle="tab" href="#remarksReverseDecSAO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span>
                                        <span class="hidden-xs-down">Remarks</span>
                                </a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#claimDetailsReverseDecSAO" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                        <span class="hidden-xs-down">Claim Details</span>
                                </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommendationReverseDecSAO"
                                role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                    class="hidden-xs-down">Recommendation</span></a>
                        </li>
                        <li class="nav-item"> 
                                <a class="nav-link" data-toggle="tab" href="#supportingDocumentReverseDecSAO" role="tab">
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
                        <div class="tab-pane p-20 active" id="remarksReverseDecSAO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.remarksSAO')
                        </div>
                        <div class="tab-pane p-20" id="supportingDocumentReverseDecSAO" role="tabpanel">
                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.supportingDocSAO')
                        </div>
                        <div class="tab-pane p-20" id="claimDetailsReverseDecSAO" role="tabpanel">
                                <div id="accordion2" role="tablist" class="accordion">

                                        <!-- Case Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseInfo_reverse_decision_bk_to_bbk_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2"
                                                                href="#caseInfoReverseDecSAO" aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                        Case Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseInfoReverseDecSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.caseInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Insured Person Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Insured Person Information</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insuredPersonInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.insuredPersonInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- First Pyment Info -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="firstPaymentInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#firstPaymentInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> First Payment Information (HUS)
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="firstPaymentInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.firstPaymentInfo')
                                                        </div>
                                                </div>
                                        </div>
                                        
                                        <!-- Accident Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="accidentNoticeInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#accidentNoticeInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Accident Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="accidentNoticeInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.accidentNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Death Notice Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="deathNoticeInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#deathNoticeInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Death Notice Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="deathNoticeInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.deathNoticeInfo')
                                                        </div>
                                                </div>
                                        </div>

                                          <!-- Medical Board Decision -->
                                          <!-- <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalBoardDecision_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalBoardDecisionSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Board Decision
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalBoardDecisionSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.medicalBoardDecision')
                                                        </div>
                                                </div>
                                        </div> -->

                                         <!-- Medical Certificate Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="medicalCertificateInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalCertificateInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Medical Certificate Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="medicalCertificateInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.medicalCertificateInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Preferred Socso Office -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="preferredSocsoOffice_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preferredSocsoOfficeSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Preferred Socso Office
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="preferredSocsoOfficeSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.preferredSocsoOffice')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Case Transferation -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseTransferation_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseTransferationSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Case Transferation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="caseTransferationSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.caseTransferation')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Bank Information -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="bankInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Bank Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="bankInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.bankInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Employer Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="employerInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employerInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="employerInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.employerInformation')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Wages Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="WagesInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Wages Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="wagesInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.wagesInfo')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Similar Worker Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="similarWorkerInfo_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#similarWorkerInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Similar Worker Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="similarWorkerInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.similarWorkerInfo')
                                                        </div>
                                                </div>
                                        </div>

                                         <!-- Insured Person Confirmation -->
                                         <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="insuredPersonConfirmation_reverseDecision_SAO" style="background-color: #FFFFFF;">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#insuredPersonConfirmationSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Confirmation
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="insuredPersonConfirmationSAO" class="collapse" role="tabpanel" aria-labelledby="insuredPersonConfirmation_reverseDecision_SAO">
                                                        <div class="card-body">
                                                                <div id="accordionLesisure" role="tablist" class="accordion" >

                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingDependentProfileSAO">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapseDependentProfileSAO" aria-expanded="true" aria-controls="collapseDependentProfileSAO">
                                                                                                <i class="fa fa-plus"></i>  Dependant Profile
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapseDependentProfileSAO" class="collapse" role="tabpanel" aria-labelledby="headingDependentProfileSAO">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.dependentProfile') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingGuardianInfoSAO">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapseGuardianInfoSAO" aria-expanded="true" aria-controls="collapseGuardianInfoSAO">
                                                                                                <i class="fa fa-plus"></i>  Guardian Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapseGuardianInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingGuardianInfoSAO">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.guardianInfo') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingdependentEduInfoSAO">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapsedependentEduInfoSAO" aria-expanded="true" aria-controls="collapsedependentEduInfoSAO">
                                                                                                <i class="fa fa-plus"></i>  Dependant Education Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapsedependentEduInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingdependentEduInfo">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.dependentEduInfo') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="card m-b-0">
                                                                                <div class="card-header" style="background-color: #d8e7e7;" role="tab" id="headingbankInfo_IPconfirmSAO">
                                                                                        <h6 class="mb-0">                           
                                                                                                <a class="link" data-toggle="collapse" data-parent="#accordionLesisure" href="#collapsebankInfo_IPconfirmSAO" aria-expanded="true" aria-controls="collapsebankInfo_IPconfirmSAO">
                                                                                                <i class="fa fa-plus"></i>  Bank Information
                                                                                                </a>
                                                                                        </h6>
                                                                                </div>
                                                                                <div id="collapsebankInfo_IPconfirmSAO" class="collapse" role="tabpanel" aria-labelledby="headingbankInfo_IPconfirmSAO">
                                                                                        <div class="card-body">
                                                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.bankInfo_IPconfirm') 
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- FPM -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="fpm_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#fpmSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> FPM
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="fpmSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.fpm')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Similar Worker Detials -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="similarWorkerDet_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#similarWorkerDetSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Similar Worker Detials
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="similarWorkerDetSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                        @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.similarWorkerDet')
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- Statement -->
                                                <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="statement_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#statementSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Statement
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="statementSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.statementSAO')
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- Case Fact -->
                                                <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="caseFactSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseFactSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Case Fact
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="caseFactSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.caseFactSAO')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Investigation Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="investigationInfoSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Investigation Report
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="investigationInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.investigationInfoSAO')
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- Inconsistent Information -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="inconsistentInfoSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistentInfoSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Inconsistent Information
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="inconsistentInfoSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.inconsistentInfoSAO')
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- Quiry Document -->
                                                <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="quiryDocSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#quiryDocSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Quiry Document
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="quiryDocSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.quiryDocSAO')
                                                        </div>
                                                </div>
                                        </div>

                                                <!-- Approval-->
                                                <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="approvalSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#approvalSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i> Approval
                                                                </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                
                                                <div id="approvalSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.approval')
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>

                        <div class="tab-pane p-20" id="recommendationReverseDecSAO" role="tabpanel">
                                <div id="accordionrecommendationReverseDecSAO" role="tablist" class="accordion">
                                      <!-- Recommendation -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendation_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecSAO" href="#recommendationSAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation </h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationSAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.recommendation')
                                                        </div>
                                                </div>
                                        </div>   

                                        <!-- Recommendation IO -->
                                      <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="recommendationSAO_reverseDecision_SAO">
                                                        <h6 class="mb-0">
                                                        <a class="link" data-toggle="collapse" data-parent="#accordionrecommendationReverseDecSAO" href="#recommendationIO_SAO"
                                                                aria-expanded="false" aria-controls="collapseOne1">
                                                                <h6 class="card-title"><i class="fa fa-plus"></i>
                                                                Recommendation SAO</h6>
                                                        </a>
                                                        </h6>
                                                </div>
                                                <div id="recommendationIO_SAO" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                        <div class="card-body">
                                                                @include('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.recommendationSAO')
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
