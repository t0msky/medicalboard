<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <form action="#">
               <div class="form-body">
                  <h6 class="card-title">@lang('form/scheme.general.collapse.new_registration.title')</h6>
                  <hr>
                  
                  <div class="form-row">
                     <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">@lang('form/scheme.general.collapse.new_registration.revision')</label>
                        <input type="text" class="form-control form-control-sm" id="revision" name="revision" value="" readonly>
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">@lang('form/scheme.general.collapse.new_registration.revision_rcv_date')</label>
                        <span class="required">*</span>
                        <input type="date" class="form-control form-control-sm" id="revision_rcv_date" name="revision_rcv_date" value="" required>
                     </div>
                     <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">@lang('form/scheme.general.collapse.new_registration.source')</label>
                        <span class="required">*</span>
                        <input type="date" class="form-control form-control-sm" id="source" name="source" value="" readonly>
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">@lang('form/scheme.general.collapse.new_registration.form34_rcv')</label>
                        <select class="form-control clearFields" name="form34_rcv" id="form34_rcv">
                           <option value="please_select">@lang('option.please_select')</option>
                           <option value="Y">@lang('option.yes')</option>
                           <option value="N">@lang('option.no')</option>                       
                        </select>                     
                     </div>
                  </div>

                  <div class="card-body">
                     <h6 class="card-title-sub">@lang('form/scheme.general.collapse.ob.title')</h6>
                     <hr>



                  </div>

                  <div class='row'>
                     <div class="col-md-12">
                           <div class="form-actions">
                           <button type="submit" id="btnnotice"
                                 class="btn btn waves-effect waves-light btn-success">@lang('button.next')</button>
                           <button type="button" id="btn_reset" class="btn btn waves-effect waves-light btn-info"
                                 onclick="submitform()">@lang('button.reset')</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>