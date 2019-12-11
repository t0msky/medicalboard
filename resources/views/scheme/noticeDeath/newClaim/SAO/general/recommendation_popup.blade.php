<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="p-20">
                      <form action="#">
                          <div class="row p-t-20"> 
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label class="control-label">@lang('scheme/scoRecommend.attr.question_1')</label><span class="required">*</span>
                                          {{-- <select class="form-control" required>
                                              <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                              <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                          </select> --}}
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input customRadio" value="yes">
                                      <label class="custom-control-label" for="customRadio1">@lang('scheme/scoRecommend.attr.yes')</label>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input customRadio" value="no">
                                      <label class="custom-control-label" for="customRadio2">@lang('scheme/scoRecommend.attr.no')</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">@lang('scheme/scoRecommend.attr.question_2')</label><span class="required">*</span>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio3" name="customRadio1" class="custom-control-input customRadio" value="yes">
                                      <label class="custom-control-label" for="customRadio3">@lang('scheme/scoRecommend.attr.yes')</label>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input customRadio" value="no">
                                      <label class="custom-control-label" for="customRadio4">@lang('scheme/scoRecommend.attr.no')</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">@lang('scheme/scoRecommend.attr.question_3')</label><span class="required">*</span>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input customRadio" value="yes">
                                      <label class="custom-control-label" for="customRadio5">@lang('scheme/scoRecommend.attr.yes')</label>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input customRadio" value="no">
                                      <label class="custom-control-label" for="customRadio6">@lang('scheme/scoRecommend.attr.no')</label>
                                  </div>
                              </div>
                          </div>    
                          <div class="row p-t-20">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">@lang('scheme/scoRecommend.attr.question_4')</label><span class="required">*</span>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio7" name="customRadio3" class="custom-control-input customRadio" value="yes">
                                      <label class="custom-control-label" for="customRadio7">@lang('scheme/scoRecommend.attr.yes')</label>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio8" name="customRadio3" class="custom-control-input customRadio" value="no">
                                      <label class="custom-control-label" for="customRadio8">@lang('scheme/scoRecommend.attr.no')</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="control-label">@lang('scheme/scoRecommend.attr.question_5')</label><span class="required">*</span>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio9" name="customRadio4" class="custom-control-input customRadio" value="yes">
                                      <label class="custom-control-label" for="customRadio9">@lang('scheme/scoRecommend.attr.yes')</label>
                                  </div>
                              </div>
                              <div class="col-md-1">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio10" name="customRadio4" class="custom-control-input customRadio"  value="no">
                                      <label class="custom-control-label" for="customRadio10">@lang('scheme/scoRecommend.attr.no')</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row p-t-20">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">Employment Injury</label>
                                      <input type="text" name="employment_injury" id="employment_injury" class="form-control" disabled>
                                  </div>
                              </div>
                          </div>
                          {{-- <div class="row p-t-20">
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">Recommmendation Date</label>
                                          <input type="date" name="ilatNotice" id="ilatNotice" class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <div class="form-group">
                                      <label class="control-label">Recommmendation By</label>
                                      <input type="text" id="SPIEligible" name="SPIEligible" value="" class="form-control" >
                                  </div>
                              </div>
                          </div>             --}}
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <script>
  
  $('.customRadio').on('change' , function () {
      var recommendation_yes1=$('[name=customRadio]:checked').val();
      var recommendation_yes2=$('[name=customRadio1]:checked').val();
      var recommendation_yes3=$('[name=customRadio2]:checked').val();
      var recommendation_yes4=$('[name=customRadio3]:checked').val();
      var recommendation_yes5=$('[name=customRadio4]:checked').val();
  
      var employment_injury = document.getElementById("employment_injury");
      // alert(recommendation_yes1);
      if  (recommendation_yes1 == 'yes' || recommendation_yes2 == 'yes' || recommendation_yes3 == 'yes' || recommendation_yes4 == 'yes' || recommendation_yes5 == 'yes') 
      {
          employment_injury.value = "Yes";
      }
      else
      {
          employment_injury.value = "No";
      }
      
      if (recommendation_yes1 == 'no' || recommendation_yes2 == 'no' || recommendation_yes3 == 'no' || recommendation_yes4 == 'no' || recommendation_yes5 == 'no') 
      
      { 
          employment_injury.value = "No";
      }
  
  
  });
  </script>