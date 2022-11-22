<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'kode_barang';
    protected $table = 'barangs';
    protected $fillable = ['kode_barang', 'nama_barang', 'harga_jual', 'harga_beli', 'satuan', 'kategori'];

    use HasFactory;
}
