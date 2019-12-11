@extends('general.layouts.app')

@section('content')

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="{{ route('decision_jd_ilat') }}" method="get">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h4 class="card-title">@lang('decision.title_ilat')</h4>
                        <hr>
                        <div class="table-responsive">
                            <table id="appt_listing" class="table table-bordered table-striped">
                                <thead>
                                    <tbody id="tbody">
                                        <td><b>Seksyen 16 Akta Keselamatan Sosial Pekerja 1969</b><br><br>
                                        (1) Seseorang berinsurans hendaklah dianggap sebagai mengidap keilatan, jika, oleh sebab sesuatu keadaan uzur tertentu yang berkekalan, dia tidak berupaya mengambil bahagian dalam apa-apa kegiatan yang mendatangkan keuntungan yang bermakna. <br><br>
                                        (2) Bagi maksud subseksyen (1)-<br><br>
                                        a) sesuatu keadaan uzur hendaklah disifatkan sebagai berkekalan jika keuzuran itu sama ada tidak boleh diubati atau tidak mungkin boleh diubati;<br>
                                        b) seseorang itu hendaklah disifatkan sebagai tidak berupaya mengambil bahagian dalam kegiatan yang mendatangkan keuntungan yang bermakna, jika oleh sebab keadaan uzur tertentunya kerana sakit atau kelemahan itu dia tidak lagi berupaya mencari nafkah, dengan kerja yang berpadanan dengan kekuatan dan tenaganya, yang, dengan memandang kepada latihan dan pekerjaannya yang dahulu, boleh dengan berpatutan diberikan kepadanya di tempat kerjanya atau di sesuatu tempat seumpama itu di kawasan yang berdekatan atau di daerah yang sama, sebanyak satu pertiga daripada pendapatan yang biasa bagi seseorang yang sempurna akal dan sihat tubuh badannya yang mempunyai kelulusan dan latihan yang sepertinya; <br>
                                        c) pada menentukan sama ada pihak menuntut mengidap keilatan, pertimbangan hendaklah diberikan tentang apa-apa kepulihan kekal mengenai keadaan keilatannya yang terhasil daripada apa-apa langkah pemulihan tenaga atau vokasional yang mungkin diberikan kepadanya dengan percuma oleh Pertubuhan.<br><br><br>
                                        <b>Seksyen 32 Akta Keselamatan Sosial Pekerja 1969</b><br><br>
                                            Apa-apa soal-<br><br>
                                            a) sama ada kemalangan atau penyakit yang berkaitan itu telah mengakibatkan keilatan;<br>
                                            b) sama ada bencana kerja yang berkaitan itu telah mengakibatkan hilang upaya yang kekal;
                                            c) sama ada takat kehilangan upaya mencari nafkah boleh ditaksir bagi sementara atau muktamad bagi maksud faedah hilang upaya;<br>
                                            d) sama ada taksiran tentang kadar hilang upaya mencari nafkah itu sementara atau muktamad bagi maksud faedah hilang upaya; atau<br>
                                            e) berkenaan taksiran sementara bagi maksud faedah hilang upaya tentang tempoh selama bila taksiran itu boleh dipakai,<br><br>
                                            hendaklah diputuskan oleh suatu jemaah doktor yang ditubuhkan mengikut peraturan-peraturan, jika ada, dan soal tersebut hendaklah kemudian daripada ini dirujuk sebagai "soal keilatan" atau "soal hilang upaya", mengikut mana-mana yang berkenaan.
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


                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('js')
<script>

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
    window.location.href('/decision_jd_ilat');
}
</script>

@endsection