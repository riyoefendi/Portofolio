<?php
$query = mysqli_query($koneksi, "SELECT categories.name, portofolios.* FROM portofolios 
JOIN categories ON categories.id = portofolios.id_category 
ORDER BY portofolios.id DESC");

$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);

$queryCategories = mysqli_query($koneksi, "SELECT * FROM categories ORDER BY id DESC");
$rowCategories = mysqli_fetch_all($queryCategories, MYSQLI_ASSOC);
?>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
    <?php foreach ($rowAbouts as $key => $rowAbout): ?>
    </php>
        <h2>Portfolio</h2>
        <p><?php echo $rowAbout['content'] ?></p>
        <?php endforeach ?>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order">
            <ul
                class="portfolio-filters isotope-filters"
                data-aos="fade-up"
                data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <?php foreach ($rowCategories as $rowCategori): ?>
                    <li data-filter=".filter-<?php echo $rowCategori['id'] ?>"><?php echo $rowCategori['name'] ?></li>
                <?php endforeach ?>
            </ul>
            <!-- End Portfolio Filters -->

            <div
                class="row gy-4 isotope-container"
                data-aos="fade-up"
                data-aos-delay="200">

                <?php foreach ($rows as $key => $row): ?>
                    <div
                        class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo $row['id_category'] ?>">
                        <div class="portfolio-content h-100">
                            <img
                                src="admin/uploads/<?php echo $row['image'] ?>"
                                class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4><?php echo $row['nama_project'] ?></h4>
                                <p><?php echo $row['description'] ?></p>
                                <a
                                    href="admin/uploads/<?php echo $row['image'] ?>"
                                    title="<?php echo $row['nama_project'] ?>"
                                    data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a
                                    href="<?php echo $row['link'] ?>"
                                    title="More Details"
                                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
        </div>
    </div>
</section>
<!-- /Portfolio Section -->