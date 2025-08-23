<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
<?php foreach ($rowAbouts as $key => $rowAbout): ?>
    <img src="admin/uploads/<?php echo $rowAbout['image']; ?>" width="100px" height="50px" data-aos="fade-in" class="" />
    <?php endforeach ?>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Riyo Efendi</h2>
        <p>
            I'm
            <span
                class="typed"
                data-typed-items="Developer, Freelancer, Pengusaha, Investor">Developer</span><span
                class="typed-cursor typed-cursor--blink"
                aria-hidden="true"></span><span
                class="typed-cursor typed-cursor--blink"
                aria-hidden="true"></span>
        </p>
    </div>
</section>
<!-- /Hero Section -->