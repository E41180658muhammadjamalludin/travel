<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <title>Jabatan</title>
</head>
<body>
<!-- navbar -->
    <nav id="navbar" class="nav">
        <div class="logo">
            <label for="">SIMPEG.PT MASCITRA TEKNOLOGI INFORMASI</label>
        </div>
        <input style="display: none;" type="checkbox" name="down" id="down">
        <ul>
            <li class="navoption">
                <label for=""><i class="fas fa-calendar-week"></i> Rabu, 29 September</label>
            </li>
            <li class="navoption">
                <label for=""><i class="fas fa-clock"></i>11:07:45 WIB</label>
            </li>
            <li class="navoption">
                <input type="checkbox" name="notifikasi" id="notifikasi">
                <label for="notifikasi"><i class="fas fa-bell notif"></i>
                    Notifikasi
                    <i class="fas fa-caret-down" aria-hidden="true"></i>
                </label>
                <ul class="" id="notifikasi">
                    <li><a href="KenaikanPangkat.php">Kenaikan Pangkat</a></li>
                    <li><a href="KenaikanGaji.php">Kenaikan Gaji Berkala</a></li>
                    <li><a href="UlangTahaun.php">Ulang Tahun Hari Ini</a></li>
                    <li><a href="pensiun.php">Persiapan Pensiun</a></li>
                </ul>
            </li>
            <li class="navoption">
                <input type="checkbox" name="akun" id="akun">
                <label for="akun">
                    Super Admin
                    <i class="fas fa-caret-down" aria-hidden="true"></i>
                </label>
                <ul>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="password.php">Ganti Password</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </li>
            <label class="down" id="" for="down"><img src="assets/icon/arrow left.png" alt=""></label>
        </ul>
    </nav>

    <!-- sidebar -->
    <input type="checkbox" name="" id="side">
    <div class="sidebar" id="sidebar">
        <label class="side" id="" for="side"><img src="icon/arrow right.png" alt=""></label>
        <ul class="side-menu">
            <li class="side-option"><a href="index.php"><img src="assets/icon/dashboard.png" alt=""> dashboard</a></li>
            <li class="side-option"><a href="#">
                <img src="assets/icon/pegawai.png" alt=""> Karyawan</a>
                <ul>
                    <li><a href="1_Pgw_DataPgw.php">data pegawai</a></li>
                    <li> <a href="2_NaikPangkat.php">kenaikan pangkat</a></li>
                    <li><a href="3_KenaikanGaji.php">kenaikan gaji berkala</a></li>
                    <li><a href="4_PengajuanCutiPegawai.php">pegawai cuti</a></li>
                    <li><a href="5_PensiunPegawai.php">pensiun</a></li>
                    <li><a href="6_MutasiPegawai.php">mutasi</a></li>
                </ul>
            </li>
            <li class="side-option">
                <a href="#"><img src="assets/icon/data.png" alt=""> Data Master</a>
                <ul>
                    <li><a href="7_Gaji.php">gaji</a></li>
                    <li><a href="8_Eselon.php">eselon</a></li>
                    <li><a href="9_Golongan.php">golongan</a></li>
                    <li><a href="10_Jabatan.php">jabatan</a></li>
                    <li><a href="11_Cuti.php">jenis cuti</a></li>
                    <li><a href="12_SettingCuti.php">setting jenis cuti</a></li>
                    <li><a href="13_Kantor.php">kantor</a></li>
                    <li><a href="14_Kerja.php">unit kerja</a></li>
                    <li><a href="15_Pensiun.php">jenis pensiun</a></li>
                    <li><a href="16_Agama.php">agama</a></li>
                    <li><a href="17_Kelengkapan.php">kelengkapan</a></li>
                </ul>
            </li>
            <li class="side-option">
                <a href="#"><img src="assets/icon/laporan.png" alt=""> laporan</a>
                <ul>
                    <li><a href="18_LaporanDaftarCuti.php">Daftar Cuti</a></li>
                    <li><a href="19_LaporanKenaikanPangkat.php">Kenaikan Pangkat</a></li>
                    <li><a href="20_LaporanKenaikanGajiBerkala.php">Kenaikan Gaji Berkala</a></li>
                    <li><a href="21_LaporanMutasiPegawai.php">Pegawai Mutasi</a></li>
                    <li><a href="22_LaporanPensiunPegawai.php">Pegawai Pensiun</a></li>
                    <li><a href="23_LaporanBerdasarkanStatusPegawai.php">Status Pegawai</a></li>
                </ul>
            </li>
            <li class="side-option">
                <a href="#"><img src="assets/icon/homepage.png" alt=""> home page</a>
                <ul>
                    <li><a href="24_Profile.php">profile</a></li>
                    <li><a href="25_KelompokFoto.php">kelompok foto</a></li>
                    <li><a href="26_Foto.php">foto</a></li>
                    <li><a href="27_video.php">video</a></li>
                    <li><a href="28_Download.php">download</a></li>
                    <li><a href="29_Pengumuman.php">pengumuman</a></li>
                    <li><a href="30_Registrasi.php">pegawai registrasi</a></li>
                    <li><a href="31_Kualifikasi.php">kualifikasi pegawai</a></li>
                    <li><a href="32_Slideshow.php">slide show</a></li>
                </ul>
            </li>
            <li class="side-option">
                <a href="33_User.php"><img src="assets/icon/user.png" alt=""> user</a>
            </li>
        </ul>
    </div>

    <!-- konten -->
    <div id="konten">
    <!---------------- FORM TABLE ---------------->
		<div action="" class="form-table">
            <!------- judul ------->
            <div class="title">
                <label for="">edit Jabatan</label>
            </div>
            <div class="forminput">
                <label for="">kantor</label>
                <select name="" id="">
                    <option value="">pilih kantor</option>
                </select>
            </div>
            <div class="forminput">
                <label for="">kode</label>
                <input type="text" placeholder="kode">
            </div>
            <div class="forminput">
                <label for="">nama</label>
                <input type="text" placeholder="nama">
            </div>
            <div class="forminput">
                <label for="">Keterangan</label>
                <textarea placeholder="keterangan" name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-button">
                <button class="button green">save</button>
                <a href="9_Golongan.php" class="button red">kembali</a>
        </div>
    <!---------------- FORM TABLE END ---------------->
    </div>


    <!-- ================================ Script ================================ -->
    <script src='assets/jquery.js'></script>
    <script  src="assets/script.js"></script>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>
