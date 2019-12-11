<div class="form-">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                    <label class="control-label">@lang('Scheme Entry Date')</label>
                                    <input type="text" value="{{$schemeQualifying['scheme_entry_date']}}" name="Scheme_EntryDate" id="schemeEntryDate" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Age on notice date ')</label>
                                <input type="text" value="{{$schemeQualifying['age_notice_date']}}" name="Age_NoticeDate" id="ageNoticeDate" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Age at the time of scheme entry date')</label>
                                <input type="date" value="{{$schemeQualifying['age_scheme_data']}}" name="Age_SchemeEntryDate" id="ageSchemeEntryDate" class="form-control">
                             </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Eligibility based on age on the date of entry
                                    scheme')</label>
                                <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                    <option selected disabled hidden>{{$schemeQualifying['eligibility_scheme']}}
                                    </option>
                                    <option value="">@lang('Eligible')</option>
                                    <option value="">@lang('Not Eligible')</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Statutory Body')</label>
                                <select class="form-control" data-placeholder="idType_invalidity" tabindex="2"
                                    id="selectStatutoryBody">
                                    <option selected disabled hidden
                                        value="{{$schemeQualifying['statutory_body']}}">
                                        {{$schemeQualifying['statutory_body']}}
                                    </option>
                                    <option value="Yes">@lang('Yes')</option>
                                    <option value="n">@lang('No')</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4" style="display:none;" id="typeOfStatutoryBody">
                                <label class="control-label">@lang('Type of Statutory Body ')</label>
                                <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                    <option selected disabled hidden>{{$schemeQualifying['type_statutory_body']}}
                                    </option>
                                    <option value="">@lang('Statutory Body')</option>
                                    <option value="">@lang('Private Statutory Body')</option>
                                    <option value="">@lang('University Statutory Body and others')</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Employment Start Date.')</label>
                                <input type="date" value="{{$schemeQualifying['emp_start_date']}}" name="Employment_StartDate" id="employmentStartDate" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Employment End Date')</label>
                                <input type="date" value="{{$schemeQualifying['emp_end_date']}}" name="Employment_EndtDate" id="employmentEndDate" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Total Months between Scheme Entry and Notice Date')</label>
                                <input type="text" value="{{$schemeQualifying['total_months']}}" name="total_Month" id="TotalMonth" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Total Months Contributed')</label>
                                <input type="text" value="{{$schemeQualifying['total_months_contributed']}}" name="totalmonthContribute" id="Total_MonthContribute" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Qualifying Condition')</label>
                                <input type="text" value="{{$schemeQualifying['qualifying_condition']}}" name="qualifying_Condition" id="QualifyingCondition" class="form-control">
                            </div>
                        </div>

                        <!----------------age more than 60 ---------->

                        <div class="form-row" style="display:none;" id="ageMoreThan60">
                            <div class="form-group col-md-12 col-lg-10">

                                <label class="control-label">Regulations 46</label>

                                <div class="form-group col-md-12 col-lg-10">
                                    <div class="form-group">
                                        <label class="control-label">1. Insured person is suffering from
                                            invalidity</label>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio">
                                                @if ($schemeQualifying['suffering_condition'] == 'Yes')
                                                <input type="radio" id="ageQ1a" name="customRadio"
                                                    class="custom-control-input" checked>
                                                @else
                                                <input type="radio" id="ageQ1a" name="customRadio"
                                                    class="custom-control-input">
                                                @endif
                                                <label class="custom-control-label" for="ageQ1a">Yes</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                @if ($schemeQualifying['suffering_condition'] == 'No')
                                                <input type="radio" id="ageQ1b" name="customRadio"
                                                    class="custom-control-input" checked>
                                                @else
                                                <input type="radio" id="ageQ1b" name="customRadio"
                                                    class="custom-control-input">
                                                @endif
                                                <label class="custom-control-label" for="ageQ1b">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-lg-10">
                                    <label class="control-label">2. Insured Person is incapable of engaging
                                        substaintially gainful activities before attains the age of 60 years
                                        old.</label>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio">
                                            @if ($schemeQualifying['capable_engaging'] == 'Yes')
                                            <input type="radio" id="ageQ2a" name="customRadio1"
                                                class="custom-control-input" checked>
                                            @else
                                            <input type="radio" id="ageQ2a" name="customRadio1"
                                                class="custom-control-input">
                                            @endif
                                            <label class="custom-control-label" for="ageQ2a">Yes</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            @if ($schemeQualifying['capable_engaging'] == 'No')
                                            <input type="radio" id="ageQ2b" name="customRadio1"
                                                class="custom-control-input" checked>
                                            @else
                                            <input type="radio" id="ageQ2b" name="customRadio1"
                                                class="custom-control-input">
                                            @endif
                                            <label class="custom-control-label" for="ageQ2b">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-lg-10">
                                    <label class="control-label"> 3. Insured person has not been gainfully employed
                                        since then.</label>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio">
                                            @if ($schemeQualifying['gainfully_employed'] == 'Yes')
                                            <input type="radio" id="ageQ3a" name="customRadio2"
                                                class="custom-control-input" checked>
                                            @else
                                            <input type="radio" id="ageQ3a" name="customRadio2"
                                                class="custom-control-input">
                                            @endif
                                            <label class="custom-control-label" for="ageQ3a">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            @if ($schemeQualifying['gainfully_employed'] == 'No')
                                            <input type="radio" id="ageQ3b" name="customRadio2"
                                                class="custom-control-input" checked>
                                            @else
                                            <input type="radio" id="ageQ3b" name="customRadio2"
                                                class="custom-control-input">
                                            @endif
                                            <label class="custom-control-label" for="ageQ3b">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.next')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        var age = document.getElementById("ageNoticeDate").value;
        var StatutoryBody = document.getElementById("selectStatutoryBody").value;


        if (StatutoryBody == 'Yes') {
            $('#typeOfStatutoryBody').show();
        } else {
            $('#typeOfStatutoryBody').hide();
        }

        if (parseInt(age) >= 60) {
            $('#ageMoreThan60').show();

        } else {
            $('#ageMoreThan60').hide();
        }

        $('#selectStatutoryBody').change(function () {
            if (this.value == 'Yes') {
                $('#typeOfStatutoryBody').show();
            } else {
                $('#typeOfStatutoryBody').hide();
            }
        });

        $('#ageNoticeDate').change(function () {
            var age = $(this).val();

            if (parseInt(age) >= 60) {
                $('#ageMoreThan60').show();

            } else {
                $('#ageMoreThan60').hide();
            }

        });
    });

</script>
