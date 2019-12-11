<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/scheme/odinfo" method="post" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        @if(Session::get('messageod'))
                        <div class="card-footer">
                            <div class="alert alert-warning">
                                {{Session::get('messageod')}}
                            </div>
                        </div>
                        @elseif (!empty($messageod))
                        <div class="card-footer">
                            <div class="alert alert-warning">
                                {{$messageod}}
                            </div>
                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Description of Occupational Disease')</label>
                                    @if(!empty($oddata) && isset($oddata->oddesc) && !empty($oddata->oddesc))
                                    <textarea type="text" id="oddesc" name="oddesc" value="" class="form-control form-control clearFields">{{$oddata->oddesc}}</textarea>
                                    @else
                                    <textarea type="text" id="oddesc" name="oddesc" value="" class="form-control form-control clearFields"></textarea>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Is the Disease Related to Employment?')</label>
                                    <select class="form-control" name="emprelated">
                                        <option>Please select</option>
                                        @if (!empty($oddata) == 'Y')
                                        <option value='Y' selected>@lang('Yes')</option>
                                        <option value='N'>@lang('No')</option>
                                        @elseif (!empty($oddata) == 'N')
                                        <option value='Y'>@lang('Yes')</option>
                                        <option value='N' selected>@lang('No')</option>
                                        @else
                                        <option value='Y'>@lang('Yes')</option>
                                        <option value='N'>@lang('No')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Date of Death (if applicable)')</label>
                                    {{-- @if(!empty($oddata) && $oddata->dodeath != '')
                                    <input type="date" id="dodeath" name="dodeath" value="{{$oddata->dodeath}}" class="form-control form-control clearFields">
                                    @else --}}
                                    <input type="date" id="dodeath" name="dodeath" value="" class="form-control form-control clearFields">
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Are the Disease Related to the Occupation?')</label>
                                    <select class="form-control" name="occrelated">
                                        <option>Please select</option>
                                        @if (!empty($oddata) == 'Y')
                                        <option value='Y' selected>@lang('Yes')</option>
                                        <option value='N'>@lang('No')</option>
                                        @elseif (!empty($oddata) == 'N')
                                        <option value='Y'>@lang('Yes')</option>
                                        <option value='N' selected>@lang('No')</option>
                                        @else
                                        <option value='Y'>@lang('Yes')</option>
                                        <option value='N'>@lang('No')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Specify Duties and How Insured Person Exposed to the Danger')</label>
                                    @if(!empty($oddata) && isset($oddata->dutydesc) && !empty($oddata->dutydesc))
                                    <textarea type="text" id="dutydesc" name="dutydesc" value="" class="form-control form-control clearFields">{{$oddata->dutydesc}}</textarea>
                                    @else
                                    <textarea type="text" id="dutydesc" name="dutydesc" value="" class="form-control form-control clearFields"></textarea>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Please Explain Symptoms / Sign Encountered')</label>
                                    @if(!empty($oddata) && isset($oddata->symptom) && !empty($oddata->symptom))
                                    <textarea type="text" id="symptom" name="symptom" value="" class="form-control form-control clearFields">{{$oddata->symptom}}</textarea>
                                    @else
                                    <textarea type="text" id="symptom" name="symptom" value="" class="form-control form-control clearFields"></textarea>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SAVE')</button>
                            {{-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('noticetype.back')</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

            <script>
                function submitform(){
                    $('#reset').find('form').submit();
                    $('.clearFields').val('');
                }
            </script>
{{-- <script src="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> --}}
{{-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" /> --}}

{{-- <script>
    $(document).ready(function() {
        $( "#startdate,#enddate" ).datepicker({
            changeMonth: true,
            changeYear: true,
            firstDay: 1,
            dateFormat: 'dd/mm/yy',
        })
        $( "#startdate" ).datepicker({ dateFormat: 'dd/mm/yy' });
        $( "#enddate" ).datepicker({ dateFormat: 'dd-mm-yy' });

        $('#enddate').change(function() {
            var start = $('#startdate').datepicker('getDate');
            var end   = $('#enddate').datepicker('getDate');

            if (start<end) {
                var days   = (end - start)/1000/60/60/24;
                $('#days').val(days);
            }
            else {
                alert ("You cant come back before you have been!");
                $('#startdate').val("");
                $('#enddate').val("");
                $('#days').val("");
            }
}); //end change function
}); //end ready
</script> --}}
