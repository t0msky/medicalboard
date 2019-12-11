<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                            <h3 class="card-title">@lang('caseDetails.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.scheme_ref_no')</label>
                                        <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label class="control-label">@lang('caseDetails.attr.notice_date')</label>
                                        <input type="date" name="notice_date" id="notice_date" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('caseDetails.attr.acceptance')</label>
                                       <input type="text" name="acceptance" id="acceptance" class="form-control">
                                    </div>
                                </div>
    
                            </div>
                            
                            
                        <div class="row p-t-20">
                             <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('caseDetails.attr.notice_type')</label>
                                       <select class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.spi_eligible')</label>
                                        <select class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('caseDetails.attr.scheme_eligible')</label>
                                             <select class="form-control">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                         <label class="control-label">@lang('caseDetails.attr.death_date')</label>
                                         <input type="date" name="death_date" id="death_date" class="form-control">
                                    </div>
                                </div> --}}
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                   <div class="form-group">
                                      <label class="control-label">@lang('caseDetails.attr.scheme_type')</label>
                                      <select class="form-control">
                                            <option></option>
                                        </select>
                                   </div>
                               </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                       <label class="control-label">@lang('caseDetails.attr.status_scheme')</label>
                                       <select class="form-control">
                                            <option></option>
                                        </select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                       <div class="form-group">
                                            <label class="control-label">@lang('caseDetails.attr.potential_HUK')</label>
                                            <input type="text" name="potentialHUK" id="potentialHUK" class="form-control">
                                       </div>
                                </div>
                       </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.refer_to_JD')</label>
                                         <select class="form-control">
                                            <option>@lang('caseDetails.attr.yes')</option> 
                                                <option>@lang('caseDetails.attr.no')</option> 
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.potential_96')</label>
                                         <select class="form-control">
                                            <option>@lang('caseDetails.attr.yes')</option> 
                                                <option>@lang('caseDetails.attr.no')</option> 
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('caseDetails.attr.ilat_notice')</label>
                                         <input type="text" name="ilatNotice" id="ilatNotice" class="form-control">
                                    </div>
                            </div>
                        </div>
    
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('caseDetails.attr.type_update')</label>
                                       <select class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.declare_117')</label>
                                            <input type="text" name="declare_117" id="declare_117" class="form-control">
                                    </div>
                                </div>
                            <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('caseDetails.attr.remark')</label>
                                             <input type="text" name="remark" id="remark" class="form-control">
                                        </div>
                                </div>
                        </div> 
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('insuredPerson.save')</button>
                        </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> </div> </div>