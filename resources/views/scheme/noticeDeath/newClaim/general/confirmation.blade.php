<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/confirmation_death" method="POST">


                    @if(Session::get('messageconf'))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messageconf')}}
                        </div>

                    </div>
                    @elseif (!empty($messageconf))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messageconf}}
                        </div>

                    </div>
                    @endif
                    <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="card m-b-0">
                        {{-- <div class="card-header" role="tab" id="applicantinfo0" style="display:none">
                           <h6 class="card-subtitle">
                               <a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion0" href="#applicant_collapse0 aria-expanded="false" aria-controls="collapseTwo2">
                                   @lang('scheme/applicantDetails.title') 
                               </a>
                               <!-- <a onclick="delete_div(0)" style="text-align:right !important; color:red"><i class="far fa-trash-alt"></i></a> -->
                           </h6>
                       </div> --}}
                        <!-- <div id="applicant_collapse0" class="collapse" role="tabpanel"> -->

                        <div class="col-10-applicant">
                            <div class="card">
                                <div class="table-responsive m-t-40">
                                    <table id="tableClaimant"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="40" width="50%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Identification No</th>
                                                <th width="40%">Name</th>
                                                <th>Acceptance Stamp Date</th>
                                                <th>Confirmation Completed?</th>
                                                <th>Completion Date</th>
                                                <th>Type Of Claim</th>
                                            </tr>
                                        </thead>
                                        <tbody class='align-middle'>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- @if (!empty($confirmation -> jsection)) 
               @foreach($confirmation -> jsection as $d) --}}



                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->


                                @if (!empty ($confirmation))

                                <button type="submit" name="action" value="Submit"
                                    class="btn waves-effect waves-light btn-primary" id="submit"
                                    onclick="return confirm('Are you sure want to submit?');">@lang('scheme/confirmation.submit')</button>
                                <a href="/Scheme/deathpreview" id='preview' type="button" name="action" value="Preview"
                                    class="btn btn-secondary">@lang('button.preview')</a>

                                @else

                                <button type="submit" name="action" value="Submit"
                                    class="btn waves-effect waves-light btn-primary" id="submit"
                                    disabled>@lang('scheme/confirmation.submit')</button>
                                <a href="/Scheme/deathpreview" id='preview' type="button" name="action" value="Preview"
                                    class="btn btn-secondary">@lang('button.preview')</a>

                                @endif

                                <button type="submit" name="action" value="Save"
                                    class="btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function fieldchange() {
        //alert('test');
        var submitbutton = document.getElementById('sa-warning');
        //alert(submitbutton);
        submitbutton.disabled = true;
        //alert('test');
    }

    function statechange() {

        var statecode = $("#state1").val();
        // alert(statecode);
        $('#brname').find('option').not(':first').remove();
        if (statecode) {

            $.ajax({
                url: '/branch/' + statecode,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {

                            var id = data[i].brcode;
                            var name = data[i].brname;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#brname").append(option);
                        }
                    }

                }

            });
        }
        fieldchange();
    }

</script>

<script>
    function checkstampdate() {

        var stampdate = document.getElementById('stampdate').value;
        var lblstamperror = document.getElementById('lblstamperror');
        var btnsubmit = document.getElementById('btnsubmit');
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        var currdate = yyyy + '-' + mm + '-' + dd;
        var days2 = getdiff(currdate, stampdate);

        if (days2 > 1) {
            lblstamperror.innerHTML = 'Stamp date must not after current date';
            btnsubmit.disabled = true;
            return;
        } else {
            lblstamperror.innerHTML = '';
            btnsubmit.disabled = false;
        }
    }

    function getdiff(startdate, enddate) {
        var dropdt = new Date(startdate);
        var pickdt = new Date(enddate);
        return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    }

</script>
