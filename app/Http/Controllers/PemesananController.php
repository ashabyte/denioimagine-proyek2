<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Tampilkan semua data pemesanan
     */
    public function index()
    {
        $data = Pemesanan::with(['user', 'layanan'])->get();
        return view('pemesanan.index', compact('data'));
    }

    /**
     * Form tambah pemesanan
     */
    public function create()
    {
        $layanan = Layanan::all();
        $user = User::all();
        return view('pemesanan.create', compact('layanan', 'user'));
    }

    /**
     * Simpan data pemesanan
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'layanan_id' => 'required',
            'tanggal_booking' => 'required|date',
            'status' => 'required',
            'catatan' => 'nullable'
        ]);

        Pemesanan::create($request->all());
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil ditambahkan!');
    }

    /**
     * Form edit pemesanan
     */
    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $layanan = Layanan::all();
        $user = User::all();
        return view('pemesanan.edit', compact('pemesanan', 'layanan', 'user'));
    }

    /**
     * Update data pemesanan
     */
    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $request->validate([
            'user_id' => 'required',
            'layanan_id' => 'required',
            'tanggal_booking' => 'required|date',
            'status' => 'required',
            'catatan' => 'nullable'
        ]);

        $pemesanan->update($request->all());
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil diperbarui!');
    }

    /**
     * Hapus pemesanan
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil dihapus!');
    }
}
