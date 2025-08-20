<?php 
$queryResumes = mysqli_query($koneksi, "SELECT * FROM resume ORDER BY id DESC");
$rowResumes = mysqli_fetch_all($queryResumes, MYSQLI_ASSOC);
?>
<section id="resume" class="resume section">
<?php foreach ($rowResumes as $key => $rowResume): ?>
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p><?php echo $rowAbout['content']; ?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4><?php echo $rowResume['education']; ?></h4>
              <h5><?php echo $rowResume['tahun_education'] ?></h5>
              <p><em><?php echo $rowResume['prodi'] ?></em></p>
              <p><?php echo $rowResume['isi_prodi'] ?></p>
            </div><!-- Edn Resume Item -->
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4><?php echo $rowResume['pengalaman'] ?></h4>
              <h5><?php echo $rowResume['tahun_pengalaman'] ?></h5>
              <p><em><?php echo $rowResume['lokasi_kerja'] ?> </em></p>
              <p><?php echo $rowResume['jobdesk'] ?></p>
            </div><!-- Edn Resume Item -->
          </div>

        </div>

      </div>
<?php endforeach ?>
    </section>