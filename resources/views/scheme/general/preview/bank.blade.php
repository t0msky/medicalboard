<div class="card m-b-0">
    <div class="card-header" role="tab" id="headingZero0">
        <h6 class="mb-0">
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInformation"
                aria-expanded="false" aria-controls="bankInformation">
                <h6 class="card-title"><i class="fa fa-plus"></i> Bank Information </h6>
            </a>
        </h6>
    </div>
    <div id="bankInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Payment Mode
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($bankinfo)||$bankinfo!=null)
                        @foreach($ref_table->pay_mode as $opay)
                        @if($bankinfo->paymode == $opay->ref_code)
                        <input type="text" class="form-control-preview" value="{{$opay->desc_en}}" disabled style="background-color:white">
                        @endif
                        @endforeach
                        @else 
                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            @if(!empty($bankinfo)||$bankinfo!=null)
            @if($bankinfo->paymode=="2")
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Bank Account
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($bankinfo)||$bankinfo!=null)
                        @foreach($ref_table->bank_loc as $ob)
                        @if($bankinfo->bankloc == $ob->ref_code)
                        <input type="text" class="form-control-preview" value="{{$ob->desc_en}}" disabled style="background-color:white">
                        @endif
                        @endforeach
                        @else 
                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            @elseif($bankinfo->paymode=="1")
            <div class="col-md-4">
                    <div class="form-group-preview row">
                        <div class="col-sm-9 label-preview">
                           Reason No Bank Account
                        </div>
                        <div class="col-sm-9">
                            @if(!empty($bankinfo)||$bankinfo!=null)
                            @foreach($ref_table->rsn_no_acc as $ob)
                            @if($bankinfo->reasonnoacc == $ob->ref_code)
                            <input type="text" class="form-control-preview" value="{{$ob->desc_en}}" disabled style="background-color:white">
                            @endif
                            @endforeach
                            @else 
                            <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                            @endif
                        </div>
                    </div>
            </div>
            @endif
            @endif
        </div>
        @if(!empty($bankinfo)||$bankinfo!=null)
        @if($bankinfo->paymode=="2")
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                       @if($bankinfo->bankloc=="L") 
                       Bank Name 
                       @elseif($bankinfo->bankloc=="O")
                       Overseas Bank Name
                       @endif
                    </div>
                    <div class="col-sm-9">
                        @if (!empty($bankinfo) || $bankinfo !=null)
                        <input type="text" class="form-control-preview" value="{{$bankinfo->bankname}}" disabled
                            style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Bank Account No.
                    </div>
                    <div class="col-sm-9">
                        @if (!empty($bankinfo) || $bankinfo !=null)
                        <input type="text" class="form-control-preview" value="{{$bankinfo->accno}}" disabled
                            style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Bank Account Type
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($bankinfo)||$bankinfo!=null)
                        @foreach($ref_table->acc_type as $ob)
                        @if($bankinfo->acctype == $ob->ref_code)
                        <input type="text" class="form-control-preview" value="{{$ob->desc_en}}" disabled style="background-color:white">
                        @endif
                        @endforeach
                        @else 
                        <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                        @endif 
                    </div>
                </div>
            </div>
        </div>
        @if(!empty($bankinfo)||$bankinfo!=null)
        @if($bankinfo->bankloc=="O") 
        <div class="row p-t-20">

            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Country
                    </div>
                    <div class="col-sm-9">
                        @if(!empty($bankinfo) || $bankinfo !=null)
                        @if($bankinfo->countrycode == null)
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @else
                        @foreach($ref_table->national as $national)
                        @if ($bankinfo->countrycode == $national->ref_code)
                        <input type="text" class="form-control-preview" value="{{$national->desc_en}}" disabled
                            style="background-color:white">
                        @endif
                        @endforeach
                        @endif
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Currency
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-t-20">

            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        Swift Code
                    </div>
                    <div class="col-sm-9">
                        @if (!empty($bankinfo) || $bankinfo !=null)
                        <input type="text" class="form-control-preview" value="{{$bankinfo->swiftcode}}" disabled
                            style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        BSB Code
                    </div>
                    <div class="col-sm-9">
                        @if (!empty($bankinfo) || $bankinfo !=null)
                        <input type="text" class="form-control-preview" value="{{$bankinfo->bsbcode}}" disabled
                            style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif
        
        <div class="row p-t-20">
            <div class="col-md-4">
                <div class="form-group-preview row">
                    <div class="col-sm-9 label-preview">
                        @if($bankinfo->bankloc=="L") 
                        Bank Address
                        @elseif($bankinfo->bankloc=="O")
                        Overseas Bank Address
                        @endif
                    </div>
                    <div class="col-sm-9">
                        @if (!empty($bankinfo) || $bankinfo !=null)
                        <input type="text" class="form-control-preview" value="{{$bankinfo->bankaddr}}" disabled
                            style="background-color:white">
                        @else
                        <input type="text" class="form-control-preview" value="" disabled
                            style="background-color:white">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endif
    </div>
</div>
