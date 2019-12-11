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
                                        <th style='width:5%'></th>
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
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td><input type="radio" name=collapseEmpHistory value=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div  id="collapseEmpHistory" style="display:none">
     @include('medical.general.allNotice.subCollapseEmpHistory')
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