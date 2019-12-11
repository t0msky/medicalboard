

<!------------------ MODAL ADD DIAGNOSIS----------------------------->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="diagnosis" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <h5 class="card-title" id="diagnosis">@lang('Add Diagnosis')
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h5>
            <input type="hidden" value="{{$casetype}}" id="casetype" disabled>

            <div class="modal-body">
                <div class="row p-t-20">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="control-label">@lang('No.')</label>
                        <input type="text" id="num" value="1" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('Diagnosis')</label>
                            <textarea type="text" id="id_diagnosis" rows="7" cols="20" name="" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">@lang('Close')</button>
                <button type="button" id="btn_diagnosis" class="btn btn-success waves-effect waves-light link a1" data-toggle="collapse" aria-expanded="true">@lang('Add')</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $("#btn_diagnosis").click(function () {
        var diagnosis = $('#id_diagnosis').val();
        var no = $('#myTable2 tbody').children().length;
        var nom = no;
        var casetype = $('#casetype').val();

        no++;
        
        
        $('#num').val(no);

        // var no_index = no++
        if(casetype == 2){
            $('#myTable2 > tbody:last-child').append('<tr id="row2'+no+'" ><td><input type="hidden" value="'+no+'"></td>'+
        '<td><input type="hidden" value="'+diagnosis+'"name="ms_rc_diagnosis['+no+']">'+diagnosis+'</td>'+
        '<td><select class="form-control" data-placeholder="" tabindex="2">'+
        '<option selected readonly disabled hidden>Please Choose </option>'+
        '<option value="">@lang('Yes')</option>'+
        '<option value="">@lang('No')</option>'+
        '</select></td>'+
        '<td><div class="input-group-append"><a class="updatedraft" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-edit" title="Update" data-toggle="tooltip"></i>'+
        '</a>&nbsp;<a class="deletedraft" id="delete'+no+'" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>&nbsp;'+
        '<a class="get-code view" href="#tt1"aria-expanded="true"><i class="fas fa-file-alt"title="View" data-toggle="tooltip"></i></a></div></td></tr>');
        }else{
        $('#myTable2 > tbody:last-child').append('<tr id="row2'+no+'" ><td><input type="hidden" value="'+no+'"></td>'+
        '<td><input type="hidden" value="'+diagnosis+'"name="ms_rc_diagnosis['+no+']">'+diagnosis+'</td>'+
        '<td><div class="input-group-append"><a class="updatedraft" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-edit" title="Update" data-toggle="tooltip"></i>'+
        '</a>&nbsp;<a class="deletedraft" id="delete'+no+'" class="get-code" href="#tt1"aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>&nbsp;'+
        '<a class="get-code view" href="#tt1"aria-expanded="true"><i class="fas fa-file-alt"title="View" data-toggle="tooltip"></i></a></div></td></tr>');
        }


        $('#id_diagnosis').val('');

        $('#delete'+no+'').click(function(){
            alert('Are you sure want to delete the draft? ');

            $('#myTable2').each(function(){
            $('#row2'+no+'').remove();
        });
        });
    });

})

</script>