<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
    <?php foreach ($rowAbouts as $key => $rowAbout): ?>
        <img
            src="admin/uploads/<?php echo $rowAbout['image']; ?>"
            alt=""
            class="img-fluid rounded-circle" />
            <?php endforeach ?>
    </div>

    <a
        href="index.html"
        class="logo d-flex align-items-center justify-content-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Riyo Efendi</h1>
    </a>

    <div class="social-links text-center">
        <a href="https://www.instagram.com/jktinfo/" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.instagram.com/jktinfo/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/jktinfo/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.instagram.com/jktinfo/" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="https://www.instagram.com/jktinfo/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li>
                <a href="?page=hero"><i class="bi bi-house navicon"></i>Home</a>
            </li>
            <li>
                <a href="?page=about"><i class="bi bi-person navicon"></i> About</a>
            </li>
            <li>
                <a href="?page=skills"><i class="bi bi-file-earmark-text navicon"></i> Skills</a>
            </li>
            <li>
                <a href="?page=portofolio"><i class="bi bi-images navicon"></i> Portfolio</a>
            </li>
            <li>
                <a href="?page=contact"><i class="bi bi-envelope navicon"></i> Contact</a>
            </li>
        </ul>
    </nav>
</header>