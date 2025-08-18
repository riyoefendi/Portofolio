<?php
$query = mysqli_query($koneksi, "SELECT * FROM resume ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="pagetitle">
    <h1>Data Resume</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Data Resume</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-resume" class="btn btn-sm btn-success">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Education</th>
                                <th>Tahun Sekolah</th>
                                <th>Program Studi</th>
                                <th>Ceritakan</th>
                                <th>Pengalaman</th>
                                <th>Tahun Pengalaman</th>
                                <th>Lokasi Kerja</th>
                                <th>Jobdesk</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>
                                <tr>
                                    <td><?php echo $key += 1 ?></td>
                                    <td><?php echo $row['education']; ?></td>
                                    <td><?php echo $row['tahun_education']; ?></td>
                                    <td><?php echo $row['prodi']; ?></td>
                                    <td><?php echo $row['isi_prodi']; ?></td>
                                    <td><?php echo $row['pengalaman']; ?></td>
                                    <td><?php echo $row['tahun_pengalaman']; ?></td>
                                    <td><?php echo $row['lokasi_kerja']; ?></td>
                                    <td><?php echo $row['birthday']; ?></td>
                                    <td id="#summernote"><?php echo $row['jobdesk']; ?></td>
                                    <td>
                                        <a href="?page=tambah-resume&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=tambah-resume&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>