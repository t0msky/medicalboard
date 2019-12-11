<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-body">
                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="card-header">
                                <div class="table-responsive">
                                    <form action="{{route('update_wages')}}" method="POST">
                                        @csrf
                                    <table id="table_add_emp_info" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width: 5%;align-self: center'> @lang('No')</th>
                                                <th style='width: 10%;align-self: center'> @lang('Year')</th>
                                                <th style='width: 10%;align-self: center'> @lang('Month')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Employer Code')</th>
                                                <th style='width: 30%;align-self: center'> @lang('Employer Name')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Wages (RM) ')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Contribution Paid')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($wages)||$wages!=null)
                                            @php $cnt=0;@endphp
                                            @foreach($wages as $idx=>$data)
                                            @foreach($data->contrinfo as $idx_contri=>$contri)
                                            <tr data-expanded="true">
                                                @if($idx_contri<=0)
                                                <td>{{$data->count}}</td>
                                                @else
                                                @php $cnt++ @endphp
                                                <td></td>
                                                @endif
                                                <td><input type="hidden" name="wages_year[{{$cnt}}]" value="{{$contri->year}}">{{$contri->year}}</td>
                                                <td><input type="hidden" name="wages_month[{{$cnt}}]" value="{{$contri->month}}">{{$contri->month}}</td>
                                                <td><input type="hidden" name="wages_empcode[{{$cnt}}]" value="{{$contri->empcode}}">{{$contri->empcode}}</td>
                                                <td>{{$contri->empname}}</td>
                                                <td><input type="text" name="wages_rm[{{$cnt}}]" class="form-control" value="{{$contri->wages}}"></td>
                                                <td>{{number_format($contri->contrpaid,2)}}</td>
                                              
                                            </tr>
                                            @endforeach
                                            @php $cnt++ @endphp
                                            @endforeach
                                            @else
                                            <td colspan="7"> <center>No Record Found</center></td>
                                            @endif
                                        </tbody>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit"
                            class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                            onclick="submitform()">@lang('button.reset')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

