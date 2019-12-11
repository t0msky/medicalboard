<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingZero0">
            <h6 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0">
                    <h6 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h6>
                </a>
            </h6>
        </div>
        <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
            <div class="card-body">
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
                                @if ((!empty($obprofile)||$obprofile!=null))
                                @foreach($obprofile->idinfo as $idx=> $ic)
                                @foreach($ref_table->id_type as $table)
                                @if($table->ref_code ==$ic->idtype)
                                <input type="text" class="form-control-preview" value="{{$table->desc_en }}" disabled style="background-color:transparent">
                                @endif
                                @endforeach
                                @endforeach
                                @else
                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
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
                                @if ((!empty($obprofile)||$obprofile!=null))
                                @foreach($obprofile->idinfo as $idx=> $ic)
                                <input type="text" class="form-control-preview" value="{{$ic->idno}}" disabled style="background-color:transparent">
                                @endforeach
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
                                Date of Birth
                            </div>
                            <div class="col-sm-9">
                                @if (!empty($obprofile)||$obprofile!=null)
                                <input type="text" class="form-control-preview" value="{{ $obprofile->dob }}"  disabled style="background-color:transparent">
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
                                @if (!empty($obprofile)||$obprofile!=null)
                                <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucode  }}" disabled style="background-color:transparent">
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
                                Occupation
                            </div>
                            <div class="col-sm-9">
                                @if (!empty($obprofile)||$obprofile!=null)
                                <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucodelist  }}" disabled style="background-color:transparent">
                                @else
                                <input type="text" class="form-control-preview" disabled style="background-color:transparent">
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
                                @if(!empty($obprofile) || $obprofile!=null)
                                @foreach($ref_table->state as $s)
                                @if((!empty($obprofile)|| $obprofile!=null) && $obprofile->statecode == $s->ref_code)
                                <input type="text" class="form-control-preview" value="{{$s->desc_en}}"  disabled style="background-color:transparent">
                                @endif
                                @endforeach
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
                                @lang('Nationality')
                            </div>
                            <div class="col-sm-9">
                                @if(!empty($obprofile) || $obprofile!=null)
                                @foreach($ref_table->national as $N)
                                @if ((!empty($obprofile) || $obprofile!=null)&& $obprofile->nationality == $N->ref_code)
                                <input type="text" class="form-control-preview" value="{{$N->desc_en}}" disabled style="background-color:transparent">
                                @endif
                                @endforeach
                                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>