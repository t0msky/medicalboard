<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.collapse.feedback.query_feedback')</h5>
                        <hr>
                        <div class="card-body">
                            <div class="form-body">
                                <div class="card-header">
                                    <div class="form-row">
                                        <div class="table-responsive">
                                            <table id="feedbackTable" class="table table-sm table-bordered" style="width:100%" data-toggle-column="first">
                                                <thead>
                                                    <th width="15%">@lang('form/medical.collapse.feedback.date_time')</th>
                                                    <th width="20%">@lang('form/medical.collapse.feedback.from')</th>
                                                    <th width="25%">@lang('form/medical.collapse.feedback.to')</th>
                                                    <th width="30%">@lang('form/medical.collapse.feedback.query')</th>
                                                    <th width="10%">@lang('form/medical.general.action')</th>
                                                </thead>
                                                <tbody>
                                                    <!-- <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <a class="get-cod view" href="#tt1" aria-expanded="true" id="view"><i class="fas fa-file-alt" title="Query/Feedback" data-toggle="modal" data-target="#feedbackModal"></i></a>
                                                        </div>
                                                    </td> -->
                                                </tbody>
                                            </table>
                                            <div class="col-md-6 offset-6">
                                                <button type="button" class="btn btn waves-effect waves-light btn-success collapsed link a1" data-toggle="collapse" data-target="#Feedback" aria-expanded="true" aria-controls="benefit_case" id="btn_next_benefitcase">@lang('button.next')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="application_url" id="application_url" value="{{URL::to(Request::route()->getPrefix()) }}"/>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Feedback --}}
<div id="feedbackModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title">@lang('form/medical.collapse.feedback.query_feedback')</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" id="workHistoryForm">
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('form/medical.collapse.feedback.date_time')</label>
                            <div class="input-group ">
                                <input type="date" id="querydate" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('form/medical.collapse.feedback.from')</label>
                            <div class="input-group ">
                                <input type="text" id="queryfrom" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('form/medical.collapse.feedback.to')</label>
                            <div class="input-group ">
                                <input type="text" id="querysendto" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('form/medical.collapse.feedback.query')</label>
                            <div class="input-group ">
                                <input type="text" id="query" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row p-t-20">
                        <div class="form-group col-md-12 col-lg-12">
                            <label class="control-label">@lang('form/medical.tab_title.feedback')</label>
                            <div class="input-group ">
                                <input type="text" id="query_feedback" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

//modal Preview
$(document).ready(function()
{
    var url = $("#application_url").val();

    $('#feedbackModal').on('show.bs.modal', function (e) 
    {
        // console.log($(e.relatedTarget).data('id'));
        var row = $(e.relatedTarget).data('byrow');

        $('#querydate').val(row['que_date'] ? row['que_date'] : '');
        $('#queryfrom').val(row['que_addby'] ? row['que_addby'] : '');
        $('#querysendto').val(row['que_sendto'] ? row['que_sendto'] : '');
        $('#query').val(row['que_query'] ? row['que_query'] : '');
        $('#query_feedback').val(row['que_feedback'] ? row['que_feedback'] : '');

    });
    
    var countFeed = 1;
    $("#feedbackTable").DataTable({
        destroy: true,
        bFilter: false,
        bLengthChange:false,
        ajax: {
            url: url + "/getfeedbacknquery",
            type:'GET',
            dataType: "json",
            dataSrc: function(data){
                // console.log(data);
                if(data == null){
                    return [];
                }else{
                    return data;
                }
            }
        },
        "columns": [
                { "data": "que_date",},
                { "data": "que_addby" },
                { "data": "que_sendto" },
                { "data": "que_query" },
                {
                    "data" : null,
                    "defaultContent":""
                }
        ],

        "columnDefs": [
                        {
                            "targets": [4],
                            "className": "text-center",
                            "type": "html",
                            "render": function (data, type, row, meta) {

                                var defaultselected = data;
                                // console.log(row);
                                // var $textInput = $('<input type="number" name="datacount'+countFeed+'" value="'+countFeed+'" class="form-control-plaintext" readonly>');
                                // countFeed++;
                                
                                // return $textInput.prop("outerHTML");

                                var row = JSON.stringify(row);

                                var buttonModal = $("<div class='input-group-append'>" +
                                                        "<a class='get-cod view' href='#tt1' aria-expanded='true' id='view'>" +
                                                            "<i class='fas fa-file-alt' title='Query/Feedback' data-toggle='modal' data-target='#feedbackModal' data-byrow='"+row+"'></i> "+
                                                        "</a>"+
                                                    "</div>");

                                return buttonModal.prop("outerHTML");

                            }
                        },
                        
                    ]

    });


});

</script> 