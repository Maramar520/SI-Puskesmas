<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Pasien</h1>
        <h4>
            <small>Edit Data Pasien</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                $id = @$_GET['id'];
                $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($sql_pasien);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="identitas">NIK</label>
                        <input type="hidden" name="id" value="<?=$data['id_pasien']?>">
                        <input type="number" name="identitas" id="identitas" class="form-control" value="<?=$data['nomor_identitas']?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_pasien']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required><?=$data['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telepon</label>
                        <input type="number" name="telp" id="telp" class="form-control" value="<?=$data['no_telp']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" name="umur" id="umur" class="form-control" value="<?=$data['umur']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="jk" id="jk" value="L" required <?=$data['jenis_kelamin'] == "L" ? "checked" : null?>> Laki-laki 
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jk" value="P" <?=$data['jenis_kelamin'] == "P" ? "checked" : null?>> Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kk">Nama KK</label>
                        <input type="text" name="kk" id="kk" class="form-control" value="<?=$data['kk']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cara_bayar">Cara Bayar : Bayar/BPJS PBI/BPJS NON PBI (Mandiri)/BPJS ASKES/UKS/UKS RA/UKS MI</label>
                        <input type="text" name="cara_bayar" id="cara_bayar" class="form-control" value="<?=$data['cara_bayar']?>"" required>
                    </div>
                    <div class="form-group">
                        <label for="no_bpjs">No. BPJS</label>
                        <input type="text" name="no_bpjs" id="no_bpjs" class="form-control" value="<?=$data['no_bpjs']?>"" required>
                    </div>
                    <div class="form-group">
                        <label for="diagnosis">Diagnosis</label>
                        <input type="text" name="diagnosis" id="diagnosis" class="form-control" value="<?=$data['diagnosis']?>"" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once('../_footer.php'); ?>