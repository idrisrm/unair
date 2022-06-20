<style type="text/css">
    .marginku {
        margin-top: 15px;
    }
</style>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <div class="row">
                <div class="col-md-5">
                    <img src="../img/1.png" width="75px" align="center" id="logoside" class="img-responsive">
                </div>
                <div class="col-md-5 marginku">
                    <img src="../img/LOGOVOKASI.png" height=100px width="100px" align="center" id="logoside" class="img-responsive">
                </div>
            </div>

            <li>
                <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
            </li>
            <?php
            $sql = mysqli_query($kon, "SELECT COUNT(id_detail) as jumlah FROM detail_pasien WHERE diagnosa = ''");
            $hasil = mysqli_fetch_row($sql);
            $sql1 = mysqli_query($kon, "SELECT COUNT(id_rekam) as jumlah FROM tb_rekam_medis WHERE diagnosa = ''");
            $hasil1 = mysqli_fetch_row($sql1);
            // var_dump($hasil1);die;
            if ($_SESSION['akses'] == 2) { ?>
                <li>
                    <a href=#><i class="fa fa-user fa-fw"></i> Diagnosa <span class="badge" style="color: white; background-color: red;"><?= $hasil[0] + $hasil1[0] == 0 ? '' : $hasil[0] + $hasil1[0] ?></span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="?menu=diagnosapasien">Data Pasien <span class="badge" style="color: white; background-color: red;"><?= $hasil[0] == 0 ? '' : $hasil[0] ?></span></a>
                        </li>
                        <li>
                            <a href="?menu=diagnosarekammedis">Rekam Medis <span class="badge" style="color: white; background-color: red;"><?= $hasil1[0] == 0 ? '' : $hasil1[0] ?></span></a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <li>
                <a href=#><i class="fa fa-edit fa-fw"></i> Input<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?menu=pasien">Data Pasien</a>
                    </li>

                    <li>
                        <a href="?menu=dokter">Dokter</a>
                    </li>
                    <li>
                        <a href="?menu=rekam_medis">Rekam Medis</a>
                    </li>
                    <!-- <li>
                        <a href="?menu=user">User</a>
                    </li> -->
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href=#><i class="fa fa-table fa-fw"></i> Report<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?menu=laporan">Laporan Rekam Medis</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!-- <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Log in sebagai:</div>
                    <div class="sidenav-footer-title">dfaf</div>
                </div>
            </div> -->

        </ul>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>