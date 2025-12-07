@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Daftar Layanan</h3>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $layanan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $layanan->nama_layanan }}</td>
                <td>{{ $layanan->deskripsi }}</td>
                <td>Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                <td>
                    @if($layanan->gambar)
