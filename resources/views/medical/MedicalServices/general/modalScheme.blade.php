<!-- sample modal content -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="test" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <form action="/back" method="POST"> 
                        <div class="row p-t-20">
                            <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification Type
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
                                                        @elseif(!empty($obformassist) && $obformassist->idtype != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obformassist->idtype }}"  disabled style="background-color:transparent">
                                                        @else
                                                        <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Identification No
                                                </div>
                                                <div class="col-sm-9">
                                                        @if(!empty($obprofile) && $obprofile->idno != '')
                                                        <input type="text" class="form-control-preview" value="{{ $obprofile->idtype }}"  disabled style="background-color:transparent">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Sub Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->suboccucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucode }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->suboccucode != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucode }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Occupation
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->suboccucodelist != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->suboccucodelist != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->suboccucodelist }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    State
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->state != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->state }}"  disabled style="background-color:transparent">
                                                    @elseif(!empty($obformassist) && $obformassist->state != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obformassist->state }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                    Nationality
                                                </div>
                                                <div class="col-sm-9">
                                                    @if(!empty($obprofile) && $obprofile->nationality != '')
                                                    <input type="text" class="form-control-preview" value="{{ $obprofile->nationality }}"  disabled style="background-color:transparent">
                                                    @else
                                                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
                                                    @endif
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                <div class="col-md-4">
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
                                <div class="col-md-4">
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
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Place of Accident
                                        </div>
                                        {{-- <div class="col-sm-9">
                                            @foreach($accdplace as $AccPlace)
                                            @if (!empty($accinfo) && $accinfo->place == $AccPlace->ref_code)
                                            <input type="text" class="form-control-preview" value="{{$AccPlace->desc_en}}" disabled style="background-color:white">
                                            @endif
                                            @endforeach
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            When Accident Happen?
                                        </div>
                                        {{-- <div class="col-sm-9">
                                            @foreach($accdplace as $AccWhen)
                                            @if (!empty($accinfo) && $accinfo->place == $AccWhen->ref_code)
                                            <input type="text" class="form-control-preview" value="{{$AccWhen->desc_en}}" disabled style="background-color:white">
                                            @endif
                                            @endforeach
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            How the Accident Happened?
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->how}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Injury Description
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Start Working Time on Accident Day
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Ending Time of Work on The Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Witness Phone No.
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-12">
                                    <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:20%'>@lang('scheme/mc.attr.type_hus')</th> 
                                                <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                                <th style='width:17%'>@lang('scheme/mc.attr.start_date')</th>
                                                <th style='width:18%'>@lang('scheme/mc.attr.end_date')</th>
                                                <th style='width:10%'>@lang('scheme/mc.attr.days_work')</th>
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
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment Start Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    <div class="col-md-12">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Details of Wages for the Period of 6 Consecutive Months Before the Month of Death
                                            </div>
                                            <div class="col-md-12">
                                                <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                    <thead>
                                                        <tr>
                                                            <th data-breakpoints="xs">@lang('table-header.wages.num')</th>
                                                            <th>@lang('table-header.wages.year')</th>
                                                            <th>@lang('table-header.wages.month')</th>
                                                            <th data-breakpoints="xs sm">@lang('table-header.wages.wages')</th>
                                                            <th data-breakpoints="xs">@lang('table-header.wages.contribution_paid')</th>
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
                    </div>
                    </form>
                </div>
           </div>
                                
                     
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    //redirect to specific tab
    $(document).ready(function () {
    //$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
    
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
    
</script>