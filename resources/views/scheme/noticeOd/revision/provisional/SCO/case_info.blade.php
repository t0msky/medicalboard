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
                             <label class="control-label">Notice ID</label>
                             <input type="text" name="notice_id" id="notice_id" class="form-control" readonly>
                            </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Type of Revision</label>
                                <input type="text" name="type_revision" id="type_revision" class="form-control" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">Start Date of Revision Payment</label>
                                <input type="date" name="startdate" id="startdate" class="form-control" readonly>
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
