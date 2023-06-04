<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['barang', 'jenistransaksi', 'pelanggan', 'user'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function jenistransaksi()
    {
        return $this->belongsTo(Jenistransaksi::class, 'jenistransaksi_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}