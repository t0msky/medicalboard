<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <!---------------- TABLE --------------------->

                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <div class="card-header">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 col-lg-4">
                                            <label class="control-label">@lang('Total credit period')</label>
                                            <input type="text" value="" name="totalCreditPeriod" id="totalCreditPeriod" class="form-control">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tableWages"  class="table table-sm table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('No.')</th>
                                                    <th style='width:9%' class="text-center">@lang('Benefit Ref. No')</th>
                                                    <th style='width:9%' class="text-center">@lang('Accident Date')</th>
                                                    <th style='width:9%' class="text-center">@lang('Year')</th>
                                                    <th style='width:9%' class="text-center">@lang('Month')</th>
                                                    <th style='width:9%' class="text-center">@lang('Paid HUS Start Date')</th>
                                                    <th style='width:9%' class="text-center">@lang('Paid HUS End Date')</th>
                                                    <th style='width:9%' class="text-center">@lang('Contribution Paid (RM)')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach($getCreditPeriod as $idnum => $jsonCreditPeriod) 
                                                <tr data-expanded="true">
                                                    <td>{{$idnum+1}}</td>
                                                    <td>{{$jsonCreditPeriod['benefit_no']}}</td>
                                                    <td>{{$jsonCreditPeriod['accident_date']}}</td>
                                                    <td>{{$jsonCreditPeriod['year']}}</td>
                                                    <td>{{$jsonCreditPeriod['month']}}</td>
                                                    <td>{{$jsonCreditPeriod['paid_start']}}</td>
                                                    <td>{{$jsonCreditPeriod['paid_end']}}</td>
                                                    <td>{{$jsonCreditPeriod['contri_paid']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="form-actions text-right">
                                        <button type="button" class="btn btn waves-effect waves-light btn-info">@lang('ADD WAGES')</button>
                                    </div>
                                    <br>
                                     <div class="form-actions text-right">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SAVE')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('CANCEL')</button>
                                    </div> --> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
</div>