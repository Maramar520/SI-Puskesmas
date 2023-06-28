<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Catatan Medis</h1>
        <h4>
            <small>Pemeriksaan</small>
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
                <?php
                $sql_obat1 = mysqli_query($con, "SELECT * FROM tb_rm_obat1 JOIN tb_obat1 ON tb_rm_obat1.id_obat1 = tb_obat1.id_obat1 WHERE id_rm1 = '$data[id_rm1]'") or die (mysqli_error($con));
                $data_obat1 = mysqli_fetch_array($sql_obat1);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="identitas">NIK</label>
                        <input type="hidden" name="id" value="<?=$data['id_rm1']?>">
                        <input type="number" name="identitas" id="identitas" class="form-control" value="<?=$data['nomor_identitas']?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" class="form-control" required><?=$data['keluhan']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tensi">Tensi</label>
                        <input type="text" name="tensi" id="tensi" class="form-control" value="<?=$data['tensi']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bb">BB</label>
                        <input type="text" name="bb" id="bb" class="form-control" value="<?=$data['bb']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="uk">UK</label>
                        <input type="text" name="uk" id="uk" class="form-control" value="<?=$data['uk']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tfu">TFU</label>
                        <input type="text" name="tfu" id="tfu" class="form-control" value="<?=$data['tfu']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="letak">Letak</label>
                        <input type="text" name="letak" id="letak" class="form-control" value="<?=$data['letak']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="djj">DJJ</label>
                        <input type="text" name="djj" id="djj" class="form-control" value="<?=$data['djj']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lab">LAB</label>
                        <input type="text" name="lab" id="lab" class="form-control" value="<?=$data['lab']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="analisa">Analisa</label>
                        <input type="text" name="analisa" id="analisa" class="form-control" value="<?=$data['analisa']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="asuhan_kebidanan">Asuhan Kebidanan</label>
                        <textarea name="asuhan_kebidanan" id="asuhan_kebidanan" class="form-control" required><?=$data['asuhan_kebidanan']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <textarea name="obat" id="obat" class="form-control" required><?=$data_obat1['nama_obat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="petugas">Petugas</label>
                        <input type="text" name="petugas" id="petugas" class="form-control" value="<?=$data['petugas']?>" required>
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
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                    </div>
                </form>
                <script>
                    CKEDITOR.replace( 'keluhan', {
                        uiColor: "#ec971f"
                    });
                    
                </script>
            </div>
        </div>
    </div>

    <?php include_once('../_footer.php'); ?>