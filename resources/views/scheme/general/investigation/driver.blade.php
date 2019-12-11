<div class="modal fade bs-example-modal-lg" id="exampleModalDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - Driver (D)</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
            <form action="#" method="POST" id="reset">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
               <div class="form-body">                   
               <h6 class="card-title-sub">Case Information</h6>
                  <hr>
                     <div class='row'>
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">Case ID<span class="required">*</span></label>
                                 <input type="text" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">Survey Date<span class="required">*</span></label>
                                 <input type="date" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                           </div>
                        </div>
                     </div>
                  <br/>
                    
                  <h6 class="card-title-sub">Officer Information</h6>
                  <hr>
                  <div class="row p-t-20">
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Name</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">SOCSO Office</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                     </div>
                  </div>
                  <div class='row'>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Email</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Mobile No.</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                     </div>
                  </div>
                    
                  <h6 class="card-title-sub">A. Butir-Butir Am Majikan</h6>
                  <hr>
            
                  <div class="row p-t-20">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Butir-Butir Am Majikan</label><span class="required">*</span>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_majikan_utama" name="dri_majikan" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_majikan_utama">Majikan Utama</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_majikan_langsung" name="dri_majikan" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_majikan_langsung">Majikan Langsung</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row p-t-20">
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Employer Code</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>
                           </div>
                     </div>
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Employer Name</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>
                           </div>
                     </div>
                  </div>
                  <div class="row p-t-20">
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Employer BRN</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>
                           </div>
                     </div>
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Business Entity</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>
                           </div>
                     </div>
                     <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Employer Status</label><span class="required">*</span>
                              <input type="text" id="name" name="name" value="" class="form-control" required>
                           </div>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-md-12">
                           <div class="form-group">
                              <label>Industry Address</label>
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
                           <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                           <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
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
                              <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
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
                     </div>
                  </div>
                  <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>P.O. Box</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Locked Bag No.</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>WDT</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>Postal Address</label>
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
                              <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                              <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
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
                              <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
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
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>P.O. Box</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Locked Bag No.</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>WDT</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Telephone No.</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Mobile No.</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Fax No.</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Email</label>
                              <input type="text" id="" name="" value="" class="form-control clearFields">
                           </div>
                        </div>
                  </div>
                    
                  <!-- ============================================= MAKLUMAT AM BERKAITAN PEKERJAAN ================================================ -->
                  
                  <h6 class="card-title-sub">B. Maklumat Am Berkaitan Pekerjaan</h6>
                  <hr>
                  <div class="row p-t-20">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Bilangan Pekerja</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                  </div>
                  <div class='row'>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Jenis Kontrak/Perjanjian Perkhidmatan</label><span class="required">*</span>
                           <select name="dri_jenis_pekerjaan" class="form-control">
                                 <option value="">Please Select</option>
                                 <option value="lisan">Lisan</option>
                                 <option value="bertulis">Bertulis</option>
                                 <option value="others">Lain-lain</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row p-t-20" id="dri_jenis_lain" style="display:none">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label class="control-label">Lain-lain</label>
                           <textarea type="text" name="" rows="6" class="form-control dri_jenis_lain"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class='row'>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                           <select name="dri_taraf_pekerjaan" class="form-control">
                                 <option value="">Please Select</option>
                                 <option value="a">a. Tetap</option>
                                 <option value="b">b. Gantian</option>
                                 <option value="c">c. Sementara</option>
                                 <option value="d">d. Atas Panggilan</option>
                                 <option value="e">e. Satu Jangkamasa Sahaja</option>
                                 <option value="f">f. Lain-lain</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row p-t-20" id="dri_taraf_lain" style="display:none">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label class="control-label">Lain-lain</label>
                           <textarea type="text" name="" rows="6" class="form-control dri_taraf_lain"></textarea>
                        </div>
                     </div>
                  </div>
            
                  <!-- ======================================= UJIAN-UJIAN PENENTUAN KONTRAK PERKHIDMATAN ====================================== -->
                  <!-- ========================================================================================================================= -->
            
                  <h6 class="card-title-sub">C. Ujian-Ujian Penentuan Kontrak Perkhidmatan</h6>
                  <hr>
                  
                  <!-- =================================== QUESTION 1 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                              <div class="form-group">
                           <label class="control-label">1. Adakah waktu kerja telah ditetapkan?</label>
                           <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="dri_ques1a" name="dri_ques1" onclick="dri_question1a()" class="custom-control-input">
                                    <label class="custom-control-label" for="dri_ques1a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="dri_ques1b" name="dri_ques1" onclick="dri_question1b()" class="custom-control-input">
                                    <label class="custom-control-label" for="dri_ques1b">Tidak</label>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 1 - YA ==================================== -->
                  <div class="row p-t-20" id="dri_ques1_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques1_tetap" name="dri_ques1_yes" onclick="dri_question1_tetap()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques1_tetap">a. Tetap</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques1_syif" name="dri_ques1_yes" onclick="dri_question1_syif()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques1_syif">b. Syif</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques1_others" name="dri_ques1_yes" onclick="dri_question1_others()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques1_others">c. Lain-Lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 1 (YA) - TETAP ==================================== -->
                  <div class="row p-t-20" id="dri_ques1_tetaps" style="display: none">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Dari Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Hingga Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 1 (YA) - SYIF ==================================== -->
                  <div id="dri_ques1_syifs" style="display: none">
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 1 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques1_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 1 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques1_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 2 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">2. Adakah waktu rehat telah ditetapkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques2a" name="dri_ques2" onclick="dri_question2a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques2a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques2b" name="dri_ques2" onclick="dri_question2b()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques2b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 2 - YA ==================================== -->
                  <div class="row p-t-20" id="dri_ques2_ya" style="display: none">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Dari Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Hingga Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 2 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques2_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 3 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div cla ss="form-group">
                           <label class="control-label">3. Adakah faedah-faedah lain diberikan kepada individu tersebut?</label>
                           <div class="col-sm-10">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques3a" name="dri_ques3" onclick="dri_question3a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques3a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques3b" name="dri_ques3" onclick="dri_question3b()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques3b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 3 - YA ==================================== -->
                  <div class="row p-t-20" id="dri_ques3_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Jika 'Ya' apakah faedah-faedah yang diberikan:</label>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="dri_question3_e()" id="dri_ques3_a">
                              <label class="custom-control-label" for="dri_ques3_a">a. Cuti Sakit Bergaji</label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="dri_question3_e()" id="dri_ques3_b">
                              <label class="custom-control-label" for="dri_ques3_b">b. Rawatan Perubatan Percuma</label>      
                           </div>     
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="dri_question3_e()" id="dri_ques3_c">
                              <label class="custom-control-label" for="dri_ques3_c">c. Hari Pelepasan gaji</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="dri_question3_e()" id="dri_ques3_d">
                              <label class="custom-control-label" for="dri_ques3_d">d. Cuti tahunan</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="dri_question3_e()" id="dri_ques3_e">
                              <label class="custom-control-label" for="dri_ques3_e">e. Lain-lain</label>      
                           </div>                    
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 3 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques3_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 3 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques3_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 4 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">4. Adakah elaun-elaun lain diberikan kepada individu tersebut?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques4a" name="dri_ques4" onclick="dri_question4a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques4a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques4b" name="dri_ques4" onclick="dri_question4b()"class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques4b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 4 - YA ==================================== -->
                  <div class="row p-t-20" id="dri_ques4_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Jika 'Ya' apakah elaun-elaun tersebut:</label>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_a" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_a">a. Perjalanan</label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_b" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_b">b. Makan</label>      
                           </div>     
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_c" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_c">c. Pakaian</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_d" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_d">d. Kedatangan</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_e" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_e">e. Kenderaan</label>      
                           </div>   
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_f" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_f">f. Dobi</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_g" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_g">g. Telefon</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="dri_ques4_h" onclick="dri_question4_h()">
                              <label class="custom-control-label" for="dri_ques4_h">h. Lain-lain</label>      
                           </div>                 
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 4 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques4_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 4 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques4_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 5 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">5. Adakah catatan kehadiran direkodkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5a" name="dri_ques5" onclick="dri_question5a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5b" name="dri_ques5" onclick="dri_question5b()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- ================================ QUESTION 5 - YA ==================================== -->
                  <div class="row p-t-20" id="dri_ques5_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5_a" name="dri_ques5_yes" onclick="dri_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5_a">a. Kad Perakam Waktu</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5_b" name="dri_ques5_yes" onclick="dri_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5_b">b. Rekod Kedatangan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5_c" name="dri_ques5_yes" onclick="dri_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5_c">c. Atas Arahan Syarikat</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques5_d" name="dri_ques5_yes" onclick="dri_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques5_d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 5 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques5_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 5 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques5_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 6 ======================================= -->                                                
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">6. Bolehkah kontrak perkhidmatan ditamatkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques6a" name="dri_ques6" onclick="dri_question6a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques6a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques6b" name="dri_ques6" onclick="dri_question6b()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques6b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 6 - YA ======================================= -->                                                
                  <div class="row p-t-20" id="dri_ques6_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Siapakah yang boleh menamatkan kontrak perkhidmatan tersebut:</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques6_a" name="dri_ques6_yes" onclick="dri_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques6_a">a. Majikan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques6_b" name="dri_ques6_yes"  onclick="dri_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques6_b">b. Ketua</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques6_c" name="dri_ques6_yes" onclick="dri_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques6_c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 6 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques6_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 6 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques6_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 7 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">7. Bagaimanakah kontrak perkhidmatan di atas boleh ditamatkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques7a" name="dri_ques7" onclick="dri_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques7a">a. Bernotis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques7b" name="dri_ques7" onclick="dri_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques7b">b. Tanpa notis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques7c" name="dri_ques7" onclick="dri_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques7c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 7 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques7_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 8 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">8. Upah atau gaji dibayar berdasarkan</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques8a" name="dri_ques8" onclick="dri_question8d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques8a">a. Kuantiti Hasil Kerja</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques8b" name="dri_ques8" onclick="dri_question8d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques8b">b. Bulanan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques8c" name="dri_ques8" onclick="dri_question8d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques8c">c. Nisbah pembahagian komisyen yang telah ditetapkan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques8d" name="dri_ques8" onclick="dri_question8d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques8d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 8 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques8_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 9 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">9. Adakah upah ditetapkan secara rundingan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques9a" name="dri_ques9" onclick="dri_question9a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques9a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques9b" name="dri_ques9" onclick="dri_question9b()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques9b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- =================================== QUESTION 9 - YA ======================================= -->                                                
                  <div class="row p-t-20" id="dri_ques9_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Nyatakan Sama Ada:</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques9_a" name="dri_ques9_yes" onclick="dri_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques9_a">a. Bertulis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques9_b" name="dri_ques9_yes" onclick="dri_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques9_b">b. Lisan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques9_c" name="dri_ques9_yes" onclick="dri_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques9_c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 9 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques9_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 9 - TIDAK ==================================== -->
                  <div class="row" id="dri_ques9_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
                  
                  <!-- =================================== QUESTION 10 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                           <div class="form-group">
                           <label class="control-label">10. Adakah individu itu diberikan tugasan dengan menetapkan tempoh masa tertentu?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques10a" name="dri_ques10" onClick="dri_question10a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques10a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques10b" name="dri_ques10" onClick="dri_question10a()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques10b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 10 - YA ==================================== -->
                  <div class="row" id="dri_ques10_ya" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Nyatakan</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 11 ======================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">11. Elaun-elaun dibayar secara</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques11a" name="dri_ques11" onClick="dri_question11c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques11a">a. Tetap</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques11b" name="dri_ques11" onClick="dri_question11c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques11b">b. Pendahuluan Gaji</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques11c" name="dri_ques11" onClick="dri_question11c()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques11c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 11 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques11_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 12 ==================================== -->                     
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">12. Kenderaan adalah kepunyaan</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques12a" name="dri_ques12" onClick="dri_question12d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques12a">a. Syarikat</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques12b" name="dri_ques12" onClick="dri_question12d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques12b">b. Sendiri</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques12c" name="dri_ques12" onClick="dri_question12d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques12c">c. Pajakan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques12d" name="dri_ques12" onClick="dri_question12d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques12d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 12 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques12_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 13 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">13. Sila tandakan (/) jika bahan-bahan dibawah ini disediakan oleh majikan</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dir_ques13a" name="dir_ques13a">
                                 <label class="custom-control-label" for="dri_ques13a">a. Petrol / Diesel / NGV</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dri_ques13b" name="dri_ques13b">
                                 <label class="custom-control-label" for="dri_ques13b">b. Insurans</label>      
                              </div>     
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dri_ques13c" name="dri_ques13c">
                                 <label class="custom-control-label" for="dri_ques13c">c. Cukai Jalan</label>      
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dri_ques13d" name="dri_ques13d">
                                 <label class="custom-control-label" for="dri_ques13d">d. Penjagaan</label>      
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dri_ques13e" name="dri_ques13e">
                                 <label class="custom-control-label" for="dri_ques13e">e. Penyelenggaraan</label>      
                              </div>    
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" onClick="dri_question13f()" id="dri_ques13f" name="dri_ques13f">
                                 <label class="custom-control-label" for="dri_ques13f">f. Lain-lain</label>      
                              </div>         
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 13 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques13_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="dri_ques13_lain" name="dri_ques13_lain" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 14 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">14. Dimanakan tempat kenderaan disimpan</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques14a" name="dri_ques14" onClick="dri_question14d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques14a">a. Premis Majikan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques14b" name="dri_ques14" onClick="dri_question14d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques14b">b. Rumah Majikan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques14c" name="dri_ques14" onClick="dri_question14d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques14c">c. Rumah Pemandu</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques14d" name="dri_ques14" onClick="dri_question14d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques14d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 14 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques14_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="dri_ques14_lain" name="dri_ques14_lain" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 15 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">15. Kenderaan tidak boleh digunakan untuk tujuan persendirian</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques15a" name="dri_ques15" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques15a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques15b" name="dri_ques15" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques15b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 16 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">16. Pemandu tidak dibenarkan untuk menggaji kelindannya</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques16a" name="dri_ques16" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques16a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques16b" name="dri_ques16" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques16b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 17 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">17. Upah / Gaji Kelindan dibayar oleh</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques17a" name="dri_ques17" onClick="dri_question17d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques17a">a. Syarikat</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques17b" name="dri_ques17" onClick="dri_question17d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques17b">b. Pemandu</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques17c" name="dri_ques17" onClick="dri_question17d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques17c">c. Berkongsi upah dengan pemandu</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques17d" name="dri_ques17" onClick="dri_question17d()" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques17d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 17 - LAIN-LAIN ==================================== -->
                  <div class="row" id="dri_ques17_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="dri_ques17_lain" name="dri_ques17_lain" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 18 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">18. Syarikat menyediakan pemandu gantian / kelindan gantian</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques18a" name="dri_ques18" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques18a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques18b" name="dri_ques18" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques18b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 19 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">19. Jadual penghantaran adalah ditentukan oleh syarikat</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques19a" name="dri_ques19" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques19a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques19b" name="dri_ques19" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques19b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 20 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">20. Pemandu tidak berhak / tidak bebas untuk membuat tugasan yang sama untuk syarikat lain atau menjalankan tugasan yang sama untuk diri sendiri</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques20a" name="dri_ques20" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques20a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques20b" name="dri_ques20" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques20b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <!-- ================================ QUESTION 21 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">21. Syarikat ada menetapkan syarat-syarat dan peraturan-peraturan terhadap pemandu</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques21a" name="dri_ques21" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques21a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques21b" name="dri_ques21" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques21b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    
                  <!-- ================================ QUESTION 22 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">22. Adakah operasi perniagaan akan terjejas dengan ketiadaan pemandu</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques22a" name="dri_ques22" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques22a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques22b" name="dri_ques22" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques22b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ================================ QUESTION 23 ==================================== -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">23. Pemandu tidak akan berkongsi keuntungan atau menanggung kerugian syarikat</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques23a" name="dri_ques23" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques23a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_ques23b" name="dri_ques23" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_ques23b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  Jika hasil temuduga lebih banyak menjurus kepada jawapan "Ya" maka seseorang itu boleh dianggap sebagai seorang pekerja seperti yang diperuntukkan di bawah Seksyen 2(5), AKSP 1969.<br><br>
                    
                  <!-- ================================================== ULASAN ========================================================= -->
               
                  <h6 class="card-title-sub">Ulasan</h6>
                  <hr>
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">1. Pandangan/pengesyoran Pegawai Pemeriksa samada individu itu adalah seorang pekerja atau tidak</label>
                           <div class="col-sm-8">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_recommend1" name="dri_recommend" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_recommend1">Pekerja</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_recommend2" name="dri_recommend" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_recommend2">Bukan Pekerja</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                       
                  <div class="row p-t-20">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label class="control-label">Jika ada ulasan sila nyatakan</label>
                           <textarea type="text" name="ulasanpengesyoran" id="ulasanpengesyoran" rows="6" class="form-control lain"></textarea>
                        </div>
                     </div>
                  </div>
                    
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">2. PANDANGAN / KEPUTUSAN PENGARAH PERKESO NEGERI / PENGURUS PEJABAT PERKESO</label>
                           <label class="control-label">Saya memutuskan bahawa individu tersebut adalah:</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_result1" name="dri_result" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_result1">Pekerja</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="dri_result2" name="dri_result" class="custom-control-input">
                                 <label class="custom-control-label" for="dri_result2">Bukan pekerja</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <div class="row p-t-20">
                     <div class="col-md-8">
                        <div class="form-group">
                           <label class="control-label">Jika ada ulasan sila nyatakan</label>
                           <textarea type="text" name="ulasankeputusan" id="ulasankeputusan" rows="6" class="form-control lain"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            </div>
   
            <div class="modal-footer">
               <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn waves-effect waves-light btn-success">SAVE</button>
            </div>
         </div>
      </div>
   </div>

<!-- ================================ START JAVASCRIPT ====================================== -->

<script>   

$(document).ready(function () {
   $('select[name=dri_jenis_pekerjaan]').change(function () {
      if (this.value == 'others') {
         $("#dri_jenis_lain").show();
      } else {
         $("#dri_jenis_lain").hide();
         $(".dri_jenis_lain").val('');
      }
   });
});

$(document).ready(function () {
   $('select[name=dri_taraf_pekerjaan]').change(function () {
      if (this.value == 'f') {
         $("#dri_taraf_lain").show();
      } else {
         $("#dri_taraf_lain").hide();
         $(".dri_taraf_lain").val('');
      }
   });
});

// ============================== QUESTION 1 ============================= 

function dri_question1a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques1a");
   // Get the output text
   var dri_ques1_ya = document.getElementById("dri_ques1_ya");
   var dri_ques1_tetap = document.getElementById("dri_ques1_tetap");
   var dri_ques1_syif = document.getElementById("dri_ques1_syifs");
   var dri_ques1_lain = document.getElementById("dri_ques1_lain");
   var dri_ques1_tidak = document.getElementById("dri_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques1_ya.style.display = "block";
      dri_ques1_tidak.style.display = "none";
   }
}

function dri_question1b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques1b");
   // Get the output text
   var dri_ques1_ya = document.getElementById("dri_ques1_ya");
   var dri_ques1_tetap = document.getElementById("dri_ques1_tetaps");
   var dri_ques1_syif = document.getElementById("dri_ques1_syifs");
   var dri_ques1_lain = document.getElementById("dri_ques1_lain");
   var dri_ques1_tidak = document.getElementById("dri_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques1_tidak.style.display = "block";
      dri_ques1_ya.style.display = "none"; 
      dri_ques1_tetap.style.display = "none"; 
      dri_ques1_syif.style.display = "none"; 
      dri_ques1_lain.style.display = "none"; 
   }
}

function dri_question1_tetap() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques1_tetap");
   // Get the output text
   var dri_ques1_tetap = document.getElementById("dri_ques1_tetaps");
   var dri_ques1_syif = document.getElementById("dri_ques1_syifs");
   var dri_ques1_lain = document.getElementById("dri_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques1_tetaps.style.display = "block";
      dri_ques1_syif.style.display = "none"; 
      dri_ques1_lain.style.display = "none"; 
   }
}

function dri_question1_syif() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques1_syif");
   // Get the output text
   var dri_ques1_tetap = document.getElementById("dri_ques1_tetaps");
   var dri_ques1_syif = document.getElementById("dri_ques1_syifs");
   var dri_ques1_lain = document.getElementById("dri_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques1_tetap.style.display = "none";
      dri_ques1_syif.style.display = "block"; 
      dri_ques1_lain.style.display = "none"; 
   }
}

function dri_question1_others() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques1_others");
   // Get the output text
   var dri_ques1_tetap = document.getElementById("dri_ques1_tetaps");
   var dri_ques1_syif = document.getElementById("dri_ques1_syifs");
   var dri_ques1_lain = document.getElementById("dri_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques1_tetap.style.display = "none";
      dri_ques1_syif.style.display = "none"; 
      dri_ques1_lain.style.display = "block"; 
   }
}

// ============================== QUESTION 2 ============================== 

function dri_question2a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques2a");
   // Get the output text
   var dri_ques2_ya = document.getElementById("dri_ques2_ya");
   var dri_ques2_tidak = document.getElementById("dri_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques2_ya.style.display = "block";
      dri_ques2_tidak.style.display = "none";
   }
}

function dri_question2b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("dri_ques2b");
   // Get the output text
   var dri_ques2_ya = document.getElementById("dri_ques2_ya");
   var dri_ques2_tidak = document.getElementById("dri_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques2_ya.style.display = "none";
      dri_ques2_tidak.style.display = "block";
   }
}

// ============================ QUESTION 3 ================================= 

function dri_question3a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques3a");
   // Get the output text
   var dri_ques3_ya = document.getElementById("dri_ques3_ya");
   var dri_ques3_ya_lain = document.getElementById("dri_ques3_ya_lain");
   var dri_ques3_tidak = document.getElementById("dri_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques3_ya.style.display = "block";
      dri_ques3_ya_lain.style.display = "none";
      dri_ques3_tidak.style.display = "none";
   }
}

function dri_question3b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques3b");
   // Get the output text
   var dri_ques3_ya = document.getElementById("dri_ques3_ya");
   var dri_ques3_ya_lain = document.getElementById("dri_ques3_ya_lain");
   var dri_ques3_tidak = document.getElementById("dri_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques3_ya.style.display = "none";
      dri_ques3_ya_lain.style.display = "none";
      dri_ques3_tidak.style.display = "block";
   }
}

function dri_question3_e() {
   
   // Get the checkbox
   var checkBox = document.getElementById("dri_ques3_e");
   // Get the output text
   var dri_ques3_ya = document.getElementById("dri_ques3_ya");
   var dri_ques3_ya_lain = document.getElementById("dri_ques3_ya_lain");
   var dri_ques3_tidak = document.getElementById("dri_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques3_ya_lain.style.display = "block";
   } else {
      dri_ques3_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 4 ================================= 

function dri_question4a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques4a");
   // Get the output text
   var dri_ques4_ya = document.getElementById("dri_ques4_ya");
   var dri_ques4_ya_lain = document.getElementById("dri_ques4_ya_lain");
   var dri_ques4_tidak = document.getElementById("dri_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques4_ya.style.display = "block";
      dri_ques4_ya_lain.style.display = "none";
      dri_ques4_tidak.style.display = "none";
   }
}

function dri_question4b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques4b");
   // Get the output text
   var dri_ques4_ya = document.getElementById("dri_ques4_ya");
   var dri_ques4_ya_lain = document.getElementById("dri_ques4_ya_lain");
   var dri_ques4_tidak = document.getElementById("dri_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques4_ya.style.display = "none";
      dri_ques4_ya_lain.style.display = "none";
      dri_ques4_tidak.style.display = "block";
   }
}

function dri_question4_h() {
   
   // Get the checkbox
   var checkBox = document.getElementById("dri_ques4_h");
   // Get the output text
   var dri_ques4_ya = document.getElementById("dri_ques4_ya");
   var dri_ques4_ya_lain = document.getElementById("dri_ques4_ya_lain");
   var dri_ques4_tidak = document.getElementById("dri_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques4_ya_lain.style.display = "block";
   } else {
      dri_ques4_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 5 ================================= 

function dri_question5a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques5a");
   // Get the output text
   var dri_ques5_ya = document.getElementById("dri_ques5_ya");
   var dri_ques5_ya_lain = document.getElementById("dri_ques5_ya_lain");
   var dri_ques5_tidak = document.getElementById("dri_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques5_ya.style.display = "block";
      dri_ques5_ya_lain.style.display = "none";
      dri_ques5_tidak.style.display = "none";
   }
}

function dri_question5b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques5b");
   // Get the output text
   var dri_ques5_ya = document.getElementById("dri_ques5_ya");
   var dri_ques5_ya_lain = document.getElementById("dri_ques5_ya_lain");
   var dri_ques5_tidak = document.getElementById("dri_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques5_ya.style.display = "none";
      dri_ques5_ya_lain.style.display = "none";
      dri_ques5_tidak.style.display = "block";
   }
}

function dri_question5_d() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques5_d");
   // Get the output text
   var dri_ques5_ya = document.getElementById("dri_ques5_ya");
   var dri_ques5_ya_lain = document.getElementById("dri_ques5_ya_lain");
   var dri_ques5_tidak = document.getElementById("dri_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques5_ya_lain.style.display = "block";
   } else {
      dri_ques5_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 6 ================================= 

function dri_question6a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques6a");
   // Get the output text
   var dri_ques6_ya = document.getElementById("dri_ques6_ya");
   var dri_ques6_ya_lain = document.getElementById("dri_ques6_ya_lain");
   var dri_ques6_tidak = document.getElementById("dri_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques6_ya.style.display = "block";
      dri_ques6_ya_lain.style.display = "none";
      dri_ques6_tidak.style.display = "none";
   }
}

function dri_question6b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques6b");
   // Get the output text
   var dri_ques6_ya = document.getElementById("dri_ques6_ya");
   var dri_ques6_ya_lain = document.getElementById("dri_ques6_ya_lain");
   var dri_ques6_tidak = document.getElementById("dri_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques6_ya.style.display = "none";
      dri_ques6_ya_lain.style.display = "none";
      dri_ques6_tidak.style.display = "block";
   }
}

function dri_question6_c() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques6_c");
   // Get the output text
   var dri_ques6_ya = document.getElementById("dri_ques6_ya");
   var dri_ques6_ya_lain = document.getElementById("dri_ques6_ya_lain");
   var dri_ques6_tidak = document.getElementById("dri_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques6_ya_lain.style.display = "block";
   } else {
      dri_ques6_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 7 ================================= 

function dri_question7c() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques7c");
   // Get the output text
   var dri_ques7_lain = document.getElementById("dri_ques7_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques7_lain.style.display = "block";
   } else {
      dri_ques7_lain.style.display = "none";
   }
}

// ============================ QUESTION 8 ================================= 

function dri_question8d() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques8d");
   // Get the output text
   var dri_ques8_lain = document.getElementById("dri_ques8_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques8_lain.style.display = "block";
   } else {
      dri_ques8_lain.style.display = "none";
   }
}

// ============================ QUESTION 9 ================================= 

function dri_question9a() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques9a");
   // Get the output text
   var dri_ques9_ya = document.getElementById("dri_ques9_ya");
   var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
   var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques9_ya.style.display = "block";
      dri_ques9_ya_lain.style.display = "none";
      dri_ques9_tidak.style.display = "none";
   }
}

function dri_question9b() {

   // Get the checkbox
   var radioButton = document.getElementById("dri_ques9b");
   // Get the output text
   var dri_ques9_ya = document.getElementById("dri_ques9_ya");
   var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
   var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dri_ques9_ya.style.display = "none";
      dri_ques9_ya_lain.style.display = "none";
      dri_ques9_tidak.style.display = "block";
   }
}

function dri_question9_c() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques9_c");
   // Get the output text
   var dri_ques9_ya = document.getElementById("dri_ques9_ya");
   var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
   var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques9_ya_lain.style.display = "block";
   } else {
      dri_ques9_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 10 ================================= 

function dri_question10a() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques10a");
   // Get the output text
   var dri_ques10_ya = document.getElementById("dri_ques10_ya");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques10_ya.style.display = "block";
   } else {
      dri_ques10_ya.style.display = "none";
   }
}

// ============================ QUESTION 11 ================================= 

function dri_question11c() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques11c");
   // Get the output text
   var dri_ques11_lain = document.getElementById("dri_ques11_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques11_lain.style.display = "block";
   } else {
      dri_ques11_lain.style.display = "none";
   }
}

// ============================ QUESTION 12 ================================= 

function dri_question12d() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques12d");
   // Get the output text
   var dri_ques12_lain = document.getElementById("dri_ques12_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques12_lain.style.display = "block";
   } else {
      dri_ques12_lain.style.display = "none";
   }
}

// ============================ QUESTION 13 ================================= 

function dri_question13f() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques13f");
   // Get the output text
   var dri_ques13_lain = document.getElementById("dri_ques13_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques13_lain.style.display = "block";
   } else {
      dri_ques13_lain.style.display = "none";
   }
}

// ============================ QUESTION 14 ================================= 

function dri_question14d() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques14d");
   // Get the output text
   var dri_ques14_lain = document.getElementById("dri_ques14_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques14_lain.style.display = "block";
   } else {
      dri_ques14_lain.style.display = "none";
   }
}

// ============================ QUESTION 17 ================================= 

function dri_question17d() {

   // Get the checkbox
   var checkBox = document.getElementById("dri_ques17d");
   // Get the output text
   var dri_ques17_lain = document.getElementById("dri_ques17_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dri_ques17_lain.style.display = "block";
   } else {
      dri_ques17_lain.style.display = "none";
   }
}

</script>