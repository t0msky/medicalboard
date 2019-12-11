$(document).ready(function () {
    
    $("#mode_transport_other").hide();
    $("#race_other").hide();
    $("#relationship_other").hide();
    $("#yes").hide();
    $("#yes_dependantstudy").hide();
    $("#passport_expired").hide();
    $("#date_birth").show();
    $("#married_date").hide();
    $("#still_study").hide();
    $("#registered_married").hide();
    $("#in_edah").hide();
    $("#disability_i").hide();
    $("#eligibility_start").show();
    $("#eligibility_end").show();
    $("#demised_date").hide();
    $("#married_ob").hide();
    $("#disability_beforeafter").hide();
    $("#ssn").hide();
    $("#duetoaccident").hide();
    $("#duetoaccident_no").show();
    $("#duetoaccident_yes").hide();
    // $("#btn_add_applicant").hide();
    $("#edulvl_others_yes").hide();
    $("#btn_add_mc").hide();


    // FOR DEATH INFO TAB

    $('select[name=accdeath]').change(function () {

        if (this.value == 'Y') {
            $('#yes').show();
            $('#btn_add_mc').show();

        }
        else{
            $('#yes').hide();
            $('#btn_add_mc').hide();

        }
    });

    $("select[name=accdeath]").each(function() {
        $(this).change();
    });

});
