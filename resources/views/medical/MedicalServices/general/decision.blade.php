<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('Action')</label>
                                <select class="form-control" name="decision">
                                    <option value="PS" hidden selected readonly>Please Select</option>
                                    <option value="descisionQuery"> @lang('Query')</option>
                                    <option value="decisionecommendation"> @lang('Recommendation')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--============================= RECOMMENDATION =============================-->
                    @if ($casetype==null)
                    @include('medical.MedicalServices.opinion.abppp.appointment.recommendationApp')
                    @else
                    <div>
                        <form action="{{route ('recommend')}}" method="POST">
                            @csrf
                            <div class="row-pt-20 default" id="rec" style="display:none">
                                <h5 class="card-title">@lang('Recommendation')</h5>
                                <div class="card-body">
                                    <div class="tab-content tabcontent-border">
                                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="col-md-6 offset-6">
                                                    <button type="button"
                                                        class="btn btn waves-effect waves-light btn-success a1"
                                                        data-toggle="modal" data-whatever="@getbootstrap"
                                                        data-toggle="collapse" data-target="#diagnosis"
                                                        aria-expanded="true"> @lang('Add Diagnosis')</button>
                                                    @include('medical.MedicalServices.general.diagnosis')
                                                </div>
                                                <div class="form-group col-md 12 col-lg-12">
                                                    <div class="table-responsive">
                                                        <table id="myTable2" class="table table-bordered table-striped">
                                                            {{-- @if(!empty($emphistory)||$emphistory!=null)
                                                            @foreach($emphistory as $idx=>$data) --}}
                                                            <thead style="background-color:skyblue;">
                                                                <tr>
                                                                    <th style='width:5%'> @lang('No.')</th>
                                                                    <th style='width:45%'> @lang('Diagnosis')</th>

                                                                    @if ($casetype == '2')
                                                                    <th style='width:45%'> @lang('5th schedule ESSA 1969')
                                                                    @else 
                                                                    @endif
                                                                    </th>
                                                                    <th style='width:5%'> @lang('Action')</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="display:none;"><input type="hidden" value="0"></td>
                                                                    <td style="display:none;"></td>
                                                                    <td style="display:none;"></td>
                                                                    <td style="display:none;"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-12">
                                                        <label class="control-label">@lang('Justification')</label>
                                                        <textarea type="text" rows="7" cols="20" name="ms_rc_justification"
                                                            class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group col-md 12 col-lg-12">
                                                        <label class="control-label">@lang('Recommendation')</label>
                                                        <textarea type="text" rows="7" cols="20" name="ms_rc_recommend"
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-6">
                                                        <label class="control-label">@lang('Submit To')</label>
                                                        <select class="form-control" name="subto" id="subto">
                                                            <option value="PS" hidden selected readonly>Please Select
                                                            </option>
                                                            <option value="">@lang('Committee')</option>
                                                            <option value="">@lang('Requestor')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit"
                                                    class="btn btn waves-effect waves-light btn-success a1">@lang('SUBMIT')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif

                    <!--============================= QUERY ===============================-->
                <div>
                    <form action="{{route ('ms_query')}}" method="POST">
                        @csrf
                        <div class="row-pt-20 default" id="query" style="display:none">
                            @if ($casetype==0)
                            <h6 class="card-title-sub">@lang('Query Details')</h6>
                            @else
                            <h5 class="card-title">@lang('Query Details')</h5>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6 offset-6">
                                            <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_query">@lang('Add Row')</button>
                                        </div>
                                        <div class="table-responsive m-t-40">
                                            <table id="myTable_query" class="table table-bordered table-stripe middle">
                                                <thead style="background-color:skyblue;">
                                                    <tr>
                                                        <th style='width:5%'>@lang('No.')</th>
                                                        <th style='width:20%'>@lang('Query To')</th>
                                                        <th style='width:35%'>@lang('Request For Supporting Document')</th>
                                                        <th style='width:35%'>@lang('Remarks')</th>
                                                        <th style='width:5%'>@lang('Action')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="display:none;"><span type="hidden">0</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--------------------POPUP Medical Investigation - Medical Clarification ------------------->

                            <div class="modal fade" id="medicalOpinionModal" tabindex="-1" role="dialog" aria-labelledby="medicalOpinionModal">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <h4 class="card-title">@lang('Medical Investigation-Medical Clarification')
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-12">
                                                        <label class="control-label">@lang('Patient Name')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-6">
                                                        <label class="control-label">@lang('Identification Number')</label>
                                                        <input type="text" value="" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md 12 col-lg-6">
                                                        <label class="control-label">@lang('Date')</label>
                                                        <input type="text" name="ms_mcf_currdate" value="<?php echo date("d-m-Y"); ?>" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 offset-6">
                                                    <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_clarification_moei" 
                                                    data-toggle="modal"data-whatever="@getbootstrap" aria-expanded="true"> @lang('Add Row')</button>
                                                </div>
                                                <div class="card-header">
                                                    <div class="table-responsive">
                                                        <table id="myTable_clarification_moei" class="table table-sm table-bordered">
                                                            <thead style="background-color:skyblue;">
                                                                <tr>
                                                                    <th>@lang('No.')</th>
                                                                    <th>@lang('Info Required')</th>
                                                                    <th>@lang('Answer')</th>
                                                                    <th>@lang('Delete')</th>
                                                                </tr>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr id="clari_m1">
                                                                    <td style="display:none;"><input type="hidden"
                                                                            value="1"></td>
                                                                    <td>1</td>
                                                                    <td>@lang('Presenting Complaint?')</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr id="clari_m2">
                                                                    <td style="display:none;"><input type="hidden"
                                                                            value="2"></td>
                                                                    <td>2</td>
                                                                    <td>@lang('Past Medical History including')</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr id="clari_m3">
                                                                    <td style="display:none;"><input type="hidden"
                                                                            value="3"></td>
                                                                    <td>3</td>
                                                                    <td>@lang('Physical examination findings on the first visit')</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr id="clari_m4">
                                                                    <td style="display:none;"><input type="hidden"
                                                                            value="4"></td>
                                                                    <td>4</td>
                                                                    <td>@lang('Diagnosis of the patient’s problem')</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-12">
                                                        <label class="control-label">@lang('Doctor Name')</label>
                                                        <input type="text" value="" name="ms_mcf_doctor" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-12">
                                                        <label class="control-label">@lang('Place Of Work')</label>
                                                        <input type="text" value="" name="ms_mcf_place" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md 12 col-lg-6">
                                                        <label class="control-label">@lang('Contact Number')</label>
                                                        <input type="text" value="" name="ms_mcf_contact" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md 12 col-lg-6">
                                                        <label class="control-label">@lang('Date')</label>
                                                        <input type="date" name="ms_mcf_date" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="align-self-center text-left">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-danger" id="clear" data-dismiss="modal">@lang('Cancel')</button>
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" data-dismiss="modal"><i class="fa fa-check"></i>@lang('Save')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success a1">@lang('Submit')</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------POPUP REQUEST SUPPPORTING DOCUMENT ----------->

@include('medical.MedicalServices.general.modalHistoryOpinion')
@include('medical.MedicalServices.general.modalDocument')
{{-- <div class="tab-pane p-20" id="section" role="tabpanel">@include('MedicalServices.section') --}}


<script>
    $(document).ready(function () {

        $('select[name=decision]').change(function () {
            if (this.value == 'descisionQuery') {

                $("#query").show();
                $("#rec").hide();
            } else if (this.value == 'decisionecommendation') {
                $("#rec").show();
                $("#query").hide();
            } else {
                $("#query").hide();
                $("#rec").hide();
            }
        });

        var no = $('#myTable_query tr:last td:first').find("span").html();

        $("#btn_query").click(function () {

            // var no = 1;

            console.log("No : " + no);
            var delete1 = "('Are you sure want to delete the draft?')";
            no++;

            console.log("No : " + no);
            // var no = no++;
            $('#myTable_query > tbody:last-child').append('<tr id="clari' + no +
                '"> <td style="display:none;"><span id="span' + no + '">' + no +
                '</span></td><td>' + no +
                '</td> <td>' +
                '<select required class="form-control ms_que_to" style="width:300px;" id="ms_que_to' +
                no +
                '" name="ms_que_to[' + no + ']">' +
                '<option value="PS"  hidden selected readonly>Please Select</option>' +
                '<option value="01">Employer</option>' +
                '<option value="02">Insured Person</option>' +
                '<option value="03">Scheme</option>' +
                '<option value="04">RTW</option>' +
                '<option value="05">Medical Investigation-PERKESO Doctor</option>' +
                '<option value="06">Medical Investigation-Special Report</option>' +
                '<option value="07">Medical Investigation- Medical Clarification</option>' +
                '</select>' +
                ' <td><div class="input-group-append">' +
                '<input type="hidden" name="ms_rspd_code_id[' + no +
                ']" id="ms_rspd_code_id' + no +
                '" value="">' + '<input type="hidden" name="ms_rspd_code_value[' + no +
                ']" id="ms_rspd_code_value' + no +
                '" value="">' +
                ' <a class="view" data-toggle="modal" name="ms_rspd_code[' + no + ']"' +
                'data-target="#modal_document" data-id="' + no + '" data-whatever="@getbootstrap"' +
                ' href="#tt' + no +
                '" aria-expanded="true"><i class="fas fa-file-alt"title="View" data-toggle="tooltip"></i></a>' +
                '</div>' +
                '<p id="requestDoc' + no +
                '"></p></td> <td><input type="text" name="ms_que_remarks[' + no +
                ']" value="" class="form-control" required></td>' +
                ' </div></td> <td align="middle"><a class="deletedraft" value="' + no +
                '" id="deletedraft' + no + '" confirm(' + delete1 +
                '); ><i class="fas fa-trash-alt fa-sm"></i></a></td> </tr>');

            //Employer
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="01"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="01"]:selected')
                .length;

            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="01"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="01"]')
                    .show();
            } else {
                $('.ms_que_to option[value="01"]').show();
            }
            //Insured Person
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="02"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="02"]:selected')
                .length;
            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="02"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="02"]')
                    .show();
            } else {
                $('.ms_que_to option[value="02"]').show();
            }

            //Scheme
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="03"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="03"]:selected')
                .length;
            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="03"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="03"]')
                    .show();
            } else {
                $('.ms_que_to option[value="03"]').show();
            }

            //RTW
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="04"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="04"]:selected')
                .length;
            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="04"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="04"]')
                    .show();
            } else {
                $('.ms_que_to option[value="04"]').show();
            }

            //Medical Investigation-PERKESO Doctor
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="05"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="05"]:selected')
                .length;
            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="05"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="05"]')
                    .show();
            } else {
                $('.ms_que_to option[value="05"]').show();
            }

            //Medical Investigation-Special Report
            var id_disable_dropdown = $(
                    '.ms_que_to option[value="06"]:selected')
                .attr('id');

            var disableValueDropdown = $(
                    '.ms_que_to option[value="06"]:selected')
                .length;
            if (disableValueDropdown == 1) {
                $('.ms_que_to option[value="06"]').hide();
                $('#' + id_disable_dropdown +
                        ' option[value="06"]')
                    .show();
            } else {
                $('.ms_que_to option[value="06"]').show();
            }

            //------Medical Investigation- Medical Clarification

            $('.ms_que_to').on('change', function () {
                //this is just getting the value that is selected
                var id_disable_dropdown = $(
                        '.ms_que_to option[value="07"]:selected'
                    )
                    .attr('id');
                var disableValueDropdown = $(
                        '.ms_que_to option[value="07"]:selected'
                    )
                    .length;
                console.log("value :" + disableValueDropdown);

                if (disableValueDropdown == 1) {
                    $('.ms_que_to option[value="07"]')
                        .hide();
                    $('#' + id_disable_dropdown +
                            ' option[value="07"]')
                        .show();
                } else {
                    $('.ms_que_to option[value="07"]')
                        .show();
                }
                if ($(this).val() == "07") {
                    // alert();
                    $('#medicalOpinionModal').modal('show');
                }
                //   $('#medicalOpinionModal').modal('hide');
            });


            // validate modal form
            $(function () {

                $("#modal_document").validate({
                    rules: {
                        medical_report: {
                            required: true,
                        },
                        action: "required"
                    },
                    messages: {
                        pName: {
                            required: "Please select supporting documents",

                        },
                        action: "Please select supporting documents"
                    }
                });
            });


            $('#deletedraft' + no + '').click(function () {

                var id = $(this).attr('id');

                var details = id.split('t');
                var no = details[2];


                console.log('this delete: ' + id);
                console.log('this no: ' + no);

                alert('Are you sure want to delete the draft? ');

                console.log("delete no: " + no);
                $('#myTable_query').each(function () {
                    $('#clari' + no + '').remove();
                });
            });
        });


        $("#btn_clarification_moei").click(function () {

            var id = $(this).val();
            var modal_tr_no = $('#myTable_clarification_moei tr:last td:first').find("input").val();
            console.log(modal_tr_no);
            var delete1 = "('Are you sure want to delete the draft?')";
            modal_tr_no++;
            // var no = no++;
            $('#myTable_clarification_moei > tbody:last-child').append('<tr id="clari_m' +
                modal_tr_no +
                '"> <td style="display:none;"><input type="hidden" value="' +
                modal_tr_no + '"></td><td>' + modal_tr_no + '</td>' +
                '<td><input type="text" value="" class="form-control" name="ms_info_req[' +
                modal_tr_no + ']"></td>' +
                ' <td></td>' +
                '<td><a class="btn btn-sm btn-danger" id="deletedraft_mt' +
                modal_tr_no +
                '" confirm(' + delete1 +
                '); ><i class="fas fa-trash-alt fa-sm"></i></a></td> </tr>');
            $('#deletedraft_mt' + modal_tr_no).click(function () {
                alert('Are you sure want to delete the draft? ');

                $('#myTable_clarification_moei').each(function () {
                    $('#clari_m' + modal_tr_no).remove();
                });
            });
        });

        $("#clear").click(function () {
            $('#medicalOpinionModal').removeData();
            $('#medicalOpinionModal').modal('hide');
        });
    });

</script>
