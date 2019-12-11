@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/scheme/accidentdatetime" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('Accident Date Time')</h5>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Date')</label>
                                    <input type="date" class="form-control" id="selectaccdate1"  name="date" value="{{ old('date') }}" onchange='selectaccdate()' required>
                                    <label class="control-label" id='lblmcerror' style='color:red'></label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Time')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="time" class="form-control" id='time' name="time" value="{{ old('time') }}" onchange='selectaccdate()' required>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                            {{-- <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('employerDetails.attr.employerCode')</label>
                                    <input type="text" class="form-control" name="empcode" id="empcode" value={{-- {{$checkaccddate->empcode}}>
                                </div>
                            </div>  --}}
                        </div>

                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-actions">
                        <button type="submit" class="btn waves-effect waves-light btn-success" id='btnsubmitacc' onclick="accdatesubmit()" disabled>
                            @lang('Next')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('Cancel')</button>
                        
                    </div>
                    </div>
                        </div>
                    
                    @if(Session::get('messagent')) 
                    <br/>
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagent')}}
                            </div>

                        </div>
                        
                        @endif
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function selectaccdate()
{
    var startdate = document.getElementById('selectaccdate1').value;
    var acctime = document.getElementById('time').value;
    acctime = acctime+ ':00';
    
    
    var date = new Date();
    var curtime = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
    
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var mm  = mm < 10 ? '0' + mm : '' + mm; 
   
    var yyyy = today.getFullYear();
    
    
    var currdate = yyyy + '-' + mm + '-' + dd;
    //alert(currdate);
    var days = GetDays(startdate,currdate);
    var submitbutton = document.getElementById('btnsubmitacc');
    //alert(days);
    if (days > 0)
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = 'Accident date must not after current date';
        submitbutton.disabled = true;
        return;
    }
    else if (days == 0)
    {
        var acctime = acctime.replace(":", "");
        acctime = acctime.replace(":", "");
        var curtime = curtime.replace(":", "");
        curtime = curtime.replace(":", "");
        
        //alert(acctime);
        //alert(curtime);
        
        if (acctime > curtime)
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = 'Accident date must not after current date';
            submitbutton.disabled = true;
            return;
        }
        else
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = '';
            submitbutton.disabled = false;
        }
    }
    else
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = '';
        submitbutton.disabled = false;
    }
   
   /*
    if (startdate > currdate)
    {
        
         
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = 'The date must not after current date';
        document.getElementById('selectaccdate1').value = "";
       submitbutton.disabled = true;
        return;
       
      
    }
    else
    {
        
        var lblmcerror = document.getElementById('lblmcerror');
        lblmcerror.innerHTML  = '';
         submitbutton.disabled = false;
    }*/
    
}

function GetDays(startdate, enddate){
    var dropdt = new Date(startdate);
    dropdt = dropdt.getTime();
    
    var pickdt = new Date(enddate);
    pickdt = pickdt.getTime();
    
    //var one_day=1000*60*60*24;
    //var difference_ms = pickdt - dropdt;
    //alert(dropdt + '/' + pickdt);
    //return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    return Math.round((dropdt - pickdt) / (24 * 3600 * 1000));
}   

</script>
@endsection



