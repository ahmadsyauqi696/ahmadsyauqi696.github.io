<?php
// AUTO DETECT config
if (file_exists("config-local.php")) {
    include "config-local.php"; // dipake waktu di laptop
} else {
    include "config.php"; // dipake waktu di hosting
}
?>
<?php include 'navbar-gallery.php'; ?>

<section class="page-section bg-light" id="gallery">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Gallery</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/galery1.jpg" alt="...">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/galery2.jpg" alt="...">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/gallery3.jpg" alt="...">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/gallery4.jpg" alt="...">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/galery5.jpg" alt="...">
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="gallery-item fade-in">
                    <img class="img-fluid" src="assets/img/product/galery6.jpg" alt="...">
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>