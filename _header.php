<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='" .base_url('auth/login.php'). "';</script>";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIMPUS</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('_assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('_assets/css/simple-sidebar.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('_assets/libs/DataTables/datatables.min.css'); ?>" rel="stylesheet">
    <link rel="icon" href="<?= base_url('_assets/hospital.png') ?>">
</head>
<body>
    <script src="<?= base_url('_assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('_assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('_assets/libs/DataTables/datatables.min.js') ?>"></script>
    <script src="<?= base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js') ?>"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Puskesmas Pembantu</b></span></a>
                </li>
                <li>
                    <a href="<?= base_url('beranda')?>">Beranda</a>
                </li>
                <li>
                    <a href="<?= base_url('pasien/data.php')?>">Data Pasien</a>
                </li>
                <li>
                    <a href="<?= base_url('perawat/data.php')?>">Data Perawat</a>
                </li>
                <li>
                    <a href="<?= base_url('poliklinik/data.php')?>">Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?= base_url('obat/data.php')?>">Data Obat</a>
                </li>
                <li>
                    <a href="<?= base_url('obat1/data.php')?>">Data Obat Ibu Hamil</a>
                </li>
                <li>
                    <a href="<?= base_url('rekam_medis/data.php')?>">Rekam Medis</a>
                </li>
                <li>
                    <a href="<?= base_url('rekam_medis1/data.php')?>">Rekam Medis Ibu Hamil</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">

