<div class="modal fade bs-example-modal-lg" id="exampleModalCarpenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - Carpenter (C)</h4>
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
                                 <input type="radio" id="butir1" name="butir_am" class="custom-control-input">
                                 <label class="custom-control-label" for="butir1">Majikan Utama</label>
                           
                                 <input type="radio" id="butir2" name="butir_am" class="custom-control-input">
                                 <label class="custom-control-label" for="butir2">Majikan Langsung</label>
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
                              @foreach($state as $s)
                              @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                              <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                              @else
                              <option value='{{$s->refcode}}'>{{$s->descen}}</option>
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
                                 @foreach($state as $s)
                                 @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                 <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                 @else
                                 <option value='{{$s->refcode}}'>{{$s->descen}}</option>
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
                        <select name="jenis_pekerjaan" class="form-control">
                              <option value="">Please Select</option>
                              <option value="lisan">Lisan</option>
                              <option value="bertulis">Bertulis</option>
                              <option value="others">Lain-lain</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row p-t-20" id="jenis_lain" style="display:none">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label class="control-label">Lain-lain</label>
                        <textarea type="text" name="" rows="6" class="form-control jenis_lain"></textarea>
                     </div>
                  </div>
               </div>
               <div class='row'>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                        <select name="taraf_pekerjaan" class="form-control">
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
               <div class="row p-t-20" id="taraf_lain" style="display:none">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label class="control-label">Lain-lain</label>
                        <textarea type="text" name="" rows="6" class="form-control taraf_lain"></textarea>
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
                                    <input type="radio" id="ques1a" name="ques1" onclick="question1a()" class="custom-control-input">
                                    <label class="custom-control-label" for="ques1a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="ques1b" name="ques1" onclick="question1b()" class="custom-control-input">
                                    <label class="custom-control-label" for="ques1b">Tidak</label>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>

               <!-- ================================ QUESTION 1 - YA ==================================== -->
               <div class="row p-t-20" id="ques1_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques1_tetap" name="ques1_yes" onclick="question1_tetap()" class="custom-control-input">
                              <label class="custom-control-label" for="ques1_tetap">a. Tetap</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques1_syif" name="ques1_yes" onclick="question1_syif()" class="custom-control-input">
                              <label class="custom-control-label" for="ques1_syif">b. Syif</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques1_others" name="ques1_yes" onclick="question1_others()" class="custom-control-input">
                              <label class="custom-control-label" for="ques1_others">c. Lain-Lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 (YA) - TETAP ==================================== -->
               <div class="row p-t-20" id="ques1_tetaps" style="display: none">
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
               <div id="ques1_syifs" style="display: none">
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
               <div class="row" id="ques1_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 1 - TIDAK ==================================== -->
               <div class="row" id="ques1_tidak" style="display: none">
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
                              <input type="radio" id="ques2a" name="ques2" onclick="question2a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques2a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques2b" name="ques2" onclick="question2b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques2b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 2 - YA ==================================== -->
               <div class="row p-t-20" id="ques2_ya" style="display: none">
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
               <div class="row" id="ques2_tidak" style="display: none">
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
                              <input type="radio" id="ques3a" name="ques3" onclick="question3a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques3a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques3b" name="ques3" onclick="question3b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques3b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - YA ==================================== -->
               <div class="row p-t-20" id="ques3_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah faedah-faedah yang diberikan:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="question3_e()" id="ques3_a">
                           <label class="custom-control-label" for="ques3_a">a. Cuti Sakit Bergaji</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="question3_e()" id="ques3_b">
                           <label class="custom-control-label" for="ques3_b">b. Rawatan Perubatan Percuma</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="question3_e()" id="ques3_c">
                           <label class="custom-control-label" for="ques3_c">c. Hari Pelepasan gaji</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="question3_e()" id="ques3_d">
                           <label class="custom-control-label" for="ques3_d">d. Cuti tahunan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" onclick="question3_e()" id="ques3_e">
                           <label class="custom-control-label" for="ques3_e">e. Lain-lain</label>      
                        </div>                    
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques3_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 3 - TIDAK ==================================== -->
               <div class="row" id="ques3_tidak" style="display: none">
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
                              <input type="radio" id="ques4a" name="ques4" onclick="question4a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques4a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques4b" name="ques4" onclick="question4b()"class="custom-control-input">
                              <label class="custom-control-label" for="ques4b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - YA ==================================== -->
               <div class="row p-t-20" id="ques4_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Jika 'Ya' apakah elaun-elaun tersebut:</label>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_a" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_a">a. Perjalanan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_b" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_b">b. Makan</label>      
                        </div>     
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_c" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_c">c. Pakaian</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_d" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_d">d. Kedatangan</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_e" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_e">e. Kenderaan</label>      
                        </div>   
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_f" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_f">f. Dobi</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_g" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_g">g. Telefon</label>      
                        </div>
                        <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" id="ques4_h" onclick="question4_h()">
                           <label class="custom-control-label" for="ques4_h">h. Lain-lain</label>      
                        </div>                 
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques4_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 4 - TIDAK ==================================== -->
               <div class="row" id="ques4_tidak" style="display: none">
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
                              <input type="radio" id="ques5a" name="ques5" onclick="question5a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques5b" name="ques5" onclick="question5b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- ================================ QUESTION 5 - YA ==================================== -->
               <div class="row p-t-20" id="ques5_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques5_a" name="ques5_yes" onclick="question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5_a">a. Kad Perakam Waktu</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques5_b" name="ques5_yes" onclick="question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5_b">b. Rekod Kedatangan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques5_c" name="ques5_yes" onclick="question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5_c">c. Atas Arahan Syarikat</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques5_d" name="ques5_yes" onclick="question5_d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques5_d">d. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques5_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 5 - TIDAK ==================================== -->
               <div class="row" id="ques5_tidak" style="display: none">
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
                              <input type="radio" id="ques6a" name="ques6" onclick="question6a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques6a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques6b" name="ques6" onclick="question6b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques6b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 6 - YA ======================================= -->                                                
               <div class="row p-t-20" id="ques6_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Siapakah yang boleh menamatkan kontrak perkhidmatan tersebut:</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques6_a" name="ques6_yes" onclick="question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques6_a">a. Majikan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques6_b" name="ques6_yes"  onclick="question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques6_b">b. Ketua</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques6_c" name="ques6_yes" onclick="question6_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques6_c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques6_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 6 - TIDAK ==================================== -->
               <div class="row" id="ques6_tidak" style="display: none">
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
                              <input type="radio" id="ques7a" name="ques7" onclick="question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques7a">a. Bernotis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques7b" name="ques7" onclick="question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques7b">b. Tanpa notis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques7c" name="ques7" onclick="question7c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques7c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 7 - LAIN-LAIN ==================================== -->
               <div class="row" id="ques7_lain" style="display: none">
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
                              <input type="radio" id="ques8a" name="ques8" onclick="question8d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques8a">a. Kuantiti Hasil Kerja</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques8b" name="ques8" onclick="question8d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques8b">b. Bulanan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques8c" name="ques8" onclick="question8d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques8c">c. Nisbah pembahagian komisyen yang telah ditetapkan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques8d" name="ques8" onclick="question8d()" class="custom-control-input">
                              <label class="custom-control-label" for="ques8d">d. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 8 - LAIN-LAIN ==================================== -->
               <div class="row" id="ques8_lain" style="display: none">
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
                              <input type="radio" id="ques9a" name="ques9" onclick="question9a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques9a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques9b" name="ques9" onclick="question9b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques9b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 9 - YA ======================================= -->                                                
               <div class="row p-t-20" id="ques9_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">Nyatakan Sama Ada:</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques9_a" name="ques9_yes" onclick="question9_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques9_a">a. Bertulis</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques9_b" name="ques9_yes" onclick="question9_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques9_b">b. Lisan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques9_c" name="ques9_yes" onclick="question9_c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques9_c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 9 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques9_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 9 - TIDAK ==================================== -->
               <div class="row" id="ques9_tidak" style="display: none">
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
                              <input type="radio" id="ques10a" name="ques10" onClick="question10a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques10a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques10b" name="ques10" onClick="question10a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques10b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 10 - YA ==================================== -->
               <div class="row" id="ques10_ya" style="display: none">
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
                              <input type="radio" id="ques11a" name="ques11" onClick="question11c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques11a">a. Tetap</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques11b" name="ques11" onClick="question11c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques11b">b. Pendahuluan Gaji</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques11c" name="ques11" onClick="question11c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques11c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 11 - LAIN-LAIN ==================================== -->
               <div class="row" id="ques11_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         

               <!-- ================================ QUESTION 12 ==================================== -->                     
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">12. Peralatan pertukangan adalah kepunyaan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques12a" name="ques12" onClick="question12c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques12a">a. Syarikat</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques12b" name="ques12" onClick="question12c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques12b">b. Sendiri</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques12c" name="ques12" onClick="question12c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques12c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 12 - LAIN-LAIN ==================================== -->
               <div class="row" id="ques12_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 13 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">13. Tempat kerja adalah di</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques13a" name="ques13" onClick="question13c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques13a">Premis Majikan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques13b" name="ques13" onClick="question13c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques13b">b. Tempat yang diarahkan majikan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques13c" name="ques13" onClick="question13c()" class="custom-control-input">
                              <label class="custom-control-label" for="ques13c">c. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 13 - LAIN-LAIN ==================================== -->
               <div class="row" id="ques13_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 14 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">14. Kerja yang dijalankan adalah mengikut spesifikasi yang disediakan oleh majikan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques14a" name="ques14" class="custom-control-input">
                              <label class="custom-control-label" for="ques14a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques14b" name="ques14" class="custom-control-input">
                              <label class="custom-control-label" for="ques14b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 15 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">15. Tidak diawasi semasa menjalankan kerja-kerja mengukir, walaubagaimanapun majikan bebas menjalankan pemeriksaan terhadap kerja-kerja yang dibuat</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques15a" name="ques15" class="custom-control-input">
                              <label class="custom-control-label" for="ques15a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques15b" name="ques15" class="custom-control-input">
                              <label class="custom-control-label" for="ques15b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 16 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">16. Upah adalah berdasarkan kepada kuantiti hasil kerja pertukangan yang ditetapkan oleh majikan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques16a" name="ques16" class="custom-control-input">
                              <label class="custom-control-label" for="ques16a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques16b" name="ques16" class="custom-control-input">
                              <label class="custom-control-label" for="ques16b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 17 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">17. Tidak dibenarkan bekerja dengan syarikat lain/ pihak lain semasa dalam tempoh waktu kerja biasa</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques17a" name="ques17" class="custom-control-input">
                              <label class="custom-control-label" for="ques17a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques17b" name="ques17" class="custom-control-input">
                              <label class="custom-control-label" for="ques17b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 18 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">18. Majikan boleh mengarahkan individu itu melakukan tugas-tugas lain selain kerja-kerja pertukangan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques18a" name="ques18" class="custom-control-input">
                              <label class="custom-control-label" for="ques18a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques18b" name="ques18" class="custom-control-input">
                              <label class="custom-control-label" for="ques18b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 19 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">19. Individu itu tidak menggaji pengganti untuk melaksanakan kerja-kerjanya</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques19a" name="ques19" class="custom-control-input">
                              <label class="custom-control-label" for="ques19a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques19b" name="ques19" class="custom-control-input">
                              <label class="custom-control-label" for="ques19b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 20 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">20. Individu itu tidak meletakkan bayaran pada kerja yang dilakukan</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques20a" name="ques20" class="custom-control-input">
                              <label class="custom-control-label" for="ques20a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques20b" name="ques20" class="custom-control-input">
                              <label class="custom-control-label" for="ques20b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         
               <!-- ================================ QUESTION 21 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">21. Sekiranya hasil ukiran tidak mengikut spesifikasi yang ditetapkan atau ditolak oleh pelanggan, atau tidak melepasi kawalan kualiti (QC), syarikat akan menanggung</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques21a" name="ques21" class="custom-control-input">
                              <label class="custom-control-label" for="ques21a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques21b" name="ques21" class="custom-control-input">
                              <label class="custom-control-label" for="ques21b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                 
               <!-- ================================ QUESTION 22 ==================================== -->
               <div class="row p-t-20">
                  <div class="col-md-10">
                     <div class="form-group">
                        <label class="control-label">22. Syarikat menetapkan syarat-syarat dan peraturan-peraturan terhadap pekerja</label>
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22a" name="ques22" onClick="question22a()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22a">Ya</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22b" name="ques22" onClick="question22b()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22b">Tidak</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- =================================== QUESTION 22 - YA ======================================= -->                                                
               <div class="row p-t-20" id="ques22_ya" style="display: none">
                  <div class="col-md-10">
                     <div class="form-group">
                        <div class="col-sm-6">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22_a" name="ques22_yes" onClick="question22_e()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22_a">a. Pakaian/Uniform</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22_b" name="ques22_yes" onClick="question22_e()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22_b">b. Sarung Tangan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22_c" name="ques22_yes" onClick="question22_e()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22_c">c. Topi Keselamatan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22_d" name="ques22_yes" onClick="question22_e()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22_d">d. Kasut Keselamatan</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="ques22_e" name="ques22_yes" onClick="question22_e()" class="custom-control-input">
                              <label class="custom-control-label" for="ques22_e">e. Lain-lain</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ================================ QUESTION 22 (YA) - LAIN-LAIN ==================================== -->
               <div class="row" id="ques22_ya_lain" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                  </div>
               </div>

               <!-- ================================ QUESTION 22 - TIDAK ==================================== -->
               <div class="row" id="ques22_tidak" style="display: none">
                  <div class="col-md-7 m-b-10">
                     <label class="control-label">Lain-lain</label>
                     <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
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
                              <input type="radio" id="recommend1" name="recommend" class="custom-control-input">
                              <label class="custom-control-label" for="recommend1">Pekerja</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="recommend2" name="recommend" class="custom-control-input">
                              <label class="custom-control-label" for="recommend2">Bukan Pekerja</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                    
               <div class="row p-t-20">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label class="control-label">Jika ada ulasan sila nyatakan</label>
                        <textarea type="text" name="" rows="6" class="form-control lain"></textarea>
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
                              <input type="radio" id="result1" name="result" class="custom-control-input">
                              <label class="custom-control-label" for="result1">Pekerja</label>
                           </div>
                           <div class="custom-control custom-radio">
                              <input type="radio" id="result2" name="result" class="custom-control-input">
                              <label class="custom-control-label" for="result2">Bukan pekerja</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row p-t-20">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label class="control-label">Jika ada ulasan sila nyatakan</label>
                        <textarea type="text" name="" rows="6" class="form-control lain"></textarea>
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
   $('select[name=jenis_pekerjaan]').change(function () {
      if (this.value == 'others') {
         $("#jenis_lain").show();
      } else {
         $("#jenis_lain").hide();
         $(".jenis_lain").val('');
      }
   });
});

$(document).ready(function () {
   $('select[name=taraf_pekerjaan]').change(function () {
      if (this.value == 'f') {
         $("#taraf_lain").show();
      } else {
         $("#taraf_lain").hide();
         $(".taraf_lain").val('');
      }
   });
});

// ============================== QUESTION 1 ============================= 

function question1a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1a");
   // Get the output text
   var ques1_ya = document.getElementById("ques1_ya");
   var ques1_tetap = document.getElementById("ques1_tetap");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");
   var ques1_tidak = document.getElementById("ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_ya.style.display = "block";
      ques1_tidak.style.display = "none";
   }
}

function question1b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1b");
   // Get the output text
   var ques1_ya = document.getElementById("ques1_ya");
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");
   var ques1_tidak = document.getElementById("ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tidak.style.display = "block";
      ques1_ya.style.display = "none"; 
      ques1_tetap.style.display = "none"; 
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_tetap() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_tetap");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetaps.style.display = "block";
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_syif() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_syif");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetap.style.display = "none";
      ques1_syif.style.display = "block"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_others() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_others");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetap.style.display = "none";
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "block"; 
   }
}

// ============================== QUESTION 2 ============================== 

function question2a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques2a");
   // Get the output text
   var ques2_ya = document.getElementById("ques2_ya");
   var ques2_tidak = document.getElementById("ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques2_ya.style.display = "block";
      ques2_tidak.style.display = "none";
   }
}

function question2b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("ques2b");
   // Get the output text
   var ques2_ya = document.getElementById("ques2_ya");
   var ques2_tidak = document.getElementById("ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques2_ya.style.display = "none";
      ques2_tidak.style.display = "block";
   }
}

// ============================ QUESTION 3 ================================= 

function question3a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques3a");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques3_ya.style.display = "block";
      ques3_ya_lain.style.display = "none";
      ques3_tidak.style.display = "none";
   }
}

function question3b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques3b");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques3_ya.style.display = "none";
      ques3_ya_lain.style.display = "none";
      ques3_tidak.style.display = "block";
   }
}

function question3_e() {
   
   // Get the checkbox
   var checkBox = document.getElementById("ques3_e");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques3_ya_lain.style.display = "block";
   } else {
      ques3_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 4 ================================= 

function question4a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques4a");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques4_ya.style.display = "block";
      ques4_ya_lain.style.display = "none";
      ques4_tidak.style.display = "none";
   }
}

function question4b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques4b");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques4_ya.style.display = "none";
      ques4_ya_lain.style.display = "none";
      ques4_tidak.style.display = "block";
   }
}

function question4_h() {
   
   // Get the checkbox
   var checkBox = document.getElementById("ques4_h");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques4_ya_lain.style.display = "block";
   } else {
      ques4_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 5 ================================= 

function question5a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques5a");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques5_ya.style.display = "block";
      ques5_ya_lain.style.display = "none";
      ques5_tidak.style.display = "none";
   }
}

function question5b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques5b");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques5_ya.style.display = "none";
      ques5_ya_lain.style.display = "none";
      ques5_tidak.style.display = "block";
   }
}

function question5_d() {

   // Get the checkbox
   var checkBox = document.getElementById("ques5_d");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques5_ya_lain.style.display = "block";
   } else {
      ques5_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 6 ================================= 

function question6a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques6a");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques6_ya.style.display = "block";
      ques6_ya_lain.style.display = "none";
      ques6_tidak.style.display = "none";
   }
}

function question6b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques6b");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques6_ya.style.display = "none";
      ques6_ya_lain.style.display = "none";
      ques6_tidak.style.display = "block";
   }
}

function question6_c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques6_c");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques6_ya_lain.style.display = "block";
   } else {
      ques6_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 7 ================================= 

function question7c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques7c");
   // Get the output text
   var ques7_lain = document.getElementById("ques7_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques7_lain.style.display = "block";
   } else {
      ques7_lain.style.display = "none";
   }
}

// ============================ QUESTION 8 ================================= 

function question8d() {

   // Get the checkbox
   var checkBox = document.getElementById("ques8d");
   // Get the output text
   var ques8_lain = document.getElementById("ques8_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques8_lain.style.display = "block";
   } else {
      ques8_lain.style.display = "none";
   }
}

// ============================ QUESTION 9 ================================= 

function question9a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques9a");
   // Get the output text
   var ques9_ya = document.getElementById("ques9_ya");
   var ques9_ya_lain = document.getElementById("ques9_ya_lain");
   var ques9_tidak = document.getElementById("ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques9_ya.style.display = "block";
      ques9_ya_lain.style.display = "none";
      ques9_tidak.style.display = "none";
   }
}

function question9b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques9b");
   // Get the output text
   var ques9_ya = document.getElementById("ques9_ya");
   var ques9_ya_lain = document.getElementById("ques9_ya_lain");
   var ques9_tidak = document.getElementById("ques9_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques9_ya.style.display = "none";
      ques9_ya_lain.style.display = "none";
      ques9_tidak.style.display = "block";
   }
}

function question9_c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques9_c");
   // Get the output text
   var ques9_ya = document.getElementById("ques9_ya");
   var ques9_ya_lain = document.getElementById("ques9_ya_lain");
   var ques9_tidak = document.getElementById("ques9_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques9_ya_lain.style.display = "block";
   } else {
      ques9_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 10 ================================= 

function question10a() {

   // Get the checkbox
   var checkBox = document.getElementById("ques10a");
   // Get the output text
   var ques10_ya = document.getElementById("ques10_ya");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques10_ya.style.display = "block";
   } else {
      ques10_ya.style.display = "none";
   }
}

// ============================ QUESTION 11 ================================= 

function question11c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques11c");
   // Get the output text
   var ques11_lain = document.getElementById("ques11_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques11_lain.style.display = "block";
   } else {
      ques11_lain.style.display = "none";
   }
}

// ============================ QUESTION 12 ================================= 

function question12c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques12c");
   // Get the output text
   var ques12_lain = document.getElementById("ques12_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques12_lain.style.display = "block";
   } else {
      ques12_lain.style.display = "none";
   }
}

// ============================ QUESTION 13 ================================= 

function question13c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques13c");
   // Get the output text
   var ques13_lain = document.getElementById("ques13_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques13_lain.style.display = "block";
   } else {
      ques13_lain.style.display = "none";
   }
}

// ============================ QUESTION 22 ================================= 

function question22a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques22a");
   // Get the output text
   var ques22_ya = document.getElementById("ques22_ya");
   var ques22_ya_lain = document.getElementById("ques22_ya_lain");
   var ques22_tidak = document.getElementById("ques22_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques22_ya.style.display = "block";
      ques22_ya_lain.style.display = "none";
      ques22_tidak.style.display = "none";
   }
}

function question22b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques22b");
   // Get the output text
   var ques22_ya = document.getElementById("ques22_ya");
   var ques22_ya_lain = document.getElementById("ques22_ya_lain");
   var ques22_tidak = document.getElementById("ques22_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques22_ya.style.display = "none";
      ques22_ya_lain.style.display = "none";
      ques22_tidak.style.display = "block";
   }
}

function question22_e() {

   // Get the checkbox
   var checkBox = document.getElementById("ques22_e");
   // Get the output text
   var ques22_ya = document.getElementById("ques22_ya");
   var ques22_ya_lain = document.getElementById("ques22_ya_lain");
   var ques22_tidak = document.getElementById("ques22_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques22_ya_lain.style.display = "block";
   } else {
      ques22_ya_lain.style.display = "none";
   }
}
</script>