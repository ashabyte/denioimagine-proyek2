@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Edit Pemesanan</h3>
    <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Pelanggan</label>
            <select name="user_id" class="form-control" required>
                @foreach($user as $u)
                    <option value="{{ $u->id }}" {{ $u->id == $pemesanan->user_id ? 'selected' : '' }}>
                        {{ $u->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Layanan</label>
            <select name="layanan_id" class="form-control" required>
                @foreach($layanan as $l)
                    <option value="{{ $l->id }}" {{ $l->id == $pemesanan->layanan_id ? 'selected' : '' }}>
                        {{ $l->nama_layanan }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Booking</label>
            <input type="date" name="tanggal_booking" class="form-control" value="{{ $pemesanan->tanggal_booking }}" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $pemesanan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="proses" {{ $pemesanan->status == 'proses' ? 'selected' : '' }}>Proses</option>
                <option value="selesai" {{ $pemesanan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control">{{ $pemesanan->catatan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pemesanan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
