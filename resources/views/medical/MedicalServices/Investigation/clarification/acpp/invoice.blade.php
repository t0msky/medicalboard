<div class="card">
    <div class="card-body">
        <div class="form-body">

            <!-------------------------BUTTON KKM AND NON KKM ----------------------------->

            <div class="row">
                <div class="col-md-12 m-b-12">
                    <label for="input-type">@lang('Type Of Health Care Center')</label>
                    <div id="input-type" class="row">
                        <div class="col-sm-3 m-b-10">
                            <label class="radio-inline m-b-10" onclick="KKM()"><input type="radio" id="radio_kkm"
                                    name="optradio" />@lang(' KKM')</label>
                        </div>
                        <div class="col-sm-3 m-b-10">
                            <label class="radio-inline m-b-10" onclick="non_KKM()"><input type="radio" id="radio_nonkkm"
                                    name="optradio" />@lang(' Non-KKM')</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------BUTTON INVOICE AND MEDICAL CLARIFICATION REPORT ----------------------------->

            <div class="row">
                <div class="col-md-12 m-b-12" id="type_document" style="display:none">
                    <label for="input-type">@lang('Type Of Document')</label>
                    <div id="input-type" class="row">
                        <div class="col-sm-3 m-b-10">
                            <label class="radio-inline m-b-10" onclick="invoice()"><input type="radio"
                                    id="radio_invoice" name="optradios" />@lang(' Invoice')</label>
                        </div>
                        <div class="col-sm-3 m-b-10">
                            <label class="radio-inline m-b-10" onclick="medical()"><input type="radio"
                                    id="radio_medical" name="optradios" />@lang(' Medical Clarification Report')</label>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------------------------- INVOICE -------------------------------------------------->
            <div class="card-header">
                <form action="{{route ('invoice')}}" method="POST">
                    @csrf
                    <div row id="invoice1" style="display:none" class="form-body">
                        <h6 class="card-title">@lang('Invoice')</h6>
                        <hr>
                        <div class="row p-t-20">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Case Status')</label>
                                    <input type="text" name="" id="ms_inv_invstatus" value="" class="form-control"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Remarks')</label>
                                    <textarea type="text" rows="5" id="ms_inv_remarks" class="form-control"
                                        readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Ref. No.')</label>
                                    <input type="text" name="" id="ms_inv_invrefno" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Invoice Date')</label>
                                    <input type="date" name="" id="ms_inv_invdate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Amount')</label>
                                    <input type="text" name="" id="ms_inv_amount" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Upload')</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">@lang('Choose
                                                file')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-6">
                            <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_invoice">
                                @lang('Add Row')
                            </button>
                        </div>
                        <div class="card-header">
                            <div class="table-responsive">
                                <table id="myTable_invoice" class="table table-sm table-bordered">
                                    <thead>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:15%'>@lang('Case Status')</th>
                                        <th style='width:30%'>@lang('Remarks')</th>
                                        <th style='width:15%'>@lang('Reference No')</th>
                                        <th style='width:15%'>@lang('Invoice Date')</th>
                                        <th style='width:12%'>@lang('Amount')</th>
                                        <th style='width:8%'>@lang('Action')</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="display:none;"><span type="hidden">0</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-actions">
                                    <button type="submit"
                                        class="btn btn waves-effect waves-light btn-success">@lang('SUBMIT')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!---------------- Medical Clarification Report ----------------------->

            <div class="card-header">
                <div id="medical1" style="display:none" class="form-body">
                    <h6 class="card-title">@lang('Medical Clarification Report') </h6>
                    <hr>
                    <div class="col-5">
                        <div class="form-group">
                            <label class="control-label">@lang('Upload')</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">@lang('Choose file')</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:55%'>@lang('File Name')</th>
                                        <th style='width:32%'>@lang('Date')</th>
                                        <th style='width:8%'>@lang('Action')</th>
                                    </thead>
                                    <tbody>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tbody>
                                </table>
                                <div class="form-actions">
                                    <button type="submit"
                                        class="btn btn waves-effect waves-light btn-success">@lang('SUBMIT')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function KKM() {

        // Get the checkbox
        var radioButton = document.getElementById("radio_kkm");
        // Get the output text
        var invoice1 = document.getElementById("invoice1");
        var medical1 = document.getElementById("medical1");
        var type_document = document.getElementById("type_document");

        // If the checkbox is checked, display the output text
        if (radioButton.checked == true) {
            invoice1.style.display = "none";
            medical1.style.display = "none";
            type_document.style.display = "block";
        }

    }

    function invoice() {

        // Get the checkbox
        var radioButton = document.getElementById("radio_invoice");
        // Get the output text
        var invoice1 = document.getElementById("invoice1");
        var medical1 = document.getElementById("medical1");

        // If the checkbox is checked, display the output text
        if (radioButton.checked == true) {
            invoice1.style.display = "block";
            medical1.style.display = "none";
        }

    }

    function medical() {

        // Get the checkbox
        var radioButton = document.getElementById("radio_medical");
        // Get the output text
        var invoice1 = document.getElementById("invoice1");
        var medical1 = document.getElementById("medical1");

        // If the checkbox is checked, display the output text
        if (radioButton.checked == true) {
            invoice1.style.display = "none";
            medical1.style.display = "block";
        }

    }


    function non_KKM() {

        // Get the checkbox
        var radioButton = document.getElementById("radio_nonkkm");
        // Get the output text
        var invoice1 = document.getElementById("invoice1");
        var medical1 = document.getElementById("medical1");
        var type_document = document.getElementById("type_document");

        // If the checkbox is checked, display the output text
        if (radioButton.checked == true) {
            invoice1.style.display = "block";
            medical1.style.display = "block";
            type_document.style.display = "none";
        }

    }

    var no = $('#myTable_invoice tr:last td:first').find("span").html();
    $("#btn_invoice").click(function () {

        var delete_invoice_row = "('Are you sure want to delete the draft?')";
        no++;

        alert(no);
        var case_status = $('#ms_inv_invstatus').val();
        var invoice_remarks = $('#ms_inv_remarks').val();
        var ref_no = $('#ms_inv_invrefno').val();
        var invoice_date = $('#ms_inv_invdate').val();
        var invoice_amount = $('#ms_inv_amount').val();
        // var invoince_file = $('#ms_inv_filename').val();


        $('#myTable_invoice> tbody:last-child').append('<tr id="invoice_id' + no + '">' +
            '<td style="display:none;"><span id="span' + no + '">' + no + '</span></td><td>' + no +
            '</td>' +
            ' <td>  <input type="text" value="' + case_status +
            '" id="ms_inv_status" name="ms_inv_invstatus[' + no +
            ']" class="form-control" readonly></td>' +
            ' <td>  <input type="text" value="' + invoice_remarks +
            '" id="ms_inv_remarks" name="ms_inv_remarks[' + no +
            ']" class="form-control" readonly></td>' +
            '<td><input type="text" value="' + ref_no + '" id="ms_inv_invrefno" name="ms_inv_invrefno[' +
            no +
            ']" class="form-control" readonly></td>' +
            '<td><input type="text" value="' + invoice_date +
            '" id="ms_inv_invdate" name="ms_inv_invdate[' +
            no + ']" class="form-control" readonly></td>' +
            '<td><input type="text" value="' + invoice_amount +
            '" id="ms_inv_amount" name="ms_inv_amount[' +
            no + ']" class="form-control" readonly></td>' +
            '<td><a class="btn btn-sm btn-danger"  id="deletedraft' + no + '" confirm(' +
            delete_invoice_row +
            '); ><i class="fas fa-trash-alt fa-sm"></i></a></td> </tr>');

        $('#deletedraft' + no + '').click(function () {
            // alert('Are you sure want to delete the draft? ');

            alert("delete no: " + no);

            $('#myTable_invoice').each(function () {
                $('#invoice_id' + no + '').remove();
            });
        });

        $('#reset').find('form').submit();
        $('.clearFields').val('');



    });

</script>
