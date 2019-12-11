<div class="card">
    <div class="card-body">
        <div class="form-body">
            <div class="form-row">
                <!-- {{-- dd($invoice) --}} -->
                <div class="form col-md-12 col-lg-6">
                    <label class="control-label">@lang('Ref No')</label>
                    <input type="text" name="ms_inv_invrefno" value="{{$invoice->ms_inv_invrefno}}" class="form-control"
                        readonly>
                </div>
                <div class="form col-md-12 col-lg-6">
                    <label class="control-label">@lang('Invoice Date')</label>
                    <input type="text" name="ms_inv_invdate"
                        value="{{ date('d-m-Y', strtotime($invoice->ms_inv_invdate))}}" class="form-control" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form col-md-12 col-lg-6">
                    <label class="control-label">@lang('Amount')</label>
                    <input type="text" name="ms_inv_amount" value="{{$invoice->ms_inv_amount}}" class="form-control"
                        readonly>
                </div>
            </div>
        </div>
    </div>
</div>
