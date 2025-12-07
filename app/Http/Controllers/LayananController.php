<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Tampilkan semua data layanan
     */
    public function index()
    {
        $data = Layanan::all();
        return view('layanan.index', compact('data'));
    }

    /**
     * Tampilkan form tambah layanan
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Simpan data layanan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar_layanan', 'public');
        }

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambar
        ]);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit layanan
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Update data layanan
     */
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $request->validate([
            'nama_layanan' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambar = $layanan->gambar;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar_layanan', 'public');
        }

        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambar
        ]);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    /**
     * Hapus layanan
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus!');
    }
}
