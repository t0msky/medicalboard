<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('ilatinformation')}}" id="pensiondetails" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12 ">
                                <label class="control-label">@lang('Description Of Morbidity')</label>
                                <span class="required">*</span>
                                @if((!empty($ilatinfo) ||$ilatinfo!=null) )
                                <textarea name="descriptionmorbidity" id="descriptionmorbidity"
                                    class="form-control">{{ $ilatinfo->morbiddesc ?? '' }}</textarea>
                                @else
                                <textarea name="descriptionmorbidity" id="descriptionmorbidity"
                                    class="form-control"></textarea>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-3">
                                <label class="control-label">@lang('Year Morbidity Is First Suffered')</label>
                                <span class="required">*</span>
                                <select class="form-control" name="year_morbidity" onchange='checkyear()'
                                    id='year_morbidity'>
                                    @php $curryear = date('Y'); @endphp
                                    @for ($i = $curryear; $i >= 1974; $i--)
                                    @if ((!empty($ilatinfo) || $ilatinfo!=null) && isset($ilatinfo->morbidyear) && $ilatinfo->morbidyear == $i)
                                    <option value="{{$i}}" selected>{{$i}}</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endif
                                    @endfor
                                </select>
                                <label class="control-label" id='lblerror' style='color:red'></label>
                            </div>
                            <div class="form-group col-md-12 col-lg-5">
                                <label style="white-space:nowrap" class="control-label">@lang('Is the insured person
                                    still engaged in employment?')
                                </label>
                                <span class="required">*</span>
                                <select name="engage" class="form-control" data-placeholder="Choose a Category"
                                    tabindex="1">
                                    @if ((!empty($ilatinfo)|| $ilatinfo!=null) && isset($ilatinfo->inemployment) && $ilatinfo->inemployment == '1')
                                    <option value="1" selected>@lang('Yes')</option>
                                    <option value="2">@lang('No')</option>
                                    @elseif ((!empty($ilatinfo)|| $ilatinfo!=null) && isset($ilatinfo->inemployment) && $ilatinfo->inemployment == '2')
                                    <option value="1">@lang('Yes')</option>
                                    <option value="2" selected>@lang('No')</option>
                                    @else
                                    <option selected hidden disabled>Please Select</option>
                                    <option value="1">@lang('Yes')</option>
                                    <option value="2">@lang('No')</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label style="white-space:nowrap" class="control-label">@lang('Date of Cessation Of
                                    Employment (If Applicable)')</label>
                                @if(!empty($ilatinfo)|| $ilatinfo!=null)
                                <input type="date" value="{{$ilatinfo->endempdate ?? ''}}" name="dafe_of_cessation"
                                    id="date_of_cessation" class="form-control">
                                @else
                                <input type="date" name="dafe_of_cessation" id="date_of_cessation" class="form-control">
                                @endif
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-actions">
                        <button type="submit"
                            class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                            onclick="submitform()">@lang('button.reset')</button>
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkyear() {
        var morbidyear = document.getElementById('year_morbidity').value;

        var lblerror = document.getElementById('lblerror');
        var today = new Date();

        var curryear = today.getFullYear();

        if (morbidyear > curryear) {
            lblerror.innerHTML = 'Morbid date must not be after current year';
        } else {
            lblerror.innerHTML = '';
        }
    }

</script>
