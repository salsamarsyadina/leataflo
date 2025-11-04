@extends('layouts.app')
@section('title', 'Daftar Produk')

@section('content')
<div class="container mt-5">
    <h1 class="text-center fw-bold mb-4" style="color: #ff69b4;">🌸 Daftar Produk 🌸</h1>

    <div class="text-end mb-4">
        <a href="{{ route('produk.create') }}" 
           class="btn btn-pink shadow-sm fw-semibold px-4 py-2 rounded-pill">
           + Tambah Produk
        </a>
    </div>

    @if($produk->count())
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($produk as $item)
                <div class="col">
                    <div class="card h-100 shadow border-0 rounded-4"
                         style="background-color: #fff0f5; transition: all 0.3s ease;">
                        @if($item->foto_produk)
                            <img src="{{ asset($item->foto_produk) }}" 
                                 class="card-img-top rounded-top-4"
                                 alt="Foto Produk" 
                                 style="height: 400px; object-fit: cover;">
                        @else
                            <img src="{{ asset('no-image.jpg') }}" 
                                 class="card-img-top" 
                                 alt="Tidak ada foto" 
                                 style="height: 250px; object-fit: cover;">
                        @endif

                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold" style="color: #ff1493;">
                                {{ $item->nama_produk }}
                            </h5>
                            <p class="fw-bold" style="color: #ff69b4;">
                                Rp {{ number_format($item->harga_produk, 0, ',', '.') }}
                            </p>
                            <p class="text-muted small mb-1">
                                Kategori: {{ ucfirst($item->kategori_produk) }}
                            </p>
                            <p class="small text-secondary">
                                {{ Str::limit($item->deskripsi_produk, 80) }}
                            </p>
                        </div>

                        <div class="card-footer text-center bg-transparent border-0 pb-4">
                            <a href="{{ route('produk.edit', $item->id) }}" 
                               class="btn btn-sm btn-outline-pink rounded-pill me-2">
                               ✏️ Edit
                            </a>
                            <form action="{{ route('produk.destroy', $item->id) }}" 
                                  method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill delete-btn">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <div class="custom-pagination">
                {{ $produk->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>

    @else
        <p class="text-center text-muted mt-5">Belum ada produk yang ditampilkan 🌷</p>
    @endif
</div>

<!-- CSS tambahan untuk tema pink -->
<style>
body {
    background-color: #fff9fb;
    font-family: 'Poppins', sans-serif;
}

.btn-pink {
    background: linear-gradient(90deg, #ff69b4, #ff8ac5);
    color: white;
    border: none;
}
.btn-pink:hover {
    background: linear-gradient(90deg, #ff8ac5, #ffb6c1);
    color: white;
}

.btn-outline-pink {
    border: 1.5px solid #ff69b4;
    color: #ff69b4;
}
.btn-outline-pink:hover {
    background-color: #ff69b4;
    color: white;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(255, 182, 193, 0.4);
}
</style>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const form = this.closest('form');
            Swal.fire({
                title: 'Yakin ingin hapus?',
                text: "Produk ini akan dihapus secara permanen.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ff69b4',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                background: '#fff9fb',
                color: '#333',
                customClass: {
                    popup: 'rounded-4 shadow'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>
@endsection
