<script>
// alert("a");
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let calendar = null;

function dataSource()
{
    $.ajax({
        url: '/admin/calendar',
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        success: function(data) {
            var result= [];
            console.log (data);

                     // console.log (result); 

            // alert('masuk');

            $(data).each(function() {
                var start_date = $(this).attr('start_date');
                var end_date = $(this).attr('end_date');
                // alert(start_date);
                var start_year = start_date.substring(0,4);
                var start_month_1 = start_date.substring(5,6);
                if (start_month_1 == '0') 
                    var start_month = start_date.substring(6,7) -1;
                else
                    var start_month = start_date.substring(5,7) -1;
                // alert(start_year); 
                var start_day_1 = start_date.substring(8,9);
                if (start_day_1 == '0') 
                    var start_day = start_date.substring(9,10);
                else
                    var start_day = start_date.substring(8,10);

                var end_year = end_date.substring(0,4);
                var end_month_1 = end_date.substring(5,6);
                if (end_month_1 == '0') 
                    var end_month = end_date.substring(6,7) -1;
                else
                    var end_month = end_date.substring(5,7) -1;
                // alert(start_year); 
                var end_day_1 = end_date.substring(8,9);
                if (end_day_1 == '0') 
                    var end_day = end_date.substring(9,10);
                else
                    var end_day = end_date.substring(8,10);

                result.push({
                    id: $(this).attr('id'),
                    name: $(this).attr('name'),
                    region: $(this).attr('region'),
                    startDate: new Date(start_year, start_month, start_day),
                    endDate: new Date(end_year, end_month, end_day),
                    color: 'green'
               });
                // alert('keluar');
            });
            calendar.setDataSource(result);
      
        }  
    });
}

$(function() {
    var currentYear = new Date().getFullYear();

    calendar=new Calendar('#calendar', { 
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                    + '<div class="event-name"><b>' + e.events[i].name + '</b></div>'
                    + '<div class="event-region">' + e.events[i].region + '</div>'
                    + '</div>';
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

    });
    dataSource();
    // $('#save-event').click(function() {
    //     saveEvent();
    // });
});

</script>