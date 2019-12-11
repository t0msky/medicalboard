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

   .form-row-claimant {
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
  
  
<div class="form-row">
   <div class="col-lg-12">
       <div class="card">
           <div class="card-body">
               <form action="#">

                       <!-- ==================================================== DOWNLOAD DOCUMENT ============================================================== -->

                       <h6 class="card-title-sub">Download Document</h6>
                       <hr>
                       <div class="form-row">
                           <div class='form-group col-md-12 col-lg-4'>
                               <label class="control-label">Download <span class="required">*</span></label>
                               <select name="download" class="form-control">
                                   <option value="">Please Select</option>
                                   <option value="12c">Statement (12c)</option>
                                   <option value="doubtful">Doubtful Contract of Service</option>
                               </select>
                           </div>
                           <div class='form-group col-md-12 col-lg-4' id="download_doubtful">
                               <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                               <select name="download" class="form-control">
                                   <option value="">Please Select</option>
                                   <option value="12c"></option>
                                   <option value="doubtful"></option>
                               </select>
                           </div>
                       </div><br>

                       <div class='form-row'>
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

                       <div class="form-row">
                           <div class='form-group col-md-12 col-lg-4'>
                                   <label class="control-label">Upload<span class="required">*</span></label>
                                   <select name="upload" class="form-control">
                                       <option value="">Please Select</option>
                                       <option value="12c">Statement (12c)</option>
                                       <option value="doubtful">Doubtful Contract of Service</option>
                                   </select>
                           </div>
                           <div class='form-group col-md-12 col-lg-4' id="upload_doubtful">
                               <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                               <select name="upload" class="form-control">
                                   <option value="">Please Select</option>
                               </select>
                           </div>
                       </div><br>

                       <div class='form-row'>
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
                            <div class="card-header">

                           <div class="table-responsive">
                               <table class="table table-sm table-bordered">
                                   <thead>
                                           <tr>
                                           <th style='width:1%'>No</th> 
                                           <th style='width:7%'>Date</th> 
                                           <th style='width:15%'>Interviewer Name</th> 
                                           <th style='width:15%'>Interviewee Name</th> 
                                           <th style='width:5%'>Action</th>
                                           </tr>
                                   </thead>
                                   <tbody>
                                           <tr data-expanded="true" class="workform-row" id="tr0_0">

                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           
                                           <td>
                                                <a class='updatedraft'><i class="fas fa-edit"></i></a>
                                                <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                                <a class='view'><i class="fas fa-file-alt"  href='#' data-toggle="modal" data-target="#viewStatement"></i></a><br>
                                                                                            
                                           </td>
                                           </tr>
                                   </tbody>
                               </table>

                               <!-- ========================================== ADD MODAL STATEMENT ================================================= -->

                               {{-- <button type="button" class="btn btn waves-effect waves-light btn-success text-right" id="add_statementz">ADD STATEMENT</button> --}}
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-right" data-toggle="modal" data-target="#exampleModalStatement" data-whatever="@fat">ADD STATEMENT</button><br><br>
                               <div class="modal" id="exampleModalStatement" role="dialog">
                                   <div class="modal-dialog modal-xl" role="document">
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
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label class="control-label">Statement Date <span class="required">*</span></label>
                                                           <input type="date" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label>Statement Time <span class="required">*</span></label>
                                                           <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                       </div>
                                                   </div>
                                                   <br/>

                                                   <h6 class="card-title-sub">Interview Information</h6>
                                                       <hr>
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Interviewer Name</label><span class="required">*</span>
                                                               <select name="iv_name" class="form-control">
                                                                   <option>Please Select</option>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class='form-row'>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                                   <label class="control-label">Others</label>
                                                                   <input type="text" id="name" name="name" value="" class="form-control" required>    
                                                           </div>
                                                       </div>
                                                       <div class='form-row'>
                                                           <div class="form-group col-md-12 col-lg-4">
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

                                                       <h6 class="card-title-sub">Interview Information</h6>
                                                       <hr>

                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Interviewer Type</label><span class="required">*</span>
                                                               <select name="iv_name" class="form-control">
                                                                   <option>Please Select</option>
                                                               </select>
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">@lang('scheme/ob.attr.name')</label><span class="required">*</span>
                                                               <input type="text" id="name" name="name" value="" class="form-control" required>
                                                           </div>
                                                       </div>
                                                       <div class='form-row'>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                                <table id="tblwb" class="table table-sm table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>@lang('form/personal-info.id_no')</th>
                                                                                <th>@lang('form/personal-info.id_type')</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="align-middle">
                                                                            @foreach($ref_table->id_type as $id)
                                                                            @if (!empty($obprofile) && $id->ref_code == $id)
                                                                            <tr>
                                                                                <td><input type="hidden" name="idtype" id="idtype" value="{{$obprofile->id_type}}" required>{{$id->desc_en}}</td>
                                                                                <td><input type=" hidden" id="idno" name="idno" value="{{ $idno ?? '' }}" required>{{ $idno ?? '' }}</td>
                                                                            </tr>
                                                                            @endif
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                               <label class="control-label">Identification Type</label> <span class="required">*</span>
                               
                                                               {{-- <select id="idtype" class="form-control" value="@if(!empty($obprofile)){{$obprofile->id_type}} @endif" name="idtype" required>
                                                                  <option value="">@if(!empty($obprofile)){{$obprofile->id_type}} @endif</option>
                                                                   @foreach($ref_table->id_type as $id)
                                                                   @if (!empty($obprofile) && $id->ref_code == $obprofile->id_type)
                                                                   <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                                                                   @else
                                                                   <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                                   @endif
                                                                   @endforeach
                                                               </select> --}}
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4">
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
                                                   
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-12">
                                                               <label>@lang('scheme/ob.attr.postal_address')</label>
                                                               <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-12">
                                                               <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-12">
                                                               <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                                                           </div>
                                                       </div>
                                       
                                                       <div class='form-row'>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                                   <label class="control-label">@lang('scheme/ob.attr.state')<span class="required">*</span></label>
                                                                   <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                                                   <select name='state' id='state' class='form-control'>
                                                                       @foreach($ref_table->state as $s)
                                                                       @if(!empty($obprofile) && $obprofile->statecode == $s->ref_code)
                                                                       <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                                                       @else
                                                                       <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                                       @endif
                                                                       @endforeach
                                                                   </select>
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                                   <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                                                   <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                                                               <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                                                           </div>
                                                       </div>
                                                   <div class="form-row">
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label>@lang('scheme/ob.attr.telNo')</label>
                                                           <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields">
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label>Age</label>
                                                               <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                                           </div>
                                                       </div>
                               
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Language</label>
                                                               <select name="language" class="form-control">
                                                                   <option value="">Please Select</option>
                                                                   <option value="">Malay</option>
                                                                   <option value="">English</option>
                                                                   <option value="others">Others</option>
                                                               </select>
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4" id="others_language">
                                                               <label class="control-label">Please Specify</label>
                                                               <input type="text" id="name" name="name" value="" class="form-control language" required>
                                                           </div>
                                                       </div>
                               
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label>Translator Name</label>
                                                               <input type="text" id="" name="" value="" class="form-control clearFields">
                                                           </div>
                                                       </div>
                                                       
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Add Statement?</label>
                                                               <input type="checkbox" id="add_statement" class="text-center" onclick="addStatement()" class="custom-control-input"><label for="customRadio1">
                           
                                                               {{-- <select name="add_statement" class="form-control">
                                                                   <option value="">Please Select</option>
                                                                   <option value="Y">Yes</option>
                                                                   <option value="N">No</option>
                                                               </select> --}}
                                                           </div>
                                                       </div>
                               
                                                       {{-- <div class='form-row' id="without_statement">
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
                               
                                                           <div class="form-row">
                                                               <div class="form-group col-md-12 col-lg-6">
                                                                   <label class="control-label">Statement</label>
                                                                   <textarea type="text" name="statement" form-rows="6" class="form-control"></textarea>
                                                               </div>
                                                           </div>
                                                           <div class="form-row">
                                                               <div class="col-md-12">
                                                                   <div class="form-row">
                                                                       <div class="form-group col-md-12 col-lg-6">
                                                                           <label class="control-label">Question Bank Type</label>
                                                                           <select name="ques_bank_type" class="form-control">
                                                                               <option value="">Please Select</option>
                                                                               <option value="216">Panduan Soalan Pernyataan Orang Tanggungan Balu Duda</option>
                                                                               <option value="217">Panduan Soalan Pernyataan Orang Tanggungan Ibu Bapa</option>
                                                                               <option value="218">Panduan Soalan Pernyataan Orang Tanggungan Datuk Nenek</option>
                                                                               <option value="219">Panduan Soalan Pernyataan Perbelanjaan FPM</option>
                                                                           </select>                                                                    
                                                                       </div>
                                                                   </div>

                                                                   <!-- ========================================= START QUESTION 216 ================================================ -->
                                                                   <!-- ============================================================================================================= -->

                                                                   <div class="col-sm-12" id="question_bank_216" style="display: none">
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
                                                                                   <td colspan="2"><span style="font-weight: bold">HUBUNGAN</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.1</td>
                                                                                   <td>Apakah hubungan dengan OB?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.2</td>
                                                                                   <td>Bilakah Tarikh Perkahwinan dengan OB?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.3</td>
                                                                                   <td>Perkahwinan selepas 01/03/1982, Adakah perkahwinan didaftarkan?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.3 (a)</td>
                                                                                   <td>Perkahwinan sebelum 01/03/1982, Adakah perkahwinan didaftarkan?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">KEBERGANTUNGAN (KEMATIAN SEBELUM 01/05/2005)</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.4</td>
                                                                                   <td>Jika duda, nyatakan jumlah pendapatan dan perbelanjaan bulanan sebulan sebelum bulan kematian.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td></td>
                                                                                   <td>Pendapatan Suami dan Isteri:<br>
                                                                                           1) Jumlah pendapatan suami.<br>
                                                                                           2) Jumlah pendapatan isteri.<br>
                                                                                           3) Jumlah pendapatan suami dan isteri.<br><br>
                                                                                           
                                                                                           Perbelanjaan: <br>
                                                                                           1) Sewa rumah<br>
                                                                                           2) Bil utiliti<br>
                                                                                           3) Perbelanjaan Rumah<br>
                                                                                           4) Perbelanjaan Anak-anak<br>
                                                                                           5) Sumbangan OB<br>
                                                                                           6) Lain-lain. Sila Nyatakan:_______________<br>
                                                                                           7) Jumlah perbelanjaan<br>
                                                                                           </td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.5</td>
                                                                                   <td>Adakah mempunyai balu/duda lain?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">ANAK-ANAK</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.6</td>
                                                                                   <td>Bilangan anak berumur dibawah 21 tahun pada masa kematian.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.7</td>
                                                                                   <td>Senaraikan nama, umur dan status anak.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.8</td>
                                                                                   <td>Status anak angkat<br>
                                                                                       Status anak cacat<br>
                                                                                       Status kahwin<br>
                                                                                       Status mati<br>
                                                                                       Status belajar<br>
                                                                                       Status anak tiri<br>
                                                                                   </td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">STATUS FPM</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.9</td>
                                                                                   <td>Siapa mengeluarkan perbelanjaan FPM</td>
                                                                               </tr>
                                                                           </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>

                                                                   <!-- ========================================== START QUESTION 217 ================================================ -->
                                                                   <!-- ============================================================================================================== -->

                                                                   <div class="col-sm-12" id="question_bank_217" style="display: none">
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
                                                                                   <td colspan="2"><span style="font-weight: bold">HUBUNGAN</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.1</td>
                                                                                   <td>Apakah hubungan dengan OB?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">KEBERGANTUNGAN (KEMATIAN SEBELUM 05/2005)</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.2</td>
                                                                                   <td>Nyatakan jumlah pendapatan dan perbelanjaan bulanan sebulan sebelum bulan kematian.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.3</td>
                                                                                   <td>Pendapatan Ibu dan Bapa:<br>
                                                                                           1) Jumlah pendapatan Ibu.<br>
                                                                                           2) Jumlah pendapatan Bapa.<br>
                                                                                           3) Sumbangan si mati.<br>
                                                                                           4) Sumbangan adik beradik yang lain.<br>
                                                                                           5) Jumlah pendapatan semua di atas.<br><br>
                                                                                           
                                                                                           Perbelanjaan: <br>
                                                                                           1) Sewa rumah<br>
                                                                                           2) Bil utiliti<br>
                                                                                           3) Perbelanjaan Rumah<br>
                                                                                           4) Perbelanjaan Anak-anak<br>
                                                                                           5) Sumbangan si mati<br>
                                                                                           6) Lain-lain. Sila Nyatakan:_______________<br>
                                                                                           7) Jumlah perbelanjaan<br>
                                                                                   </td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">ADIK BERADIK</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.4</td>
                                                                                   <td>Bilangan adik beradik berumur dibawah 21 tahun pada masa kematian.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.5</td>
                                                                                   <td>Senaraikan nama, umur dan status adik beradik.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.6</td>
                                                                                   <td>Status kahwin<br>
                                                                                       Status mati
                                                                                   </td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">STATUS FPM</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.7</td>
                                                                                   <td>Siapa mengeluarkan perbelanjaan FPM</td>
                                                                               </tr>
                                                                           </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>

                                                                   <!-- =========================================== START QUESTION 218 ================================================ -->
                                                                   <!-- =============================================================================================================== -->

                                                                   <div class="col-sm-12" id="question_bank_218" style="display: none">
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
                                                                                   <td colspan="2"><span style="font-weight: bold">HUBUNGAN</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.1</td>
                                                                                   <td>Apakah hubungan dengan OB?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">KEBERGANTUNGAN (KEMATIAN SEBELUM 05/2005)</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.2</td>
                                                                                   <td>Nyatakan jumlah pendapatan dan perbelanjaan bulanan sebulan sebelum bulan kematian.</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.3</td>
                                                                                   <td>Pendapatan Ibu dan Bapa:<br>
                                                                                       1) Jumlah pendapatan Ibu.<br>
                                                                                       2) Jumlah pendapatan Bapa.<br>
                                                                                       3) Sumbangan si mati.<br>
                                                                                       4) Sumbangan adik beradik yang lain.<br>
                                                                                       5) Jumlah pendapatan semua di atas.<br><br>
                                                                                       
                                                                                       Perbelanjaan: <br>
                                                                                       1) Sewa rumah<br>
                                                                                       2) Bil utiliti<br>
                                                                                       3) Perbelanjaan Rumah<br>
                                                                                       4) Perbelanjaan Anak-anak<br>
                                                                                       5) Sumbangan si mati<br>
                                                                                       6) Lain-lain. Sila Nyatakan:_______________<br>
                                                                                       7) Jumlah perbelanjaan<br>
                                                                                   </td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">STATUS FPM</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.4</td>
                                                                                   <td>Siapa mengeluarkan perbelanjaan FPM</td>
                                                                               </tr>
                                                                           </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>

                                                                   <!-- ============================================ START QUESTION 219 ================================================ -->
                                                                   <!-- ================================================================================================================ -->

                                                                   <div class="col-sm-12" id="question_bank_219" style="display: none">
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
                                                                                   <td colspan="2"><span style="font-weight: bold">HUBUNGAN</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.1</td>
                                                                                   <td>Apakah hubungan dengan OB?</td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td colspan="2"><span style="font-weight: bold">STATUS FPM</span></td>
                                                                               </tr>
                                                                               <tr>
                                                                                   <td>1.2</td>
                                                                                   <td>Siapa mengeluarkan perbelanjaan FPM</td>
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

                               <!-- ========================================== VIEW STATEMENT MODAL ============================================== -->
                               <div class="modal" id="viewStatement" role="dialog">
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
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label class="control-label">Statement Date <span class="required">*</span></label>
                                                           <input type="date" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label>Statement Time <span class="required">*</span></label>
                                                           <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif" readonly>
                                                       </div>
                                                   </div>
                                                   <br/>

                                                   <h6 class="card-title-sub">Interview Information</h6>
                                                       <hr>
                                                       <div class="form-row">
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label class="control-label">Interviewer Name</label><span class="required">*</span>
                                                           <input type="text" id="ivname" name="ivname" value="" class="form-control" readonly>
                                                       </div>
                                                   </div>
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label class="control-label">Others</label>
                                                           <input type="text" id="name" name="name" value="" class="form-control" readonly>    
                                                       </div>
                                                   </div>
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label class="control-label">Identification No</label><span class="required">*</span>
                                                           {{-- @if(!empty($obprofile) && $obprofile->idno !='')
                                                           <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                                           <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                                           @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                           <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                                           <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                                           @else --}}
                                                           <input type="text" id="idno" name="idno" value="" class="form-control" readonly>
                                                           <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                                           {{-- @endif --}}
                                                       </div>
                                                   </div>

                                                   <h6 class="card-title-sub">Interview Information</h6>
                                                       <hr>

                                                       <div class="form-row">
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Interviewer Type</label><span class="required">*</span>
                                                               <input type="text" id="ivtype" name="ivtype" value="" class="form-control" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">@lang('scheme/ob.attr.name')</label><span class="required">*</span>
                                                               <input type="text" id="name" name="name" value="" class="form-control" readonly>
                                                       </div>
                                                   </div>
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Identification Type</label> <span class="required">*</span>
                                                               <input type="text" id="idtype" name="idtype" value="" class="form-control" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Identification No</label><span class="required">*</span>
                                                               {{-- @if(!empty($obprofile) && $obprofile->idno !='')
                                                               <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                                               <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                                               @elseif(!empty($obformassist) && $obformassist->idno !='')
                                                               <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                                               <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                                               @else --}}
                                                               <input type="text" id="idno" name="idno" value="" class="form-control" readonly>
                                                               <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                                               {{-- @endif --}}
                                                       </div>
                                                   </div>
                                                   
                                                   <div class="form-row">
                                                       <div class="form-group col-md-12 col-lg-12">
                                                               <label>@lang('scheme/ob.attr.postal_address')</label>
                                                               <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-12"> 
                                                               <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-12">
                                                               <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" readonly>
                                                       </div>
                                                   </div>
                                       
                                                   <div class='form-row'>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">@lang('scheme/ob.attr.state')<span class="required">*</span></label>
                                                               <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->state_code }} @endif" class="form-control"-->
                                                               <input type="text" id="state" name="state" value="" class="form-control clearFields" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                                               <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                                                               <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields" readonly>
                                                       </div>
                                                   </div>
                                                   <div class="form-row">
                                                       <div class="form-group col-md-12 col-lg-4">
                                                           <label>@lang('scheme/ob.attr.telNo')</label>
                                                           <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields" readonly>
                                                       </div>
                                                       <div class="form-group col-md-12 col-lg-4">
                                                               <label>Age</label>
                                                               <input type="text" id="telno" name="telno" value="" class="form-control clearFields" readonly>
                                                           </div>
                                                       </div>
                               
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Language</label>
                                                               <input type="text" id="language" name="language" value="" class="form-control language" readonly>
                                                           </div>
                                                           <div class="form-group col-md-12 col-lg-4" id="others_language">
                                                               <label class="control-label">Please Specify</label>
                                                               <input type="text" id="name" name="name" value="" class="form-control language" readonly>
                                                           </div>
                                                       </div>
                               
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label>Translator Name</label>
                                                               <input type="text" id="" name="" value="" class="form-control clearFields" readonly>
                                                           </div>
                                                       </div>
                                                       
                                                       <div class="form-row">
                                                           <div class="form-group col-md-12 col-lg-4">
                                                               <label class="control-label">Add Statement?</label>
                                                               <input type="checkbox" id="add_statement" class="text-center" onclick="addStatement()" class="custom-control-input" readonly><label for="customRadio1">
                           
                                                               {{-- <select name="add_statement" class="form-control">
                                                                   <option value="">Please Select</option>
                                                                   <option value="Y">Yes</option>
                                                                   <option value="N">No</option>
                                                               </select> --}}
                                                           </div>
                                                       </div>
                               
                                                       {{-- <div class='form-row' id="without_statement">
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
                               
                                                           <div class="form-row">
                                                               <div class="form-group col-md-12 col-lg-6">
                                                                   <label class="control-label">Statement</label>
                                                                   <textarea type="text" name="statement" form-rows="6" class="form-control" readonly></textarea>
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
                       </div>

                       <!-- ==================================================== DOUBTFUL CONTRACT =============================================================== -->

                       <h6 class="card-title-sub">Doubtful Contract of Service</h6>
                       <hr>

                       <div class="form-row">
                           <div class='form-group col-md-12 col-lg-4'>
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
                           <div id="pls_select" class="do_left">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left">+ ADD</button>
                               </div>
                           </div>
                           <div id="carpenter" class="do_left" style="display:none">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalCarpenter" data-whatever="@fat">+ ADD</button>
                                   @include('scheme.general.investigation.carpenter')
                               </div>
                           </div>
                           <div id="director" class="do_left" style="display:none">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalDirector" data-whatever="@fat">+ ADD</button>
                                   @include('scheme.general.investigation.director')
                               </div>
                           </div>
                           <div id="driver" class="do_left" style="display:none">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalDriver" data-whatever="@fat">+ ADD</button>
                                   @include('scheme.general.investigation.driver')
                               </div>
                           </div>
                           <div id="mandor" class="do_left" style="display:none">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalMandor" data-whatever="@fat">+ ADD</button>
                                   @include('scheme.general.investigation.mandor')
                               </div>
                           </div>
                           <div id="general" class="do_left" style="display:none">
                               <div class="form-actions">
                               <button type="button" class="btn btn waves-effect waves-light btn-success text-left" data-toggle="modal" data-target="#exampleModalGeneral" data-whatever="@fat">+ ADD</button>
                                   @include('scheme.general.investigation.general')
                               </div>
                           </div>
                       </div>

                       <div class="col-md-12" id="container">
                           <div class="table-responsive" id="table-medical">
                               <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                               <thead>
                                   <tr>
                                       <th style='width:1%'>No</th> 
                                       <th style='width:10%'>Employer Code</th> 
                                       <th style='width:22%'>Employer Name</th> 
                                       <th style='width:15%'>PKS(U)91 Form</th> 
                                       <th style='width:5%'>Yes</th> 
                                       <th style='width:5%'>No</th> 
                                       <th style='width:5%'>Score</th> 
                                       <th style='width:9%'>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr data-expanded="true" class="workform-row" id="tr0_0">

                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                           
                                       <td>
                                            <a class='updatedraft'><i class="fas fa-edit"></i></a>
                                            <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                            <a class='view'><i class="fas fa-file-alt"  href='#' data-toggle="modal" data-target="#viewStatement"></i></a><br>     
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

                       <div class='form-row'>
                           <div class="col-md-12">
                               <div class="form-actions">
                               <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                               <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
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
          if (this.value == '216') {
              $("#question_bank_216").show();
              $("#question_bank_217").hide();
              $("#question_bank_218").hide();
              $("#question_bank_218").hide();
          } 
          else if (this.value == '217') {
              $("#question_bank_217").show();
              $("#question_bank_216").hide();
              $("#question_bank_218").hide();
              $("#question_bank_219").hide();
          }
          else if (this.value == '218') {
              $("#question_bank_218").show();
              $("#question_bank_216").hide();
              $("#question_bank_217").hide();
              $("#question_bank_219").hide();
          }
          else if (this.value == '219') {
              $("#question_bank_219").show();
              $("#question_bank_216").hide();
              $("#question_bank_217").hide();
              $("#question_bank_218").hide();
          }
          else {
              $("#question_bank_216").hide();
              $("#question_bank_217").hide();
              $("#question_bank_218").hide();
              $("#question_bank_219").hide();
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