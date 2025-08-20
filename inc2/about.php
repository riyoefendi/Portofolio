<?php
$queryAbouts = mysqli_query($koneksi, "SELECT * FROM about WHERE is_active ORDER BY id DESC");
$rowAbouts = mysqli_fetch_all($queryAbouts, MYSQLI_ASSOC);
?>
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <?php foreach ($rowAbouts as $key => $rowAbout): ?>
      <h2><?php echo $rowAbout['title']; ?></h2>
      <p><?php echo $rowAbout['content']; ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4">
        <img src="admin/uploads/<?php echo $rowAbout['image']; ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 content">
        <h2>UI/UX Designer &amp; Web Developer.</h2>
        <p class="fst-italic py-3">
          <?php echo $rowAbout['content']; ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $rowAbout['birthday']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $rowAbout['website']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $rowAbout['phone']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $rowAbout['city']; ?></span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $rowAbout['age']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $rowAbout['degree']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $rowAbout['email']; ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $rowAbout['phone']; ?></span></li>
            </ul>
          </div>
        </div>
        <p class="py-3">
          <?php echo $rowAbout['content']; ?>
        </p>
      </div>
    </div>
  <?php endforeach ?>
  </div>

</section>
<!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->

<!-- Skills Section -->
<section id="skills" class="skills section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Skills</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row skills-content skills-animation">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

    </div>

  </div>

</section><!-- /Skills Section -->