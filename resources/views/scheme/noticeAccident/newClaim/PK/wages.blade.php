
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                        <input type="hidden" name="acc_date" id="acc_date" value="'+month+'">
                        {{-- dd($wages) --}}
                        @if(!empty($wages))
                            @foreach ($wages as $key => $wi) 
                        {{-- dd($wi->contribution) --}}

                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingwages">
                                    <h6 class="mb-0 card-title-sub">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapsewages{{$key+1}}" aria-expanded="true" aria-controls="collapse"><i class="fa fa-plus"></i>
                                          @lang('Employer Info') {{$key+1}}
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsewages{{$key+1}}" class="collapse show" role="tabpanel" aria-labelledby="headingwages">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Employer Code')</label>
                                                    <input type="text" id="empcode_{{$key}}" name="empcode" value="{{$wi->empcode}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Company Name')</label>
                                                    <input type="text" id="empname_{{$key}}" name="empname" value="{{$wi->empname}}" class="form-control" >
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('Commencement Date')</label><span class="required">*</span>
                                                    <input type="date" id="commencementdate_{{$key}}" value="{{ Carbon\Carbon::parse(strtotime($wi->startdate))->format('Y-m-d') }}" class="form-control commencementdate" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('End Date')</label>
                                                    <input type="date" id="enddate_{{$key}}" value="{{ Carbon\Carbon::parse(strtotime($wi->enddate))->format('Y-m-d') }}" class="form-control enddate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-12">
                                                <div class="card">
                                                    <label>@lang('scheme/wages.attr.details_wages_accd')</label>
                                                    <div class="table-responsive">
                                                        <table id="table_wages{{$key}}" class="table table-bordered"
                                                            data-toggle-column="first">
                                                            <thead>
                                                                <tr>
                                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('No.')</th>
                                                                    <th style='width:9%' class="text-center">@lang('Year')</th>
                                                                    <th style='width:16%' class="text-center">@lang('Month')</th>
                                                                    <th style='width:15%' class="text-center">@lang('Wages')</th>
                                                                    <th style='width:15%' class="text-center">@lang('Contribution Paid')</th>
                                                                    <th style='width:15%' class="text-center">@lang('Contribution Payable')</th>
                                                                    {{-- <th style='width:15%' class="text-center">@lang('wages.attr.contribution')</th> --}}
                                                                    <th style='width:15%' class="text-center">@lang('Contribution Surplus')</th>
                                                                    <th style='width:5%' class="text-center">@lang('Reject')</th>
                                                                    <th style='width:20%' class="text-center">@lang('Reason')</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{-- @for ($i = 0; $i < 6; $i++) --}}
                                                            @php $i = 0; @endphp
                                                            @foreach ($wi->contribution as $i => $contribution)

                                                                @if(isset($contribution->partial )  && $contribution->partial == 'Y') 
                                                                <tr class="tr_{{$i}}" id="tr_{{$key}}_{{$i}}" style="background-color: #E8B176;" data-expanded="true">
                                                                @else
                                                                <tr class="tr_{{$i}}" id="tr_{{$key}}_{{$i}}" data-expanded="true">
                                                                @endif
                                                                        <td>{{$i+1}}</td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <input type="text" id="year_{{$key}}_{{$i}}" name="year[]" value="@if(isset($contribution->year)){{$contribution->year}}@endif" class="form-control"> -->
                                                                                @if(isset($contribution->year)){{$contribution->year}}@endif
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                                    <option>@lang('scheme/wages.attr.please_select')</option>
                                                                                    <option value="1" @if(isset($contribution->month) && $contribution->month == 1) selected @endif>@lang('scheme/wages.attr.january')</option>
                                                                                    <option value="2" @if(isset($contribution->month) && $contribution->month == 2) selected @endif>@lang('scheme/wages.attr.february')</option>
                                                                                    <option value="3" @if(isset($contribution->month) && $contribution->month == 3) selected @endif>@lang('scheme/wages.attr.march')</option>
                                                                                    <option value="4" @if(isset($contribution->month) && $contribution->month == 4) selected @endif>@lang('scheme/wages.attr.april')</option>
                                                                                    <option value="5" @if(isset($contribution->month) && $contribution->month == 5) selected @endif>@lang('scheme/wages.attr.may')</option>
                                                                                    <option value="6" @if(isset($contribution->month) && $contribution->month == 6) selected @endif>@lang('scheme/wages.attr.june')</option>
                                                                                    <option value="7" @if(isset($contribution->month) && $contribution->month == 7) selected @endif>@lang('scheme/wages.attr.july')</option>
                                                                                    <option value="8" @if(isset($contribution->month) && $contribution->month == 8) selected @endif>@lang('scheme/wages.attr.august')</option>
                                                                                    <option value="9" @if(isset($contribution->month) && $contribution->month == 9) selected @endif>@lang('scheme/wages.attr.september')</option>
                                                                                    <option value="10" @if(isset($contribution->month) && $contribution->month == 10) selected @endif>@lang('scheme/wages.attr.october')</option>
                                                                                    <option value="11" @if(isset($contribution->month) && $contribution->month == 11) selected @endif>@lang('scheme/wages.attr.november')</option>
                                                                                    <option value="12" @if(isset($contribution->month) && $contribution->month == 12) selected @endif>@lang('scheme/wages.attr.december')</option>
                                                                                </select> -->
                                                                                
                                                                                    @if(isset($contribution->month) && $contribution->month == 1) @lang('January') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 2) @lang('February') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 3) @lang('March') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 4) @lang('April') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 5) @lang('May') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 6) @lang('June') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 7) @lang('July') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 8) @lang('August') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 9) @lang('September') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 10) @lang('October') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 11) @lang('November') @endif
                                                                                    @if(isset($contribution->month) && $contribution->month == 12) @lang('December') @endif

                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <input type="text" id="wages_{{$key}}_{{$i}}" name="wages" value="@if(isset($contribution->wages)){{$contribution->wages}}@endif" class="form-control wages">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <input type="text" id="contrpayable_{{$key}}_{{$i}}" name="contrpayable" value="@if(isset($contribution->contrpayable)){{$contribution->contrpayable}}@endif" class="form-control"> -->
                                                                                <span id="contrpayable_{{$key}}_{{$i}}">@if(isset($contribution->contrpayable)){{$contribution->contrpayable}}@endif</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <input type="text" id="contrpaid_{{$key}}_{{$i}}" name="contrpaid" value="@if(isset($contribution->contrpaid)){{$contribution->contrpaid}}@endif" class="form-control"> -->
                                                                                <span id="contrpaid_{{$key}}_{{$i}}">@if(isset($contribution->contrpaid)){{$contribution->contrpaid}}@endif</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <input type="text" id="surplus_{{$key}}_{{$i}}" name="surplus" value="@if(isset($contribution->surplus)){{$contribution->surplus}}@endif" class="form-control"> -->
                                                                                <span id="surplus_{{$key}}_{{$i}}">@if(isset($contribution->surplus)){{$contribution->surplus}}@endif</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                                <label class="custom-control-label" for="customCheck1"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-md-15">
                                                                                <!-- <input type="text" id="reason_{{$key}}_{{$i}}" name="reason" value="@if(isset($contribution->reason)){{$contribution->reason}}@endif" class="form-control"> -->
                                                                                @if(isset($contribution->reason)){{$contribution->reason}}@endif
                                                                            </div>
                                                                        </td>
                                                                    </tr>  
                                                                    @php $i++; @endphp
                                                                @endforeach
                                                                {{-- @endfor --}}
                                                            </tbody>
                                                        </table>
                                                        <div class="clearfix"></div>
                                                        <div style="background-color: #edfcfa; padding: 10px; border-left: 5px solid #40e0d0">
                                                        <p><b> NOTE: </b> Colored row refer to accumulated days in a month below 24 days</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div> <br>
                        <div class='row' id=buttonlist>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="reset" class="btn btn waves-effect waves-light btn-info">@lang('button.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>

                                    {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('select[name=minimumwages]').change(function () {
            if (this.value == 'Y') {
            $('#similar').prop("disabled", true); 
            }
            else {
            $('#similar').prop("disabled", false);   
            }
        });

        $("#similar").on("change", function () {        
            $modal = $('#exampleModal');
            if($(this).val() === 'Y'){
                $modal.modal('show');
                $('#minimumwages').prop("disabled", true); 
            }
            else {
                $modal.modal('hide');
                $('#minimumwages').prop("disabled", false);   
                $('#similar_work').hide(); 
            }
        });
        $('#similar_work').hide();
        $("#btn_search").click(function (){
            $modal.modal('hide');
            $('#similar_work').show();
            $('#buttonlist').hide();
        });
        // $('#additional_wages').hide();
        // $("#btn_addemployer").click(function (){
        //     $('#additional_wages').show();
        //     $('#buttonlist').hide();
        // });

        $(".commencementdate").on("change", function (event) {  
            // var current_id = event.target.id;
            //     var split_id = current_id.split("_");
            //     var id = split_id[1];

                count24days();
        });
        $(".enddate").on("change", function (event) {  

                count24days();
        });

        $('.wages').keyup(function() {

                var current_id = event.target.id;
                console.log("current_id: "+current_id);
                var wages = this.value;
                console.log("wages: "+wages);
                var split_id = current_id.split("_");
                var id = split_id[1];
                var tr = split_id[2];


                $.ajax({
                headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                type: 'GET',
                data: {
                    wages: wages
                        // caserefno: caserefno
                      },
                url: "{{ route('get_wages_contrpayable') }}",
                // global: false,
                success: function (data) {
                    console.log("data :" +data);

                    if(data !== 'null' && data !== '' && data !== null){

                        var details = JSON.parse(data);
                        
                        var contrpayable = details.aw_totalcontr;
                        var contrpaid = $('#contrpaid_'+id+'_'+tr).html();

                        var surplus = parseFloat(contrpaid)  - parseFloat(contrpayable);
                        $('#contrpayable_'+id+'_'+tr).text(parseFloat(contrpayable).toFixed(2));
                        $('#surplus_'+id+'_'+tr).text(surplus.toFixed(2));

                        console.log("id: "+id+" tr: "+tr);
                        console.log("surplus: " +surplus);
                        console.log("contrpayable: "+contrpayable);
                        console.log("contrpaid: "+contrpaid);
                    
                    }else{

                        $('#contrpayable_'+id+'_'+tr).text("0.00");
                        $('#surplus_'+id+'_'+tr).text("0.00");

                    }

                }
                // ,
                //  error: function(XMLHttpRequest, textStatus, errorThrown) { 
                //     alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                // }  
                });

      
        });
    });

    function count24days(){

        var row_table = $('#table_wages0 tbody > tr').length;

        var result = [];
        for (var d=0; d<row_table; d++){

         result[d] = [];

            
        }

        $('.commencementdate').each(function (index, value) {

            var current_id = $(this).attr('id');
            var split_id = current_id.split("_");
            var id = split_id[1];

            // var accidentdate = '2013-07-02';
            var month = $month;
            var accidentdate = $('#acc_date').val();
            var accidentdate = new Date(accidentdate);
            // alert(id);
            var startdate = $("#commencementdate_"+id).val();
            var start_date = new Date(startdate);
            var enddate = $("#enddate_"+id).val();
            var end_date = new Date(enddate);
            var end_date_of_month = new Date(enddate);
            
            
            var start_month = start_date.getMonth(); 
            // start_month = start_month + 1;

            var end_month = end_date.getMonth(); 
            // end_month = end_month + 1;

            var month_accident = accidentdate.getMonth(); 

            // month = month_accident + 1;
            month = month_accident;

            var new_date = new Date(enddate);
            // var i = -1;
            var this_year = new_date.getFullYear();

            if (enddate == '' || enddate == null || end_month > month_accident){ //in case currently working
                enddate = accidentdate;
            }

            for (var d=0; d<row_table; d++){

                var month = month -1; 

                if(month == -1){ // bulan 12 ^-^ hihi
                    month = 11;

                    this_year = this_year - 1;
                    new_date.setFullYear(this_year); //turun satu tahun hihi
                }
                
                console.log("this_year: "+this_year); 
                console.log("this_month: "+month); 


                if(month == end_month){ // if bulan ni sama dengan Employment End Date


                    new_date.setDate(1); 
                    new_date.setMonth(month); 

                    console.log("first date of month: "+new_date+ " end_date: "+end_date);

                    var end = end_date.getDate(); // end date of month

                    for(let i = 1; i <= end; i++){

                        var date = new_date.getFullYear() + '-' + (new_date.getMonth() < 10? '0'+new_date.getMonth(): new_date.getMonth()) +'-'+ (i < 10 ? '0'+ i: i);
                        if(result[d].indexOf(date) == -1){
                            result[d].push(date);
                        }

                    }

                }else if (month == start_month){ //if bulan ni sama dengan Employment Start Date
                    new_date.setDate(1); 
                    new_date.setMonth(month); 
                    
                    var enddayofmonth = new Date(this_year, month + 1, 0).getDate(); //untuk getdate kena letak number bulan betul
                    var end_date_of_month = new Date(this_year, month, enddayofmonth);


                    console.log("Last date of month: "+enddayofmonth);
                    console.log("start_date: "+start_date+ " Last date of month: "+end_date_of_month);

                    var start = new Date(start_date).getDate();

                    for(let i = enddayofmonth; i >= start; i--){

                        var date = end_date_of_month.getFullYear() + '-' + (end_date_of_month.getMonth() < 10? '0'+end_date_of_month.getMonth(): end_date_of_month.getMonth()) +'-'+ (i < 10 ? '0'+ i: i);
                        if(result[d].indexOf(date) == -1){
                            result[d].push(date);
                        }
                    }

                }else if ( (start_month < month ) && (month < end_month)){


                    new_date.setDate(1); 
                    new_date.setMonth(month); 

                    var enddayofmonth = new Date(this_year, month + 1, 0).getDate();
                    var end_date_of_month = new Date(this_year, month, enddayofmonth);
    
                    console.log("Last date of month: "+enddayofmonth);
                    console.log("first date of month: "+new_date+ " Last date of month: "+end_date_of_month);

                    for(let i = 1; i <= enddayofmonth; i++){
                        var date = new_date.getFullYear() + '-' + (new_date.getMonth() < 10? '0'+new_date.getMonth(): new_date.getMonth()) +'-'+ (i < 10 ? '0'+ i: i);
                        if(result[d].indexOf(date) == -1){
                            result[d].push(date);
                        }
                    }
                
                }

            }
            console.log("///////////////////////////////////////////////////////////////////////////////");
        });
        

        for (var d=0; d<row_table; d++){
 
            var days_work = result[d].length;

        console.log("month "+d+ ": "+ result[d]);
        console.log("length :"+ days_work);

        

        if ( days_work < 24){

            $(".tr_"+d).prop("style", "background-color: #E8B176;");

        }else{

            $(".tr_"+d).prop("style", "");
        }

        }
    }

    const _MS_PER_DAY = 1000 * 60 * 60 * 24;

    // a and b are javascript Date objects
    function dateDiffInDays(a, b) {
    // Discard the time and time-zone information.
    const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
    const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

    return Math.floor((utc2 - utc1) / _MS_PER_DAY);
    }
</script>