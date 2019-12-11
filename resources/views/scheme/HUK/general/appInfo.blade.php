<!------------------- *Application yg datang dari PK (Potential HUK = No) ------------------->
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
                                    <label class="control-label">@lang('Potential HUK')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="potentialHUK" name="potentialHUK" value="{{$getHUKsao['potentialHUK']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="potentialHUK" name="potentialHUK" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Application Recv Date ')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="appRecvDate" name="appRecvDate" value="{{$getHUKsao['appRecvDate']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="appRecvDate" name="appRecvDate" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <td style="align:center;width:10%;" title="VIEW"><a id='view' class="w3-large"><i class="fas fa-file-alt"></i></a></td>
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Source')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="Source" name="Source" value="{{$getHUKsao['Source']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="Source" name="Source" value="" class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date from other source')</label>
                                    @if(!empty($getHUKsao))
                                    <input type="text" readonly id="accDateFromSource" name="accDateFromSource" value="{{$getHUKsao['accDateFromSource']}}" class="form-control">
                                    @else
                                    <input type="text" readonly id="accDateFromSource" name="accDateFromSource" value="" class="form-control">
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
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Injury Description')</label>
                                    @if(!empty($getHUKsao))
                                    <textarea rows="6" cols="50" readonly id="injuryDescription_appInfo" name="injuryDescription_appInfo" value="" class="form-control">{{$getHUKsao['injuryDescription_appInfo']}}</textarea>
                                    @else
                                    <textarea rows="6" cols="50" readonly id="injuryDescription_appInfo" name="injuryDescription_appInfo" value="" class="form-control"></textarea>
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
            <div id="pop5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
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
                                            <input type="date" id="accDateFromSource" name="accDateFromSource" value="{{$getHUKsao['accDateFromSource']}}" class="form-control">
                                            @else
                                            <input type="date" id="accDateFromSource" name="accDateFromSource" value="" class="form-control">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Injury Description')</label>
                                            @if(!empty($getHUKsao))
                                            <textarea rows="4" cols="50" id="injuryDescription_appInfo" name="injuryDescription_appInfo" value="" class="form-control">{{$getHUKsao['injuryDescription_appInfo']}}</textarea>
                                            @else
                                            <textarea rows="4" cols="50" id="injuryDescription_appInfo" name="injuryDescription_appInfo" value="" class="form-control"></textarea>
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





