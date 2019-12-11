<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">Approval</h5>
                        <hr>
                        <div class="row p-t-20">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label class="control-label">Approved By</label>
                              <span class="required">*</span>
                              <input type="text" name="approved_by" id="approved_by" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Approved Date</label>
                              <span class="required">*</span>
                              <input type="date" name="date" id="date" class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                         <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">SSN Appendix A Received</label>
                              <span class="required">*</span>
                              <input type="text" name="ssn_appendix" id="ssn_appendix" class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                          <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>                              {{-- <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                              <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button> --}}
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
