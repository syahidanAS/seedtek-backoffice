<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach($piutang as $item)
    <title>INVOICE - {{ $item->nm_debitur }}</title>
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
        .table-invoice {
            border: 1px solid #000000;
            border-collapse: collapse;
        }
        .table-invoice td{
            border: 1px solid #000000;
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
        <div class="content" style="width:100%;">
            <h4 class="" style="text-align: center;">INVOICE</h4>
            <table class="table-invoice" >
                <tbody >
                    <tr>
                        <td colspan="2" style='vertical-align:top; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Kepada:<br>{{ $item->nm_debitur }}</td>
                        <td colspan="4" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Untuk Pembayaran:<br>{{ $keterangan_invoice }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="width: 100%;"><br></td>
                    </tr>

                    <tr>
                        <td colspan="2" style="width: 33.0781%; vertical-align: top;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>No Invoice</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>{{ $item->no_invoice }}</div>
                        </td>
                        <td style="width: 16.5821%; vertical-align: top;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Tanggal Invoice</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>{{ $item->tgl_pengajuan->isoFormat('D MMMM Y') }}</div>
                        </td>
                        <td colspan="2" style="width: 30.1254%; vertical-align: top;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Tanggal Jatuh Tempo</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>{{
                             $item->tgl_tempo->isoFormat('D MMMM Y') }}</div>
                        </td>
                        <td style="width: 19.7848%;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Bisnis Unit</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>
                            @foreach($unit as $invoiceItem)
                             @if($loop->count > 1)
                                {{ $invoiceItem->unit_layanan }},
                             @else
                             {{ $invoiceItem->unit_layanan }}
                             @endif

                            @endforeach
                            </div><br>
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 7.1976%; vertical-align: top;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>No</div>
                        </td>

                        <td style="width: 26.0336%;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Nama Layanan</div>
                        </td>

                        <td style="width: 16.5821%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>QTY</div>
                        </td>
                        <td style="width: 12.0533%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Mata Uang</div>
                        </td>
                        <td style="width: 18.1152%;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Harga Per Unit</div>
                        </td>
                        <td style="width: 19.7847%;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>Total Harga</div>
                        </td>
                    </tr>
                    @foreach($invoice as $invoiceItem)
                    <tr>
                        <td style='width: 7.1976%; text-align: center; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>{{ $loop->iteration }}</td>
                        <td style='width: 26.0336%; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>{{ $invoiceItem->nama_pelayanan }}</td>
                        <td style='width: 16.5821%; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;' >{{ $invoiceItem->qty }}</td>
                        <td style="width: 12.0533%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>(RP)</div>
                        </td>
                        <td style="width: 18.1152%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: center;'>@currency($invoiceItem->harga)</div>
                        </td>
                        <td style="width: 19.7847%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style="text-align: left">Rp</span><span style="margin-left: 80px">{{ number_format($invoiceItem->total,0,',','.');  }}</span></div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" rowspan="5" style='width: 61.8683%; vertical-align: top; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Note:<br>Bank Mandiri<br>No Rek: 1730003455061<br>a/n : SYAHIDAN ARRIZALDY SIDIK</td>
                        <td rowspan="5" style="width: 18.2236%; vertical-align: middle;">
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Sub Total</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Potongan</div>
                            <div style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Biaya Materai</div>
                        </td>
                        <td style="width: 19.7847%;"><br></td>
                    </tr>
                    <tr>

                        <td style='width: 19.7847%; color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><span style="text-align: left;">Rp</span><span style="padding-left: 70px">{{ number_format($total->sub_total,0,',','.'); }}</span></td>
                    </tr>
                    @if($potongan > 0 && $materai > 0)
                    <tr>
                        <td style="width: 19.7847%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'> <span style="text-align: left;">Rp</span><span style="padding-left: 70px">{{ number_format($potongan,0,',','.'); }}</span> </div>
                        </td>
                    </tr>
                    <tr>
                        <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'><span style="text-align: left;">Rp</span><span style="padding-left: 70px">{{ number_format($materai,0,',','.'); }}</span> </div>
                    </tr>
                    @else
                    <tr>
                        <td style="width: 19.7847%;">
                            <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'> <span style="text-align: left;">Rp</span><span style="padding-left: 130px">{{ number_format($potongan,0,',','.'); }}</span> </div>
                        </td>
                    </tr>
                    <tr>
                        <div data-empty="true" style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'><span style="text-align: left;">Rp</span><span style="padding-left: 130px">{{ number_format($materai,0,',','.'); }}</span> </div>
                    </tr>
                    @endif
                    <tr>
                        <td style="width: 19.7847%;"><br></td>
                    </tr>
                    <tr>
                        <td colspan="6"  style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>
                            TOTAL: <span style="margin-left: 70%"> @currency($grand_total)</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"  style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'>Terbilang: <i>{{ $terbilang }}</i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
        <!-- <p style="margin-left: 58%; margin-bottom:20%; margin-top:40px;">
            <span style="margin-left: 10px;"> Karawang, <?php
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
echo tgl_indo(date('Y-m-d'));
?> -->
<!-- </span> <br><span style="color: #fff;">...</span>Owner
        </p>
        <p style="margin-left: 58%; margin-top:5%; text-align:center;">
            <b><u>SYAHIDAN ARRIZALDY S, S.Kom</u></b>
        </p>
        <p style="margin-left: 58%;text-align:center;">
            NIP. 19811120 200501 2 013
        </p>
    </div> -->
</body>
</html>
