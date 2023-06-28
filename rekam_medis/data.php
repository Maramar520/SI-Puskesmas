<?php include_once('../_header.php'); ?>
    <div class="box">
        <h1>Rekam Medis </h1>
        <h4>
            <small>Data Rekam Medis</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Rekam Medis</a>
            </div>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="rekammedis">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Periksa</th>
                        <th>Nama Pasien</th>
                        <th>Nama Perawat</th>
                        <th>Poliklinik</th>
                        <th>Pemeriksaan</th>
                        <th>Program</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM tb_rekammedis INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien INNER JOIN tb_perawat ON tb_rekammedis.id_perawat = tb_perawat.id_perawat INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli";
                    $sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
                    while ($data = mysqli_fetch_array($sql_rm)){ ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=tgl_indo($data['tgl_periksa'])?></td>
                            <td><?=$data['nama_pasien']?></td>
                            <td><?=$data['nama_perawat']?></td>
                            <td><?=$data['nama_poli']?></td>
                            <td align="center">
                                <a href="pemeriksaan.php?id=<?=$data['id_rm']?>" class="btn btn-success btn-xs"></i>Lihat</a>
                            </td>
                            <td align="center">
                                <a href="program.php?id=<?=$data['id_rm']?>" class="btn btn-success btn-xs"></i>Lihat</a>
                            </td>
                            <td align="center">
                                <a href="del.php?id=<?=$data['id_rm']?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?')"><i class="glyphicon glyphicon-trash"></i></a>
                                <a href="edit.php?id=<?=$data['id_rm']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript" >
        $(document).ready(function() {
            $('#rekammedis').DataTable({
                columnDefs: [
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 5
                    }
                ],
            });
        })
        </script>
    </div>
<?php include_once('../_footer.php'); ?>
