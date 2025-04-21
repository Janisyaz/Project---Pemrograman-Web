<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM articles WHERE id=$id");
$article = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Artikel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="my-4 text-center">Edit Artikel</h1>
    <form action="update.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
      <div class="form-group">
        <label>Judul:</label>
        <input type="text" name="title" class="form-control" value="<?php echo $article['title']; ?>" required>
      </div>
      <div class="form-group">
        <label>Konten:</label>
        <textarea name="content" class="form-control" required><?php echo $article['content']; ?></textarea>
      </div>
      <div class="form-group">
        <label>Gambar:</label>
        <input type="file" name="image" class="form-control-file">
        <input type="hidden" name="currentImage" value="<?php echo $article['image']; ?>">
        <?php if ($article['image']): ?>
          <img src="<?php echo $article['image']; ?>" width="100">
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label>Video:</label>
        <input type="file" name="video" class="form-control-file">
        <input type="hidden" name="currentVideo" value="<?php echo $article['video']; ?>">
        <?php if ($article['video']): ?>
          <video src="<?php echo $article['video']; ?>" width="100" controls></video>
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label>Kategori:</label>
        <select name="category_id" class="form-control">
          <?php
          $result = $conn->query("SELECT * FROM categories");
          while ($row = $result->fetch_assoc()) {
            $selected = $row['id'] == $article['category_id'] ? 'selected' : '';
            echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
          }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>