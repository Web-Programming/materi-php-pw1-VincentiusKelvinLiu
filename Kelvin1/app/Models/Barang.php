<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'jumlah',
        'status',
        'harga',
        'tgl_input',
    ];
    protected $casts = [
        'status'    => 'boolean',
        'harga'     => 'decimal:2',
        'tgl_input' => 'date',
    ];
}