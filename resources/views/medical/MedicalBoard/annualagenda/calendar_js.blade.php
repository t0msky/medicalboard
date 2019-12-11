
<script> 

function calendar(hospital_id){
// alert(hospital_id);
// $.ajaxSetup({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

let calendar = null;

function setEvent(event) {
    $('label.error').hide();
    $('#event-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#event-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#addtable'+ i).remove();
            var count = $('#event-modal input[name="takwim_table_count"]').val() - 1; 
            $('#event-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    $('#event-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#event-modal input[name="takwim_table_count"]').val(event ? event.count : '');
    $('#event-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#event-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#event-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#event-modal select[name="takwim_chairman"]').val(event ? event.chairman_id : '');
    $('#event-modal select[name="takwim_sectariat"]').val(event ? event.secretariat_id : '');
    $('#event-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    $('#event-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    $('#event-modal input[name="takwim_minquota"]').val(event ? event.minquota : '');
    $('#event-modal input[name="takwim_maxquota"]').val(event ? event.maxquota : '');
    $('#event-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#event-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countArray = $('#event-modal input[name="takwim_table_count"]').val();
    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#event-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.doc_speciality : '');
            $('#event-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.doctor : '');
            $('#event-modal input[name="takwim_minquota'+ i +'"]').val(event ? event.minquota : '');
            $('#event-modal input[name="takwim_maxquota'+ i +'"]').val(event ? event.maxquota : '');
        }
    }

    $('#event-modal').modal();
}

function editEvent(event) {
    // console.log(event);
    $('label.error').hide();
    $('#update-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#update-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#addtableupdate'+ i).remove();
            counter -= 1;
            var count = $('#update-modal input[name="takwim_table_count"]').val() - 1; 
            $('#update-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    $('#update-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#update-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#update-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#update-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#update-modal select[name="takwim_chairman"]').val(event ? event.chairman_id : '');
    $('#update-modal select[name="takwim_sectariat"]').val(event ? event.secretariat_id : '');
    $('#update-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#update-modal input[name="takwim_remarks_id"]').val(event ? event.remarks_id : '');
    $('#update-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#update-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#update-modal input[name="tdid"]').val(event ? event.table['table'][i].id : '');
                $('#update-modal select[name="takwim_discipline_updt"]').val(event ? event.table['table'][i].td_discipline : '');
                $('#update-modal select[name="takwim_doctor_updt"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
                $('#update-modal input[name="tdoctor_id"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].id : '');
                $('#update-modal input[name="takwim_minquota"]').val(event ? event.table['table'][i].td_minquota : '');
                $('#update-modal input[name="takwim_maxquota"]').val(event ? event.table['table'][i].td_quota : '');
                counter++;
                $('#update-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtableupdate"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control" id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)"><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select><input type="hidden" class="form-control" name="tdid'+ counter +'"></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control" id="takwim_doctor'+counter+'"><option value="">-- @lang('option.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->user_id}}>{{$value->doctor_name}}</option>@endforeach</select><input type="hidden" class="form-control" name="tdoctor_id'+ counter +'"></td>';
                cols += '<td><input type="number" name="takwim_minquota'+ counter +'" required class="form-control"></td>';
                cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" required class="form-control"></td>';

                cols += '<td>{{--<button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDelupdate"><i class="fas fa-trash-alt"></i></a></td>';

                newRow.append(cols);
                $("table.order-list2").append(newRow);
                counter++;
                $('#update-modal input[name="takwim_table_count"]').val(counter);
            }
            
        }
        for(i=1; i<countTable; i++)
        {
            $('#update-modal input[name="tdid'+ i +'"]').val(event ? event.table['table'][i].id : '');
            $('#update-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_discipline : '');
            $('#update-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
            $('#update-modal input[name="tdoctor_id'+ i +'"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].id : '');
            $('#update-modal input[name="takwim_maxquota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#update-modal input[name="takwim_minquota'+ i +'"]').val(event ? event.table['table'][i].td_minquota : '');
        }
    }

    $('#update-modal').modal();
}

function rescheduleEvent(event) {
    // console.log(event);
    // $('#reschedule-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#reschedule-modal input[name="takwim_table_count"]').val();
    $('label.error').hide();

    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#addtablereschedule'+ i).remove();
            counter -= 1;
            var count = $('#reschedule-modal input[name="takwim_table_count"]').val() - 1; 
            $('#reschedule-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    $('#reschedule-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#reschedule-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#reschedule-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#reschedule-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#reschedule-modal select[name="takwim_chairman"]').val(event ? event.chairman_id : '');
    $('#reschedule-modal select[name="takwim_sectariat"]').val(event ? event.secretariat_id : '');
    $('#reschedule-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#reschedule-modal input[name="takwim_remarks_id"]').val(event ? event.remarks_id : '');
    $('#reschedule-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#reschedule-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#reschedule-modal input[name="tdid"]').val(event ? event.table['table'][i].id : '');
                $('#reschedule-modal select[name="takwim_discipline_updt"]').val(event ? event.table['table'][i].td_discipline : '');
                $('#reschedule-modal select[name="takwim_doctor_updt"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
                $('#reschedule-modal input[name="tdoctor_id"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].id : '');
                $('#reschedule-modal input[name="takwim_minquota"]').val(event ? event.table['table'][i].td_minquota : '');
                $('#reschedule-modal input[name="takwim_maxquota"]').val(event ? event.table['table'][i].td_quota : '');
                counter++;
                $('#reschedule-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtablereschedule"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control" id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select><input type="hidden" class="form-control" name="tdid'+ counter +'"></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control" id="takwim_doctor'+counter+'" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->user_id}}>{{$value->doctor_name}}</option>@endforeach</select><input type="hidden" class="form-control" name="tdoctor_id'+ counter +'"></td>';
                cols += '<td><input type="number" name="takwim_minquota'+ counter +'" required class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" required class="form-control" disabled></td>';

                // cols += '<td>{{--<button type="button" class="ibtnDelreschedule btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button>--}}<a class="deletedraft ibtnDelreschedule"><i class="fas fa-trash-alt"></i></a></td>';

                newRow.append(cols);
                $("table.order-list3").append(newRow);
                counter++;
                $('#reschedule-modal input[name="takwim_table_count"]').val(counter);
            }
            
        }
        for(i=1; i<countTable; i++)
        {
            $('#reschedule-modal input[name="tdid'+ i +'"]').val(event ? event.table['table'][i].id : '');
            $('#reschedule-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_discipline : '');
            $('#reschedule-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
            $('#reschedule-modal input[name="tdoctor_id'+ i +'"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].id : '');
            $('#reschedule-modal input[name="takwim_maxquota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#reschedule-modal input[name="takwim_minquota'+ i +'"]').val(event ? event.table['table'][i].td_minquota : '');
        }
    }

    $('#reschedule-modal').modal();
}

function duplicateEvent(event) {

    var countArray = $('#duplicate-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#addtableduplicate'+ i).remove();
            counter -= 1;
            var count = $('#duplicate-modal input[name="takwim_table_count"]').val() - 1; 
            $('#duplicate-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    // $('#duplicate-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#duplicate-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#duplicate-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#duplicate-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#duplicate-modal select[name="takwim_chairman"]').val(event ? event.chairman : '');
    $('#duplicate-modal select[name="takwim_sectariat"]').val(event ? event.secretariat : '');
    $('#duplicate-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#duplicate-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table.length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#duplicate-modal select[name="takwim_discipline"]').val(event ? event.table[i].td_discipline : '');
                $('#duplicate-modal select[name="takwim_doctor"]').val(event ? event.table[i].doctor : '');
                $('#duplicate-modal input[name="takwim_minquota"]').val(event ? event.table[i].td_minquota : '');
                $('#duplicate-modal input[name="takwim_maxquota"]').val(event ? event.table[i].td_maxquota : '');
                counter++;
                $('#duplicate-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtableduplicate"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control" id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control" id="takwim_doctor'+counter+'" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->user_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_minquota'+ counter +'" class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" class="form-control" disabled></td>';

                newRow.append(cols);
                $("table.order-list4").append(newRow);
                counter++;
                $('#duplicate-modal input[name="takwim_table_count"]').val(counter);
            }
            
        }
        for(i=1; i<countTable; i++)
        {
            $('#duplicate-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table[i].td_discipline : '');
            $('#duplicate-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table[i].doctor : '');
            $('#duplicate-modal input[name="takwim_maxquota'+ i +'"]').val(event ? event.table[i].td_maxquota : '');
            $('#duplicate-modal input[name="takwim_minquota'+ i +'"]').val(event ? event.table[i].td_minquota : '');
        }
    }

    $('#duplicate-modal').modal();
}

function deleteEvent(event) {
     // console.log(event);
    $('#delete-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#delete-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#addtabledelete'+ i).remove();
            counter -= 1;
            var count = $('#delete-modal input[name="takwim_table_count"]').val() - 1; 
            $('#delete-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    $('#delete-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#delete-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#delete-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#delete-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#delete-modal select[name="takwim_chairman"]').val(event ? event.chairman_id : '');
    $('#delete-modal select[name="takwim_sectariat"]').val(event ? event.secretariat_id : '');
    $('#delete-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#delete-modal input[name="takwim_remarks_id"]').val(event ? event.remarks_id : '');
    $('#delete-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#delete-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#delete-modal select[name="takwim_discipline"]').val(event ? event.table['table'][i].td_discipline : '');
                $('#delete-modal select[name="takwim_doctor"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
                $('#delete-modal input[name="takwim_minquota"]').val(event ? event.table['table'][i].td_minquota : '');
                $('#delete-modal input[name="takwim_maxquota"]').val(event ? event.table['table'][i].td_quota : '');
                counter++;
                $('#delete-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtabledelete"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control" id="takwim_discipline'+ counter +'" onchange="getPanel(this.name)" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($ref_table->doc_special as $value)<option value={{$value->ref_code}}>{{$value->desc_en}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control" id="takwim_doctor'+counter+'" disabled><option value="">-- @lang('option.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->user_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_minquota'+ counter +'" class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_maxquota'+ counter +'" class="form-control" disabled></td>';

                newRow.append(cols);
                $("table.order-list5").append(newRow);
                counter++;
                $('#delete-modal input[name="takwim_table_count"]').val(counter);
            }
            
        }
        for(i=1; i<countTable; i++)
        {
            $('#delete-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_discipline : '');
            $('#delete-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].rel_takwimdoctor[0].doctor_id : '');
            $('#delete-modal input[name="takwim_maxquota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#delete-modal input[name="takwim_minquota'+ i +'"]').val(event ? event.table['table'][i].td_minquota : '');
        }
    }

    $('#delete-modal').modal();
}

function saveEvent() {

    var medical_board_category = $('#event-modal select[name="takwim_medical_board_category"]').val();
    let token = $('form').find('input[name="_token"]').val();

    @foreach ($ref_table->mb_category as $value)
    if(medical_board_category == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }
    @endforeach

    var event = {
        id: $('#event-modal input[name="takwim-index"]').val(),
        count: $('#takwim_table_count').val(),
        venue: $('#event-modal input[name="takwim_venue"]').val(),
        session: $('#event-modal select[name="takwim_session"]').val(),
        // name: mb_category1,
        mb_category: $('#event-modal select[name="takwim_medical_board_category"]').val(),
        chairman: $('#event-modal select[name="takwim_chairman"]').val(),
        sectariat: $('#event-modal select[name="takwim_sectariat"]').val(),
        doc_speciality: $('#event-modal select[name="takwim_discipline"]').val(),
        doctor: $('#event-modal select[name="takwim_doctor"]').val(), 
        minquota: $('#event-modal input[name="takwim_minquota"]').val(),
        maxquota: $('#event-modal input[name="takwim_maxquota"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        statecode: $('#takwim_statecode').val(),
        date_takwim: $('#event-modal input[name="takwim-start-date"]').val(),
        startDate: $('#event-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#event-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    var countArray = $('#event-modal input[name="takwim_table_count"]').val();
    var array = [];
    array.push({
        td_discipline: event.doc_speciality,
        td_minquota: event.minquota,
        td_maxquota: event.maxquota,
        doctor: event.doctor
    });
    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            var takwim_dis = $('#event-modal select[name="takwim_discipline'+ i +'"]').val();
            var takwim_doc = $('#event-modal select[name="takwim_doctor'+ i +'"]').val();
            var takwim_minquo = $('#event-modal input[name="takwim_minquota'+ i +'"]').val();
            var takwim_maxquo = $('#event-modal input[name="takwim_maxquota'+ i +'"]').val();

            array.push({
                td_discipline: takwim_dis,
                td_minquota: takwim_minquo,
                td_maxquota: takwim_maxquo,
                doctor: takwim_doc
            });
        }
    }

    var dataSource = calendar.getDataSource(ds());

    $.ajax({
        type: "POST",
        url: "/medical/takwim",
        dataType: "json",
        data: {_token: token, count: event.count, venue: event.venue, session: event.session, mb_category: event.mb_category, chairman: event.chairman, secretariat: event.sectariat, date_takwim: event.date_takwim, hospital_id: event.hospital_id, statecode: event.statecode, table: array},
        error: function(data) {
          // alert('FAIL!');
          Swal.fire({"title":" Fail","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
        },
        success:function(data){
            // alert('COMEON');
            if(data.data == 0){
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"success","position":"top-end"});
            }else{
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
            }
        }
     });

    var countArray = event.count;
    var counter = '0';
    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            for(i=0; i<countArray; i++){
                $('#addtable'+ i).remove();
                counter -= 1;
                var count = $('#takwim_table_count').val() - 1; 
                $('#takwim_table_count').val(count); 
            }
        }
    }

    dataSource.push(event);

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    ds();
    
    $('#event-modal select[name="takwim_medical_board_category"]').val("").trigger("change");
    $('#event-modal').modal('hide');
}

function updateEvent(k) {

    var medical_board_category2 = $('#update-modal select[name="takwim_medical_board_category"]').val();
    let token = $('form').find('input[name="_token"]').val();

    @foreach ($ref_table->mb_category as $value)
    if(medical_board_category2 == '1'){
        var mb_color = 'blue';
        if(medical_board_category2 == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category2 == '2'){
        var mb_color = 'green';
        if(medical_board_category2 == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category2 == '3'){
        var mb_color = 'yellow';
        if(medical_board_category2 == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category2 == '4'){
        var mb_color = 'purple';
        if(medical_board_category2 == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }
    @endforeach

    if(k == '1'){
        var countArray = $('#update-modal input[name="takwim_table_count"]').val();

        var event2 = {
            id: $('#update-modal input[name="takwim-index"]').val(),
            count: $('#update-modal input[name="takwim_table_count"]').val(),
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            // name: mb_category1,
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            chairman: $('#update-modal select[name="takwim_chairman"]').val(),
            sectariat: $('#update-modal select[name="takwim_sectariat"]').val(),
            doc_speciality: $('#update-modal select[name="takwim_discipline_updt"]').val(),
            doctor: $('#update-modal select[name="takwim_doctor_updt"]').val(), 
            minquota: $('#update-modal input[name="takwim_minquota"]').val(),
            maxquota: $('#update-modal input[name="takwim_maxquota"]').val(),
            td_id: $('#update-modal input[name="tdid"]').val(),
            tdoctor_id: $('#update-modal input[name="tdoctor_id"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            statecode: $('#takwim_statecode').val(),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            remarks_id: $('#update-modal input[name="takwim_remarks_id"]').val(),
            date_takwim: $('#update-modal input[name="takwim-start-date"]').val(),
            startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
            color: mb_color
        }
    }
    else{
        var countArray = $('#reschedule-modal input[name="takwim_table_count"]').val();

        var event2 = {
            id: $('#reschedule-modal input[name="takwim-index"]').val(),
            count: $('#reschedule-modal input[name="takwim_table_count"]').val(),
            venue: $('#reschedule-modal input[name="takwim_venue"]').val(),
            session: $('#reschedule-modal select[name="takwim_session"]').val(),
            // name: mb_category1,
            mb_category: $('#reschedule-modal select[name="takwim_medical_board_category"]').val(),
            chairman: $('#reschedule-modal select[name="takwim_chairman"]').val(),
            sectariat: $('#reschedule-modal select[name="takwim_sectariat"]').val(),
            doc_speciality: $('#reschedule-modal select[name="takwim_discipline_updt"]').val(),
            doctor: $('#reschedule-modal select[name="takwim_doctor_updt"]').val(), 
            minquota: $('#reschedule-modal input[name="takwim_minquota"]').val(),
            maxquota: $('#reschedule-modal input[name="takwim_maxquota"]').val(),
            td_id: $('#reschedule-modal input[name="tdid"]').val(),
            tdoctor_id: $('#reschedule-modal input[name="tdoctor_id"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            statecode: $('#takwim_statecode').val(),
            remarks: $('#reschedule-modal textarea[name="takwim_remarks"]').val(),
            remarks_id: $('#update-modal input[name="takwim_remarks_id"]').val(),
            date_takwim: $('#reschedule-modal input[name="takwim-start-date"]').val(),
            startDate: $('#reschedule-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#reschedule-modal input[name="takwim-end-date"]').datepicker('getDate'),
            color: mb_color
        }
    }

    var array2 = [];
    array2.push({
        td_id: event2.td_id,
        td_discipline: event2.doc_speciality,
        td_minquota: event2.minquota,
        td_maxquota: event2.maxquota,
        tdoctor_id: event2.tdoctor_id,
        doctor: event2.doctor,
    });
    if(countArray > '1'){
        for(i=1; i<countArray; i++){

            if(k == '1'){
                var takwim_dis = $('#update-modal select[name="takwim_discipline'+ i +'"]').val();
                var takwim_doc = $('#update-modal select[name="takwim_doctor'+ i +'"]').val();
                var takwim_minquo = $('#update-modal input[name="takwim_minquota'+ i +'"]').val();
                var takwim_maxquo = $('#update-modal input[name="takwim_maxquota'+ i +'"]').val();
                var td_id1 = $('#update-modal input[name="tdid'+ i +'"]').val();
                var tdoctor_id1 = $('#update-modal input[name="tdoctor_id'+ i +'"]').val();
            }else{
                var takwim_dis = $('#reschedule-modal select[name="takwim_discipline'+ i +'"]').val();
                var takwim_doc = $('#reschedule-modal select[name="takwim_doctor'+ i +'"]').val();
                var takwim_minquo = $('#reschedule-modal input[name="takwim_minquota'+ i +'"]').val();
                var takwim_maxquo = $('#reschedule-modal input[name="takwim_maxquota'+ i +'"]').val();
                var td_id1 = $('#reschedule-modal input[name="tdid'+ i +'"]').val();
                var tdoctor_id1 = $('#reschedule-modal input[name="tdoctor_id'+ i +'"]').val();
            }
            
            array2.push({
                td_discipline: takwim_dis,
                td_minquota: takwim_minquo,
                td_maxquota: takwim_maxquo,
                doctor: takwim_doc,
                td_id: td_id1,
                tdoctor_id: tdoctor_id1
            });
        }
    }

    // console.log(array2);

    var dataSource = calendar.getDataSource(ds());

    for (var i in dataSource) {
        if (dataSource[i].id == event2.id) {
            dataSource[i].venue = event2.venue;
            dataSource[i].session = event2.session;
            // dataSource[i].name = event2.name;
            dataSource[i].mb_category = event2.mb_category;
            dataSource[i].doc_speciality = event2.doc_speciality;
            dataSource[i].doctor = event2.doctor;
            dataSource[i].minquota = event2.minquota;
            dataSource[i].maxquota = event2.maxquota;
            dataSource[i].td_id = event2.td_id;
            dataSource[i].tdoctor_id = event2.tdoctor_id;
            dataSource[i].date_takwim = event2.date_takwim;
            dataSource[i].chairman_id = event2.chairman;
            dataSource[i].secretariat_id = event2.sectariat;
            dataSource[i].remarks = event2.remarks;
            dataSource[i].startDate = event2.startDate;
            dataSource[i].endDate = event2.endDate;
            dataSource[i].color = event2.color;
            dataSource[i].table = array2;
        }
    }

    $.ajax({
        type: "POST",
        url: "/medical/takwim/update",
        dataType: "json",
        data: {_token: token, takwim_id: event2.id, count: event2.count, venue: event2.venue, session: event2.session, date_takwim: event2.date_takwim, mb_category: event2.mb_category, chairman: event2.chairman, secretariat: event2.sectariat, remarks: event2.remarks, remarks_id: event2.remarks_id, statecode: event2.statecode, hospital_id: event2.hospital_id, table: array2},
        error: function(data) {
          // alert('FAIL!');
          Swal.fire({"title":" Fail","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
        },
        success:function(data){
            // alert('COMEON');
            if(data.data == 0){
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"success","position":"top-end"});
            }else{
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
            }
        }
    });

    dataSource.push(event);

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    ds();

    if(k == '1'){
        var counter = $('#update-modal input[name="takwim_table_count"]').val() ? $('#update-modal input[name="takwim_table_count"]').val():'0';
        var countArray = $('#update-modal input[name="takwim_table_count"]').val();

        if(countArray >= '1'){
            for(i=0; i<countArray; i++){
                $('#addtableupdate'+ i).remove();
                counter -= 1;
                var count = $('#update-modal input[name="takwim_table_count"]').val() - 1; 
                $('#update-modal input[name="takwim_table_count"]').val(count); 
            }
        }
        $('#update-modal').modal('hide');
    }
    else
        $('#reschedule-modal').modal('hide');

}

function rescheduleEvent2() {

    var event = {
        id: $('#reschedule-modal input[name="takwim-index"]').val(),
        count: $('#reschedule-modal input[name="takwim_table_count"]').val(),
        startDate: $('#reschedule-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#reschedule-modal input[name="takwim-end-date"]').datepicker('getDate'),
    }

    if(event.count >= '1'){
        var takwimid_array = [];
        for(i=0; i<event.count; i++){
            var takwim_id = $('#reschedule-modal input[name="takwim_id'+ i +'"]').val();

            takwimid_array.push({
                takwim_id: takwim_id
            });
        }
        console.log(takwimid_array);
        //return array;
    }else{
        var takwimid_array = 'null';
    }

    var dataSource = calendar.getDataSource(ds());

    $.ajax({
        type: "POST",
        url: "/takwim/reschedule",
        dataType: "json",
        data: {id: event.id, count: event.count, table: takwimid_array},
        success:function(data){
            alert(data.success);
       }
    });

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    $('#reschedule-modal').modal('hide');


}

function saveDuplicateEvent() {

    var medical_board_category = $('#duplicate-modal select[name="takwim_medical_board_category"]').val();
    let token = $('form').find('input[name="_token"]').val();

    @foreach ($ref_table->mb_category as $value)
    if(medical_board_category == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }else if(medical_board_category == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->ref_code}}'){
            var mb_category1 = '{{$value->desc_en}}';
        }
    }
    @endforeach

    var event = {
        count: $('#duplicate-modal input[name="takwim_table_count"]').val(),
        venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
        session: $('#duplicate-modal select[name="takwim_session"]').val(),
        // name: mb_category1,
        mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
        chairman: $('#duplicate-modal select[name="takwim_chairman"]').val(),
        sectariat: $('#duplicate-modal select[name="takwim_sectariat"]').val(),
        doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
        doctor: $('#duplicate-modal select[name="takwim_doctor"]').val(), 
        minquota: $('#duplicate-modal input[name="takwim_minquota"]').val(),
        maxquota: $('#duplicate-modal input[name="takwim_maxquota"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        statecode: $('#takwim_statecode').val(),
        newstartdate: $('#duplicate-modal input[name="takwim-start-date"]').val(),
        newenddate: $('#duplicate-modal input[name="takwim-end-date"]').val(),
        startDate: $('#duplicate-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#duplicate-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    var countArray = $('#duplicate-modal input[name="takwim_table_count"]').val();
    var array = [];
    array.push({
        td_discipline: event.doc_speciality,
        td_minquota: event.minquota,
        td_maxquota: event.maxquota,
        doctor: event.doctor
    });
    if(countArray >= '1'){
        for(i=1; i<countArray; i++){
            var takwim_dis = $('#duplicate-modal select[name="takwim_discipline'+ i +'"]').val();
            var takwim_doc = $('#duplicate-modal select[name="takwim_doctor'+ i +'"]').val();
            var takwim_minquo = $('#duplicate-modal input[name="takwim_minquota'+ i +'"]').val();
            var takwim_maxquo = $('#duplicate-modal input[name="takwim_maxquota'+ i +'"]').val();

            array.push({
                td_discipline: takwim_dis,
                td_minquota: takwim_minquo,
                td_maxquota: takwim_maxquo,
                doctor: takwim_doc
            });
        }
    }

    var dataSource = calendar.getDataSource(ds());
    $.ajax({
        type: "POST",
        url: "/medical/takwim/duplicate",
        dataType: "json",
        data: {_token: token, count: event.count, venue: event.venue, session: event.session, mb_category: event.mb_category, chairman: event.chairman, sectariat: event.sectariat, newstartdate: event.newstartdate, newenddate: event.newenddate, hospital_id: event.hospital_id, statecode: event.statecode, table: array},
        error: function(data) {
          // alert('FAIL!');
          Swal.fire({"title":" Fail","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
        },
        success:function(data){
            // alert('COMEON');
            if(data.data == 0){
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"success","position":"top-end"});
            }else{
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
            }
        }
     });

    dataSource.push(event);

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    ds();
    $('#duplicate-modal').modal('hide');
}

function deletedEvent(){

    var takwim_id = $('#delete-modal input[name="takwim-index"]').val();
    let token = $('form').find('input[name="_token"]').val();

    $.ajax({
        type: "POST",
        url: "/medical/takwim/destroy",
        dataType: "json",
        data: {_token: token, takwim_id: takwim_id},
        error: function(data) {
          // alert('FAIL!');
          Swal.fire({"title":" Fail","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
        },
        success:function(data){
            // alert('COMEON');
            if(data.data == 0){
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"success","position":"top-end"});
            }else{
                Swal.fire({"title":" " + data.message,"text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","animation":true,"showConfirmButton":false,"showCloseButton":true,"toast":true,"type":"error","position":"top-end"});
            }
        }
    });

    calendar.setDataSource(ds());
    ds();
    $('#delete-modal').modal('hide');
}

function ds() {
    var currentYear = new Date().getFullYear();
    var takwim_medical_board_category_calendar = $('#takwim_medical_board_category_calendar').val();
    // alert(takwim_medical_board_category_calendar);
    if(takwim_medical_board_category_calendar == '')
        var takwim_medical_board_category_calendar = 'NULL';

    var disable = [];
    var result= [];

    $.ajax({
        url: '/medical/takwim/annualAgendaCalendar/' + hospital_id + '/' + takwim_medical_board_category_calendar,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function (doc) {
            // alert('ds');
            // console.log(doc);
            // var result= [];

            $(doc).each(function() {

                if($(this).attr('startDate')){
                    var date = $(this).attr('startDate');
                    // alert(date);
                    var year = date.substring(0, 4);
                    var month1 = date.substring(4, 5);
                    var mb_category1 = '';

                    if(month1 == 0){
                        var month = date.substring(5, 6) - 1;
                    }else{
                        var month = date.substring(4, 6) - 1;
                    }
                    var day1 = date.substring(6, 7);
                    if(day1 == 0){
                        var day = date.substring(7, 8);
                    }else{
                        var day = date.substring(6, 8);
                    }
                    var medical_board_category = $(this).attr('name');

                    @foreach ($ref_table->mb_category as $value)
                    if(medical_board_category == '1'){
                        var mb_color = 'blue';
                        if(medical_board_category == '{{$value->ref_code}}'){
                            var mb_category1 = '{{$value->desc_en}}';
                            var mb_category1 = 'MB';
                        }
                    }else if(medical_board_category == '2'){
                        var mb_color = 'green';
                        if(medical_board_category == '{{$value->ref_code}}'){
                            var mb_category1 = '{{$value->desc_en}}';
                            var mb_category1 = 'SMB';
                        }
                    }else if(medical_board_category == '3'){
                        var mb_color = 'yellow';
                        if(medical_board_category == '{{$value->ref_code}}'){
                            var mb_category1 = '{{$value->desc_en}}';
                            var mb_category1 = 'MAB';
                        }
                    }else if(medical_board_category == '4'){
                        var mb_color = 'purple';
                        if(medical_board_category == '{{$value->ref_code}}'){
                            var mb_category1 = '{{$value->desc_en}}';
                            var mb_category1 = 'SMAB';
                        }
                    }
                    @endforeach

                    result.push({
                        id: $(this).attr('id'),
                        name: mb_category1,
                        mb_category: $(this).attr('name'),
                        venue: $(this).attr('location'),
                        startDate: new Date(year, month, day),
                        endDate: new Date(year, month, day),
                        session: $(this).attr('session'),
                        remarks: $(this).attr('remarks'),
                        hospital_id: $(this).attr('hospital_id'),
                        chairman_id: $(this).attr('chairman_id'),
                        secretariat_id: $(this).attr('secretariat_id'),
                        remarks_id: $(this).attr('remarks_id'),
                        table: $(this).attr('table'),
                        color: mb_color
                    });
                }else {

                    var ph = $(this).attr('publicholiday');
                    var countph = ph.length;

                    for(i=0; i<countph; i++){

                        var start_year = ph[i].start_date.substring(0, 4);
                        var start_month1 = ph[i].start_date.substring(5, 6);
                        if(start_month1 == 0){
                            var start_month = ph[i].start_date.substring(6, 7) - 1;
                        }else{
                            var start_month = ph[i].start_date.substring(5, 7) - 1;
                        }
                        var start_day1 = ph[i].start_date.substring(8, 9);
                        if(start_day1 == 0){
                            var start_day = ph[i].start_date.substring(9, 10);
                        }else{
                            var start_day = ph[i].start_date.substring(8, 10);
                        }

                        var end_year = ph[i].end_date.substring(0, 4);
                        var end_month1 = ph[i].end_date.substring(5, 6);
                        if(end_month1 == 0){
                            var end_month = ph[i].end_date.substring(6, 7) - 1;
                        }else{
                            var end_month = ph[i].end_date.substring(5, 7) - 1;
                        }
                        var end_day1 = ph[i].end_date.substring(8, 9);
                        if(end_day1 == 0){
                            var end_day = ph[i].end_date.substring(9, 10);
                        }else{
                            var end_day = ph[i].end_date.substring(8, 10);
                        }

                        var mb_color = 'red';

                        result.push({
                            id: 'ph',
                            name: ph[i].name,
                            startDate: new Date(start_year, start_month, start_day),
                            endDate: new Date(end_year, end_month, end_day),
                            color: mb_color
                        });
                        disable.push(new Date(start_year, start_month, start_day));
                        disable.push(new Date(end_year, end_month, end_day));
                    }
                } 
            });
            // console.log(result);
            calendar.setDataSource(result); 
            // calendar.setDisabledDays(disable);
        }
    });
    // console.log(disable);
    return disable;  
};

$(function() {
    var currentYear = new Date().getFullYear();
    var currentDate = new Date(currentYear, new Date().getMonth(), new Date().getDate()).getTime();

    var today = new Date();
    var today1 = new Date();
    today1.setDate(today.getDate() + 31);

    var currentDay = today1.getDate();
    var currentMonth = today1.getMonth();

    var min = currentYear - 2;
    var max = currentYear + 1;

    var d = ds();
    
    calendar = new Calendar('#calendar', {
        // minDate: new Date (min, 12, 1),
        maxDate: new Date (max, 11, 31),
        enableContextMenu: true,
        enableRangeSelection: true,
        preventRendering: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Reschedule',
                click: rescheduleEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],
        // disabledDays: d,
        selectRange: function(e) {
            var year = e.startDate.getFullYear();
            var disable = d;
            var yes = 0;

            for(var i in disable)
            {
                if(disable[i].getTime() == e.startDate.getTime())
                    var yes = 1;
            }

            if(year >= currentYear && yes == 0){
                setEvent({ startDate: e.startDate, endDate: e.endDate });
            }
        },
        mouseOnDay: function(e) {

            // console.log(e.events);
            if(e.events.length > 0) {
                var content = '';

                for(var i in e.events) {

                    if(e.events[i].mb_category){

                        var medical_board_category = e.events[i].mb_category;
                        var mb_color = ''; 
                        var mb_category1 = ''; 
                        var session = ''; 

                        @foreach ($ref_table->mb_category as $value)
                        if(medical_board_category == '1'){
                            var mb_color = 'blue';
                            if(medical_board_category == '{{$value->ref_code}}'){
                                var mb_category1 = '{{$value->desc_en}}';
                            }
                        }else if(medical_board_category == '2'){
                            var mb_color = 'green';
                            if(medical_board_category == '{{$value->ref_code}}'){
                                var mb_category1 = '{{$value->desc_en}}';
                            }
                        }else if(medical_board_category == '3'){
                            var mb_color = 'yellow';
                            if(medical_board_category == '{{$value->ref_code}}'){
                                var mb_category1 = '{{$value->desc_en}}';
                            }
                        }else if(medical_board_category == '4'){
                            var mb_color = 'purple';
                            if(medical_board_category == '{{$value->ref_code}}'){
                                var mb_category1 = '{{$value->desc_en}}';
                            }
                        }
                        @endforeach

                        var session1 = e.events[i].session;

                        @foreach ($ref_table->sidang as $s)
                            if(session1 == '1'){
                                if(session1 == '{{$s->ref_code}}'){
                                    var session = '{{$s->desc_en}}';
                                }
                            }else if(session1 == '2'){
                                if(session1 == '{{$s->ref_code}}'){
                                    var session = '{{$s->desc_en}}';
                                }
                            }
                        @endforeach

                        // var doc_speciality1 = e.events[i].doc_speciality;

                        // @foreach ($ref_table->doc_special as $value)
                        //     if(doc_speciality1 == '{{$value->ref_code}}'){
                        //         var d = '{{$value->desc_en}}';
                        //         // alert(d);
                        //     }
                        // @endforeach

                        var venue1 = e.events[i].venue;
                        var table1 = e.events[i].table;
                        var hospitalid = e.events[i].hospital_id;

                        @foreach($hospital as $hs){
                            @foreach($hs as $h)
                                if(hospitalid == '{{$h->id}}')
                                    var hospital = '{{$h->name}}';
                            @endforeach
                        }
                        @endforeach

                        if(table1.table != ''){
                            var x = '';
                            for (i in table1.table) {
                                @foreach ($ref_table->doc_special as $value)
                                // console.log('masuk');
                                    if(table1.table[i].td_discipline == '{{$value->ref_code}}'){
                                        var k = '{{$value->desc_en}}';
                                        x += k + "/";
                                    }
                                @endforeach
                            }
                        }else{
                            var x = 'yuhuhuuu';
                        }

                        content += '<div class="event-tooltip-content">'
                                        + '<div class="event-venue" style="color:' + mb_color + ';">Medical Category: <b>' + mb_category1 +'</b></div>'
                                        + '<div class="event-medical_board_category">Venue: ' + venue1 + '</div>'
                                        + '<div class="event-session">Session: ' + session + '</div>'
                                        + '<div class="event-speciality">Speciality: ' + x +'</div>'
                                        // + '<div class="event-hospital">Hospital: ' + hospital +'</div>'
                                        + '<div class="event-hospital">Hospital: Hospital Kuala Lumpur</div>'
                                    + '</div><hr>';
                    }else{
                        // alert(e.events[i].name);
                        content += '<div class="event-tooltip-content">'
                                        + '<div class="event-venue"> <b>' + e.events[i].name +'</b></div>'
                                    + '</div>';
                    }
                    
                }

                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {     
            $(e.element).popover('hide');
        },
        customDayRenderer: function(element, date) {

            // var y = d;

            // for(var i in y) {
            //     if(date.getTime() == y[i].getTime()) {
            //         $(element).parent().addClass('disabled');
            //         $(element).addClass('disabled');
            //         $(element).parent().css('box-shadow', 'rgb(255, 153, 51) 0px -4px 0px 0px inset');
            //     }
            // }

            if(date.getTime() == currentDate) {
                $(element).css('font-weight', 'bold');
            }
        },
        // customDataSourceRenderer: function(element, date) {
        //      var y = d;
        //      console.log(y);
        //     for(var i in d) {
        //         if(date.getTime() == d[i]) {
        //             alert('IN');
        //             $(element).css('font-weight', 'bold');
        //             $(element).css('font-size', '15px');
        //             $(element).css('color', 'green');
        //         }
        //     }

            // if(date.getTime() == redDateTime) {
            //     $(element).css('font-weight', 'bold');
            //     $(element).css('font-size', '15px');
            //     $(element).css('color', 'green');
            // }
            // else if(date.getTime() == circleDateTime) {
            //     $(element).css('background-color', 'red');
            //     $(element).css('color', 'white');
            //     $(element).css('border-radius', '15px');
            // }
            // else if(date.getTime() == borderDateTime) {
            //     $(element).css('border', '2px solid blue');
            // }
        // },
        // disabledWeekDays: [0, 6],
    });
    ds();

    $('#save-event').click(function() {

        $('#addtakwim_form').validate({ // initialize the plugin      
            submitHandler: function (form) { // for demo
                saveEvent();
                return false; // for demo
            },
        });

    });

    $('#update-event').click(function() {

        $('#updatetakwim_form').validate({ // initialize the plugin      
            submitHandler: function (form) { // for demo
                var i = '1';
                updateEvent(i);
                return false; // for demo
            },
        });

    });

    // $('#reschedule-modal input[name="takwim-start-date"]').keypress(function(e) {
    //     e.preventDefault();
    // });

    $('#reschedule-event').click(function() {

        $('#rescheduletakwim_form').validate({ // initialize the plugin      
            submitHandler: function (form) { // for demo
                var i = '2';
                updateEvent(i);
                return false; // for demo
            },
        });

    });

    $('#duplicate-event').click(function() {

        var count = $('#update-modal input[name="takwim_table_count"]').val();
        if(count >= '1'){
            var arraytbl = [];
            for(i=0; i<count; i++){
                if(i==0)
                {
                    var takwim_dis = $('#update-modal select[name="takwim_discipline_updt"]').val();
                    var takwim_doc = $('#update-modal select[name="takwim_doctor_updt"]').val();
                    var takwim_maxquo = $('#update-modal input[name="takwim_maxquota"]').val();
                    var takwim_minquo = $('#update-modal input[name="takwim_minquota"]').val();

                    arraytbl.push({
                        td_discipline: takwim_dis,
                        doctor: takwim_doc,
                        td_maxquota: takwim_maxquo,
                        td_minquota: takwim_minquo,
                    });
                }else
                {
                    var takwim_dis = $('#update-modal select[name="takwim_discipline'+i+'"]').val();
                    var takwim_doc = $('#update-modal select[name="takwim_doctor'+i+'"]').val();
                    var takwim_maxquo = $('#update-modal input[name="takwim_maxquota'+i+'"]').val();
                    var takwim_minquo = $('#update-modal input[name="takwim_minquota'+i+'"]').val();

                    arraytbl.push({
                        td_discipline: takwim_dis,
                        doctor: takwim_doc,
                        td_maxquota: takwim_maxquo,
                        td_minquota: takwim_minquo,
                    });
                }
            }
            // console.log(arraytbl);
            //return array;
        }

        var event = {
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            chairman: $('#update-modal select[name="takwim_chairman"]').val(),
            secretariat: $('#update-modal select[name="takwim_sectariat"]').val(),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            statecode: $('#takwim_statecode').val(),
            table: arraytbl,
        }

        // console.log(event);
        duplicateEvent(event);
    });

    $('#duplicate2-event').click(function() {
        
        $('#duplicatetakwim_form').validate({ // initialize the plugin      
            submitHandler: function (form) { // for demo
                saveDuplicateEvent();
                return false; // for demo
            },
        });       
        
    });

    $('#delete1-event').click(function() {
        
        var result = confirm("Are you sure you want to delete this record?");
        if (result) {
            deletedEvent();
        }

    });

});

}

</script>


