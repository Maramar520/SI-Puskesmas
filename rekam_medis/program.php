<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Catatan Medis</h1>
        <h4>
            <small>Program</small>
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
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_pasien']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program</label>
                        <textarea name="program" id="program" class="form-control" required><?=$data['program']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <textarea name="obat" id="obat" class="form-control" ><?=$data_obat['nama_obat']?></textarea>
                    </div>
                </form>
                <script>
                    CKEDITOR.replace( 'program', {
                        uiColor: "#ec971f"
                    });
                    
                </script>
            </div>
        </div>
    </div>

    <?php include_once('../_footer.php'); ?>