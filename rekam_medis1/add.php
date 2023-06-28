<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Rekam Medis</h1>
        <h4>
            <small>Tambah Rekam Medis</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php
                            $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
                            while ( $data_pasien = mysqli_fetch_array($sql_pasien)){
                                echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="perawat">Perawat</label>
                        <select name="perawat" id="perawat" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php
                            $sql_perawat = mysqli_query($con, "SELECT * FROM tb_perawat") or die (mysqli_error($con));
                            while ( $data_perawat = mysqli_fetch_array($sql_perawat)){
                                echo '<option value="'.$data_perawat['id_perawat'].'">'.$data_perawat['nama_perawat'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="poli">Poliklinik</label>
                        <select name="poli" id="poli" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php
                            $sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die (mysqli_error($con));
                            while ( $data_poli = mysqli_fetch_array($sql_poli)){
                                echo '<option value="'.$data_poli['id_poli'].'">'.$data_poli['nama_poli'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <select multiple name="obat[]" id="obat" class="form-control" size="7" required>
                            <?php
                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat1") or die (mysqli_error($con));
                            while ( $data_obat = mysqli_fetch_array($sql_obat)){
                                echo '<option value="'.$data_obat['id_obat1'].'">'.$data_obat['nama_obat'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tensi">Tensi</label>
                        <input type="text" name="tensi" id="tensi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bb">BB</label>
                        <input type="text" name="bb" id="bb" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="uk">UK</label>
                        <input type="text" name="uk" id="uk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tfu">TFU</label>
                        <input type="text" name="tfu" id="tfu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="letak">Letak</label>
                        <input type="text" name="letak" id="letak" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="djj">DJJ</label>
                        <input type="text" name="djj" id="djj" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lab">LAB</label>
                        <input type="text" name="lab" id="lab" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="analisa">Analisa</label>
                        <input type="text" name="analisa" id="analisa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="asuhan_kebidanan">Asuhan Kebidanan</label>
                        <input type="text" name="asuhan_kebidanan" id="asuhan_kebidanan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="petugas">Petugas</label>
                        <input type="text" name="petugas" id="petugas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="hpht">HPHT
                                <input type="text" name="hpht" id="hpht" class="form-control" required>
                            </label>
                            <label for="pl">PL
                                <input type="text" name="pl" id="pl" class="form-control" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="riwayat_obsteri">Riwayat Obsteri
                                <input type="text" name="riwayat_obsteri" id="riwayat_obsteri" class="form-control" required>
                            </label>
                            <label for="jumlah_anak_hidup">Jumlah Anak Hidup
                                <input type="text" name="jumlah_anak_hidup" id="jumlah_anak_hidup" class="form-control" required>
                            </label>
                            <label for="jumlah_lahir_mati">Jumlah Lahir Mati
                                <input type="text" name="jumlah_lahir_mati" id="jumlah_lahir_mati" class="form-control" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Riwayat Persalinan yang lalu :</label>
                        <div>
                            <label for="penolong_terakhir">Penolong terakhir
                                <input type="text" name="penolong_terakhir" id="penolong_terakhir" class="form-control" required>
                            </label>
                            <label for="cara">Cara
                                <input type="text" name="cara" id="cara" class="form-control" required>
                            </label>
                            <label for="komplikasi_riwayat_kb">Komplikasi Riwayat KB
                                <input type="text" name="komplikasi_riwayat_kb" id="komplikasi_riwayat_kb" class="form-control" required>
                            </label>
                        </div>
                    </div>
                    <div><label>Riwayat Kesehatan Ibu :</label></div>
                    <div class="form-group">
                        <label for="penyakit_penyerta">Penyakit Penyerta</label>
                        <input type="text" name="penyakit_penyerta" id="penyakit_penyerta" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penyakit_klg">Penyakit Klg</label>
                        <input type="text" name="penyakit_klg" id="penyakit_klg" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="tb">TB
                                <input type="text" name="tb" id="tb" class="form-control" required>
                            </label>
                            <label for="lila">Lila
                                <input type="text" name="lila" id="lila" class="form-control" required>
                            </label>
                            <label for="status">Status
                                <input type="text" name="status" id="status" class="form-control" required>
                            </label>
                            <label for="imunisasi_td">IMUNISASI TD
                                <input type="text" name="imunisasi_td" id="imunisasi_td" class="form-control" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tanggal Periksa</label>
                        <input type="date" name="tgl" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset value="Reset" class="btn btn-default">
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