<!----------------------- *From PK (Potential HUK = No) ----------------->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Scheme Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="schemeRefno" name="schemeRefno_no" value="{{$getHUKsao['schemeRefno_no']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="schemeRefno" name="schemeRefno_no" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Benefit Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="benefitRefNo" name="benefitRefNo_no" value="{{$getHUKsao['benefitRefNo_no']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="benefitRefNo" name="benefitRefNo_no" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Status')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="status" name="status_no" value="{{$getHUKsao['status_no']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="status" name="status_no" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="date" readonly id="accDate" name="accDate_no" value="{{$getHUKsao['accDate_no']}}" class="form-control">
                                    @else
                                    <input type="date" readonly id="accDate" name="accDate_no" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-lg-0">
                                <div class="form-group">
                                    <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#pop4">@lang('Edit')</button>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Injury Description')</label>
                                    @if(!empty($getHUKsao))
                                    <textarea rows="6" cols="50" readonly id="injuryDescription" name="injuryDescription" value="" class="form-control">{{$getHUKsao['injuryDescription']}}</textarea>
                                    @else
                                    <textarea rows="6" cols="50" readonly id="injuryDescription" name="injuryDescription" value="" class="form-control"></textarea>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-lg-0">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#pop4">@lang('Edit')</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!------------------- * From auto (Potential HUK = Yes) ------------------->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Scheme Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="schemeRefno" name="schemeRefno" value="{{$getHUKsao['schemeRefno']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="schemeRefno" name="schemeRefno" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Benefit Ref. No.')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="benefitRefNo" name="benefitRefNo" value="{{$getHUKsao['benefitRefNo']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="benefitRefNo" name="benefitRefNo" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Status')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="status" name="status" value="{{$getHUKsao['status']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="status" name="status" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="date" readonly id="accDate" name="accDate" value="{{$getHUKsao['accDate']}}" class="form-control">
                                    @else
                                    <input type="date" readonly id="accDate" name="accDate" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-0">
                                <div class="form-group">
                                    <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#pop4">@lang('Edit')</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Injury Description')</label>
                                    @if(!empty($getHUKsao))
                                    <textarea rows="6" cols="50" readonly id="injuryDescription" name="injuryDescription" value="" class="form-control">{{$getHUKsao['injuryDescription']}}</textarea>
                                    @else
                                    <textarea rows="6" cols="50" readonly id="injuryDescription" name="injuryDescription" value="" class="form-control"></textarea>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-0">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#pop4">@lang('Edit')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!----------------- MODEL SECTION A ---------->
<div class="col-md-20">
    <div class="card">
        <div class="card-body">
            <!-- sample modal content -->
            <div id="pop4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width:50%;">
                    <div class="modal-content">
                        <div class="col-md-20" id="addNoti">
                            <div class="modal-header">
                                <h4 class="modal-title" id="vcenter">Section A</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Accident Date')</label>
                                            @if(!empty($getHUKsao))
                                            <input type="text" id="accDate" name="accDate" value="{{$getHUKsao['createdDate']}}" class="form-control">
                                            @else
                                            <input type="text" id="accDate" name="accDate" value="" class="form-control">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Injury Description')</label>
                                            @if(!empty($getHUKsao))
                                            <textarea rows="6" cols="50" id="injuryDescription" name="injuryDescription" value="" class="form-control">{{$getHUKsao['injuryDescription']}}</textarea>
                                            @else
                                            <textarea rows="6" cols="50" id="injuryDescription" name="injuryDescription" value="" class="form-control"></textarea>
                                            @endif
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





