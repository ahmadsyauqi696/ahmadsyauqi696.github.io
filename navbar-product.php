<?php
// AUTO DETECT config
if (file_exists("config-local.php")) {
  include "config-local.php"; // dipake waktu di laptop
} else {
  include "config.php"; // dipake waktu di hosting
}
?>
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
  <script>
    document.getElementById("displayYear").textContent = new Date().getFullYear();
  </script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>


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
  <!--<link href="css/contoh.css" rel="stylesheet" /> -->
  <link href="css/product.css" rel="stylesheet" />

</head>

<body id="home">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/home"><img src="assets/img/logo-seavida-new.png" alt="..." /> Seavida</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/product">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Masthead-->
  <header class="masthead-product">
  <!-- Gambar background -->
  <div class="bg-image"></div>

</header>

</body>

</html>