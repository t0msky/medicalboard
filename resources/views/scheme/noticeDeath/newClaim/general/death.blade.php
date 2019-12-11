<div class="row">
  <div class="col-12">
    <div class="card" id="container">
      <div class="card-body">
        <form action="{{route('deathinfo')}}" method="POST" id="reset_death">
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
          <input type="text" id="accdeath" name="accdeath" value="N" class="form-control clear_death" hidden>
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">@lang('form/scheme.notice_death.death.date_death')</label><span class="required">*</span>
                  @if ((!empty($deathdetail)||$deathdetail!=null))
                  <input type="date" id="dodeath" name="dodeath" value="{{ $deathdetail->dodeath }}" class="form-control clear_death" required>
                  @else
                  <input type="date" id="dodeath" name="dodeath" value="" class="form-control clear_death" required>
                  @endif
              </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                 <label class="control-label">@lang('form/scheme.notice_death.death.cause_death')</label><span class="required">*</span>
                 @if ((!empty($deathdetail)||$deathdetail!=null))
                 <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death">{{ $deathdetail->deathcause }}</textarea>
                 @else
                 <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death"></textarea>
                 @endif
              </div>
            </div>
          </div>
          
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                 <label class="control-label">@lang('form/scheme.notice_death.death.status')</label>
                 <select class="form-control clear_death" name="obsts"> 
                    <option selected hidden readonly value="please select">@lang('option.please_select')</option>
                    @foreach($ref_table->marital_sts as $id)
                    @if ((!empty($deathdetail) ||$deathdetail!=null) && $deathdetail->obsts == $id->ref_code)
                 <option value="{{$id->ref_code}}" selected>{{$id->desc_en}}</option>
                 @else
                 <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                 @endif
                 @endforeach
              </select>
              </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('form/scheme.notice_death.death.periodical')</label>
                @if ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='N')
                  <input type="text" id="periodical" name="periodical" value="No" class="form-control clear_death" disabled>
                  @elseif ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='Y')
                  <input type="text" id="periodical" name="periodical" value="Yes" class="form-control clear_death" disabled>
                @endif
              </div>
            </div>
          </div>
          
          @if ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='Y')
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
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          @endif

          <br>
       
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
              
            </div>
            @endif

            <div id="add_mc_accordian">
            </div><br>
            <div class="form-actions text-right">
                <button type="submit" name="action" value="Submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit'>@lang('button.save')</button>
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

