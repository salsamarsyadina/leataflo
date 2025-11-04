@extends('layouts.app')

@section('content')
<!-- 🌸 Hero Section -->
<div class="p-5 mb-4 rounded-4 text-white shadow-lg" 
     style="background: linear-gradient(90deg, #ffb6c1, #ff9ec4, #ff80b5);">
  <div class="container py-5">
    <div class="row align-items-center justify-content-center text-center text-lg-start">
      
      <!-- Logo -->
      <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-center">
        <img src="{{ asset('assets/logo.jpeg') }}" 
             alt="Leata.flo Logo" 
             class="img-fluid rounded-4 shadow-sm"
             style="max-height: 300px; object-fit: cover;">
      </div>

      <!-- Teks Hero -->
      <div class="col-12 col-md-6">
        <h1 class="display-5 fw-bold mb-3">Selamat Datang di 🌷 Leata.flo</h1>
        <p class="fs-5 mb-4">
          Temukan keindahan dalam setiap bunga dan kerajinan tangan unik kami.  
          Kami menghadirkan produk buatan tangan dengan cinta 💕
        </p>
        <a href="{{ route('produk.index') }}" 
           class="btn btn-light btn-lg fw-semibold shadow-sm px-4 py-2">
          Jelajahi Produk
        </a>
      </div>

    </div>
  </div>
</div>
@endsection
