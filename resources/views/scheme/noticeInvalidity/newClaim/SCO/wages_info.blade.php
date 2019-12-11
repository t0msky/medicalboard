<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <!---------------- TABLE --------------------->
                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table id="tableWages"  class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:1%'  class="text-center">@lang('No.')</th>
                                                <th style='width:8%' class="text-center">@lang('Employer Code')</th>
                                                <th style='width:16%' class="text-center">@lang('Employer Name')</th>
                                                <th style='width:9%' class="text-center">@lang('Year')</th>
                                                <th style='width:9%' class="text-center">@lang('Month')</th>
                                                <th style='width:9%' class="text-center">@lang('Wages (RM)')</th>
                                                <th style='width:9%' class="text-center">@lang('Assumed Wages (RM)')</th>
                                                <th style='width:9%' class="text-center">@lang('Contribution Paid (RM)')</th>
                                                <th style='width:9%' class="text-center">@lang('Contribution Payable (RM)')</th>
                                                <th style='width:10%' class="text-center">@lang('Contribution Surplus/Deficit')</th>
                                                <th style="width:8%" class="text-center">@lang('Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($getwages as $idnum => $wagesInfo)
                                            <tr data-expanded="true">
                                                <td>{{$idnum+1}}</td>
                                                <td>{{$wagesInfo['emp_code']}}</td>
                                                <td>{{$wagesInfo['emp_name']}}</td>
                                                <td>{{$wagesInfo['year']}}</td>
                                                <td>{{$wagesInfo['month']}}</td>
                                                <td>{{$wagesInfo['wages']}}</td>
                                                <td>{{$wagesInfo['assume_wages']}}</td>
                                                <td>{{$wagesInfo['contribution_paid']}}</td>
                                                <td>{{$wagesInfo['contribution_payable']}}</td>
                                                <td>{{$wagesInfo['contribution_surplusDeficit']}}</td>
                                                <td style="align:center;width:1%;">
                                                        <a class='updatedraft'><i class="fas fa-edit"></i></a>
                                                        <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                                </td>
                                                        
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#popAddWages">@lang('ADD WAGES')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!------------POPUP ADD NOTIFICATION ----------------->
<div class="col-md-20">
    <div class="card">
        <div class="card-body">
            <!-- sample modal content -->
            <div id="popAddWages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" >
                    <div class="modal-content">
                        <div class="col-md-20" id="addWages">
                        <h5 class="card-title">@lang('scheme/index.attr.wagesInfo')
                        <button type="button" class="close" data-dismiss="modal"aria-hidden="true">×</button></h5>
                            <div class="modal-body">

                                <div class="row p-t-20">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Employer Code')</label>
                                            <input type="text" name="empCame" id="empName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Employer Name')</label>
                                            <input type="text" name="empCode" id="empCode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <br><a id='searchdraft' class="w3-xlarge" ><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Year')</label>
                                            <input type="text" name="year" id="year" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Month')</label>
                                            <input type="text" name="month" id="month" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Wages')</label>
                                            <input type="text" name="wages" id="wages" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" name="action" value="Submit"
                                        class="btn btn-sm waves-effect waves-light btn-success btn-newMC"
                                        id='btnsubmit' onclick="mcsubmit()">@lang('SAVE')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info"
                                        onclick="submitform()">@lang('CANCEL')</button>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

