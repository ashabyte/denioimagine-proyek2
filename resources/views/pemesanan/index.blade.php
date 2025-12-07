@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Data Pemesanan</h3>
    <a href="{{ route('pemesanan.create') }}" class="btn btn-primary mb-3">+ Tambah Pemesanan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Layanan</th>
                <th>Tanggal Booking</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p->user->nama }}</td>
                <td>{{ $p->layanan->nama_layanan }}</td>
                <td>{{ $p->tanggal_booking }}</td>
                <td>{{ ucfirst($p->status) }}</td>
                <td>{{ $p->catatan }}</td>
                <td>
                    <a href="{{ route('pemesanan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pemesanan.destroy', $p->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="text-center">Belum ada pemesanan</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
