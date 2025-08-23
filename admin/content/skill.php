<?php
$query = mysqli_query($koneksi, "SELECT * FROM skill ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="pagetitle">
    <h1>Data Skill</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Data Skill</h5>
                    <div class="mb-3" align="right">
                        <a href="?page=tambah-skill" class="btn btn-sm btn-success">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Skill 1</th>
                                <th>Skill 2</th>
                                <th>Skill 3</th>
                                <th>Skill 4</th>
                                <th>Skill 5</th>
                                <th>Skill 6</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $key => $row): ?>
                                <tr>
                                    <td><?php echo $key += 1 ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td id="#summernote"><?php echo $row['content']; ?></td>
                                    <td><?php echo $row['skill1']; ?></td>
                                    <td><?php echo $row['skill2']; ?></td>
                                    <td><?php echo $row['skill3']; ?></td>
                                    <td><?php echo $row['skill4']; ?></td>
                                    <td><?php echo $row['skill5']; ?></td>
                                    <td><?php echo $row['skill6']; ?></td>
                                    <td>
                                        <a href="?page=tambah-skill&edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=tambah-skill&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
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