<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();

    $pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $perawat = trim(mysqli_real_escape_string($con, $_POST['perawat']));
    $poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
    $tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
    $tensi = trim(mysqli_real_escape_string($con, $_POST['tensi']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $uk = trim(mysqli_real_escape_string($con, $_POST['uk']));
    $tfu = trim(mysqli_real_escape_string($con, $_POST['tfu']));
    $letak = trim(mysqli_real_escape_string($con, $_POST['letak']));
    $djj = trim(mysqli_real_escape_string($con, $_POST['djj']));
    $lab = trim(mysqli_real_escape_string($con, $_POST['lab']));
    $analisa = trim(mysqli_real_escape_string($con, $_POST['analisa']));
    $asuhan_kebidanan = trim(mysqli_real_escape_string($con, $_POST['asuhan_kebidanan']));
    $petugas = trim(mysqli_real_escape_string($con, $_POST['petugas']));
    $hpht = trim(mysqli_real_escape_string($con, $_POST['hpht']));
    $pl = trim(mysqli_real_escape_string($con, $_POST['pl']));
    $riwayat_obsteri = trim(mysqli_real_escape_string($con, $_POST['riwayat_obsteri']));
    $jumlah_anak_hidup = trim(mysqli_real_escape_string($con, $_POST['jumlah_anak_hidup']));
    $jumlah_lahir_mati = trim(mysqli_real_escape_string($con, $_POST['jumlah_lahir_mati']));
    $penolong_terakhir = trim(mysqli_real_escape_string($con, $_POST['penolong_terakhir']));
    $cara = trim(mysqli_real_escape_string($con, $_POST['cara']));
    $komplikasi_riwayat_kb = trim(mysqli_real_escape_string($con, $_POST['komplikasi_riwayat_kb']));
    $penyakit_penyerta = trim(mysqli_real_escape_string($con, $_POST['penyakit_penyerta']));
    $penyakit_klg = trim(mysqli_real_escape_string($con, $_POST['penyakit_klg']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $lila = trim(mysqli_real_escape_string($con, $_POST['lila']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $imunisasi_td = trim(mysqli_real_escape_string($con, $_POST['imunisasi_td']));

    mysqli_query($con, "INSERT INTO tb_rekammedis1(id_rm1, id_pasien, keluhan, id_perawat, id_poli, tgl_periksa, tensi, bb, uk, tfu, letak, djj, lab, analisa, asuhan_kebidanan, petugas, hpht, pl, riwayat_obsteri, jumlah_anak_hidup, jumlah_lahir_mati, penolong_terakhir, cara, komplikasi_riwayat_kb, penyakit_penyerta, penyakit_klg, tb, lila, status, imunisasi_td ) VALUES ('$uuid', '$pasien', '$keluhan', '$perawat',  '$poli', '$tgl', '$tensi', '$bb', '$uk', '$tfu', '$letak', '$djj', '$lab', '$analisa', '$asuhan_kebidanan', '$petugas', '$hpht', '$pl', '$riwayat_obsteri', '$jumlah_anak_hidup', '$jumlah_lahir_mati', '$penolong_terakhir', '$cara', '$komplikasi_riwayat_kb', '$penyakit_penyerta', '$penyakit_klg', '$tb', '$lila', '$status', '$imunisasi_td')") or die (mysqli_error($con));

    $obat = $_POST['obat'];
    foreach ($obat as $ob) {
        mysqli_query($con, "INSERT INTO tb_rm_obat1 (id_rm1, id_obat1) VALUES ('$uuid', '$ob')") or die (mysqli_error($con));
    }
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];

    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $tensi = trim(mysqli_real_escape_string($con, $_POST['tensi']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $uk = trim(mysqli_real_escape_string($con, $_POST['uk']));
    $tfu = trim(mysqli_real_escape_string($con, $_POST['tfu']));
    $letak = trim(mysqli_real_escape_string($con, $_POST['letak']));
    $djj = trim(mysqli_real_escape_string($con, $_POST['djj']));
    $lab = trim(mysqli_real_escape_string($con, $_POST['lab']));
    $analisa = trim(mysqli_real_escape_string($con, $_POST['analisa']));
    $asuhan_kebidanan = trim(mysqli_real_escape_string($con, $_POST['asuhan_kebidanan']));
    $petugas = trim(mysqli_real_escape_string($con, $_POST['petugas']));
    $hpht = trim(mysqli_real_escape_string($con, $_POST['hpht']));
    $pl = trim(mysqli_real_escape_string($con, $_POST['pl']));
    $riwayat_obsteri = trim(mysqli_real_escape_string($con, $_POST['riwayat_obsteri']));
    $jumlah_anak_hidup = trim(mysqli_real_escape_string($con, $_POST['jumlah_anak_hidup']));
    $jumlah_lahir_mati = trim(mysqli_real_escape_string($con, $_POST['jumlah_lahir_mati']));
    $penolong_terakhir = trim(mysqli_real_escape_string($con, $_POST['penolong_terakhir']));
    $cara = trim(mysqli_real_escape_string($con, $_POST['cara']));
    $komplikasi_riwayat_kb = trim(mysqli_real_escape_string($con, $_POST['komplikasi_riwayat_kb']));
    $penyakit_penyerta = trim(mysqli_real_escape_string($con, $_POST['penyakit_penyerta']));
    $penyakit_klg = trim(mysqli_real_escape_string($con, $_POST['penyakit_klg']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $lila = trim(mysqli_real_escape_string($con, $_POST['lila']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $imunisasi_td = trim(mysqli_real_escape_string($con, $_POST['imunisasi_td']));
    
    mysqli_query($con, "UPDATE tb_rekammedis1 SET keluhan = '$keluhan', tensi = '$tensi', bb = '$bb', uk = '$uk', tfu = '$tfu', letak = '$letak', djj = '$djj', lab = '$lab', analisa = '$analisa', asuhan_kebidanan = '$asuhan_kebidanan',
                petugas = '$petugas', hpht = '$hpht', pl = '$pl', riwayat_obsteri = '$riwayat_obsteri', jumlah_anak_hidup = '$jumlah_anak_hidup', jumlah_lahir_mati = '$jumlah_lahir_mati', penolong_terakhir = '$penolong_terakhir',
                cara = '$cara', komplikasi_riwayat_kb = '$komplikasi_riwayat_kb', penyakit_klg = '$penyakit_klg', tb = '$tb', lila='$lila', status = '$status', imunisasi_td = '$imunisasi_td' WHERE tb_rekammedis1.id_rm1 = '$id'") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
    
}
?>