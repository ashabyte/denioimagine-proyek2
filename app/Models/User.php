<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel (karena kamu pakai bentuk tunggal)
    protected $table = 'user';

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];

    // Relasi ke pemesanan (1 user bisa punya banyak pemesanan)
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
