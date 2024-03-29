{{-- Include current case info (from medical services) --}}

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.current_case_info.title')</h5>
                        <hr>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <!-- current case -->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="heading1">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.current_case.title')</h6>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <div class="form-body">

                                                <div class="form-row p-t-20">
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.general.schemerefno')</label>
                                                        <div class="input-group ">
                                                            <input type="text" value="@isset($schemerefno) {{$schemerefno}} @endisset" class="form-control" disabled>
                                                            <a class="get-code view" data-toggle="modal" data-target="#Preview" data-whatever="@getbootstrap" aria-expanded="true" id="view">
                                                                <i class="fas fa-file-alt"  title="Scheme Case" data-toggle="tooltip"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row p-t-20">
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.notice_date')</label>
                                                        <input type="text"
                                                            value="@isset($assigned_date) {{$assigned_date}} @endisset"
                                                            class="form-control" disabled>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.notice_type')</label>
                                                        <input type="text"
                                                            value="@isset($ctdesc) {{$ctdesc}} @endisset"
                                                            class="form-control" disabled>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <label class="control-label">
                                                            @if($infotype == 'HUK')
                                                                @lang('form/medical.collapse.current_case.desc_huk')
                                                            @elseif($infotype == 'OD')
                                                                @lang('form/medical.collapse.current_case.desc_od')
                                                            @else
                                                                @lang('form/medical.collapse.current_case.desc_ilat')
                                                            @endif
                                                        </label>
                                                        <textarea type="text" rows="7" class="form-control" disabled>@isset($cCase->injurydesc) {{$cCase->injurydesc}} @endisset</textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.potential_huk')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->hukpotential) {{$cCase->hukpotential}} @endisset"
                                                            class="form-control" disabled>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.current_case.potential_sec96')</label>
                                                        <input type="text"
                                                            value="@isset($cCase->sek96potential) {{$cCase->sek96potential}} @endisset"
                                                            class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-6 offset-6">
                                                        
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse"
                                                            data-target="#collapse1,#collapse2" aria-expanded="true"
                                                            aria-controls="collapse1" id="btn_next_curcase">@lang('button.next')</button>
                                                    </div>
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
                                        <div class="card-header">
                                            <div class="form-body">
                                                <div class="form-row p-t-20">
                                                        <div class="form-group col-md-12 col-lg-6">
                                                            <label class="control-label">@lang('form/medical.collapse.rtw_information.rtw_refno')</label>
                                                            <input type="text" value="@isset($rtwrefno) {{$rtwrefno}} @endisset" class="form-control" disabled>
                                                        </div>
                                                    <div class="col-md-6 offset-6">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="collapse"
                                                            data-target="#collapse2,#collapse3" aria-expanded="true"
                                                            aria-controls="collapse2" id="btn_next_rtwinfo">@lang('button.next')</button>
                                                    </div>
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
                                        <div class="card-header">
                                            <div class="form-body">
                                                <div class="form-row p-t-20">
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.collapse.mo_information.mo_refno')</label>
                                                        <input type="text" value="@isset($msrefno) {{$msrefno}} @endisset" class="form-control" disabled>
                                                    </div>
                                                    <div class="form-actions col-md-6 offset-6">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_next_current_case">@lang('button.next')</button>
                                                    </div>
                                                </div> 
                                                <br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Preview--}}
                        <div id="Preview" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form" id="workHistoryForm">
                                            <div class="row p-t-20">
                                                <div class="col-md-12 col-lg-12 col-lg-4">
                                                    <div class="form-group-preview row">
                                                        <div class="col-sm-9 label-preview">
                                                            <span class="no_bold">Form 34 Received Date</span>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control-preview" value="03/09/2019" disabled style="background-color:transparent">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
  <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                                            <div id="accordion2" role="tablist" class="accordion" >
                                                <div class="card m-b-0">
                                                    <div class="card-header" role="tab" id="headingZero0">
                                                        <h6 class="mb-0">
                                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h4>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        <span class="no_bold">Name</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->name != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->name }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->name != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->name }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Identification Type
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->idinfo != '')
                                                                        @foreach($obprofile->idinfo as $ob)
                                                                        <input type="text" class="form-control-preview" value="{{ $ob->idtype }}"  disabled style="background-color:transparent">
                                                                        @endforeach
                                                                        @elseif(!empty($obformassist) && $obformassist->idtype != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idtype }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Identification No
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->idinfo != '')
                                                                        @foreach($obprofile->idinfo as $ob)
                                                                        <input type="text" class="form-control-preview" value="{{ $ob->idno }}"  disabled style="background-color:transparent">
                                                                        @endforeach
                                                                        @elseif(!empty($obformassist) && $obformassist->idno != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idno }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Date of Birth
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->dob != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->dob }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->dob != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->dob }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Race
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->race != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->race }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->race != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->race }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Gender
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->gender != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->gender }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->gender != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->gender }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Occupation (Based on Form 34)
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->occupation != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->occupation }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Occupation
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->occucode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->occucode }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Sub Occupation
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->suboccucode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->sub_occucode }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->suboccucode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->sub_occucode }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Occupation
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->suboccucodelist != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->sub_occucode_list }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->suboccucodelist != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->sub_occucode_list }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Address
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->add1 != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->add1 }},{{ $obprofile->add2 }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->add1 != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->add1 }},{{ $obformassist->add2 }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        State
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->statecode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->state_code }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->statecode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->state_code }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        City
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->city != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->city }}"  disabled style="background-color:transparent">
                                                                        @elseif(!empty($obformassist) && $obformassist->city != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->city }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Postcode
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->postcode != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->postcode }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        P.O Box
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->pobox != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->pobox }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Locked Bag
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->lockedbag }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        W.D.T
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->wdt != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->wdt }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        House Telephone No.
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->telno != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->telno }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Mobile No.
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->mobileno != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->mobileno }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Email Address
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @if(!empty($obprofile) && $obprofile->email != '')
                                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->email }}"  disabled style="background-color:transparent">
                                                                        @else
                                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-4">
                                                                <div class="form-group-preview row">
                                                                    <div class="col-sm-9 label-preview">
                                                                        Nationality
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                    {{-- @if (!empty($obprofile) && $obprofile->nationality == $N->ref_code)
                                                    <input type="text" class="form-control-preview" value="{{$N->desc_en}}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================================== EMPLOYER INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#EmployerInformation" aria-expanded="false" aria-controls="EmployerInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Employer Information</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                {{-- <h5 class="card-title">Employer Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                <span class="no_bold">Employer Code</span>
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->empcode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->empcode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->empcode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->empcode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->empname != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->empname}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->empname != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->empname}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->bussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->bussentity}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->bussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->bussentity}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subbussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subbussentity}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subbussentity != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subbussentity}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity List
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subbussentitylist != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subbussentitylist}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subbussentitylist != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subbussentitylist}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Service Type
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->servicetype != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->servicetype}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->servicetype != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->servicetype}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Industry Code
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->indscode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->indscode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->indscode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->indscode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Industry Code List
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->subindscodelist != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->subindscodelist}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->subindscodelist != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->subindscodelist}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Address
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->add1 != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->add1}},{{$emprecord->add2}},{{$emprecord->add3}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->add1 != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->add1}},{{$employer->add2}},{{$employer->add3}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->statecode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->statecode}},{{$emprecord->add2}},{{$emprecord->add3}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->statecode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->statecode}},{{$employer->add2}},{{$employer->add3}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                    @if(!empty($emprecord) && $emprecord->city != '')
                                                    <input type="text" class="form-control-preview" value="{{$emprecord->city}}" disabled style="background-color:transparent">
                                                    @elseif(!empty($employer) && $employer->city != '')
                                                    <input type="text" class="form-control-preview" value="{{$employer->city}}" disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Postcode
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->postcode != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->postcode}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->postcode != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->postcode}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                P.O Box
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->pobox != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->pobox}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->pobox != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->pobox}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Locked Bag
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->lockedbag}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->lockedbag != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->lockedbag}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                W.D.T
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->wdt != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->wdt}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->wdt != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->wdt}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Telephone No.
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->telno != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->telno}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->phoneno != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->phoneno}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Fax No.
                                            </div>
                                            <div class="col-sm-9">
                                                @if(!empty($emprecord) && $emprecord->faxno != '')
                                                <input type="text" class="form-control-preview" value="{{$emprecord->faxno}}" disabled style="background-color:transparent">
                                                @elseif(!empty($employer) && $employer->phoneno != '')
                                                <input type="text" class="form-control-preview" value="{{$employer->faxno}}" disabled style="background-color:transparent">
                                                @else
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Email Address
                                            </div>
                                            <div class="col-sm-9">
                                                    @if(!empty($emprecord) && $emprecord->email != '')
                                                    <input type="text" class="form-control-preview" value="{{$emprecord->email}}" disabled style="background-color:transparent">
                                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                                    <input type="text" class="form-control-preview" value="{{$employer->email}}" disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================================== ACCIDENT INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AccidentInformation" aria-expanded="false" aria-controls="AccidentInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i>Accident Information</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="AccidentInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                            {{-- <h5 class="card-title">Accident Information</h5>
                            <hr class="m-t-0 m-b-40"> --}}
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            @if (!empty($accinfo))
                                            <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                            @else

                                            @if (Session::get('accddate'))

                                            <input type="text" class="form-control-preview" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" disabled style="background-color:white">
                                            @else
                                            <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Accident Time
                                        </div>
                                        <div class="col-sm-9">
                                            @if (!empty($accinfo))
                                            <input type="text" class="form-control-preview" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" disabled style="background-color:white">
                                            @else
                                            @if (Session::get('accdtime'))
                                            <input type="text" class="form-control-preview" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}" disabled style="background-color:white">
                                            @else
                                            <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- //ade error --}}
                            {{-- <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Place of Accident
                                        </div>
                                        <div class="col-sm-9">
                                            @foreach($accdplace as $AccPlace)
                                            @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code)
                                            <input type="text" class="form-control-preview" value="{{$AccPlace->desc_en}}" disabled style="background-color:white">
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            When Accident Happen?
                                        </div>
                                        <div class="col-sm-9">
                                            @foreach($accdplace as $AccWhen)
                                            @if (!empty($accinfo) && $accinfo->place == $AccWhen->ref_code)
                                            <input type="text" class="form-control-preview" value="{{$AccWhen->desc_en}}" disabled style="background-color:white">
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            How the Accident Happened?
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->how}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Reason for Travelling on The Day of Accident (For road accident only)
                                        </div>
                                        <div class="col-sm-9">
                                            @if(!empty($accinfo)&&$accinfo->reasontravel)
                                            <input type="text" class="form-control-preview" value="{{$accinfo->reasontravel}}" disabled style="background-color:white">
                                            @else
                                            <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Injury Description
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Is Accident Date a Working Day For The Insured Person
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Start Working Time on Accident Day
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Time Of Recess On The Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Ending Time of Work on The Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Name of Witness(If any)
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Witness Phone No.
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                                Name and Address of Clinic Which Provides First Treatment
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                         <!-- ================================== MC ================================ -->
                         <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalCert" aria-expanded="false" aria-controls="medicalCert">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Medical Certification</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="medicalCert" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                {{-- <h5 class="card-title">Medical Certification</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-12">
                                    {{-- <div class="form-group-preview row"> --}}
                                        <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:10%'>@lang('form/scheme.general.collapse.mc.type_hus')</th>
                                                    <th style='width:20%'>@lang('form/scheme.general.collapse.mc.nameAddress_clinic')</th>
                                                    <th style='width:17%'>@lang('form/scheme.general.collapse.mc.start_date')</th>
                                                    <th style='width:18%'>@lang('form/scheme.general.collapse.mc.end_date')</th>
                                                    <th style='width:10%'>@lang('form/scheme.general.collapse.mc.days_work')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($husinfo->parent))
                                                @foreach($husinfo->parent as $key => $parent)
                                                <tr data-expanded="true" class="workrow" id="tr0_0">
                                                    <td> </td>
                                                    <td>@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif </td>
                                                    <td>@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif </td>
                                                    <td>@if (!empty($mc) && $mc->enddate!=''){{ (DateTime::createFromFormat('Ymd', $mc->endate))->format('Y-m-d') }}@endif </td>
                                                    <td> </td>
                                                </tr>
                                                @if(!empty($husinfo->child))
                                                {
                                                        @foreach($husinfo->child[$key] as  $child)
                                                        {

                                                            <tr id="tr'+i+'_'+j+'_'+w+'">
                                                                <td> </td>
                                                                <td> </td>
                                                                <td> </td>
                                                                <td> </td>
                                                            </tr>

                                                        @endforeach
                                                    @endif
                                                @endforeach

                                            @else

                                            <tbody>
                                                <tr data-expanded="true" class="workrow" id="tr0_0">
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>

                                                </tr>

                                            </tbody>
                                            @endif
                                        </table>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            </div>
                         </div>
                         
                         <!-- ================================== WAGES INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfo" aria-expanded="false" aria-controls="wagesInfo">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Wages Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="wagesInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment Start Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment End Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Details of Wages for the Period of 6 Consecutive Months Before the Month of Death
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                    <thead>
                                                        <tr>
                                                            <th data-breakpoints="xs">No.</th>
                                                            <th>Year</th>
                                                            <th>Month</th>
                                                            <th data-breakpoints="xs sm">Wages</th>
                                                            <th data-breakpoints="xs">Contribution Paid</th>
                                                            <th data-breakpoints="xs">Contribution Payable (RM)</th>
                                                            <th data-breakpoints="xs">Contribution Surplus</th>
                                                            <th data-breakpoints="xs">Reject</th>
                                                            <th data-breakpoints="xs">Reason</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-expanded="true">
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== SOCSO OFFICE  ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socsoOffice" aria-expanded="false" aria-controls="socsoOffice">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> SOCSO Office </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="socsoOffice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== CERTIFICATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificationEmployer" aria-expanded="false" aria-controls="certificationEmployer">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Certification By Employer </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="certificationEmployer" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Designation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== BANK ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInformation" aria-expanded="false" aria-controls="bankInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Bank Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="bankInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Payment Mode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="EFT" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Location
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Johor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="CIMB Bank" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="765432346" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Account
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Overseas Bank Account Type
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Country
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Currency
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Swift Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                BSB Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Overseas Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== CONFIRMATION  ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="confirmation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i>Confirmation of Insured Person/Dependant/Claimant </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Acceptance Stamp Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Completion Completed?
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Remark
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
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
                        </div>
                </form>
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