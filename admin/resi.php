<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cetak Bukti Pendaftaran Vaksinasi</title>
    <link rel="icon" type="image/x-icon" href="" />
    <style>
        body {
            font-size: 12px;
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        @page :left {
            margin-left: 3cm;
        }

        @page :right {
            margin-right: 2cm;
        }
    </style>
</head>

<body>
    <div align="right"><button class="no-print" onClick="window.print();">Cetak</button></div>
    <table width="800" align="center">
        <tr>
            <td align="center"><img src="../img/1.png" height="115" /></td>
            <td>
                <div align="center">
                    <font size="5"><b>UNIVERSITAS AIRLANGGA SURABAYA</b></font><br>
                    <div align="center">Jl. Raya Porong No.1 Sidoarjo, Jawa Timur 61274<br>
                        Website : www.unair.com Email : unair@gmail.com
                    </div>
                    <div align="center">
                        Telepon : (0343) 856444 / (0343) 853080 Fax. : (0343) 850920
                    </div>
            </td>
            <div style="clear:both" />
        </tr>
    </table>
    <table width="800" align="center">
        <tr>
            <td colspan="5">
                <hr style="border-bottom: solid 2px #000">
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div align="center">
                    <font size="4"><b>Permintaan Pembayaran</b></font>
                </div>
            </td>
        </tr>
    </table>
    <table width="800" align="center">
        <tr>
            <td width="250">Nomor</td>
            <td>:</td>
            <td colspan="2">4367734</td>
        </tr>
        <tr>
            <td colspan="1" width="250">Perihal</td>
            <td>:</td>
            <td colspan="2">Penggantian biaya kesehatan</td>
        </tr>
        <tr>
            <td width="250">Kepada</td>
            <td>:</td>
            <td colspan="2">SPV Senior Keuangan</td>
        </tr>
        <tr>
            <td width="250">Dari</td>
            <td>:</td>
            <td colspan="2">Manajer Keu & admin</td>
        </tr>
        <tr>
            <td width="250"></td>
        </tr>
    </table>
    <br>
    <table width="800" align="center">
        <tr>
            <td width="250">Dengan ini disampaikan permintaan pembayaran biaya kesehatan dengan perincian sebagai berikut :</td>
        </tr>
    </table>
    <br>
    <table width="800" align="center" border="1">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Sub</th>
                <th scope="col">NID</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Item</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td align="center">4367734</td>
                <td align="center">Keuangan</td>
                <td align="center">452233</td>
                <td align="center">Hofidatul</td>
                <td align="center">4</td>
                <td align="center">Rp. 4.000.000</td>
            </tr>
            <tr>
                <th scope="row" colspan="6">Total</th>
                <td align="center">Rp. 4.000.000</td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <table width="900" align="center">
        <tr>
            <td width="250"></td>
            <td width="250">
                <div align="right">
                    <height="160">
                </div>
            </td>
            <td width="300">Surabaya, 8 Juni 2022</td>
        </tr>
    </table>
    <br><br><br><br><br>
    <table width="900" align="center">
        <tr>
            <td width="250"></td>
            <td width="250">
                <div align="right">
                    <height="160">
                </div>
            </td>
            <td width="300"> <u>Hendry Dwi Nurmansyah Idris</u> </td>
        </tr>
        <tr>
            <td width="250"></td>
            <td width="250">
                <div align="right">
                    <height="160">
                </div>
            </td>
            <td width="300">Manajer Keu & admin</td>
        </tr>
    </table>
    <!-- <table width="900" align="center">
        <tr>
            <td width="223"></td>
            <td width="223">
                <div align="right">
                    <height="160">
                </div>
            </td>
            <td width="321">
                <input hidden id="text" type="text" value="123" style="Width:20%" / onblur='generateBarCode();'>
                <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=<?= $pendaftar['NIK'] ?>&amp;size=100x100" width="80" height="80" />
            </td>
        </tr>
    </table> -->
</body>
<script type="text/javascript">
    window.onload = function() {
        window.print();
    }
</script>

</html>