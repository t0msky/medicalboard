<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingZero0">
            <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#EmployerInformation" aria-expanded="false" aria-controls="EmployerInformation">
                            <h6 class="card-title"><i class="fa fa-plus"></i> Employer Information</h6>
                    </a>
            </h6>
        </div>
        <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
            {{-- <h5 class="card-title">Employer Information</h5>
            <hr class="m-t-0 m-b-40"> --}}
            <div class="card-body">
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-4">
                        <div class="form-group-preview row">
                            <div class="col-sm-9 label-preview">
                                <span class="no_bold">Employer Code</span>
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($empinfo) && !empty($empinfo->empcode))
                                <input type="text" class="form-control-preview" value="{{$empinfo->empcode}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->empname))
                                <input type="text" class="form-control-preview" value="{{$empinfo->empname}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->bussentity))
                                <input type="text" class="form-control-preview" value="{{$empinfo->bussentity}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->subbussentity))
                                <input type="text" class="form-control-preview" value="{{$empinfo->subbussentity}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->subbussentitylist))
                                <input type="text" class="form-control-preview" value="{{$empinfo->subbussentitylist}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->servicetype))
                                <input type="text" class="form-control-preview" value="{{$empinfo->servicetype}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->indscode))
                                <input type="text" class="form-control-preview" value="{{$empinfo->indscode}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->subindscodelist))
                                <input type="text" class="form-control-preview" value="{{$empinfo->subindscodelist}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && !empty($empinfo->add1))
                                <input type="text" class="form-control-preview" value="{{$empinfo->add1}} {{$empinfo->add2}} {{$empinfo->add3}}" disabled style="background-color:transparent">
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
                                @if(!empty($state)||$state!=null)
                                @foreach($ref_table->state as $s)
                                @if(!empty($empinfo) && $empinfo->statecode == $s->ref_code)
                                <input type="text" class="form-control-preview" value="{{$s->desc_en}}" disabled style="background-color:white">
                                @endif
                                @endforeach
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
                                @if(!empty($empinfo) && $empinfo->city != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->city}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->postcode != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->postcode}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->pobox != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->pobox}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->lockedbag != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->lockedbag}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->wdt != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->wdt}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->telno != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->telno}}" disabled style="background-color:transparent">
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
                                @if(!empty($empinfo) && $empinfo->faxno != '')
                                <input type="text" class="form-control-preview" value="{{$empinfo->faxno}}" disabled style="background-color:transparent">
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
                                    @if(!empty($empinfo) && $empinfo->email != '')
                                    <input type="text" class="form-control-preview" value="{{$empinfo->email}}" disabled style="background-color:transparent">
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