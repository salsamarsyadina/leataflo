<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk =Produk::orderBy('created_at', 'desc')->paginate(5);
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_produk' => 'required|max:255',
        'harga_produk' => 'required|numeric',
        'kategori_produk' => 'required|max:100',
        'foto_produk' => 'nullable|image|max:2048',
    ]);

    $produk = new Produk();
    $produk->nama_produk = $request->nama_produk;
    $produk->harga_produk = $request->harga_produk;
    $produk->kategori_produk = $request->kategori_produk;

    // ✅ simpan foto jika ada upload
    if ($request->hasFile('foto_produk')) {
        $file = $request->file('foto_produk');
        $name = $file->getClientOriginalName();

        // simpan ke folder storage/app/public/foto
        $file->storeAs('public/foto', $name);

        // simpan path yang bisa diakses browser ke database
        $produk->foto_produk = 'storage/foto/' . $name;
    }

    $produk->save();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
   }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $produk =Produk::orderBy('created_at', 'desc')->paginate(5);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga_produk' => 'required|numeric',
            'kategori_produk' => 'required|max:100',
            'deskripsi_produk' => 'nullable|string',
            'foto_produk' => 'nullable|image|max:2048',
        ]);

        // Ganti foto jika diupload baru
        if ($request->hasFile('foto_produk')) {
            // Hapus foto lama
            if ($produk->foto_produk) {
                $oldPath = str_replace('storage/', 'public/', $produk->foto_produk);
                if (Storage::exists($oldPath)) {
                    Storage::delete($oldPath);
                }
            }

            $file = $request->file('foto_produk');
            $name = time() . '_' . Str::slug($request->nama_produk) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto', $name);
            $validated['foto_produk'] = 'storage/foto/' . $name;
        }

        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->kategori_produk = $request->kategori_produk;

        // ganti foto jika ada
        if ($request->hasFile('foto_produk')) {
            $file = $request->file('foto_produk');
            $name = time() . '_' . Str::slug($request->nama_produk) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto', $name);
            $produk->foto_produk = 'storage/foto/' . $name;
        }

$produk->save();


        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if ($produk->foto_produk) {
            $oldPath = str_replace('storage/', 'public/', $produk->foto_produk);
            if (Storage::exists($oldPath)) {
                Storage::delete($oldPath);
            }
        }

        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    
    }
}
