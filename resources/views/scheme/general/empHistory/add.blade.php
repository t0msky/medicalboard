<form action="{{route('add_emp_history')}}" method="POST">
    @csrf
    <div class="modal fade" id="model_add_employment" tabindex="-1" role="dialog" aria-labelledby="viewOpinionLabel1">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1"> Add Employer </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <input type="hidden" name="emp_id" value="">
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Name </label>
                            <input type="text" name="emp_name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Address</label>
                            <input type="text" name="emp_add1" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <input type="text" name="emp_add2" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <input type="text" name="emp_add3" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                    <label>@lang('form/address-info.postcode')</label>
                                    <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="">
                                </div>
                       
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('form/address-info.city')</label>
                            <input type="text" class="form-control clearFields" id="city" name="city" value="">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/address-info.state')</label>
                                <select name='state_code' id='state' class='form-control'>
                                    <option value="please select" selected>
                                        @lang('form/scheme.general.collapse.ob.please_select')</option>
                                    @foreach($ref_table->state as $s)
                                    <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Period Of Employment')</label>
                            <input type="text" class="form-control clearFields" id="postcode" name="period_employment"
                                value="">
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label>@lang('Occupation')</label>
                            <input type="text" class="form-control clearFields" id="city" name="occupation" value="">
                        </div>
                    </div>
                    @if($casetype == 3)
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Monthly Wages (RM)')</label>
                            <input type="text" class="form-control clearFields" id="postcode" name="monthly_wages" value="">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
       