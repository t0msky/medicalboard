<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Kuiri Bencana kerja</title>
    <link href="{{ URL::asset('css/notiform.css') }}" rel="stylesheet" />
</head>

<body style="background-color:#fff; background-image: url({{ asset('storage/img/watermark.png')}});">
    <div class="row" id="toprow" class="ver">
        <div class="col-md-1 squareblue">
        </div>
        <div class="col-md-1 squaregreen">
        </div>
        <div class="col-md-2">
            <img src="{{ asset('/images/perkeso.png')}}" width="100" height="100" style="padding-bottom: 10px;">
        </div>

        <div class="col-md-3 offset-md-3">
            <p style="font-size: 12px;">
                PERTUBUHAN KESELAMATAN SOSIAL <br>
                Wisma PERKESO <br>
                Lot 141, Seksyen 6, Jalan Selangor <br>
                46990 Petaling Jaya <br>
                SELANGOR <br>
            </p>
        </div>

        <div class="col-md-3 offset-md-3">
            <p style="font-size: 11px;">
                No. Telefon : {{$branch->phone_no}} <br>
                Faks : 03-79567492 <br>
                E-mel : pkspj@perkeso.gov.my <br>
                Laman Web : www.perkeso.gov.my
            </p>
        </div>
        <!-- <div class="col-md-1" style="padding-right: 84.2px;"></div> -->
        <div class="col-md-1 squaregreen">
        </div>
        <div class="col-md-1 squareblue" style="">
        </div>
    </div>
    {{--{{ dd($caseemp[0]->empname) }}--}}
    <div class="body-in">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <p style="padding: 0 !important; margin:0 !important;">Rujukan Kami:
                    <b>{{ $caseinfo[0]->schemerefno }}</b></p>
                <p style="padding: 0 !important; margin:0 !important;">Tarikh: {{ $date }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @if($noti[0]->nt_sendto == 1)
                <p>{{$caseobprofile[0]->name}}<br> {{$caseobprofile[0]->add1}}, {{$caseobprofile[0]->add2}} <br>
                    {{$caseobprofile[0]->add3}} <br> {{$caseobprofile[0]->postcode}}
                    {{$caseobprofile[0]->state_code}}</p>
                @elseif($noti[0]->nt_sendto == 2)
                <p>{{$caseemp[0]->empname}}<br> {{$caseemp[0]->add1}}, {{$caseemp[0]->add2}} <br>
                    {{$caseemp[0]->add3}} <br> {{$caseemp[0]->postcode}}
                    {{$caseemp[0]->state_code}}</p>
                @elseif($noti[0]->nt_sendto == 3)
                <p>SYARIKAT MAJU JAYA SDN. BHD. <br> NO. 334 & 335, BLOK SERI NILAM <br> JALAN PERINDUSTRIAN <br> 55100
                    KUALA LUMPUR</p>
                @endif
                <p>Tuan/Puan,</p>
            </div>
        </div>
        <div class="row">
            <div class="table-title">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="40%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>PENYAKIT KHIDMAT KE ATAS</b>
                                </p>
                            </td>
                            <td width="10%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>: </b></p>
                            </td>
                            <td width="60%">
                                <p style="padding: 0 !important; margin:0 !important;">
                                    <b>{{$caseobprofile[0]->name}}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>TARIKH KEMALANGAN</b></p>
                            </td>
                            <td width="10%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>: </b></p>
                            </td>
                            <td width="60%">
                                <p style="padding: 0 !important; margin:0 !important;">
                                    <b>{{$caseinfo[0]->f34recvdate}}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>NO. KPPN</b></p>
                            </td>
                            <td width="10%">
                                <p style="padding: 0 !important; margin:0 !important;"><b>: </b></p>
                            </td>
                            <td width="60%">
                                <p style="padding: 0 !important; margin:0 !important;">
                                    <b>{{$caseobprofile[0]->idno}}</b></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <p>Merujuk kepada perkara diatas, dimaklumkan pejabat ini memerlukan perkara-perkara berikut:</p>
            @foreach($notidoc as $nd)
            <p>( X ) {{ $nd->nd_docdesc}} <br></p>
            @endforeach
            <!-- <p>( X ) Laporan Perubatan. <br>( X ) Laporan Polis.<br>( X ) Section J di Borang 34 yang ditangani oleh
                orang terbencana.<br></p> -->
        </div>
        <div class="row">
            <p>3. Kerjasama dari pihak tuan/puan dalam perkara ini amat diharapkan dan diucapkan terima kasih.</p>
            <p>Sekian, terima kasih.</p>
            <p><b>“BERKHIDMAT UNTUK NEGARA”</b></p>
            <p><b><i>“PEKERJA KREATIF PENCETUS INOVASI”</i></b></p>
            <p>Saya yang menurut perintah,<br><br></p>
            <p><b>Nor Shima Binti Azizol Faizal</b> <br> b.p. Pengarah Negeri, <br> Pertubuhan Keselamatan Sosial <br>
                Selangor Darul Ehsan.</p>
            <p><i>s.k. “Surat ini adalah cetakan komputer dan tidak memerlukan tandatangan”</i></p>
        </div>
        <div class="table-in">
            <p style="padding: 0 !important; margin:0 !important;">SYARIFAH HASWANI KHADIJAH BINTI MOHAMAD NOR HAFEEZI
                AL WAJDI</p>
            <div class="row">
                <div class="col-md-6">
                    <p style="padding: 0 !important; margin:0 !important;">NO. 33, BLOK SERI NILAM <br> TAMAN PERMATA
                        KASIH <br> JALAN MEMORI INDAH 22/1 <br> 55100 KUALA LUMPUR</p>
                </div>
            </div>
        </div>
        <div class="footer-in">
            <h4>“SIKAP TERBUKA LAYANAN MESRA”</h4>
        </div>
    </div>
</body>

</html>
