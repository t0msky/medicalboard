<div class="row p-t-20">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="#">
          {{-- <div id="accordion1" role="tablist" aria-multiselectable="true">
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
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/odreport.attr.type_question')</label>
                                <select class="form-control" id="type_question" name="type_question">
                                    <option>During journey between place of residence and place of work</option>
                                    <option>While working</option>
                                    <option>During emergency</option>
                                    <option>During employment activities</option>
                                    <option>During work-related journey</option>
                                    <option>During journey at authorized recess</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/odreport.attr.question_bank')</label>
                                <div class="table-responsive">
                                  <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                      <thead>
                                          <tr>
                                              <th data-breakpoints="xs" style='width:0.1%'>@lang('scheme/odreport.attr.no')</th>
                                              <th class="text-center">@lang('scheme/odreport.attr.question')</th>
                                              <th class="text-center">@lang('scheme/odreport.attr.evidence')</th>
                                              <th data-breakpoints="xs sm" class="text-center">@lang('scheme/odreport.attr.reference')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr data-expanded="true">
                                              <td>1</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>   
                                          <tr data-expanded="true">
                                              <td>2</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr> 
                                          <tr data-expanded="true">
                                              <td>3</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>    
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div> --}}
        
          <div class="card m-b-0">
              <div class="card-header" role="tab" id="heading2">
                  <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#interviewer" aria-expanded="true" aria-controls="collapse">
                          @lang('scheme/appointment.title_interviewer')
                    </a>
                  </h6>
              </div>
              <div id="interviewer" class="collapse show" role="tabpanel" aria-labelledby="heading2">
                <div class="card-body">
                </div>
                  <div class="row p-t-20">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.interviewerName')</label>
                          <input type="text" name="interviewerName" id="interviewerName" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row p-t-20">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.identificationNo')</label>
                          <input type="text" name="identificationNo" id="identificationNo" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.investigationDate')</label>
                        <input type="date" name="investigationDate" id="investigationDate" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
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
                      <div class="col-md-3">
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
                {{-- <div class="row p-t-20">
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.inspector_name')</label>
                        <input type="text" name="inspector_name" id="inspector_name" class="form-control">
                      </div>
                  </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="control-label">@lang('scheme/appointment.attr.identificationNo')</label>
                        <input type="text" name="identificationNo" id="identificationNo" class="form-control">
                      </div>
                  </div>
                </div> --}}
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
                  <div class="col-md-4">
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
                </div>
                <div class="row p-t-20">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.translator_name')</label>
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.about_investigation')</label>
                      <textarea type="text" rows="6" name="about" id="about" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label class="control-label">@lang('scheme/odreport.attr.type_question')</label>
                          <select class="form-control" id="type_question" name="type_question">
                              <option>Please Select</option>
                              <option>During journey between place of residence and place of work</option>
                              <option>While working</option>
                              <option>During emergency</option>
                              <option>During employment activities</option>
                              <option>During work-related journey</option>
                              <option>During journey at authorized recess</option>
                          </select>
                      </div>
                      <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <th style='width:0.2%'>No.</th>
                          <th style='width:15%'>Question</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
          </div>
          {{-- <div class="card m-b-0">
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
          </div> --}}
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-actions">
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                        {{-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button> --}}
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                    </div>
                </div>
            </div>   
        </form>
      </div>
    </div>
  </div> 
</div>
  {{-- </div>
</div> --}}


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