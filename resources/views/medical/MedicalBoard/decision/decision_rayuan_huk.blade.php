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
                                <label class="control-label">NAMA</label>
                                <span class="required">*</span>
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
                                <label class="control-label">TARIKH KEMALANGAN</label>
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
                                <label class="control-label">Orang Berinsurans telah menghadiri sidang Jemaah Doktor</label>
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
                        <div id="accordion2" role="tablist" class="accordion" >
                    
                        <!-- Borang Keputusan jemaah Doktor Rayuan bagi taksiran Huk-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingOne1">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                                       BORANG KEPUTUSAN JEMAAH DOKTOR RAYUAN BAGI TAKSIRAN HILANG UPAYA KEKAL (HUK)</h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                    <div class="card-body">
                                        <div class="form-group"> 
                                            <div class="form-row">
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
                                            <div class="form-row">
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
                                                <div class="form-group col-md-12 col-lg-12" class="card-header" style="background-color: #98cb5b;" role="tab" id="headingAA">
                                                    <h4 class="mb-0">JIKA ORANG BERINSURANS MENGALAMI HILANG UPAYA KEKAL</h4>
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
                                            <div class="col-md-12">
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