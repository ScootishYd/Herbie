<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Stok extends Model
{
    protected $table = 'stok';

    protected $fillable = [
        'id',
        'nama_barang',
        'persediaan',
        'satuan',
        'keterangan',
    ];
}
