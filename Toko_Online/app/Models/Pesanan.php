<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable=['id_barang','nama_pelanggan','alamat','no_hp','qty_pesanan','created_at'];
}
