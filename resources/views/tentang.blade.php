@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">

      <!-- 🌸 Card utama -->
      <div class="card shadow-lg border-0 rounded-4" style="background-color: #fff0f5;">
        <div class="card-header text-center rounded-top-4 py-3"
             style="background: linear-gradient(90deg, #ffb6c1, #ff69b4); color: white;">
          <h3 class="fw-bold mb-0">🌸 Leata.flo 🌸</h3>
        </div>

        <div class="card-body text-center px-4 px-md-5 py-4">

          <p class="text-muted mb-4">
            <strong>UMKM Palembang</strong> yang menjual buket dan gantungan kunci handmade berbahan kawat bulu.
          </p>

          <h5 class="fw-bold mb-3" style="color: #ff69b4;">Tentang Kami</h5>
          <p class="text-secondary">
            <strong>Leata.flo</strong> berdiri sejak <strong>April 2025</strong> dan menawarkan berbagai macam buket serta gantungan kunci
            yang dapat di-custom sesuai permintaan pelanggan.
            <br class="d-none d-sm-block">
            Produk dibuat dengan cinta dan kreativitas untuk memberikan hadiah yang berkesan bagi setiap pelanggan.
          </p>

          <hr class="my-4" style="border-color: #ffc0cb;">

          <h5 class="fw-bold mb-3" style="color: #ff69b4;">Jenis Produk</h5>
          <div class="d-flex flex-column align-items-center mb-3 small">
            <p class="mb-1">🌷 <strong>Gantungan Kunci</strong> — Rp 7.000 – Rp 12.000</p>
            <p>💐 <strong>Bunga Tangkai</strong> — Rp 15.000 – Rp 20.000</p>
          </div>

          <p class="mb-4">
            Instagram: 
            <a href="https://instagram.com/leata.flo" target="_blank" 
               class="fw-semibold link-underline link-underline-opacity-0"
               style="color: #ff69b4;">
              @leata.flo
            </a>
          </p>

          <a href="{{ route('produk.index') }}" 
             class="btn btn-lg px-4 py-2 rounded-pill shadow-sm"
             style="background: linear-gradient(90deg, #ff69b4, #ff8ac5); border: none; color: white;">
            <i class="bi bi-bag-heart me-2"></i> Lihat Produk
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🌷 Styling tambahan -->
<style>
  body {
    background-color: #fff9fb;
    font-family: "Poppins", sans-serif;
  }

  .card {
    transition: all 0.3s ease;
  }

  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(255, 182, 193, 0.5);
  }

  .btn:hover {
    background: linear-gradient(90deg, #ff8ac5, #ffb6c1);
  }

  /* 🌸 Responsif tambahan */
  @media (max-width: 768px) {
    .card-body {
      padding: 2rem 1.2rem;
    }
    h3 {
      font-size: 1.6rem;
    }
    h5 {
      font-size: 1.1rem;
    }
  }

  @media (max-width: 576px) {
    .btn {
      font-size: 0.9rem;
      padding: 0.6rem 1rem;
    }
    p {
      font-size: 0.95rem;
    }
  }
</style>
@endsection
