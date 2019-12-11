<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <form action="#">
                    <div class="row">
                        <div class="col-md-0 m-b-3">
                            <label class="control-label">@lang('Search By')</label>
                        </div>
                        <div class="col-md-3 m-b-3">
                            <select class="form-control" data-placeholder="" tabindex="2">
                                <option selected readonly disabled hidden>Please Choose </option>
                                <option value="">@lang('ID No')</option>
                                <option value="">@lang('Scheme Ref. No.')</option>
                                <option value="">@lang('Benefit Ref. No.')</option>
                            </select>
                        </div>
                        <div class="col-md-3 m-b-3">
                            <input type="text" name="requestRecDate" id="requestRecDate" class="form-control">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SEARCH')</button>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:3%'>@lang('Select')</th>
                                        <th style='width:6%'>@lang('No.')</th>
                                        <th style='width:26%'>@lang('Notice Date')</th>
                                        <th style='width:30%'>@lang('Notice Type')</th>
                                        <th style='width:30%'>@lang('Scheme Reference No')</th>
                                        <th style='width:5%'>@lang('View')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td><center>
                                                <input type="radio" id="collapse" name="collapse" class="custom-control">
                                            </center></td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><center><a class='view'><i class="fas fa-file-alt"></i></a></center></td>
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
</div>
<div  id="collapseNewCase" style="display:none">
@include('medical.general.allNotice.collapseCaseFactDetails')
</div>

<script>
$(document).ready(function () {

    $('input[type=radio][name=collapse]').change(function () {
        if (this.checked == true) {
            $("#collapseNewCase").show();
        } else {
            $("#collapseNewCase").hide();
        }
    });
});
</script>
