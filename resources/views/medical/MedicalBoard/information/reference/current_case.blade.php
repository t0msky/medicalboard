{{-- Include current case info (from medical services) --}}

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.current_case_info.title')</h5>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="heading1">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse1" aria-expanded="true" aria-controls="collapse1"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.current_case.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <label class="control-label">@lang('form/medical.general.schemerefno')</label>

                                                        <div class="input-group ">
                                                            <input type="text"
                                                                value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"
                                                                class="form-control" readonly>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    style="background-color: #d8e8e9;"><a
                                                                        class="get-code" data-toggle="modal"
                                                                        data-target="#test"
                                                                        data-whatever="@getbootstrap" href="#tt1"
                                                                        aria-expanded="true"><i class="fas fa-file-alt"
                                                                            title="Scheme Case
                                                                        " data-toggle="tooltip"></i></a></span>
                                                                {{-- @include('MedicalServices.test') --}}
                                                            </div>

                                                            &nbsp;<div class="input-group-append">
                                                                <span class="input-group-text"
                                                                    style="background-color: #d8e8e9;"><a
                                                                        class="get-code" data-toggle="modal"
                                                                        data-target="#opinion"
                                                                        data-whatever="@getbootstrap" href="#tt1"
                                                                        aria-expanded="true"><i class="fas fa-history"
                                                                            title="History Opinion"
                                                                            data-toggle="tooltip"></i></a></span>
                                                                {{-- @include('MedicalServices.modal_historyOpinion') --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <!-- <br> -->
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.notice_date')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->dateadd) {{substr($cCase->dateadd,6,2)}}-{{substr($cCase->dateadd,4,2)}}-{{substr($cCase->dateadd,0,4)}}@endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">

                                                        <!-- <br> -->
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.notice_type')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->casetype) {{$cCase->casetype}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.injury_desc')</label>
                                                        <textarea type="text" rows="7" class="form-control"
                                                            readonly>@isset($cCase->injurydesc) {{$cCase->injurydesc}} @endisset</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.potential_huk')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->hukpotential) {{$cCase->hukpotential}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.potential_sec96')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->sek96potential) {{$cCase->sek96potential}} @endisset"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <!-- <a class="btn btn-success waves-effect waves-light text-white collapsed link a1" data-toggle="collapse"
                                                        data-target="#collapse1,#collapse2" aria-expanded="true"
                                                        aria-controls="collapse1">
                                                        @lang('button.next')
                                                    </a> -->
                                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse"
                                                        data-target="#collapse1,#collapse2" aria-expanded="true"
                                                        aria-controls="collapse1" id="btn_next_curcase">@lang('button.next')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="heading2">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse2" aria-expanded="false" aria-controls="collapse2"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.rtw_information.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse2" class="collapse " role="tabpanel" aria-labelledby="heading2">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.rtw_information.rtw_refno')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <!-- <a class="btn btn-success waves-effect waves-light text-white collapsed link a1" data-toggle="collapse"
                                                        data-target="#collapse2,#collapse3" aria-expanded="true"
                                                        aria-controls="collapse2">
                                                        @lang('button.next')
                                                    </a> -->
                                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse"
                                                        data-target="#collapse2,#collapse3" aria-expanded="true"
                                                        aria-controls="collapse2" id="btn_next_rtwinfo">@lang('button.next')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="heading3">
                                    <h6 class="mb-0">
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse3" aria-expanded="false" aria-controls="collapse3"><h6 class="card-title"><i
                                                class="fa fa-plus"></i> @lang('form/medical.collapse.mo_information.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/medical.collapse.mo_information.mo_refno')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-actions col-md-6 offset-6">
                                                    {{-- <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.cancel')</button>
                                                    <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.reset')</button> --}}

                                                    <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_next_current_case">@lang('button.next')</button>
                                                    {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('medical_board/index.save')</button> --}}
                                                </div>
                                            </div>
                                            
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>