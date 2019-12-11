<div class="card-body">
    <div class="form-body">
        <div class="card-header">
            <div class="form-row p-t-20">
                <div class="table-responsive">
                    <table id="demo-foo-row-toggler" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                            <tr>
                                <th>@lang('form/medical.general.no')</th>
                                <th>@lang('form/medical.general.mo_ref_no')</th>
                                <th>@lang('form/medical.general.date_request')</th>
                                <th>@lang('form/medical.general.type_of_report')</th>
                                <th>@lang('form/medical.collapse.appointment.status')</th>
                                <th>@lang('form/medical.general.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if(!empty($history) || $history != null)
                                @foreach($history['ms_caseinfo'] as $key => $ms)
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td>{{$ms['mb_schemerefno']}}</td>
                                        <td>{{$ms['mb_dateassign']}}</td>
                                        <td>{{$ms['id']}}</td>
                                        <td></td>
                                        <td>{{$ms['jdrt_final']}}</td>
                                        <td>
                                            <div class="input-group-append">
                                                <a class="get-code view" href="#tt1" aria-expanded="true" id="view"><i class="fas fa-file-alt" title="All Details + Supporting Doc" data-toggle="tooltip"></i></a></span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else --}}
                                <tr>
                                    <td colspan="6" align="center">No Data Available</td>
                                </tr>
                            {{-- @endif --}}
                        </tbody>
                    </table>
                    <div class="col-md-6 offset-6">
                        <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse"  data-target="#opinionHistory,#rehab_history" aria-expanded="true"  aria-controls="mo_history" id="btn_next_mo_history">@lang('button.next')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>