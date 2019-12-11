$(document).ready(function () {
    
    
    // alert("hello effa world");
    $("#add_emp_info").click(function () {
        var no = $('#table_add_emp_info tr:last td:first').find("input").val();
        no++
        var no_index = no++
        $('#table_add_emp_info > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_info"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td> <td> <textarea type="text" name="wages[' + no_index + ']" class="form-control"></textarea></td></tr>');
    });

    $('#add_doc').click(function () {
        var no_doc = $('#table_upload_doc tr:last td:first').find("input").val();

        no_doc++;

        idtype = document.getElementById('idtype_doc').innerHTML;

        $('#table_upload_doc > tbody:last-child').append('<tr id="myTableRow_' + no_doc + '"><td style="display:none;"><input type="hidden" class="number" value="' + no_doc + '"></td><td><select required class="form-control" name="doccat[' + no_doc + ']">' + idtype + '</select></td><td><span class="choosefile"><input type="file" id="pdf_cancel_' + no_doc + '" name="pdf[' + no_doc + ']"  /> <i class="preview btn_cancel_' + no_doc + ' icon-close"></i></span></td><td><input type="date" class="form-control"></td><td></td><td><button type="button" id="btn_delete_' + no_doc + '" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt fa-sm " ></i></button></td></tr>'); //<td><input type="hidden" name="doctype[' + no_doc + ']" value="" </td></td>
        $('#btn_delete_' + no_doc + '').click(function () {
           
            $('#table_upload_doc').each(function () {
                $('#myTableRow_' + no_doc + '').remove();
            
        });
    
        });
        $('#table_upload_doc tr').each(function () {
            var no = $(this).find(".number").val();
            // no++;
            $('.btn_cancel_' + no + '').click(function () {
                $('#pdf_cancel_' + no + '').val("");
            });
        });

    });
   
    $('#table_upload_doc tr').each(function () {
        var no = $(this).find(".number").val();
        // no++;
        $('.btn_cancel_' + no + '').click(function () {
            $('#pdf_cancel_' + no + '').val("");

        });

    });
   
 
 

});
