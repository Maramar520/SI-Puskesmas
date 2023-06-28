<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepencyException;

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $gedung = trim(mysqli_real_escape_string($con, $_POST['gedung']));
    mysqli_query($con, "INSERT INTO tb_poliklinik(id_poli, nama_poli, gedung) VALUES ('$uuid', '$nama', '$gedung')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
    # code...
}elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $gedung = trim(mysqli_real_escape_string($con, $_POST['gedung']));
    mysqli_query($con, "UPDATE tb_poliklinik SET nama_poli = '$nama', gedung = '$gedung'  WHERE id_poli = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>