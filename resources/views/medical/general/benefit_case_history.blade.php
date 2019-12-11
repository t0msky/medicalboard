<div class="card-body">
    <div class="form-body">
        <div class="card-header">
            <div class="form-row p-t-20">
                <div class="table-responsive">
                    <table id="demo-foo-row-toggler" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                            <th style='width:5%'></th>
                            <th>@lang('form/medical.collapse.benefit_case.notice_date')</th>
                            <th>@lang('form/medical.collapse.benefit_case.notice_type')</th>
                            <th>@lang('form/medical.general.schemerefno')</th>
                            <th>@lang('form/medical.collapse.benefit_case.ben_refno')</th>
                            <th>@lang('form/medical.general.action')</th>
                        </thead>
                        <tbody>
                            @if(!empty($history) || $history != null)
                                @foreach($history['benefit'] as $key => $ben)
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td><input type="radio" name=collapseEmpHistory value=""></td>
                                        <td>{{$ben['bn_noticedate']}}</td>
                                        <td>{{$ben['bn_noticetype']}}</td>
                                        <td>{{$ben['bn_schemetype']}}</td>
                                        <td>{{$ben['bn_benefitrefno']}}</td>
                                        <td>
                                            <div class="input-group-append">
                                                <a class="get-cod view" href="#tt1" aria-expanded="true" id="view"><i class="fas fa-file-alt" title="Scheme Case/Supporting Doc" data-toggle="tooltip"></i></a>
                                                &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-info-circle" title="Opinion Details
                                                    "data-toggle="tooltip"></i></a></span>
                                                &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-handshake" title="RTW Social Economic Report
                                                    "data-toggle="tooltip"></i></a></span>
                                                &nbsp;<span class="input-group-text" style="background-color: #d8e8e9;"><a class="get-code" href="#tt1" aria-expanded="true"><i class="fas fa-users" title="RTW Report
                                                    "data-toggle="tooltip"></i></a></span>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" align="center">No Data Available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="col-md-6 offset-6">
                        <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse" data-target="#benefit_case,#rehab_history" aria-expanded="true" aria-controls="benefit_case" id="btn_next_benefitcase">@lang('button.next')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div  id="collapseEmpHistory" style="display:none">
     @include('medical.general.subBenefit_case')
</div>
        
<script>
$(document).ready(function () {

    $('input[type=radio][name=collapseEmpHistory]').change(function () {
        if (this.checked == true) {
            $("#collapseEmpHistory").show();
        } else {
            $("#collapseEmpHistory").hide();
        }
    });
});
</script>