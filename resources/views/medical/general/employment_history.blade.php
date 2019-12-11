<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="col-12">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:15%'>@lang('Start Date')</th>
                                        <th style='width:15%'>@lang('End Date')</th>
                                        <th style='width:15%'>@lang('Employer Code')</th>
                                        <th style='width:20%'>@lang('Employer Name')</th>
                                        <th style='width:15%'>@lang('Occupation')</th>
                                        <th style='width:15%'>@lang('Type Of Industry')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($history) || $history != null)
                                        @foreach($history['emphistory'] as $key => $emp)
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                <td>{{$key+1}}</td>
                                                <td>{{$emp['startdate']}}</td>
                                                <td>{{$emp['enddate']}}</td>
                                                <td>{{$emp['empcode']}}</td>
                                                <td>{{$emp['empname']}}</td>
                                                <td>{{$emp['indscode']}}</td>
                                                <td>{{$emp['designation']}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" align="center">No Data Available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse" data-target="#employment_history,#benefit_case" aria-expanded="true" aria-controls="employment_history" id="btn_next_employment_history">@lang('button.next')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>