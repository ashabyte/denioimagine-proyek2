@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Tambah Pemesanan</h3>
    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Pelanggan</label>
            <select name="user_id" class="form-control" required>
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($user as $u)
                    <option value="{{ $u->id }}">{{ $u->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Layanan</label>
            <select name="layanan_id" class="form-control" required>
                <option value="">-- Pilih Layanan --</option>
                @foreach($layanan as $l)
                    <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Booking</label>
            <input type="date" name="tanggal_booking" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="pending">Pending</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
