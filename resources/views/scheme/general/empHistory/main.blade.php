<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-body">
                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="card-header">
                                <div class="table-responsive">
                                    <table id="table_add_emp_info" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width: 5%;align-self: center'> @lang('No')</th>
                                                <th style='width: 20%;align-self: center'> @lang('Employer Name')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Address')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Period Of Employment')</th>
                                                <th style='width: 15%;align-self: center'> @lang('Occupation')</th>
                                                @if($casetype == 3)
                                                <th style='width: 10%;align-self: center'> @lang('Monthly Wages (RM)')</th>
                                                @endif
                                                <th style='width: 10%; align-self: center'> @lang('Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($emphistory)||$emphistory!=null)
                                            @foreach($emphistory as $idx=>$data)
                                            <tr data-expanded="true">
                                                <td>{{$idx+1}}</td>
                                                <td>{{$data->empname}}</td>
                                                <td>{{$data->empadd1}}<br>{{$data->empadd2}}<br>{{$data->empadd3}}</td>
                                                <td>{{$data->duration}}</td>
                                                <td>{{$data->designation}}</td>
                                                @if($casetype == 3)
                                                
                                                <td>{{number_format($data->salary,2)}}</td>
                                                @endif
                                                <td>
                                                    <a class='updatedraft'  data-toggle="modal" data-target="#model_update_employer_{{$data->empid}}" ><i class="fas fa-edit"></i></a>&nbsp
                                                    <a class='deletedraft'  data-toggle="modal" data-target="#model_delete_employer_{{$data->empid}}" ><i class="fas fa-trash-alt "></i></a>
                                                </td>
                                            </tr>
                                            @include('scheme.general.empHistory.delete')
                                            @endforeach
                                            @else
                                            <td colspan="7"> <center>No Record Found</center></td>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                       
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary"
                            data-toggle="modal" data-target="#model_add_employment">@lang('ADD EMPLOYER')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('scheme.general.empHistory.add')

@include('scheme.general.empHistory.update')

