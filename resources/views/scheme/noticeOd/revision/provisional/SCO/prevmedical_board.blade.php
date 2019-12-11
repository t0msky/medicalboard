<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">@lang('scheme/caseinfo.title')</h5>
                        <hr> --}}
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">JD Type</label>
                              <select class="form-control" readonly>
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">JD</option>
                                <option value="">JDR</option>
                                <option value="">JDK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">JD/JDR Session Date</label>
                              <input type="date" name="sessiondate" id="sessiondate" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Assessment Type</label>
                              <input type="text" name="assessment_type" id="assessment_type" class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row pt-20">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">JD/JDR Result</label>
                              <input type="text" name="result" id="result" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Assessment %</label>
                              <input type="text" name="assessment" id="assessment" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">ELS</label>
                              <input type="text" name="els" id="els" class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Remarks</label>
                              <textarea type="text" name="remarks" id="remarks" class="form-control" readonly></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                          <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                              {{-- <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                              <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button> --}}
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
