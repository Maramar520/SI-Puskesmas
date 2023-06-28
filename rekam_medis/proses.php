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
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $ku = trim(mysqli_real_escape_string($con, $_POST['ku']));
    $td = trim(mysqli_real_escape_string($con, $_POST['td']));
    $n = trim(mysqli_real_escape_string($con, $_POST['n']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $rr = trim(mysqli_real_escape_string($con, $_POST['rr']));
    $suhu = trim(mysqli_real_escape_string($con, $_POST['suhu']));
    $vas = trim(mysqli_real_escape_string($con, $_POST['vas']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $kepala = trim(mysqli_real_escape_string($con, $_POST['kepala']));
    $dada = trim(mysqli_real_escape_string($con, $_POST['dada']));
    $jantung = trim(mysqli_real_escape_string($con, $_POST['jantung']));
    $paru = trim(mysqli_real_escape_string($con, $_POST['paru']));
    $perut = trim(mysqli_real_escape_string($con, $_POST['perut']));
    $kelamin = trim(mysqli_real_escape_string($con, $_POST['kelamin']));
    $anggota_gerak = trim(mysqli_real_escape_string($con, $_POST['anggota_gerak']));
    $diagnosis_icd = trim(mysqli_real_escape_string($con, $_POST['diagnosis_icd']));
    $program = trim(mysqli_real_escape_string($con, $_POST['program']));

    mysqli_query($con, "INSERT INTO tb_rekammedis(id_rm, id_pasien, id_perawat, id_poli, tgl_periksa, keluhan, ku, td, n, tb, rr, suhu, vas, bb, kepala, dada, jantung, paru, perut, kelamin, anggota_gerak, diagnosis_icd, program ) VALUES ('$uuid', '$pasien', '$perawat', '$poli', '$tgl', '$keluhan', '$ku', '$td', '$n', '$tb', '$rr', '$suhu', '$vas', '$bb', '$kepala', '$dada', '$jantung', '$paru', '$perut', '$kelamin', '$anggota_gerak', '$diagnosis_icd', '$program')") or die (mysqli_error($con));

    $obat = $_POST['obat'];
    foreach ($obat as $ob) {
        mysqli_query($con, "INSERT INTO tb_rm_obat (id_rm, id_obat) VALUES ('$uuid', '$ob')") or die (mysqli_error($con));
    }
    echo "<script>window.location='data.php';</script>";
}else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $ku = trim(mysqli_real_escape_string($con, $_POST['ku']));
    $td = trim(mysqli_real_escape_string($con, $_POST['td']));
    $n = trim(mysqli_real_escape_string($con, $_POST['n']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $rr = trim(mysqli_real_escape_string($con, $_POST['rr']));
    $suhu = trim(mysqli_real_escape_string($con, $_POST['suhu']));
    $vas = trim(mysqli_real_escape_string($con, $_POST['vas']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $kepala = trim(mysqli_real_escape_string($con, $_POST['kepala']));
    $dada = trim(mysqli_real_escape_string($con, $_POST['dada']));
    $jantung = trim(mysqli_real_escape_string($con, $_POST['jantung']));
    $paru = trim(mysqli_real_escape_string($con, $_POST['paru']));
    $perut = trim(mysqli_real_escape_string($con, $_POST['perut']));
    $kelamin = trim(mysqli_real_escape_string($con, $_POST['kelamin']));
    $anggota_gerak = trim(mysqli_real_escape_string($con, $_POST['anggota_gerak']));
    $diagnosis_icd = trim(mysqli_real_escape_string($con, $_POST['diagnosis_icd']));
    $program = trim(mysqli_real_escape_string($con, $_POST['program']));
    
    mysqli_query($con, "UPDATE tb_rekammedis SET keluhan = '$keluhan', ku = '$ku', td = '$td', n = '$n', tb = '$tb', rr = '$rr', suhu = '$suhu', vas = '$vas', bb = '$bb', kepala = '$kepala',
                dada = '$dada', jantung = '$jantung', paru = '$paru', kelamin = '$kelamin', anggota_gerak = '$anggota_gerak', diagnosis_icd = '$diagnosis_icd', program = '$program' WHERE tb_rekammedis.id_rm = '$id'") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
    
}
?>