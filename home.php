<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Seavida</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/img/logo-seavida-new.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Footer Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/cleaned_styles.css" rel="stylesheet" />
    <link href="css/wave-section.css" rel="stylesheet" />
    <link href="css/contoh.css" rel="stylesheet" />

</head>

<body id="home">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="home.php"><img src="assets/img/logo-seavida-new.png" alt="..." /> Seavida</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Masthead-->
    <header class="masthead">
        <!-- Video background -->
        <video autoplay muted loop playsinline class="bg-video">
            <source src="assets/video/laut.mp4" type="video/mp4">
        </video>

        <!-- Konten Teks -->
        <div class="container text-center">
            <div class="masthead-subheading">Welcome To</div>
            <div class="masthead-heading text-uppercase">Seavida</div>
            <!--<p>
                Seavida is a seafood export brand from PT. Aeleen Hensu Indonesia, which focuses on the international trade of Indonesian marine commodities.
            </p>-->
        </div>
    </header>

    <div class="custom-wave top-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
            <path fill="#219ebc" fill-opacity="1"
                d="M0,64L48,85.3C96,107,192,149,288,149.3C384,149,480,107,576,85.3C672,64,768,64,864,80C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <style>
            .custom-wave {
                position: relative;
                z-index: 1;
                overflow: hidden;
                /* mencegah wave tembus ke atas */
            }

            .custom-wave svg {
                display: block;
                width: 100%;
            }
        </style>
    </div>


    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">about us</h2>
            </div>
            <div class="col-md-6 offset-md-3 justify-content-center text-center fs-5">
                Seavida is a seafood export brand from PT. Aeleen Hensu Indonesia that focuses on the international
                trade of Indonesian marine commodities. We establish direct partnerships with seaweed farmers and
                fishermen in various coastal areas, ensuring the best quality for every product we export
            </div>
        </div>
        <hr style="
  border: none;
  height: 6px;
  background-color: #219ebc;
  width: 60%;
  margin: 20px auto;
  position: relative;
  z-index: 99999 !important;
  opacity: 1 !important;
  display: block !important;
">
        </div>
    </section>


    <!-- what we do-->
    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">What We Do</h2>
                <h3 class="section-subheading text-muted">Bringing Indonesia's Marine Potentials to the World Market
                </h3>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 justify-content-center text-center fs-5">Seavida is the global brand of
                    PT. Aeleen Hensu Indonesia, dedicated to delivering high-quality Indonesian marine products to the
                    international market. We work directly with seaweed farmers and coastal fishing communities across
                    the archipelago to ensure exceptional product quality, long-term sustainability, and full supply
                    chain transparency. Through a community-driven approach and strict export standards, Seavida serves
                    as a bridge connecting Indonesia’s rich marine potential with global demand
                </div>
            </div>
    </section>

    <!-- Wave Section -->
    <section class="wave-section">
        <div class="container">

            <!-- Blok 1 -->
            <div class="wave-block">
                <div class="wave-image">
                    <img src="assets/img/product/Penanaman1.png" alt="Seaweed production">
                </div>
                <div class="wave-text">
                    <h2>PLANTING PROCESS</h2>
                    <span class="underline"></span>
                    <p>
                        A local Seavida farmer is planting seaweed naturally in the coastal waters of Indonesia. This process follows sustainable practices that protect marine ecosystems and ensure high-quality harvests. Seavida is committed to delivering responsible and trustworthy products to the global market
                    </p>
                </div>
            </div>

            <!-- Blok 2 -->
            <div class="wave-block reverse">
                <div class="wave-image">
                    <img src="assets/img/product/Pengeringan1.png" alt="Seaweed solution">
                </div>
                <div class="wave-text">
                    <h2>DRYING PROCESS</h2>
                    <span class="underline"></span>
                    <p>
                        Local seaweed farmers are carefully drying freshly harvested seaweed under the sun. This process ensures natural quality preservation without chemicals, reflecting Seavida’s commitment to sustainability and eco-friendly production
                    </p>
                </div>
            </div>

            <!-- Blok 3 -->
            <div class="wave-block">
                <div class="wave-image">
                    <img src="assets/img/product/Packing1.png" alt="Seaweed production">
                </div>
                <div class="wave-text">
                    <h2>PACKING</h2>
                    <span class="underline"></span>
                    <p>
                        Every batch of Seavida seaweed is processed and packed to premium export standards. We use high-quality industrial sacks with an inner food-grade plastic liner to maintain the freshness, cleanliness, and superior quality of our seaweed, ensuring it reaches buyers in perfect condition. This packaging also supports long-distance transportation without compromising product quality
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!-- Latest News -->
    <section class="page-section bg-light" id="news">
        <div class="container text-center">
            <h2 class="section-heading text-uppercase mb-5">Lates News</h2>
            <div class="row">
                <?php
                $result = $conn->query("SELECT * FROM news ORDER BY created_at DESC LIMIT 3");
                while ($row = $result->fetch_assoc()):
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">

                            <img src="<?= htmlspecialchars($row['image']) ?>" class="card-img-top" alt="News Image">

                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>

                                <p class="card-text">
                                    <?= substr(strip_tags($row['content']), 0, 100) ?>...
                                </p>

                                <a href="more-news.php?id=<?= $row['id'] ?>" class="btn btn-primary">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <a href="news.php" class="btn btn-primary">More News</a>
        </div>
    </section>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">

            <div class="row align-items-stretch mb-5">
                <!-- Kolom KIRI: Info Kontak -->
                <div class="col-md-6">
                    <h2 class="section-heading">Contact Us</h2>
                    <!--<p class="section-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem,
                        mollitia...</p>-->

                    <div class="info section-heading">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Asrama Polri ex Brimob Cilincing 14120, Jakarta
                            Utara, DKI Jakarta, INDONESIA</p>
                        <p><i class="fab fa-whatsapp"></i> +6281929481169</p>
                        <p><i class="fas fa-phone"></i> +6281929481169</p>
                        <p><i class="fas fa-envelope"></i> sea.vida6@gmail.com</p>
                        <div class="social-icons mt-4">
                            <style>
                                .social-icons a {
                                    font-size: 1.5rem;
                                    margin-right: 10px;
                                    color: white;
                                    transition: all 0.3s ease;
                                }

                                .social-icons a:hover {
                                    color: #f39c12;
                                    transform: scale(1.2);
                                }
                            </style>

                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/sea_vida"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <p></p>
                    <p></p>
                </div>

                <!-- Kolom KANAN: Form -->
                <div class="col-md-6">
                    <!-- Alert -->
                    <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                        <strong>Thank you!</strong> We have received your message
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form name="Seavida-Contact-Form">
                        <!-- Full Name -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder=" " name="nama">
                            <label for="name">Full name</label>
                        </div>

                        <!-- Email -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder=" " name="email">
                            <label for="email">Email address</label>
                        </div>

                        <!-- Phone -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder=" " name="hp">
                            <label for="phone">Phone number</label>
                        </div>

                        <!-- Message -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" placeholder=" " style="height: 10rem" name="pesan"></textarea>
                            <label for="message">Message</label>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning btn-kirim">Send Message</button>
                            <button class="btn btn-warning btn-loading d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                <span role="status">Loading...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer-dark">
        <div class="text-center mt-3">
            <a class="footer-logo">Seavida</a>
            <p>Trusted marine service provider in Indonesia</p>
        </div>
        <div class="container">
            <div class="row">
                <!-- Sosial -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Follow Us</h5>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/sea_vida"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:sea.vida6@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="news.php">News</a></li>
                    </ul>
                </div>

                <!-- Opening Hours -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Opening Hours</h5>
                    <p>Everyday</p>
                    <p>10.00 - 22.00 WIB</p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom mt-4">
                &copy; <span id="displayYear"></span> Seavida. All rights reserved. Powered by
                <a href="https://seavida.id/" target="_blank">Seavida</a>
            </div>
        </div>
    </footer>



    <!-- Tahun Otomatis -->
    <script>
        document.getElementById("displayYear").textContent = new Date().getFullYear();
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


    <!--Script Goggle Sheets-->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbw8rOQHfeGe7wUDZ6-L-gLyoFtFlxtGtZrYEdiJqZr_C4Uya545xrJPfIUoC3P2VgMe/exec'
        const form = document.forms['Seavida-Contact-Form'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault();
            // ketika tombol submit diklik
            // tampilkan tombol loading, hilangkan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    //  tampilkan tombol kirim, hilangkan tombol loading
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    //  tampilkan alert
                    myAlert.classList.toggle('d-none');
                    //  reset form nya
                    form.reset();
                    console.log('Success!', response);
                })
                .catch(error => console.error('Error!', error.message));
        });
    </script>

</body>


<style>
    .dropup-container {
        position: fixed;
        bottom: 30px;
        right: 20px;
        z-index: 999;
        display: flex;
        flex-direction: column-reverse;
        align-items: flex-end;
        gap: 10px;
    }

    .social-icon {
        width: 42px;
        height: 42px;
        background-color: #1f1f1f;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-decoration: none;
        font-size: 18px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        transition: background 0.3s, transform 0.3s;
    }

    .social-icon:hover {
        background-color: #333;
        transform: scale(1.1);
    }

    .dropup-icons {
        display: none;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 10px;
    }

    .toggle-btn {
        background-color: #ffc800;
        border: none;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
        transition: background 0.3s;
    }

    .toggle-btn:hover {
        background-color: #ffc800;
    }
</style>

<div class="dropup-container">
    <!-- Dropup Icons -->
    <div class="dropup-icons" id="dropupIcons">
        <a href="https://instagram.com/sea_vida" class="social-icon" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://mail.google.com/mail/?view=cm&fc=1&to=sea.vida6@gmail.com" class="social-icon" target="_blank">
            <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.me/6281929481169" class="social-icon" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Toggle Button -->
    <button class="toggle-btn" onclick="toggleIcons()">
        <i class="fas fa-comment-dots"></i>
    </button>
</div>

<script>
    function toggleIcons() {
        const icons = document.getElementById("dropupIcons");
        icons.style.display = icons.style.display === "flex" ? "none" : "flex";
    }
</script>

</html>