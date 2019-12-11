@if(!empty($emphistory)||$emphistory!=null)
@foreach($emphistory as $idx=>$data)
<div class="modal fade" id="model_update_employer_{{$data->empid}}" tabindex="-1" role="dialog" aria-labelledby="viewOpinionLabel1">
    <div class="modal-dialog modal-xl" role="document">
        <form action="{{route('update_emp_history')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Uplodate Employer {{$data->empname}}</h4>
                    <input type="hidden" name="emp_id" value="{{$data->empid}}">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Name </label>
                        <input type="text" name="emp_name" class="form-control" value="{{$data->empname}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Address</label>
                            <input type="text" name="emp_add1" class="form-control" value="{{$data->empadd1}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <input type="text" name="emp_add2" class="form-control" value="{{$data->empadd2}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <input type="text" name="emp_add3" class="form-control" value="{{$data->empadd3}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('form/address-info.postcode')</label>
                            <input type="text" class="form-control clearFields" id="postcode" name="postcode" value="{{$data->postcode}}">
                        </div>
                        
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('form/address-info.city')</label>
                            <input type="text" class="form-control clearFields" id="city" name="city" value="{{$data->city}}">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('form/address-info.state')</label>
                                <select name='state_code' id='state' class='form-control'>
                                    @lang('form/scheme.general.collapse.ob.please_select')</option>
                                    @foreach($ref_table->state as $s)
                                    @if($data->statecode==$s->ref_code)
                                    <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                    @else
                                    <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Period Of Employment')</label>
                            <input type="text" class="form-control clearFields" id="postcode" name="period_employment" value="{{$data->duration}}">
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label>@lang('Occupation')</label>
                            <input type="text" class="form-control clearFields" id="city" name="occupation" value="{{$data->designation}}">
                        </div>
                    </div>
                    @if($casetype == 3)
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Monthly Wages (RM)')</label>
                            <input type="text" class="form-control clearFields" id="postcode" name="monthly_wages" value="{{$data->salary}}">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
@endif