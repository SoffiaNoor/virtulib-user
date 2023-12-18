<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Produk_Selesai extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'produk_selesai';
    protected $fillable = ['pengiriman', 'jumlah_barang', 'total_harga', "id_produk", 'name', 'seller', 'gambar', "description", "price", "stock"];
}