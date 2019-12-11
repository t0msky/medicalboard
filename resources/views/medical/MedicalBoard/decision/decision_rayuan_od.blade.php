@extends('general.layouts.app')

@section('content')

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h4 class="card-title">BORANG KEPUTUSAN JEMAAH DOKTOR BAGI TAKSIRAN HILANG UPAYA KEKAL(HUK)</h4>
                        <hr>
                      
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">NAMA ORANG BERINSURANS</label>
                               <input type="text" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">No.KPPN/KSPA</label>
                                <input type="text" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">JANTINA</label>
                                <div class="row p-l-20">
                                    <div class="custom-control custom-radio" >
                                        <input type="radio" id="jantina_l" name="jantina" class="custom-control-input" required>
                                        <label class="custom-control-label" for="jantina_l">LELAKI</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="jantina_p" name="jantina" class="custom-control-input" required>
                                        <label class="custom-control-label" for="jantina_p">PEREMPUAN</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">TARIKH LAHIR</label>
                                <input type="date" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">TARIKH SIDANG</label>
                                <input type="date" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">TARIKH NOTIS</label>
                                <input type="date" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">PIHAK MERAYU</label>
                                <div class="row p-l-20">
                                    <div class="custom-control custom-radio" >
                                        <input type="radio" id="pihak_merayu_perkeso" name="pihak_merayu" class="custom-control-input" required>
                                        <label class="custom-control-label" for="pihak_merayu_perkeso">PERKESO</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pihak_merayu_ob" name="pihak_merayu" class="custom-control-input" required>
                                        <label class="custom-control-label" for="pihak_merayu_ob">ORANG BERINSURANS</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">Orang Berinsurans telah menghadiri sidang Jemaah Doktor khas pada</label>
                                <input type="date" class="form-control" id="" value="" disabled>
                            </div>
                            <div class="form-group col-md-12 col-lg-2">
                                <label class="control-label">dengan taksiran sebanyak</label>
                                <input type="text" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-md-12 col-lg-1">
                                <br><br>
                                <label class="control-label">%</label>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">Nama Pegawai Urusetia: </label><br>
                                <label class="control-label">No. Anggota: </label> 
                            </div>
                        </div>
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
                      <div id="accordion2" role="tablist" class="accordion" >
                    
                        <!-- Borang Keputusan Jemaah Doktor Rayuan Khas bagi Taksiran OD-->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingOne1">
                                <h5 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                                   BORANG KEPUTUSAN JEMAAH DOKTOR RAYUAN KHAS BAGI TAKSIRAN PENYAKIT KHIDMAT</h4>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card-body">
                                    <div class="form-group"> 
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                                                    <h4 class="mb-0">PENILAIAN PANEL JEMAAH DOKTOR(diisi oleh salah seorang panel Jemaah Doktor)</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label>DIAGNOSIS</label>
                                                <textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label> KETERANGAN PENYAKIT (TERMASUK DOKUMEN SOKONGAN YANG DIRUJUK)</label>
                                                <textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label>PEMERHATIAN KEADAAN ORANG BERINSURANS SEWAKTU PERSIDANGAN</label>
                                                <textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label">DIAGNOSIS BERKAITAN DENGAN KEMALANGAN</label>
                                                <div class="row p-l-20">
                                                    <div class="custom-control custom-radio" >
                                                        <input type="radio" id="diagnosis_ya" name="diagnosis" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="diagnosis_ya">YA</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="diagnosis_tidak" name="diagnosis" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="diagnosis_tidak">TIDAK</label>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group col-md-12 col-lg-4">
                                                   <label class="control-label">JIKA BELUM MENCAPAI 'MMI', NYATAKAN TARIKH JANGKAAN 'MMI';</label>
                                                   <input type="date" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label">ADAKAH OB MENGALAMI HILANG UPAYA KEKAL<span class="text-danger">*</span></label>
                                                <div class="row p-l-20">
                                                    <div class="custom-control custom-radio" >
                                                        <input type="radio" id="ya" name="ob_huk" class="custom-control-input"  onclick="huk_ya()" value="ya" required>
                                                        <label class="custom-control-label" for="ya">YA</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="tidak" name="ob_huk" class="custom-control-input" onclick="huk_tidak()" value="tidak" required>
                                                        <label class="custom-control-label" for="tidak">TIDAK</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="ditangguhkan" name="ob_huk" class="custom-control-input" onclick="huk_ditangguhkan()" value="ditangguhkan" required>
                                                        <label class="custom-control-label" for="ditangguhkan">DITANGGUHKAN</label>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div id="hukditangguhkan" class="form-group col-md-12 col-lg-8" style="display:none">
                                                <label class="control-label">Alasan <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                                                    <h4 class="mb-0">JIKA ORANG BERINSURANS MENGALAMI HILANG UPAYA KEKAL</h4>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-2">
                                                <label class="control-label">PERATUS TAKSIRAN</label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                            <div class="form-group col-md-12 col-lg-1">
                                                <br><br>
                                                <label class="control-label">%</label>                                                   
                                            </div>
                                            <div class="form-group col-md-12 col-lg-3">
                                                <label class="control-label"><i><center>(dalam perkataan)</center></i></label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                            <div class="form-group col-md-12 col-lg-1">
                                                <br><br>
                                                <label class="control-label">peratus</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label>JUSTIFIKASI PENGIRAAN</label>
                                                <textarea name="ip_goal" id="ip_goal" class="form-control" required rows="6" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label class="control-label">ORANG BERINSURANS INI TIDAK BERDAYA DENGAN TERUKNYA DAN SENTIASA MEMERLUKAN LAYANAN TERSENDIRI OLEH SESEORANG LAIN.</label>
                                                <div class="row p-l-20">
                                                    <div class="custom-control custom-radio" >
                                                        <input type="radio" id="ob_tidakberdaya_ya" name="ob_tidakberdaya" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="ob_tidakberdaya_ya">YA <i>(bagi taksiran HUK 100% sahaja)</i></label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="ob_tidakberdaya_tidak" name="ob_tidakberdaya" class="custom-control-input" required>
                                                        <label class="custom-control-label" for="ob_tidakberdaya_tidak">TIDAK</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label">ORANG BERINSURANS MEMERLUKAN REHABILITASI</label>
                                                <div class="row p-l-20">
                                                    <div class="custom-control custom-radio" >
                                                        <input type="radio" id="ob_rehabilitasi_ya" name="ob_rehabilitasi" class="custom-control-input" onclick="ob_rehabilitasi_yes()"  required>
                                                        <label class="custom-control-label" for="ob_rehabilitasi_ya">YA </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="ob_rehabilitasi_tidak" name="ob_rehabilitasi" class="custom-control-input" onclick="ob_rehabilitasi_no()"  required>
                                                        <label class="custom-control-label" for="ob_rehabilitasi_tidak">TIDAK</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-lg-4" id="pengesyoran_rawatan" style="display:none">
                                                    <label class="control-label">JIKA YA, SILA NYATAKAN PENGESYORAN RAWATAN LANJUT:</label>
                                                    <div class="row p-l-20">
                                                        <div class="custom-control custom-radio" >
                                                            <input type="radio" id="pengesyoran_ya" name="pengesyoran" class="custom-control-input" required>
                                                            <label class="custom-control-label" for="pengesyoran_ya">FIZIKAL </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="pengesyoran_tidak" name="pengesyoran" class="custom-control-input"  required>
                                                            <label class="custom-control-label" for="pengesyoran_tidak">VOKASIONAL/KEMBALI BEKERJA(RETURN TO WORK)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-lg-4" id="pengesyoran_rawatan1" style="display:none">
                                                    <label class="control-label">NYATAKAN ALATAN PEMULIHAN YANG DISYORKAN:</label>
                                                    <input type="text" class="form-control" id="" value="">
                                                </div>  
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 col-lg-5">
                                                    <label class="control-label">ADAKAH ORANG BERINSURAN BERPOTENSI UNTUK KEMBALI BEKERJA?</label>
                                                    <div class="row p-l-20">
                                                        <div class="custom-control custom-radio" >
                                                            <input type="radio" id="ob_rtw_ya" name="ob_rtw" class="custom-control-input" required>
                                                            <label class="custom-control-label" for="ob_rtw_ya">YA </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="ob_rtw_tidak" name="ob_rtw" class="custom-control-input" required>
                                                            <label class="custom-control-label" for="ob_rtw_tidak">TIDAK</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <div class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                                                    <h4 class="mb-0">PERAKUAN PANEL JEMAAH DOKTOR</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-8">
                                                <label class="control-label">MAKLUMAT DIISI OLEH:</label>
                                                <input type="text" class="form-control" id="" value="" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-12">
                                                <label class="control-label">KAMI MENGESAHKAN KEPUTUSAN ADALAH BERPATUTAN DENGAN KEADAAN SEMASA ORANG BERINSURANS:</label>
                                                
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label"><center>(Panel 1)</center></label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label"><center>(Panel 2)</center></label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                            <div class="form-group col-md-12 col-lg-4">
                                                <label class="control-label"><center>(Pengerusi Sidang Jemaah Doktor)</center></label>
                                                <input type="text" class="form-control" id="" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="btnsetappt">@lang('button.submit/verified')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection

<script type="text/javascript">

    function huk_ditangguhkan() {
$('#hukditangguhkan').show();  
    }
     function huk_ya(){
$('#hukditangguhkan').hide();
    }
     function huk_tidak(){
$('#hukditangguhkan').hide();
    }


     function ob_rehabilitasi_yes(){
$('#pengesyoran_rawatan').show();
$('#pengesyoran_rawatan1').show();
    }
     function ob_rehabilitasi_no(){
$('#pengesyoran_rawatan').hide();
$('#pengesyoran_rawatan1').hide();
    }

</script>