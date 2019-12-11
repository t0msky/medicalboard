<div class="row p-t-20">  
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Current Date</label>
                <input type="date" name="current_date" id="current_date" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Reshedule Date</label>
                <input type="date" name="reshedule_date" id="reshedule_date" class="form-control">
        </div>
    </div>
</div>
    
<div class="row p-t-20">  
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.investigate_date')</label>
                <input type="date" name="investigate_date" id="investigate_date" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.investigate_time')</label>
                <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                    data-autoclose="true">
                    <input type="text" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                    </div>
                </div>
        </div>
    </div>
</div>
    
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.correspondenceAddress')</label>
            <select class="form-control clearFields" name="category_type">
                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >Employer Premise</option>
                    <option value='' >Insured Person Premise</option>
                    <option value='' >Others</option>
            </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                <input type="text" name="name" id="name" class="form-control">
        </div>
    </div>
</div>
{{-- <div class="row p-t-20"> --}}
    {{-- <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.interviewee_name')</label>
                <input type="text" name="interviewee_name" id="interviewee_name" class="form-control">
        </div>
    </div>
</div> --}}
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class='row'>
    <div class="col-md-4">
        <div class="form-group">
            <label>@lang('scheme/ob.attr.postcode')</label>
            <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>@lang('scheme/ob.attr.city')</label>
            <input type="text" name="city"  value="" class="form-control clearFields" >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/ob.attr.state')</label>
            <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
            <select name='state' id='state' class='form-control'>
                
            </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.attentionTo')</label>
            <input type="text" name="attentionTo"  value="" class="form-control clearFields" > 
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Is the interview location same as correspondence address?</label>
            <select class="form-control clearFields" name="question">
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >Yes</option>
                    <option value='' >No</option>
            </select>
        </div>
    </div>
    <!-- Is the interview location same as correspondence address? DEFAULT YES-->
</div>
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.location')</label>
            <select class="form-control clearFields" name="interviewLocation">
                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >SOCSO Office</option>
                    <option value='' >Employer Premise</option>
                    <option value='' >Insured Person Premise</option>
                    <option value='' >Others</option>
            </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
        <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.interviewAttendees')</label>
            <select class="form-control clearFields" name="interviewLocation">
                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >Employer </option>
                    <option value='' >Insured Person </option>
                    <option value='' >Others</option>
            </select>
        </div>
    </div>
</div>
{{-- <div class="row p-t-20">
    <div class="col-md-8">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.officer_name')</label>
                <input type="text" name="officer_name" id="officer_name" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.officer_email')</label>
                <input type="text" name="officer_email" id="officer_email" class="form-control">
        </div>
    </div>
</div> --}}
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Interview Attendees</label>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="custom_Radio_Employer1" name="custom_Radio2" onClick="others_attendes_list1()" class="custom-control-input">
                    <label class="custom-control-label" for="custom_Radio_Employer1">Employer</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="custom_Radio_insured_person1" name="custom_Radio2" onClick="others_attendes_list1()" class="custom-control-input" onclick="recommendationview_no3()">
                    <label class="custom-control-label" for="custom_Radio_insured_person1">Insured Person</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="others_attendess1" name="custom_Radio2" onClick="others_attendes_list1()" class="custom-control-input" onclick="recommendationview_no3()">
                    <label class="custom-control-label" for="others_attendess1">Others</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="others_A1" style="display:none">
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                    <input type="text" name="address" id="address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">    
                {{-- <label class="control-label">@lang('scheme/appointment.attr.a  ddress')</label> --}}
                    <input type="text" name="address" id="address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                    <input type="text" name="address" id="address" class="form-control">
            </div>
        </div>
    </div>
</div>    
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Document to Request </label>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="custom_Radio_document11" name="custom_Radio" onClick="others_document1()"  class="custom-control-input">
                    <label class="custom-control-label" for="custom_Radio_document11">Document 1</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="custom_Radio_document21" name="custom_Radio" onClick="others_document1()" class="custom-control-input" onclick="recommendationview_no3()">
                    <label class="custom-control-label" for="custom_Radio_document21">Document 2</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-control custom-radio">
                    <input type="radio" id="document_others1" name="custom_Radio" onClick="others_document1()" class="custom-control-input" onclick="recommendationview_no3()">
                    <label class="custom-control-label" for="document_others1">Others</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="others_B1" class="row p-t-20" style="display:none">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">Description</label>
                <input type="text" name="description" id="description" class="form-control">
        </div>
    </div>
</div>
    
    <script>
            function others_attendes_list1() {
        
                // Get the checkbox
                var checkBox = document.getElementById("others_attendess1");
                // Get the output text
                var others_A1 = document.getElementById("others_A1");
        
                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                others_A1.style.display = "block";
                } else {
                others_A1.style.display = "none";
                }
            }
        
            function others_document1() {
        
                // Get the checkbox
                var checkBox = document.getElementById("document_others1");
                // Get the output text
                var others_B1 = document.getElementById("others_B1");
        
                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                others_B1.style.display = "block";
                } else {
                others_B1.style.display = "none";
                }
            }
        
        </script>