<div class="card m-b-0">
    <div class="card-header" role="tab" id="headingOne1">
        <h6 class="mb-0">
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empHistory" aria-expanded="false"
                aria-controls="collapseOne1">
                <h6 class="card-title"><i class="fa fa-plus"></i>
                    @lang('Employment History')</h6>
            </a>
        </h6>
    </div>
    <div id="empHistory" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
        <div class="card-body">
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
                                                                <th style='width: 20%;align-self: center'> @lang('Employer Name')<span class="required">*</span></th>
                                                                <th style='width: 25%;align-self: center'> @lang('Address')<span class="required">*</span></th>
                                                                <th style='width: 15%;align-self: center'> @lang('Period Of Employment')<span class="required">*</span></th>
                                                                <th style='width: 20%;align-self: center'> @lang('Occupation')<span class="required">*</span></th>
                                                                @if($casetype == 3)
                                                                <th style='width: 15%;align-self: center'> @lang('Monthly Wages (RM)')<span class="required">*</span></th>
                                                                @endif
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
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                             <td colspan="7"> <center>No Record Found</center></td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
