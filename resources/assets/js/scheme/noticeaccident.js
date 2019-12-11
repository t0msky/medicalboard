// For select 2

$(document).ready(function () {
    var language = $('#change_language').val();
    if (language == "BM") {
        //$('#malay').addClass("ti-check");
        //$('#english').removeClass("ti-check");

        //chg07072019 - irina
        $('#malay').css("cssText", "font-weight:bold !important;");
        $('#english').css("cssText", "font-weight:normal !important;");
    }
    else {
        //$('#english').addClass("ti-check");
        //$('#malay').removeClass("ti-check");

        //chg07072019 - irina
        $('#malay').css("cssText", "font-weight:normal !important;");
        $('#english').css("cssText", "font-weight:bold !important;");

    }

    $('select[name=mode_transport_other]').change(function () {
        if (this.value == 'others') {
            $("#others").prop('readonly', false);
            $("#others").show();


        } else {
            $("#others").prop('readonly', true);
            $("#others").val('');
            $("#others").hide();
        }
    });

});

