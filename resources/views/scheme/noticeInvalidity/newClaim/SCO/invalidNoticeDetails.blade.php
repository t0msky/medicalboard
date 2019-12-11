<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/ilatinfo" id="pensiondetails" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 dol-lg-12">
                                <label class="control-label">@lang('scheme/pensionDetails.attr.desc')</label>
                                <span class="required">*</span>
                                @if(!empty($ilatinfo) && $ilatinfo->morbiddesc !='')
                                {{--<input type="text" value="{{ $ilatinfo->morbiddesc }}"
                                name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">--}}
                                <textarea name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">{{ $ilatinfo->morbiddesc }}</textarea>
                                @else
                                {{--<input type="text"  name="descriptionmorbidity" id="descriptionmorbidity" class="form-control">--}}
                                <textarea name="descriptionmorbidity" id="descriptionmorbidity" class="form-control"></textarea>
                                @endif
                                <!--<small class="form-control-feedback"> This is inline help </small>-->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 dol-lg-4">
                                <label class="control-label">@lang('scheme/pensionDetails.attr.year')</label>
                                <span class="required">*</span>
                                <select class="form-control" name="year_morbidity" onchange='checkyear()'
                                    id='year_morbidity'>
                                    <option></option>
                                    <?php $curryear = date('Y'); ?>
                                    @for ($i = $curryear; $i >= 1974; $i--)
                                    @if (!empty($ilatinfo) && $ilatinfo->morbidyear !='' && $ilatinfo->morbidyear ==
                                    $i)
                                    <option value="{{$i}}" selected>{{$i}}</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endif
                                    @endfor
                                </select>
                                <label class="control-label" id='lblerror' style='color:red'></label>
                            </div>
                            <div class="form-group col-md-12 dol-lg-4">
                                <label style="white-space:nowrap" class="control-label">@lang('scheme/pensionDetails.attr.date_cessation')</label>
                                @if(!empty($ilatinfo) && $ilatinfo->endempdate !='')
                                <input type="date" value="{{substr($ilatinfo->endempdate,0,4)}}-{{substr($ilatinfo->endempdate,4,2)}}-{{substr($ilatinfo->endempdate,6,2)}}" name="dafe_of_cessation" id="date_of_cessation" class="form-control">
                                @else
                                <input type="date" name="dafe_of_cessation" id="date_of_cessation" class="form-control">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class=" form-group col-md-12 col-lg-12">
                            <div class="card-header">
                                <div class="table-responsive">
                                    <table id="table_add_emp_info" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width: 4%;align-self: center'>@lang('No')</th>
                                                <th style='width: 26%;align-self: center'>@lang('Employer Name')<span class="required">*</span></th>
                                                <th style='width: 30%;align-self: center'>@lang('Employer Address')<span class="required">*</span></th>
                                                <th style='width: 11%;align-self: center'>@lang('Period Of Employment')<span class="required">*</span></th>
                                                <th style='width: 11%;align-self: center'>@lang('Occupation')<span class="required">*</span></th>
                                                <th style='width: 10%;align-self: center'>@lang('Monthly Wages (RM)')<span class="required">*</span></th>
                                                <th style='width: 8%;'>@lang('Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (empty($empinfo))
                                            <?php $cnt = 3; ?>
                                            @for ($i = 0; $i < $cnt; $i++) <tr data-expanded="true">
                                                <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                <td><input type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control"></td>
                                                <td><input type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control"></td>
                                                <td><input type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value=""class="form-control"></td>
                                                <td><input type="text" id="designation[{{$i}}]"name="designation[{{$i}}]" value=""class="form-control"></td>
                                                <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control"></td>
                                                <td style="align:center;width:10%;"><br><a id='updatedraft' class="w3-large" ><i class="fas fa-edit"></i></a><br><a id='deletedraft' class="w3-large"><i class="fas fa-trash-alt "></i></a></td>
                                            </tr>
                                                @endfor
                                                @else
                                                <?php $cnt = 3; $i = 0; ?>
                                                @foreach ($empinfo as $emp)
                                                <tr data-expanded="true">
                                                    <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                    <td><input type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="{{$emp->empname}}" class="form-control"></td>
                                                    <td><input type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="{{$emp->empadd}}" class="form-control"></td>
                                                    <td><input type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="{{$emp->duration}}"class="form-control"></td>
                                                    <td><input type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="{{$emp->designation}}" class="form-control"></td>
                                                    <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="{{$emp->salary}}" class="form-control"></td>
                                                    <td style="align:center;width:10%;">
                                                            <a class='updatedraft'><i class="fas fa-edit"></i></a>
                                                            <a class='deletedraft'><i class="fas fa-trash-alt "></i></a><br>
                                                            
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach
                                                @for ($j = $i; $j < $cnt; $j++) <tr data-expanded="true">
                                                    <td><input type="hidden" value="{{$j}}">{{$j+1}}</td>
                                                    <td><input type="text" id="empname[{{$j}}]" name="empname[{{$j}}]" value="" class="form-control"></td>
                                                    <td><input type="text" id="empadd[{{$j}}]" name="empadd[{{$j}}]" value="" class="form-control"></td>
                                                    <td><input type="text" id="duration[{{$j}}]" name="duration[{{$j}}]" value="" class="form-control"></td>
                                                    <td><input type="text" id="designation[{{$j}}]" name="designation[{{$j}}]" value="" class="form-control"></td>
                                                    <td><input type="text" id="wages[{{$j}}]" name="wages[{{$j}}]" value="" class="form-control"></td>
                                                    <td style="align:center;width:10%;"><a class='updatedraft'><i class="fas fa-edit"></i></a>
                                                        <a class='deletedraft'><i class="fas fa-trash-alt "></i></a><br>
                                                    </td>
                                                </tr>
                                                    @endfor
                                                    @endif
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#popupAddEmployer">@lang('ADD EMPLOYER')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
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

<!------------POPUP ADD EMPLOYER ----------------->
<div id="popupAddEmployer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:60%;">
        <div class="modal-content">
            <div class="col-md-20" id="popAddEmployer">
                <div class="modal-header">

                    <h4 class="modal-title" id="vcenter">Employer Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group col-md-12 dol-lg-">
                                <label>@lang('Employer Name')</label>
                                <input type="text" name="emp_Name" id="emp_Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 dol-lg- col-md-12">
                            <label>@lang('Employer Address')</label>
                            <input type="text" class="form-control clearFields" id="add1" name="add1" value="">
                        </div>
                        <div class="form-group col-md-12 dol-lg- col-md-12">
                            <input type="text" class="form-control clearFields" id="add2" name="add2" value="">
                        </div>
                        <div class="form-group col-md-12 dol-lg- col-md-12">
                            <input type="text" class="form-control clearFields" id="add3" name="add3" value="">
                        </div>
                    </div>    
                    <div class='row' >
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('State')</label>
                                <input type="text" name="state" id="state" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('City')</label>
                                <input type="text" name="City" id="City" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('Postcode')</label>
                                <input type="text" name="Postcode" id="Postcode" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row' >
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('Period Of Employment')</label>
                                <input type="text" name="periodEmployment" id="periodEmployment" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('Occupation')</label>
                                <input type="text" name="Occupation" id="Occupation" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col-md-12 dol-lg-">
                                <label class="control-label">@lang('Monthly Wages (RM)')</label>
                                <input type="text" name="Monthlywages" id="Monthlywages" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('Close')</button>
                    </div><br>
                <br>
                </div>
            </div>
        </div>
    </div>
</div>
