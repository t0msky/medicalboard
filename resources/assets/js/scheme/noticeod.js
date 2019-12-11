// $("#add_emp_od").click(function () {
//         var no = $('#table_add_emp_od tr:last td:first').find("input").val();
//         no++
//         var no_index = no++
//         $('#table_add_emp_od > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_od"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td></tr>');
//     });

$("#add_emp_od").click(function () {
    var no = $('#table_add_emp_od tr:last td:first').find("input").val();
    no++
    var no_index = no++
    $('#table_add_emp_od > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_od"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td> </tr>');
});
