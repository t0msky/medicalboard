<div class="modal fade" id="setappt_modal" tabindex="-1" role="dialog" aria-labelledby="setappt_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="setappt_modal">@lang('form/medical.tab_title.appointment')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <!-- <form action="" method="get"> -->
                <div class="modal-body">
                    <div class="form-group row">
                        {{-- <label class="col-2 control-label">@lang('form/medical.collapse.decision.type_discipline')</label> --}}
                        <div class="col-12">
                            <div class="table-responsive">     
                                <table id="disc_appt" class="display table table-hover order-list10 table-striped table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th width="50%">Discipline</th>
                                        <th width="40%">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- @if((!empty($review_case)||$review_case!=null))
                                            @foreach($ref_table->distyp as $dt)
                                                    @isset($review_case->mb_distype)
                                                    @if($dt->ref_code == $review_case->mb_distype)
                                                        <td>1</td>
                                                        <td>{{$dt->desc_en}}</td>
                                                        <td><select id="apptinfo_date" required class="form-control">
                                                            <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                                            @isset($disciplineDate)
                                                            @foreach($disciplineDate as $dt)
                                                            <option value="{{$dt->date_takwim}}">{{$dt->datetakwim}}</option>
                                                            @endforeach
                                                            @endisset
                                                            <option value="20191110">2019-11-10</option>
                                                        </select></td>
                                                    @endif
                                                    @endisset
                                            @endforeach
                                        @else
                                            <td colspan="3" text-align="center">No Data Available</td>
                                        @endif -->
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="modal_mb_id">
                </div>
                <div class="modal-footer">
                    <div class="align-self-left text-left">
                        <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('button.cancel')</button>
                    </div>
                    <button type="submit" class="btn btn waves-effect waves-light btn-success" id="saveinfoappt"><i class="fa fa-check"></i> @lang('button.save')</button>
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>
