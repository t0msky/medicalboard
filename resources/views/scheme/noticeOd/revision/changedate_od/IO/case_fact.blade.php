<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        {{-- <h5 class="card-title">@lang('scheme/caseinfo.title')</h5>
                        <hr> --}}
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">List of Tasks</label>
                              <textarea type="text" name="list_task" id="list_task" class="form-control" readonly=""></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Reviewer Comment</label>
                              <textarea type="text" name="rev_comment" id="rev_comment" class="form-control" readonly></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Recommendation</label>
                              <textarea type="text" name="recommendation" id="recommendation" class="form-control" readonly></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Approval Comment</label>
                              <textarea type="text" name="app_comment" id="app_comment" class="form-control"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label class="control-label">IO Name</label>
                              <input type="text" name="name" id="name" class="form-control" readonly>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Date</label>
                              <input type="date" name="date" id="date" class="form-control" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
