<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'user_id',
        'layanan_id',
        'tanggal_booking',
        'status',
        'catatan',
    ];

    // Relasi ke user (setiap pemesanan dimiliki oleh 1 user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke layanan (setiap pemesanan berhubungan dengan 1 layanan)
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
