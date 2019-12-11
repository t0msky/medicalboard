<div class="card m-b-0">
      <div class="card-header" role="tab" id="headingZero0">
          <h6 class="mb-0">                           
              <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#deathInfo" aria-expanded="false" aria-controls="deathInfo">
                  <h6 class="card-title"><i class="fa fa-plus"></i> Death Information </h4>
              </a>
          </h6>
      </div>
      <div id="deathInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
          <div class="card-body">
              <div class="row p-t-20">
                  <div class="col-md-4">
                      <div class="form-group-preview row">
                          <div class="col-sm-9 label-preview">
                              @lang('Date of Death')                                            
                          </div>
                          <div class="col-sm-9">
                              @if ((!empty($deathdetail)||$deathdetail!=null))
                              <input type="text" id="dodeath" name="dodeath" value="{{ $deathdetail->dodeath }}" disabled style="background-color:white" class="form-control-preview" >
                              @else
                              <input type="text" id="dodeath" name="dodeath" value="" disabled style="background-color:white" class="form-control-preview">
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row p-t-20">
                  <div class="col-md-4">
                      <div class="form-group-preview row">
                          <div class="col-sm-9 label-preview">
                              @lang('Cause Of Death')                                            
                          </div>
                          <div class="col-sm-9">
                              @if ((!empty($deathdetail)||$deathdetail!=null))
                              <input type="text" id="dodeath" name="dodeath" value="{{ $deathdetail->deathcause }}" disabled style="background-color:white" class="form-control-preview" >
                              @else
                              <input type="text" id="deathcause" name="deathcause" value="" disabled style="background-color:white" class="form-control-preview">
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row p-t-20">
                  <div class="col-md-4">
                      <div class="form-group-preview row">
                          <div class="col-sm-9 label-preview">
                              @lang('Marital Status of Insured Person')
                              </div>
                          <div class="col-sm-9">
                              @if(!empty($deathdetail)||$deathdetail!=null)
                              @foreach($ref_table->marital_sts as $id)
                              @if ((!empty($deathdetail) ||$deathdetail!=null) && $deathdetail->obsts == $id->ref_code)
                              <input type="text" class="form-control-preview" value="{{$id->desc_en}}" disabled style="background-color:white">
                              @endif
                              @endforeach
                              @else
                              <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row p-t-20">
                  <div class="col-md-4">
                      <div class="form-group-preview row">
                          <div class="col-sm-9 label-preview">
                              @lang('Periodical Payment Receiver?')                                            
                          </div>
                          <div class="col-sm-9">
                                  @if ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='N')
                                  <input type="text" id="periodical" name="periodical" value="No" class="form-control-preview" disabled style="background-color:white">
                                  @elseif ((!empty($deathdetail)||$deathdetail!=null) && $deathdetail->periodical=='Y')
                                  <input type="text" id="periodical" name="periodical" value="Yes" class="form-control-preview" disabled style="background-color:white">
                                @endif
                          </div>
                      </div>
                  </div>
              </div>                               
      
              <!-- ------------------------------------- If the death due to accident = Yes --------------------------------------------------- -->
              @if(Session::get('select_death_accident') == 'Yes')
              <div class="card-body">
                  <h6 class="card-title-sub">@lang('scheme/accidentDetails.title')</h6>
                  <hr>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Accident Date
                              </div>
                              <div class="col-sm-9">
                                  @if (!empty($accinfo))
                                  <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                  @else

                                  @if (Session::get('accddate'))
                      
                                  <input type="text" class="form-control-preview" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" disabled style="background-color:white">
                                  @else
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                  @endif
                                  @endif
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Accident Time
                              </div>
                              <div class="col-sm-9">
                                  @if (!empty($accinfo))
                                  <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                  @else
                                  @if (Session::get('accdtime'))
                                  <input type="text" class="form-control-preview" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}" disabled style="background-color:white">
                                  @else
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                  @endif
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Place of Accident
                              </div>
                              <div class="col-sm-9">
                                  {{-- @foreach($accdplace as $AccPlace)
                                  @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code) --}}
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                  {{-- @endif
                                  @endforeach --}}
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  When Accident Happen?
                              </div>
                              <div class="col-sm-9">
                                  {{-- @foreach($accdplace as $AccWhen)
                                  @if (!empty($accinfo) && $accinfo->place == $AccWhen->ref_code) --}}
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                  {{-- @endif
                                  @endforeach --}}
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  How the Accident Happened?
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->how}} @endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Reason for Travelling on The Day of Accident (For road accident only)
                              </div>
                              <div class="col-sm-9">
                                  @if(!empty($accinfo)&&$accinfo->reasontravel)
                                  <input type="text" class="form-control-preview" value="{{$accinfo->reasontravel}}" disabled style="background-color:white">
                                  @else
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Injury Description
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Is Accident Date a Working Day For The Insured Person
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Start Working Time on Accident Day
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Time Of Recess On The Accident Date
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Ending Time of Work on The Accident Date
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Name of Witness(If any)
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                  Witness Phone No.
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group-preview row">
                              <div class="col-sm-9 label-preview">
                                      Name and Address of Clinic Which Provides First Treatment
                              </div>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif" disabled style="background-color:white">
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <!-- -------------------------------------------------   MC DETAILS ------------------------------------------------------- -->
                  <div class="form-body" id="container">
                      <h6 class="card-title-sub">@lang('scheme/mc.title')</h6>
                      <hr>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12" id="container">
                                  <div class="table-responsive" id="table-medical">
                                      <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                          <thead>
                                              <tr>
                                                  <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                                  <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                                  <th style='width:17%'>@lang('scheme/mc.attr.start_date')</th>
                                                  <th style='width:18%'>@lang('scheme/mc.attr.end_date')</th>
                                                  <th style='width:15%'>@lang('scheme/mc.attr.days_work')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr data-expanded="true" class="workrow" id="tr0_0">
                                                  <td>
                                                      <div class="col-md-12">

                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div class="col-md-12">
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div class="col-md-12">
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div class="col-md-12">
                                                      </div>
                                                  </td>
                                                  <td>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>     
                                      <label class="control-label" id='lblmcerror0' style='color:red'></label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
                  <div id="add_mc_accordian">
                  </div><br>
              </div>
          </div>
      </div>
  </div>