<div class="row p-t-20">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="#">
          <div id="accordion1" role="tablist" aria-multiselectable="true">
            <div class="card m-b-0">
              <div class="card-header" role="tab" id="heading1">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#appointment" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.title')
                      </a>
                  </h6>
              </div>
              <div id="appointment" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                  <div class="card-body">
                  </div>
                        {{-- <h4 class="card-title">@lang('scheme/investigation.title')</h4>
                        <hr> --}}
                        {{-- <h3 class="box-title m-t-40">@lang('appointment.title_assisstant')</h3>
                            <hr> --}}
                        {{-- <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                 <label class="control-label">@lang('investigation.attr.sender_note')</label>
                                 <input type="text" name="sender_note" id="sender_note" class="form-control">
                             </div>
                         </div>

                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('investigation.attr.office')</label>
                                <input type="text" name="office" id="office" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('investigation.attr.notes')</label>
                               <input type="text" name="notes" id="notes" class="form-control">
                           </div>
                       </div>
                      </div> --}}
                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.investigate_date')</label>
                          <input type="date" name="investigate_date" id="investigate_date" class="form-control">
                        </div>
                      </div>     
                      <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.investigate_time')</label>
                              <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                <input type="time" class="form-control" name="time" value="">
                                  <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                  </div>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="row p-t-20">        
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.type_person')</label>
                            <select class="form-control" id="typeperson" name="typeperson">
                              {{-- <option>@lang('confirmation.attr.choose_payment')
                              </option> --}}
                              <option value="" selected>@lang('scheme/appointment.attr.please_select')</option>
                              <option value="Employer">@lang('scheme/appointment.attr.employer')</option>
                              <option value="Insured">@lang('scheme/appointment.attr.insured_person')</option>
                              <option value="Others">@lang('scheme/appointment.attr.others')</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4" id="personattend">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.name_person_attend')</label>
                          <input type="text" name="person_attend" id="person_attend" class="form-control">
                        </div>
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('appointment.attr.ot_name')</label>
                          <input type="text" name="otname" id="otname" class="form-control">
                        </div>
                      </div> --}}        
                    <div class="row">    
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                            <textarea type="text" name="address" id="address" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row p-t-20">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.name_officer')</label>
                          <input type="text" name="nameofficer" id="nameofficer" class="form-control">
                        </div>
                      </div>
                    </div> 
                    <div class="row">  
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.email_officer')</label>
                          <input type="email" name="emailofficer" id="emailofficer" class="form-control">
                        </div>
                      </div>  
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.place_officer')</label>
                            <select class="form-control" id="placeofficer" name="placeofficer">
                              {{-- <option>@lang('confirmation.attr.choose_payment')
                              </option> --}}
                              <option value="" selected>@lang('scheme/appointment.attr.please_select')</option>
                              <option value="Employer">@lang('scheme/appointment.attr.employer_insuredperson')</option>
                              <option value="Officer">@lang('scheme/appointment.attr.investigation_officer')</option>
                              <option value="Others">@lang('scheme/appointment.attr.others')</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4" id="specify">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.please_specify')</label>
                          <input type="email" name="specify" id="specify" class="form-control">
                        </div>
                      </div>
                    </div>
              </div>
            </div>
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading2">
                    <h6 class="mb-0">
                        <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#statement" aria-expanded="true" aria-controls="collapse">
                          @lang('scheme/appointment.title1')
                        </a>
                    </h6>
                </div>
                <div id="statement" class="collapse show" role="tabpanel" aria-labelledby="heading2">
                    <div class="card-body">
                    </div>
                      <div class="row p-t-20">
                        <div class="col-md-6">
                          <div class="card">
                            <label>@lang('scheme/appointment.attr.title_download')</label>
                              <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                  data-toggle-column="first">
                                  <thead>
                                    <tr>
                                      <th style='width:0.1%'>@lang('scheme/appointment.attr.no')</th>
                                      <th style='width:7%'>@lang('scheme/appointment.attr.doc_name')</th>
                                      <th style='width:0.01%'>@lang('scheme/appointment.attr.download')</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr data-expanded="true">
                                      <td>1</td>
                                      <td>@lang('scheme/appointment.attr.form_12')</td>
                                      <td><button class="btn btn-facebook waves-effect waves-light" type="button"><i class="fas fa-download"></i> </button>
                                      </td>
                                    </tr>
                                    <tr data-expanded="true">
                                      <td>2</td>
                                      <td>@lang('scheme/appointment.attr.form_bai')</td>
                                      <td><button class="btn btn-facebook waves-effect waves-light" type="button"><i class="fas fa-download"></i> </button>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
              </div>
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading3">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#interviewee" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.title_interviewee')
                      </a>
                  </h6>
                </div>
              <div id="interviewee" class="collapse show" role="tabpanel" aria-labelledby="heading3">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.inspector_name')</label>
                        <input type="text" name="inspector_name" id="inspector_name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row p-t-20">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                        <input type="text" name="name" id="name" class="form-control">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.id_type')</label>
                      <input type="text" name="idtype" id="idtype" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.id_no')</label>
                        <input type="text" name="idno" id="idno" class="form-control">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label>
                      <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      {{--  <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label> --}}
                      <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      {{-- <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label> --}}
                      <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.postcode')</label>
                      <input type="text" name="postcode" id="postcode" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.city')</label>
                      <input type="text" name="city" id="city" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.state')</label>
                      <input type="text" name="state" id="state" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.telno')</label>
                      <input type="text" name="telno" id="telno" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.age')</label>
                      <input type="text" name="age" id="age" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.about_investigation')</label>
                      <textarea type="text" rows="5" name="about" id="about" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading4">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#witness" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.title_witness')
                      </a>
                  </h6>
                </div>
              <div id="witness" class="collapse show" role="tabpanel" aria-labelledby="heading4">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.witness_name')</label>
                        <input type="text" name="witnessname" id="witnessname" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.id_type')</label>
                        <input type="text" name="idtype" id="idtype" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.id_no')</label>
                        <input type="text" name="idno" id="idno" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.language')</label>
                          <select class="form-control" name="lang1" id="lang1">
                            <option value="">@lang('scheme/appointment.attr.please_select')</option>
                            <option value="Malay">@lang('scheme/appointment.attr.malay')</option>
                            <option value="English">@lang('scheme/appointment.attr.english')</option>
                            <option value="Tamil">@lang('scheme/appointment.attr.tamil')</option>
                            <option value="Mandarin">@lang('scheme/appointment.attr.mandarin')</option>
                            <option value="Others">@lang('scheme/appointment.attr.others')</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3" id="specifylang1">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.please_specify')</label>
                        <input type="email" name="specify1" id="specify1" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.witness_statement')</label>
                        <textarea type="text" rows="5" name="witness_statement" id="witness_statement" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.translator_name')</label>
                        <input type="text" name="translator_name" id="translator_name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_date')</label>
                        <input type="date" name="investigation_date" id="investigation_date" value="{{date('Y-m-d')}}"class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_starttime')</label>
                          <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                              data-autoclose="true">
                            <input type="text" class="form-control" name="investigation_starttime" id="investigation_starttime" value="">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_endtime')</label>
                          <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                data-autoclose="true">
                            <input type="text" class="form-control" name="investigation_endtime" id="investigation_endtime" value="">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading5">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#employer" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.title_employer')
                      </a>
                  </h6>
                </div>
              <div id="employer" class="collapse show" role="tabpanel" aria-labelledby="heading5">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.employer_name')</label>
                        <input type="text" name="name" id="name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.id_type')</label>
                        <input type="text" name="idtype" id="idtype" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.id_no')</label>
                        <input type="text" name="idno" id="idno" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.language')</label>
                          <select class="form-control" name="lang2" id="lang2">
                            <option value="">@lang('scheme/appointment.attr.please_select')</option>
                            <option value="Malay">@lang('scheme/appointment.attr.malay')</option>
                            <option value="English">@lang('scheme/appointment.attr.english')</option>
                            <option value="Tamil">@lang('scheme/appointment.attr.tamil')</option>
                            <option value="Mandarin">@lang('scheme/appointment.attr.mandarin')</option>
                            <option value="Others">@lang('scheme/appointment.attr.others')</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3" id="specifylang2">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.please_specify')</label>
                        <input type="email" name="specify2" id="specify2" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.employer_statement')</label>
                        <textarea type="text" rows="5" name="statement" id="statement" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.translator_name')</label>
                        <input type="text" name="translator_name" id="translator_name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_date')</label>
                        <input type="date" name="investigation_date" id="investigation_date" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_starttime')</label>
                          <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                data-autoclose="true">
                            <input type="text" class="form-control" name="investigation_starttime" id="investigation_starttime" value="">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigation_endtime')</label>
                          <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                data-autoclose="true">
                            <input type="text" class="form-control" name="investigation_endtime" id="investigation_endtime" value="">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading6">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#casefact" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.case_fact')
                      </a>
                  </h6>
                </div>
              <div id="casefact" class="collapse show" role="tabpanel" aria-labelledby="heading6">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.list_tasks')</label>
                        <textarea type="text" name="list" id="list" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.reviewer_reviews')</label>
                        <textarea type="text" name="review" id="review" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.recommendation')</label>
                        <input type="text" name="recommendation" id="recommendation" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  {{-- <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">@lang('appointment.attr.reviewer_approval')</label>
                     <input type="text" name="reviewer_approval" id="reviewer_approval" class="form-control">
                  </div>
              </div> --}}
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigator_name')</label>
                        <input type="text" name="investigator_name" id="investigator_name" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.date')</label>
                      <input type="date" name="date" id="date" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading7">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#inconsistent" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.inconsistent_info')
                      </a>
                  </h6>
                </div>
              <div id="inconsistent" class="collapse show" role="tabpanel" aria-labelledby="heading7">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.item')</label>
                        <select class="form-control">
                          <option value="">@lang('scheme/appointment.attr.please_select')</option>
                          <option value="Date">@lang('scheme/appointment.attr.date_od')</option>
                          <option value="Info">@lang('scheme/appointment.attr.desc_od')</option>
                          <option value="Symptom">@lang('scheme/appointment.attr.symptom')</option>
                          <option value="Others">@lang('scheme/appointment.attr.others')</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.data')</label>
                        <input type="text" name="data" id="data" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row p-t-20">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.review')</label>
                        <input type="text" name="review" id="review" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.review_by')</label>
                        <select class="form-control">
                          <option value="">@lang('scheme/appointment.attr.please_select')</option>
                          <option value="IO">@lang('scheme/appointment.attr.io')</option>
                          <option value="SAO">@lang('scheme/appointment.attr.sao')</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="heading8">
                  <h6 class="mb-0">
                      <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#justification" aria-expanded="true" aria-controls="collapse">
                        @lang('scheme/appointment.justification')
                      </a>
                  </h6>
                </div>
              <div id="justification" class="collapse show" role="tabpanel" aria-labelledby="heading8">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">    
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.date_investigation')</label>
                        <input id="date" name="date" type="date" value="" class="form-control" >
                      </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" >@lang('appointment.attr.date')</label>
                            <input id="date" name="date" type="date" value="" class="form-control" >
                        </div>
                    </div> --}}
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label" >@lang('scheme/appointment.attr.finding_data')</label>
                        <input id="finding_data" name="finding_data" type="text" value="" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row p-t-20">  
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.finding_review')</label>
                        <input type="text" id="finding_review" name="finding_review" value="" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.justification')</label>
                        <input type="text" id="justification" name="justification" value="" class="form-control" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                    {{-- <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('appointment.attr.justify_by')</label>
                                <input type="text" id="justify_by" name="justify_by" value="" class="form-control" >
                        </div>
                    </div> --}}
                    {{-- <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">@lang('investigation.attr.support_doc')</label>
                           <input type="text" name="support_doc" id="support_doc" class="form-control">
                        </div>
                    </div>
                </div> --}}
            <div class="form-actions">
              {{-- <button data-toggle="tab" href="#mcdetails" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextMc">@lang('insuredPerson.next')</button> --}}
              <button type="submit" class="btn waves-effect waves-light btn-success">
              @lang('scheme/ob.save')</button>
              {{-- <button data-toggle="tab" href="#odempinfo" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpHis">@lang('insuredPerson.previous')</button> --}}
              {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
            </div>
          </div>            
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function () {
    $('#specify').hide();
    $('select[name=placeofficer]').change(function () {
      if (this.value == 'Others') {
        $('#specify').show();
      }
      else {
        $('#specify').hide();
      }
    });

    $('#personattend').hide();
    $('select[name=typeperson]').change(function () {
      if (this.value == 'Others') {
        $('#personattend').show();
      }
      else {
        $('#personattend').hide();
      }
    });

    $('#specifylang1').hide();
    $('select[name=lang1]').change(function () {
      if (this.value == 'Others') {
        $('#specifylang1').show();
      }
      else {
        $('#specifylang1').hide();
      }
    });

    $('#specifylang2').hide();
    $('select[name=lang2]').change(function () {
      if (this.value == 'Others') {
        $('#specifylang2').show();
      }
      else {
        $('#specifylang2').hide();
      }
    });
  });

</script>