<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leata.flo - @yield('title')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff6f9;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Agar tinggi minimum setara tinggi layar */
      margin: 0;
    }

    main {
      flex: 1; /* Isi ruang kosong di antara navbar dan footer */
    }

    /* 🌸 Navbar gradasi pink */
    .navbar-gradient {
      background: linear-gradient(90deg, #ffb6c1, #ff9ec4, #ff80b5);
    }

    .nav-link {
      color: #fff !important;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      text-decoration: underline;
      transform: scale(1.05);
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: 600;
      font-size: 1.4rem;
      transition: transform 0.3s;
    }

    .navbar-brand:hover {
      transform: scale(1.05);
    }

    /* Tombol di navbar */
    .navbar .btn-light {
      transition: all 0.3s ease;
    }

    .navbar .btn-light:hover {
      background-color: #ffe2ec;
      transform: translateY(-2px);
      box-shadow: 0 3px 8px rgba(255, 182, 193, 0.4);
    }

    /* Responsive padding */
    .content-wrapper {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    @media (max-width: 576px) {
      .navbar-brand {
        font-size: 1.1rem;
      }
    }
  </style>
</head>

<body>
  <!-- 🌸 Navbar -->
  <nav class="navbar navbar-expand-lg navbar-gradient">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">🌸 Leata.flo</a>

      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('produk.index') ? 'fw-semibold' : '' }}" href="{{ route('produk.index') }}">
              Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tentang') ? 'fw-semibold' : '' }}" href="{{ route('tentang') }}">
              Tentang Kami
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- 🌷 Konten Utama -->
  <main class="container content-wrapper">
    @if(session('success'))
      <div class="alert alert-success text-center shadow-sm">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <!-- 🌺 Footer -->
  <footer class="text-center text-white py-3" 
          style="background: linear-gradient(90deg, #ff9ec4, #ffb6c1);">
    <p class="mb-0 small">© 2025 Leata.flo — Handmade with 💖</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
