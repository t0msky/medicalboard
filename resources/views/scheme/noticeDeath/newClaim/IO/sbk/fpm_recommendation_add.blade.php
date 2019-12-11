<div class="row">
   <div class="col-md-12">
      <div id="applicant_accordion0" role="tablist" aria-multiselectable="true">
         <div class="card m-b-0">
            <div class="col-10-applicant">
               <div class="card">
                  <h6 class="card-title-sub">FPM Recommendation History</h6>
                  <hr>
                  <div class="col-md-12" id="container">
                     <div class="table-responsive" id="table-medical">
                        <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                           <thead>
                              <tr>
                              <th style='width:1%'>No</th> 
                              <th style='width:15%'>Recommend Date</th> 
                              <th style='width:15%'>Recommend By</th> 
                              <th style='width:15%'>Role</th> 
                              <th style='width:15%'>Claimant Name</th> 
                              <th style='width:15%'>Claimant ID No</th> 
                              <th style='width:15%'>Claimant Relationship</th> 
                              </tr>
                           </thead>
                           <tbody>
                              {{-- <tr data-expanded="true" class="workrow" id="tr0_0"> --}}

                                 <tr>
                              <td>                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              <td>
                              <input type="hidden" name="" id="" class="form-control">                                                   
                              </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <h6 class="card-title-sub">FPM Claimant Listing</h6>
                  <hr>
                  <div class="table-responsive" id="table-medical">
                     <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                           <tr>
                              <th style='width:1%'>No</th> 
                              <th style='width:15%'>Name</th> 
                              <th style='width:15%'>ID No</th> 
                              <th style='width:15%'>Date of Birth</th> 
                              <th style='width:15%'>Relationship</th> 
                              <th style='width:12%'>Action</th> 
                              <th style='width:15%'>Eligible as Claimant</th> 
                           </tr>
                        </thead>
                        <tbody>
                           {{-- <tr data-expanded="true" class="workrow" id="tr0_0"> --}}
                           <tr>
                              <td></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                              <td>
                                 <a id='viewdraft' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-edit"></i></a>
                                 <a id='view' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-file-alt"></i></a>
                                 <a id='deletedraft' data-toggle="modal" data-target="#modalClaimant" data-whatever="@fat" href="!#"><i class="fas fa-trash-alt "></i></a>
                              </td>
                              <td><input type="hidden" name="" id="" class="form-control"></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>           
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@php($no_ot = 0)
    @php($otinfo == null ? $no_ot = 0 : $no_ot = count($otinfo))
    
    <script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
        
    <script>
    $(document).ready(function() {

        $('#app_rec').on('click',function(){
            // alert("masuk");
                // var delete_id = $(this).attr('id');
               
    var html= '<div id="applicant_collapse0">'+
                '<h6 class="card-title-sub">Applicant Profile</h6>'+
                    '<hr>'+

                    '<div class="card-body">'+
                        '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<div class="form-group">'+
                                        '<label class="control-label">@lang('scheme/applicantDetails.attr.name')</label>'+
                                        '<input type="text" id="name" name="name[]" value="" class="form-control">'+
                                        '<input type="hidden" class="kira" id="kira" name="kira" value="0">'+
                                    '</div>'+
                                '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.relationship')</label>'+
                                        '<select class="form-control" name="relation[]" id="relation">'+ 
                                        '<option value="">Please select</option>'+
                                        '<option value="">Child</option>'+
                                        '<option value="08">Others</option>'+
                                        // '@foreach($applrelation as $aplrl)'+
                                        // '<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>'+
                                        // '@endforeach'+
                                    '</select>'+
                                '</div>'+
                            '</div>'+
                            // '<div class="col-md-6 relay_other_box" id="relayother0">'+
                            //     '<div class="form-group">'+
                            //         '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.pls_specify')</label>'+
                            //         '<input type="text" name="eduothers[]" id="eduothers0" class="form-control">'+
                            //     '</div>'+
                            // '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.id_type')</label>'+
                                    '<select id="idtype" class="form-control" value="" name="idtype[]">'+
                                    '<option value="">Please select</option>'+
                                    '@foreach($idtype as $id)'+
                                    '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                    '@endforeach'+
                                '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.id_no')</label>'+
                                    '<input type="text" id="idno" name="idno[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-12">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.postal_address')</label>'+
                                    '<input type="text" id="add1" name="add1[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-12">'+
                                '<div class="form-group">'+
                                    '<input type="text" id="add2" name="add2[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-12">'+
                                '<div class="form-group">'+
                                    '<input type="text" id="add3" name="add3[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.state')</label>'+
                                    '<select name="statecode[]" id="statecode" class="form-control">'+
                                        '@foreach($state as $s)'+
                                        '<option value="{{$s->refcode}}">{{$s->descen}}</option>'+
                                        '@endforeach'+
                                    '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.city')</label>'+
                                    '<input type="text" id="city" name="city[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.postcode')</label>'+
                                    '<input type="text" id="postcode" name="postcode[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.pobox')</label>'+
                                    '<input type="text" id="pobox" name="pobox[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.lockedbag')</label>'+
                                    '<input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.wdt')</label>'+
                                    '<input type="text" id="wdt" name="wdt[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.telNo')</label>'+
                                    '<input type="text" id="telno" name="telno[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.mobileNo')</label>'+
                                    '<input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-8">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.email')</label>'+
                                    '<input type="text" id="email" name="email[]" value="" class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-4" id="div_amount" style="display:none">'+
                                '<div class="form-group">'+
                                    '<label class="control-label">@lang('scheme/applicantDetails.attr.amount')</label>'+
                                    '<input type="text" id="amount" name="amount[]" value=""  class="form-control">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';

       html +=  '<h6 class="card-title-sub">Bank Information</h6>'+
                    '<hr>'+
                        '<div class="row">'+
                            '<div class="col-12">'+
                                '<div class="card">'+
                                    '<div class="card-body">'+
                                        '<form method="POST" action="/bankinformation" id="reset">'+
                                            '<input type="hidden" name="_token" value="{{csrf_token()}}">'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang("form/scheme.general.collapse.bank.payment")</label>'+
                                                            '<select class="form-control" name="paymode" id="paymode" required>'+
                                                                '<option value="">Please Select</option>'+
                                                                '<option value="02">EFT</option>'+
                                                                '<option value="01">Cheque</option>'+
                                                                // '@foreach($optionpay as $opay)'+
                                                                // '@if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)'+
                                                                // '<option value="{{$opay->refcode}}">{{$opay->descen}}</option>'+
                                                                // '@elseif(empty($bankinfo) && $opay->refcode =="02")'+
                                                                // '<option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>'+
                                                                // '@else'+
                                                                // '<option value="{{$opay->refcode}}"> {{$opay->descen}} </option>'+
                                                                // '@endif'+
                                                                // '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4" id="bank_account">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_account")</label>'+
                                                            '<select class="form-control select" name="bankacc">'+
                                                                '<option>Please Select</option>'+
                                                                '<option value="local">Local</option>'+
                                                                '<option value="overseas">Overseas</option>'+
                                                            '</select>'+
                                                            // '<select class="form-control select" id="bankacc" name="bankacc" onchange="myFunction()">'+
                                                            // '@foreach($optionbank as $ob)'+
                                                            // '@if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)'+
                                                            // '<option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>'+
                                                            // '@else'+
                                                            // '<option value="{{$ob->refcode}}">{{$ob->descen}}</option>'+
                                                            // '@endif'+
                                                            // '@endforeach'+
                                                            // '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div id="bank_reasons">'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.reason")</label>'+
                                                                '<select class="form-control select" name="reasonnoacc">'+
                                                                    '<option>Please Select</option>'+
                                                                    '<option>Identification No</option>'+
                                                                    '<option>Permanent Representative</option>'+
                                                                    '<option>Bankrupt</option>'+
                                                                    '<option>Senior Citizen</option>'+
                                                                    '<option>Legal Restriction</option>'+
                                                                '</select>'+
                                                                // '@if (!empty($bankinfo) && $bankinfo->accexist=='N')'+
                                                                // '<select class="form-control select" name="reasonnoacc" id="reasonnoacc">'+
                                                                // '@else'+
                                                                // '<select class="form-control select" name="reasonnoacc" id="reasonnoacc">'+
                                                                // '@endif'+
                                                                // '@foreach($optionreason as $or)'+
                                                                // '@if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)'+
                                                                // '<option value="{{$or->refcode}}" selected>{{$or->descen}}</option>'+
                                                                // '<option>@lang("scheme/bank.attr.senior")</option>'+
                                                                // '<option>@lang("scheme/bank.attr.legal")</option>'+
                                                                // '@else'+
                                                                // '<option value="{{$or->refcode}}">{{$or->descen}}</option>'+
                                                                // '@endif'+
                                                                // '@endforeach'+
                                                                // '</select>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div id="bank_efts">'+
                                                    '<div id="local_bank">'+
                                                        '<div class="row p-t-20">'+
                                                            '<div class="col-md-4">'+
                                                                '<div class="form-group">'+
                                                                    '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_name")</label>'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                    '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                        '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                        '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                        '@else'+
                                                                        '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                        '@endif'+

                                                                        '@foreach($bankcode as $bc)'+
                                                                        '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->bankcode == $bc->refcode)'+
                                                                        '<option value="{{$bc->refcode}}" selected>{{$bc->descen}}</option>'+
                                                                        '@else'+
                                                                        '<option value="{{$bc->refcode}}">{{$bc->descen}}</option>'+
                                                                        '@endif'+
                                                                        '@endforeach'+
                                                                    '</select>'+
                                                                '</div>'+
                                                            '</div>'+
                                                            '<div class="col-md-4">'+
                                                                '<div class="form-group">'+
                                                                    '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_accNo")</label>'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                    '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">'+
                                                                    '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                    '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">'+
                                                                    '@else'+
                                                                    '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">'+
                                                                    '@endif'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="row p-t-20">'+
                                                            '<div class="col-md-4">'+
                                                                '<div class="form-group">'+
                                                                    '<label class="control-label">@lang("form/scheme.general.collapse.bank.type_acc")</label>'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->acctype)'+
                                                                    '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="{{$bankinfo->acctype}}">'+
                                                                    '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                    '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="">'+
                                                                    '@else'+
                                                                    '<select class="form-control selectLocalBank" name="localacctype" id="localacctype">'+
                                                                    '@endif'+


                                                                    '@foreach($accountype as $at)'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->acctype == $at->refcode)'+
                                                                    '<option value="{{$at->refcode}}" selected>{{$at->descen}}</option>'+
                                                                    '<option>@lang("form/scheme.general.collapse.bank.joint")</option>'+
                                                                    '@else'+
                                                                    '<option value="{{$at->refcode}}">{{$at->descen}}</option>'+
                                                                    '@endif'+
                                                                    '@endforeach'+
                                                                    '<option>@lang("form/scheme.general.collapse.bank.joint")</option>'+

                                                                    '</select>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="row p-t-20">'+
                                                            '<div class="col-md-8">'+
                                                                '<div class="form-group">'+
                                                                    '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_address")</label>'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                    '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectLocalBank clearFields" value="{{$bankinfo->bankaddr}}">'+
                                                                    '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                    '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectLocalBank clearFields" value="">'+
                                                                    '@else'+
                                                                    '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectLocalBank clearFields" value="">'+
                                                                    '@endif'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div id="oversea_banks">'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_name")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->ovbankname)'+
                                                                '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->ovbankname}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@else'+
                                                                '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@endif'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.bank_accNo")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->accno)'+
                                                                '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->accno}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@else'+
                                                                '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@endif'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.ov_type_acc")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                    '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                    '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                    '@else'+
                                                                    '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                    '@endif'+

                                                                    '@foreach($overseasbanktype as $ovt)'+
                                                                    '@if (!empty($bankinfo) && $bankinfo->bankloc == "O" && $bankinfo->acctype == $ovt->refcode)'+
                                                                    '<option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>'+
                                                                    '<option>@lang("form/scheme.general.collapse.bank.joint")</option>'+
                                                                    '@else'+
                                                                    '<option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>'+
                                                                    '@endif'+
                                                                    '@endforeach'+
                                                                    '<option>@lang("form/scheme.general.collapse.bank.joint")</option>'+
                                                                '</select>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.country")</label>'+
                                                                '<input type="text" name="country" id="country" class="form-control selectOverseasBank">'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.currency")</label>'+
                                                                '<input type="text" name="currency" id="currency" class="form-control selectOverseasBank">'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.swift_code")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@else'+
                                                                '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@endif'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="col-md-4">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.bsb_code")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@else'+
                                                                '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@endif'+

                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="row p-t-20">'+
                                                        '<div class="col-md-8">'+
                                                            '<div class="form-group">'+
                                                                '<label class="control-label">@lang("form/scheme.general.collapse.bank.ov_bank_address")</label>'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@else'+
                                                                '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">'+
                                                                '@endif'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</form>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';

                $('#add_applicant_rec').append(html);
                $('#app_rec').hide();


                $('select[id^=relation]').on('change', function () {
    
                    // alert('hello');
                    var nilai = $(this).val();
                    var id = $(this).attr("id");
                    var values = id.split('n');
                    var this_id = values[1];

                    console.log('id'+id);
                    console.log('this_id'+ this_id);

                    //01 - wife
                    //02 - husband
                    //03 - father
                    //04 - mother
                    //05 - child
                    //06 - sibling
                    //07 - Grandparent
                    //08 - others

                    // alert(nilai);

                    if (nilai == '08'){
                        // alert(nilai);
                        $('#div_amount'+this_id).show();

                        // if (this_id == '0'){

                        //     $('.ad_list').remove();

                        //     }

                    }else if(nilai == '03'){
                        $('#btn_add_applicant').show();
                        $('#div_amount'+this_id).hide();

                        if (this_id == '0'){

                            $('.ad_list').remove();

                        }

                    }else if(nilai == '04'){
                        $('#btn_add_applicant').show();
                        $('#div_amount'+this_id).hide();

                        if (this_id == '0'){

                            $('.ad_list').remove();

                        }

                    }else if(nilai == '01'){
                        $('#btn_add_applicant').show();
                        $('#div_amount'+this_id).hide();

                    }else if(nilai == '02' || nilai == '05' || nilai == '06' || nilai == '07'){ 
                        $('#div_amount'+this_id).hide();//irina add 22072019	
                        $('#btn_add_applicant').hide();

                        if (this_id == '0'){

                            var count = document.getElementsByClassName('kira');
                            var len = count.length;
                            // alert(len);

                            for (var i = 0; i < count.length; i ++) {
                            var val = count[i].getAttribute('value');
                            //for (var j=0; j<len; j++) {

                                //alert(j);

                                // var val = count[j].value;
                                // alert(val);
                                    if (val !== '0'){

                                        

                                        var relation = $('#relation'+val).val();
                                        // if(relation !== '02' && relation !== '05' && relation !== '06' && relation !== '07'){

                                            $('#applicant_accordion'+val).remove();

                                            // $('#applicant_accordion'+val).find('input:text').val('');
                                            // $('#applicant_accordion'+val).find('select').val('');
                                            // $('#applicant_accordion'+val).find('select').prop('disabled', false);

                                        // }
                                        
                                    }

                            }

                            $('.ad_list').remove();

                        }

                    }else{
                        $('#btn_add_applicant').hide();
                        $('#div_amount'+id).hide();
                    }
                });

                $("#bank_account").hide();
                $("#bank_reasons").hide();
                $("#bank_efts").hide();
                $("#oversea_banks").hide();


            $('select[name=paymode]').change(function () {
                if (this.value == '02') {
                $('#bank_reasons').hide();
                $('#bank_account').show();
                $('#bank_efts').hide();
                $('#oversea_banks').hide();
            }
            else if (this.value == '01'){
            // alert('try');
                $('#bank_reasons').show();
                $('#bank_account').hide();
                $('#bank_efts').hide();
                $('#oversea_banks').hide();
                $('#local_bank').hide();
            }
            else{
                $('#bank_reasons').hide();
                $('#bank_account').hide();
                $('#bank_efts').hide();
                $('#oversea_banks').hide();
                $('#local_bank').hide();
            }

            $('select[name=bankacc]').change(function () {
                if (this.value == 'local') {
                    $('#bank_efts').show();
                    $('#oversea_banks').hide();
                    $(".selectOverseasBank").val('');
                } else if (this.value == 'overseas') {
                    $('#bank_efts').hide();
                    $('#oversea_banks').show();
                    $(".selectLocalBank").val('');
                } else {
                    $('#bank_efts').hide();
                    $('#oversea_banks').hide();
                    $(".selectOverseasBank").val('');
                    $(".selectLocalBank").val('');
                }
            });
        });
    });
});

</script>