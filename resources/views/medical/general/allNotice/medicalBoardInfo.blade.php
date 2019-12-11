<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <!----------- MEDICAL OPINION INFORMATION ------------>
                @if (checkRole(['ROLOSMB','ROLOMB','ROLOMAB','ROLOSMAB','ROMAB','PNL']))
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('form/medical.collapse.mo_information.mo_refno')</label>
                            <div class="input-group ">
                                <input type="text" name="rtwRefNo" id="mo_refno" value=""class="form-control" readonly>
                                <div class="input-group-append">
                                    <a class="get-code view" data-toggle="modal" data-target="#Preview" data-whatever="@getbootstrap" aria-expanded="true" id="view">
                                        <i class="fas fa-file-alt"  title="Preview Medical Opinion" data-toggle="tooltip"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------- PREVIEW MEDICAL BOARD ------------>
                    <div id="Preview" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header card-title">
                                    <h5 class="modal-title">@lang('Recommendation')</h5>
                                    <br>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group col-md 12 col-lg-12">
                                        <div class="table-responsive">
                                            <table id="myTable2" class="table table-bordered table-striped">
                                                <thead style="background-color:skyblue;">
                                                    <tr>
                                                        @if ($casetype == '2')
                                                        <th style='width:5%'> @lang('No.')</th>
                                                        <th style='width:40%'> @lang('Diagnosis')</th>
                                                        <th style='width:50%'> @lang('5th schedule ESSA 1969')
                                                            @else 
                                                            <th style='width:5%'> @lang('No.')</th>
                                                            <th style='width:95%'> @lang('Diagnosis')</th>
                                                            @endif
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="display:none;"><input type="hidden" value="0"></td>
                                                        <td style="display:none;"><input type="hidden" value=""></td>
                                                        <td style="display:none;"><input type="hidden" value=""></td>
                                                        <td style="display:none;"><input type="hidden" value=""></td>
                                                    </tr>
                                                    {{-- @foreach($tableDiagnosis as $idx => $data) --}}
                                                    <tr>
                                                        <td>{{-- {{$idx+1}} --}}</td>
                                                        <td><input type="hidden" name="ms_rc_diagnosis[]"value="{{-- {{$data['ms_rc_diagnosis']}} --}}">{{-- {{$data['ms_rc_diagnosis']}} --}}</td>
                                                        <td><input type="hidden" name="ms_rc_diagnosis[]"value="</td>
                                                        {{-- {{$data['scheduleESSA']}} --}}">{{-- {{$data['scheduleESSA']}} --}}
                                                    </tr>
                                                    {{-- @endforeach  --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-lg-11">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">@lang('Justification')</span>
                                                </div>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control-preview" value="{{-- {{$justification}} --}}" disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-11">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">@lang('Recommendation')</span>
                                                </div>
                                                <div class="col-sm-11">
                                                    <input type="text" class="form-control-preview" value="{{-- {{$recommend}} --}}" disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    <span class="no_bold">@lang('Submit to')</span>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control-preview" value="{{-- {{$submitto}} --}}" disabled style="background-color:transparent">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-actions">
                                                <button type="submit" name="confirm" value="confirmRecommend" class="btn btn waves-effect waves-light btn-success" >CONFIRM</button>
                                                <button type="submit" name="action" value="Back"  class="btn btn waves-effect waves-light btn-info" onclick="submitform()">BACK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @else
                <!----------- MEDICAL BOARD INFORMATION ------------>
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('MB Ref. No.')</label>
                            <div class="input-group ">
                                <input type="text" name="rtwRefNo" id="rtwRefNo" value=""class="form-control" readonly>
                                <div class="input-group-append">
                                    <a class='view'><i class="fas fa-file-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Report Date')</label>
                            <input type="text" name="reportDate" id="reportDate" value=""class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Hospital Name')</label>
                            <input type="text" name="hospitalName" id="hospitalName" value=""class="form-control" readonly>
                        </div>
                    </div>
                </form>



                @endif
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

//modal Preview
$(document).ready(function()
{

$('#Preview').on('show.bs.modal', function (e) 
{
    console.log($(e.relatedTarget).data('id'));

})


})

</script> 