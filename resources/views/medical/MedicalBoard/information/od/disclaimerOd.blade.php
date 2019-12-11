<div id="showpanel">
    <div class="form-row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body m-10">
                        <div class="form-body">
                            <h6 class="card-title">@lang('form/medical.decision.title_od')</h6>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label"><i>(Sila baca sebelum mengisi borang)</i></label><br>
                                    <label class="control-label">1.    Takrifan penyakit khidmat adalah seperti yang tertera pada Seksyen 28 Akta Keselamatan Sosial Pekerja 1969;</label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="appt_listing" class="table table-bordered table-striped">
                                    <thead>
                                        <tbody id="tbody">
                                            <td>"(1) Jika seseorang pekerja yang diambil kerja dalam apa-apa pekerjaan yang diperihalkan dalam Jadual Kelima mendapat apa-apa penyakit atau bencana yang dinyatakan dalam Jadual tersebut sebagai berkaitan dengan pekerjaan itu, atau jika seseorang pekerja yang telah bekerja dalam pekerjaan itu mendapat sesuatu penyakit atau bencana itu dalam tempoh enam puluh bulan selepas berhenti bekerja sedemikian itu, penyakit yang didapati atau bencana yang berlaku ke atasnya itu hendaklah, melainkan jika akasnya dibuktikan, disifatkan sebagai bencana kerja yang terbit daripada atau dalam masa pekerjaan:<br><br>
                                            Dengan syarat bahawa tempoh enam puluh bulan itu boleh, mengikut budi bicara Pertubuhan, dilanjutkan lagi apabila dikemukakan keterangan lain yang relevan bagi menyokong pelanjutan itu.<br><br>
                                            (2) Apabila seseorang pekerja membuat suatu kontrak perkhidmatan atau kontrak perantisan dengan seseorang majikan utama atau majikan langsung untuk bekerja dalam apa-apa pekerjaan yang dinyatakan dalam Jadual Kelima atau pekerja itu, dengan persetujuannya, ditukarkan oleh majikan utama atau majikan langsungnya kepada suatu pekerjaan seperti itu, dia hendaklah, jika diminta oleh majikan itu atau Pertubuhan, membenarkan dirinya diperiksa oleh seorang pengamal perubatan yang dilantik dengan sempurnanya kecuali dengan mengikut peraturan-peraturan yang dibuat di bawah Akta ini atau pada lat tempoh yang lebih singkat daripada yang ditetapkan di dalamnya.<br><br>
                                            (3) Menteri boleh, melalui pemberitahuan dalam Warta, meminda, menggantikan, menambah atau memotong apa-apa penyakit yang dinyatakan dalam Jadual Kelima dan apa-apa pekerjaan yang diperihalkan di dalamnya.<br><br>
                                            (4) Kecuali subseksyen (1) dan (3), tiada apa-apa faedah boleh dibayar kepada seseorang pekerja mengenai apa-apa penyakit melainkan jika penyakit itu secara langsung menyebabkan suatu bencana tertenu melalui kemalangan yang terbit daripada dan dalam masa pekerjaannya."
                                            </td>
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="control-label">2. Dokumen ini adalah sebuah dokumen rasmi bagi kegunaan pihak Pertubuhan Keselamatan Sosial (PERKESO) dalam penentuan taksiran penyakit khidmat oleh panel Jemaah Doktor Khas, selaras dengan Seksyen 32A Akta Keselamatan Sosial Pekerja 1969;</label>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="appt_listing" class="table table-bordered table-striped">
                                    <thead>
                                        <tbody id="tbody">
                                            <td>"(1) Apa-apa persoalan sama ada sesuatu bencana kerja disebabkan oleh penyakit khidmat sebagaimana yang dinyatakan dalam Jadual Kelima boleh ditentukan oleh suatu jemaah doktor yang dikenali sebagai Jemaah Doktor Khas yang ditubuhkan mengikut peraturan-peraturan.<br><br>
                                                (2) Jemaah Doktor Khas hendaklah memeriksa orang yang hilang upaya dan menghantar laporan dalam bentuk sebagaimana yang ditetapkan oleh Pertubuhan dengan menyatakan-<br><br>
                                                a) sama ada orang yang hilang upaya itu mengidap satu atau lebih daripada satu penyakit yang dinyatakan dala Jadual itu;<br>
                                                b) sama ada penyakit yang berkaitan telah mengakibatkan hilang upaya yang kekal;<br>
                                                c) sama ada takat kehilangan upaya mencari nafkah boleh ditaksir secara sementara atau muktamad;<br>
                                                d) taksiran tentang kadar hilang upaya mencari nafkah itu, dan bagi taksiran sementara, tempoh selama bila taksiran itu boleh dipakai.<br><br>
                                                (3) Pertubuhan boleh merujukkan apa-apa taksiran yang bersifat sementara kepada Jemaah Doktor Khas bagi tujuan ulang kaji tidak lewat daripada akhir tempoh yang diambil kira taksiran sementara itu. <br><br>
                                                (4) Apa-apa keputusan Jemaah Doktor Khas boleh diulang kaji olehnya pada bila-bila masa.<br><br>
                                                (5) Orang yang hilang upaya hendaklah dimaklumkan secara bertulis oleh Pertubuhan tentang keputusan Jemaah Doktor Khas dan faedah, jika ada, yang berhak didapati oleh orang berinsurans itu."
                                            </td>
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                            <br>
                        </div>
                         <input type="checkbox" id="toggle" >
                         <span> @lang('button.term')</span>

                        <div class="form-actions">
                            <button type="submit" name="nextbutton" class="btn btn waves-effect waves-light btn-success" id="nextbutton" disabled/> @lang('button.next')</button>
                        </div>
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

$('#toggle').click(function () {
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