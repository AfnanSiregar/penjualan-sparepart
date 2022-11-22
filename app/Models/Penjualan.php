<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $primaryKey = 'no_faktur';
    protected $table = 'penjualans';
    protected $fillable = ['no_faktur', 'tgl_faktur', 'nama_konsumen', 'kode_barang', 'jumlah', 'harga_satuan', 'harga_total'];

    public function barangModel()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }

    use HasFactory;
}
