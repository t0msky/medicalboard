<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
               <div class="p-20">
                   <form action="#">
                       <div class="row p-t-20"> 
                           <div class="form-group col-md-12 col-lg-6">
                               <label class="control-label">Whether the insured person is an employee under the SOCSO Act? </label><span class="required">*</span>
                                       {{-- <select class="form-control" required>
                                           <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                           <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                       </select> --}}
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio1" name="custom_Radio" class="custom-control-input">
                                   <label class="custom-control-label" for="custom_Radio1">@lang('scheme/scoRecommend.attr.yes')</label>
                               </div>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio2" name="custom_Radio" class="custom-control-input" onclick="recommendationview_no1()">
                                   <label class="custom-control-label" for="custom_Radio2">@lang('scheme/scoRecommend.attr.no')</label>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-12 col-lg-6">
                                   <label class="control-label">Whether the SOCSO Act applies to this industry?</label><span class="required">*</span>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio3" name="custom_Radio1" class="custom-control-input">
                                   <label class="custom-control-label" for="custom_Radio3">@lang('scheme/scoRecommend.attr.yes')</label>
                               </div>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio4" name="custom_Radio1" class="custom-control-input" onclick="recommendationview_no2()">
                                   <label class="custom-control-label" for="custom_Radio4">@lang('scheme/scoRecommend.attr.no')</label>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-12 col-lg-6">
                                   <label class="control-label">@lang('scheme/scoRecommend.attr.question_3')</label><span class="required">*</span>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio5" name="custom_Radio2" class="custom-control-input">
                                   <label class="custom-control-label" for="custom_Radio5">@lang('scheme/scoRecommend.attr.yes')</label>
                               </div>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio6" name="custom_Radio2" class="custom-control-input" onclick="recommendationview_no3()">
                                   <label class="custom-control-label" for="custom_Radio6">@lang('scheme/scoRecommend.attr.no')</label>
                               </div>
                           </div>
                       </div>    
                       <div class="row p-t-20">
                           <div class="form-group col-md-12 col-lg-6">
                                   <label class="control-label">@lang('scheme/scoRecommend.attr.question_4')</label><span class="required">*</span>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio7" name="custom_Radio3" class="custom-control-input">
                                   <label class="custom-control-label" for="custom_Radio7">@lang('scheme/scoRecommend.attr.yes')</label>
                               </div>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio8" name="custom_Radio3" class="custom-control-input" onclick="recommendationview_no4()">
                                   <label class="custom-control-label" for="custom_Radio8">@lang('scheme/scoRecommend.attr.no')</label>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="form-group col-md-12 col-lg-6">
                                   <label class="control-label">@lang('scheme/scoRecommend.attr.question_5')</label><span class="required">*</span>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio9" name="custom_Radio4" class="custom-control-input">
                                   <label class="custom-control-label" for="custom_Radio9">@lang('scheme/scoRecommend.attr.yes')</label>
                               </div>
                           </div>
                           <div class="col-md-1">
                               <div class="custom-control custom-radio">
                                   <input type="radio" id="custom_Radio10" name="custom_Radio4" class="custom-control-input" onclick="recommendationview_no5()">
                                   <label class="custom-control-label" for="custom_Radio10">@lang('scheme/scoRecommend.attr.no')</label>
                               </div>
                           </div>
                       </div>
                       <div class="row p-t-20">
                           <div class="form-group col-md-12 col-lg-5">
                                   <label class="control-label">Employment Injury</label>
                                   <input type="text" name="employment_injury" id="employment_injury" class="form-control" disabled>
                           </div>
                       </div>
                       <div class="row p-t-20">
                           <div class="form-group col-md-12 col-lg-5">
                                   <label class="control-label">Recommmendation Date</label>
                                       <input type="date" name="ilatNotice" id="ilatNotice" class="form-control" disabled>
                           </div>
                           <div class="form-group col-md-12 col-lg-5">
                                   <label class="control-label">Recommmendation By</label>
                                   <input type="text" id="SPIEligible" name="SPIEligible" value="" class="form-control" disabled>
                           </div>
                       </div>            
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
   
