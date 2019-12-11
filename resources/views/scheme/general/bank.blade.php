<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('bank_info')}}" id="reset">
                    @csrf
                    
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label
                                    class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>
                                <select class="form-control" name='paymode' id='paymode' required>
                                    <option selected hidden disabled>Please Select</option>
                                    @foreach($ref_table->pay_mode as $opay)
                                    @if ((!empty($bankinfo) || $bankinfo !=null) && $bankinfo->paymode == $opay->ref_code)
                                    <option value="{{$opay->ref_code}}" selected>{{$opay->desc_en}}</option>
                                    @else
                                    <option value="{{$opay->ref_code}}"> {{$opay->desc_en}} </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4" id="bank_location">
                                <label class="control-label">@lang('Bank Account')</label>
                                 <select class="form-control select" id="bankloc" name='bankloc'>
                                    <option selected disabled hidden>Please Select</option>
                                    @foreach($ref_table->bank_loc as $ob)
                                    @if ((!empty($bankinfo) || $bankinfo !=null) && $bankinfo->bankloc == $ob->ref_code)
                                    <option value="{{$ob->ref_code}}" selected>{{$ob->desc_en}}</option>
                                    @else
                                    <option value="{{$ob->ref_code}}">{{$ob->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="bank_reason">
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.bank.reason')</label>
                                    <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                        <option selected hidden disabled>Please Select</option>
                                        @foreach($ref_table->rsn_no_acc as $or)
                                        @if ((!empty($bankinfo) || $bankinfo !=null )&& $bankinfo->reasonnoacc == $or->ref_code)
                                        <option value="{{$or->ref_code}}" selected>{{$or->desc_en}}</option>
                                        @else
                                        <option value="{{$or->ref_code}}">{{$or->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="bank_eft">
                            <div id="local_bank">
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label id="lbl_bank_name" class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                        @if (!empty($bankinfo) || $bankinfo !=null)
                                        <input type="text" name="bankcode" id="bankcode" class="form-control selectLocalBank clearFields" value="{{$bankinfo->bankname}}">
                                        @else
                                        <input type="text" name="bankcode" id="bankcode" class="form-control selectLocalBank clearFields" value="">
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                        @if (!empty($bankinfo) || $bankinfo !=null)
                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">
                                        @else
                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 col-lg-4">
                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>
                                        <select class="form-control selectLocalBank" name='localacctype'id='localacctype' value="">
                                                <option selected hidden disabled>Please Select</option>
                                            @foreach($ref_table->acc_type as $at)
                                            @if ((!empty($bankinfo) || $bankinfo !=null) && $bankinfo->acctype == $at->ref_code)
                                            <option value="{{$at->ref_code}}" selected>{{$at->desc_en}}</option>
                                            @else
                                           
                                            <option value="{{$at->ref_code}}">{{$at->desc_en}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div id="oversea_bank">
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">Country</label>
                                    <select class="form-control selectLocalBank" name='country'id='country' value="">
                                        <option selected hidden disabled>Please Select</option>
                                        @foreach($ref_table->national as $national)
                                        @if ((!empty($bankinfo) || $bankinfo !=null) && $bankinfo->countrycode == $national->ref_code)
                                        <option value="{{$national->ref_code}}" selected>{{$national->desc_en}}</option>
                                        @else
                                       
                                        <option value="{{$national->ref_code}}">{{$national->desc_en}}</option>
                                        @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">Currency</label>
                                    <input type="text" name="currency" id="currency" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>
                                    @if (!empty($bankinfo) || $bankinfo !=null)
                                    <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                    @else
                                    <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                    @endif
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>
                                    @if (!empty($bankinfo) || $bankinfo !=null)
                                    <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                    @else
                                    <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="bank_address">
                             <div class="form-row">
                                <div class="form-group col-md-12 col-lg-8">
                                    <label id="lbl_bank_address"class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>
                                    @if (!empty($bankinfo) || $bankinfo !=null)
                                    <input type="text" name="bankaddr" id="localbankaddr" class="form-control selectLocalBank clearFields" value="{{$bankinfo->bankaddr}}">
                                    @else
                                    <input type="text" name="bankaddr" id="localbankaddr" class="form-control selectLocalBank clearFields" value="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#bank_location').hide();
        $('#bank_reason').hide();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#bank_address').hide();
        
    $('select[name=paymode]').change(function () {
        if (this.value == '1') {
            $('#bank_location').hide();
            $('#bank_reason').show();
            $('#bank_eft').hide();
            $('#oversea_bank').hide();
            $('#bank_address').hide();
        } else if (this.value == '2'){
            $('#bank_location').show();
            $('#bank_reason').hide();
            $('#bank_eft').hide();
            $('#oversea_bank').hide();
            $('#bank_address').hide(); 

            $('select[name=bankloc]').change(function () {
                if (this.value == 'L') {
                    $('#bank_eft').show();
                    $('#oversea_bank').hide();
                    $('#bank_address').show();
                    $('#lbl_bank_address').text('@lang("form/scheme.general.collapse.bank.bank_address")');
                    $('#lbl_bank_name').text('@lang("form/scheme.general.collapse.bank.bank_name")');
                } else {
                    $('#bank_eft').show();
                    $('#oversea_bank').show();
                    $('#bank_address').show();
                    $('#lbl_bank_address').text('Overseas Bank Address');
                    $('#lbl_bank_name').text('Overseas Bank Name');
                }
            });
        }
        else {
            $('#bank_location').hide();
            $('#bank_reason').hide();
            $('#bank_eft').hide();
            $('#oversea_bank').hide();
            $('#bank_address').hide();
        }
    });
    
    $("select[name=paymode]").trigger("change");
    $("select[name=bankloc]").trigger("change");
   
   
});
</script>
