<style>
   .col-10-applicant {
      flex: 0 0 83.33333%;
      max-width: 100%;
   }

   .btn-add-statement {
      text-align: center;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: .875rem;
      line-height: 1.5;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      float: right !important;
      color: #fff !important;
      font-weight: 100 !important;
      background-color: #375aa0 !important;
   }

   .row-claimant {
      display: flex;
      flex-wrap: wrap;
      margin-right: -10px;
      margin-left: -10px;
      float: right !important;

   }

   .modal-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 5px solid #98cb5b;
      border-top-left-radius: .3rem;
      border-top-right-radius: .3rem;
      background: #284682;
      color: #fff;
   }

   .modal-header .close {
      padding: 1rem;
      margin: -1rem -1rem -1rem auto;
      color: #fff;
   }

   .col-md-2-add {
      margin-top: 5px;
   }

</style>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
               <form action="#">
                    <div class="form-body">

                        <!-- ==================================================== DOWNLOAD DOCUMENT ============================================================== -->

                        <h6 class="card-title-sub">Download Document</h6>
                        <hr>
                        <div class="row">
                            <div class='col-md-4'>
                                <div class="form-group">
                                <label class="control-label">Download <span class="required">*</span></label>
                                <select name="download" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="12c">Statement (12c)</option>
                                    <option value="doubtful">Doubtful Contract of Service</option>
                                </select>
                                </div>
                            </div>
                            <div class='col-md-4' id="download_doubtful">
                                <div class="form-group">
                                <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                                <select name="download" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="12c"></option>
                                    <option value="doubtful"></option>
                                </select>
                                </div>
                            </div>
                        </div><br>

                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success text-right">DOWNLOAD TEMPLATE</button>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- ================================================== UPLOAD DOCUMENT =========================================================== -->


                        <h6 class="card-title-sub">Upload Document</h6>
                        <hr>

                        <div class="row">
                            <div class='col-md-4'>
                                <div class="form-group">
                                    <label class="control-label">Upload<span class="required">*</span></label>
                                    <select name="upload" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="12c">Statement (12c)</option>
                                        <option value="doubtful">Doubtful Contract of Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-md-4' id="upload_doubtful">
                                <div class="form-group">
                                <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                                <select name="upload" class="form-control">
                                    <option value="">Please Select</option>
                                </select>
                                </div>
                            </div>
                        </div><br>

                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success text-right">UPLOAD TEMPLATE</button>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- ============================================== STATEMENT (SECTION 12c) =================================================== -->

                        <h6 class="card-title-sub">Statement (Section 12c)</h6>
                        <hr>

                        <div class="col-md-12" id="container">
                            <div class="table-responsive" id="table-medical">
                                <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                            <tr>
                                            <th style='width:1%'>No</th> 
                                            <th style='width:15%'>Date</th> 
                                            <th style='width:15%'>Interviewer Name</th> 
                                            <th style='width:15%'>Interviewee Name</th> 
                                            <th style='width:1%'>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">

                                            <td>
                                            1.                                                   
                                            </td>
                                            <td>
                                            <input type="date" name="" id="" class="form-control">                                                   
                                            </td>
                                            <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                            </td>
                                            <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                            </td>
                                            
                                            <td>
                                                <a id='selectdraft' href='#'><i class="fas fa-edit"></i></a>                                                      
                                            </td>
                                            </tr>
                                    </tbody>
                                </table>

                                <!-- ========================================== START MODAL STATEMENT ================================================= -->

                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-success text-right" id="add_statementz">ADD STATEMENT</button> --}}
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-right" data-toggle="modal" data-target="#exampleModalStatement" data-whatever="@fat">ADD STATEMENT</button><br><br>
                                <div class="modal" id="exampleModalStatement" role="dialog">
                                    <div class="modal-dialog  modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Add Statement</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">
                                            <form action="#" method="POST" id="reset">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="form-body">                   
                                                    <h6 class="card-title-sub">Interview Information</h6>
                                                        <hr>
                                                    <div class='row'>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Statement Date <span class="required">*</span></label>
                                                                <input type="date" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Statement Time <span class="required">*</span></label>
                                                                <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/>

                                                    <h6 class="card-title-sub">Interview Information</h6>
                                                        <hr>
                                                        <div class="row p-t-20">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Interviewer Name</label><span class="required">*</span>
                                                                <select name="iv_name" class="form-control">
                                                                    <option>Please Select</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Others</label>
                                                                <input type="text" id="name" name="name" value="" class="form-control" required>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Identification No</label><span class="required">*</span>
                                                                {{-- @if(!empty($obprofile) && $obprofile->idno !='')
                                                                <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                                                @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                                <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                                                @else --}}
                                                                <input type="text" id="idno" name="idno" value="" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                                                {{-- @endif --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h6 class="card-title-sub">Interview Information</h6>
                                                        <hr>

                                                        <div class="row p-t-20">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Interviewer Type</label><span class="required">*</span>
                                                                <select name="iv_name" class="form-control">
                                                                    <option>Please Select</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('scheme/ob.attr.name')</label><span class="required">*</span>
                                                                <input type="text" id="name" name="name" value="" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Identification Type</label> <span class="required">*</span>
                                
                                                                <select id="idtype" class="form-control" value="@if(!empty($obprofile)){{$obprofile->idtype}} @endif" name="idtype" required>
                                                                        <option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option>
                                                                    @foreach($ref_table->id_type as $id)
                                                                    @if (!empty($obprofile) && $id->ref_code == $obprofile->idtype)
                                                                    <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                                                    @else
                                                                    <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Identification No</label><span class="required">*</span>
                                                                {{-- @if(!empty($obprofile) && $obprofile->idno !='')
                                                                <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                                                @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                                <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                                                @else --}}
                                                                <input type="text" id="idno" name="idno" value="" class="form-control" required >
                                                                <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                                                {{-- @endif --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>@lang('scheme/ob.attr.postal_address')</label>
                                                                <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                
                                                                <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                
                                                                <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                                    <div class='row'>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('scheme/ob.attr.state')<span class="required">*</span></label>
                                                                <select class="form-control clearFields" name="state1" required >
                                                                        @foreach($ref_table->state as $state)
                                                                        <option value="{{$state->ref_code}}">{{$state->desc_en}}</option>
                                                                        @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                                                <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                                                                <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>@lang('scheme/ob.attr.telNo')</label>
                                                                <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Age</label>
                                                                    <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="row p-t-20">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Language</label>
                                                                    <select name="language" class="form-control">
                                                                        <option value="">Please Select</option>
                                                                        <option value="">Malay</option>
                                                                        <option value="">English</option>
                                                                        <option value="others">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" id="others_language">
                                                                <div class="form-group">
                                                                    <label class="control-label">Please Specify</label>
                                                                    <input type="text" id="name" name="name" value="" class="form-control language" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Translator Name</label>
                                                                    <input type="text" id="" name="" value="" class="form-control clearFields">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row p-t-20">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Add Statement?</label>
                                                                    <input type="checkbox" id="add_statement" class="text-center" onclick="addStatement()" class="custom-control-input"><label for="customRadio1">
                                
                                                                    {{-- <select name="add_statement" class="form-control">
                                                                        <option value="">Please Select</option>
                                                                        <option value="Y">Yes</option>
                                                                        <option value="N">No</option>
                                                                    </select> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        {{-- <div class='row' id="without_statement">
                                                            <div class="col-md-12">
                                                                <div class="form-actions">
                                                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">PRINT</button>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <br/>
                                
                                                        <div id="statement" style="display:none">
                                
                                                            <h6 class="card-title-sub">Statement</h6>
                                                            <hr>
                                
                                                            <div class="row p-t-20">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Statement</label>
                                                                        <textarea type="text" name="statement" rows="6" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row p-t-20">
                                                                <div class="col-md-12">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Question Bank Type</label>
                                                                                <select name="ques_bank_type" class="form-control">
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="59">@lang('form/scheme.notice_invalidity.SCO.investigation_doc.appendix59')</option>
                                                                                    <option value="60">@lang('form/scheme.notice_invalidity.SCO.investigation_doc.appendix60')</option>
                                                                                    <option value="61">@lang('form/scheme.notice_invalidity.SCO.investigation_doc.appendix61')</option>
                                                                                    <option value="62">@lang('form/scheme.notice_invalidity.SCO.investigation_doc.appendix62')</option>
                                                                                </select>                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- ========================================= START QUESTION 59 ================================================ -->
                                                                    <!-- ============================================================================================================= -->

                                                                    <div class="col-sm-12" id="question_bank_59" style="display: none">
                                                                        <div class="table-responsive m-t-40" style="height:260px">
                                                                            <table id="tablePeriodical" class="display nowrap table tableS-hover table-striped table-bordered" cellspacing="10">
                                                                            <thead>
                                                                                <tr>
                                                                                <th width="6%">No</th>
                                                                                <th>Question</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_1')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_1')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_2')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_2')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_3')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_3')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_4')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_4')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_5')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_5')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_6')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_6')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_7')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_7')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_8')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_8')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_9')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_9')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_10')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_10')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.1_11')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question1_11')</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <!-- ========================================== START QUESTION 60 ================================================ -->
                                                                    <!-- ============================================================================================================== -->

                                                                    <div class="col-sm-12" id="question_bank_60" style="display: none">
                                                                        <div class="table-responsive m-t-40" style="height:260px">
                                                                            <table id="tablePeriodical" class="display nowrap table table-hover table-striped table-bordered" cellspacing="10">
                                                                            <thead>
                                                                                <tr>
                                                                                <th width="6%">No</th>
                                                                                <th>Question</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_1')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_1')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_2')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_2')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_3')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_3')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_4')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_4')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_5')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_5')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.2_6')</td>
                                                                                    <td>@lang('form/scheme.notice_invalidity.SCO.investigation_doc.question2_6')</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- ============================================ START QUESTION 61 ================================================ -->
                                                                    <!-- ================================================================================================================ -->

                                                                    <div class="col-sm-12" id="question_bank_61" style="display: none">
                                                                        <div class="table-responsive m-t-40" style="height:260px">
                                                                            <table id="tablePeriodical" class="display nowrap table table-hover table-striped table-bordered" cellspacing="10">
                                                                            <thead>
                                                                                <tr>
                                                                                <th width="6%">No</th>
                                                                                <th>Question</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                 <tr>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.4_1')</td>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.question4_1')</td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.4_2')</td>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.question4_2')</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <!-- =========================================== START QUESTION 62 ================================================ -->
                                                                    <!-- =============================================================================================================== -->

                                                                    <div class="col-sm-12" id="question_bank_62" style="display: none">
                                                                        <div class="table-responsive m-t-40" style="height:260px">
                                                                            <table id="tablePeriodical" class="display nowrap table table-hover table-striped table-bordered" cellspacing="10">
                                                                            <thead>
                                                                                <tr>
                                                                                <th width="6%">No</th>
                                                                                <th>Question</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.3_1')</td>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.question3_1')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.3_2')</td>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.question3_2')</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.3_3')</td>
                                                                                    <td>@lang('form/scheme.notice_od.SCO.investigation_doc.question3_3')</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">PRINT</button>
                                                <button type="button" class="btn btn waves-effect waves-light btn-success">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==================================================== DOUBTFUL CONTRACT =============================================================== -->

                        <h6 class="card-title-sub">Doubtful Contract of Service</h6>
                        <hr>

                        <div class="row">
                            <div class='col-md-4'>
                                <div class="form-group">
                                    <label class="control-label">Select PKS(U)91 Form</label>
                                    <select name="pks_form" class="form-control">
                                        <option value="none">Please Select</option>
                                        <option value="carpenter">Carpenter</option>
                                        <option value="director">Director</option>
                                        <option value="driver">Driver</option>
                                        <option value="mandor">Mandor</option>
                                        <option value="general">General</option>
                                    </select>
                                </div>
                            </div>
                            <div id="pls_select" class="do_left">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left">+ ADD</button>
                                </div>
                            </div>
                            <div id="carpenter" class="do_left" style="display:none">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalCarpenter" data-whatever="@fat">+ ADD</button>
                                    @include('scheme.noticeDeath.newClaim.IO.carpenter')
                                </div>
                            </div>
                            <div id="director" class="do_left" style="display:none">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalDirector" data-whatever="@fat">+ ADD</button>
                                    @include('scheme.noticeDeath.newClaim.IO.director')
                                </div>
                            </div>
                            <div id="driver" class="do_left" style="display:none">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalDriver" data-whatever="@fat">+ ADD</button>
                                    @include('scheme.noticeDeath.newClaim.IO.driver')
                                </div>
                            </div>
                            <div id="mandor" class="do_left" style="display:none">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalMandor" data-whatever="@fat">+ ADD</button>
                                    @include('scheme.noticeDeath.newClaim.IO.mandor')
                                </div>
                            </div>
                            <div id="general" class="do_left" style="display:none">
                                <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalGeneral" data-whatever="@fat">+ ADD</button>
                                    @include('scheme.noticeDeath.newClaim.IO.general')
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" id="container">
                            <div class="table-responsive" id="table-medical">
                                <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                        <tr>
                                            <th style='width:1%'>No</th> 
                                            <th style='width:15%'>Employer Code</th> 
                                            <th style='width:15%'>Employer Name</th> 
                                            <th style='width:15%'>PKS(U)91 Form</th> 
                                            <th style='width:15%'>Yes</th> 
                                            <th style='width:15%'>No</th> 
                                            <th style='width:15%'>Score</th> 
                                            <th style='width:1%'>Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">

                                        <td>
                                            1.                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">                                                   
                                        </td>
                                            
                                            <td>
                                            <a id='selectdraft' href='#'><i class="fas fa-edit"></i></a>                                                      
                                            </td>
                                        </tr>
                                </tbody>
                                </table>

                                <!-- ==================================================== START MODAL DOUBTFUL CONTRACT OF SERVICE =============================================== -->

                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-success text-right" id="add_statementz">ADD</button> --}}
                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalDoubtful" data-whatever="@fat">ADD</button><br><br> --}}
                            </div>
                        </div>
                        <br>

                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {
    
   // alert('hello');
   
   $("#download_doubtful").hide();
   $("#upload_doubtful").hide();
   $("#others_language").hide();

   $('select[name=download]').change(function () {
   if (this.value == 'doubtful') {
      $("#download_doubtful").show();
      } else {
      $("#download_doubtful").hide();
      }
   });

   $('select[name=upload]').change(function () {
   if (this.value == 'doubtful') {
      $("#upload_doubtful").show();
      } else {
      $("#upload_doubtful").hide();
      }
   });

    
   $('select[name=language]').change(function () {
      if (this.value == 'others') {
            $("#others_language").show();
            } else {
            $("#others_language").hide();
            $(".language").val('');
      }
   });

   $('select[name=kontrak]').change(function () {
      if (this.value == 'others') {
            $("#lain").show();
            } else {
            $("#lain").hide();
            $(".lain").val('');
      }
   });

   $('select[name=pks_form]').change(function () {
      if (this.value == 'carpenter') {
         $("#pls_select").hide();
         $("#carpenter").show();
         $("#director").hide();
         $("#driver").hide();
         $("#mandor").hide();
         $("#general").hide();
      } 
      else if (this.value == 'director') {
         $("#pls_select").hide();
         $("#carpenter").hide();
         $("#director").show();
         $("#driver").hide();
         $("#mandor").hide();
         $("#general").hide();
      }
      else if (this.value == 'driver') {
         $("#pls_select").hide();
         $("#carpenter").hide();
         $("#director").hide();
         $("#driver").show();
         $("#mandor").hide();
         $("#general").hide();
      }
      else if (this.value == 'mandor') {
         $("#pls_select").hide();
         $("#carpenter").hide();
         $("#director").hide();
         $("#driver").hide();
         $("#mandor").show();
         $("#general").hide();
      }
      else if (this.value == 'general') {
         $("#pls_select").hide();
         $("#carpenter").hide();
         $("#director").hide();
         $("#driver").hide();
         $("#mandor").hide();
         $("#general").show();
      }
      else {
         $("#pls_select").show();
         $("#carpenter").hide();
         $("#director").hide();
         $("#driver").hide();
         $("#mandor").hide();
         $("#general").hide();
      }
   });

   $('select[name=ques_bank_type]').change(function () {
        if (this.value == '59') {
            $("#question_bank_59").show();
            $("#question_bank_60").hide();
            $("#question_bank_61").hide();
            $("#question_bank_62").hide();
        } 
        else if (this.value == '60') {
            $("#question_bank_60").show();
            $("#question_bank_59").hide();
            $("#question_bank_61").hide();
            $("#question_bank_62").hide();
        }
        else if (this.value == '61') {
            $("#question_bank_61").show();
            $("#question_bank_59").hide();
            $("#question_bank_60").hide();
            $("#question_bank_62").hide();
        }
        else if (this.value == '62') {
            $("#question_bank_62").show();
            $("#question_bank_59").hide();
            $("#question_bank_61").hide();
            $("#question_bank_60").hide();
        }
        else {
            $("#question_bank_59").hide();
            $("#question_bank_60").hide();
            $("#question_bank_61").hide();
            $("#question_bank_62").hide();
        }
    });
});

function addStatement() {

    // alert('masuk');
    // Get the checkbox
    var checkBox = document.getElementById("add_statement");
    // Get the output text
    var text = document.getElementById("statement");
    var text2 = document.getElementById("without_statement");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
    text.style.display = "block";
    text2.style.display = "none";
    } else {
    text.style.display = "none";
    text2.style.display = "block";

    }
}

</script>