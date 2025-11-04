@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      
      <!-- Card Form -->
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-center text-white py-3 rounded-top-4"
             style="background: linear-gradient(90deg, #ff80b5, #ff98c1);">
          <h3 class="fw-bold mb-0">Tambah Produk</h3>
        </div>

        <div class="card-body bg-light p-4 p-md-5">
          <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Produk -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control shadow-sm" 
                     placeholder="Masukkan nama produk" required>
            </div>

            <!-- Harga Produk -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Harga Produk (Rp)</label>
              <input type="number" name="harga_produk" class="form-control shadow-sm" 
                     placeholder="Masukkan harga produk" required>
            </div>

            <!-- Kategori Produk -->
            <div class="mb-3">
              <label for="kategori_produk" class="form-label fw-semibold">Kategori Produk</label>
              <select id="kategori_produk" name="kategori_produk" class="form-select shadow-sm" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="Bunga Tangkai">Bunga Tangkai</option>
                <option value="Gantungan Kunci">Gantungan Kunci</option>
              </select>
            </div>

            <!-- Foto Produk -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Foto Produk</label>
              <input type="file" name="foto_produk" class="form-control shadow-sm">
              <small class="text-muted d-block mt-1">Format: JPG, PNG, maksimal 2MB</small>
            </div>

            <!-- Tombol Aksi -->
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-gradient-pink px-4 py-2 shadow-sm me-2">
                💾 Simpan
              </button>
              <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4 py-2 shadow-sm">
                ❌ Batal
              </a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- 🌸 Styling tambahan -->
<style>
body {
  background-color: #fff9fb;
  font-family: "Poppins", sans-serif;
}

/* Tombol gradient pink */
.btn-gradient-pink {
  background: linear-gradient(90deg, #ff8fab, #ffb6c1);
  color: white;
  border: none;
  border-radius: 10px;
  transition: all 0.3s ease;
}
.btn-gradient-pink:hover {
  background: linear-gradient(90deg, #ffb6c1, #ff8fab);
  transform: translateY(-2px);
  box-shadow: 0 4px 10px rgba(255, 182, 193, 0.4);
}

/* Efek hover pada card */
.card {
  transition: all 0.3s ease;
  background-color: #fff0f5;
}
.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 20px rgba(255, 182, 193, 0.4);
}

/* Responsif tambahan */
@media (max-width: 768px) {
  .card-header h3 {
    font-size: 1.3rem;
  }
  .btn {
    width: 100%;
    margin-bottom: 8px;
  }
}

@media (max-width: 576px) {
  .card-body {
    padding: 1.5rem !important;
  }
}
</style>
@endsection
