<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tukarpoin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['pelanggan', 'poin'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
    public function poin()
    {
        return $this->belongsTo(Poin::class, 'poin_id');
    }

}