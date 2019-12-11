<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">Recommendation</h5>
                        <hr> --}}
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">Recommendation</label>
                              <select class="form-control" readonly>
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">Recommended</option>
                                <option value="">Not Recommended</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label class="control-label">Recommended By</label>
                              <input type="text" name="recommended_by" id="recommended_by" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Recommended Date</label>
                              <input type="date" name="date" id="date" class="form-control" readonly>
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
