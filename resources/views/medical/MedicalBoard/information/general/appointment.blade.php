<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{Route('setapptperob.post')}}" method="GET">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">@lang('form/medical.appointment.title')</h5>
                    <hr>
                    <div class="card-header">
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">

                                <div id="appt_info" class="" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="form-row p-t-20">
                                        
                                        <div class="form-group col-md-12 col-lg-6">
                                            <label class="control-label">@lang('form/medical.general.hospital')</label>
                                            <select name="appt_hospital" id="appt_hospital" class="form-control {{-- required --}}">
                                                <option value="">-- @lang('option.please_select') --</option>
                                                <option value="5">Hospital Kuala Lumpur</option>
                                                @if(isset($hospital) && isset($ref_table->state))
                                                <option style="font-weight:bold;" value="ALL">@lang('option.all')</option>
                                                @foreach ($ref_table->state as $s)
                                                    @php $state2 = ''; @endphp
                                                    @foreach ($hospital as $h)
                                                        @foreach ($h as $hs)
                                                            @if($s->ref_code != $state2)
                                                                @if($s->ref_code == $hs->statecode) 
                                                                    <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                                        <option value={{$hs->id}}>{{$hs->name}}</option>
                                                                    @php $state2 = $s->ref_code; @endphp
                                                                @endif
                                                            @else 
                                                                @if($s->ref_code == $hs->statecode)   
                                                                        <option value={{$hs->id}}>{{$hs->name}}</option>
                                                                    @php $state2 = $s->ref_code; @endphp
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                    </optgroup>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-lg-6">
                                            <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                            <select name="appt_mb_category" id="appt_mb_category" class="form-control {{-- required --}}">
                                                <option value="">-- @lang('option.please_select') --</option>
                                                @isset($ref_table->mb_category)
                                                @foreach ($ref_table->mb_category as $mb)
                                                   <option value={{$mb->ref_code}}>{{$mb->desc_en}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-lg-6">
                                            <label class="control-label">@lang('form/medical.general.session')</label>
                                            <select name="appt_session" class="form-control {{-- required --}}">
                                                <option value="">-- @lang('option.please_select') --</option>
                                                @isset($ref_table->sidang)
                                                @foreach ($ref_table->sidang as $s)
                                                    <option value={{$s->ref_code}}>{{$s->desc_en}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-lg-6">
                                            <label class="control-label">@lang('form/medical.collapse.decision.type_discipline')</label>
                                            <select id="appttype_disciplineid" name="appttype_discipline" class="form-control" disabled>
                                                <option value="">-- @lang('option.please_select') --</option>}
                                                <option value="1">SINGLE</option>}
                                                <option value="2">MULTIPLE</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tableAppt_discipline" class="table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>@lang('form/medical.general.speciality')</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr>
                                                    <td>
                                                        @foreach($ref_table->doc_special as $d)
                                                            @isset($review_case->rel_medicaboard)
                                                                @foreach($review_case->rel_medicalboard as $rc)
                                                                    @if($d->ref_code == $rc->speciality)
                                                                        {{$d->desc_en}}
                                                                    @endif 
                                                                @endforeach
                                                            @endisset
                                                        @endforeach

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="application_url" id="application_url" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                        <div class="form-row p-t-20">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-md btn-success" style="margin:5px;">SKIP</button>
                                <button type="button" id="btninfoapptok" class="btn btn-md btn-success" data-toggle="modal" data-target="#setappt_modal" style="margin:5px;">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="year" name="year" value="2019" class="form-control" >
                @include('medical.MedicalBoard.information.modal.appointment_modal')
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        var url = $("#application_url").val();
        $('#btninfoapptok').click(function(){
            var k = 1; //for id count
            var count = 1; //for the no of records
            var disccount = 1;
            var hospital_id = $("#appt_hospital").val() ? $("#appt_hospital").val() : null; 
            var mb_category = $("#appt_mb_category").val() ? $("#appt_mb_category").val() : null;
            var year = "2019";

            $("#disc_appt").DataTable({
                destroy: true,
                bFilter: false,
                bLengthChange:false,
                ajax: {
                    url: url + "/getApptPerOb/" + hospital_id + "/" + mb_category + "/" + year ,
                    dataSrc: function(data){
                        // console.log(data);
                        if(data == null){
                        return [];
                        }
                        else {
                            return data;
                        }
                    },
                    type:'GET',
                    dataType: "json",
                },
                "columns": [
                    { 
                        "data": "discipline",
                        "defaultContent":"" 
                    },
                    { "data": "desc" },
                    { "data": "takwim" },
                ],
                "columnDefs": [
                        {
                            "targets": [0],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $textInput = $('<input type="number" name="datacount'+count+'" value="'+count+'" class="form-control-plaintext" readonly>');
                                count++;
                                
                                return $textInput.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [1],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;

                                var $span = $('<span/>')
                                var $desc = $('<input type="text" name="desc'+disccount+'" value="'+row.desc+'" class="form-control-plaintext" readonly>');
                                var $textmbsessions = $('<input type="hidden" id="mbsessionspeciality_id['+disccount+']" name="mbsessionspeciality_id['+disccount+']" value="'+row.mbsessionspeciality_id+'" class="form-control" readonly>');
                                var $textspeciality = $('<input type="hidden" id="speciality['+disccount+']" name="speciality['+disccount+']" value="'+row.speciality+'" class="form-control" readonly>');
                                var $textmbid = $('<input type="hidden" id="medicalboard_id['+disccount+']" name="medicalboard_id['+disccount+']" value="'+row.medicalboard_id+'" class="form-control" readonly>');
                                
                                $span.append($desc);
                                $span.append($textmbsessions);
                                $span.append($textspeciality);
                                $span.append($textmbid);

                                disccount++;
                                
                                return $span.prop("outerHTML");
                            }
                        },
                        {
                            "targets": [2],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;
                                // console.log(data);
                                var span = $('<span/>');
                                var $select = $('<select class="select2 form-control" id="takwim_id'+k+'" name="takwim_id['+k+']" onchange="getPanel('+k+')"><option value="">-- @lang('option.please_select') --</option></select>');
                                $.each(data, function (a, b) {
                                    // var $option = $("<option></option>",
                                    //     {
                                    //         text: b.date,
                                    //         value: b.takwim_id
                                    //     });
                                    // if (defaultselected == b) {  //use == instead of ===
                                    //     $option.attr("selected", "selected");
                                    // } 
                                    var $option = $('<option value="'+b.takwim_id+'">'+b.date+'</option>');
                                    $select.append($option);
                                });

                                $dateInput = $('<input type="text" id="datetakwim'+k+'" name="datetakwim['+k+']" class="form-control" readonly>');

                                span.append($select);
                                span.append($dateInput);

                                k++;
                                return span.prop("outerHTML");
                            }
                        },
                    ]
                
                });

            });

    });


    function getPanel(count)
    {
        var datetakwim = $("#takwim_id"+count+" :selected").text();
        $("#datetakwim"+count+"").val(datetakwim);
    }

</script>