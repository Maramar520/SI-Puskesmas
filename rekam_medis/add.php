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
                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die (mysqli_error($con));
                            while ( $data_obat = mysqli_fetch_array($sql_obat)){
                                echo '<option value="'.$data_obat['id_obat'].'">'.$data_obat['nama_obat'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ku">KU</label>
                        <input type="text" name="ku" id="ku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="td">TD</label>
                        <input type="text" name="td" id="td" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="n">N</label>
                        <input type="text" name="n" id="n" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tb">TB</label>
                        <input type="text" name="tb" id="tb" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="rr">RR</label>
                        <input type="text" name="rr" id="rr" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="suhu">Suhu</label>
                        <input type="text" name="suhu" id="suhu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="vas">VAS</label>
                        <input type="text" name="vas" id="vas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bb">BB</label>
                        <input type="text" name="bb" id="bb" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala">Kepala</label>
                        <input type="text" name="kepala" id="kepala" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="dada">Dada</label>
                        <input type="text" name="dada" id="dada" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jantung">Jantung</label>
                        <input type="text" name="jantung" id="jantung" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="paru">Paru</label>
                        <input type="text" name="paru" id="paru" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="perut">Perut</label>
                        <input type="text" name="perut" id="perut" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <input type="text" name="kelamin" id="kelamin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="anggota_gerak">Anggota Gerak</label>
                        <input type="text" name="anggota_gerak" id="anggota_gerak" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis_icd">(Diagnosis ICD 10)</label>
                        <input type="text" name="diagnosis_icd" id="diagnosis_icd" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program</label>
                        <textarea name="program" id="program" class="form-control" required></textarea>
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
                    CKEDITOR.replace( 'program', {
                        uiColor: "#ec971f"
                    });
                    
                </script>
            </div>
        </div>
    </div>

    <?php include_once('../_footer.php'); ?>