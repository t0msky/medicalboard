{{-- Include case_info (from medical services) and insured person (from scheme) --}}

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('form/medical.tab_title.decision')</h5>
                <hr>
                <form action="#">
                    <div class="form-body">
                        {{-- <h4 class="card-title">@lang('medical_board/application_info.title')</h4>
                        <hr> --}}
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/medical.general.action')</label>
                                    <select id="decision_action" name="decision_action" class="form-control">
                                        <option value="">-- @lang('option.please_select') --</option>}
                                        <option value="1">@lang('form/medical.collapse.decision.title')</option>}
                                        <option value="2">@lang('form/medical.collapse.decision.title2')</option>}
                                        <option value="3">@lang('form/medical.collapse.decision.title3')</option>}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="one1">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">@lang('form/medical.collapse.decision.title')</h6>
                                    <hr>
                                    <!-- <div class="card"> -->
                                    <!-- <div class="card-body"> -->
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{-- <b>Query to:</b> --}}
                                                    <label class="control-label"><b>Query to:</b></label>
                                                    <div class="table-responsive">
                                                        <table id="appt_listing" class="table table-bordered table-striped appt_listing">
                                                            <thead>
                                                                <tr>
                                                                    <th>@lang('form/medical.collapse.decision.select')</th>
                                                                    <th width="45%">@lang('form/medical.collapse.decision.request_to')</th>
                                                                    <th width="45%">@lang('form/medical.general.remarks')</th>
                                                                    <th>@lang('form/medical.general.action')</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">
                                                                <tr>
                                                                    <td align="center"><div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input cbox" id="customCheck5">
                                                                            <label class="custom-control-label" for="customCheck5"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select name="decision_type" required class="form-control" id="decision_type">
                                                                            <option value="">-- @lang('option.please_select') -- </option>
                                                                            <option value="">RTW</option>
                                                                            <option value="">Scheme</option>
                                                                            <option value="">Medical Opinion</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <textarea name="decision_remarks" class="form-control"></textarea>
                                                                    </td>
                                                                    <td>
                                                                        <div style="float: left;">
                                                                            <!-- <button type="button" class="btn btn-sm btn-info" id="btn_submit_query"><i class="fas fa-plus"></i></button> -->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">     
                                                <button type="button" class="btn waves-effect waves-light btn-success" id="btn_submit_query">@lang('button.submit')</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-- review case -->
                        <div id="two2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">@lang('form/medical.collapse.decision.title2')</h6>
                                    <hr>
                                    
                                    <div class="row p-t-20">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.type_discipline')</label>
                                                <select name="decision_discipline" id="decision_discipline" class="form-control">
                                                    <option value="">-- @lang('option.please_select') --</option>}
                                                    <option value="1">SINGLE</option>}
                                                    <option value="2">MULTIPLE</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.apportionment')</label>
                                                <select name="decision_apportionment" class="form-control">
                                                    <option value="">-- @lang('option.please_select') --</option>
                                                    <option value="1">YES</option>
                                                    <option value="2">NO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="typediscipline_labeldiv">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.discipline')</label>
                                           </div>
                                        </div>

                                                
                                        @foreach(array_chunk($discipline,$countdisp) as $disc)
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <ul>
                                                        @foreach($disc as $d)
                                                            <li>
                                                                <div class=" custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input cbox" id="discipline{{$d->ref_code}}">
                                                                    <label class="custom-control-label" for="discipline{{$d->ref_code}}">{{$d->desc_en}}</label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach

                                            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.general.remarks')</label>
                                                <textarea name="decision_remarks" class="form-control"></textarea>
                                            </div>
                                        </div>  

                                    </div>

                                    <div class="row p-t-20">
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.supportingdocument')</label>
                                                <span class="upload_decision">
                                                    <input type="file" name="support_doc" id="support_doc">    
                                                    <i class=" preview btn_cancel_supportdoc icon-close"></i>    
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success" id="btn_submit_reviewcase">@lang('button.submit')</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <!-- review assessment result -->
                        <div id="three3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">@lang('form/medical.collapse.decision.reviewassessment')</h6>
                                    <hr>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row p-t-20">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.general.action')</label>
                                                        <select name="review_action" id="review_action" class="form-control">
                                                            <option value="">-- @lang('option.please_select') --</option>
                                                            <option value="1">QUERY</option>
                                                            <option value="2">ASSESSMENT CONFIRMATION</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-7" id="fdremark_div">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.decision.remark')</label>
                                                        <textarea name="fd_remark" id="fd_remark" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn waves-effect waves-light btn-success" id="btn_submit_reviewassessment">@lang('button.submit')</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



























