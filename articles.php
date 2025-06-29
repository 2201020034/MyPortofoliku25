<?php
include 'Config/db.php';
$articles = mysqli_query($conn, "SELECT * FROM articles ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Artikel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
    }

    header {
      background-color: maroon;
      padding: 10px 30px;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1100px;
      margin: 0 auto;
    }

    .logo {
      color: white;
      font-size: 20px;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    nav ul li a:hover,
    nav ul li a.active {
      text-decoration: underline;
      color: #ffd5d5;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 30px 20px;
      text-align: center;
    }

    .container h2 {
      color: maroon;
      margin-bottom: 30px;
      font-size: 28px;
    }

    .articles {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      width: 280px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      font-size: 17px;
      color: maroon;
      margin-bottom: 10px;
      text-align: left;
    }

    .card p {
      font-size: 14px;
      color: #333;
      text-align: left;
      min-height: 40px;
    }

    .card a {
      display: inline-block;
      margin-top: 12px;
      background-color: maroon;
      color: white;
      padding: 8px 15px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
    }

    .card a.disabled {
      background-color: grey;
      cursor: not-allowed;
      pointer-events: none;
    }

    .card a:hover:not(.disabled) {
      background-color: #a10000;
    }

    footer {
      margin-top: 40px;
      padding: 20px;
      background-color: maroon;
      color: #fff;
      text-align: center;
    }
  </style>
</head>
<body>

<header>
  <div class="navbar">
    <div class="logo">Monalisa</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="articles.php" class="active">Articles</a></li>
        <li><a href="contact.php">Contact Me</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
  <h2>Artikel Terkait</h2>
  <div class="articles">
    <?php while($row = mysqli_fetch_assoc($articles)): ?>
      <div class="card">
        <h3><?= strtoupper(htmlspecialchars($row['judul'])) ?></h3>
        <p><?= htmlspecialchars(substr($row['ringkasan'], 0, 60)) ?>...</p>
        <?php if (!empty($row['file_pdf'])): ?>
          <a href="Assets/docs/<?= htmlspecialchars($row['file_pdf']) ?>" target="_blank">Lihat PDF</a>
        <?php else: ?>
          <a href="#" class="disabled">PDF Tidak Tersedia</a>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<footer>
  &copy; <?= date('Y') ?> Monalisa. All rights reserved.
</footer>

</body>
</html>
