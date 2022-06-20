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

<?php
include "../config/cek_session1.php";
include '../config/koneksi.php';
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];

// $total = mysqli_query($kon, "SELECT SUM(biaya) as biaya FROM tb_rekam_medis WHERE nomor_pasien = 'JP66'");
// $datatotal = mysqli_fetch_array($total);

?>

<body>
    <div align="right"><button class="no-print" onClick="window.print();">Cetak</button></div>
    <table width="800" align="center">
        <tr>
            <td align="center"><img src="../img/1.png" height="115" /></td>
            <td>
            <div align="center">
                    <font size="5"><b>UNIVERSITAS AIRLANGGA SURABAYA</b></font><br>
                    <div align="center">Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115<br>
                        Website : www.unair.ac.id
                    </div>
                    <div align="center">
                        Telepon : +62-031-5914042 / 5914043 / 5915551
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
                    <font size="4"><b>Rekam Medis Karyawan Periode <?= date('F', mktime(0, 0, 0, $bulan, 10)); ?> <?= $tahun ?></b></font>
                </div>
            </td>
        </tr>
    </table>
    <!-- <table width="800" align="center">
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
    </table> -->
    <br>
    <table width="800" align="center" border="1">
        <thead>
            <tr>
                <th style="text-align: center;" align="center" scope="col">No</th>
                <th style="text-align: center;" align="center" scope="col">NID</th>
                <th style="text-align: center;" align="center" scope="col">Unit</th>
                <th style="text-align: center;" align="center" scope="col">Nama Pegawai</th>
                <th style="text-align: center;" align="center" scope="col">Nama Dokter</th>
                <th style="text-align: center;" align="center" scope="col">Umur</th>
                <th style="text-align: center;" align="center" scope="col">Terapi</th>
                <th style="text-align: center;" align="center" scope="col">Diagnosa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = mysqli_query($kon, "SELECT * FROM tb_rekam_medis join tb_karyawan on tb_karyawan.id = tb_rekam_medis.id_pasien join tb_dokter on tb_dokter.id_dokter = tb_rekam_medis.id_dokter join unit_sub on unit_sub.id = tb_karyawan.id_sub WHERE MONTH(tanggal_daftar) = '$bulan' && YEAR(tanggal_daftar) = '$tahun' && tb_rekam_medis.status = 1 ");
            // $data = mysqli_fetch_array($q);

            $no = 1;
            while ($data = mysqli_fetch_array($q)) {
            ?>
                <tr>
                    <th style="text-align: center;" scope="row"><?= $no ?></th>
                    <td align="center"><?= $data['NID'] ?></td>
                    <td align="center"><?= $data['nama_sub'] ?></td>
                    <td align="center"><?= $data['nama_karyawan'] ?></td>
                    <td align="center"><?= $data['nama_dokter'] ?></td>
                    <td align="center"><?= $data['umur'] ?></td>
                    <td align="center"><?= $data['terapi'] ?></td>
                    <td align="center"><?= $data['diagnosa'] ?></td>
                </tr>
            <?php $no++;
            } ?>
            <!-- <tr>
                <th style="text-align: center;" scope="row" colspan="4">Total</th>
                <td align="center">Rp. <?= number_format($datatotal['biaya'], 0, ",", ".") ?></td>
            </tr> -->
        </tbody>
    </table>
    <br><br><br>
    <!-- <table width="900" align="center">
        <tr>
            <td width="250"></td>
            <td width="250">
                <div align="right">
                    <height="160">
                </div>
            </td>
            <td width="300">Surabaya, <?= date("Y/m/d") ?></td>
        </tr>
    </table> -->
    <br><br><br><br><br>
    <!-- <table width="900" align="center">
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
    </table> -->
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