<?php
$id = isset($_GET['edit']) ? $_GET['edit'] : '';

if (!empty($id)) {
    $query = mysqli_query($koneksi, "SELECT * FROM resume WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);
    $title = "Edit Resume";
} else {
    $title = "Tambah Resume";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($koneksi, "DELETE FROM resume WHERE id = '$id'");
    header("location:?page=resume&hapus=berhasil");
    exit;
}

if (isset($_POST['simpan'])) {
    $education = $_POST['education'];
    $tahun_education = $_POST['tahun_education'];
    $prodi = $_POST['prodi'];
    $isi_prodi = $_POST['isi_prodi'];
    $pengalaman = $_POST['pengalaman'];
    $tahun_pengalaman = $_POST['tahun_pengalaman'];
    $lokasi_kerja = $_POST['lokasi_kerja'];
    $jobdesk = $_POST['jobdesk'];

    if (!empty($id)) {
        // Query Update
        $update = mysqli_query($koneksi, "
            UPDATE resume 
            SET education = '$education',
                tahun_education = '$tahun_education',
                prodi = '$prodi',
                isi_prodi = '$isi_prodi',
                pengalaman = '$pengalaman',
                tahun_pengalaman = '$tahun_pengalaman',
                lokasi_kerja = '$lokasi_kerja',
                jobdesk = '$jobdesk'
            WHERE id = '$id'
        ");
        if ($update) {
            header("location:?page=resume&ubah=berhasil");
            exit;
        }
    } else {
        // Query Insert
        $insert = mysqli_query($koneksi, "
            INSERT INTO resume 
            (education, tahun_education, prodi, isi_prodi, pengalaman, tahun_pengalaman, lokasi_kerja, jobdesk) 
            VALUES 
            ('$education', '$tahun_education', '$prodi', '$isi_prodi', '$pengalaman', '$tahun_pengalaman', '$lokasi_kerja', '$jobdesk')
        ");
        if ($insert) {
            header("location:?page=resume&tambah=berhasil");
            exit;
        }
    }
}
?>

<div class="pagetitle">
    <h1><?php echo $title; ?></h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="education" class="form-label">Sekolah</label>
                            <input type="text" class="form-control" id="education" name="education"
                                placeholder="Masukkan sekolah Anda"
                                value="<?php echo (!empty($id)) ? $rowEdit['education'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_education" class="form-label">Tahun Sekolah</label>
                            <input type="text" class="form-control" id="tahun_education" name="tahun_education"
                                placeholder="Dari tahun berapa anda sekolah ?"
                                value="<?php echo (!empty($id)) ? $rowEdit['tahun_education'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi"
                                placeholder="Masukkan Program Studi Anda"
                                value="<?php echo (!empty($id)) ? $rowEdit['prodi'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="isi_prodi" class="form-label">Ceritakan Sekolah/kuliah anda</label>
                            <input type="text" class="form-control" id="isi_prodi" name="isi_prodi"
                                placeholder="Ceritakan Sekolah/kuliah anda"
                                value="<?php echo (!empty($id)) ? $rowEdit['isi_prodi'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="pengalaman" class="form-label">Pengalaman kerja Anda</label>
                            <input type="text" class="form-control" id="pengalaman" name="pengalaman"
                                placeholder="Masukkan Pengalaman kerja Anda"
                                value="<?php echo (!empty($id)) ? $rowEdit['pengalaman'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_pengalaman" class="form-label">Tahun berapa anda bekerja ?</label>
                            <input type="text" class="form-control" id="tahun_pengalaman" name="tahun_pengalaman"
                                placeholder="Tahun berapa anda bekerja ?"
                                value="<?php echo (!empty($id)) ? $rowEdit['tahun_pengalaman'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi_kerja" class="form-label">Lokasi Kerja</label>
                            <input type="text" class="form-control" id="lokasi_kerja" name="lokasi_kerja"
                                placeholder="Di kota mana anda bekerja"
                                value="<?php echo (!empty($id)) ? $rowEdit['lokasi_kerja'] : '' ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="summernote" class="form-label">Jobdesk Anda</label>
                            <textarea class="form-control" id="summernote" name="jobdesk" rows="6" required>
                                <?php echo (!empty($id)) ? htmlspecialchars($rowEdit['jobdesk']) : ''; ?>
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            <a href="?page=resume" class="btn btn-secondary">← Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>