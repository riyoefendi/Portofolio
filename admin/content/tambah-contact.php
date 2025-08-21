<?php
$id = isset($_GET['edit']) ? $_GET['edit'] : '';

if ($id) {
    $query = mysqli_query($koneksi, "SELECT * FROM contact WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($query);
    $title = "Edit Contact";
} else {
    $title = "Tambah Contact";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($koneksi, "DELETE FROM contact WHERE id = '$id'");
    header("location:?page=contact&hapus=berhasil");
    exit;
}

if (isset($_POST['simpan'])) {
    $content = $_POST['content'];
    $lokasi  = $_POST['lokasi'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];

    if ($id) {
        // UPDATE
        $update = mysqli_query($koneksi, "UPDATE contact SET content = '$content', lokasi = '$lokasi', email = '$email', phone = '$phone' WHERE id = '$id'");
        if ($update) {
            header("location:?page=contact&ubah=berhasil");
            exit;
        }
    } else {
        // INSERT
        $insert = mysqli_query($koneksi, "INSERT INTO contact (content, lokasi, email, phone) VALUES ('$content','$lokasi','$email','$phone')");
        if ($insert) {
            header("location:?page=contact&tambah=berhasil");
            exit;
        }
    }
}
?>

<div class="pagetitle">
    <h1><?php echo $title; ?></h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title "><?php echo $title; ?></h5>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="summernote" name="content" placeholder="Masukkan Content Anda"><?php echo ($id) ? $rowEdit['content'] : '' ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Anda" value="<?php echo ($id) ? $rowEdit['lokasi'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Anda" value="<?php echo ($id) ? $rowEdit['email'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="Phone Anda" value="<?php echo ($id) ? $rowEdit['phone'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            <a href="?page=contact" class="btn btn-secondary">
                                ← Kembali
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>