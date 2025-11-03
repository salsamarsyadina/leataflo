@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
<h3>Tambah Produk</h3>
<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Harga Produk</label>
    <input type="number" name="harga_produk" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Kategori Produk</label>
    <input type="text" name="kategori_produk" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi Produk</label>
    <textarea name="deskripsi_produk" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label>Foto Produk</label>
    <input type="file" name="foto_produk" class="form-control">
  </div>
  <button class="btn btn-primary">Simpan</button>
  <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
