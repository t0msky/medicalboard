@section('css')
<style>
    .col-10-applicant 
    {
        flex: 0 0 83.33333%;
        max-width: 100%;
    }

    .btn-select-claimant 
    {
        text-align: center;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        float: right !important;
        color: #fff !important;
        font-weight: 100 !important;
        background-color: #375aa0 !important;
    }

    .row-claimant 
    {
        display: flex;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px;
        float: right !important;

    }

    .modal-header 
    {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 5px solid #98cb5b;
        border-top-left-radius: .3rem;
        border-top-right-radius: .3rem;
        background: #284682;
        color: #fff;
    }

    .modal-header .close 
    {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto;
        color: #fff;
    }

</style>
@endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">         
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-body">
                        @if(Session::get('messageapplicantinfo'))
                            <div class="card-footer">
                                <div class="alert alert-warning">
                                    {{Session::get('messageapplicantinfo')}}
                                </div>
                            </div>
                        @elseif (!empty($messageapplicantinfo))
                            <div class="card-footer">
                                <div class="alert alert-warning">
                                    {{$messageapplicantinfo}}
                                </div>
                            </div>
                        @endif

                        <div class="table-responsive m-t-40">
                            <table id="tableClaimant" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th width="40%">Name</th>
                                        <th>Identification No</th>
                                        <th>Relationship</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>    
                        </div> 
                        <br>
                        <button type="button" class="btn-select-claimant" data-id="0" data-toggle="modal" data-target="#modal_fpm" data-whatever="@fat">ADD CLAIMANT</button><br><br> 

                        {{-- modal delete --}} 
                        <div class="modal fade" id="deletemodalfpm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete?
                                        <input type="text" class="form-control id_delete_button" name="id" id="id_deletemodalfpm" value="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                        <button class="btn btn-danger btn-sm btn_deletefpminfo" value="" id="delete_fpm">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- modal_fpm modal --}} 
                        <div class="modal" id="modal_fpm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <form id="form_fpm" method="POST">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel1">Select Claimant Info</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="applicant_collapse0">
                                                <h6 class="card-title-sub">Applicant Profile</h6>
                                                <hr>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control " name="uniquerefno" id="" value="">
                                                                <input type="hidden" class="form-control " name="otid" id="" value="">
                                                                <label class="control-label">@lang('Name')</label>
                                                                <input type="text" id="name" name="name" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Relationship')</label>
                                                                <select class="form-control" name="relation" id="relation">
                                                                    <option value="">Please select</option>
                                                                        @foreach($ref_table2->relation as $rel)
                                                                            @if($rel->ref_code == 1 || $rel->ref_code == 9 || $rel->ref_code == 10 )
                                                                                <option value="{{$rel->ref_code}}">{{$rel->desc_en}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Date Of Birth')</label>
                                                                <input type="date" id="dob" name="dob" value="" class="form-control date_birth">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Id Type')</label>
                                                                <select id="idtype" class="form-control" value="" name="idtype">
                                                                    <option value="">Please select</option>
                                                                    @foreach($ref_table->id_type as $id)
                                                                        <option value="{{$id->ref_code}}">{{$id->desc_en}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Identification Number')</label>
                                                                <input type="text" id="idno" name="idno" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Address')</label>
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
                                                                <label class="control-label">@lang('State')</label>
                                                                <select name="statecode" id="statecode" class="form-control">
                                                                    <option value="">Please select</option>
                                                                    @foreach($ref_table->state as $s)
                                                                        <option value="{{$s->ref_code}}">{{$s->desc_en}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('City')</label>
                                                                <input type="text" id="city" name="city" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Postcode')</label>
                                                                <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('PoBox')</label>
                                                                <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('LockedBag')</label>
                                                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('WDT')</label>
                                                                <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Tel No')</label>
                                                                <input type="text" id="telno" name="telno" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Mobile No')</label>
                                                                <input type="text" id="mobileno" name="mobileno" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Email')</label>
                                                                <input type="text" id="email" name="email" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4" id="div_amount" style="display:none">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Amount')</label>
                                                                <input type="text" id="amount" name="amount" value=""  class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="card-title-sub">Bank Information</h6>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang("Payment")</label>
                                                                            <select class="form-control" name="paymode" id="paymode" required>
                                                                                <option value="" selected>Please Select</option>
                                                                                @foreach($ref_table2->pay_mode as $opay)
                                                                                    @if (!empty($bankinfo) && $bankinfo->paymode == $opay->ref_code)
                                                                                        <option value="{{$opay->ref_code}}">{{$opay->desc_en}}</option>
                                                                                    @elseif(empty($bankinfo) && $opay->ref_code =="02")
                                                                                        <option value="{{$opay->ref_code}}" > {{$opay->desc_en}} </option>
                                                                                    @else
                                                                                        <option value="{{$opay->ref_code}}"> {{$opay->desc_en}} </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4" id="bank_account">
                                                                        <div class="form-group">
                                                                            <label class="control-label">@lang("Bank Account")</label>
                                                                            <select class="form-control select" name="bankloc">
                                                                                <option value="">Please Select</option>
                                                                                    @foreach($ref_table2->bank_loc as $ob)
                                                                                        @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->ref_code)
                                                                                            <option value="{{$ob->ref_code}}" selected>{{$ob->desc_en}}</option>
                                                                                        @else
                                                                                            <option value="{{$ob->ref_code}}">{{$ob->desc_en}}</option>
                                                                                        @endif
                                                                                    @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="bank_reasons">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Bank Reason")</label>
                                                                                <select class="form-control select" name="reasonnoacc" id="reasonnoacc">
                                                                                    <option value ="">Please Select</option>
                                                                                    @foreach($ref_table2->rsn_no_acc as $or)
                                                                                        @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->ref_code)
                                                                                            <option value="{{$or->ref_code}}" selected>{{$or->desc_en}}</option>
                                                                                            {{-- <option>@lang("scheme/bank.attr.senior")</option>
                                                                                            <option>@lang("scheme/bank.attr.legal")</option> --}}
                                                                                        @else
                                                                                            <option value="{{$or->ref_code}}">{{$or->desc_en}}</option>
                                                                                        @endif  
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="bank_efts">
                                                                    <div id="local_bank">
                                                                        <div class="row p-t-20">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">@lang("Bank Name")</label>
                                                                                    @if (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    <select class="form-control selectLocalBank" name="bankcode" id="bankcode">
                                                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                            <select class="form-control selectLocalBank" name="bankcode" id="bankcode">
                                                                                        @else
                                                                                            <select class="form-control selectLocalBank" name="bankcode" id="bankcode">
                                                                                        @endif
                                                                                            <option value="">Please select</option>
                                                                                        @foreach($ref_table2->bank_code as $bc)
                                                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->bankcode == $bc->ref_code)
                                                                                                <option value="{{$bc->ref_code}}" selected>{{$bc->desc_en}}</option>
                                                                                            @else
                                                                                                <option value="{{$bc->ref_code}}">{{$bc->desc_en}}</option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">@lang("Bank Acc No")</label>
                                                                                    @if (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">
                                                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                                                                    @else
                                                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row p-t-20">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">@lang("Account Type")</label>
                                                                                    @if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->acctype)
                                                                                        <select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="{{$bankinfo->acctype}}">
                                                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                        <select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="">
                                                                                    @else
                                                                                        <select class="form-control selectLocalBank" name="localacctype" id="localacctype">
                                                                                    @endif
                                                                                    <option value="">Please select</option>
                                                                                    @foreach($ref_table->acc_type as $at)
                                                                                        @if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->acctype == $at->ref_code)
                                                                                            <option value="{{$at->ref_code}}" selected>{{$at->desc_en}}</option>
                                                                                            <option>@lang("Joint")</option>
                                                                                        @else
                                                                                            <option value="{{$at->ref_code}}">{{$at->desc_en}}</option>
                                                                                        @endif
                                                                                    @endforeach
                                                                                    <option>@lang("Joint")</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row p-t-20">
                                                                            <div class="col-md-8">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">@lang("Bank Address")</label>
                                                                                    @if (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectLocalBank clearFields" value="{{$bankinfo->bankaddr}}">
                                                                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                        <input type="text" name="bankaddr" id="bankaddr" class="form-control selectLocalBank clearFields" value="">
                                                                                    @else
                                                                                        <input type="text" name="bankaddr" id="bankaddr" class="form-control selectLocalBank clearFields" value="">
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="oversea_banks">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Bank Name")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->ovbankname)
                                                                                    <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankname}}">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                                                                @else
                                                                                    <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Account No")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->accno)
                                                                                    <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->accno}}">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                                                                @else
                                                                                    <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Account Type")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                    <select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    <select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">
                                                                                @else
                                                                                    <select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">
                                                                                @endif
                                                                                <option value="">Please select</option>
                                                                                @foreach($ref_table->acc_type as $ovt)
                                                                                    @if (!empty($bankinfo) && $bankinfo->bankloc == "O" && $bankinfo->acctype == $ovt->ref_code)
                                                                                        <option value="{{$ovt->ref_code}}" selected>{{$ovt->desc_en}}</option>
                                                                                        <option>@lang("Joint")</option>
                                                                                    @else
                                                                                        <option value="{{$ovt->ref_code}}">{{$ovt->desc_en}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                                    <option>@lang("Joint")</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Country")</label>
                                                                                <input type="text" name="country" id="country" class="form-control selectOverseasBank">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Currency")</label>
                                                                                <input type="text" name="currency" id="currency" class="form-control selectOverseasBank">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Swift Code")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                    <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                                                                @else
                                                                                    <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Bsb Code")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                    <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                    <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                                                                @else
                                                                                    <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-8">
                                                                            <div class="form-group">
                                                                                <label class="control-label">@lang("Overseas Bank Address")</label>
                                                                                @if (!empty($bankinfo) && $bankinfo->bankloc=="O")
                                                                                <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->ovbankaddr}}">
                                                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")
                                                                                <input type="text" name="bankaddr" id="bankaddr" class="form-control selectOverseasBank clearFields" value="">
                                                                                @else
                                                                                <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
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
                                            <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-success save_fpm" value="" id="save_fpm" data-dismiss="modal">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
    
@php($no_app = 0)

<script>
$(document).ready(function() 
{
    datatable_fpm();

    $('#modal_fpm').on('hide.bs.modal', function (e) 
    {
        $(':input','#form_fpm').val('');
        $("#bank_account").hide();
        $("#bank_reasons").hide();
        $("#bank_efts").hide();
        $("#oversea_banks").hide();
    });

    //delete modal fpm
    $('#deletemodalfpm').on('show.bs.modal', function (e) 
     {
        var fpm_edit = $(e.relatedTarget).data('id');
        $('#id_deletemodalfpm').val(fpm_edit);
    });

    $('.btn_deletefpminfo').on('click',function(e)
    {
        var fpm_edit = $('#id_deletemodalfpm').val();
        $('#deletemodalfpm').find('.btn_deletefpminfo').val(fpm_edit);
        $('.btn_deletefpminfo').attr('id','btn_deletefpminfo' + fpm_edit);

        if($('.btn_deletefpminfo').val() == fpm_edit)
        {
            $('.btn_deletefpminfo').attr("disabled",true);
            $.ajax({
                        headers: 
                        {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: 'POST',
                        data: 
                        {
                            id: fpm_edit
                        },
                        url: "{{ route('del_fpminfo') }}",
                        success: function (data) 
                        {
                            $('.btn_deletefpminfo').attr("disabled",false);

                                $('#deletemodalfpm').modal('hide');
                                datatable_fpm();
                                var details = JSON.parse(data);

                                if(details.data.errorcode == 0)
                                {
                                    alert("Successfully delete!");
                                }
                                else
                                {
                                    alert("Failed to  delete!");
                                }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) 
                        { 
                            $('.btn_deletefpminfo').attr("disabled",false); 
                        }  
                });
        }
    });

    //update
    $('#modal_fpm').on('show.bs.modal', function (e) 
    {
        var fpm_edit = $(e.relatedTarget).data('id');
        if(fpm_edit !== '' && fpm_edit !== null && fpm_edit !== '0' && fpm_edit != 0 && fpm_edit !== undefined)
        {
            $.ajax({
                        headers:{
                                    'X-CSRF-Token': '{{ csrf_token() }}',
                                },
                        type: 'GET',
                        data: {
                                fpm_edit: fpm_edit
                            },
                        url: "{{ route('updatefpminfo') }}",
                    
                        success: function (data){
                            var det = JSON.parse(data);
                            var details = det.data;
                            $('#form_fpm input[name=uniquerefno]').val(details[0].uniquerefno);
                            $('#form_fpm input[name=otid]').val(details[0].otid);
                            $('#form_fpm input[name=name]').val(details[0].name);
                            $('#form_fpm select[name=relation]').val(details[0].fpm_relationship);
                            $('#form_fpm input[name=dob]').val(details[0].dob)
                            $('#form_fpm input[name=idno]').val(details[0].idno);
                            $('#form_fpm input[name=add1]').val(details[0].add1);
                            $('#form_fpm input[name=add2]').val(details[0].add2);
                            $('#form_fpm input[name=add3]').val(details[0].add3);
                            $('#form_fpm select[name=statecode]').val(details[0].statecode);
                            $('#form_fpm input[name=city]').val(details[0].city);
                            $('#form_fpm input[name=postcode]').val(details[0].postcode);
                            $('#form_fpm input[name=pobox]').val(details[0].pobox);
                            $('#form_fpm input[name=lockedbag]').val(details[0].lockedbag);
                            $('#form_fpm input[name=wdt]').val(details[0].wdt);
                            $('#form_fpm input[name=telno]').val(details[0].telno);
                            $('#form_fpm input[name=mobileno]').val(details[0].mobileno);
                            $('#form_fpm input[name=email]').val(details[0].email);
                            $('#form_fpm select[name=paymode]').val(details[0].paymode);
                            $('#form_fpm select[name=bankloc]').val(details[0].bankloc);
                            $('#form_fpm select[name=reasonnoacc]').val(details[0].reasonnoacc);

                            if(details[0].uniquerefno == null || details[0].uniquerefno == ""  )
                            {
                                $('#form_fpm select[name=idtype]').val('99');
                            }
                            else{
                                $('#form_fpm select[name=idtype]').val(details[0].idtype);
                            }


                            if(details[0].fpm_relationship == '9')
                            {
                                $('#div_amount').show();
                                $('#form_fpm input[name=amount]').val(details[0].fpm_amount);
                            }
                            else if(details[0].fpm_relationship == '1')
                            {
                                $('#div_amount').hide();
                            }



                            if (details[0].paymode == '2') 
                            {
                                $('#bank_account').show();
                                $('#bank_efts').show();

                                if (details[0].bankloc == 'L')
                                {
                                    $('#bank_efts').show();
                                    $('#oversea_banks').hide();
                                    
                                    $('#form_fpm select[name=bankcode]').val(details[0].bankname);
                                    $('#form_fpm input[name=localaccno]').val(details[0].accno);
                                    $('#form_fpm select[name=localacctype]').val(details[0].acctype);
                                    $('#form_fpm input[name=bankaddr]').val(details[0].bankaddr);
                                }
                                else if (details[0].bankloc == 'O')
                                {
                                    $('#bank_efts').hide();
                                    $('#oversea_banks').show();

                                    $('#form_fpm input[name=ovbankname]').val(details[0].bankname);
                                    $('#form_fpm input[name=ovaccno]').val(details[0].accno);
                                    $('#form_fpm select[name=ovacctype]').val(details[0].acctype);
                                    $('#form_fpm input[name=country]').val(details[0].countrycode);
                                    $('#form_fpm input[name=currency]').val(details[0].currency);
                                    $('#form_fpm input[name=swiftcode]').val(details[0].swiftcode);
                                    $('#form_fpm input[name=bsbcode]').val(details[0].bsbcode);
                                    $('#form_fpm input[name=ovbankaddr]').val(details[0].bankaddr);
                                }
                            }    
                            else if (details[0].paymode == '1')
                            {
                                $('#bank_reasons').show();
                                $('#bank_account').hide();
                                $('#bank_efts').hide();
                                $('#oversea_banks').hide();
                                $('#local_bank').hide();
                            }
                            else
                            {
                                $('#bank_efts').hide();
                                $('#oversea_banks').hide();
                                $('#local_bank').hide();
                            }  
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) 
                        { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }  
                });
            }    
    });

    //save fpm  
    $('.save_fpm').on('click',function()
    {
        var idno = $('#form_fpm input[name=idno]').val();
        $('#modal_fpm').find('.save_fpm').val(idno);
        $('.save_fpm').attr('id','save_fpm' + idno);
        if($('.save_fpm').val() == idno)
        {
            $('.save_fpm').attr("disabled",true);
            var form_fpm = $("#form_fpm").serialize();
            $.ajax({
                headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                type: 'POST',
                data: form_fpm,
                url: "{{ route('post_fpminfo') }}",
                
                success: function (data) 
                {
                    $('.save_fpm').attr("disabled",false);
                        datatable_fpm();
                        $('#modal_fpm').modal('hide');
                        var details = JSON.parse(data);
                        if(details.errorcode == 0)
                        {
                            alert("Successfully save!");
                        }
                        else{
                            alert("Failed to  save!");
                        }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) 
                { 
                    $('.save_fpm').attr("disabled",false);
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                }  
            });
        }
    });

    //function for relationship
    $('select[id=relation]').on('change', function () 
    {
        var nilai = $(this).val();

        //01 - wife
        //02 - husband
        //03 - father
        //04 - mother
        //05 - child
        //06 - sibling
        //07 - Grandparent
        //08 - others

        //1 - child
        //2 - widow
        //3 - widower
        //4 - mother
        //5 - father
        //6 - Grandmother
        //7 - Grandfather
        //8 - siblings
        //9 - others

        if (nilai == '9')
        {
            $('#div_amount').show();
        }
        else
        {
            $('#amount').val('');
            $('#div_amount').hide();
        }
    });

    $("#bank_account").hide();
    $("#bank_reasons").hide();
    $("#bank_efts").hide();
    $("#oversea_banks").hide();


    $('select[name=paymode]').change(function () 
    {
        if (this.value == '2') 
        {
            $('#bank_reasons').hide();
            $('#bank_account').show();
            $('#bank_efts').hide();
            $('#oversea_banks').hide();
        }
        else if (this.value == '1')
        {   
            $('#bank_reasons').show();
            $('#bank_account').hide();
            $('#bank_efts').hide();
            $('#oversea_banks').hide();
            $('#local_bank').hide();

            $('select[name=bankloc]').change(function () 
            {
                if (this.value == 'L') 
                {
                  //  alert('local');
                    $('#bank_efts').show();
                    $('#local_bank').show();
                    $('#oversea_banks').hide();
                    $(".selectOverseasBank").val('');
                } 
                else 
                {
                  //  alert('ov');
                    $('#bank_efts').hide();
                    $('#oversea_banks').show();
                    $(".selectLocalBank").val('');
                } 
            });
        }
    });

}); 


function datatable_fpm()
{

    $('#tableClaimant').DataTable().destroy();
    var no = 1;
    $('#tableClaimant').DataTable( 
    {
        "searching": false,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "bFilter":  false,
        "ajax": {
            "url": "{{ route('getfpminfo') }}",
            "type": "GET",
        },
        "columns": [
            {
                data:'name'
            },
            {
                data:'name'
            }, 
            {
                data:'idno'
            }, 
            {
                data:'desc_en'
            }, 
            {
                data:'action'
            }
        ],                                    
        
        "columnDefs": [//this will set the action in the specific column
            {
                'targets': 0, //index
                'className': 'dt-body-left',
                'searchable': true,
                'data': 'name',
                'render' : function (data, type, row) {  
                    return no++;
                }
            },
            {
                'targets': 1, //index
                'className': 'dt-body-left',
                'searchable': true,
                'data': 'name'
            },
            {
                'targets': 2, //index
                'className': 'dt-body-left',
                'searchable': true,
                'data': 'idno'
            },
            {
                'targets': 3, //index
                'className': 'dt-body-left',
                'searchable': true,
                'data': 'desc_en'
            },
            
            {
                'targets': 4, //index
                'className': 'dt-body-center',
                'searchable': true,
                'data': 'idno',
                
                'render' : function (data, type, row) {
                        return '<center><a class="selectdraft" data-toggle="modal" data-target="#modal_fpm"  data-id="'+row.otid+'" href="#!"  class="w3-xxlarge" ><i class="fas fa-arrow-circle-right"></i></a> | <a class="deletedraft"  data-toggle="modal" data-target="#deletemodalfpm"  data-id="'+row.otid+'" href="#!" class="w3-xxlarge" ><i class="fas fa-trash-alt "></i></a></center>';               
                }
            }
        ]
    });
}
    
</script>

