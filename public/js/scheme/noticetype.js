$(document).ready(function () {

    var noticetype = document.getElementById("notice_type");
    var empcode = document.getElementById("empcode");
    var in_employment = document.getElementById("in_employment");
    var ic_more = document.getElementById("ic_more");

    if (noticetype.value == '02' || noticetype.value == '03') {
        $('#still_employment').show();
        $('#death_accident').hide();
    } else if (noticetype.value == '04') {
        $('#death_accident').show();
        $('#still_employment').hide();
        // alert("Hello world");
    }
    $('select[name=notice_type]').change(function () {
        if (this.value == '02' || this.value == '03') {
            
            $('#still_employment').show();
            $('#death_accident').hide();
            $('#btnnotice').prop("disabled", true);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);
        
            $('select[name=in_employment]').change(function () {
                if (this.value == 'please select') {
                    $('#btnnotice').prop("disabled", true);
                    

                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });
        } else if (this.value == '04') {
            $('#death_accident').show();
            $('#still_employment').hide();
            $('#btnnotice').prop("disabled", true);
            $('#in_employment').val("");
            $('#in_employment option[value="please select"]').prop("selected", true);

            $('select[name=select_death_accident]').change(function () {
                if (this.value == 'please select') {
                    $('#btnnotice').prop("disabled", true);
                   

                } else {
                    $('#btnnotice').prop("disabled", false);

                }
            });

        } else {
            $('#still_employment').hide();
            $('#death_accident').hide();
            $('#btnnotice').prop("disabled", false);
            $('#select_death_accident').val("");
            $('#select_death_accident option[value="please select"]').prop("selected", true);
            
            $('#in_employment').val("");
            $('#in_employment option[value="please select"]').prop("selected", true);

        }
    });

    $("#btn_reset").click(function () {
        $(".clearfields").val('');
        $('#in_employment option[value="please select"]').prop("selected", true);
        $('#select_death_accident option[value="please select"]').prop("selected", true);
        $('#idtype option[value="please select"]').prop("selected", true);
        $('#notice_type option[value="please select"]').prop("selected", true);
        $('#still_employment').hide();
            $('#death_accident').hide();
        
    });

    if (ic_more.value == "2") {
        $('#btnnotice').prop("disabled", true);
    } else {
        $('#btnnotice').prop("disabled", false);
    }
    // $("#btn_close").click(function () {  
    //     $('#form_noticetype').attr('action', '/home');

    // });


});
