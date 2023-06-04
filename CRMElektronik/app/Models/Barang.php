<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    public function jenisbarang()
    {
        return $this->belongsTo(Jenisbarang::class, 'jenisbarang_id');
    }

    use HasFactory;
    use SoftDeletes;

    // guarded harus array
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    // ini bisa dihapus
    // protected $primaryKey = 'id';

    protected $with = 'jenisbarang';



}

// public function transaksi()
// {
//     return $this->hasMany(Transaksi::class);
// }