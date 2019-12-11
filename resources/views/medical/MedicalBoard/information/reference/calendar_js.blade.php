
<script>

// $.ajaxSetup({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

let calendar = null;

function setAppt(event) {
    $('#setappt_modal input[name="appt-start-date"]').css('pointer-events', 'none');

    $('#setappt_modal input[name="appt_id"]').val(event ? event.id : '');
    $('#setappt_modal input[name="appt_mbrefno"]').val(event ? event.mbrefno : '');
    $('#setappt_modal input[name="appt_name"]').val(event ? event.name : '');
    $('#setappt_modal input[name="appt-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#setappt_modal input[name="appt-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#setappt_modal').modal();
}

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

    var calendar = new Calendar('#calendar', {
        // minDate: new Date (min, 12, 1),
        maxDate: new Date (max, 11, 31),
        enableContextMenu: true,
        enableRangeSelection: true,
        preventRendering: true,
        // disabledDays: d,
        selectRange: function(e) {
            var year = e.startDate.getFullYear();

            if(year >= currentYear){
                setAppt({ startDate: e.startDate, endDate: e.endDate });
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
            if(date.getTime() == currentDate) {
                $(element).css('font-weight', 'bold');
                $(element).css('font-size', '14px');
            }
        },
    })
});

</script>

