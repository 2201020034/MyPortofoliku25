<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2eb;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #800000;
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
      max-width: 700px;
      margin: 40px auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .container h2 {
      text-align: center;
      color: #800000;
      margin-bottom: 10px;
    }

    .divider {
      height: 3px;
      width: 60px;
      margin: 10px auto 20px;
      background-color: #800000;
      border-radius: 3px;
    }

    .social {
      margin-bottom: 20px;
    }

    .social a {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
      text-decoration: none;
      color: #800000;
      font-weight: bold;
    }

    .social a img {
      width: 20px;
      margin-right: 8px;
    }

    form label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }

    form input, form textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: inherit;
    }

    form textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      background-color: #800000;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      margin-top: 15px;
      cursor: pointer;
    }

    button:hover {
      background-color: #a00000;
    }

    .fees {
      margin-top: 30px;
    }

    .fees h3 {
      text-align: center;
      color: #800000;
      margin-bottom: 15px;
    }

    .fee-cards {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .fee-card {
      flex: 1 1 30%;
      min-width: 200px;
      background-color: #fbeaea;
      border-left: 5px solid #800000;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      box-sizing: border-box;
    }

    .fee-card h4 {
      color: #800000;
      margin-top: 0;
    }

    .fee-card p {
      margin-bottom: 10px;
      color: #333;
    }

    footer {
      background-color: #800000;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: 50px;
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
        <li><a href="articles.php">Articles</a></li>
        <li><a href="contact.php" class="active">Contact Me</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
  <h2>Contact Me</h2>
  <div class="divider"></div>

  <div class="social">
    <p><strong>Social Media</strong></p>
    <a href="https://github.com/" target="_blank">
      <img src="assets/img/github-icon.png" alt="GitHub"> GitHub
    </a>
    <a href="https://instagram.com/mnalisaaaaa" target="_blank">
      <img src="assets/img/ig-icon.jpg" alt="Instagram"> Instagram
    </a>
  </div>

  <form action="contact-process.php" method="post">
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="pesan">Pesan:</label>
    <textarea name="pesan" id="pesan" required></textarea>

    <button type="submit">Kirim Pesan</button>
  </form>

  <div class="fees">
    <h3>Service Fees</h3>

    <div class="fee-cards">
      <div class="fee-card">
        <h4>Audit UI/UX dan Rekomendasi Desain</h4>
        <p><strong>Harga:</strong> Rp. 150.000</p>
        <p>Menganalisis tampilan website/aplikasi kamu dari sisi UI/UX dan memberikan saran perbaikan berdasarkan prinsip desain modern.</p>
      </div>

      <div class="fee-card">
        <h4>Desain UI Aplikasi Mobile (Figma)</h4>
        <p><strong>Harga:</strong> Rp. 250.000</p>
        <p>Desain tampilan aplikasi mobile (Android/iOS) menggunakan Figma. Sudah termasuk 3–5 halaman seperti login, home, dan profil. Bisa revisi 2x.</p>
      </div>

      <div class="fee-card">
        <h4>Pembuatan Website Simple (Statik)</h4>
        <p><strong>Harga:</strong> Rp. 300.000</p>
        <p>Website statik 1–3 halaman (HTML/CSS/JS), seperti landing page atau profil usaha. Sudah responsif dan SEO friendly. Revisi 2x.</p>
      </div>
    </div>
  </div>
</div>

<footer>
  © Monalisa 2025. All rights reserved.
</footer>

</body>
</html>
