<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Employment Start Date</label>
                                   <input type="date" name="empStartDate_medical" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Employment End Date</label>
                                   <input type="date" name="empEndDate_medical" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Reemployment Start Date</label>
                                   <input type="date" name="rempStartDate_medical" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">{{--@lang('insuredPerson.attr.notice')--}}Reemployment End Date</label>
                                   <input type="date" name="rempEndDate_medical" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Scheme Entry Date</label>
                                <input type="date" name="schemeEntryDate_medical" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <div class="form-actions text-right">
                                    </div>
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td>1</td>
                                                <td> <label class="control-label">Does the insured person is still working ?</label></td>
                                                <td> <select class="form-control" data-placeholder="desc_medical" tabindex="2">
                                                    <option selected readonly disabled hidden>Please Select </option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select></td>
                                            </tr>
                                            <tr> 
                                                <td>2</td>
                                                <td> <label class="control-label">Age at the time of scheme entry date</label></td>
                                                <td> <input type="text" readonly name="agescheme_entrydate" class="form-control"></td>
                                            </tr>
                                            <tr> 
                                                <td>3</td>
                                                <td> <label class="control-label">Age at the time of notice entry date</label></td>
                                                <td> <input type="text" readonly name="agenotice_entrydate" class="form-control"></td>
                                            </tr>
                                            <tr> 
                                                <td>4</td>
                                                <td> <label class="control-label">Age at the beginning of the illness</label></td>
                                                <td> <input type="text" readonly name="agebeginning_illness" class="form-control"></td>
                                            </tr>
                                            <tr> 
                                                <td>5</td>
                                                <td> <label class="control-label">Age at morbid dates</label></td>
                                                <td> <input type="text" readonly name="agemorbiddates" class="form-control"></td>
                                            </tr>
                                            <tr> 
                                                <td>6</td>
                                                <td> <label class="control-label">Eligibility based on age on the date of entry scheme</label></td>
                                                <td> <select class="form-control" readonly data-placeholder="eligibity_medical" tabindex="2">
                                                    <option selected readonly disabled hidden>Please Select </option>
                                                    <option value="1">Memenuhi Kelayakan Umur</option>
                                                    <option value="2">Tidak Memenuhi Kelayakan Umur</option>
                                                </select> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Statuotary Body</label>
                                <select class="form-control" data-placeholder="statuotary_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}SPI Eligible</label>
                                <select class="form-control" readonly data-placeholder="statuotary_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Eligible</option>
                                    <option value="No">Not Eligible</option>
                                    <option value="12">Minimum 12 Months</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Total Months between Scheme Entry and a month before Notice Date</label>
                                <input type="text" readonly name="totalmonth_schemeentry&noticedate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Total Months between Scheme Entry and a month before Morbid Date</label>
                                <input type="text" readonly name="totalmonth_schemeentry&morbiddate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Total Month Contributed</label>
                                <input type="text" name="totalmonth_contributed" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Qualifying Condition</label>
                                <select class="form-control" readonly data-placeholder="qualifyingcondition_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="1">Full (2/3)</option>
                                    <option value="2">Reduced (1/3)</option>
                                    <option value="3">Full (24/40)</option>
                                    <option value="4">Full (36/60)</option>
                                    <option value="5">ILAT Support</option>
                                    <option value="6">Not Deserved</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Qualifying Condition (Morbid Date)</label>
                                <select class="form-control" readonly data-placeholder="qualifyingmorbiddate_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="1">Full (2/3)</option>
                                    <option value="2">Reduced (1/3)</option>
                                    <option value="3">Full (24/40)</option>
                                    <option value="4">Full (36/60)</option>
                                    <option value="5">ILAT Support</option>
                                    <option value="6">Not Deserved</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Invalidity Starting Date Requirements</label>
                                <select class="form-control" data-placeholder="invaliditystartdate_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Morbid Date Requirements</label>
                                <select class="form-control" data-placeholder="morbiddate_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Credit Period Requirement</label>
                                <select class="form-control" data-placeholder="creditperiodreq_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Section 56 Requirement</label>
                                <select class="form-control" data-placeholder="section56req_medical" tabindex="2">
                                    <option selected readonly disabled hidden>Please Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}About Illness</label>
                                <input type="text" class="form-control" name="aboutillness_medical">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Reason Code</label>
                                <input type="text" class="form-control" name="reasoncode_medical">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}The year began to suffer from illness</label>
                                <select class="form-control" data-placeholder="yearillness_medical" tabindex="2">
                                    <option value="">Please Select </option>
                                    @php
                                      $currently_selected = date('Y'); 
                                      $earliest_year = 1974; 
                                      $latest_year = date('Y'); 

                                      foreach ( range( $latest_year, $earliest_year ) as $i ) {
                                        // Prints the option with the next year in range.
                                        print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                                      }
                                      @endphp
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">{{--@lang('insuredPerson.attr.reasonOfApplication')--}}Date of Resignation (if applicable)</label>
                                <input type="date" class="form-control" name="dateresignation_medical">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <label>Employment Information : </label>
                                    <div class="table-responsive">
                                        <table id="table_add_emp_od" class="table table-bordered attendtable" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th data-breakpoints="xs">@lang('scheme/od.attr.num')</th>
                                                <th>@lang('scheme/od.attr.employer_name')</th>
                                                <th>@lang('scheme/od.attr.employer_address')</th>
                                                <th>@lang('scheme/od.attr.period')</th>
                                                <th>Occupation</th>
                                                <th>Monthly Salary (RM)</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php $cnt = 3; ?>
                                            @for ($i = 0; $i < $cnt; $i++)
                                            <tr data-expanded="true" id="div_employer">
                                                <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                <td><textarea type="text" name="empname_medical" value="" class="form-control"></textarea></td>
                                                <td><textarea type="text" name="empadd_medical" value="" class="form-control"></textarea></td>
                                                <td><textarea type="text" name="duration_medical" value="" class="form-control"></textarea></td>
                                                <td><textarea type="text" name="occupation_medical" value="" class="form-control"></textarea></td>
                                                <td><textarea type="text" name="monthlysalary_medical" value="" class="form-control"></textarea></td>
                                                <td></td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>   
                                <button type="button" class="btn btn waves-effect waves-light btn-info" id="add_emp_invalidity_notice">ADD EMPLOYMENT INFO</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
