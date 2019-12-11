<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/scheme/odemphistory" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        @if(Session::get('msgodemphist'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('msgodemphist')}}
                            </div>

                        </div>
                        @elseif (!empty($msgodemphist))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$msgodemphist}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('Name & Address of Employer for The Last 5 Years of Employment')</label>
                                    <div class="table-responsive">
                                        <table id="table_add_emp_od" class="table table-bordered attendtable">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('No.')</th>
                                                    <th>@lang('Company Name')</th>
                                                    <th>@lang('Address')</th>
                                                    <th>@lang('Duration')</th>
                                                    <th data-breakpoints="xs sm">@lang('Occupation')</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cnt = 3; ?>
                                                @foreach ($odempinfo as $key => $odemp)
                                                <tr>
                                                    <td>{{($key+1)}}</td>
                                                    <td><input type="text" class="form-control" id="empname[]" name="empname[]" value="{{$odemp->empname}}"></td>
                                                    <td><textarea  class="form-control" id="empadd[]" name="empadd[]">{{$odemp->empadd}}</textarea></td>
                                                    <td><input type="text" class="form-control" id="duration[]" name="duration[]" value="{{$odemp->duration}}"></td>
                                                    <td><input type="text" class="form-control" id="designation[]" name="designation[]" value="{{$odemp->designation}}"></td>
                                                    <td><button type="button" class="btn btn-sm btn-danger button-delete"><i class="fas fa-trash-alt fa-sm"></i></button></td>
                                                </tr>
                                                <?php $cnt--; ?>
                                                @endforeach
                                                @for ($i = 1; $i <= $cnt ; $i++)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td><input type="text" class="form-control" id="empname[]" name="empname[]" value=""></td>
                                                    <td><textarea  class="form-control" id="empadd[]" name="empadd[]" value=""></textarea></td>
                                                    <td><input type="text" class="form-control" id="duration[]" name="duration[]" value=""></td>
                                                    <td><input type="text" class="form-control" id="designation[]" name="designation[]" value=""></td>
                                                    <td></td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary" id="add_emp_od">ADD EMPLOYMENT INFO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>