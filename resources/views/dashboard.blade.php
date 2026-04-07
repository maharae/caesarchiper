<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PPM SYAFI'UR ROHMAN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    /* HERO */
    .hero {
      height: 90vh;
      background: linear-gradient(rgba(220,53,69,0.7), rgba(0,0,0,0.7)),
                  url('img/bg.jpg') center/cover no-repeat;
    }

    /* Gambar hover */
    .img-hover {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .img-hover:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    h1, h2 {
      letter-spacing: 1px;
    }

    footer {
      font-size: 14px;
    }
  </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-danger shadow">
  <div class="container">
    <span class="navbar-brand fw-bold">PPM SYAFI'UR ROHMAN</span>
    
    <form action="{{ route('logout') }}" method="POST" class="d-inline">
      @csrf
      <button type="submit" class="btn btn-light btn-sm">Logout</button>
  </form>

  </div>
</nav>

<!-- HERO -->
<section class="hero text-center text-white d-flex align-items-center">
  <div class="container">
    <h1 class="fw-bold display-4">PPM SYAFI'UR ROHMAN</h1>
    <p class="lead">Profesional, Religius, dan Berdaya Juang</p>
  </div>
</section>

<!-- FOTO SANTRI -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold mb-4 text-danger">SELAMAT DATANG</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <img src="img/siswi 2.jpg" class="img-fluid rounded img-hover">
      </div>
      <div class="col-md-6">
        <img src="img/kbs 2.jpg" class="img-fluid rounded img-hover">
      </div>
    </div>
  </div>
</section>

<!-- SELAYANG PANDANG -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="text-danger fw-bold mb-3">Selayang Pandang</h2>
    <p class="text-muted" style="max-width: 800px; margin:auto;">
      PPM SYAFI'UR ROHMAN adalah lembaga pendidikan dan pengajaran berbasis agama Islam.
      Lembaga ini berada di bawah Yayasan Al-Manshurin yang bergerak di bidang pendidikan umum 
      dan pondok pesantren. Yayasan ini menangani sarana pendidikan formal dan non formal 
      dari pra sekolah hingga perguruan tinggi.  
      Secara resmi berdiri pada Senin, 10 Mei 2010 di Kabupaten Jember.
    </p>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-danger text-white text-center py-3">
  © 2026 PPM SYAFI'UR ROHMAN
</footer>

</body>
</html>