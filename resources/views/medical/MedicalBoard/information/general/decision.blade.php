
<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('form/medical.tab_title.decision')</h5>
                <hr>
                {{-- <form> --}}
                    <div class="card-header">
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('form/medical.general.action')</label>
                                <select id="decision_action" name="decision_action" class="form-control">
                                    <option value="">-- @lang('option.please_select') --</option>}
                                    <option value="1">@lang('form/medical.collapse.decision.title')</option>
                                    <option value="2">@lang('form/medical.collapse.decision.title2')</option>
                                </select>
                            </div>
                        </div>
                        <div id="one1">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">@lang('form/medical.collapse.decision.title')</h5>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 col-lg-12">
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
                                                            <td align="center">
                                                                <div class="custom-control custom-checkbox">
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
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                                    <h5 class="card-title">@lang('form/medical.collapse.decision.title2')</h5>
                                    <hr>
                                    <form action="{{Route('review_case.post')}}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <input type="hidden" name="decision_id" class="form-control" value="
                                        @isset($review_case->id)
                                            {{$review_case->id}}
                                        @endisset
                                            ">
                                        <div class="form-group col-md-12 col-lg-6">
                                            <label class="control-label">@lang('form/medical.collapse.decision.type_discipline')</label><span class="required">*</span>
                                            <select name="decision_discipline" id="decision_discipline" class="form-control" required>
                                                <option value="">-- @lang('option.please_select') --</option>
                                                @isset($ref_table->distyp)
                                                    @foreach($ref_table->distyp as $dt)
                                                        <option value={{$dt->ref_code}} 
                                                            @isset($review_case->mb_distype)
                                                            @if($dt->ref_code == $review_case->mb_distype)
                                                            selected
                                                            @endif
                                                            @endisset
                                                        >{{$dt->desc_en}}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.apportionment')</label><span class="required">*</span>
                                                <select name="decision_apportionment" class="form-control" required>
                                                    <option value="">-- @lang('option.please_select') --</option>}
                                                    @isset($ref_table->sts)
                                                        @foreach($ref_table->sts as $s)
                                                            <option value={{$s->ref_code}}
                                                                @isset($review_case->mb_apportionment)
                                                                @if($s->ref_code == $review_case->mb_apportionment)
                                                                selected
                                                                @endif
                                                                @endisset>{{$s->desc_en}}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="typediscipline_labeldiv">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/medical.collapse.decision.discipline')</label><span class="required">*</span>
                                            </div>
                                        </div>
                                        @if($countdisp != null && $countdisp != 0)
                                        @foreach(array_chunk($ref_table->doc_special,$countdisp) as $disc)
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <ul>
                                                    @foreach($disc as $key => $d)
                                                    <li>
                                                        @if($casetype == '2' && $d->ref_code == '1')
                                                            <div class="custom-checkbox" required>
                                                                <input type="checkbox" name="decision_speciality[]" class="custom-control-input cbox_decision" id="discipline{{$d->ref_code}}" value="{{$d->ref_code}}" checked disabled>
                                                                <label class="custom-control-label" for="discipline{{$d->ref_code}}" >{{$d->desc_en}}</label>
                                                            </div>

                                                        @else
                                                            <div class="custom-checkbox" required>
                                                                <input type="checkbox" name="decision_speciality[]" class="custom-control-input cbox_decision" id="discipline{{$d->ref_code}}" value="{{$d->ref_code}}"
                                                                @isset($review_case->relmedicalboard)
                                                                    @foreach($review_case->relmedicalboard as $rc)
                                                                        @if($d->ref_code == $rc->speciality)
                                                                            checked
                                                                        @endif
                                                                    @endforeach
                                                                @endisset>
                                                                <label class="custom-control-label" for="discipline{{$d->ref_code}}" >{{$d->desc_en}}</label>
                                                            </div>
                                                        @endif
                                                        
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="form-group col-md-12 col-lg-12">
                                            <label class="control-label">@lang('form/medical.general.remarks')</label><span class="required">*</span>
                                            @if (!empty($decision_remarks)||$decision_remarks!=null)
                                                <textarea name="decision_remarks" class="form-control" required>{{$decision_remarks->remark}}</textarea>
                                            @else
                                                <textarea name="decision_remarks" class="form-control" required></textarea>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success" {{-- id="btn_submit_reviewcase" --}}>@lang('button.submit')</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>                         
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>



























