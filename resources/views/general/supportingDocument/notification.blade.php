<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="col-9">
                    <div class="table-responsive" id="table-generated">
                        <table class="table table-sm table-bordered" data-toggle-column="first">
                            <thead>
                                <tr>
                                    <th style='width:1%'>@lang('No')</th>
                                    <th style='width:43%'>@lang('Send to')</th>
                                    <th style='width:45%'>@lang('Notification type')</th>
                                    <th style='width:10%'>@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($sendnotification->notification as $noti)
                                <tr>
                                    <td><input id="selected_notitype" name="selected_notitype" type="hidden"
                                            value="{{ $noti->nt_id }}">{{ $noti->nt_id }}</td>
                                    <td>

                                        @foreach($ref_table->notisend_to as $sendto)
                                        @if($noti->nt_sendto == $sendto->ref_code)

                                        {{$sendto->desc_en}}
                                        @endif
                                        @endforeach

                                    </td>
                                    <td>

                                        @foreach($ref_table->case_type as $casetype)
                                        @if($casetype->ref_code== $noti->nt_notitype)
                                        {{ $casetype->desc_en }}
                                        @endif
                                        @endforeach

                                    </td>
                                    <td style="align:center;width:10%;"><a id="view_noti" data-id="{{$noti->nt_id}}"
                                            data-toggle="modal" data-target="#pop_view"><i
                                                class="fas fa-file-alt"></i></a> |
                                        <a id='view' href="{{ route('view.letter',$noti->nt_id) }}" target="_blank"><i
                                                class="fas fa-file-pdf"></i></a> | <a id='view' href=""><i
                                                class="fas fa-retweet"></i></a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <div class="form-actions">

                            <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
                                data-target="#pop2">@lang('Add Notification')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------POPUP ADD NOTIFICATION ----------------->
<div class="col-md-20">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('send_notification') }}" method="POST">

                @csrf
                <!-- sample modal content -->
                <div id="pop2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" style="width:60%;">
                        <div class="modal-content">
                            <div class="col-md-20" id="addNoti">
                                <h5 class="card-title" id="vcenter">@lang('Notification')<button type="button"
                                        class="close" data-dismiss="modal" aria-hidden="true">×</button></h5>
                                <div class="modal-body">

                                    <!---------Others ------------->


                                    <div class='row'>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('Send To')</label>
                                                <select class="form-control" name="send_to"
                                                    data-placeholder="idType_invalidity" tabindex="2"
                                                    id="selectEmployer">
                                                    <option selected disabled hidden>Please Choose </option>
                                                    @foreach($ref_table->notisend_to as $noti_sendto)
                                                    <option selected disabled hidden>Please Choose </option>
                                                    <option value="{{$noti_sendto->ref_code}}">{{$noti_sendto->desc_en}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Select Employer')</label>
                                                <select class="form-control" name="select_employer"
                                                    data-placeholder="idType_invalidity" tabindex="2">
                                                    <option selected disabled hidden>Please Select</option>
                                                    @if(!empty($sendnotification->casewagesemp))
                                                    @foreach($sendnotification->casewagesemp as $wages_employer)
                                                    <option value="{{$wages_employer->empcode}}">
                                                        {{$wages_employer->empname}} </option>
                                                    @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>@lang('Notification Type')</label>

                                                <select class="form-control" name="notification_type">
                                                    @foreach($ref_table->case_type as $noti)
                                                    <option selected disabled hidden>Please Choose </option>
                                                    <option value="{{$noti->ref_code}}">{{$noti->desc_en}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='row' style="display:none;" id="othersNoti">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Name')</label>
                                                <input type="text" name="name_others" id="name" value=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>@lang('Email')</label>
                                                <input type="text" name="email_others" id="email" value=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>@lang('Address')</label>
                                                <input type="text" name="add1" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="add2" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="add3" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!------------------------LIST OF DOCUMENT ------------->


                                    <div class="col-md-12">
                                        <div class="table-responsive" style='width:100%'>
                                            <table class="table-sm " id="add_others">

                                                <thead>
                                                    <tr>
                                                        <h6 class="card-title-sub">@lang('List Of Document')</h6>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($doclist_select as $idx => $doclist)
                                                    @if ($doclist->doctype !="C16")
                                                    <tr data-expanded="true" class="workrow">
                                                        <td style="display:none;"> <input type="hidden"
                                                                value="{{$idx}}"> </td>
                                                        <td>


                                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="list_doc{{$idx}}" name="list_doc[{{$idx}}]"
                                                                    value="{{$doclist->doctype}}|{{$doclist->docdescen}}">
                                                                <label class="custom-control-label"
                                                                    for="list_doc{{$idx}}">{{$doclist->docdescen}}</label>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                                    id="but_others">
                                                    @lang('Add Others Document')</button>
                                            </div>
                                        </div>

                                        <h6 class="card-title-sub">@lang('Additional Information')</h6>
                                        <div class="col-md-12">

                                            <br>

                                            <div class="table-responsive">
                                                <table class="table table-sm table-bordered" id="add_infor">

                                                    <thead>
                                                        <tr>
                                                            <th style='width:1%'>@lang('No')</th>
                                                            <th style='width:99%'>@lang('Information')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-expanded="true" class="workrow">
                                                            <td><input type="hidden" value="1">1.</td>
                                                            <td>
                                                                <input type="text" name="information[0]"
                                                                    class="form-control">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-actions">
                                                    <button type="button"
                                                        class="btn btn waves-effect waves-light btn-info">@lang('Preview
                                                        Letter')</button>

                                                    <button type="button"
                                                        class="btn btn waves-effect waves-light btn-info"
                                                        id="addinformation">@lang('Add Additional Info')</button>
                                                </div>

                                            </div>

                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect"
                                                    data-dismiss="modal">Reset</button>
                                                <button type="submit"
                                                    class="btn btn-success waves-effect waves-light">Send
                                                    Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<!------------POPUP VIEW NOTIFICATION ----------------->
<div id="pop_view" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:60%;">
        <div class="modal-content">
            <div class="col-md-20" id="addNoti">
                <div class="modal-header">

                    <h4 class="modal-title" id="vcenter">Notification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Send To')</label>
                                <select class="form-control" name="view_sendto" data-placeholder="idType_invalidity"
                                    tabindex="2" id="view_sendto">

                                    @foreach($ref_table->notisend_to as $noti_sendto)

                                    <option value="{{$noti_sendto->ref_code}}">{{$noti_sendto->desc_en}}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Employer')</label>
                                <select class="form-control" name="view_employer" id="view_employer"
                                    data-placeholder="idType_invalidity" tabindex="2">

                                    @if(!empty($sendnotification->casewagesemp))
                                    @foreach($sendnotification->casewagesemp as $wages_employer)
                                    <option value="{{$wages_employer->empcode}}">
                                        {{$wages_employer->empname}} </option>
                                    @endforeach
                                    @endif

                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Notification Type')</label>
                                <select class="form-control" name="view_noticetype" id="view_noticetype">
                                    @foreach($ref_table->case_type as $noti)

                                    <option value="{{$noti->ref_code}}">{{$noti->desc_en}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Name')</label>
                                <input type="text" name="view_name" id="view_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Email')</label>
                                <input type="text" name="view_email" id="view_email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('Address')</label>
                                <input type="text" name="view_address1" id="view_address1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="view_address2" id="view_address2" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="view_address3" id="view_address3" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!------------------------LIST OF DOCUMENT ------------->
                    <div class="col-md-12">
                        <div class="table-responsive" style='width:100%'>
                            <table class="table-sm " id="tb_view_list_document">

                                <thead>
                                    <tr>
                                        <h4><label> List Of Document </label></h4>
                                    </tr>
                                </thead>
                                <tbody>

                            </table>
                        </div>
                        <h4><label>Additional Information</label></h4>
                        <div class="col-md-12">
                            <br>
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="tb_view_add_info">
                                    <thead>
                                        <tr>
                                            <th style='width:1%'>@lang('No.')</th>
                                            <th style='width:10%'>@lang('Information')
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script>
    array_no_info = "0";
    array_no_others = "0";
    $(document).ready(function () {
        $('#checkbox12').on('change', function () {

            if (this.checked == true) {
                $('#description').show();
            } else {
                $('#description').hide();
                $('#description').val("");
            }
        });

        $("#addinformation").click(function () {
            var no = $('#add_infor tr:last td:first').find("input").val();
            no++;
            array_no_info++;
            $("#add_infor > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td><input type="hidden" value=' +
                no +
                '>' + no +
                '</td><td><input type="text" name="information[' + array_no_info +
                ']"  class="form-control"></td></tr>'
            );
        });

        $('#selectEmployer').change(function () {
            if (this.value == '3') {
                $('#othersNoti').show();
            } else {
                $('#othersNoti').hide();
                $('#othersNoti').val("");
            }
        });

        $("#but_others").click(function () {
            var no = $('#add_others tr:last td:first').find("input").val();
            array_no_others++;
            no++;
            $("#add_others > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td style="display:none;"> <input type="hidden" value=' +
                no + '> </td><td>' +
                '<div class="custom-control custom-checkbox mr-sm-6">' +
                '<input type="checkbox" class="custom-control-input cb_1" name="list_doc[' + no +
                ']" id="list_doc' + no + '" value="C16" data-value="' + no + '">' +
                '<label class="custom-control-label" for="list_doc' + no + '">Others</label>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '&nbsp;&nbsp;&nbsp;&nbsp;' +
                '<input type="text" required style="display:none;" name="list_doc_others[' +
                array_no_others +
                ']" id="description' + no + '" class="form-control" >' +
                '</td>' +
                '</tr>'
            );
        });

        $('#add_others').on('change', '.cb_1', function () {

            if (this.checked == true) {
                $('#description' + $(this).data("value")).show();
            } else {
                $('#description' + $(this).data("value")).hide();
                $('#description' + $(this).data("value")).val("");
            }
        });

        $('#pop_view').on('show.bs.modal', function (e) {
            var id_notice = $(e.relatedTarget).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: 'GET',
                data: {
                    id: id_notice,
                },
                url: "{{route('selected_notification')}}",
                success: function (data) {
                    var jsonnotification = JSON.parse(data);

                    $("#view_sendto option[value=" + jsonnotification.data.notification[0]
                        .nt_sendto + "]").attr('selected', 'selected');
                    //  $('#view_sendto').prop("value",jsonnotification.data.notification[0].nt_sendto);
                    $('#view_employer').prop("value", jsonnotification.data.notification[0]
                        .nt_empcode);
                    $('#view_noticetype').prop("value", jsonnotification.data.notification[
                        0].nt_notitype);
                    $('#view_name').prop("value", jsonnotification.data.notification[0]
                        .nt_name_others);
                    $('#view_email').prop("value", jsonnotification.data.notification[0]
                        .nt_email_others);
                    $('#view_address1').prop("value", jsonnotification.data.notification[0]
                        .nt_add1);
                    $('#view_address2').prop("value", jsonnotification.data.notification[0]
                        .nt_add2);
                    $('#view_address3').prop("value", jsonnotification.data.notification[0]
                        .nt_add3);

                    $.each(jsonnotification.data.notidoc, function (index, value) {
                        $('#tb_view_list_document > tbody:last-child').append(
                            '<tr>' +
                            '<td>' +
                            '<label>' + value.nd_docdesc + '</label>' +
                            '</td>' +
                            '<tr>');
                    });
                    $.each(jsonnotification.data.notiinfo, function (index, value) {
                        index++;
                        $('#tb_view_add_info > tbody:last-child').append(
                            '<tr>' +
                            '<td>' +
                            +index +
                            '</td>' +
                            '<td>' +
                            '<input type="text" readonly disabled value="' +
                            value.ni_infodesc + '" class="form-control">' +

                            '</td>' +
                            '<tr>');
                    });

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }
            });
        });

        $('#pop_view').on('hidden.bs.modal', function () {
            $("#tb_view_list_document tbody tr").remove();
            $("#tb_view_add_info tbody tr").remove();

        })

    });

</script>
