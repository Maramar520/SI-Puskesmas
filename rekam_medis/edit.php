<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Edit Catatan Medis</h1>
        <h4>
            <small>Edit Data Pemeriksaan dan Program</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_rm = mysqli_query($con, "SELECT * FROM tb_rekammedis INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien INNER JOIN tb_perawat ON tb_rekammedis.id_perawat = tb_perawat.id_perawat INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli WHERE id_rm = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_rm);
                ?>
                <?php
                $sql_obat = mysqli_query($con, "SELECT * FROM tb_rm_obat JOIN tb_obat ON tb_rm_obat.id_obat = tb_obat.id_obat WHERE id_rm = '$data[id_rm]'") or die (mysqli_error($con));
                $data_obat = mysqli_fetch_array($sql_obat);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="identitas">NIK</label>
                        <input type="hidden" name="id" value="<?=$data['id_rm']?>">
                        <input type="number" name="identitas" id="identitas" class="form-control" value="<?=$data['nomor_identitas']?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" class="form-control" required><?=$data['keluhan']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ku">KU : .....</label>
                        <input type="text" name="ku" id="ku" class="form-control" value="<?=$data['ku']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="td">TD : ..... mm/Hg</label>
                        <input type="text" name="td" id="td" class="form-control" value="<?=$data['td']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="n">N : ..... per menit</label>
                        <input type="text" name="n" id="n" class="form-control" value="<?=$data['n']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tb">TB : ..... cm</label>
                        <input type="text" name="tb" id="tb" class="form-control" value="<?=$data['tb']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="rr">RR : ..... per menit</label>
                        <input type="text" name="rr" id="rr" class="form-control" value="<?=$data['rr']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="suhu">Suhu : ..... C</label>
                        <input type="text" name="suhu" id="suhu" class="form-control" value="<?=$data['suhu']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="vas">VAS : .....</label>
                        <input type="text" name="vas" id="vas" class="form-control" value="<?=$data['vas']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bb">BB : ..... kg</label>
                        <input type="text" name="bb" id="bb" class="form-control" value="<?=$data['bb']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala">Kepala</label>
                        <input type="text" name="kepala" id="kepala" class="form-control" value="<?=$data['kepala']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="dada">Dada</label>
                        <input type="text" name="dada" id="dada" class="form-control" value="<?=$data['dada']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jantung">Jantung</label>
                        <input type="text" name="jantung" id="jantung" class="form-control" value="<?=$data['jantung']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="paru">Paru</label>
                        <input type="text" name="paru" id="paru" class="form-control" value="<?=$data['paru']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="perut">Perut</label>
                        <input type="text" name="perut" id="perut" class="form-control" value="<?=$data['perut']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Kelamin</label>
                        <input type="text" name="kelamin" id="kelamin" class="form-control" value="<?=$data['kelamin']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="anggota_gerak">Anggota Gerak</label>
                        <input type="text" name="anggota_gerak" id="anggota_gerak" class="form-control" value="<?=$data['anggota_gerak']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis_icd">(Diagnosis ICD 10)</label>
                        <input type="text" name="diagnosis_icd" id="diagnosis_icd" class="form-control" value="<?=$data['diagnosis_icd']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program</label>
                        <textarea name="program" id="program" class="form-control" required><?=$data['program']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <textarea name="obat" id="obat" class="form-control" ><?=$data_obat['nama_obat']?></textarea>
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