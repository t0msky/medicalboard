<div class="row" id="containerx45">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" id="form_tabledpdnt" action="/otinfo">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{-- <input type="hidden" name="caserefno" value="{{$caserefno}}"> --}}
                    <div class="form-body">

 {{--dd($otinfo)--}}
                        @php $count = 0; @endphp
                        {{-- @php $otinfo = 0; @endphp --}}
                        @if (!empty($otinfo))

                        <div class="col-md-4" id="div_dependentQ" style="display:none">
                            <div class="form-group">
                                <label class="control-label">Dependant Information Available?</label>
                                <select class="form-control dependentQ" name="dependentQ[]" id="dependentQ">
                                    <option>Please select</option>
                                    <option value='Y'>@lang('option.yes')</option>
                                    <option value='N'>@lang('option.no')</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-responsive m-t-40">
                            <table id="tableDependent"
                                class="display nowrap table table-hover table-striped table-bordered" cellspacing="40"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Dependant Name</th>
                                        <th>ID No</th>
                                        <th>Date of Birth</th>
                                        <th>Relationship</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach ($otinfo as $ot)
                                    @php $count++; @endphp
                                    <tr class="" id="" style="">
                                            <td>{{ $count }} </td>
                                            <td>{{ $ot->name }}</td>
                                            <td>{{ $ot->otuniquerefno }}</td>
                                            <td>{{ $ot->dob }}</td>
                                            <td> <input type="hidden" class="code_relation" name="code_relation" id="code_relation{{$count}}" value="{{$ot->relationship}}">
                                            @foreach($ref_table2->relation as $rel)
                                            @if($rel->ref_code == $ot->relationship)
                                            {{$rel->desc_en}}
                                            @endif
                                        @endforeach
                                        </td>
                                            <td>
                                            @foreach($ref_table2->ot_sts as $ots)
                                            @if($ots->ref_code == $ot->otsts)
                                            {{$ots->desc_en}}
                                            @endif
                                        @endforeach
                                        </td>
                                            <td><a class="updatedraft" data-toggle="modal" data-id="{{ $ot->otid }}" data-case="{{ $ot->otid }}" data-target="#modal_dependent"><i class="fas fa-file-alt"></i></a> | &nbsp;<a class="deletedraft" data-toggle="modal" data-id="{{ $ot->otid }}" data-target="#deletemodalot"  href="#!"><i class="fas fa-trash-alt "></i></a></td>
                                            <!-- <td><a class=""  data-toggle="modal" data-id="0" data-target="#modal_dependent" >View</a> | <a class="remove_row"  data-toggle="modal" data-id="0" data-target="#deletemodalot"  href="#!" ><i style="color: red;" class="far fa-trash-alt"></i></a></td> -->
                                            
                                    </tr>
                                @endforeach 

                                </tbody>
                            </table>
                        </div>


                        @else
                        <div class="row">
                            <div class="col-md-12">
                                <div id="ot_accordion" role="tablist" aria-multiselectable="true">
                                    <!-- <div class="row">     -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Dependant Information Available?</label>
                                            <select class="form-control dependentQ" name="dependentQ[]" id="dependentQ">
                                                <option>Please select</option>
                                                <option value='Y'>@lang('option.yes')</option>
                                                <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="table-responsive m-t-40">
                                        <table id="tableDependent"
                                            class="display nowrap table table-hover table-striped table-bordered"
                                            style="display:none;" cellspacing="40" width="50%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Dependant Name</th>
                                                    <th>ID No</th>
                                                    <th>Date of Birth</th>
                                                    <th>Relationship</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div id="add_ot_accordian">
                    </div>
                    <div class="form-actions">
                        <!-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button> -->

                        @if (!empty($otinfo))
                        <button type="button" id="btn_add_ot" href="#!" data-toggle="modal" data-id="0"
                            data-target="#modal_dependent" class="btn btn-sm waves-effect waves-light btn-info">ADD
                            DEPENDANT</button>

                        @else
                        <button type="button" id="btn_add_ot" style="display:none" href="#!" data-toggle="modal"
                            data-id="0" data-target="#modal_dependent"
                            class="btn btn-sm waves-effect waves-light btn-info">ADD DEPENDANT</button>
                        @endif
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Confirm modal --}}
<div class="modal fade" id="deletemodalot" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form method="POST" action="{{ route('delete_ot') }}">
        @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Are you sure you want to delete?
                <input type="hidden" class="form-control" name="id" id="id">
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-secondary btn-sm"
                    data-dismiss="modal">Close</button>
                <button type="submit" id="btn_deletedependent" class="btn btn-danger btn-sm btn_deletedependent">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal" id="modal_dependent" role="dialog">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content" id="containerx">

            <!-- <div class="modal-header" style="background-color:#98cb5b;"> -->
            <!-- <div class="modal-header" style="background-color:#284682;color:#f8f9fa;border-bottom: 5px solid #98cb5b;"> -->
            <div class="modal-header">
                <!-- <h6 class="modal-title"  id="exampleModalLabel3">Add Dependent Information</h6> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="form_dependent" method="post" action="{{route('postOtInfo')}}" data-parsley-validate>
                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                @csrf
                <div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">
                    <div class="SFPanelScroll-Hidden">
                        <div class="col-sm-12" style="padding-top: 0px">
                            <div class="col-sm-12">
                                <h5 class="card-title">@lang('form/scheme.notice_death.dependant.title_modal')</h5>
                                <div class="row">
                                    <input type="hidden" name="uniquerefno" value="" class="form-control">
                                    <input type="hidden" name="otid" value="" class="form-control">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.ot_name')</label>
                                            <input type="text" id="name" name="name" value="" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.id_type')
                                            </label>
                                            <select id="idtype" class="form-control idtype"
                                                value="@if(!empty($oti)){{$oti->idtype}} @endif" name="idtype">
                                                <option value="">Please select</option>
                                                @foreach($ref_table->id_type as $id)
                                                <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.id_no')</label>
                                            <input type="text" id="idno" name="idno" value="" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.passportno')</label>
                                            <input type="text" id="passportno" name="passportno" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.passportexp')</label>
                                            <input type="date" id="passportexp" name="passportexp" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.oldpassportno')</label>
                                            <input type="text" id="oldpassportno" name="oldpassportno" value=""
                                                class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" id="date_birth">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.dateOfBirth')</label>
                                            <input type="date" id="dob" name="dob" value=""
                                                class="form-control date_birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.relationship')</label>
                                            <select class="form-control relationship" name="relationship"
                                                id="relationship">
                                                <option value="">Please select</option>
                                                @foreach($ref_table2->relation as $rel)
                                                <option value="{{$rel->ref_code}}">{{$rel->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Date of Married with OB -->
                                    <div class="col-md-4" id="married_ob">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.date_marriedOb')</label>
                                            <input type="date" id="marriedobdate" name="marriedobdate" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" id="otstatus">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.status')</label>
                                            <select class="form-control ots" name="otsts" id="ots">
                                                <option value="">Please select</option>
                                                @foreach($ref_table2->ot_sts as $ot)
                                                <option value="{{$ot->ref_code}}">{{$ot->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Demised Date if OT Status = Demised -->
                                    <div class="col-md-4" id="demised_date">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.date_death')</label>
                                            <input type="date" id="dodeath" name="dodeath" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!-- Passport Expired Date if ID Type = SSN -->
                                    <div class="col-md-4" id="passport_expired">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.passport_expired')
                                            </label>
                                            <input type="date" id="passportexp" name="passportexp" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!-- Disablity either Before or After death if OT Status == disabled -->
                                    <div class="col-md-4" id="disability_beforeafter">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.disability_beforeAfter_death')</label>
                                            <select class="form-control" name="disablewhen" id="disablewhen">
                                                <option value="">Please select</option>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                                {{-- @foreach($disable as $dis)
                                                <option value="{{$dis->ref_code}}">{{$dis->desc_en}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="married_date">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.married_date')</label>
                                            <input type="date" id="marrieddate" name="marrieddate" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="adoption_date">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.adoption_date')</label>
                                            <input type="date" id="adoptiondate" name="adoptdate" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="remarried_date">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.remarried_date')</label>
                                            <input type="date" id="remarrieddate" name="remarrieddate" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!-- Condition based on relationship, OT Status & ID Type = SSN -->
                                {{-- <div class="row"> --}}
                                <!-- Date Of Birth if relationship with OB = child -->


                                <!-- Eligibility start Date -->
                                {{--<div class="col-md-4" id="eligibility_start">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.eligibility_start')</label>
                                            <input type="date" id="eligibilitystart" name="eligibilitystart" value="" class="form-control">
                                        </div>
                                    </div>
                                
                                    <!-- Eligibility End Date -->
                                    <div class="col-md-4" id="eligibility_end">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.eligibility_end')</label>
                                            <input type="date" id="eligibilityend" name="eligibilityend" value="" class="form-control">
                                        </div>
                                    </div>--}}


                                <!-- Date of Married with OB -->
                                {{-- <div class="col-md-4" id="divored_ob">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.date_divorcedOb')</label>
                                            <input type="date" id="divorcedobdate" name="divorcedobdate" value="" class="form-control">
                                        </div>
                                    </div>  --}}
                                {{-- </div> --}}
                                {{-- <div class="row">                         --}}
                                <!--In Edah if Marital Status at the time of death is Divorced -->
                                {{-- <div class="col-md-3" id="in_edah">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.edah')</label>
                                            <select class="form-control" name="edah" id="edah">
                                            <option value=''>Please select</option>
                                            <option value='Y'>@lang('option.yes')</option>
                                            <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                {{-- </div>  --}}
                                {{-- <div class="row"> --}}
                                <!-- Married Date if OT Status = Married && Relation with OB == Child/Siblings -->

                                <!-- Registered Married is the same with married date -->
                                {{-- <div class="col-md-3" id="registered_married">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.registered_married')</label>
                                            <select class="form-control" name="regmarried" id="regmarried">
                                                <option value=''>Please select</option>
                                                <option value='Y'>@lang('option.yes')</option>
                                                <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="row">
                                    <!-- Disability if relation OB & OT == Child -->
                                    <div class="col-md-4" id="disability_i">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.disability')</label>
                                                <select class="form-control" name="disability" id="disability">
                                                    <option value=''>Please select</option>
                                                    <option value='Y'>@lang('option.yes')</option>
                                                    <option value='N'>@lang('option.no')</option>
                                                </select> 
                                        </div>
                                    </div>
                                                            
                                    <!-- Still Study appear when choose Yes -->
                                    <div class="col-md-4" id="still_study">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.dependant.still_study')</label>
                                            <select class="form-control stillstudy" name="still_study" id="still_study_input">
                                                <option value="">Please select</option>    
                                                <option value="yes" selected>Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.address')</label>
                                            <input type="text" id="add1" name="add1" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="add2" name="add2" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="add3" name="add3" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.state')</label>
                                            <select name='statecode' id='statecode' class='form-control'>
                                                <option value="">Please select</option>
                                                @foreach($ref_table->state as $s)
                                                <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.city')</label>
                                            <input type="text" id="city" name="city" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.postcode')</label>
                                            <input type="text" id="postcode" name="postcode" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.po_box')</label>
                                            <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.locked_bag')</label>
                                            <input type="text" id="lockedbag" name="lockedbag" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.wdt')</label>
                                            <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.telephoneNo')</label>
                                            <input type="text" id="telno" name="telno" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.mobileNo')</label>
                                            <input type="text" id="mobileno" name="mobileno" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.email')</label>
                                            <input type="text" id="email" name="email" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.ot_guardian')</label>
                                            <select class="form-control guardianQ" name="guardian" id="guardianQ">
                                                <option>Please select</option>
                                                <option value='Y'>@lang('option.yes')</option>
                                                <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions col-md-8 pull-right">
                                        <!-- <button type="button" id="btn_add_guardian0" style="display:none" class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-toggle="modal" data-id="0" data-target="#modal_guardian">ADD GUARDIAN INFO</button> -->
                                        <button type="button" id="btn_add_guardian" style="display:none"
                                            class="btn btn-sm waves-effect waves-light btn-info">ADD GUARDIAN
                                            INFO</button>
                                    </div>
                                </div>

                                {{--<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.dependant.otobdependence')</label>
                                        <input type="text" id="obotdependence" name="obotdependence" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.dependant.qualification')</label>
                                        <input type="text" id="qualification" name="qualification" value="" class="form-control">
                                    </div>
                                </div>--}}
                                {{--<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.dependant.eligibility')</label>
                                        <input type="text" id="eligibility" name="eligibility" value="" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.dependant.pendingpay')</label>
                                        <input type="text" id="pendingpay" name="pendingpay" value="" class="form-control">
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">@lang('form/scheme.notice_death.dependant.maritalstatus')</label>
                                        <select class="form-control" name="maritalsts"> 
                                        <option value="">Please select</option>    
                                        @foreach($maritalsts as $id)
                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>--}}

                        <div id="yes_dependantstudy">
                            <h5 class="card-title">@lang('form/scheme.notice_death.dependant_study.title')</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.study_start_date')</label>
                                        <input type="date" id="studystartdate" name="studystartdate" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.study_end_date')</label>
                                        <input type="date" id="studyenddate" name="studyenddate" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.status')</label>
                                        <select class="form-control" name="studysts" id="study_status">
                                            <option value="">Please select</option>
                                            @foreach($ref_table2->study_sts as $id)
                                            <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.edu_level')</label>
                                        <select class="form-control edu" name="edulvl" id="edulvl">
                                            <option value="">Please select</option>
                                            @foreach($ref_table2->edu_lvl as $id)
                                            <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 edu_other_box" id="eduother">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.pls_specify')</label>
                                        <input type="text" name="eduothers" id="eduothers" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.course_name')</label>
                                        <input type="text" id="coursename" name="coursename" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.notice_death.dependant_study.inst_univer_name')</label>
                                        <input type="text" id="uniname" name="uniname" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="guardian" style="display:none">
                            <h5 class="card-title">@lang('form/scheme.notice_death.dependant.M_guardian_info')</h5>
                            <hr>
                            <div class="table-responsive m-t-40">
                                @if (!empty($guardianinfo))  
                                <table id="tableGuardian"
                                    class="display nowrap table table-hover table-striped table-bordered"
                                    cellspacing="40" width="100%">
                                    <thead>
                                        <tr>
                                            <th>@lang('form/scheme.notice_death.dependant.T_select')</th>
                                            <th>@lang('form/scheme.notice_death.dependant.T_idno')</th>
                                            <th>@lang('form/scheme.notice_death.dependant.T_name')</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($guardianinfo as $gd)
                                    <tr class="" id="" style="">
                                    <td><input type="radio" class="cb" name="guardianid" value="{{ $gd->otid }}">
                                    </td>
                                    <td>{{ $gd->otid }}</td>
                                    <td>{{ $gd->name }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody> 
                                </table>
                                @endif 
                            </div>
                            <div class="row p-t-20 pull-right">

                                <button type="button" id="btn_guardian_modal"
                                    class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-id="0">ADD GUARDIAN
                                    </button>

                            </div>

                            <div id="add_guardian" style="display:none;">
                                <input type="hidden" name="guardian_uniquerefno" value="" class="form-control">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.guardian_name')</label>
                                            <input type="text" name="guardian_name" id="guardian_name"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.id_type')</label>
                                            <select id="idtype0" class="form-control" name="guardian_idtype">
                                                @foreach($ref_table->id_type as $id)
                                                <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.id_no')</label>
                                            <input type="text" name="guardian_idno" id="identification_number"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.address')</label>
                                            <input type="text" name="guardian_add1" id="address1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="guardian_add2" id="address2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="guardian_add3" id="address3" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.city')</label>
                                            <input type="text" name="guardian_city" id="city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.state')</label>
                                            <select name="guardian_statecode" id="statecode" class="form-control">
                                                @foreach($ref_table->state as $s)
                                                <option value="{{$s->ref_code}}">{{$s->desc_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.postcode')</label>
                                            <input type="number" name="guardian_post_code" id="post_code"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.po_box')</label>
                                            <input type="text" name="guardian_pobox" id="pobox" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.locked_bag')</label>
                                            <input type="text" name="guardian_lockedbag" id="lockedbag"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.guardian.wdt')</label>
                                            <input type="text" name="guardian_wdt" id="wdt" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.telephoneNo')</label>
                                            <input type="text" id="telno" name="guardian_telno" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.mobileNo')</label>
                                            <input type="text" id="mobileno" name="guardian_mobileno" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.notice_death.dependant.email')</label>
                                            <input type="text" id="email" name="guardian_email" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                        <div class="form-body" id="bank_info_dpndt" style="display:none;">
                            <h5 class="card-title-sub">@lang('form/scheme.general.collapse.bank.title')</h5>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>
                                        <select class="form-control" name='paymode' id='paymode_dpndt' required>
                                            <option value="">Please Select</option>
                                            @foreach($ref_table2->pay_mode as $opay)

                                            <option value="{{$opay->ref_code}}"> {{$opay->desc_en}} </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4" id="bank_location_dpndt" style="display:none">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('form/scheme.general.collapse.bank.bank_account')</label>
                                        <select class="form-control select" id="bankloc_dpndt" name='bankloc'>
                                            <option value="">Please Select</option>
                                            @foreach($ref_table2->bank_loc as $ob)
                                            <option value="{{$ob->ref_code}}">{{$ob->desc_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="bank_reason_dpndt">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label
                                                class="control-label">@lang('form/scheme.general.collapse.bank.reason')</label>
                                            @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                                            <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                                <option value="">Please Select</option>
                                                @else
                                                <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                                    <option value="">Please Select</option>
                                                    @endif
                                                    @foreach($ref_table2->rsn_no_acc as $or)
                                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->ref_code)
                                                    <option value="{{$or->ref_code}}" selected>{{$or->desc_en}}</option>
                                                    <option>@lang('form/scheme.general.collapse.bank.senior')</option>
                                                    <option>@lang('form/scheme.general.collapse.bank.legal')</option>
                                                    @else
                                                    <option value="{{$or->ref_code}}">{{$or->desc_en}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="bank_eft_dpndt">
                                <div id="local_bank_dpndt">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <select class="form-control selectLocalBank" name='localbankname'
                                                    id='local_bank_dpndtname'>
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    <select class="form-control selectLocalBank" name='localbankname'
                                                        id='localbankname'>
                                                        @else
                                                        <select class="form-control selectLocalBank"
                                                            name='localbankname' id='localbankname'>
                                                            @endif
                                                            <option value="">Please Select</option>
                                                            @foreach($ref_table2->bank_code as $bc)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                            $bankinfo->bankcode == $bc->ref_code)
                                                            <option value="{{$bc->ref_code}}" selected>{{$bc->desc_en}}
                                                            </option>
                                                            @else
                                                            <option value="{{$bc->ref_code}}">{{$bc->desc_en}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="localaccno" id="localaccno"
                                                    class="form-control selectLocalBank clearFields"
                                                    value="{{$bankinfo->accno}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="localaccno" id="localaccno"
                                                    class="form-control selectLocalBank clearFields" value="">
                                                @else
                                                <input type="text" name="localaccno" id="localaccno"
                                                    class="form-control selectLocalBank clearFields" value="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                                <select class="form-control selectLocalBank" name='localacctype'
                                                    id='localacctype' value="{{$bankinfo->acctype}}">
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                    <select class="form-control selectLocalBank" name='localacctype'
                                                        id='localacctype' value="">
                                                        @else
                                                        <select class="form-control selectLocalBank" name='localacctype'
                                                            id='localacctype'>
                                                            @endif
                                                            <option value="">Please Select</option>


                                                            @foreach($ref_table->acc_type as $at)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                            $bankinfo->acctype == $at->ref_code)
                                                            <option value="{{$at->ref_code}}" selected>{{$at->desc_en}}
                                                            </option>
                                                            <option>@lang('form/scheme.general.collapse.bank.joint')
                                                            </option>
                                                            @else
                                                            <option value="{{$at->ref_code}}">{{$at->desc_en}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="localbankaddr" id="localbankaddr"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->bankaddr}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="localbankaddr" id="localbankaddr"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="localbankaddr" id="localbankaddr"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="oversea_bank_dpndt">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O' &&
                                                $bankinfo->ovbankname)
                                                <input type="text" name="ovbankname" id="ovbankname"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->ovbankname}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="ovbankname" id="ovbankname"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="ovbankname" id="ovbankname"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                                <input type="text" name="ovaccno" id="ovaccno"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->accno}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="ovaccno" id="ovaccno"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="ovaccno" id="ovaccno"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.ov_type_acc')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <select class="form-control selectOverseasBank" name='ovacctype'
                                                    id='ovacctype'>
                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                    <select class="form-control selectOverseasBank" name='ovacctype'
                                                        id='ovacctype'>
                                                        @else
                                                        <select class="form-control selectOverseasBank" name='ovacctype'
                                                            id='ovacctype'>
                                                            @endif

                                                            {{-- @foreach($overseasbanktype as $ovt)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                                            $bankinfo->acctype == $ovt->ref_code)
                                                            <option value="{{$ovt->ref_code}}" selected>
                                                            {{$ovt->desc_en}}
                                                            </option>
                                                            <option>@lang('form/scheme.general.collapse.bank.joint')
                                                            </option>
                                                            @else
                                                            <option value="{{$ovt->ref_code}}">{{$ovt->desc_en}}
                                                            </option>
                                                            @endif
                                                            @endforeach --}}
                                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.country')</label>
                                                <input type="text" name="country" id="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.currency')</label>
                                                <input type="text" name="currency" id="currency" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="swiftcode" id="swiftcode"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->swiftcode}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="swiftcode" id="swiftcode"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="swiftcode" id="swiftcode"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="bsbcode" id="bsbcode"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->bsbcode}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="bsbcode" id="bsbcode"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="bsbcode" id="bsbcode"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('form/scheme.general.collapse.bank.ov_bank_address')</label>
                                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                                    class="form-control selectOverseasBank clearFields"
                                                    value="{{$bankinfo->bankaddr}}">
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                                    class="form-control selectOverseasBank clearFields" value="">
                                                @else
                                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                                    class="form-control selectOverseasBank clearFields" value="">
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@lang('button.close')</button>
        <button type="submit" class="btn btn-primary save_dependent" id="save_dependent">@lang('button.save')</button>
    </div>


    </form>

</div>
</div>
</div>

<!--end Modal-->



<script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />

<script>
    $(document).ready(function () {

        datatable();


        $('#deletemodalot').on('show.bs.modal', function (e) {

            var otid = $(e.relatedTarget).data('id');
            console.log("otid: "+otid);            
            $('#deletemodalot input[name=id]').prop("value", otid);

                // var modal = $(this);
                // modal.find('.btn_deletedependent').val(otid);
                // $('.btn_deletedependent').attr('id', 'btn_deletedependent' + otid);

                // $('.btn_deletedependent').on('click', function (e) {

                //     if ($('.btn_deletedependent').val() == otid) {

                //         $('#btn_deletedependent' + otid).attr("disabled", true);

                //         $.ajax({
                //             headers: {
                //                 'X-CSRF-Token': '{{ csrf_token() }}',
                //             },
                //             type: 'POST',
                //             data: {
                //                 otid: otid
                //             },
                //             url: "{/{ route/('delete_ot') }}",
                //             success: function (data) {

                //                 $('#btn_deletedependent' + otid).attr("disabled",
                //                     false);
                //                 datatable();
                //                 $('#deletemodalot').modal('hide');

                //                 var details = JSON.parse(data);

                //                 if (details.errorcode == 0) {
                //                     alert("Successfully Deleted!");

                //                 } else {
                //                     alert("Failed to  Delete!");

                //                 }


                //             },
                //             error: function (XMLHttpRequest, textStatus, errorThrown) {
                //                 $('#btn_deletedependent' + otid).attr("disabled",
                //                     false);
                //                 alert("Status: " + textStatus);
                //                 alert("Error: " + errorThrown);
                //             }
                //         });
                //     }
                // });

        });

        $('#tableGuardian').on('click', 'input[name="guardianid"]', function (e) {

            var otid = $(this).val();
            console.log('otid: ' + otid);

            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: 'GET',
                data: {
                    otid: otid
                },
                url: "{{ route('getGuardian') }}",
                success: function (data) {

                    $('#add_guardian').show();


                    var details = JSON.parse(data);
                    $('#form_dependent input[name=guardian_name]').prop("value", details.g_name);
                    $('#form_dependent select[name=guardian_idtype]').prop("value", details.g_idtype);
                    $('#form_dependent input[name=guardian_idno]').prop("value", details.g_idno);
                    $('#form_dependent input[name=guardian_passportno]').prop("value",details.g_passportno);
                    $('#form_dependent input[name=guardian_passportexp]').prop("value",details.g_passportexp);
                    $('#form_dependent input[name=guardian_oldpassportno]').prop("value",details.g_oldpassportno);
                    $('#form_dependent input[name=guardian_add1]').prop("value", details.g_add1);
                    $('#form_dependent input[name=guardian_add2]').prop("value", details.g_add2);
                    $('#form_dependent input[name=guardian_add3]').prop("value", details.g_add3);
                    $('#form_dependent input[name=guardian_city]').prop("value", details.g_city);
                    $('#form_dependent select[name=guardian_statecode]').prop("value",details.g_statecode);
                    $('#form_dependent input[name=guardian_postcode]').prop("value", details.g_postcode);
                    $('#form_dependent input[name=guardian_postcode]').prop("value", details.g_postcode);
                    $('#form_dependent input[name=guardian_lockedbag]').prop("value",details.g_pobox);
                    $('#form_dependent input[name=guardian_wdt]').prop("value", details.g_pobox);
                    $('#form_dependent input[name=guardian_pobox]').prop("value", details.g_pobox);
                    $('#form_dependent input[name=guardian_mobileno]').prop("value", details.g_mobileno);
                    $('#form_dependent input[name=guardian_email]').prop("value", details.g_email);
                    $('#form_dependent input[name=guardian_telno]').prop("value", details.g_email);

                    if (details.g_category == 'OT') {
                        $('#form_dependent input[name=guardian_name]').prop("readonly",true);
                        $('#form_dependent select[name=guardian_idtype]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_idno]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_passportno]').prop("readonly", true);
                        $('#form_dependent input[name=guardian_passportexp]').prop("readonly", true);
                        $('#form_dependent input[name=guardian_oldpassportno]').prop("readonly", true);
                        $('#form_dependent input[name=guardian_add1]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_add2]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_add3]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_city]').prop("readonly",true);
                        $('#form_dependent select[name=guardian_statecode]').prop("readonly", true);
                        $('#form_dependent input[name=guardian_postcode]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_lockedbag]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_wdt]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_pobox]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_mobileno]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_telno]').prop("readonly",true);
                        $('#form_dependent input[name=guardian_email]').prop("readonly",true);
                    }

                    $('#bank_info_dpndt').show();

                    $('#form_dependent select[name=reasonnoacc]').prop("value", details.reasonnoacc);
                    $('#form_dependent select[name=paymode]').prop("value", details.paymode);
                    $('#form_dependent select[name=bankloc]').prop("value", details.bankloc);
                    $('#form_dependent input[name=currency]').prop("value", details.currency);
                    $('#form_dependent input[name=country]').prop("value", details.country);
                    $('#form_dependent input[name=bsbcode]').prop("value", details.bsbcode);

                    if (details.paymode == '2') {

                        console.log("hahahahaa");
                        $('#bank_reason_dpndt').hide();
                        $('#bank_location_dpndt').show();
                        $('#bank_eft_dpndt').show();

                        if (details.bankloc == 'L') {
                            $('#local_bank_dpndt').show();
                            $('#oversea_bank_dpndt').hide();

                            $('#form_dependent select[name=localbankname]').prop("value",details.bankname);
                            $('#form_dependent input[name=localaccno]').prop("value",details.accno);
                            $('#form_dependent input[name=localbankaddr]').prop("value",details.bankaddr);
                            $('#form_dependent select[name=localacctype]').prop("value",details.acctype);

                        } else if (details.bankloc == 'O') {
                            $('#local_bank_dpndt').hide();
                            $('#oversea_bank_dpndt').show();

                            $('#form_dependent input[name=swiftcode]').prop("value", details.swiftcode);
                            $('#form_dependent input[name=ovbankname]').prop("value",details.bankname);
                            $('#form_dependent input[name=ovaccno]').prop("value", details.accno);
                            $('#form_dependent input[name=ovbankaddr]').prop("value",details.bankaddr);
                            $('#form_dependent select[name=ovacctype]').prop("value",details.acctype);
                        }
                    } else if (details.paymode == '1') {

                        $('#bank_reason_dpndt').show();
                        $('#bank_location_dpndt').hide();
                        $('#bank_eft_dpndt').hide();
                        $('#oversea_bank_dpndt').hide();
                        $('#local_bank_dpndt').hide();
                    } else {
                        $('#bank_reason_dpndt').hide();
                        $('#bank_location_dpndt').hide();
                        $('#bank_eft_dpndt').hide();
                        $('#oversea_bank_dpndt').hide();
                        $('#local_bank_dpndt').hide();
                    }



                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }
            });
        });

        $('#modal_dependent').on('show.bs.modal', function (e) {


            var otid = $(e.relatedTarget).data('id');

            console.log("otid : " + otid);

            var no_of_child = 0;
            var no_of_widow = 0;
            var no_of_widower = 0; 
            var no_of_mother = 0; 
            var no_of_father = 0; 
            var no_of_grandma = 0; 
            var no_of_grandpa = 0;
            var no_of_siblings = 0;
            

            $(":input.code_relation").each(function(i, val) {
            if ($(this).val() == '1') {
                no_of_child++;
            }
            if ($(this).val() == '2') {
                no_of_widow++;
            }
            if ($(this).val() == '3') {
                no_of_widower++;
            }
            if ($(this).val() == '4') {
                no_of_mother++;
            }
            if ($(this).val() == '5') {
                no_of_father++;
            }
            if ($(this).val() == '6') {
                no_of_grandma++;
            }
            if ($(this).val() == '7') {
                no_of_grandpa++;
            }
            if ($(this).val() == '8') {
                no_of_siblings++;
            }
            });

            var no_of_code_relation = $(':input.code_relation').length; //child

                // var no_of_child = $('[id^="code_relation"] input[value=1]').length; //child
                // var no_of_widow = $('[id^="code_relation"] input[value=2]').length; //widow
                // var no_of_widower = $('[id^="code_relation"] input[value=3]').length; //widower
                // var no_of_mother = $('[id^="code_relation"] input[value=4]').length; //mother
                // var no_of_father = $('[id^="code_relation"] input[value=5]').length; //father
                // var no_of_grandma = $('[id^="code_relation"] input[value=6]').length; //grandma
                // var no_of_grandpa = $('[id^="code_relation"] input[value=7]').length; //grandpa
                // var no_of_siblings = $('[id^="code_relation"] input[value=8]').length; //siblings

                console.log("no_of_code_relation: "+no_of_code_relation);
                console.log("no_of_child: "+no_of_child);
                console.log("no_of_widow: "+no_of_widow);
                console.log("no_of_widower: "+no_of_widower);
                console.log("no_of_mother: "+no_of_mother);
                console.log("no_of_father: "+no_of_father);
                console.log("no_of_grandma: "+no_of_grandma);
                console.log("no_of_grandpa: "+no_of_grandpa);
                console.log("no_of_siblings: "+no_of_siblings);

                if(no_of_widow !== 0 ){

                    $('#form_dependent [id="relationship"] option[value=1]').show();

                    if(no_of_widow == 4){
                        $('#form_dependent [id="relationship"] option[value=2]').hide();
                    }else{
                        $('#form_dependent [id="relationship"] option[value=2]').show();
                    }
                    
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();

                }else if(no_of_widower !== 0 && no_of_widower == 1){

                    $('#form_dependent [id="relationship"] option[value=1]').show();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();

                }else if(no_of_child !== 0){

                    $('#form_dependent [id="relationship"] option[value=1]').show();
                    $('#form_dependent [id="relationship"] option[value=2]').show();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();

                }else if(no_of_father !== 0 && no_of_father == 1){

                    $('#form_dependent [id="relationship"] option[value=1]').hide();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').show();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();
                    
                }
                else if(no_of_mother !== 0 && no_of_mother == 1){

                    $('#form_dependent [id="relationship"] option[value=1]').hide();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').show();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();
    
                    
                }
                else if(no_of_grandma !== 0 && no_of_grandma == 1){

                    $('#form_dependent [id="relationship"] option[value=1]').hide();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').show();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();
                    
                }
                else if(no_of_grandpa !== 0 && no_of_grandpa == 1){

                    $('#form_dependent [id="relationship"] option[value=1]').hide();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').show();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').hide();
                    
                }
                else if(no_of_siblings !== 0 ){

                    $('#form_dependent [id="relationship"] option[value=1]').hide();
                    $('#form_dependent [id="relationship"] option[value=2]').hide();
                    $('#form_dependent [id="relationship"] option[value=3]').hide();
                    $('#form_dependent [id="relationship"] option[value=4]').hide();
                    $('#form_dependent [id="relationship"] option[value=5]').hide();
                    $('#form_dependent [id="relationship"] option[value=6]').hide();
                    $('#form_dependent [id="relationship"] option[value=7]').hide();
                    $('#form_dependent [id="relationship"] option[value=8]').show();
                }
                else{

                    $('#form_dependent [id="relationship"] option[value=1]').show();
                    $('#form_dependent [id="relationship"] option[value=2]').show();
                    $('#form_dependent [id="relationship"] option[value=3]').show();
                    $('#form_dependent [id="relationship"] option[value=4]').show();
                    $('#form_dependent [id="relationship"] option[value=5]').show();
                    $('#form_dependent [id="relationship"] option[value=6]').show();
                    $('#form_dependent [id="relationship"] option[value=7]').show();
                    $('#form_dependent [id="relationship"] option[value=8]').show();    
                }

            if (otid !== '' && otid !== null && otid !== '0' && otid != 0 && otid !== undefined) {

                $.ajax({
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    type: 'GET',
                    data: {
                        otid: otid
                    },
                    url: "{{ route('getOtGuardianotbankinfo') }}",
                    success: function (data) {

                        var details = JSON.parse(data);

                        // var passportexp =  getDefaultDate(details.passportexp);
                        var dob = getDefaultDate(details.dob);

                        console.log("DATE: " + dob);
                        $('#form_dependent input[name=otid]').prop("value", details.otid);
                        $('#form_dependent input[name=uniquerefno]').prop("value", details.uniquerefno);
                        $('#form_dependent input[name=name]').prop("value", details.name);
                        $('#form_dependent select[name=idtype]').prop("value", details.idtype);
                        $('#form_dependent input[name=idno]').prop("value", details.idno);
                        $('#form_dependent select[name=relationship]').prop("value", details.relationship);
                        $('#form_dependent select[name=otsts]').prop("value", details.otsts);
                        $('#form_dependent input[name=passportno]').prop("value", details.passportno);
                        $('#form_dependent input[name=passportexp]').prop("value", details.passportexp);
                        $('#form_dependent input[name=oldpassportno]').prop("value", details.oldpassportno);
                        $('#form_dependent input[name=add1]').prop("value", details.add1);
                        $('#form_dependent input[name=add2]').prop("value", details.add2);
                        $('#form_dependent input[name=add3]').prop("value", details.add3);
                        $('#form_dependent input[name=city]').prop("value", details.city);
                        $('#form_dependent input[name=postcode]').prop("value", details.postcode);
                        $('#form_dependent select[name=statecode]').prop("value", details.statecode);
                        $('#form_dependent input[name=countrycode]').prop("value", details.countrycode);
                        $('#form_dependent select[name=guardian]').prop("value", details.guardian);
                        $('#form_dependent input[name=dob]').prop("value", dob);
                        $('#form_dependent input[name=email]').prop("value", details.email);
                        $('#form_dependent input[name=pobox]').prop("value", details.pobox);
                        $('#form_dependent input[name=lockedbag]').prop("value", details.lockedbag);
                        $('#form_dependent input[name=wdt]').prop("value", details.wdt);
                        $('#form_dependent input[name=telno]').prop("value", details.telno);
                        $('#form_dependent input[name=mobileno]').prop("value", details.mobileno);

                        $('#form_dependent input[name=studystartdate]').prop("value",details.studystartdate);
                        $('#form_dependent input[name=studyenddate]').prop("value", details.studyenddate);
                        $('#form_dependent input[name=studysts]').prop("value", details.studysts);
                        $('#form_dependent input[name=edulvl]').prop("value", details.edulvl);
                        $('#form_dependent input[name=eduothers]').prop("value", details.eduothers);
                        $('#form_dependent input[name=coursename]').prop("value", details.coursename);
                        $('#form_dependent input[name=uniname]').prop("value", details.uniname);


                        $('#form_dependent input[name=accno]').prop("value", details.accno);
                        $('#form_dependent select[name=accexist]').prop("value", details.accexist);
                        $('#form_dependent select[name=acctype]').prop("value", details.acctype);
                        $('#form_dependent select[name=baists]').prop("value", details.baists);
                        $('#form_dependent input[name=bankaddr]').prop("value", details.bankaddr);
                        $('#form_dependent input[name=bankbr]').prop("value", details.bankbr);
                        $('#form_dependent input[name=bankloc]').prop("value", details.bankloc);
                        $('#form_dependent input[name=bsbcode]').prop("value", details.bsbcode);
                        $('#form_dependent select[name=reasonnoacc]').prop("value", details.reasonnoacc);
                        $('#form_dependent select[name=swiftcode]').prop("value", details.swiftcode);

                        var age = getAge(details.dob);

                        if (details.guardian == 'Y') {

                            $('input[name=guardianid]').filter('[value="' + details.g_otid + '"]').attr('checked', 'checked');
                            $('#guardian').show();
                            $('#add_guardian').show();

                            $('#form_dependent input[name=guardian_uniquerefno]').prop("value",details.g_uniquerefno);
                            $('#form_dependent input[name=guardian_name]').prop("value",details.g_name);
                            $('#form_dependent select[name=guardian_idtype]').prop("value",details.g_idtype);
                            $('#form_dependent input[name=guardian_idno]').prop("value",details.g_idno);
                            $('#form_dependent input[name=guardian_passportno]').prop("value", details.g_passportno);
                            $('#form_dependent input[name=guardian_passportexp]').prop("value", details.g_passportexp);
                            $('#form_dependent input[name=guardian_oldpassportno]').prop("value", details.g_oldpassportno);
                            $('#form_dependent input[name=guardian_add1]').prop("value",details.g_add1);
                            $('#form_dependent input[name=guardian_add2]').prop("value",details.g_add2);
                            $('#form_dependent input[name=guardian_add3]').prop("value",details.g_add3);
                            $('#form_dependent input[name=guardian_city]').prop("value",details.g_city);
                            $('#form_dependent select[name=guardian_statecode]').prop("value", details.g_statecode);
                            $('#form_dependent input[name=guardian_postcode]').prop("value",details.g_postcode);
                            $('#form_dependent input[name=guardian_postcode]').prop("value",details.g_postcode);
                            $('#form_dependent input[name=guardian_lockedbag]').prop("value", details.g_pobox);
                            $('#form_dependent input[name=guardian_wdt]').prop("value",details.g_pobox);
                            $('#form_dependent input[name=guardian_pobox]').prop("value",details.g_pobox);
                            $('#form_dependent input[name=guardian_mobileno]').prop("value",details.g_mobileno);
                            $('#form_dependent input[name=guardian_email]').prop("value",details.g_email);
                            $('#form_dependent input[name=guardian_telno]').prop("value",details.g_telno);
                        }

                        $('#bank_info_dpndt').show();

                        $('#form_dependent select[name=reasonnoacc]').prop("value", details.reasonnoacc);
                        $('#form_dependent select[name=paymode]').prop("value", details.paymode);
                        $('#form_dependent select[name=bankloc]').prop("value", details.bankloc);
                        $('#form_dependent input[name=currency]').prop("value", details.currency);
                        $('#form_dependent input[name=country]').prop("value", details.country);
                        $('#form_dependent input[name=bsbcode]').prop("value", details.bsbcode);

                        if (details.paymode == '2') {

                            console.log("hahahahaa");
                            $('#bank_reason_dpndt').hide();
                            $('#bank_location_dpndt').show();
                            $('#bank_eft_dpndt').show();

                            if (details.bankloc == 'L') {
                                $('#local_bank_dpndt').show();
                                $('#oversea_bank_dpndt').hide();

                                $('#form_dependent select[name=localbankname]').prop("value", details.bankname);
                                $('#form_dependent input[name=localaccno]').prop("value",details.accno);
                                $('#form_dependent input[name=localbankaddr]').prop("value",details.bankaddr);
                                $('#form_dependent select[name=localacctype]').prop("value",details.acctype);

                            } else if (details.bankloc == 'O') {
                                $('#local_bank_dpndt').hide();
                                $('#oversea_bank_dpndt').show();

                                $('#form_dependent input[name=swiftcode]').prop("value",details.swiftcode);
                                $('#form_dependent input[name=ovbankname]').prop("value",details.bankname);
                                $('#form_dependent input[name=ovaccno]').prop("value",details.accno);
                                $('#form_dependent input[name=ovbankaddr]').prop("value",details.bankaddr);
                                $('#form_dependent select[name=ovacctype]').prop("value",details.acctype);
                            }
                        } else if (details.paymode == '1') {

                            $('#bank_reason_dpndt').show();
                            $('#bank_location_dpndt').hide();
                            $('#bank_eft_dpndt').hide();
                            $('#oversea_bank_dpndt').hide();
                            $('#local_bank_dpndt').hide();
                        } else {

                            $('#bank_reason_dpndt').hide();
                            $('#bank_location_dpndt').hide();
                            $('#bank_eft_dpndt').hide();
                            $('#oversea_bank_dpndt').hide();
                            $('#local_bank_dpndt').hide();
                        }



                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus);
                        alert("Error: " + errorThrown);
                    }
                });


            } 


        });



        // $('.save_dependent').on('click', function () {

        //     var serialize = $("#form_dependent").serialize();

        //     console.log(serialize);

        //     $.ajax({
        //         headers: {
        //             'X-CSRF-Token': '{{ csrf_token() }}',
        //         },
        //         type: 'POST',
        //         data: serialize,
        //         url: "{{route('postOtInfo')}}",
        //         success: function (data) {

        //             $('#save_dependent' + otid).attr("disabled", false);

        //             datatable();
        //             $('#modal_dependent').modal('hide');
        //             alert("Successfully Saved!");

        //             console.log(data);


        //         },
        //         error: function (XMLHttpRequest, textStatus, errorThrown) {
        //             $('#save_dependent' + otid).attr("disabled", false);
        //             alert("Status: " + textStatus);
        //             alert("Error: " + errorThrown);
        //         }

        //     });
        // });


        $('#modal_dependent').on('hidden.bs.modal', function () {


            $(':input', '#form_dependent').val('');

            $('#guardian').hide();
            $('#bank_info_dpndt').hide();

        });

        $('#btn_add_guardian').on('click', function () {
            $('#guardian').show();

        });

        $("#yes_dependantstudy").hide();
        $("#passport_expired").hide();
        $("#date_birth").show();
        $("#married_date").hide();
        $("#adoption_date").hide();
        $("#remarried_date").hide();
        $("#still_study").hide();
        $("#registered_married").hide();
        $("#in_edah").hide();
        $("#disability_i").hide();
        $("#eligibility_start").show();
        $("#eligibility_end").show();
        $("#demised_date").hide();
        $("#married_ob").hide();
        $("#divorced_ob").hide();
        $("#disability_beforeafter").hide();

        guardian_question();


        $('#btn_guardian_modal').on('click', function () {

            $('#add_guardian').show();
            $('#bank_info_dpndt').show();



        });

        $('#modal_guardian').on('hidden.bs.modal', function () {

            $('#add_guardian').empty();
            $('#add_guardian').hide();
            $('#bank_info_dpndt').empty();
            $('#bank_info_dpndt').hide();
            $('#tableGuardian  > tbody').empty();

        });


        function getAge(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            console.log(age);
            return age;
        }

        // --------------------------------------------------------- TO CHANGE IDTYPE VALUE -----------------------------------------------------------------

        $('#containerx').on('change', '.idtype', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("e");
            var id = split_id[1];
            // alert(id);

            if (this.value == '05') {
                $('#passport_expired').show();
            } else {
                $('#passportexp').prop('value', '');
                $('#passport_expired').hide();
            }
        });

        // --------------------------- TO DISPLAY DEPENDANT STUDY INFO ------------------------------


        $('#containerx').on('change', '.date_birth', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("b");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('#ots').val();
            var relay = $('#relationship').val();
            var age = getAge(a);

            // console.log("current_id"+current_id);

            // alert('date_birth - id: '+ ' otstatus: ' +status+ ' age: ' +age+ ' relationship: '+relay);

            if (status == '4' && relay == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy').show();
            } else {
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl_').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
            }

        });

        // ---------------------- ON CHANGE WHEN CLICK RELATIONSHIP --------------------------

        $('#containerx').on('change', '.relationship', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("p");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('#ots').val()
            var dob = $('#dob').val()
            var age = getAge(dob);

            // Dependent Status
            //1- Demised
            //2- Remarried
            //3- Bankruptcy
            //4- Studying
            //5- Married
            //6- Disabled
            //7- Adoption
            //8- Date Not Qualified

            // console.log("current_id"+current_id);

            // ----------------- FIRST RELATIONSHIP CHANGE--------------------
            var first_relationship = $('#relationship').val();
            // ----------------- SELECT WIDOWER--------------------

            var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;

            // alert('realtionship - id: '+ ' otstatus: ' +status+ ' age: ' +age+ ' relationship: '+a);

            // check still study
            if (status == '4' && a == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy').show();
            }
            if (status !== '4' && a !== '1' && (age >= 21 && age <= 18)) {
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
            }

            // ----------------- RELATIONSHIP = CHILD --------------------

            if (a == '1') {
                $('#otstatus').show();
                $('[id="otstatus"] option[value=1]').hide();
                $('[id="otstatus"] option[value=2]').hide();
                $('[id="otstatus"] option[value=3]').hide();
                $('[id="otstatus"] option[value=4]').show();
                $('[id="otstatus"] option[value=5]').show();
                $('[id="otstatus"] option[value=6]').show();
                $('[id="otstatus"] option[value=7]').show();
                $('[id="otstatus"] option[value=8]').hide();
                $('[id="otstatus"] option[value=9]').hide();

                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus == '6') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').show();
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus == '7') { //
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#adoption_date').show();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus == '5') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#married_date').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus !== '5') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            // ----------------- RELATIONSHIP = WIDOW --------------------
            if (a == '2') {
                $('#otstatus').show();
                $('[id="otstatus"] option[value=1]').show();
                $('[id="otstatus"] option[value=2]').show();
                $('[id="otstatus"] option[value=3]').hide();
                $('[id="otstatus"] option[value=4]').hide();
                $('[id="otstatus"] option[value=5]').hide();
                $('[id="otstatus"] option[value=6]').hide();
                $('[id="otstatus"] option[value=7]').hide();
                $('[id="otstatus"] option[value=8]').hide();
                $('[id="otstatus"] option[value=9]').show();

                $('#married_ob').show();
                $('#in_edah').show();
                $('#registered_married').show();
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl_').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
            }
            if (a == '2' && (otstatus == '2' || otstatus == '5')) {

                if (otstatus == '2') {
                    $('#remarried_date').show();
                } else {
                    $('#married_date').show();
                }
                $('#married_ob').show();
                $('#in_edah').show();
                $('#registered_married').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');

            }
            if (a == '2' && otstatus == '1') {
                $('#remarried_date').hide();
                $('#married_ob').show();
                $('#in_edah').show();
                $('#registered_married').show()
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();
            }

            // ----------------- RELATIONSHIP = WIDOWER --------------------
            if (a == '3') {

                $('#otstatus').show();
                $('[id="otstatus"] option[value=1]').show();
                $('[id="otstatus"] option[value=2]').show();
                $('[id="otstatus"] option[value=3]').hide();
                $('[id="otstatus"] option[value=4]').hide();
                $('[id="otstatus"] option[value=5]').hide();
                $('[id="otstatus"] option[value=6]').hide();
                $('[id="otstatus"] option[value=7]').hide();
                $('[id="otstatus"] option[value=8]').hide();
                $('[id="otstatus"] option[value=9]').show();

                $('#married_ob').show();
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#registered_married').show();
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');

            }
            if (a == '3' && (otstatus == '2' || otstatus == '5')) {

                if (otstatus == '2') {
                    $('#remarried_date').show();
                } else {
                    $('#married_date').show();
                }
                $('#married_ob').show();
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#registered_married').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');

            }
            if (a == '3' && otstatus == '1') {
                $('#married_ob').show();
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#registered_married').show();
                $('#remarried_date').hide();
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();
            }
            // ----------------- RELATIONSHIP = SIBLINGS --------------------
            if (a == '8') {
                $('#otstatus').show();
                $('[id="otstatus"] option[value=1]').show();
                $('[id="otstatus"] option[value=2]').hide();
                $('[id="otstatus"] option[value=3]').hide();
                $('[id="otstatus"] option[value=4]').hide();
                $('[id="otstatus"] option[value=5]').show();
                $('[id="otstatus"] option[value=6]').hide();
                $('[id="otstatus"] option[value=7]').hide();
                $('[id="otstatus"] option[value=8]').hide();
                $('[id="otstatus"] option[value=9]').hide();

                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '8' && (otstatus == '2' || otstatus == '5')) {

                $('#otstatus').show();
                $('#remarried_date').hide();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '8' && (otstatus == '1')) {
                $('#otstatus').show();
                $('#remarried_date').hide();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '8' && (otstatus == '6')) {
                $('#otstatus').show();
                $('#remarried_date').hide();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }

            // ----------------- RELATIONSHIP = Mother/ Father/ Grandmother/ Grandfather --------------------
            if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus').show();
                $('[id="otstatus"] option[value=1]').show();
                $('[id="otstatus"] option[value=2]').hide();
                $('[id="otstatus"] option[value=3]').hide();
                $('[id="otstatus"] option[value=4]').hide();
                $('[id="otstatus"] option[value=5]').hide();
                $('[id="otstatus"] option[value=6]').hide();
                $('[id="otstatus"] option[value=7]').hide();
                $('[id="otstatus"] option[value=8]').hide();

                $('#ots').prop('value', '');
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl_').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
                $('#remarried_date').hide();
            }

        });

        $('#containerx').on('change', '.ots', function () {

            var current_id = event.target.id;
            var split_id = current_id.split("s");
            var id = split_id[1];

            var otstatus = $(this).val();
            var dob = $('#dob').val();
            var a = $('#relationship').val();
            var age = getAge(dob);

            console.log("current_id" + current_id);
            // alert(dob);
            // alert('id: '+ ' otstatus: ' +otstatus+ ' age: ' +age+ ' relationship: '+a);


            // check still study
            if (otstatus == '4' && a == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
            }
            if (otstatus !== '4' && a !== '1' && (age >= 21 && age <= 18)) {
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl_').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
            }

            if (a == '1' && otstatus == '6') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#disability_beforeafter').show();
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus == '7') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').show();
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disabilitybeforeafter').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '1' && otstatus == '5') {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }

            if (a == '2' && (otstatus == '2' || otstatus == '5')) {

                if (otstatus == '2') {
                    $('#remarried_date').show();
                } else {
                    $('#married_date').show();
                }
                $('#married_ob').show();
                $('#in_edah').show();
                $('#registered_married').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');

            }
            if (a == '2' && otstatus == '1') {
                $('#married_ob').show();
                $('#in_edah').show();
                $('#registered_married').show();
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();

            }

            if (a == '3' && (otstatus == '2' || otstatus == '5')) {

                if (otstatus == '2') {
                    $('#remarried_date').show();
                } else {
                    $('#married_date').show();
                }
                $('#married_ob').show();
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#registered_married').show();
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');

            }
            if (a == '3' && otstatus == '1') {
                $('#married_ob').show();
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#registered_married').show();
                $('#married_date').hide();
                $('#remarried_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();

            }
            if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '8' && (otstatus == '1')) {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#remarried_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').show();
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '8' && (otstatus !== '1' && otstatus !== '2' && otstatus !== '5')) {
                $('#otstatus').show();
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
            }
            if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus').hide();
                $('#ots').prop('value', '');
                $('#registered_married').hide();
                $('#regmarried').prop('value', '');
                $('#married_date').hide();
                $('#marrieddate').prop('value', '');
                $('#adoption_date').hide();
                $('#adoptiondate').prop('value', '');
                $('#remarried_date').hide();
                $('#remarrieddate').prop('value', '');
                $('#disability_beforeafter').hide();
                $('#disablewhen').prop('value', '');
                $('#demised_date').hide();
                $('#dodeath').prop('value', '');
                $('#married_ob').hide();
                $('#marriedobdate').prop('value', '');
                $('#in_edah').hide();
                $('#edah').prop('value', '');
                $('#yes_dependantstudy').hide();
                $('#studystartdate').prop('value', '');
                $('#studyenddate').prop('value', '');
                $('#study_status').prop('value', '');
                $('#edulvl_').prop('value', '');
                $('#eduothers').prop('value', '');
                $('#coursename').prop('value', '');
                $('#uniname').prop('value', '');
            }

        });

        $('#containerx').on('change', '.edu', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("_");
            var id = split_id[1];

            if (this.value == '6') {
                console.log(this.value);
                $('#eduother').show();
            } else {
                console.log(this.value);
                $('#eduother').hide();
                $('#eduothers').prop('value', '');
            }
        });


        // ----------------------------- TO DISPLAY DEPENDANT STUDY --------------------------------------

        // $('#containerx').on('change','.stillstudy',function() {
        //     var current_id = event.target.id;
        //     var split_id = current_id.split("ut");
        //     var id = split_id[1];

        //     if (this.value == 'yes') {
        //         // alert('Cuba');
        //         $('#yes_dependantstudy').show();
        //         $('#still_study_input').prop('value', 'yes');
        //     }
        //     else{
        //         $('#yes_dependantstudy').hide();
        //         $('#still_study_input').prop('value', 'no');
        //         $('#study_status').prop('value', '');
        //         $('#studystartdate').prop('value', '');
        //         $('#studyenddate').prop('value', '');
        //         $('#uniname').prop('value', '');
        //         $('#coursename').prop('value', '');
        //         $('#edulvl').prop('value', '');
        //         $('#eduothers').prop('value', '');
        //     }

        // });

        // --------------------------- Calculate age -----------------------------------------

        function getAge(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            console.log(age);
            return age;
        }


        //For Bank Info
        $('#paymode_dpndt').change(function () {
        

            if (this.value == '2') { //EFT
                $('#bank_location_dpndt').show();
                $('#bank_eft_dpndt').show();
                $('#bank_reason_dpndt').hide();

                var bankloc = $('#bankloc').val();
                if (bankloc == 'L') {
                    $('#local_bank_dpndt').show();
                    $('#oversea_bank_dpndt').hide();
                } else if (bankloc == 'O') {
                    $('#local_bank_dpndt').hide();
                    $('#oversea_bank_dpndt').show();
                }
            } else if (this.value == '1') { //Cheque
                $('#bank_reason_dpndt').show();
                $('#bank_location_dpndt').hide();
                $('#bank_eft_dpndt').hide();
                $('#oversea_bank_dpndt').hide();
                $('#local_bank_dpndt').hide();
            } else {
                $('#bank_reason_dpndt').show();
                $('#bank_location_dpndt').hide();
                $('#bank_eft_dpndt').hide();
                $('#oversea_bank_dpndt').hide();
                $('#local_bank_dpndt').hide();
            }
        });
        $('#bankloc_dpndt').change(function () {
            var id = $(this).attr('id');

            if (this.value == 'L') {
                $('#local_bank_dpndt').show();
                $('#oversea_bank_dpndt').hide();
            } else {
                $('#local_bank_dpndt').hide();
                $('#oversea_bank_dpndt').show();

            }
        });

    });


    function guardian_question() {
        $('.guardianQ').on('change', function () {

            var guardianQ = $(this).val();
            var id = $(this).attr('id');
            var values = id.split('Q');
            var i = values[1];


            if (guardianQ == 'Y') {
                $('#guardian').show();
                $('#bank_info_dpndt').hide();
                $('#bank_reason_dpndt').hide();
                $('#bank_location_dpndt').hide();
                $('#bank_eft_dpndt').hide();
                $('#oversea_bank_dpndt').hide();
                $('#local_bank_dpndt').hide();
            } else if (guardianQ == 'N') {
                $('#bank_info_dpndt').show();
                $('#bank_reason_dpndt').hide();
                $('#bank_location_dpndt').hide();
                $('#bank_eft_dpndt').hide();
                $('#oversea_bank_dpndt').hide();
                $('#local_bank_dpndt').hide();
                $('#guardian').hide();
                $('#add_guardian').hide();

            } else {
                $('#guardian').hide();
                $('#bank_info_dpndt').hide();
                $('#bank_reason_dpndt').hide();
                $('#bank_location_dpndt').hide();
                $('#bank_eft_dpndt').hide();
                $('#oversea_bank_dpndt').hide();
                $('#local_bank_dpndt').hide();
                $('#add_guardian').hide();
            }

        });
    }

    function datatable() {


    }

    function getDefaultDate(date) {

        var new_date = date.replace(/(\d{4})(\d{2})(\d{2})/, "$1-$2-$3");

        return new_date;
    }

</script>
