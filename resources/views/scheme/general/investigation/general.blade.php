<div class="modal fade bs-example-modal-lg" id="exampleModalGeneral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - General (G)</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           </div>
           <div class="modal-body">
            <form action="#" method="POST" id="reset">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <div class="form-body">                   
                 <h6 class="card-title-sub">Case Information</h6>
                    <hr>
                    <div class='form-row'>
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
                    <div class="form-row">
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
                    <div class='form-row'>
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
              
                     <div class="form-row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Butir-Butir Am Majikan</label><span class="required">*</span>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_majikan_utama" name="gen_majikan" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_majikan_utama">Majikan Utama</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_majikan_langsung" name="gen_majikan" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_majikan_langsung">Majikan Langsung</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="form-row">
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
                    <div class="form-row">
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
                    
                    <div class="form-row">
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
              
                    <div class='form-row'>
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
                    <div class="form-row">
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
                    <div class="form-row">
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
                    <div class='form-row'>
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
                    <div class="form-row">
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
                    <div class="form-row">
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
                    <div class="form-row">
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
                    <div class="form-row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Bilangan Pekerja</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                              </div>
                        </div>
                     </div>
                     <div class='form-row'>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Jenis Kontrak/Perjanjian Perkhidmatan</label><span class="required">*</span>
                              <select name="gen_jenis_pekerjaan" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="lisan">Lisan</option>
                                    <option value="bertulis">Bertulis</option>
                                    <option value="others">Lain-lain</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-row" id="gen_jenis_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" form-rows="6" class="form-control gen_jenis_lain"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class='form-row'>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                              <select name="gen_taraf_pekerjaan" class="form-control">
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
                     <div class="form-row" id="gen_taraf_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" form-rows="6" class="form-control gen_taraf_lain"></textarea>
                           </div>
                        </div>
                     </div>
              
                    <!-- ======================================= UJIAN-UJIAN PENENTUAN KONTRAK PERKHIDMATAN ====================================== -->
              
                    <h6 class="card-title-sub">C. Ujian-Ujian Penentuan Kontrak Perkhidmatan</h6>
                    <hr>
                    
                    <!-- =================================== QUESTION 1 ======================================= -->
               <div class="form-row">
                     <div class="col-md-10">
                              <div class="form-group">
                           <label class="control-label">1. Adakah waktu kerja telah ditetapkan?</label>
                           <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_ques1a" name="gen_ques1" onclick="gen_question1a()" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_ques1a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_ques1b" name="gen_ques1" onclick="gen_question1b()" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_ques1b">Tidak</label>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>

               <!-- ================================ QUESTION 1 - YA ==================================== -->
               <div class="form-row" id="gen_ques1_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques1_tetap" name="gen_ques1_yes" onclick="gen_question1_tetap()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques1_tetap">a. Tetap</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques1_syif" name="gen_ques1_yes" onclick="gen_question1_syif()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques1_syif">b. Syif</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques1_others" name="gen_ques1_yes" onclick="gen_question1_others()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques1_others">c. Lain-Lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 (YA) - TETAP ==================================== -->
               <div class="form-row" id="gen_ques1_tetaps" style="display: none">
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
               <div id="gen_ques1_syifs" style="display: none">
                  <div class="form-row">
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
                  <div class="form-row">
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
                  <div class="form-row">
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
               <div class="form-row" id="gen_ques1_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 - TIDAK ==================================== -->
               <div class="form-row" id="gen_ques1_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 2 ======================================= -->
               <div class="form-row">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">2. Adakah waktu rehat telah ditetapkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques2a" name="gen_ques2" onclick="gen_question2a()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques2a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques2b" name="gen_ques2" onclick="gen_question2b()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques2b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 2 - YA ==================================== -->
               <div class="form-row" id="gen_ques2_ya" style="display: none">
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
               <div class="form-row" id="gen_ques2_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 3 ======================================= -->                        
               <div class="form-row">
                  <div class="col-md-10">
                     <div cla ss="form-group">
                        <label class="control-label">3. Adakah faedah-faedah lain diberikan kepada individu tersebut?</label>
                        <div class="col-sm-10">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques3a" name="gen_ques3" onclick="gen_question3a()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques3a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques3b" name="gen_ques3" onclick="gen_question3b()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques3b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - YA ==================================== -->
               <div class="form-row" id="gen_ques3_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah faedah-faedah yang diberikan:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="gen_question3_e()" id="gen_ques3_a">
                           <label class="custom-control-label" for="gen_ques3_a">a. Cuti Sakit Bergaji</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="gen_question3_e()" id="gen_ques3_b">
                           <label class="custom-control-label" for="gen_ques3_b">b. Rawatan Perubatan Percuma</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="gen_question3_e()" id="gen_ques3_c">
                           <label class="custom-control-label" for="gen_ques3_c">c. Hari Pelepasan gaji</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="gen_question3_e()" id="gen_ques3_d">
                           <label class="custom-control-label" for="gen_ques3_d">d. Cuti tahunan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="gen_question3_e()" id="gen_ques3_e">
                           <label class="custom-control-label" for="gen_ques3_e">e. Lain-lain</label>      
                        </div>                    
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 (YA) - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques3_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - TIDAK ==================================== -->
               <div class="form-row" id="gen_ques3_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- =================================== QUESTION 4 ======================================= -->                        
               <div class="form-row">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">4. Adakah elaun-elaun lain diberikan kepada individu tersebut?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques4a" name="gen_ques4" onclick="gen_question4a()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques4a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques4b" name="gen_ques4" onclick="gen_question4b()"class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques4b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - YA ==================================== -->
               <div class="form-row" id="gen_ques4_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah elaun-elaun tersebut:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_a" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_a">a. Perjalanan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_b" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_b">b. Makan</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_c" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_c">c. Pakaian</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_d" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_d">d. Kedatangan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_e" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_e">e. Kenderaan</label>      
                        </div>   
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_f" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_f">f. Dobi</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_g" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_g">g. Telefon</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="gen_ques4_h" onclick="gen_question4_h()">
                           <label class="custom-control-label" for="gen_ques4_h">h. Lain-lain</label>      
                        </div>                 
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 (YA) - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques4_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - TIDAK ==================================== -->
               <div class="form-row" id="gen_ques4_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 5 ======================================= -->                        
               <div class="form-row">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">5. Adakah catatan kehadiran direkodkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5a" name="gen_ques5" onclick="gen_question5a()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5b" name="gen_ques5" onclick="gen_question5b()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- ================================ QUESTION 5 - YA ==================================== -->
               <div class="form-row" id="gen_ques5_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5_a" name="gen_ques5_yes" onclick="gen_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5_a">a. Kad Perakam Waktu</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5_b" name="gen_ques5_yes" onclick="gen_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5_b">b. Rekod Kedatangan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5_c" name="gen_ques5_yes" onclick="gen_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5_c">c. Atas Arahan Syarikat</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques5_d" name="gen_ques5_yes" onclick="gen_question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques5_d">d. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 (YA) - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques5_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 - TIDAK ==================================== -->
               <div class="form-row" id="gen_ques5_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 6 ======================================= -->                                                
               <div class="form-row">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">6. Bolehkah kontrak perkhidmatan ditamatkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques6a" name="gen_ques6" onclick="gen_question6a()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques6a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques6b" name="gen_ques6" onclick="gen_question6b()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques6b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 6 - YA ======================================= -->                                                
               <div class="form-row" id="gen_ques6_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Siapakah yang boleh menamatkan kontrak perkhidmatan tersebut:</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques6_a" name="gen_ques6_yes" onclick="gen_question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques6_a">a. Majikan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques6_b" name="gen_ques6_yes"  onclick="gen_question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques6_b">b. Ketua</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques6_c" name="gen_ques6_yes" onclick="gen_question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques6_c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 (YA) - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques6_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 - TIDAK ==================================== -->
               <div class="form-row" id="gen_ques6_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- =================================== QUESTION 7 ======================================= -->
               <div class="form-row">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">7. Bagaimanakah kontrak perkhidmatan di atas boleh ditamatkan?</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques7a" name="gen_ques7" onclick="gen_question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques7a">a. Bernotis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques7b" name="gen_ques7" onclick="gen_question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques7b">b. Tanpa notis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="gen_ques7c" name="gen_ques7" onclick="gen_question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="gen_ques7c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 7 - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques7_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">8. Upah atau gaji dibayar berdasarkan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8a" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8a">Bulanan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8b" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8b">Nisbah pembahagian komisyen yang telah ditetapkan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8c" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8c">Mingguan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8d" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8d">Harian</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8e" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8e">Bayaran mengikut jam</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8f" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8f">Bayaran mengikut suatu tugas/kerja</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8g" name="gen_ques8" onclick="gen_question8g()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8g">Lain-lain</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <!-- ================================ QUESTION 8 - LAIN-LAIN ==================================== -->
               <div class="form-row" id="gen_ques8_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
              
                    <!-- =================================== QUESTION 9 ======================================= -->
               <div class="form-row">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">9. Adakah upah ditetapkan secara rundingan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques9a" name="gen_ques9" onclick="gen_question9a()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques9a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques9b" name="gen_ques9" onclick="gen_question9b()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques9b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 9 - YA ======================================= -->                                                
                  <div class="form-row" id="gen_ques9_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Nyatakan Sama Ada:</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques9_a" name="gen_ques9_yes" onclick="gen_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques9_a">a. Bertulis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques9_b" name="gen_ques9_yes" onclick="gen_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques9_b">b. Lisan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques9_c" name="gen_ques9_yes" onclick="gen_question9_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques9_c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 9 (YA) - LAIN-LAIN ==================================== -->
                  <div class="form-row" id="gen_ques9_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 9 - TIDAK ==================================== -->
                  <div class="form-row" id="gen_ques9_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
                  
                  <!-- =================================== QUESTION 10 ======================================= -->                        
                  <div class="form-row">
                     <div class="col-md-10">
                           <div class="form-group">
                           <label class="control-label">10. Adakah individu itu diberikan tugasan dengan menetapkan tempoh masa tertentu?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques10a" name="gen_ques10" onClick="gen_question10a()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques10a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="gen_ques10b" name="gen_ques10" onClick="gen_question10a()" class="custom-control-input">
                                 <label class="custom-control-label" for="gen_ques10b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 10 - YA ==================================== -->
                  <div class="form-row" id="gen_ques10_ya" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Nyatakan</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">11. Adakah tugasan yang ditetapkan itu berkaitan dengan perniagaan majikan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques11a" name="gen_ques11" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques11a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques11b" name="gen_ques11" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques11b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="form-row">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">12. Elaun-elaun dibayar secara</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_ques12a" name="gen_ques12" onClick="gen_question12c()" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_ques12a">a. Tetap</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_ques12b" name="gen_ques12" onClick="gen_question12c()" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_ques12b">b. Pendahuluan Gaji</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="gen_ques12c" name="gen_ques12" onClick="gen_question12c()" class="custom-control-input">
                                    <label class="custom-control-label" for="gen_ques12c">c. Lain-lain</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
      
                     <!-- ================================ QUESTION 12 - LAIN-LAIN ==================================== -->
                     <div class="form-row" id="gen_ques12_lain" style="display: none">
                        <div class="col-md-7 m-b-10">
                           <label class="control-label">Lain-lain</label>
                           <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                        </div>
                     </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">13. Dimanakah lokasi perkhidmatan/pekerjaan dijalankan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13a" name="gen_ques13" onClick="gen_question13e()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13a">Premis majikan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13b" name="gen_ques13" onClick="gen_question13e()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13b">Premis individu</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13c" name="gen_ques13" onClick="gen_question13e()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13c">Tapak projek</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13d" name="gen_ques13" onClick="gen_question13e()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13d">Lokasi yang ditetapkan oleh majikan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13e" name="gen_ques13" onClick="gen_question13e()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13e">Lain-lain</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                  <!-- ================================ QUESTION 13 - LAIN-LAIN ==================================== -->
                  <div class="form-row" id="gen_ques13_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">14. Perkakasan atau peralatan yang digunakan dalam menjalankan pekerjaan adalah kepunyaan</label>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14a" onClick="gen_question14d()" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14a">Syarikat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14b" onClick="gen_question14d()" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14b">Sendiri</label>      
                                    </div>     
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14c" onClick="gen_question14d()" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14c">Tidak berkaitan</label>      
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14d" onClick="gen_question14d()" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14d">Lain-lain</label>      
                                    </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <!-- ================================ QUESTION 14 - LAIN-LAIN ==================================== -->
                     <div class="form-row" id="gen_ques14_lain" style="display: none">
                        <div class="col-md-7 m-b-10">
                           <label class="control-label">Lain-lain</label>
                           <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                        </div>
                     </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">15. Penyelenggaraan perkakasan dan peralatan tersebut dilakukan oleh</label>
                                <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15a" onClick="gen_question15d()" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15a">Syarikat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15b" onClick="gen_question15d()" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15b">Sendiri</label>      
                                    </div>     
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15c" onClick="gen_question15d()" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15c">Tidak berkaitan</label>      
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15d" onClick="gen_question15d()" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15d">Lain-lain</label>      
                                    </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <!-- ================================ QUESTION 15 - LAIN-LAIN ==================================== -->
                    <div class="form-row" id="gen_ques15_lain" style="display: none">
                        <div class="col-md-7 m-b-10">
                           <label class="control-label">Lain-lain</label>
                           <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                        </div>
                     </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">16. Bolehkah individu itu diarahkan untuk membuat sesuatu kerja mengikut cara yang ditetapkann</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques16a" name="gen_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques16a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques16b" name="gen_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques16b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">17. Adakah individu itu tertakluk kepada penyeliaan Pegawai Atasan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques17a" name="gen_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques17a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques17b" name="gen_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques17b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">18. Adakah penyeliaan dilakukan keatas kerja-kerja yang dibuat oleh individu itu?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques18a" name="gen_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques18a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques18b" name="gen_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques18b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">19. Siapakah yang menyelia atau mengawal kerja-kerja yang dijalankan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19a" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19a">Pengurus</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19b" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19b"> Penyelia</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19c" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19c">Ketua Unit/ Bahagian/ Seksyen</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19d" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19d">Mandor</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19e" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19e">Kepala / Tekong</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19f" name="gen_ques19" onClick="gen_question19f()" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19f">Lain-lain</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <!-- ================================ QUESTION 19 - LAIN-LAIN ==================================== -->
                    <div class="form-row" id="gen_ques19_lain" style="display: none">
                        <div class="col-md-7 m-b-10">
                           <label class="control-label">Lain-lain</label>
                           <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                        </div>
                     </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">20. Sekiranya individu itu gagal mematuhi apa-apa arahan yang diberikan adakah tindakan disiplin akan dikenakan terhadap pekerja tersebut?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques20a" name="gen_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques20a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques20b" name="gen_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques20b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="form-row">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">21. Sekiranya pekerja tidak hadir, adakah kerja-kerja yang akan dilakukan akan diganti oleh pekerja yang lain?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques21a" name="gen_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques21a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques21b" name="gen_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques21b">Tidak</label>
                                      </div>
                                 </div>
                             </div>
                         </div>
                    </div>
              
                    <div class="form-row">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">22. Adakah dalam tempoh yang sama individu itu tidak dibenarkan untuk berkhidmat dengan mana-mana syarikat / pihak lain?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques22a" name="gen_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques22a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques22b" name="gen_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques22b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <label class="control-label">Jika hasil temuduga lebih banyak menjurus kepada jawapan "Ya" maka seseorang itu boleh dianggap sebagai seorang pekerja seperti yang diperuntukkan di bawah Seksyen 2(5), AKSP 1969.</label>
                    <hr>
                 <!-- ================================================== ULASAN ========================================================= -->
              
                 <h6 class="card-title-sub">Ulasan</h6>
                 <hr>
                 <div class="form-row">
                    <div class="col-md-10">
                          <div class="form-group">
                             <label class="control-label">1. Pandangan/pengesyoran Pegawai Pemeriksa samada individu itu adalah seorang pekerja atau tidak</label>
                             <div class="col-sm-8">
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_ulasan1a" name="gen_ulasan" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan1a">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_ulasan1b" name="gen_ulasan" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan1b">Bukan Pekerja</label>
                                </div>
                             </div>
                          </div>
                    </div>
                 </div>
                 
                 <div class="form-row">
                     <div class="col-md-8">
                         <div class="form-group">
                             <label class="control-label">Jika ada ulasan sila nyatakan</label>
                             <textarea type="text" name="" form-rows="6" class="form-control lain"></textarea>
                         </div>
                     </div>
                 </div>
              
                 <div class="form-row">
                    <div class="col-md-10">
                          <div class="form-group">
                             <label class="control-label">2. PANDANGAN / KEPUTUSAN PENGARAH PERKESO NEGERI / PENGURUS PEJABAT PERKESO</label>
                             <label class="control-label">Saya memutuskan bahawa individu tersebut adalah:</label>
              
                             <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_result1" name="gen_result" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_result1">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_result2" name="gen_result" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_result2">Bukan pekerja</label>
                                </div>
                             </div>
                          </div>
                    </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-8">
                         <div class="form-group">
                             <label class="control-label">Jika ada ulasan sila nyatakan</label>
                             <textarea type="text" name="" form-rows="6" class="form-control lain"></textarea>
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
   $('select[name=gen_jenis_pekerjaan]').change(function () {
      if (this.value == 'others') {
         $("#gen_jenis_lain").show();
      } else {
         $("#gen_jenis_lain").hide();
         $(".gen_jenis_lain").val('');
      }
   });
});

$(document).ready(function () {
   $('select[name=gen_taraf_pekerjaan]').change(function () {
      if (this.value == 'f') {
         $("#gen_taraf_lain").show();
      } else {
         $("#gen_taraf_lain").hide();
         $(".gen_taraf_lain").val('');
      }
   });
});

// ============================== QUESTION 1 ============================= 

function gen_question1a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques1a");
   // Get the output text
   var gen_ques1_ya = document.getElementById("gen_ques1_ya");
   var gen_ques1_tetap = document.getElementById("gen_ques1_tetap");
   var gen_ques1_syif = document.getElementById("gen_ques1_syifs");
   var gen_ques1_lain = document.getElementById("gen_ques1_lain");
   var gen_ques1_tidak = document.getElementById("gen_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques1_ya.style.display = "block";
      gen_ques1_tidak.style.display = "none";
   }
}

function gen_question1b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques1b");
   // Get the output text
   var gen_ques1_ya = document.getElementById("gen_ques1_ya");
   var gen_ques1_tetap = document.getElementById("gen_ques1_tetaps");
   var gen_ques1_syif = document.getElementById("gen_ques1_syifs");
   var gen_ques1_lain = document.getElementById("gen_ques1_lain");
   var gen_ques1_tidak = document.getElementById("gen_ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques1_tidak.style.display = "block";
      gen_ques1_ya.style.display = "none"; 
      gen_ques1_tetap.style.display = "none"; 
      gen_ques1_syif.style.display = "none"; 
      gen_ques1_lain.style.display = "none"; 
   }
}

function gen_question1_tetap() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques1_tetap");
   // Get the output text
   var gen_ques1_tetap = document.getElementById("gen_ques1_tetaps");
   var gen_ques1_syif = document.getElementById("gen_ques1_syifs");
   var gen_ques1_lain = document.getElementById("gen_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques1_tetaps.style.display = "block";
      gen_ques1_syif.style.display = "none"; 
      gen_ques1_lain.style.display = "none"; 
   }
}

function gen_question1_syif() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques1_syif");
   // Get the output text
   var gen_ques1_tetap = document.getElementById("gen_ques1_tetaps");
   var gen_ques1_syif = document.getElementById("gen_ques1_syifs");
   var gen_ques1_lain = document.getElementById("gen_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques1_tetap.style.display = "none";
      gen_ques1_syif.style.display = "block"; 
      gen_ques1_lain.style.display = "none"; 
   }
}

function gen_question1_others() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques1_others");
   // Get the output text
   var gen_ques1_tetap = document.getElementById("gen_ques1_tetaps");
   var gen_ques1_syif = document.getElementById("gen_ques1_syifs");
   var gen_ques1_lain = document.getElementById("gen_ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques1_tetap.style.display = "none";
      gen_ques1_syif.style.display = "none"; 
      gen_ques1_lain.style.display = "block"; 
   }
}

// ============================== QUESTION 2 ============================== 

function gen_question2a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques2a");
   // Get the output text
   var gen_ques2_ya = document.getElementById("gen_ques2_ya");
   var gen_ques2_tidak = document.getElementById("gen_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques2_ya.style.display = "block";
      gen_ques2_tidak.style.display = "none";
   }
}

function gen_question2b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("gen_ques2b");
   // Get the output text
   var gen_ques2_ya = document.getElementById("gen_ques2_ya");
   var gen_ques2_tidak = document.getElementById("gen_ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques2_ya.style.display = "none";
      gen_ques2_tidak.style.display = "block";
   }
}

// ============================ QUESTION 3 ================================= 

function gen_question3a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques3a");
   // Get the output text
   var gen_ques3_ya = document.getElementById("gen_ques3_ya");
   var gen_ques3_ya_lain = document.getElementById("gen_ques3_ya_lain");
   var gen_ques3_tidak = document.getElementById("gen_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques3_ya.style.display = "block";
      gen_ques3_ya_lain.style.display = "none";
      gen_ques3_tidak.style.display = "none";
   }
}

function gen_question3b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques3b");
   // Get the output text
   var gen_ques3_ya = document.getElementById("gen_ques3_ya");
   var gen_ques3_ya_lain = document.getElementById("gen_ques3_ya_lain");
   var gen_ques3_tidak = document.getElementById("gen_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques3_ya.style.display = "none";
      gen_ques3_ya_lain.style.display = "none";
      gen_ques3_tidak.style.display = "block";
   }
}

function gen_question3_e() {
   
   // Get the checkbox
   var checkBox = document.getElementById("gen_ques3_e");
   // Get the output text
   var gen_ques3_ya = document.getElementById("gen_ques3_ya");
   var gen_ques3_ya_lain = document.getElementById("gen_ques3_ya_lain");
   var gen_ques3_tidak = document.getElementById("gen_ques3_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques3_ya_lain.style.display = "block";
   } else {
      gen_ques3_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 4 ================================= 

function gen_question4a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques4a");
   // Get the output text
   var gen_ques4_ya = document.getElementById("gen_ques4_ya");
   var gen_ques4_ya_lain = document.getElementById("gen_ques4_ya_lain");
   var gen_ques4_tidak = document.getElementById("gen_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques4_ya.style.display = "block";
      gen_ques4_ya_lain.style.display = "none";
      gen_ques4_tidak.style.display = "none";
   }
}

function gen_question4b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques4b");
   // Get the output text
   var gen_ques4_ya = document.getElementById("gen_ques4_ya");
   var gen_ques4_ya_lain = document.getElementById("gen_ques4_ya_lain");
   var gen_ques4_tidak = document.getElementById("gen_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques4_ya.style.display = "none";
      gen_ques4_ya_lain.style.display = "none";
      gen_ques4_tidak.style.display = "block";
   }
}

function gen_question4_h() {
   
   // Get the checkbox
   var checkBox = document.getElementById("gen_ques4_h");
   // Get the output text
   var gen_ques4_ya = document.getElementById("gen_ques4_ya");
   var gen_ques4_ya_lain = document.getElementById("gen_ques4_ya_lain");
   var gen_ques4_tidak = document.getElementById("gen_ques4_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques4_ya_lain.style.display = "block";
   } else {
      gen_ques4_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 5 ================================= 

function gen_question5a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques5a");
   // Get the output text
   var gen_ques5_ya = document.getElementById("gen_ques5_ya");
   var gen_ques5_ya_lain = document.getElementById("gen_ques5_ya_lain");
   var gen_ques5_tidak = document.getElementById("gen_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques5_ya.style.display = "block";
      gen_ques5_ya_lain.style.display = "none";
      gen_ques5_tidak.style.display = "none";
   }
}

function gen_question5b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques5b");
   // Get the output text
   var gen_ques5_ya = document.getElementById("gen_ques5_ya");
   var gen_ques5_ya_lain = document.getElementById("gen_ques5_ya_lain");
   var gen_ques5_tidak = document.getElementById("gen_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques5_ya.style.display = "none";
      gen_ques5_ya_lain.style.display = "none";
      gen_ques5_tidak.style.display = "block";
   }
}

function gen_question5_d() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques5_d");
   // Get the output text
   var gen_ques5_ya = document.getElementById("gen_ques5_ya");
   var gen_ques5_ya_lain = document.getElementById("gen_ques5_ya_lain");
   var gen_ques5_tidak = document.getElementById("gen_ques5_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques5_ya_lain.style.display = "block";
   } else {
      gen_ques5_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 6 ================================= 

function gen_question6a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques6a");
   // Get the output text
   var gen_ques6_ya = document.getElementById("gen_ques6_ya");
   var gen_ques6_ya_lain = document.getElementById("gen_ques6_ya_lain");
   var gen_ques6_tidak = document.getElementById("gen_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques6_ya.style.display = "block";
      gen_ques6_ya_lain.style.display = "none";
      gen_ques6_tidak.style.display = "none";
   }
}

function gen_question6b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques6b");
   // Get the output text
   var gen_ques6_ya = document.getElementById("gen_ques6_ya");
   var gen_ques6_ya_lain = document.getElementById("gen_ques6_ya_lain");
   var gen_ques6_tidak = document.getElementById("gen_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques6_ya.style.display = "none";
      gen_ques6_ya_lain.style.display = "none";
      gen_ques6_tidak.style.display = "block";
   }
}

function gen_question6_c() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques6_c");
   // Get the output text
   var gen_ques6_ya = document.getElementById("gen_ques6_ya");
   var gen_ques6_ya_lain = document.getElementById("gen_ques6_ya_lain");
   var gen_ques6_tidak = document.getElementById("gen_ques6_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques6_ya_lain.style.display = "block";
   } else {
      gen_ques6_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 7 ================================= 

function gen_question7c() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques7c");
   // Get the output text
   var gen_ques7_lain = document.getElementById("gen_ques7_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques7_lain.style.display = "block";
   } else {
      gen_ques7_lain.style.display = "none";
   }
}

// ============================ QUESTION 8 ================================= 

function gen_question8g() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques8g");
   // Get the output text
   var gen_ques8_lain = document.getElementById("gen_ques8_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques8_lain.style.display = "block";
   } else {
      gen_ques8_lain.style.display = "none";
   }
}

// ============================ QUESTION 9 ================================= 

function gen_question9a() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques9a");
   // Get the output text
   var gen_ques9_ya = document.getElementById("gen_ques9_ya");
   var gen_ques9_ya_lain = document.getElementById("gen_ques9_ya_lain");
   var gen_ques9_tidak = document.getElementById("gen_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques9_ya.style.display = "block";
      gen_ques9_ya_lain.style.display = "none";
      gen_ques9_tidak.style.display = "none";
   }
}

function gen_question9b() {

   // Get the checkbox
   var radioButton = document.getElementById("gen_ques9b");
   // Get the output text
   var gen_ques9_ya = document.getElementById("gen_ques9_ya");
   var gen_ques9_ya_lain = document.getElementById("gen_ques9_ya_lain");
   var gen_ques9_tidak = document.getElementById("gen_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      gen_ques9_ya.style.display = "none";
      gen_ques9_ya_lain.style.display = "none";
      gen_ques9_tidak.style.display = "block";
   }
}

function gen_question9_c() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques9_c");
   // Get the output text
   var gen_ques9_ya = document.getElementById("gen_ques9_ya");
   var gen_ques9_ya_lain = document.getElementById("gen_ques9_ya_lain");
   var gen_ques9_tidak = document.getElementById("gen_ques9_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques9_ya_lain.style.display = "block";
   } else {
      gen_ques9_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 10 ================================= 

function gen_question10a() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques10a");
   // Get the output text
   var gen_ques10_ya = document.getElementById("gen_ques10_ya");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques10_ya.style.display = "block";
   } else {
      gen_ques10_ya.style.display = "none";
   }
}

// ============================ QUESTION 11 ================================= 

function gen_question11c() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques11c");
   // Get the output text
   var gen_ques11_lain = document.getElementById("gen_ques11_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques11_lain.style.display = "block";
   } else {
      gen_ques11_lain.style.display = "none";
   }
}

// ============================ QUESTION 12 ================================= 

function gen_question12c() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques12c");
   // Get the output text
   var gen_ques12_lain = document.getElementById("gen_ques12_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques12_lain.style.display = "block";
   } else {
      gen_ques12_lain.style.display = "none";
   }
}

// ============================ QUESTION 13 ================================= 

function gen_question13e() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques13e");
   // Get the output text
   var gen_ques13_lain = document.getElementById("gen_ques13_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques13_lain.style.display = "block";
   } else {
      gen_ques13_lain.style.display = "none";
   }
}

// ============================ QUESTION 14 ================================= 

function gen_question14d() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques14d");
   // Get the output text
   var gen_ques14_lain = document.getElementById("gen_ques14_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques14_lain.style.display = "block";
   } else {
      gen_ques14_lain.style.display = "none";
   }
}

// ============================ QUESTION 15 ================================= 

function gen_question15d() {

   // Get the checkbox
   var checkBox = document.getElementById("gen_ques15d");
   // Get the output text
   var gen_ques15_lain = document.getElementById("gen_ques15_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques15_lain.style.display = "block";
   } else {
      gen_ques15_lain.style.display = "none";
   }
}

// ============================ QUESTION 19 ================================= 
   
function gen_question19f() {
   
   // Get the checkbox
   var checkBox = document.getElementById("gen_ques19f");
   // Get the output text
   var gen_ques19_lain = document.getElementById("gen_ques19_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      gen_ques19_lain.style.display = "block";
   } else {
      gen_ques19_lain.style.display = "none";
   }
}
   
   
</script>