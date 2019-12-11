<div class="modal fade bs-example-modal-lg" id="exampleModalDirector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - Director (DR)</h4>
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
                           <input type="text" class="form-control clearFields" id="caseid" name="caseid" value="">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                           <label class="control-label">Survey Date<span class="required">*</span></label>
                           <input type="date" class="form-control clearFields" id="surveydate" name="surveydate" value="">
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
                           <input type="text" id="officername" name="officername" value="" class="form-control" required>    
                        </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">SOCSO Office</label>
                        <input type="text" id="socsooffice" name="socsooffice" value="" class="form-control" required>    
                        </div>
                  </div>
               </div>
               <div class='row'>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" id="email" name="email" value="" class="form-control" required>    
                        </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Mobile No.</label>
                        <input type="text" id="mobileno" name="mobileno" value="" class="form-control" required>    
                        </div>
                  </div>
               </div>
                 
               <h6 class="card-title-sub">A. Butir-Butir Am Majikan</h6>
               <hr>
         
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Butir-Butir Am Majikan</label><span class="required">*</span>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_majikan_utama" name="dir_majikan" class="custom-control-input">
                              <label class="custom-control-label" for="dir_majikan_utama">Majikan Utama</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_majikan_langsung" name="dir_majikan" class="custom-control-input">
                              <label class="custom-control-label" for="dir_majikan_langsung">Majikan Langsung</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row p-t-20">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Employer Code</label><span class="required">*</span>
                        <input type="text" id="empcode" name="empcode" value="" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Employer Name</label><span class="required">*</span>
                        <input type="text" id="empname" name="empname" value="" class="form-control" required>
                     </div>
                  </div>
               </div>
               <div class="row p-t-20">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Employer BRN</label><span class="required">*</span>
                        <input type="text" id="empbrn" name="empbrn" value="" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Business Entity</label><span class="required">*</span>
                        <input type="text" id="busentity" name="busentity" value="" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Employer Status</label><span class="required">*</span>
                        <input type="text" id="empstatus" name="empstatus" value="" class="form-control" required>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Industry Address</label>
                        <input type="text" name="empadd1" value="" class="form-control clearFields" >
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                           <input type="text" name="empadd2" value="" class="form-control clearFields" >
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                           <input type="text" name="empadd3" value="" class="form-control clearFields" >
                     </div>
                  </div>
               </div>
         
               <div class='row'>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                        <input type="text" id="emppostcode" name="emppostcode" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                        <input type="text" class="form-control clearFields" name="empcity" id="empcity" value="">
                     </div>
                  </div>
                 
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
                        <select class="form-control clearFields" name="state1" required >
                              @foreach($ref_table->state as $st)
                              <option value="{{$st->ref_code}}">{{$st->desc_en}}</option>
                              @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>P.O. Box</label>
                        <input type="text" id="emppobox" name="emppobox" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Locked Bag No.</label>
                        <input type="text" id="emplockedbag" name="emplockedbag" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>WDT</label>
                        <input type="text" id="empwdt" name="empwdt" value="" class="form-control clearFields">
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
                        <input type="text" class="form-control clearFields" name="city" id="city" value="">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
                        <select class="form-control clearFields" name="state1" required >
                              @foreach($ref_table->state as $st)
                              <option value="{{$st->ref_code}}">{{$st->desc_en}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>P.O. Box</label>
                        <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Locked Bag No.</label>
                        <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>WDT</label>
                        <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Telephone No.</label>
                        <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" id="mobileno" name="mobileno" value="" class="form-control clearFields">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Fax No.</label>
                        <input type="text" id="faxno" name="faxno" value="" class="form-control clearFields">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" id="email" name="email" value="" class="form-control clearFields">
                     </div>
                  </div>
               </div>
                 
               <!-- ============================================= MAKLUMAT AM BERKAITAN PEKERJAAN ================================================ -->
               
               <h6 class="card-title-sub">B. Maklumat Am Berkaitan Pekerjaan</h6>
               <hr>
               <div class="row p-t-20">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label">Bilangan Pekerja</label>
                        <input type="text" id="bilpekerja" name="bilpekerja" value="" class="form-control" required>    
                     </div>
                  </div>
               </div>
               <div class='row'>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Jenis Kontrak/Perjanjian Perkhidmatan</label><span class="required">*</span>
                        <select name="dir_jenis_pekerjaan" id="dir_jenis_pekerjaan" class="form-control">
                              <option value="">Please Select</option>
                              <option value="lisan">Lisan</option>
                              <option value="bertulis">Bertulis</option>
                              <option value="others">Lain-lain</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row p-t-20" id="dir_jenis_lain" style="display:none">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label class="control-label">Lain-lain</label>
                        <textarea type="text" name="" rows="6" class="form-control dir_jenis_lain"></textarea>
                     </div>
                  </div>
               </div>
               <div class='row'>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                        <select name="dir_taraf_pekerjaan" class="form-control">
                              <option value="">Please Select</option>
                              <option value="a">a. Pengarah Eksekutif</option>
                              <option value="b">b. Pengarah Urusan</option>
                              <option value="c">c. Pengarah Bukan Eksekutif</option>
                              <option value="d">d. Pengarah Proxi / Nominee</option>
                              <option value="e">e.Lain-lain</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row p-t-20" id="dir_taraf_lain" style="display:none">
                  <div class="col-md-8">
                     <div class="form-group">
                        <textarea type="text" name="" rows="6" class="form-control dir_taraf_lain"></textarea>
                     </div>
                  </div>
               </div>
         
               <!-- ======================================= UJIAN-UJIAN PENENTUAN KONTRAK PERKHIDMATAN ====================================== -->
         
               <h6 class="card-title-sub">C. Ujian-Ujian Penentuan Kontrak Perkhidmatan</h6>
               <hr>
               
               <!-- =================================== QUESTION 1 ======================================= -->
               <div class="row p-t-20">
                     <div class="col-md-10">
                              <div class="form-group">
                           <label class="control-label">1. Adakah waktu kerja telah ditetapkan?</label>
                           <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="dir_ques1a" name="dir_ques1" onClick="dir_question1a()" class="custom-control-input">
                                    <label class="custom-control-label" for="dir_ques1a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="dir_ques1b" name="dir_ques1" onClick="dir_question1b()" class="custom-control-input">
                                    <label class="custom-control-label" for="dir_ques1b">Tidak</label>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>

               <!-- ================================ QUESTION 1 - YA ==================================== -->
               <div class="row p-t-20" id="dir_ques1_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques1_a" name="dir_ques1_yes" onClick="dir_question1_a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques1_a">a. Tetap</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques1_b" name="dir_ques1_yes" onClick="dir_question1_b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques1_b">b. Lain-Lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 (YA) - TETAP ==================================== -->
               <div class="row p-t-20" id="dir_ques1_tetap" style="display: none">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Dari Jam</label>
                        <input type="text" id="darijam1" name="darijam1" value="" class="form-control" required>    
                        </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Hingga Jam</label>
                        <input type="text" id="hinggajam1" name="hinggajam1" value="" class="form-control" required>    
                        </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="dir_ques1_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <textarea class="form-control form-control-lg" id="dir_ques1_lain" name="dir_ques1_lain" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 - TIDAK ==================================== -->
               <div class="row" id="dir_ques1_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques1_tidak" name="dir_ques1_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 2 ======================================= -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">2. Adakah waktu rehat telah ditetapkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques2a" name="dir_ques2" onClick="dir_question2a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques2a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques2b" name="dir_ques2" onClick="dir_question2b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques2b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 2 - YA ==================================== -->
               <div class="row p-t-20" id="dir_ques2_ya" style="display: none">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Dari Jam</label>
                        <input type="text" id="darijam2" name="darijam2" value="" class="form-control" required>    
                        </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Hingga Jam</label>
                        <input type="text" id="hinggajam2" name="hinggajam2" value="" class="form-control" required>    
                        </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 2 - TIDAK ==================================== -->
               <div class="row" id="dir_ques2_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Tidak Tetap</label>
                     <textarea class="form-control form-control-lg" id="dir_ques2_tidak" name="dir_ques2_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 3 ======================================= -->                        
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div cla ss="form-group">
                        <label class="control-label">3. Adakah faedah-faedah lain diberikan kepada individu tersebut?</label>
                        <div class="col-sm-10">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques3a" name="dir_ques3" onClick="dir_question3a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques3a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques3b" name="dir_ques3" onClick="dir_question3b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques3b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - YA ==================================== -->
               <div class="row p-t-20" id="dir_ques3_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah faedah-faedah yang diberikan:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question3_e()" id="dir_ques3_a" name="dir_ques3_a">
                           <label class="custom-control-label" for="dir_ques3_a">a. Cuti Sakit Bergaji</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question3_e()" id="dir_ques3_b" name="dir_ques3_b">
                           <label class="custom-control-label" for="dir_ques3_b">b. Rawatan Perubatan Percuma</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question3_e()" id="dir_ques3_c" name="dir_ques3_c">
                           <label class="custom-control-label" for="dir_ques3_c">c. Hari Pelepasan gaji</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question3_e()" id="dir_ques3_d" name="dir_ques3_d">
                           <label class="custom-control-label" for="dir_ques3_d">d. Cuti tahunan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question3_e()" id="dir_ques3_e" name="dir_ques3_e">
                           <label class="custom-control-label" for="dir_ques3_e">e. Lain-lain</label>      
                        </div>                    
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="dir_ques3_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques3_ya_lain" name="dir_ques3_ya_lain" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - TIDAK ==================================== -->
               <div class="row" id="dir_ques3_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques3_tidak" name="dir_ques3_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 4 ======================================= -->                        
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">4. Adakah elaun-elaun lain diberikan kepada individu tersebut?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques4a" name="dir_ques4" onClick="dir_question4a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques4a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques4b" name="dir_ques4" onClick="dir_question4b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques4b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - YA ==================================== -->
               <div class="row p-t-20" id="dir_ques4_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah elaun-elaun tersebut:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_a" name="dir_ques4_a">
                           <label class="custom-control-label" for="dir_ques4_a">a. Perjalanan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_b" name="dir_ques4_b">
                           <label class="custom-control-label" for="dir_ques4_b">b. Makan</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_c" name="dir_ques4_c">
                           <label class="custom-control-label" for="dir_ques4_c">c. Pakaian</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_d" name="dir_ques4_d">
                           <label class="custom-control-label" for="dir_ques4_d">d. Kedatangan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_e" name="dir_ques4_e">
                           <label class="custom-control-label" for="dir_ques4_e">e. Kenderaan/Petrol</label>      
                        </div>   
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_f" name="dir_ques4_f">
                           <label class="custom-control-label" for="dir_ques4_f">f. Dobi</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_g" name="dir_ques4_g">
                           <label class="custom-control-label" for="dir_ques4_g">g. Telefon</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_h" name="dir_ques4_h">
                           <label class="custom-control-label" for="dir_ques4_h">g. Keraian</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_i" name="dir_ques4_i">
                           <label class="custom-control-label" for="dir_ques4_i">g. Pemandu</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_j" name="dir_ques4_j">
                           <label class="custom-control-label" for="dir_ques4_j">g. Elaun Pemandu</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onClick="dir_question4_k()" id="dir_ques4_k" name="dir_ques4_k">
                           <label class="custom-control-label" for="dir_ques4_k">k. Lain-lain</label>      
                        </div>                 
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="dir_ques4_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques4_ya_lain" name="dir_ques4_ya_lain" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - TIDAK ==================================== -->
               <div class="row" id="dir_ques4_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques4_tidak" name="dir_ques4_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 5 ======================================= -->                        
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">5. Adakah catatan kehadiran direkodkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5a" name="dir_ques5" onClick="dir_question5a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5b" name="dir_ques5" onClick="dir_question5b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- ================================ QUESTION 5 - YA ==================================== -->
               <div class="row p-t-20" id="dir_ques5_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <label class="control-label">Jika 'Ya', bagaimanakah catatan kehadiran direkodkan :</label>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5_a" name="dir_ques5_yes" onClick="dir_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5_a">a. Kad Perakam Waktu</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5_b" name="dir_ques5_yes" onClick="dir_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5_b">b. Rekod Kedatangan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5_c" name="dir_ques5_yes" onClick="dir_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5_c">c. Atas Arahan Syarikat</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques5_d" name="dir_ques5_yes" onClick="dir_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques5_d">d. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="dir_ques5_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques5_ya_lain" name="dir_ques5_ya_lain" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 - TIDAK ==================================== -->
               <div class="row" id="dir_ques5_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques5_tidak" name="dir_ques5_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 6 ======================================= -->                                                
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">6. Bolehkah kontrak perkhidmatan ditamatkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6a" name="dir_ques6" onClick="dir_question6a()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6b" name="dir_ques6" onClick="dir_question6b()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 6 - YA ======================================= -->                                                
               <div class="row p-t-20" id="dir_ques6_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Ya Dipilih</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6_a" name="dir_ques6_yes" onClick="dir_question6_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6_a">Resolusi Syatikat</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6_b" name="dir_ques6_yes" onClick="dir_question6_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6_b">Bernotis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6_c" name="dir_ques6_yes" onClick="dir_question6_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6_c">Tanpa Notis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques6_d" name="dir_ques6_yes" onClick="dir_question6_d()" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques6_d">Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="dir_ques6_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques6_ya_lain" name="dir_ques6_ya_lain" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 - TIDAK ==================================== -->
               <div class="row" id="dir_ques6_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="dir_ques6_tidak" name="dir_ques6_tidak" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 7 ======================================= -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">
                              7. Dilantik sebagai Pengarah syarikat melalui Mesyuarat Agung Tahunan Syarikat dan diputuskan melalui resolusi syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques7a" name="dir_ques7" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques7a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques7b" name="dir_ques7" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques7b">tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 8 ======================================= -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">8. Adakah memiliki pegangan syer didalam syarikat?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques8a" name="dir_ques8" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques8a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques8b" name="dir_ques8" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques8b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 9 ======================================= -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">9. Didaftarkan sebagai Pengarah di Suruhanjaya Syarikat Malaysia (SSM)</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques9a" name="dir_ques9" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques9a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques9b" name="dir_ques9" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques9b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- =================================== QUESTION 10 ======================================= -->                        
               <div class="row p-t-20">
                  <div class="col-md-10">
                        <div class="form-group">
                        <label class="control-label">10. Elaun atau fi Pengarah akan ditentukan berdasarkan kepada resolusi syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques10a" name="dir_ques10" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques10a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques10b" name="dir_ques10" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques10b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 11 ======================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">11. Adakah Pengarah diberi gaji bulanan dengan memegang jawatan lain dalam syarikat tersebut</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques11a" name="dir_ques11" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques11a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques11b" name="dir_ques11" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques11b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 12 ==================================== -->                     
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">12. Sekiranya Pengarah memegang jawatan lain dalam syarikat, adakah jawatan lain itu boleh ditamatkan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques12a" name="dir_ques12" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques12a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques12b" name="dir_ques12" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques12b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 13 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">13. Adakah Pengarah boleh menandatangani dokumen-dokumen rasmi seperti resolusi syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques13a" name="dir_ques13" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques13a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques13b" name="dir_ques13" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques13b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 14 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">14. Adakah penamatan sebagai Pengarah adalah melalui resolusi yang dibuat oleh Ahli Lembaga Pengarah</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques14a" name="dir_ques14" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques14a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques14b" name="dir_ques14" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques14b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 15 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">15. Bertanggungjawab terhadap kerugian syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques15a" name="dir_ques15" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques15a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques15b" name="dir_ques15" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques15b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 16 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">16. Adakah Pengarah bertanggungjawab terhadap kesalahan undang-undang yang dibuat oleh syarikat dibawah peruntukan undang-undang</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques16a" name="dir_ques16" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques16a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques16b" name="dir_ques16" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques16b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 17 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">17. Adakah Pengarah mempunyai kuasa pemutus didalam membuat keputusan mengenai syarikat tersebut</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques17a" name="dir_ques17" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques17a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques17b" name="dir_ques17" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques17b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 18 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">18. Adakah syarikat akan membahagikan keuntungan syarikat / syer kepada Pengarah tersebut</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques18a" name="dir_ques18" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques18a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques18b" name="dir_ques18" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques18b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 19 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">19. Adakah Pengarah dilantik sebagai Pengarah melalui kontrak perkhidmatan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques19a" name="dir_ques19" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques19a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques19b" name="dir_ques19" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques19b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 20 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">20. Tidak memegang syer tetapi terdapat namanya sebagai Pengarah didalam Borang 49 (SSM)</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques20a" name="dir_ques20" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques20a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques20b" name="dir_ques20" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques20b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 21 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">21. Adakah pernah dilantik memegang jawatan lain didalam syarikat yang sama sebelum dilantik sebagai Pengarah</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques21a" name="dir_ques21" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques21a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques21b" name="dir_ques21" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques21b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                 
               <!-- ================================ QUESTION 22 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">22. Sekiranya jawapan soalan no.21 adalah 'Ya', adakah kontrak perkhidmatan terdahulu masih belum ditamatkan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques22a" name="dir_ques22" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques22a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques22b" name="dir_ques22" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques22b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 23 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">23. Fungsi dan tugasnya adalah dibawah kawalan orang lain seperti Pengarah Urusan atau Lembaga Pengarah Syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques23a" name="dir_ques23" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques23a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques23b" name="dir_ques23" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques23b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 24 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">24. Menerima gaji bulanan yang tetap</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques24a" name="dir_ques24" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques24a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques24b" name="dir_ques24" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques24b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 25 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">25. Adakah Pengarah dengan sendirinya boleh membuat keputusan tanpa merujuk kepada Lembaga Pengarah Syarikat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques25a" name="dir_ques25" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques25a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques25b" name="dir_ques25" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques25b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 26 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">26. Adakah kontrak perkhidmatan beliau boleh ditamatkan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques26a" name="dir_ques26" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques26a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_ques26b" name="dir_ques26" class="custom-control-input">
                              <label class="custom-control-label" for="dir_ques26b">Tidak</label>
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
                              <input type="radio" id="dir_recommend1" name="dir_recommend" class="custom-control-input">
                              <label class="custom-control-label" for="dir_recommend1">Pekerja</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_recommend2" name="dir_recommend" class="custom-control-input">
                              <label class="custom-control-label" for="dir_recommend2">Bukan Pekerja</label>
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
                              <input type="radio" id="dir_result1" name="dir_result" class="custom-control-input">
                              <label class="custom-control-label" for="dir_result1">Pekerja</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="dir_result2" name="dir_result" class="custom-control-input">
                              <label class="custom-control-label" for="dir_result2">Bukan pekerja</label>
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

<script>

$(document).ready(function () {
   $('select[name=dir_jenis_pekerjaan]').change(function () {
      if (this.value == 'others') {
         $("#dir_jenis_lain").show();
      } else {
         $("#dir_jenis_lain").hide();
         $(".dir_jenis_lain").val('');
      }
   });
});

$(document).ready(function () {
   $('select[name=dir_taraf_pekerjaan]').change(function () {
      if (this.value == 'e') {
         $("#dir_taraf_lain").show();
      } else {
         $("#dir_taraf_lain").hide();
         $(".dir_lain").val('');
      }
   });
});

// ============================== QUESTION 1 ============================= 

function dir_question1a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques1a");
   // Get the output text
   var dir_ques1_ya = document.getElementById("dir_ques1_ya");
   var dir_ques1_tetap = document.getElementById("dir_ques1_tetap");
   var dir_ques1_lain = document.getElementById("dir_ques1_lain");
   var dir_ques1_tidak = document.getElementById("dir_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques1_ya.style.display = "block";
      dir_ques1_tidak.style.display = "none";
   }
}

function dir_question1b() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques1b");
   // Get the output text
   var dir_ques1_ya = document.getElementById("dir_ques1_ya");
   var dir_ques1_tetap = document.getElementById("dir_ques1_tetap");
   var dir_ques1_lain = document.getElementById("dir_ques1_lain");
   var dir_ques1_tidak = document.getElementById("dir_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques1_tidak.style.display = "block";
      dir_ques1_ya.style.display = "none"; 
      dir_ques1_tetap.style.display = "none"; 
      dir_ques1_lain.style.display = "none"; 
   }
}

function dir_question1_a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques1_a");
   // Get the output text
   var dir_ques1_tetap = document.getElementById("dir_ques1_tetap");
   var dir_ques1_lain = document.getElementById("dir_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques1_tetap.style.display = "block";
      dir_ques1_lain.style.display = "none"; 
   }
}

function dir_question1_b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("dir_ques1_b");
   // Get the output text
   var dir_ques1_tetap = document.getElementById("dir_ques1_tetap");
   var dir_ques1_lain = document.getElementById("dir_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques1_tetap.style.display = "none";
      dir_ques1_lain.style.display = "block"; 
   }
}

// ============================== QUESTION 2 ============================== 

function dir_question2a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques2a");
   // Get the output text
   var dir_ques2_ya = document.getElementById("dir_ques2_ya");
   var dir_ques2_tidak = document.getElementById("dir_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques2_ya.style.display = "block";
      dir_ques2_tidak.style.display = "none";
   }
}

function dir_question2b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("dir_ques2b");
   // Get the output text
   var dir_ques2_ya = document.getElementById("dir_ques2_ya");
   var dir_ques2_tidak = document.getElementById("dir_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques2_ya.style.display = "none";
      dir_ques2_tidak.style.display = "block";
   }
}

// ============================ QUESTION 3 ================================= 

function dir_question3a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques3a");
   // Get the output text
   var dir_ques3_ya = document.getElementById("dir_ques3_ya");
   var dir_ques3_ya_lain = document.getElementById("dir_ques3_ya_lain");
   var dir_ques3_tidak = document.getElementById("dir_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques3_ya.style.display = "block";
      dir_ques3_ya_lain.style.display = "none";
      dir_ques3_tidak.style.display = "none";
   }
}

function dir_question3b() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques3b");
   // Get the output text
   var dir_ques3_ya = document.getElementById("dir_ques3_ya");
   var dir_ques3_ya_lain = document.getElementById("dir_ques3_ya_lain");
   var dir_ques3_tidak = document.getElementById("dir_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques3_ya.style.display = "none";
      dir_ques3_ya_lain.style.display = "none";
      dir_ques3_tidak.style.display = "block";
   }
}

function dir_question3_e() {
   
   // Get the checkbox
   var checkBox = document.getElementById("dir_ques3_e");
   // Get the output text
   var dir_ques3_ya = document.getElementById("dir_ques3_ya");
   var dir_ques3_ya_lain = document.getElementById("dir_ques3_ya_lain");
   var dir_ques3_tidak = document.getElementById("dir_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dir_ques3_ya_lain.style.display = "block";
   } else {
      dir_ques3_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 4 ================================= 

function dir_question4a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques4a");
   // Get the output text
   var dir_ques4_ya = document.getElementById("dir_ques4_ya");
   var dir_ques4_ya_lain = document.getElementById("dir_ques4_ya_lain");
   var dir_ques4_tidak = document.getElementById("dir_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques4_ya.style.display = "block";
      dir_ques4_ya_lain.style.display = "none";
      dir_ques4_tidak.style.display = "none";
   }
}

function dir_question4b() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques4b");
   // Get the output text
   var dir_ques4_ya = document.getElementById("dir_ques4_ya");
   var dir_ques4_ya_lain = document.getElementById("dir_ques4_ya_lain");
   var dir_ques4_tidak = document.getElementById("dir_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques4_ya.style.display = "none";
      dir_ques4_ya_lain.style.display = "none";
      dir_ques4_tidak.style.display = "block";
   }
}

function dir_question4_k() {
   
   // Get the checkbox
   var checkBox = document.getElementById("dir_ques4_k");
   // Get the output text
   var dir_ques4_ya = document.getElementById("dir_ques4_ya");
   var dir_ques4_ya_lain = document.getElementById("dir_ques4_ya_lain");
   var dir_ques4_tidak = document.getElementById("dir_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dir_ques4_ya_lain.style.display = "block";
   } else {
      dir_ques4_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 5 ================================= 

function dir_question5a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques5a");
   // Get the output text
   var dir_ques5_ya = document.getElementById("dir_ques5_ya");
   var dir_ques5_ya_lain = document.getElementById("dir_ques5_ya_lain");
   var dir_ques5_tidak = document.getElementById("dir_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques5_ya.style.display = "block";
      dir_ques5_ya_lain.style.display = "none";
      dir_ques5_tidak.style.display = "none";
   }
}

function dir_question5b() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques5b");
   // Get the output text
   var dir_ques5_ya = document.getElementById("dir_ques5_ya");
   var dir_ques5_ya_lain = document.getElementById("dir_ques5_ya_lain");
   var dir_ques5_tidak = document.getElementById("dir_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques5_ya.style.display = "none";
      dir_ques5_ya_lain.style.display = "none";
      dir_ques5_tidak.style.display = "block";
   }
}

function dir_question5_d() {

   // Get the checkbox
   var checkBox = document.getElementById("dir_ques5_d");
   // Get the output text
   var dir_ques5_ya = document.getElementById("dir_ques5_ya");
   var dir_ques5_ya_lain = document.getElementById("dir_ques5_ya_lain");
   var dir_ques5_tidak = document.getElementById("dir_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dir_ques5_ya_lain.style.display = "block";
   } else {
      dir_ques5_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 6 ================================= 

function dir_question6a() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques6a");
   // Get the output text
   var dir_ques6_ya = document.getElementById("dir_ques6_ya");
   var dir_ques6_ya_lain = document.getElementById("dir_ques6_ya_lain");
   var dir_ques6_tidak = document.getElementById("dir_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques6_ya.style.display = "block";
      dir_ques6_ya_lain.style.display = "none";
      dir_ques6_tidak.style.display = "none";
   }
}

function dir_question6b() {

   // Get the checkbox
   var radioButton = document.getElementById("dir_ques6b");
   // Get the output text
   var dir_ques6_ya = document.getElementById("dir_ques6_ya");
   var dir_ques6_ya_lain = document.getElementById("dir_ques6_ya_lain");
   var dir_ques6_tidak = document.getElementById("dir_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      dir_ques6_ya.style.display = "none";
      dir_ques6_ya_lain.style.display = "none";
      dir_ques6_tidak.style.display = "block";
   }
}

function dir_question6_d() {

   // Get the checkbox
   var checkBox = document.getElementById("dir_ques6_d");
   // Get the output text
   var dir_ques6_ya = document.getElementById("dir_ques6_ya");
   var dir_ques6_ya_lain = document.getElementById("dir_ques6_ya_lain");
   var dir_ques6_tidak = document.getElementById("dir_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      dir_ques6_ya_lain.style.display = "block";
   } else {
      dir_ques6_ya_lain.style.display = "none";
   }
}


</script>