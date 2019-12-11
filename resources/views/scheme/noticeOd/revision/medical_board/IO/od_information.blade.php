<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/odinfo" method="post" id="reset">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Occupational Disease Date</label>
                                    <input type="date" name="oddate_medical" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name and Address of the Employer for the Last 5 Years of Employment</label>
                                    <textarea name="name$add_medical" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>About the Disease</label>
                                    <textarea name="aboutdisease_medical" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Is it a Disease Related to a Job?</label>
                                    <select class="form-control" data-placeholder="diseaserelatedtojob_medical" tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Death (If applicable)</label>
                                    <input type="date" class="form-control" name="dateofdeath_medical">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Please State the Job and How Insured People are Exposed to Danger</label>
                                    <textarea name="exposeddanger_medical" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Please Explain the Symptoms / Signs Encountered</label>
                                    <textarea name="symptons_medical" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>   
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
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
