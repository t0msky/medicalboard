<div class="row">
  <div class="col-12">
    <div class="card" id="container">
      <div class="card-body">
        <form action="/deathDetails" method="POST" id="reset_death">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-body">
         
          @if(Session::get('messageacc')) 
          <div class="card-footer">
            <div class="alert alert-warning">
              {{Session::get('messageacc')}}
            </div>
          </div>
          @elseif (!empty($messageacc))
          <div class="card-footer">
            <div class="alert alert-warning">
              {{$messageacc}}
            </div>
          </div>
          @endif
          
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">@lang('scheme/deathDetails.attr.date_death')</label><span class="required">*</span>
                  @if(!empty($deathdetail) && $deathdetail->dodeath !='')
                  <input type="text" id="dodeath" name="dodeath" value="{{ $deathdetail->dodeath }}" class="form-control clear_death" required>
                  @else
                  <input type="date" id="dodeath" name="dodeath" value="" class="form-control clear_death" required>
                  @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">Age At The Time of Death</label><span class="required">*</span>
                  {{-- @if(!empty($deathdetail) && $deathdetail->dodeath !='')
                  <input type="date" id="dodeath" name="dodeath" value="{{substr($deathdetail->dodeath,0,4)}}-{{substr($deathdetail->dodeath,4,2)}}-{{substr($deathdetail->dodeath,6,2)}}" class="form-control clear_death" required>
                  @else --}}
                  <input type="text" id="dodeath" name="dodeath" value="" class="form-control clear_death" required>
                  {{-- @endif --}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">Source of Death Information</label><span class="required">*</span>
                  <select class="form-control" name="statutorybody" id="statutorybody"> 
                      <option value="">Please Select</option>
                      <option value="counter">OTC</option>
                      <option value="portal">Portal</option>
                  </select>    
              </div>
            </div>
          </div>
          {{-- <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                 <label class="control-label">@lang('scheme/deathDetails.attr.cause_death')</label><span class="required">*</span>
                 @if(!empty($deathdetail) && $deathdetail->deathcause !='')
                 <textarea id="deathcause" name="deathcause" value="{{ $deathdetail->deathcause }}" class="form-control clear_death"></textarea>
                 @else
                 <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death"></textarea>
                 @endif
              </div>
            </div>
          </div> --}}
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">@lang('scheme/deathDetails.attr.cause_death')</label><span class="required">*</span>
                  @if(!empty($deathdetail) && $deathdetail->deathcause !='')
                  <textarea id="deathcause" name="deathcause" value="{{ $deathdetail->deathcause }}" class="form-control clear_death"></textarea>
                  @else
                  <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death"></textarea>
                  @endif
              </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4" id="death_accident">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/noticetype.attr.death_accident')</label>
                    <select name="select_death_accident" id="select_death_accident" class="form-control clearfields">
                        <option value="please select" selected hidden readonly>
                            @lang('scheme/noticetype.attr.please_select')</option>
                        <option value="Yes">@lang('scheme/noticetype.attr.yes')</option>
                        <option value="No">@lang('scheme/noticetype.attr.no')</option>
                    </select>
                </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('scheme/deathDetails.attr.status')</label>
                <select class="form-control clear_death" name="obsts"> 
                <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                {{-- @foreach($maritalsts as $id)
                @if (!empty($deathdetail) && $deathdetail->obsts == $id->ref_code)
                <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                @else
                <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                @endif
                @endforeach --}}
              </select>
              </div>
            </div>
          </div>

          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('scheme/deathDetails.attr.periodical')</label>
                  <select class="form-control" name="inpayment">
                    <option>Please select</option>
                    <option value='Y'>@lang('option.yes')</option>
                    <option value='N'>@lang('option.no')</option>
                  </select>    
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="periodical">
            <div class="table-responsive m-t-40">
              <table id="tablePeriodical" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Benefit Type</th>
                    <th>Benefit Ref No.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>PKT</td>
                    <td>PKT1234</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          {{-- <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('scheme/deathDetails.attr.periodical')</label>
                  <select class="form-control" name="inpayment">
                    <option>Please select</option>
                    <option value='pencen_ilat'>@lang('option.pencen_ilat')</option>
                    <option value='huk'>@lang('option.huk')</option>
                  </select>    
              </div>
            </div>
          </div> --}}
       
          {{-- @if({{Session::get('select_death_accident')}} == 'Yes') --}}
          
          

          <!-- ------------------------------------- If the death due to accident = Yes --------------------------------------------------- -->
          @if(Session::get('select_death_accident') == 'Yes')
            <h6 class="card-title-sub">@lang('scheme/accidentDetails.title')</h6>
            <hr>
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.accident_date')</label><span class="required">*</span>
                    @if (!empty($accinfo))
                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}}">
                    @else
                    @if (Session::get('accddate'))
                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}">
                    @else
                    <input type="date" class="form-control" id="accddate" name="accddate" value="">
                    @endif
                    @endif
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.time_accident')</label><span class="required">*</span>
                  <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                    @if (!empty($accinfo))
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}">
                    @else
                    @if (Session::get('accdtime'))
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}">
                    @else
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="">
                    @endif
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.place_accident')</label><span class="required">*</span>
                  <select class="form-control" name="placeaccd" id="placeaccd" onchange="placeacc()">
                      <!--option value="">@if(!empty($accinfo)){{$accinfo->place}} @endif</option-->
                      <option>Please select</option>
                      @foreach($accdplace as $AccPlace)
                      @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code)
                      <option value="{{$AccPlace->ref_code}}" selected>{{$AccPlace->desc_en}}</option>
                      @else
                      <option value="{{$AccPlace->ref_code}}">{{$AccPlace->desc_en}}</option>
                      @endif
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.when_accident')</label><span class="required">*</span>
                    <select class="form-control" name="accwhen" id="accwhen" style="width: 100%; height:36px;">
                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwhen}} @endif</option-->
                        <option>Please select</option>
                        @if (!empty($accdwhen))
                        @foreach($accdwhen as $AccWhen)
                        @if (!empty($accinfo) && $accinfo->accwhen == $AccWhen->ref_code)
                        <option value="{{$AccWhen->ref_code}}" selected>{{$AccWhen->desc_en}}</option>
                        @else
                        <option value="{{$AccWhen->ref_code}}">{{$AccWhen->desc_en}}</option>
                        @endif
                        @endforeach
                        @endif
                    </select>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('scheme/accidentDetails.attr.how_accident')</label><span class="required">*</span>
                    <textarea type="text" id="how" name="how" class="form-control" value="">@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                    </div>
                </div>
            </div>            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.reason_travelling')</label>
                  <textarea type="text" id="reason" name="reason" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.injury_desc')</label>
                  <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('scheme/accidentDetails.attr.accident_workingDay')</label>
                        <select class="form-control" name="accdworkingday">
                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                            <option>Please select</option>
                            @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                            <option value='Y' selected>@lang('scheme/accidentDetails.yes')</option>
                            <option value='N'>@lang('scheme/accidentDetails.no')</option>
                            @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                            <option value='Y' >@lang('scheme/accidentDetails.yes')</option>
                            <option value='N' selected>@lang('scheme/accidentDetails.no')</option>
                            @else
                            <option value='Y'>@lang('scheme/accidentDetails.yes')</option>
                            <option value='N'>@lang('scheme/accidentDetails.no')</option>
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">    
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.start_workingTime')</label>
                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                    data-autoclose="true">
                    <input type="time" class="form-control" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.rest_period')</label>
                  <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                  data-autoclose="true">
                  <input type="time" class="form-control" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.end_workingTime')</label>
                    <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                      <input type="time" class="form-control" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif">
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.witness_name')</label>
                    <input type="text" id="witnessname" name="witnessname" class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.witness_no')</label>
                    <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label
                    class="control-label">@lang('scheme/accidentDetails.attr.nameAddress_clinic')</label>
                    <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                </div>
              </div>
            </div>
    
        <!-- -------------------------------------------------   MC DETAILS ------------------------------------------------------- -->
            <div class="form-body" id="container">
              <h6 class="card-title-sub">@lang('scheme/mc.title')</h6>
              <hr>
              
              <div class="row">
                  <div class="col-md-12" id="container">
                      <div class="table-responsive" id="table-medical">
                          <div class="form-actions text-right">
                              <button type="button" id="btn_add_mc0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/mc.addMc')</button>
                          </div>{{-- <label class="control-label">@lang('mc.attr.medicalleave')</label> --}}
                          <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                              <thead>
                                  <tr>
                                      <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                      <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                      <th style='width:17%'>@lang('scheme/mc.attr.start_date')</th>
                                      <th style='width:18%'>@lang('scheme/mc.attr.end_date')</th>
                                      <th style='width:15%'>@lang('scheme/mc.attr.days_work')</th>
                                      <th style='width:10%'>@lang('scheme/mc.attr.action')</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr data-expanded="true" class="workrow" id="tr0_0">
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control">
                                              <option value="">Please select</option>
                                              <option value="" selected> MC </option>
                                              <option value="" > Light Duty </option>
                                              </select>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="clinicname" name="clinicinfo" type="text" value="@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="mcstartdate_0_0" name="mcstartdate_0_0[]" type="date" value="@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input type="date" id="mcenddate_0_0" name="mcenddate_0_0[]" value="" class="form-control " >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" id="totalmc_0_0" name="totalmc_0_0[]" value="" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add_attended_work0_0" value='0_0' type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                              <i class="ti-plus text" aria-hidden="true"></i>
                                              <i class="ti-plus text-active" aria-hidden="true"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  {{-- <tr>
                                      <td>
                                          <div class="form-group">
                                              <input  name="attendedwork" type="text" value="Attended Work" class="form-control counttotalwork" readonly>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input  name="" type="date" value="" id="workstartdatedate0" name="workstartdate0[]" class="form-control counttotalwork" >
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input name="" type="date" value="" id="workenddate0" name="workenddate0[]" class="form-control counttotalwork" >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" value="" id="totalwork0" name="totalwork0[]" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add-attended-work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                              <i class="ti-plus text" aria-hidden="true"></i>
                                              <i class="ti-plus text-active" aria-hidden="true"></i>
                                          </button> 
                                      </td>
                                  </tr> --}}
                              </tbody>
                          </table>     
                          <label class="control-label" id='lblmcerror0' style='color:red'></label>
                      </div>
                  </div>
              </div>
            </div>
            @endif

            <div id="add_mc_accordian">
            </div><br>
            <div class="form-actions text-right">
                <button type="submit" name="action" value="Submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('button.save')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                
            </div>  
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
     
{{-- Confirm modal --}}
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
        <input type="hidden" class="form-control" name="id" id="id">
      </div>
      <div class="modal-footer">
        <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>