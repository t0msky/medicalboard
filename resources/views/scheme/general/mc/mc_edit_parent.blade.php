{{-- EDIT MODEL MC --}}
<div class="modal fade edit_work_modal{{$key}}" id="edit_mc_modal{{$key}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h5 class="modal-title" id="exampleModalLabel">Update Medical Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                <input type="hidden" value="{{$key}}" id="modalid" name="hidden_key">
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                    <label for="recipient-name" class="control-label">HUS Type </label>
                    <select name="hussts[{{$key}}]" class="form-control" id="modal_hussts{{$key}}">
                        <option value="">Please Choose</option>
                        @foreach($ref_table->hus_sts as $hus_status)
                        @if ($hus_status->ref_code == $parent->husstatus )
                        <option value="{{$hus_status->desc_en}}" selected>{{$hus_status->desc_en}}</option>
                        @else
                        <option value="{{$hus_status->desc_en}}">{{$hus_status->desc_en}}</option>
                        @endif
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="recipient-name" class="control-label">Name and Address of Clinic</label>
                    <input type="text" id="modal_clinic_info{{$key}}" name="modal_clinicinfo[{{$key}}]"value="@if (!empty($parent)){{ $parent->clinicinfo }}@endif" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">Start Date </label>
                        <input type="date" id="modal_start_date{{$key}}" name="modal_startdate[{{$key}}]"value="@if (!empty($parent) && $parent->startdate!=''){{ (DateTime::createFromFormat('Ymd', $parent->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc_edit" required>
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">End Date</label>
                        <input type="date" id="modal_end_date{{$key}}" name="modal_enddate[{{$key}}]" value="@if (!empty($parent) && $parent->enddate!=''){{ (DateTime::createFromFormat('Ymd', $parent->enddate ))->format('Y-m-d') }}@endif" class="form-control counttotalmc_edit" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">Total Days</label>
                        <input type="text" id="modal_total_days{{$key}}" name="modal_totalmc[{{$key}}]" value="@if (!empty($parent)){{ $parent->totalmc }}@endif" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <label class="control-label" id='lblmcerror{{$key}}' style='color:red'></label>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                {{-- <a class="btn btn-sm waves-effect waves-light" href="{{route('edit_husinfo', $key)}}">Save</a> --}}
                <button type="button" id="btn_edit_close{{$key}}" onclick="editFunc({{$key}})" class="btn btn-sm waves-effect waves-light btn_edit_close{{$key}}">Save</button>
            </div>
        </div>
    </div>
</div>
<script>

    function editFunc(dbid){
        var edit_mc = dbid;

        alert("edit_mc: "+edit_mc);

        var modal_hussts = $('#modal_hussts'+edit_mc).val();
        var modal_clinic_info = $('#modal_clinic_info'+edit_mc).val();
        // alert("modal_clinic_info: "+modal_clinic_info);
        var modal_start_date = $('#modal_start_date'+edit_mc).val();
        var modal_end_date = $('#modal_end_date'+edit_mc).val();
        var modal_total_days = $('#modal_total_days'+edit_mc).val();

        $('#hussts'+edit_mc).val(modal_hussts);
        $('#clinicinfo'+edit_mc).val(modal_clinic_info);
        $('#mcstartdate'+edit_mc).val(modal_start_date);
        $('#mcenddate'+edit_mc).val(modal_end_date);
        $('#totalwork'+edit_mc).val(modal_total_days);

        $('.edit_work_modal'+edit_mc).modal('hide');
}

</script>