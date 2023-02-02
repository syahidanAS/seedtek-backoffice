<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach($piutang as $item)
    <title>SURAT TAGIHAN - {{ $item->nm_debitur }}</title>
    @endforeach
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .rangkasurat{
            background-color: #fff;
            height: 500px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .table-header{
            border-bottom: 5px double black;
            padding: 2px;

        }
        .tengah{
            text-align: center;
            line-height: 5px;
        }
        h2{
            font-size: 1.3rem
        }

    </style>
</head>
<body>
    <div class="rangkasurat">
    <table class="table-header" width="100%">
            <tr >
                <td ><img src="{{ $pic }}" alt="" width="120px"></td>
                <td class="tengah">
                    <h2>SEEDTEK TECHNOLOGY</h2>
                    <p style="font-size: 0.9rem">Email: seedtektechnology@gmail.com - Tlp. 082246297995<p>
                </td>
                <td><img src="{{ $logo }}" alt="" width="120px"></td>
                <td class="tengah">
            </tr>
        </table>
        @foreach($piutang as $item)
        <div class="content" >
            <p style="margin-left: 60%; margin-top: 30px;">Karawang, {{ $today }}</p>
            <table style="margin-bottom: 3%;">
                <tr>
                   <td>Nomor</td>
                   <td>: </td>
                   <td>{{ $item->no_invoice }}</td>
                </tr>
                <tr>
                    <td>Lampiran</td>
                    <td>: </td>
                    <td>Invoice dan Rekapitulasi Biaya Layanan Website {{ $item->nm_debitur }}</td>
                 </tr>
                 <tr>
                    <td>Perihal</td>
                    <td>: </td>
                    <td>Tagihan dan Biaya Layanan {{ $item->nama_pelayanan }} {{ $item->nm_debitur }}</td>
                 </tr>
            </table>

            <p>Kepada,</p>
            <p>Yth. {{ $item->nm_debitur }}</p>
            <p>Di</p>
            <p style="margin-right: 30%; margin-bottom: 4%; text-align: justify; text-justify: inter-word;">{{ $item->alamat }}</p>
            <p>Dengan Hormat,</p>
            <p style="text-align: justify; text-justify: inter-word;">
                Kami mengucapkan terima kasih atas kepercayaan {{ $item->nm_debitur }}, sehingga Kerjasama ini dapat terjalin dengan baik.
            </p>
            <p style="text-align: justify; text-justify: inter-word;">
                Bersama ini kami sampaikan Tagihan Biaya Layanan Website {{ $item->nama_pelayanan }} di SEEDTEK
                    periode {{  $item->tgl_pengajuan->isoFormat('MMMM Y')}} s/d {{  $item->tgl_tempo->isoFormat('MMMM Y')}}, mohon untuk segera melakukan pembayaran melalui via transfer ke nomor rekening
                    a/n Syahidan Arrizaldy Sidik yang tertera pada invoice.
            </p>
            <p style="text-align: justify; text-justify: inter-word;">
                Setelah melakukan transfer pembayaran, bukti transfer dikirim melalui WA : 082246297995 atau
                    melalui email seedtektechnology@gmail.com ditujukan ke bagian bendahara umum.
            </p>
            <p style="text-align: justify; text-justify: inter-word; margin-bottom:4%;">
                Demikian kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terimakasih.
            </p>
            <!-- <p style="margin-left: 65%; margin-bottom:12%;">
                <b>Owner Seedtek</b>
            </p>
            <p style="margin-left: 57%; margin-top:5%; text-align:center;">
                <b><u>Syahidan Arrizaldy S, S.Kom</u></b>
            </p> -->
            <!-- <p style="margin-left: 57%;text-align:center;">
                NIP. 19811120 200501 2 013
            </p> -->
        </div>
        @endforeach

    </div>
</body>
</html>
