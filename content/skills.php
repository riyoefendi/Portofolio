<!-- Skills Section -->
<section id="skills" class="skills section light-background">
    
<?php foreach ($rowSkills as $key => $rowSkill): ?>
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $rowSkill['title'] ?></h2>
        <p><?php echo $rowSkill['content'] ?>
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill1'] ?></span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill2'] ?></span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="90"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill3'] ?></span> <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->
            </div>

            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill4'] ?></span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="80"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill5'] ?></span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="90"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span><?php echo $rowSkill['skill6'] ?></span> <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="55"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Skills Item -->
            </div>
        </div>
    </div>
    <?php endforeach ?>
</section>
<!-- /Skills Section -->