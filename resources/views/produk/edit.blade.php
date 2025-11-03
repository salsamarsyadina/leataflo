@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
<h3>Edit Produk</h3>
<form action="{{ route('produk.update', $produk) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
  </div>
  <div class="mb-3">
    <label>Harga Produk</label>
    <input type="number" name="harga_produk" class="form-control" value="{{ $produk->harga_produk }}" required>
  </div>
  <div class="mb-3">
    <label>Kategori Produk</label>
    <input type="text" name="kategori_produk" class="form-control" value="{{ $produk->kategori_produk }}" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi Produk</label>
    <textarea name="deskripsi_produk" class="form-control">{{ $produk->deskripsi_produk }}</textarea>
  </div>
  <div class="mb-3">
    <label>Foto Produk</label><br>
    @if($produk->foto_produk)
      <img src="{{ asset($produk->foto_produk) }}" style="width:150px; height:auto; margin-bottom:10px;">
    @endif
    <input type="file" name="foto_produk" class="form-control">
  </div>
  <button class="btn btn-primary">Simpan Perubahan</button>
  <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
