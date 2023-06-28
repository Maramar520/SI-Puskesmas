<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Catatan Medis</h1>
        <h4>
            <small>Anamnese</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_rm = mysqli_query($con, "SELECT * FROM tb_rekammedis1 INNER JOIN tb_pasien ON tb_rekammedis1.id_pasien = tb_pasien.id_pasien INNER JOIN tb_perawat ON tb_rekammedis1.id_perawat = tb_perawat.id_perawat INNER JOIN tb_poliklinik ON tb_rekammedis1.id_poli = tb_poliklinik.id_poli WHERE id_rm1 = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_rm);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="identitas">NIK</label>
                        <input type="hidden" name="id" value="<?=$data['id_rm1']?>">
                        <input type="number" name="identitas" id="identitas" class="form-control" value="<?=$data['nomor_identitas']?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_pasien']?>" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="hpht">HPHT
                                <input type="text" name="hpht" id="hpht" class="form-control" value="<?=$data['hpht']?>" required>
                            </label>
                            <label for="pl">PL
                                <input type="text" name="pl" id="pl" class="form-control" value="<?=$data['pl']?>" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="riwayat_obsteri">Riwayat Obsteri
                                <input type="text" name="riwayat_obsteri" id="riwayat_obsteri" class="form-control" value="<?=$data['riwayat_obsteri']?>" required>
                            </label>
                            <label for="jumlah_anak_hidup">Jumlah Anak Hidup
                                <input type="text" name="jumlah_anak_hidup" id="jumlah_anak_hidup" class="form-control" value="<?=$data['jumlah_anak_hidup']?>" required>
                            </label>
                            <label for="jumlah_lahir_mati">Jumlah Lahir Mati
                                <input type="text" name="jumlah_lahir_mati" id="jumlah_lahir_mati" class="form-control" value="<?=$data['jumlah_lahir_mati']?>" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Riwayat Persalinan yang lalu :</label>
                        <div>
                            <label for="penolong_terakhir">Penolong terakhir
                                <input type="text" name="penolong_terakhir" id="penolong_terakhir" class="form-control" value="<?=$data['penolong_terakhir']?>" required>
                            </label>
                            <label for="cara">Cara
                                <input type="text" name="cara" id="cara" class="form-control" value="<?=$data['cara']?>" required>
                            </label>
                            <label for="komplikasi_riwayat_kb">Komplikasi Riwayat KB
                                <input type="text" name="komplikasi_riwayat_kb" id="komplikasi_riwayat_kb" class="form-control" value="<?=$data['komplikasi_riwayat_kb']?>" required>
                            </label>
                        </div>
                    </div>
                    <div><label>Riwayat Kesehatan Ibu :</label></div>
                    <div class="form-group">
                        <label for="penyakit_penyerta">Penyakit Penyerta</label>
                        <input type="text" name="penyakit_penyerta" id="penyakit_penyerta" class="form-control" value="<?=$data['penyakit_penyerta']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penyakit_klg">Penyakit Klg</label>
                        <input type="text" name="penyakit_klg" id="penyakit_klg" class="form-control" value="<?=$data['penyakit_klg']?>" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="tb">TB
                                <input type="text" name="tb" id="tb" class="form-control" value="<?=$data['tb']?>" required>
                            </label>
                            <label for="lila">Lila
                                <input type="text" name="lila" id="lila" class="form-control" value="<?=$data['lila']?>" required>
                            </label>
                            <label for="status">Status
                                <input type="text" name="status" id="status" class="form-control" value="<?=$data['status']?>" required>
                            </label>
                            <label for="imunisasi_td">IMUNISASI TD
                                <input type="text" name="imunisasi_td" id="imunisasi_td" class="form-control" value="<?=$data['imunisasi_td']?>" required>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once('../_footer.php'); ?>