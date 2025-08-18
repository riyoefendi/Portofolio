<?php

$id = isset($_GET['id']) ? $_GET['edit'] : '';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM resume WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc(result: $query);

    $title = "Edit Resume";
} else {
    $title = "Tambah Resume";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($koneksi, "DELETE FROM resume WHERE id = '$id'");

    header("location:?page=resume&hapus=berhasil");
}

if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $education = $_POST['education'];
    $tahun_education = $_POST['tahun_education'];
    $prodi = $_POST['prodi'];
    $isi_prodi = $_POST['isi_prodi'];
    $pengalaman = $_POST['pengalaman'];
    $tahun_pengalaman = $_POST['tahun_pengalaman'];
    $lokasi_kerja = $_POST['lokasi_kerja'];
    $jobdesk = $_POST['jobdesk'];

    // jika gambar terupload
    // if (!empty($_FILES['image']['name'])) {
    //     $image = $_FILES['image']['name'];
    //     $tmp_name = $_FILES['image']['tmp_name'];
        
    //     $type = mime_content_type($tmp_name);

    //     $ext_allowed = ["image/png", "image/jpg", "image/jpeg"];

    //     if (!in_array($type, $ext_allowed)) {
    //         echo "Extensi file tidak di izinkan";
    //         exit;
    //     }

    //     $path = "uploads/";
    //     if (!is_dir($path)) mkdir($path);

    //     $image_name = md5($image) . "." . pathinfo($image, PATHINFO_EXTENSION);
    //     $target_files = $path . $image_name;

    //     if (move_uploaded_file($tmp_name, $target_files)) {
    //         echo "Upload berhasil";
    //     } else {
    //         echo "Upload gagal";
    //     }
    // }

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, query: "UPDATE resume SET education = '$education', tahun_education = '$tahun_education', prodi = '$prodi', isi_prodi = '$isi_prodi', pengalaman = '$pengalaman', tahun_pengalaman = '$tahun_pengalaman', lokasi_kerja = '$lokasi_kerja', jobdesk = '$jobdesk' WHERE id = '$id'");
        if ($update) {
            header("location:?page=resume&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO resume (education, tahun_education, prodi,isi_prodi, pengalaman, tahun_pengalaman, lokasi_kerja, jobdesk) VALUES ('$education', '$tahun_education', '$prodi','$isi_prodi','$pengalaman', '$tahun_pengalaman', '$lokasi_kerja', '$jobdesk')");
        if ($insert) {
            header("location:?page=resume&tambah=berhasil");
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
                    <h5 class="card-title "><?php echo $title; ?></h5>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="title" class="form-label">Sekolah</label>
                            <input type="text" class="form-control" id="education" name="education" placeholder="Masukkan sekolah Anda" value="<?php echo ($id) ? $rowEdit['education'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Tahun Sekolah</label>
                            <input type="text" class="form-control" name="tahun_education" placeholder="Dari tahun berapa anda sekolah ?"><?php echo ($id) ? $rowEdit['tahun_education'] : '' ?></input>
                            <!-- <small>- Isi Content jika ingin mengubah content</small> -->
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="" name="prodi" placeholder="Masukkan Program Studi Anda" value="<?php echo ($id) ? $rowEdit['prodi'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Ceritakan Sekolah/kuliah anda</label>
                            <input type="text" class="form-control" id="isi_prodi" name="isi_prodi" placeholder="Ceritakan Sekolah/kuliah anda" value="<?php echo ($id) ? $rowEdit['isi_prodi'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Pengalaman kerja Anda</label>
                            <input type="text" class="form-control" id="pengalaman" name="pengalaman" placeholder="Masukkan Pengalaman kerja Anda" value="<?php echo ($id) ? $rowEdit['pengalaman'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Tahun berapa anda bekerja ?</label>
                            <input type="text" class="form-control" id="tahun_pengalaman" name="tahun_pengalaman" placeholder="Tahun berapa anda bekerja ?" value="<?php echo ($id) ? $rowEdit['tahun_pengalaman'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Lokasi Kerja</label>
                            <input type="text" class="form-control" id="" name="lokasi_kerja" placeholder="Di kota mana anda bekerja" value="<?php echo ($id) ? $rowEdit['lokasi_kerja'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jobdesk Anda</label>
                            <input type="jobdesk" class="form-control" id="summernote" name="jobdesk" placeholder="Jobdesk pekerjaan anda" value="<?php echo ($id) ? $rowEdit['jobdesk'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            <a href="?page=resume" class="btn btn-secondary" onclick="history.back()">
                                ← Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>