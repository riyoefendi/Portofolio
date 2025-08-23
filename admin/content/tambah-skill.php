<?php

$id = isset($_GET['id']) ? $_GET['edit'] : '';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = mysqli_query($koneksi, "SELECT * FROM skill WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc(result: $query);

    $title = "Edit Skill";
} else {
    $title = "Tambah Skill";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($koneksi, "DELETE FROM skill WHERE id = '$id'");

    header("location:?page=skill&hapus=berhasil");
}

if (isset($_POST['simpan'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];
    $skill5 = $_POST['skill5'];
    $skill6 = $_POST['skill6'];
    
    
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
        $update = mysqli_query($koneksi, query: "UPDATE skill SET title = '$title', content = '$content', skill1 = '$skill1', skill2 = '$skill2', skill3 = '$skill3', skill4 = '$skill4', skill5 = '$skill5', skill6 = '$skill6' WHERE id = '$id'");
        if ($update) {
            header("location:?page=skill&ubah=berhasil");
        }
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO skill (title, content, skill1, skill2, skill3, skill4, skill5, skill6) VALUES ('$title', '$content', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill6')");
        if ($insert) {
            header("location:?page=skill&tambah=berhasil");
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
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title Anda" value="<?php echo ($id) ? $rowEdit['title'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea type="text" class="form-control" id="summernote" name="content" placeholder="Masukkan Content Anda"><?php echo ($id) ? $rowEdit['content'] : '' ?></textarea>
                            <!-- <small>- Isi Content jika ingin mengubah content</small> -->
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 1</label>
                            <input type="text" class="form-control" id="" name="skill1" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill1'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 2</label>
                            <input type="text" class="form-control" id="" name="skill2" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill2'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 3</label>
                            <input type="text" class="form-control" id="" name="skill3" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill3'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 4</label>
                            <input type="text" class="form-control" id="" name="skill4" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill4'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 5</label>
                            <input type="text" class="form-control" id="" name="skill5" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill5'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skill 6</label>
                            <input type="text" class="form-control" id="" name="skill6" placeholder="project Date" value="<?php echo ($id) ? $rowEdit['skill6'] : '' ?>" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                            <a href="?page=skill" class="btn btn-secondary" onclick="history.back()">
                                ← Kembali
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>