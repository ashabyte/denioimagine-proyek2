<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'harga',
        'gambar',
    ];

    // Relasi ke pemesanan (1 layanan bisa punya banyak pemesanan)
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
