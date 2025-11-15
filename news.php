<?php
// AUTO DETECT config
if (file_exists("config-local.php")) {
  include "config-local.php"; // dipake waktu di laptop
} else {
  include "config.php"; // dipake waktu di hosting
}
?>

<?php
include 'navbar-news.php';
?>

<section class="page-section bg-light" id="news">
  <div class="container text-center">

    <h2 class="section-heading text-uppercase mb-5">News</h2>

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

  </div>
</section>

<?php include 'footer.php'; ?>