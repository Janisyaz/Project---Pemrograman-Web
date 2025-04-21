<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buat Artikel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="my-4 text-center">Buat Artikel Baru</h1>
    <form action="store.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Judul:</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Konten:</label>
        <textarea name="content" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label>Gambar:</label>
        <input type="file" name="image" class="form-control-file">
      </div>
      <div class="form-group">
        <label>Video:</label>
        <input type="file" name="video" class="form-control-file">
      </div>
      <div class="form-group">
        <label>Kategori:</label>
        <select name="category_id" class="form-control">
          <?php
          $result = $conn->query("SELECT * FROM categories");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
          }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>