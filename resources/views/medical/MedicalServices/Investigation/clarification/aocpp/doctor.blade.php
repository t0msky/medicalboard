<div class="card">
    <div class="card-body">
        <div class="form-body">
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('Doctor Name')</label>
                        <input type="text" name="name" id="name" value="" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <div class="row p-t-20">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('Address')</label>
                        <input type="text" name="add1" id="add1" value="" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="add2" id="add2" value="" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="add3" id="add3" value="" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <div class="row p-t-12">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('State')</label>
                        <input type="text" name="state" id="state" value="" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('City')</label>
                        <input type="text" name="city" id="city" value="" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('Postcode')</label>
                        <input type="text" name="postcode" id="" value="" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <div class="row p-t-20">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('Contact Number')</label>
                        <input type="text" name="noPhone" id="noPhone" value=""  value="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">@lang('Email')</label>
                        <input type="text" name="email" id="email" value="" class="form-control" >
                    </div>
                </div>
            </div>

            @include('medical.MedicalServices.Investigation.clarification.aocpp.collapseMedical')
        </div>
    </div>
</div>