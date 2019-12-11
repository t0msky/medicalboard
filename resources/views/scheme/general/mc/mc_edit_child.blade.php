<div class="modal fade edit_mc_child_modal{{$key}}{{$num}}" id="edit_mc_child_modal{{$key}}{{$num}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h5 class="modal-title" id="exampleModalLabel">Update Work Attended</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <input type="hidden" value="{{$key}}" id="modalchildid" name="hidden_key">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">Start Date </label>
                        <input   type="date" id="modal_workstartdate_{{$key}}_{{$num}}" name="mcitemstartdate[]" value="@if (!empty($child) && $child->mcitemstartdate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemstartdate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork_edit" >
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">End Date</label>
                        <input type="date"  id="modal_workenddate_{{$key}}_{{$num}}" name="mcitemenddate[]" value="@if (!empty($child) && $child->mcitemenddate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemenddate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork_edit" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">Total Days</label>
                        <input type="text" id="modal_totalwork_{{$key}}_{{$num}}" name="totalmcitem[]" value="@if (!empty($child)){{ $child ->totalmcitem }}@endif" class="form-control" readonly>
                    </div>
                </div>
            </div>
        <label class="control-label" id='lblmcerror{{$key}}' style='color:red'></label>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit_child_close" onclick="editchild_work({{$key}},{{$num}})" class="btn btn-sm waves-effect waves-light btn_edit_child_close{{$key}}">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    
    function editchild_work(dbid,j){

        var edit_work = dbid;

        alert("edit_mc: "+edit_work);
        // alert("modal_clinic_info: "+modal_clinic_info);
        var modal_start_date = $('#modal_workstartdate_'+edit_work+'_'+j).val();
        var modal_end_date = $('#modal_workenddate_'+edit_work+'_'+j).val();
        var modal_total_days = $('#modal_totalwork_'+edit_work+'_'+j).val();
        alert("start work date: "+modal_start_date);

        $('#workstartdate_'+edit_work+j).val(modal_start_date);
        $('#workenddate_'+edit_work+j).val(modal_end_date);
        $('#totalwork_'+edit_work+j).val(modal_total_days);

        $('.edit_mc_child_modal'+edit_work+j).modal('hide');
}
</script>