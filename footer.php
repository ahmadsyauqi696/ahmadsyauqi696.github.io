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
<footer style="margin: 0;" class="footer-dark">
    <div class="text-center mt-3">
        <a class="footer-logo">Seavida</a>
        <p>Trusted marine service provider in Indonesia</p>
    </div>
    <div class="container">
        <div class="row">
            <!-- Logo & Sosial -->
            <div class="col-md-4 mb-4 text-center">
                <h5>Follow Us</h5>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/sea_vida"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:sea.vida6@gmail.com"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Kontak -->
            <div class="col-md-4 mb-4 text-center">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/product">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                </ul>
            </div>


            <!-- Jam (Rata kanan di desktop) -->
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