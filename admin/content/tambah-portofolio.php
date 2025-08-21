<?php

$id = isset($_GET['id']) ? $_GET['edit'] : '';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM portofolios WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc(result: $query);

    $title = "Edit portofolio";
} else {
    $title = "Tambah portofolio";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($koneksi, "DELETE FROM portofolios WHERE id = '$id'");

    header("location:?page=portofolio&hapus=berhasil");
}

if (isset($_POST['simpan'])) {
    $id_category = $_POST['id_category'];
    $id_category = (int)$id_category;

    $nama_project = $_POST['nama_project'];
    $link = $_POST['link'];
    $description = $_POST['description'];

    // jika gambar terupload
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $type = mime_content_type($tmp_name);

        $ext_allowed = ["image/png", "image/jpg", "image/jpeg"];

        if (!in_array($type, $ext_allowed)) {
            echo "Extensi file tidak diizinkan";
            exit;
        }

        $path = "uploads/";
        if (!is_dir($path)) mkdir($path);

        $image_name = md5($image) . "." . pathinfo($image, PATHINFO_EXTENSION);
        $target_files = $path . $image_name;

        if (move_uploaded_file($tmp_name, $target_files)) {
            echo "Upload berhasil";
        } else {
            echo "Upload gagal";
        }

        $update_query = "UPDATE portofolios 
                     SET id_category = $id_category, 
                         nama_project = '$nama_project', 
                         link = '$link', 
                         description = '$description',
                         image = '$image_name'
                     WHERE id = '$id'";
    } else {
        $update_query = "UPDATE portofolios 
                     SET id_category = $id_category, 
                         nama_project = '$nama_project', 
                         link = '$link', 
                         description = '$description'
                     WHERE id = '$id'";
    }

    if ($id) {
        // ini query update
        $update = mysqli_query($koneksi, $update_query);
        if ($update) {
            header("location:?page=portofolio&ubah=berhasil");
        }
    } else {
        $insert_query = "INSERT INTO portofolios (id_category, nama_project, link, description, image) 
                     VALUES ($id_category, '$nama_project', '$link', '$description', '$image_name')";
        $insert = mysqli_query($koneksi, $insert_query);
        if ($insert) {
            header("location:?page=portofolio&tambah=berhasil");
        }
    }
}

$queryCategories = mysqli_query($koneksi, "SELECT * FROM categories ORDER BY id DESC");
$rowCategories = mysqli_fetch_all($queryCategories, MYSQLI_ASSOC);

$queryPortofolios = mysqli_query($koneksi, "SELECT categories.name, portofolios.* FROM portofolios 
JOIN categories ON categories.id = portofolios.id_category 
ORDER BY portofolios.id DESC");
$rowPortofolios = mysqli_fetch_assoc($queryPortofolios);


?>

<div class="pagetitle">
    <h1><?php echo $title; ?></h1>
</div><!-- End Page Title -->

<section class="section">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title "><?php echo $title; ?></h5>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="id_category" id="id_category">
                                <?php foreach ($rowCategories as $key => $rowCategorie): ?>
                                    <option value="<?php echo $rowCategorie['id'] ?>"><?php echo $rowCategorie['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_project" class="form-label">Nama Project</label>
                            <input type="text" class="form-control" id="nama_project" name="nama_project" placeholder="Masukkan Judul Anda" value="<?php echo ($id) ? $rowEdit['nama_project'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link project</label>
                            <input type="url" class="form-control" id="link" name="link" placeholder="Client Name" value="<?php echo ($id) ? $rowEdit['link'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="summernote" name="description" placeholder="Masukkan Description Anda"><?php echo ($id) ? $rowEdit['description'] : '' ?></textarea>
                            <!-- <small>- Isi Content jika ingin mengubah content</small> -->
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <br>
                            <small class="text-danger">- Isi Image jika ingin mengubah image</small>
                            <br>
                            <small class="text-danger">- Gambar harus landscape dan berukuran 1920 x 1088</small>
                            <br>
                            <small class="text-danger">- Format yang diperbolehkan: PNG, JPG, JPEG, WEBP</small>
                            <input type="file" class="form-control mt-3 mb-3" id="image" name="image" placeholder="Masukkan Image Anda">
                            <img class="mt-2" src="uploads/<?php echo isset($rowEdit['image']) ? $rowEdit['image'] : '' ?>" alt="" width="100">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            <a href="?page=portofolio" class="btn btn-secondary" onclick="history.back()">
                                ← Kembali
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </form>
    </div>
</section>