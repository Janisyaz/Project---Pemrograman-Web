<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Portal Berita</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <style>
    .article-image {
      max-width: 100px;
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
    <h1 class="my-4 text-center">Portal Berita</h1>
    <a href="create.php" class="btn btn-primary mb-3">Buat Artikel Baru</a>
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Judul</th>
          <th>Konten</th>
          <th>Gambar</th>
          <th>Video</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT articles.*, categories.name AS category_name FROM articles JOIN categories ON articles.category_id = categories.id");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><a href='detail.php?id={$row['id']}'>{$row['title']}</a></td>
                    <td>{$row['content']}</td>
                    <td><img src='{$row['image']}' class='article-image'></td>
                    <td><video src='{$row['video']}' class='article-video' controls></video></td>
                    <td>{$row['category_name']}</td>
                    <td>
                      <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                      <form action='delete.php' method='post' style='display:inline;'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                      </form>
                    </td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='6' class='text-center'>Tidak ada artikel</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>