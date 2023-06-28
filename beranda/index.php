<?php include_once('../_header.php'); ?>

        <div class="row">
            <div class="col-lg-12">
                <h1>Beranda</h1>
                <p>Selamat Datang <mark><?=$_SESSION['user'];?></mark> pada sistem Aplikasi SIMPUS Puskesmas Pembantu Sistem ini adalah sala satunya layanan
                akademik untuk Pegawai Puskesmas Pembantu yang memuat seluruh data utama administrasi yang antara lain berisi fitur - fitur manajemen Data Pasien, 
                Data Pegawai, Data Poliklinik, Data Obat, Data Rekam Medis. Sistem ini menggunakan Single Sign On sebagai fitur otentikasi</p>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>

<?php include_once('../_footer.php'); ?>