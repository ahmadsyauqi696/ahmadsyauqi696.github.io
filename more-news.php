<?php
include 'config.php';
include 'navbar-news.php';

$id = $_GET['id'] ?? 0;
$result = $conn->query("SELECT * FROM news WHERE id = $id");
$news = $result->fetch_assoc();
?>

<div class="news-wrapper">
  <div class="news-box">

    <!-- TITLE -->
    <h1 class="news-title"><?= htmlspecialchars($news['title']) ?></h1>

    <!-- HEADER SECTION -->
    <div class="news-header">

      <img src="<?= htmlspecialchars($news['image']) ?>" class="news-image" alt="News Image">

      <div class="news-meta">
        <span class="meta-author">
          <i class="fa-solid fa-user-pen"></i> <?= $news['author'] ?>
        </span>


        <span class="meta-date">
          <i class="fa-regular fa-calendar"></i>
          <?= date("d M Y", strtotime($news['created_at'])) ?>
        </span>
      </div>

    </div>

    <!-- CONTENT -->
    <div class="news-content">
      <?= nl2br($news['content']) ?>
    </div>

    <div class="text-center mt-4">
      <a href="news.php" class="btn btn-secondary btn-back">Back</a>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>