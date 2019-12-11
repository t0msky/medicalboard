<div class="row p-t-20">
    <div class="col-12">
        <div class="card">
            <label>@lang('scheme/wages.attr.details_wages_od')</label>
                <div class="table-responsive">
                    <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">@lang('scheme/wages.attr.num')</th>
                                <th>@lang('scheme/wages.attr.year')</th>
                                <th>@lang('scheme/wages.attr.month')</th>
                                <th data-breakpoints="xs sm">@lang('scheme/wages.attr.wages')</th>
                                <th data-breakpoints="xs">@lang('wages.attr.contribution_paid')</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $cnt = 23; ?>
                        @for ($i = 0; $i < $cnt;)  
                        @foreach ($month as $m) 
                        <tr data-expanded="true">
                            <td>{{$i+1}}</td>
                            <td><input type="text" id="year[{{$cnt}}]" name="year[{{$i}}]" value="" class="form-control" readonly></td>
                            <td><input type="text" value='{{$m->descen}}' class='form-control'readonly>
                                <input type="hidden" value='' class='form-control' id="month[{{$i}}]" name="month[{{$i}}]" readonly>
                            </td>
                            <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control maskdecimal" ></td>
                            <td><input type="text" id="contrpaid[{{$i}}]" name="contrpaid[{{$i}}]" value="" class="form-control maskdecimal" ></td>
                        </tr> 
                        <?php $i++; ?>
                        @endforeach
                        @endfor

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>