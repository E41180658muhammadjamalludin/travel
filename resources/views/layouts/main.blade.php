<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Jabatan</title>
</head>
<body>
@include('sweetalert::alert')
<!-- navbar -->
    <nav id="navbar" class="nav">
        <div class="logo">
            <label for="">PT Travel Indonesia</label>
        </div>
        <input style="display: none;" type="checkbox" name="down" id="down">
        <ul>
            <li class="navoption">
                <label for=""> Rabu, 29 September</label>
            </li>
            <li class="navoption">
                <label for="">11:07:45 WIB</label>
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
        <label class="side" id="" for="side"><img src="/icon/arrow right.png" alt=""></label>
        <ul class="side-menu">
            <li class="side-option"><a href="index.php">User</a></li>
            <li class="side-option"><a href="index.php">Mobil</a></li>
            <li class="side-option"><a href="index.php">Driver</a></li>
        </ul>
    </div>

    @yield('content')



    <!-- ================================ Script ================================ -->
    <script src='assets/jquery.js'></script>
    <script  src="assets/script.js"></script>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>
