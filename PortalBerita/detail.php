<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT articles.*, categories.name AS category_name FROM articles JOIN categories ON articles.category_id = categories.id WHERE articles.id=$id");
$article = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?php echo $article['title']; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <style>
    .article-image {
      max-width: 100%;
      height: auto;
    }
    .article-video {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="my-4 text-center"><?php echo $article['title']; ?></h1>
    <p><?php echo $article['content']; ?></p>
    <?php if ($article['image']): ?>
      <img src="<?php echo $article['image']; ?>" class="article-image">
    <?php endif; ?>
    <?php if ($article['video']): ?>
      <video src="<?php echo $article['video']; ?>" class="article-video" controls></video>
    <?php endif; ?>
    <p><strong>Kategori:</strong> <?php echo $article['category_name']; ?></p>
    <a href="edit.php?id=<?php echo $article['id']; ?>" class="btn btn-warning">Edit</a>
    <form action="delete.php" method="post" style="display:inline;">
      <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>