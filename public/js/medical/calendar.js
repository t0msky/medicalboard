
function calendar(hospital_id){
// alert(hospital_id);
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let calendar = null;

function setEvent(event) {
    $('#event-modal input[name="takwim-start-date"]').css('pointer-events', 'none');

    $('#event-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#event-modal input[name="takwim_table_count"]').val(event ? event.count : '');
    $('#event-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#event-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#event-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#event-modal select[name="takwim_chairman"]').val(event ? event.chairman_id : '');
    $('#event-modal select[name="takwim_sectariat"]').val(event ? event.secretariat_id : '');
    $('#event-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    $('#event-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    $('#event-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#event-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#event-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countArray = $('#event-modal input[name="takwim_table_count"]').val();
    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            $('#event-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.doc_speciality : '');
            $('#event-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.doctor : '');
            $('#event-modal input[name="takwim_quota'+ i +'"]').val(event ? event.quota : '');
        }
    }

    $('#event-modal').modal();
}

function editEvent(event) {
    $('#update-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#update-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        // alert(countArray);
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
    // $('#update-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#update-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#update-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#update-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#update-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#update-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    // console.log(event.table['table']);
    // console.log(event.table['table'].length);
    // console.log(event.table['table'][3].speciality_id);

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#update-modal select[name="takwim_discipline"]').val(event ? event.table['table'][i].td_disciplineid : '');
                $('#update-modal select[name="takwim_doctor"]').val(event ? event.table['table'][i].td_doctorid : '');
                $('#update-modal input[name="takwim_quota"]').val(event ? event.table['table'][i].td_quota : '');
                $('#update-modal input[name="td_id"]').val(event ? event.table['table'][i].td_id : '');
                counter++;
                $('#update-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtableupdate"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" required class="form-control"><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($discipline as $value)<option value={{$value->refcode}}>{{$value->descen}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" required class="form-control"><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_quota'+ counter +'" required class="form-control"><input type="hidden" name="td_id'+ counter +'" required class="form-control"></td>';
                cols += '<td><input type="number" name="takwim_quota1'+ counter +'" required class="form-control"></td>';

                cols += '<td><button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';

                newRow.append(cols);
                $("table.order-list2").append(newRow);
                counter++;
                $('#update-modal input[name="takwim_table_count"]').val(counter);
            }
            
        }
        for(i=1; i<countTable; i++)
        {
            $('#update-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_disciplineid : '');
            $('#update-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].td_doctorid : '');
            $('#update-modal input[name="takwim_quota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#update-modal input[name="td_id'+ i +'"]').val(event ? event.table['table'][i].td_id : '');
        }
    }

    $('#update-modal').modal();
}

function rescheduleEvent(event) {
    // $('#update-modal input[name="takwim-start-date"]').css('pointer-events', 'none');
    var countArray = $('#reschedule-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        // alert(countArray);
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
    // $('#reschedule-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#reschedule-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#reschedule-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#reschedule-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#reschedule-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#reschedule-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#reschedule-modal select[name="takwim_discipline"]').val(event ? event.table['table'][i].td_disciplineid : '');
                $('#reschedule-modal select[name="takwim_doctor"]').val(event ? event.table['table'][i].td_doctorid : '');
                $('#reschedule-modal input[name="takwim_quota"]').val(event ? event.table['table'][i].td_quota : '');
                $('#reschedule-modal input[name="td_id"]').val(event ? event.table['table'][i].td_id : '');
                counter++;
                $('#reschedule-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtablereschedule"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($discipline as $value)<option value={{$value->refcode}}>{{$value->descen}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_quota'+ counter +'" class="form-control" disabled><input type="hidden" name="takwim_id'+ counter +'" required class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_quota1'+ counter +'" required class="form-control" disabled></td>';

                // cols += '<td><button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';

                newRow.append(cols);
                $("table.order-list3").append(newRow);
                counter++;
                $('#reschedule-modal input[name="takwim_table_count"]').val(counter);
                }
            }
        for(i=1; i<countTable; i++)
        {
            $('#reschedule-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_disciplineid : '');
            $('#reschedule-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].td_doctorid : '');
            $('#reschedule-modal input[name="takwim_quota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#reschedule-modal input[name="td_id'+ i +'"]').val(event ? event.table['table'][i].td_id : '');
        }
    }


    $('#reschedule-modal').modal();
}

// function quota(event) {
//     $('#quota-modal input[name="takwim_hospital"]').val(event ? event.hospital_id : '');
//     $('#quota-modal input[name="takwim_quota"]').val(event ? event.quota : '');
//     $('#quota-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
//     $('#quota-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
//     $('#quota-modal').modal();
// }

function duplicateEvent(event) {
    var countArray = $('#duplicate-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        // alert(countArray);
        for(i=0; i<countArray; i++){
            $('#addtableduplicate'+ i).remove();
            counter -= 1;
            var count = $('#duplicate-modal input[name="takwim_table_count"]').val() - 1; 
            $('#duplicate-modal input[name="takwim_table_count"]').val(count); 
        }
    }

    $('#duplicate-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#duplicate-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#duplicate-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#duplicate-modal select[name="takwim_chairman"]').val(event ? event.chairman : '');
    $('#duplicate-modal select[name="takwim_sectariat"]').val(event ? event.sectariat : '');
    // $('#duplicate-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#duplicate-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#duplicate-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#duplicate-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#duplicate-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#duplicate-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table.length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#duplicate-modal select[name="takwim_discipline"]').val(event ? event.table[i].td_disciplineid : '');
                $('#duplicate-modal select[name="takwim_doctor"]').val(event ? event.table[i].td_doctorid : '');
                $('#duplicate-modal input[name="takwim_quota"]').val(event ? event.table[i].td_quota : '');
                $('#duplicate-modal input[name="td_id"]').val(event ? event.table[i].td_id : '');
                counter++;
                $('#duplicate-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtableduplicate"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($discipline as $value)<option value={{$value->refcode}}>{{$value->descen}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_quota'+ counter +'" class="form-control" disabled><input type="hidden" name="takwim_id'+ counter +'" required class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_quota1'+ counter +'" required class="form-control" disabled></td>';

                // cols += '<td><button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';

                newRow.append(cols);
                $("table.order-list4").append(newRow);
                counter++;
                $('#duplicate-modal input[name="takwim_table_count"]').val(counter);
                }
            }
        for(i=1; i<countTable; i++)
        {
            $('#duplicate-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table[i].td_disciplineid : '');
            $('#duplicate-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table[i].td_doctorid : '');
            $('#duplicate-modal input[name="takwim_quota'+ i +'"]').val(event ? event.table[i].td_quota : '');
            $('#duplicate-modal input[name="td_id'+ i +'"]').val(event ? event.table[i].td_id : '');
        }
    }

    $('#duplicate-modal').modal();
}

function deleteEvent(event) {
    var countArray = $('#delete-modal input[name="takwim_table_count"]').val();

    if(countArray >= '1'){
        // alert(countArray);
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
    // $('#delete-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#delete-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#delete-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#delete-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#delete-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#delete-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');

    var countTable = event.table['table'].length;
    if(countTable != '')
    {   var counter = 0;
        for(i=0; i<countTable; i++)
        {
            if(i==0)
            {
                $('#delete-modal select[name="takwim_discipline"]').val(event ? event.table['table'][i].td_disciplineid : '');
                $('#delete-modal select[name="takwim_doctor"]').val(event ? event.table['table'][i].td_doctorid : '');
                $('#delete-modal input[name="takwim_quota"]').val(event ? event.table['table'][i].td_quota : '');
                $('#delete-modal input[name="td_id"]').val(event ? event.table['table'][i].td_id : '');
                counter++;
                $('#delete-modal input[name="takwim_table_count"]').val(counter);
            }else
            {
                var newRow = $("<tr id='addtabledelete"+ counter +"'>");
                var cols = "";

                cols += '<td><select name="takwim_discipline'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($discipline as $value)<option value={{$value->refcode}}>{{$value->descen}}</option>@endforeach</select></td>';
                cols += '<td><select name="takwim_doctor'+ counter +'" class="form-control" disabled><option value="">-- @lang('medical_board/index.please_select') -- </option>@foreach ($doctor as $value)<option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>@endforeach</select></td>';
                cols += '<td><input type="number" name="takwim_quota'+ counter +'" class="form-control" disabled><input type="hidden" name="takwim_id'+ counter +'" required class="form-control" disabled></td>';
                cols += '<td><input type="number" name="takwim_quota1'+ counter +'" required class="form-control" disabled></td>';

                // cols += '<td><button type="button" class="ibtnDelupdate btn btn-md btn-danger"><i class="fas fa-trash-alt"></i></button></td>';

                newRow.append(cols);
                $("table.order-list5").append(newRow);
                counter++;
                $('#delete-modal input[name="takwim_table_count"]').val(counter);
                }
            }
        for(i=1; i<countTable; i++)
        {
            $('#delete-modal select[name="takwim_discipline'+ i +'"]').val(event ? event.table['table'][i].td_disciplineid : '');
            $('#delete-modal select[name="takwim_doctor'+ i +'"]').val(event ? event.table['table'][i].td_doctorid : '');
            $('#delete-modal input[name="takwim_quota'+ i +'"]').val(event ? event.table['table'][i].td_quota : '');
            $('#delete-modal input[name="td_id'+ i +'"]').val(event ? event.table['table'][i].td_id : '');
        }
    }

    $('#delete-modal').modal();
}

function saveEvent() {

    // alert('IN');

    var medical_board_category = $('#event-modal select[name="takwim_medical_board_category"]').val();

    @foreach ($medical_board_category1 as $value)
    if(medical_board_category == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }
    @endforeach

    var event = {
        id: $('#event-modal input[name="takwim-index"]').val(),
        count: $('#takwim_table_count').val(),
        venue: $('#event-modal input[name="takwim_venue"]').val(),
        session: $('#event-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#event-modal select[name="takwim_medical_board_category"]').val(),
        chairman: $('#event-modal select[name="takwim_chairman"]').val(),
        sectariat: $('#event-modal select[name="takwim_sectariat"]').val(),
        doc_speciality: $('#event-modal select[name="takwim_discipline"]').val(),
        doctor: $('#event-modal select[name="takwim_doctor"]').val(), 
        quota: $('#event-modal input[name="takwim_quota"]').val(),
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
                discipline: event.doc_speciality,
                doctor: event.doctor,
                quota: event.quota
            });
    if(countArray >= '1'){
        for(i=0; i<countArray; i++){
            var takwim_dis = $('#event-modal select[name="takwim_discipline'+ i +'"]').val();
            var takwim_doc = $('#event-modal select[name="takwim_doctor'+ i +'"]').val();
            var takwim_quo = $('#event-modal input[name="takwim_quota'+ i +'"]').val();

            array.push({
                discipline: takwim_dis,
                doctor: takwim_doc,
                quota: takwim_quo
            });
        }
        // return array;
    }
    // console.log(array);

    var dataSource = calendar.getDataSource(ds());

    $.ajax({
        type: "POST",
        url: "/takwim",
        dataType: "json",
        data: {count: event.count, venue: event.venue, session: event.session, mb_category: event.mb_category, chairman: event.chairman, sectariat: event.sectariat, date_takwim: event.date_takwim, hospital_id: event.hospital_id, statecode: event.statecode, table: array},
        success:function(data){
            // alert('COMEON');
            alert(data.success);
       }
     });

    dataSource.push(event);

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    $('#event-modal').modal('hide');
}

function updateEvent() {

    var medical_board_category2 = $('#update-modal select[name="takwim_medical_board_category"]').val();

    @foreach ($medical_board_category1 as $value)
    if(medical_board_category2 == '1'){
        var mb_color = 'blue';
        if(medical_board_category2 == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category2 == '2'){
        var mb_color = 'green';
        if(medical_board_category2 == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category2 == '3'){
        var mb_color = 'yellow';
        if(medical_board_category2 == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }else if(medical_board_category2 == '4'){
        var mb_color = 'purple';
        if(medical_board_category2 == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
    }
    @endforeach

    var event2 = {
        id: $('#update-modal input[name="takwim-index"]').val(),
        count: $('#update-modal input[name="takwim_table_count"]').val(),
        venue: $('#update-modal input[name="takwim_venue"]').val(),
        session: $('#update-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
        chairman: $('#update-modal select[name="takwim_chairman"]').val(),
        sectariat: $('#update-modal select[name="takwim_sectariat"]').val(),
        doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
        doctor: $('#update-modal select[name="takwim_doctor"]').val(), 
        quota: $('#update-modal input[name="takwim_quota"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        statecode: $('#takwim_statecode').val(),
        td_id: $('#update-modal input[name="td_id"]').val(),
        remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
        date_takwim: $('#update-modal input[name="takwim-start-date"]').val(),
        startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    var countArray = $('#update-modal input[name="takwim_table_count"]').val();
    array2.push({
                td_disciplineid: doc_speciality,
                td_doctorid: doctor,
                td_quota: quota,
                td_id: td_id
            });
    if(countArray > '1'){
        var array2 = [];
        for(i=1; i<countArray; i++){
            var takwim_dis = $('#update-modal select[name="takwim_discipline'+ i +'"]').val();
            var takwim_doc = $('#update-modal select[name="takwim_doctor'+ i +'"]').val();
            var takwim_quo = $('#update-modal input[name="takwim_quota'+ i +'"]').val();
            var td_id1 = $('#update-modal input[name="td_id"]').val();

            if(td_id1 == '')
                var td_id1 = 'NULL';

            array2.push({
                td_disciplineid: takwim_dis,
                td_doctorid: takwim_doc,
                td_quota: takwim_quo,
                td_id: td_id1
            });
        }
        // console.log(array2);
        //return array;
    }

    var dataSource = calendar.getDataSource(ds());

    for (var i in dataSource) {
        if (dataSource[i].id == event2.id) {
            dataSource[i].venue = event2.venue;
            dataSource[i].session = event2.session;
            dataSource[i].name = event2.name;
            dataSource[i].mb_category = event2.mb_category;
            dataSource[i].doc_speciality = event2.doc_speciality;
            dataSource[i].doctor = event2.doctor;
            dataSource[i].quota = event2.quota;
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
        url: "/takwim/update",
        dataType: "json",
        data: {id: event2.id, count: event2.count, venue: event2.venue, session: event2.session, mb_category: event2.mb_category, chairman: event2.chairman, sectariat: event2.sectariat, remarks: event2.remarks, date_takwim: event2.date_takwim, table: array2},
        success:function(data){
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
       }
    });

    dataSource.push(event);

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    $('#update-modal').modal('hide');

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
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
       }
    });

    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    $('#reschedule-modal').modal('hide');


}

function saveDuplicateEvent() {

    var medical_board_category = $('#duplicate-modal select[name="takwim_medical_board_category"]').val();

    @foreach ($medical_board_category1 as $value)
    if(medical_board_category == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // alert(mb_category1);
        // var mb_category1 = 'JD';
    }else if(medical_board_category == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDK';
    }else if(medical_board_category == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDR';
    }else if(medical_board_category == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDRK';
    }
    @endforeach

    // if(medical_board_category == '1'){
    //     var mb_color = 'blue';
    //     var mb_category1 = 'JD';
    // }else if(medical_board_category == '2'){
    //     var mb_color = 'green';
    //     var mb_category1 = 'JDK';
    // }else if(medical_board_category == '3'){
    //     var mb_color = 'yellow';
    //     var mb_category1 = 'JDR';
    // }else if(medical_board_category == '4'){
    //     var mb_color = 'purple';
    //     var mb_category1 = 'JDRK';
    // }

    var event = {
        id: $('#duplicate-modal input[name="takwim-index"]').val(),
        venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
        session: $('#duplicate-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
        doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
        hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
        statecode: $('#duplicate-modal input[name="takwim_statecode').val(),
        remarks: $('#duplicate-modal textarea[name="takwim_remarks"]').val(),
        newstartdate: $('#duplicate-modal input[name="takwim-start-date"]').val(),
        newenddate: $('#duplicate-modal input[name="takwim-end-date"]').val(),
        startDate: $('#duplicate-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#duplicate-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    // alert(event.venue);
    // alert(event.newstartdate);
    // alert(event.newenddate);
    // alert('YYYYY');

    var dataSource = calendar.getDataSource(ds());

    $.ajax({
            type: "POST",
            url: "/takwim/duplicate",
            dataType: "json",
            data:{newstartdate: event.newstartdate, newenddate: event.newenddate, hospital_id: event.hospital_id, session: event.session, mb_category: event.mb_category, venue: event.venue, statecode: event.statecode, remarks: event.remarks, doc_speciality: event.doc_speciality},
            success:function(data){
                // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
                alert(data.success);
            }
        });


    // if (event.id) {
    //     for (var i in dataSource) {
    //         if (dataSource[i].id == event.id) {
    //             dataSource[i].venue = event.venue;
    //             dataSource[i].session = event.session;
    //             dataSource[i].name = event.name;
    //             dataSource[i].mb_category = event.mb_category;
    //             dataSource[i].doc_speciality = event.doc_speciality;
    //             dataSource[i].remarks = event.remarks;
    //             dataSource[i].startDate = event.startDate;
    //             dataSource[i].endDate = event.endDate;
    //             dataSource[i].color = event.color;
    //         }
    //     }

    // }
    // else
    // {
    //     var getDateArray = function(start, end) {
    //         var arr = new Array();
    //         var dt = new Date(start);
    //         while (dt <= end) {
    //             arr.push(new Date(dt));
    //             dt.setDate(dt.getDate() + 1);
    //         }
    //         return arr;
    //     }

    //     var dateArr = getDateArray(event.startDate, event.endDate);

    //     for(var e = 0; e < dateArr.length; e++) {
    //         // alert(dateArr[e]);

    //         var newId = 0;
    //         for(var i in dataSource) {
    //             if(dataSource[i].id > newId) {
    //                 newId = dataSource[i].id;
    //             }
    //         }

    //         var event2 = {
    //             id: $('#duplicate-modal input[name="takwim-index"]').val(),
    //             venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
    //             session: $('#duplicate-modal select[name="takwim_session"]').val(),
    //             name: mb_category1,
    //             mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
    //             doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
    //             hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
    //             statecode: $('#duplicate-modal input[name="takwim_statecode').val(),
    //             remarks: $('#duplicate-modal textarea[name="takwim_remarks"]').val(),
    //             startDate: $('#duplicate-modal input[name="takwim-start-date"]').datepicker('getDate'),
    //             endDate: $('#duplicate-modal input[name="takwim-end-date"]').datepicker('getDate'),
    //             color: mb_color
    //         }
            
    //         newId++;
    //         event.id = newId;
    //         event.startDate = dateArr[e];
    //         event.endDate = dateArr[e];
    //         // alert(event.id); 
    //         // alert(event.startDate); 
    //         // alert(event.endDate);

    //         dataSource.push(event2);            
    //     }
    // } 

    calendar.setDataSource(ds());
    $('#duplicate-modal').modal('hide');
}

function saveQuota() {
    var event = {
        quota: $('#quota-modal input[name="takwim_quota"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        date_quota: $('#quota-modal input[name="takwim-start-date"]').val(),
        startDate: $('#quota-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#quota-modal input[name="takwim-end-date"]').datepicker('getDate'),
    }

    // alert(event.hospital_id);
    // alert(event.quota);
    // alert(event.date_quota);

    $.ajax({
        type: "POST",
        url: "/takwim/setQuota",
        dataType: "json",
        data: {startDate: event.startDate, endDate: event.endDate, hospital_id: event.hospital_id, quota: event.quota, date_quota: event.date_quota},
        success:function(data){
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
        }
    });
    calendar.setDataSource(ds());
    $('#quota-modal').modal('hide');
}

function deletedEvent(){

    var takwim_id = $('#delete-modal input[name="takwim-index"]').val();
    // alert(takwim_id);

    $.ajax({
        type: "POST",
        url: "/takwim/destroy",
        dataType: "json",
        data: {takwim_id: takwim_id},
        success:function(data){
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
        }
    });
    calendar.setDataSource(ds());
    $('#delete-modal').modal('hide');
}

function ds() {
    var currentYear = new Date().getFullYear();
    var takwim_medical_board_category_calendar = $('#takwim_medical_board_category_calendar').val();
    // alert(takwim_medical_board_category_calendar);
    if(takwim_medical_board_category_calendar == '')
        var takwim_medical_board_category_calendar = 'NULL';
    var disable = [];
    $.ajax({
        url: '/takwim/annualAgendaCalendar/' + hospital_id + '/' + takwim_medical_board_category_calendar,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function (doc) {
            // alert('ds');
            var result= [];
        
            $(doc).each(function() {

                if($(this).attr('startDate')){
                    var date = $(this).attr('startDate');
                    // alert(date);
                    var year = date.substring(0, 4);
                    var month1 = date.substring(4, 5);
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

                    @foreach ($medical_board_category1 as $value)
                    if(medical_board_category == '1'){
                        var mb_color = 'blue';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                    }else if(medical_board_category == '2'){
                        var mb_color = 'green';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                    }else if(medical_board_category == '3'){
                        var mb_color = 'yellow';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                    }else if(medical_board_category == '4'){
                        var mb_color = 'purple';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                    }
                    @endforeach

                            // if(medical_board_category == '1'){
                            //     var mb_color = 'blue';
                            //     var mb_category1 = 'JD';
                            // }else if(medical_board_category == '2'){
                            //     var mb_color = 'green';
                            //     var mb_category1 = 'JDK';
                            // }else if(medical_board_category == '3'){
                            //     var mb_color = 'yellow';
                            //     var mb_category1 = 'JDR';
                            // }else if(medical_board_category == '4'){
                            //     var mb_color = 'purple';
                            //     var mb_category1 = 'JDRK';
                            // }

                    result.push({
                        id: $(this).attr('id'),
                        name: mb_category1,
                        mb_category: $(this).attr('name'),
                        venue: $(this).attr('location'),
                        startDate: new Date(year, month, day),
                        endDate: new Date(year, month, day),
                        // quota: $(this).attr('quota'),
                        session: $(this).attr('session'),
                        remarks: $(this).attr('remarks'),
                        // doc_speciality: $(this).attr('doc_speciality'),
                        // year: $(this).attr('year'),
                        // doctor: $(this).attr('doctor'),
                        hospital_id: $(this).attr('hospital_id'),
                        chairman_id: $(this).attr('chairman_id'),
                        secretariat_id: $(this).attr('secretariat_id'),
                        table: $(this).attr('table'),
                        color: mb_color
                    });
                }else {

                    var ph = $(this).attr('publicholiday');
                    var countph = ph.length;

                    for(i=0; i<countph; i++){
                        // alert(ph[i].ph_date);
                        // var phdate = ph[i].ph_date;
                        // var phevent = ph[i].phevent;

                        var year = ph[i].ph_date.substring(0, 4);
                        var month1 = ph[i].ph_date.substring(4, 5);
                        if(month1 == 0){
                            var month = ph[i].ph_date.substring(5, 6) - 1;
                        }else{
                            var month = ph[i].ph_date.substring(4, 6) - 1;
                        }
                        var day1 = ph[i].ph_date.substring(6, 7);
                        if(day1 == 0){
                            var day = ph[i].ph_date.substring(7, 8);
                        }else{
                            var day = ph[i].ph_date.substring(6, 8);
                        }

                        var mb_color = 'red';

                        result.push({
                            id: 'ph',
                            name: ph[i].phevent,
                            startDate: new Date(year, month, day),
                            endDate: new Date(year, month, day),
                            color: mb_color
                        });
                        disable.push(new Date(year, month, day));
                    }
                } 
            });
            calendar.setDisabledDays(disable);
            calendar.setDataSource(result); 
        }
    });
    // console.log(disable);
    return disable;  
};

function dd(){
    var i = 0;
    var len = 2;
    var text = "";

    for (; i < len; ) {
        var today = new Date();
        var todays = new Date();
        todays.setDate(today.getDate() + i);

        text += "new Date(" + todays.getFullYear() + "," + todays.getMonth() + "," + todays.getDate()+ "),";
        i++;
    }
    // var array = text.split("/",2);
    // // console.log(array);
    // return array;
    return text;
};

function getPublicHoliday(){

    var publicholiday = [];
    var url = $('#application_url').val();

    $.ajax({
        url: url + "/takwim/statecode/" + hospital_id,
        dataType: "json",
        success: function (data) { 
            $('#takwim_statecode').empty();
            $.each(data, function (key, value) {
                var statecode1 = value.statecode;
                $.ajax({
                    url: '/takwim/getPublicHoliday/' + statecode1,
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (ph) {
                        $.each(ph, function (key, value) {
                            var date = value.ph_date;
                            var year = value.ph_year;

                            var month1 = date.substring(4, 5);
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

                            publicholiday.push(new Date(year, month, day));
                            // alert(publicholiday);
                        });

                        calendar.setDisabledDays(publicholiday);
                    }
                });
            });
        }
    });
    // console.log(publicholiday);
    return publicholiday;
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
    // alert(d);
    // console.log(d);

    // var a = getPublicHoliday();
    // console.log(a);
    // alert(a);
    // console.log(getPublicHoliday());

    calendar = new Calendar('#calendar', {
        minDate: new Date (min, 12, 1),
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

            // for(var i in disable){
                // if(hospital_id != 'ALL'){
                if(year >= currentYear){
                        setEvent({ startDate: e.startDate, endDate: e.endDate });
                    }
                // }else{
                //     alert('Please choose hospital');
                // }
            // }
        },
        mouseOnDay: function(e) {

            if(e.events.length > 0) {
                var content = '';

                for(var i in e.events) {

                    if(e.events[i].mb_category){
                        var medical_board_category = e.events[i].mb_category;

                        @foreach ($medical_board_category1 as $value)
                        if(medical_board_category == '1'){
                            var mb_color = 'blue';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                        }else if(medical_board_category == '2'){
                            var mb_color = 'green';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                        }else if(medical_board_category == '3'){
                            var mb_color = 'yellow';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                        }else if(medical_board_category == '4'){
                            var mb_color = 'purple';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                        }
                        @endforeach

                        var session1 = e.events[i].session;

                        @foreach ($session as $s)
                            if(session1 == '1'){
                                if(session1 == '{{$s->refcode}}'){
                                    var session = '{{$s->descen}}';
                                }
                            }else if(session1 == '2'){
                                if(session1 == '{{$s->refcode}}'){
                                    var session = '{{$s->descen}}';
                                }
                            }
                        @endforeach

                        // var doc_speciality1 = e.events[i].doc_speciality;

                        // @foreach ($discipline as $value)
                        //     if(doc_speciality1 == '{{$value->refcode}}'){
                        //         var d = '{{$value->descen}}';
                        //         // alert(d);
                        //     }
                        // @endforeach

                        var venue1 = e.events[i].venue;
                        var table1 = e.events[i].table;
                        var hospitalid = e.events[i].hospital_id;

                        if(table1.table != ''){
                            var x = '';
                            for (i in table1.table) {
                                @foreach ($discipline as $value)
                                    if(table1.table[i].td_disciplineid == '{{$value->refcode}}'){
                                        var k = '{{$value->descen}}';
                                        x += k + "/";
                                    }
                                @endforeach
                            }
                        }else{
                            var x = '';
                        }

                        @foreach ($hospital as $h)
                            if(hospitalid == '{{$h->hospital_id}}'){
                                var hospital = '{{$h->hospital_name}}';
                            }
                        @endforeach

                        content += '<div class="event-tooltip-content">'
                                        + '<div class="event-venue" style="color:' + mb_color + '">Medical Category: <b>' + mb_category1 +'</b></div>'
                                        + '<div class="event-medical_board_category">Venue: ' + venue1 + '</div>'
                                        + '<div class="event-session">Session: ' + session + '</div>'
                                        + '<div class="event-speciality">Speciality: ' + x +'</div>'
                                        + '<div class="event-hospital">Hospital: ' + hospital +'</div>'
                                    + '</div><hr>';
                    }else{
                        content += '<div class="event-tooltip-content">'
                                        + '<div class="event-venue"> <b style="color:' + mb_color + '">' + e.events[i].name +'</b></div>'
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

            // for(var i in e.events) {
            // if(e.events[i].name == 'JD'){
            // var contextMenu = document.querySelector('.calendar-context-menu');

            // // contextMenu.css('left', elt.offset().left + 25 + 'px');
            // // console.log("Right click on day: " + e.date + " (" + name + " events)"); 
            // var eventQuota = document.createElement('div');
            // eventQuota.classList.add('item');
            // var eventQuotaContent = document.createElement('div');
            // eventQuotaContent.classList.add('content');
            // eventQuotaContent.textContent = "Quota";
            // eventQuota.appendChild(eventQuotaContent);
            // eventQuota.addEventListener('click', function () {
            //     // alert('YYYYYY');
            //     for(var i in e.events) {
            //         quota(e.events[i]);
            //     }

            //   });

            // contextMenu.appendChild(eventQuota);
            // }}
            
            $(e.element).popover('hide');
        },
        customDayRenderer: function(element, date) {
            // var y = d;

            // for(var i in y) {
            //     if(date.getTime() == y[i].getTime()) {
                    // $(element).parent().addClass('disabled');
                    // $(element).addClass('disabled');
                    // $(element).parent().css('box-shadow', 'rgb(255, 153, 51) 0px -4px 0px 0px inset');
                // }
                if(date.getTime() == currentDate) {
                    $(element).css('font-weight', 'bold');
                }
            // }
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
    // getPublicHoliday();

    $('#save-event').click(function() {

        var event = {
            count: $('#event-modal input[name="takwim_table_count"]').val(),
            venue: $('#event-modal input[name="takwim_venue"]').val(),
            session: $('#event-modal select[name="takwim_session"]').val(),
            mb_category: $('#event-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#event-modal select[name="takwim_discipline"]').val(),
            doctor: $('#event-modal select[name="takwim_doctor"]').val(),
            quota: $('#event-modal input[name="takwim_quota"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            startDate: $('#event-modal input[name="takwim-start-date"]').val(),
        }

        // alert('Masuk');
        // alert(event.startDate);

        var arraytable = [];
        arraytable.push({
                    speciality_id: event.doc_speciality,
                });
        if(event.count >= '1'){
            for(i=0; i<event.count; i++){
                var takwim_dis = $('#event-modal select[name="takwim_discipline'+ i +'"]').val();

                arraytable.push({
                    speciality_id: takwim_dis,
                });
            }
            //return array;
        }
        // console.log(arraytable);

        $.ajax({
            type: "POST",
            url: "/takwim/checkDiscipline",
            dataType: "json",
            data: {count: event.count, venue: event.venue, session: event.session, mb_category: event.mb_category, hospital_id: event.hospital_id, date: event.startDate, table: arraytable},
            success:function(data){
                // console.log(data.success);
                // alert(data.success);
                if(data.success == '0')
                {
                    if(event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.hospital_id != '' && event.startDate != '' && event.doctor != '' && event.quota != '')
                    {
                        saveEvent();
                    }
                }else
                {
                    alert("Record already exist");
                }
           }
        });

        // if(event.count >= '1'){
        //     var bal = event.count - 1;
        //     for(i=bal; i>=0; i--){
        //         // alert(i);
        //         var takwim_dis = $('#event-modal select[name="takwim_discipline'+ i +'"]').val();
        //         var takwim_doc = $('#event-modal select[name="takwim_doctor'+ i +'"]').val();
        //         var takwim_quo = $('#event-modal input[name="takwim_quota'+ i +'"]').val();

        //         if(takwim_dis != '' && takwim_doc != '' && takwim_quo != ''){
        //             if(event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.hospital_id != '' && event.startDate != '' && event.endDate != '' && event.doctor != '' && event.quota != '')
        //             {
        //                 saveEvent();
        //             }
        //         }
        //     }
        // }else{
            
        // }

    });

    $('#update-event').click(function() {
        var event = {
            id: $('#update-modal input[name="takwim-index"]').val(),
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            // doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
            // doctor: $('#update-modal select[name="takwim_doctor"]').val(),
            // quota: $('#update-modal input[name="takwim_quota"]').val(),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        if(event.id != '' && event.venue != '' && event.session != '' && event.mb_category != '' && event.startDate != '' && event.endDate != '')
        {
            updateEvent();
        }
    });

    $('#reschedule-event').click(function() {
        var event = {
            id: $('#reschedule-modal input[name="takwim-index"]').val(),
            count: $('#reschedule-modal input[name="takwim_table_count"]').val(),
            startDate: $('#reschedule-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#reschedule-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        if(event.id != '' && event.startDate != '' && event.endDate != '')
        {
            rescheduleEvent2();
        }
    });

    $('#duplicate-event').click(function() {

        var count = $('#update-modal input[name="takwim_table_count"]').val();
        if(count >= '1'){
            var arraytbl = [];
            for(i=0; i<count; i++){
                if(i==0)
                {
                    var takwim_dis = $('#update-modal select[name="takwim_discipline"]').val();
                    var takwim_doc = $('#update-modal select[name="takwim_doctor"]').val();
                    var takwim_quo = $('#update-modal input[name="takwim_quota"]').val();

                    arraytbl.push({
                        td_disciplineid: takwim_dis,
                        td_doctorid: takwim_doc,
                        td_quota: takwim_quo
                    });
                }else
                {
                    var takwim_dis = $('#update-modal select[name="takwim_discipline'+ i +'"]').val();
                    var takwim_doc = $('#update-modal select[name="takwim_doctor'+ i +'"]').val();
                    var takwim_quo = $('#update-modal input[name="takwim_quota'+ i +'"]').val();

                    arraytbl.push({
                        td_disciplineid: takwim_dis,
                        td_doctorid: takwim_doc,
                        td_quota: takwim_quo
                    });
                }
            }
            console.log(arraytbl);
            //return array;
        }

        var event = {
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            chairman: $('#update-modal select[name="takwim_chairman"]').val(),
            sectariat: $('#update-modal select[name="takwim_sectariat"]').val(),
            // doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
            // doctor: $('#update-modal select[name="takwim_doctor"]').val(event ? event.doctor : ''),
            // quota: $('#update-modal input[name="takwim_quota"]').val(event ? event.quota : ''),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            statecode: $('#takwim_statecode').val(),
            table: arraytbl,
            // startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
            // endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        duplicateEvent(event);
    });

    $('#duplicate2-event').click(function() {
        
        var event = {
            venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
            session: $('#duplicate-modal select[name="takwim_session"]').val(),
            mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
            hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
            statecode: $('#duplicate-modal input[name="takwim_statecode"]').val(),
            startDate: $('#duplicate-modal input[name="takwim-start-date"]').val(),
            endDate: $('#duplicate-modal input[name="takwim-end-date"]').val(),
        }

        // alert(event.venue);
        // alert(event.startDate);
        // alert(event.endDate);

        if(event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.startDate != '' && event.endDate != '')
        {
            saveDuplicateEvent();
        }

    });

    $('#quota-event').click(function() {
   
        saveQuota();

    });

    $('#delete1-event').click(function() {
        
        var result = confirm("Are you sure you want to delete this record?");
        if (result) {
            deletedEvent();
        }

    });

});

}


