<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Portofolio Monalisa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #fdfdfd;
      color: #333;
    }

    .navbar {
      background-color: maroon;
      color: white;
      padding: 15px 0;
    }

    .navbar .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    .navbar .logo {
      font-size: 22px;
      font-weight: bold;
      color: white;
      text-decoration: none;
    }

    .navbar .nav-links a {
      color: white;
      margin-left: 25px;
      text-decoration: none;
      font-weight: 500;
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
      background-color: #fff;
    }

    .hero-content {
      display: flex;
      max-width: 1100px;
      width: 100%;
      background-color: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.1);
      align-items: center;
      gap: 40px;
    }

    .hero-image img {
      width: 250px;
      height: auto;
      border-radius: 16px;
      background-color: maroon;
      padding: 10px;
    }

    .hero-text h1 {
      color: maroon;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .hero-text p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      margin-top: 15px;
      padding: 12px 24px;
      background-color: maroon;
      color: white;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      font-size: 15px;
    }

    .container {
      max-width: 1600px;
      margin: 40px auto;
      padding: 0 50px;
    }

    section {
      margin-bottom: 60px;
    }

    h2 {
      color: maroon;
      text-align: center;
      margin-bottom: 30px;
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 25px;
      justify-content: center;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 12px;
    }

    .skill-box {
      background: #f0f0ed;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
    }

    .skill-box h4 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 8px;
      color: #222;
    }

    .skill-box p {
      font-size: 14px;
      color: #555;
    }

    .timeline-entry {
      border-left: 4px solid maroon;
      padding-left: 20px;
      margin-bottom: 40px;
      position: relative;
    }

    .timeline-entry::before {
      content: '';
      position: absolute;
      left: -9px;
      top: 0;
      width: 14px;
      height: 14px;
      background-color: maroon;
      border-radius: 50%;
    }

    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      padding-top: 20px;
    }

    .project-card {
      background-color: #eee;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .project-card img {
      width: 100%;
      max-height: 140px;
      object-fit: cover;
      border-radius: 8px;
    }

    .project-card h4 {
      margin: 15px 0 8px;
      font-size: 17px;
      color: maroon;
    }

    .project-card p {
      font-size: 14px;
      color: #444;
    }

    .project-card a {
      display: inline-block;
      margin-top: 12px;
      background-color: maroon;
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .project-card a:hover {
      background-color: #b22222;
    }

   footer {
  background-color: maroon;
  color: white;
  text-align: center;
  padding: 30px 20px;
  margin-top: 100px;
  width: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 14px;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
  position: relative;
}


  </style>
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <a href="index.php" class="logo">Monalisa</a>
      <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="articles.php">Articles</a>
        <a href="contact.php">Contact Me</a>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <div class="hero-image">
        <img src="assets/img/profil.png" alt="Foto Profil">
      </div>
      <div class="hero-text">
        <h1>Monalisa</h1>
        <p>Hallo! Saya Monalisa, mahasiswi Teknik Informatika di Universitas Maritim Raja Ali Haji (UMRAH). Saya memiliki ketertarikan besar dalam pengembangan web dan UI/UX Design.</p>
        <p>Saya pribadi yang senang belajar hal baru, dan percaya bahwa konsistensi adalah kunci menuju hasil terbaik.</p>
        <a href="Assets/docs/Monalisa_Cv.pdf" class="btn">Lihat CV</a>
      </div>
    </div>
  </section>

  <div class="container">
    <section>
      <h2>Skill Set</h2>
      <div class="skills">
        <div class="skill-box"><h4>HTML/CSS</h4><p>Level: Menengah</p></div>
        <div class="skill-box"><h4>JavaScript</h4><p>Level: Menengah</p></div>
        <div class="skill-box"><h4>PHP</h4><p>Level: Menengah</p></div>
        <div class="skill-box"><h4>MySQL</h4><p>Level: Menengah</p></div>
        <div class="skill-box"><h4>Git & GitHub</h4><p>Level: Menengah</p></div>
        <div class="skill-box"><h4>Figma/Canva</h4><p>Level: Mahir</p></div>
        <div class="skill-box"><h4>Python</h4><p>Level: Dasar</p></div>
        <div class="skill-box"><h4>UI/UX Design</h4><p>Level: Mahir</p></div>
      </div>
    </section>

    <section>
      <h2>Organization</h2>
      <div class="timeline">
        <div class="timeline-entry">
          <h4>Himpunan Mahasiswa Teknik Informatika (HMTI) - Divisi Media & Informasi</h4>
          <p>2022 - 2023</p>
        </div>
      </div>
    </section>

    <section>
      <h2>Activity</h2>
      <div class="timeline-entry">
        <h4>Panitia Sosialisasi Gemastik</h4>
        <p>2023</p>
      </div>
      <div class="timeline-entry">
        <h4>Panitia Yudisium FTTK</h4>
        <p>2023</p>
      </div>
      <div class="timeline-entry">
        <h4>Panitia LDK Jurusan Teknik Informatika</h4>
        <p>2023</p>
      </div>
    </section>
  </div>

  <div class="container">
    <section class="education">
      <h2>Education</h2>
      <div class="timeline-entry">
        <h4>Universitas Maritim Raja Ali Haji</h4>
        <p>S1 Teknik Informatika (2022 - Sekarang)</p>
      </div>
      <div class="timeline-entry">
        <h4>SMAn 1 Bunguran Utara</h4>
        <p>Jurusan IPS (2019 - 2022)</p>
      </div>
      <div class="timeline-entry">
        <h4>SMPN 001 Bunguran Utara</h4>
        <p>(2016 - 2019)</p>
      </div>
      <div class="timeline-entry">
        <h4>SDN 001 Bunguran Utara</h4>
        <p>(2011 - 2016)</p>
      </div>
      <div class="timeline-entry">
        <h4>TKN 001 Bunguran Utara</h4>
        <p>(2009 - 2011)</p>
      </div>
    </section>

    <section class="projects">
      <h2>Projects</h2>
      <div class="project-grid">
        <div class="project-card">
          <img src="assets/img/paa.jpg" alt="Project 1">
          <h4>Project Mata kuliah PAA</h4>
          <p>Smart Courier</p>
          <a href="https://github.com/2201020034/Smart-Kurir">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/global.jpg" alt="Project 2">
          <h4>UI aplikasi berita</h4>
          <p>GlobalNet - Mobile UI</p>
          <a href="Assets/docs/global.pdf">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/barang.jpg" alt="Project 3">
          <h4>Website  Sim peminjaman</h4>
          <p>Desain dan Implementasi Peminjaman Barang</p>
          <a href="Assets/docs/sim.pdf">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/inventaris.png" alt="Project 4">
          <h4>Desain Inventaris Salsa Marie</h4>
          <p>Desain</p>
          <a href="Assets/docs/mppl.pdf">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/kawal.jpg" alt="Project 5">
          <h4>Masyarakat Cerdas</h4>
          <p>Project Mata Kuliah</p>
          <a href="Assets/docs/Kaa.pdf">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/hotel.jpg" alt="Project 6">
          <h4>Project & Desain Hotel</h4>
          <p>UI Design Web</p>
          <a href="https://github.com/Marcel2201020012/stay.git">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/ikan.png" alt="Project 7">
          <h4>Desain Fishing Buddy</h4>
          <p>UI Design Figma</p>
          <a href="https://www.figma.com/design/vwGo9XlCbCJIYRx76dmCYU/FishingBuddy?node-id=0-1">Lihat Proyek</a>
        </div>
        <div class="project-card">
          <img src="assets/img/teknologi.png" alt="Project 8">
          <h4>Desain Arngren</h4>
          <p>UI Design Figma</p>
          <a href="https://www.figma.com/design/uuAyivNyZtJm5uJx8s0QTC/Study_Case_2_IMK?node-id=0-1&p=f">Lihat Proyek</a>
        </div>
      </div>
    </section>
  <footer>
    © 2025 Portofolio Monalisa. All rights reserved.
  </footer>
</body>
</html>