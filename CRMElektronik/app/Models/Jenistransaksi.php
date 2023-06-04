<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenistransaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}