<div id="showpanel">
    <div class="form-row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body m-10">
                    
                        {{-- {{ csrf_field() }} --}}
                        <div class="form-body">
                            <h6 class="card-title">@lang('form/medical.decision.title_huk')</h6>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label"><i>(Sila baca sebelum mengisi borang)</i></label><br>
                                    <label class="control-label">1.    Dokumen ini adalah sebuah dokumen rasmi bagi kegunaan pihak Pertubuhan Keselamatan Sosial (PERKESO) dalam penentuan taksiran HUK oleh panel Jemaah Doktor, selaras dengan Seksyen 32 Akta Keselamatan Sosial Pekerja 1969;</label><br>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="appt_listing" class="table table-bordered table-striped">
                                    <thead>
                                        <tbody id="tbody">
                                            <td>"Apa-apa soal-<br><br>
                                            a) Sama ada kemalangan atau penyakit yang berkaitan itu telah mengakibatkan keilatan;<br>
                                            b) Sama ada bencana kerja yang berkaitan itu telah mengakibatkan hilang upaya yang kekal;<br>
                                            c) Sama ada takat kehilangan upaya mencari nafkah boleh ditaksir bagi sementara atau dengan muktamad bagi maksud faedah hilang upaya; <br>
                                            d) Sama ada taksiran tentang kadar hilang upaya mencari nafkah itu sementara atau muktamad bagi maksud faedah hilang upaya; atau <br>
                                            e) Berkenaan taksiran sementara bagi maksud faedah hilang upaya tentang tempoh selama bila taksiran itu boleh dipakai, <br><br>
                                            hendaklah diputuskan oleh suatu jemaah doktor yang ditubuhkan mengikut peraturan-peraturan, jika ada, dan soal tersebut hendaklah kemudian daripada ini dirujuk sebagai "soal keilatan" atau "soal hilang upaya", mengikut mana-mana yang berkenaan"
                                            </td>
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                            <br>
                        </div>
                         <input type="checkbox" id="toggle">
                         <span> @lang('button.term')</span>

                        <div class="form-actions">
                            <button type="submit" name="nextbutton" class="btn btn waves-effect waves-light btn-success" id="nextbutton" disabled/> @lang('button.next')</button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="shownextpanel" style="display: none;">
    @include('medical.medicalboard.information.general.indexPanel')
</div>
    
{{-- @section('js') --}}
<script>

$(document).ready(function() {
    $('#nextbutton').click(function(){
        $('#shownextpanel').show();
        $('#showpanel').hide();
    });

});

$('#toggle').click(function () 
{
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#nextbutton').attr('disabled', false); //enable input
        
    } else {
        $('#nextbutton').attr('disabled', true); //disable input
    }
});

function nextpage()
{
    window.location.href('/decision_jd_huk');
}
</script>

{{-- @endsection --}}