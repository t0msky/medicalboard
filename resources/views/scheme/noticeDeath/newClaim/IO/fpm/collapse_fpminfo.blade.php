<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <div class="p-20">
                      <form action="#">
                      <h5 class="card-title">FPM Information</h5>
                      <hr>
                      <div class="row p-t-20">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">@lang('form/scheme.general.collapse.investigation_assistant.sender_note')</label>
                                  <input type="text" name="sender_note" id="sender_note" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="row p-t-20">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">@lang('form/scheme.general.collapse.investigation_assistant.office')</label>
                                  <input type="text" name="office" id="office" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="row p-t-20">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">@lang('form/scheme.general.collapse.investigation_assistant.notes')</label>
                                      <input type="text" name="notes" id="notes" class="form-control">
                              </div>
                          </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                      </div>            
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>