<?php if (!empty($article['file_pdf'])): ?>
  <a class="pdf-link" href="Assets/pdf/<?= $article['file_pdf'] ?>" target="_blank">Lihat PDF</a>
<?php endif; ?>


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM articles WHERE id = $id");
    $article = mysqli_fetch_assoc($query);
} else {
    echo "Artikel tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $article['judul'] ?></title>
  <link rel="stylesheet" href="Assets/css/style.css">
  <style>
    body { font-family: sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
    .nav { background: maroon; padding: 20px; color: #fff; text-align: center; }
    .nav a { color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold; }
    .container { max-width: 800px; margin: auto; padding: 40px 20px; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-top: 30px; }
    h2 { color: maroon; }
    .pdf-link { display: inline-block; margin-top: 20px; padding: 10px 15px; background: maroon; color: white; text-decoration: none; border-radius: 5px; }
  </style>
</head>
<body>

<div class="nav">
  <a href="index.php">Home</a>
  <a href="articles.php">Articles</a>
  <a href="contact.php">Contact Me</a>
</div>

<div class="container">
  <h2><?= $article['judul'] ?></h2>
  <p><?= nl2br($article['isi']) ?></p>

  <?php if (!empty($article['file_pdf'])): ?>
    <a class="pdf-link" href="Assets/pdf/<?= $article['file_pdf'] ?>" target="_blank">Lihat PDF</a>
  <?php endif; ?>
</div>

</body>
</html>
