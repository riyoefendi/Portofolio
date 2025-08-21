<!-- About Section -->
<section id="about" class="about section">
    <?php foreach ($rowAbouts as $key => $rowAbout): ?>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $rowAbout['title'] ?></h2>
            <p>
                <?php echo $rowAbout['content'] ?>
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img
                        src="admin/uploads/<?php echo $rowAbout['image']; ?>"
                        class="img-fluid"
                        alt="" />
                </div>
                <div class="col-lg-8 content">
                    <h2>UI/UX Designer &amp; Web Developer.</h2>
                    <p class="fst-italic py-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Birthday:</strong> <span><?php echo $rowAbout['birthday'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Website:</strong> <span><?php echo $rowAbout['website'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Phone:</strong> <span><?php echo $rowAbout['phone'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>City:</strong> <span><?php echo $rowAbout['city'] ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                    <span><?php echo $rowAbout['age'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Degree:</strong> <span><?php echo $rowAbout['degree'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Email:</strong> <span><?php echo $rowAbout['email'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Freelance:</strong> <span><?php echo $rowAbout['freelance'] ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                        <?php echo $rowAbout['content'] ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</section>
<!-- /About Section -->