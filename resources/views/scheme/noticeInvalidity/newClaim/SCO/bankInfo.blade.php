<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/bankinformation_od">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-body">
                        {{-- <h5 class="card-title">@lang('scheme/confirmation.bank_info')</h5>
                        <hr> --}}
                        @if(Session::get('messagebank'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagebank')}}
                            </div>

                        </div>
                        @elseif (!empty($messagebank))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagebank}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/confirmation.attr.payment')</label>
                                    <select class="form-control" name='paymode' id='paymode' required>
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        @foreach($optionpay as $opay)
                                        @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                        <option value="{{$opay->refcode}}" selected>{{$opay->descen}}</option>
                                        @elseif(empty($bankinfo) && $opay->refcode =='02')
                                        <option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>
                                        @else
                                        <option value="{{$opay->refcode}}"> {{$opay->descen}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="bank_reason" class="row p-t-20">

                            {{-- <div class="col-md-4" id='divaccexist'>
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/confirmation.attr.recipient_bank')</label>
                                    <!--input type="text" name="sub_status_description" id="sub_status_description" class="form-control" value="@if(!empty($bankinfo)) {{$bankinfo->accexist}}
                            @endif">-->
                            <select class="form-control select" name="accexist" id="accexist" onchange='accountexist()'>
                            <option selected readonly disabled hidden>Please Choose </option>
                                @if(!empty($bankinfo) && $bankinfo->accexist=='Y')
                                <option value='Y' selected>Yes</option>
                                <option value='N'>No</option>
                                @elseif (!empty($bankinfo) && $bankinfo->accexist=='N')
                                <option value='Y'>Yes</option>
                                <option value='N' selected>No</option>
                                @else
                                <option value='Y'>Yes</option>
                                <option value='N'>No</option>
                                @endif
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-4" id='divreason'>
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.reason')</label>
                            @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                            <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                @else
                                <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                    @endif


                                    @foreach($optionreason as $or)
                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                    <option value="{{$or->refcode}}" selected>{{$or->descen}}</option>
                                    @else
                                    <option value="{{$or->refcode}}">{{$or->descen}}</option>
                                    @endif
                                    @endforeach
                                </select>
                        </div>
                    </div>
            </div>
            <div id="bank_eft">
                <div class="row p-t-20">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.bank_location')</label>
                            <select class="form-control select" id="bankloc" name='bankloc' onchange="myFunction()">
                                <option selected readonly disabled hidden>Please Choose </option>
                                @foreach($optionbank as $ob)
                                @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                <option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>
                                @else
                                <option value="{{$ob->refcode}}">{{$ob->descen}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.bai_status')</label>
                            <select class="form-control select" name='baists' id='baists'>

                                @foreach($optionbai as $obai)
                                @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                <option value="{{$obai->refcode}}" selected>{{$obai->descen}}</option>
                                @else
                                <option value="{{$obai->refcode}}">{{$obai->descen}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.substatus_desc')</label>
                            @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                            <input type="text" id="substsdesc" name="substsdesc" value="{{$bankinfo->substsdesc}}"
                                class="form-control select">
                            @else
                            <input type="text" id="substsdesc" name="substsdesc" value="" class="form-control select">
                            @endif
                        </div>
                    </div>

                </div>
                <div id="local_bank">
                    <h3 class="box-title m-t-60">@lang('scheme/confirmation.local_bank')</h3>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_name')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                    <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                        @else
                                        <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                            @endif

                                            @foreach($bankcode as $bc)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                            $bankinfo->bankcode == $bc->refcode)
                                            <option value="{{$bc->refcode}}" selected>{{$bc->descen}}
                                            </option>
                                            @else
                                            <option value="{{$bc->refcode}}">{{$bc->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_branch')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="localbankbr" id="localbankbr"
                                    class="form-control selectLocalBank" value="{{$bankinfo->bankbr}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="localbankbr" id="localbankbr"
                                    class="form-control selectLocalBank" value="">
                                @else
                                <input type="text" name="localbankbr" id="localbankbr"
                                    class="form-control selectLocalBank" value="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_accNo')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="localaccno" id="localaccno"
                                    class="form-control selectLocalBank" value="{{$bankinfo->accno}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="localaccno" id="localaccno"
                                    class="form-control selectLocalBank" value="">
                                @else
                                <input type="text" name="localaccno" id="localaccno"
                                    class="form-control selectLocalBank" value="">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_address')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                <input type="text" name="localbankaddr" id="localbankaddr"
                                    class="form-control selectLocalBank" value="{{$bankinfo->bankaddr}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="localbankaddr" id="localbankaddr"
                                    class="form-control selectLocalBank" value="">
                                @else
                                <input type="text" name="localbankaddr" id="localbankaddr"
                                    class="form-control selectLocalBank" value="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.type_acc')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                <select class="form-control selectLocalBank" name='localacctype' id='localacctype'
                                    value="{{$bankinfo->acctype}}">
                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                    <select class="form-control selectLocalBank" name='localacctype' id='localacctype'
                                        value="">
                                        @else
                                        <select class="form-control selectLocalBank" name='localacctype'
                                            id='localacctype'>
                                            @endif


                                            @foreach($accountype as $at)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                            $bankinfo->acctype == $at->refcode)
                                            <option value="{{$at->refcode}}" selected>{{$at->descen}}
                                            </option>
                                            @else
                                            <option value="{{$at->refcode}}">{{$at->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="oversea_bank">
                    <h3 class="box-title m-t-40" id="cardOverseas">@lang('scheme/confirmation.overseas_bank')</h3>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">

                                <label class="control-label">@lang('scheme/confirmation.attr.bank_name')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->ovbankname)
                                <input type="text" name="ovbankname" id="ovbankname"
                                    class="form-control selectOverseasBank" value="{{$bankinfo->ovbankname}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="ovbankname" id="ovbankname"
                                    class="form-control selectOverseasBank" value="">
                                @else
                                <input type="text" name="ovbankname" id="ovbankname"
                                    class="form-control selectOverseasBank" value="">
                                @endif

                                <!--select class="form-control selectOverseasBank" name='ovbankname' id='ovbankname'>
                                            {{-- <option>@lang('scheme/confirmation.attr.choose_bank')
                                            </option> --}}
                                            @foreach($overseasbank as $overb)
                                            <option value="{{$overb->refcode}}">{{$overb->descen}}</option>
                                            @endforeach
                                        </select-->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_branch')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->bankbr)
                                <input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank"
                                    value="{{$bankinfo->bankbr}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank"
                                    value="">
                                @else
                                <input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank"
                                    value="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_accNo')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank"
                                    value="{{$bankinfo->accno}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank"
                                    value="">
                                @else
                                <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank"
                                    value="">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.swift_code')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="swiftcode" id="swiftcode"
                                    class="form-control selectOverseasBank" value="{{$bankinfo->swiftcode}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="swiftcode" id="swiftcode"
                                    class="form-control selectOverseasBank" value="">
                                @else
                                <input type="text" name="swiftcode" id="swiftcode"
                                    class="form-control selectOverseasBank" value="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bsb_code')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank"
                                    value="{{$bankinfo->bsbcode}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank"
                                    value="">
                                @else
                                <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank"
                                    value="">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">

                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.bank_address')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                    class="form-control selectOverseasBank" value="{{$bankinfo->bankaddr}}">
                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                    class="form-control selectOverseasBank" value="">
                                @else
                                <input type="text" name="ovbankaddr" id="ovbankaddr"
                                    class="form-control selectOverseasBank" value="">
                                @endif

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.type_acc')</label>
                                @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                    @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                    <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                        @else
                                        <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                            @endif

                                            @foreach($overseasbanktype as $ovt)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                            $bankinfo->acctype == $ovt->refcode)
                                            <option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>
                                            @else
                                            <option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-actions">
                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-info"
                    onclick="submitform()">@lang('button.reset')</button>

                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                    onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                    onclick="window.location='/obform_od'">@lang('button.back')</button>
            </div>
        </div>
        </form>

    </div>
</div>
</div>
</div>
