<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balaskisar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = 'sarankritik';
    public function sarankritik()
    {
        return $this->belongsTo(Sarankritik::class, 'sarankritik_id');
    }
}