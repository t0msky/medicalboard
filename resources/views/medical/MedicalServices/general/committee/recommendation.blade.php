<div class="card">
    <div class="card-body">
        <div class="form-body">
            <div class="form-row">
                <div class="form-group col-md-12 col-lg-12">
                    <label class="control-label">@lang('Opinion ')</label>
                    <input type="text" value="" class="form-control" readonly>
                </div>
                <div class="form-group col-md-12 col-lg-12">
                    <label class="control-label">@lang('Recommendation ')</label>
                    <textarea type="text" rows="7" class="form-control" readonly>@isset($cCase->injurydesc) {{$cCase->injurydesc}} @endisset</textarea>
                </div>
                <div class="form-group col-md-12 col-lg-12">
                    <label class="control-label">@lang('Prepare By ')</label>
                    <input type="text" value="@isset($cCase->hukpotential) {{$cCase->hukpotential}} @endisset" class="form-control" readonly>
                </div>
                <div class="form-group col-md-12 col-lg-6">
                    <label class="control-label">@lang('Date ')</label>
                    <input type="date" value="" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>