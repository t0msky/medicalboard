<div class="modal fade" id="appointment_popup" tabindex="-1" role="dialog" aria-labelledby="appointmentPopup">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header  card-title">
                <h4 class="modal-title" id="appointmentPopup">Appointment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('add_appointment') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date Appointment</label>
                                <input type="date" name="appointment_date" id="appointment_date" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">Time</label>
                            <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                data-autoclose="true">
                                <input type="text" class="form-control" name="appointment_time" value="">
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Correspondence Address')</label>
                            <select class="form-control clearFields" name="correspondence_address"
                                id="correspondence_address">
                                <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                @if(!empty($ref_table)||$ref_table!=null)
                                @foreach($ref_table->correspaddtype as $data)
                                <option value="{{$data->ref_code}}">{{$data->desc_en}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Name')</label>
                            <input type="text" name="appointment_name" id="appointment_name"
                                class="form-control profile_details">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('Address')</label>
                            <input type="text" name="appointment_address1" id="appointment_address1"
                                class="form-control profile_details">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" name="appointment_address2" id="appointment_address2"
                                class="form-control profile_details">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <input type="text" name="appointment_address3" id="appointment_address3"
                                class="form-control profile_details">
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('Postcode')</label>
                            <input type="text" id="appointment_postcode" name="appointment_postcode" value=""
                                class="form-control clearFields profile_details">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('City')</label>
                            <input type="text" name="appointment_city" value=""
                                class="form-control clearFields profile_details">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('State')</label>

                            <select name='appointment_state' id='appointment_state'
                                class='form-control profile_details'>
                                <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                @foreach($ref_table->state as $s)
                                <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('P.O Box')</label>
                            <input type="text" name="appointment_appointment_box" id="appointment_appointment_box"
                                value="" class="form-control clearFields profile_details">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('Locked Bag')</label>
                            <input type="text" name="appointment_locked_bag" id="appointment_locked_bag" value=""
                                class="form-control clearFields profile_details">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('W.D.T')</label>
                            <input type="text" name="appointment_wdt" id="appointment_wdt" value=""
                                class="form-control clearFields profile_details">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Attention To')</label>
                            <input type="text" name="appointment_attentionTo" value="" class="form-control clearFields">
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">Is the interview location same as correspondence
                                address?</label>
                            <select class="form-control clearFields" name="appointment_question"
                                id="appointment_question">
                                <option value='1' selected>Yes</option>
                                <option value='2'>No</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row" id="div_location">
                        <div class="form-group col-md-12 col-lg-4">
                            <label class="control-label">@lang('Location')</label>
                            <select class="form-control clearFields" name="appointment_interviewLocation"
                                id="appointment_interviewLocation">
                                <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                @if(!empty($ref_table)||$ref_table!=null)
                                @foreach($ref_table->intvloc as $data)
                                <option value="{{$data->ref_code}}">{{$data->desc_en}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div id="location_address">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Address')</label>
                                <input type="text" name="location_address1" id="location_address1"
                                    class="form-control location_address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="location_address2" id="location_address2"
                                    class="form-control location_address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="location_address3" id="location_address3"
                                        class="form-control location_address">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <table class="table-sm " id="add_others">
                                <thead>
                                    <tr>
                                        <h6 class="card-title-sub">@lang('Interview Attendences')</h6>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ref_table->ivattendees as $idx => $doclist)
                                    <tr data-expanded="true" class="workrow">
                                        <td>
                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="interview_attendees{{$idx}}" name="list_doc[{{$idx}}]"
                                                    value="{{$doclist->ref_code}}">
                                                <label class="custom-control-label"
                                                    for="interview_attendees{{$idx}}">{{$doclist->desc_en}}</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="others_A" style="display:none">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label class="control-label">@lang('Address')</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-12">
                            <table class="table-sm " id="table_document_request">
                                <thead>
                                    <tr>
                                        <h6 class="card-title-sub">@lang('Document To Request')</h6>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($doclist_select)||$doclist_select!=null)
                                    @foreach($doclist_select as $idx => $doclist)
                                    @if ($doclist->doctype !="C16")
                                    <tr data-expanded="true" class="workrow">
                                        <td style="display:none;"> <input type="hidden" value="{{$idx}}"> </td>
                                        <td>
                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="document_request{{$idx}}" name="document_request[{{$idx}}]"
                                                    value="{{$doclist->doctype}}|{{$doclist->docdescen}}">
                                                <label class="custom-control-label"
                                                    for="document_request{{$idx}}">{{$doclist->docdescen}}</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                    id="btn_other_document"> @lang('Add Others Document')</button>
                            </div>
                        </div>
                    </div>
                    <div id="others_B" class="form-row" style="display:none">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                    <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function others_attendes_list() {

        // Get the checkbox
        var checkBox = document.getElementById("others_attendess");
        // Get the output text
        var others_A = document.getElementById("others_A");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            others_A.style.display = "block";
        } else {
            others_A.style.display = "none";
        }
        P
    }

    function onLoc() {
        if (name == 'empPremise') {

        } else if (name == 'obPremise') {

        } else if (name == 'others') {

        } else {

        }
    }


    $(document).ready(function () {
        var array_no_others = 0;
        $('#interview_attendees2').on('change', function () {
            if (this.checked == true) {
                $('#others_A').show();
            } else {
                $('#others_A').hide();
                $('#others_A').val("");
            }
        });
        $("#btn_other_document").click(function () {
            var no = $('#table_document_request tr:last td:first').find("input").val();
            array_no_others++;
            no++;
            $("#table_document_request > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td style="display:none;"> <input type="hidden" value=' +
                no + '> </td><td>' +
                '<div class="custom-control custom-checkbox mr-sm-6">' +
                '<input type="checkbox" class="custom-control-input cb_1" name="document_request[' +
                no +
                ']" id="document_request' + no + '" value="C16" data-value="' + no + '">' +
                '<label class="custom-control-label" for="document_request' + no +
                '">Others</label>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '&nbsp;&nbsp;&nbsp;&nbsp;' +
                '<input type="text" required style="display:none;" name="document_request_other[' +
                array_no_others +
                ']" id="description' + no + '" class="form-control" >' +
                '</td>' +
                '</tr>'
            );
        });
        $('#table_document_request').on('change', '.cb_1', function () {
            if (this.checked == true) {
                $('#description' + $(this).data("value")).show();
            } else {
                $('#description' + $(this).data("value")).hide();
                $('#description' + $(this).data("value")).val("");
            }
        });

        $('#appointment_question').change(function () {
            if (this.value == '1') {
                $('#div_location').show();
            } else {
                $('#div_location').hide();
                $('#appointment_interviewLocation option[value="please select"]').prop("selected",
                    true);
            }
        });
        $("select[name=correspondence_address]").change(function () {
            if (this.value == '3') {
                $('.profile_details').attr('readonly', false);
            } else {
                $('.profile_details').attr('readonly', true);
            }
            var data_correspondence = $("select[name=correspondence_address]").val();
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: 'GET',
                data: {
                    id: data_correspondence,
                },
                url: "{{route('selected_appointment')}}",
                success: function (data) {

                    var jsonDataprofile = JSON.parse(data);
                    if(data_correspondence == 1){
                        var name =jsonDataprofile.empname;
                        var add1 =jsonDataprofile.add1;
                        var add2 =jsonDataprofile.add2;
                        var add3 =jsonDataprofile.add3;
                        var postcode =jsonDataprofile.postcode;
                        var city =jsonDataprofile.city;
                        var pobox =jsonDataprofile.pobox;
                        var locked_bag =jsonDataprofile.locked_bag;
                        var wdt =jsonDataprofile.wdt;
                        var state_code =jsonDataprofile.state_code;
                    }
                    else if(data_correspondence == 2)
                    {
                        var name =jsonDataprofile.name;
                        var add1 =jsonDataprofile.copadd1;
                        var add2 =jsonDataprofile.copadd2;
                        var add3 =jsonDataprofile.copadd3;
                        var postcode =jsonDataprofile.cop_postcode;
                        var city =jsonDataprofile.cop_city;
                        var pobox =jsonDataprofile.cop_pobox;
                        var locked_bag =jsonDataprofile.cop_lockedbag;
                        var wdt =jsonDataprofile.cop_wdt;
                        var state_code =jsonDataprofile.cop_statecode;
                    }
                   
                    $('#appointment_name').prop("value", name);
                    $('#appointment_address1').prop("value", add1);
                    $('#appointment_address2').prop("value", add2);
                    $('#appointment_address3').prop("value", add3);
                    $('#appointment_postcode').prop("value", postcode);
                    $('#appointment_city').prop("value", city);
                    $('#appointment_appointment_box').prop("value", pobox);
                    $('#appointment_locked_bag').prop("value", locked_bag);
                    $('#appointment_wdt').prop("value", wdt);
                    $("#appointment_state option[value=" + state_code + "]").attr('selected', 'selected');
                    
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }
            });


        });
        $("select[name=appointment_interviewLocation]").change(function () {
            if (this.value == '1') {
                $('#location_address').hide();
            } else if (this.value == '2' || this.value == '3') {
                $('.location_address').attr('readonly', true);
                $('#location_address').show();
            } else {
                $('#location_address').show();
                $('.location_address').attr('readonly', false);
            }
        });


    });

</script>
